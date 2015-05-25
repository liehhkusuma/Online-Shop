<?php namespace Boling\Views;

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Engines\PhpEngine;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\FileViewFinder;
use Illuminate\View\Environment;
use Slim\Views;

class Boling_Blade {

	/**
	 * Array containg paths where to look for blade files
	 * @var array
	 */
	public $viewPaths;

	/**
	 * Location where to store cached views
	 * @var string
	 */
	public $cachePath;

	/**
	 * @var Illuminate\Container\Container
	 */
	protected $container;

	/**
	 * @var Illuminate\View\Environment
	 */
	protected $instance;

	/**
	 * Initialize class
	 * @param array  $viewPaths
	 * @param string $cachePath
	 */
	function __construct($viewPaths = array(), $cachePath) {

		$this->container = new Container;

		$this->viewPaths = (array) $viewPaths;

		$this->cachePath = $cachePath;

		$this->registerFilesystem();

		$this->registerEvents();

		$this->registerEngineResolver();

		$this->registerViewFinder();

		$this->instance = $this->registerEnvironment();
	}

	public function view()
	{
		return $this->instance;
	}

	public function registerFilesystem()
	{
		$this->container->bindShared('files', function(){
			return new Filesystem;
		});
	}
	public function registerEvents()
	{
		$this->container->bindShared('events', function(){
			return new Dispatcher;
		});
	}
	/**
	 * Register the engine resolver instance.
	 *
	 * @return void
	 */
	public function registerEngineResolver()
	{
		$me = $this;

		$this->container->bindShared('view.engine.resolver', function($app) use ($me)
		{
			$resolver = new EngineResolver;

			// Next we will register the various engines with the resolver so that the
			// environment can resolve the engines it needs for various views based
			// on the extension of view files. We call a method for each engines.
			foreach (array('php', 'blade') as $engine)
			{
				$me->{'register'.ucfirst($engine).'Engine'}($resolver);
			}

			return $resolver;
		});
	}

	/**
	 * Register the PHP engine implementation.
	 *
	 * @param  \Illuminate\View\Engines\EngineResolver  $resolver
	 * @return void
	 */
	public function registerPhpEngine($resolver)
	{
		$resolver->register('php', function() { return new PhpEngine; });
	}

	/**
	 * Register the Blade engine implementation.
	 *
	 * @param  \Illuminate\View\Engines\EngineResolver  $resolver
	 * @return void
	 */
	public function registerBladeEngine($resolver)
	{
		$me = $this;
		$app = $this->container;

		// The Compiler engine requires an instance of the CompilerInterface, which in
		// this case will be the Blade compiler, so we'll first create the compiler
		// instance to pass into the engine so it can compile the views properly.
		$this->container->bindShared('blade.compiler', function($app) use ($me)
		{
			$cache = $me->cachePath;

			return new BladeCompiler($app['files'], $cache);
		});

		$resolver->register('blade', function() use ($app)
		{
			return new CompilerEngine($app['blade.compiler'], $app['files']);
		});
	}

	/**
	 * Register the view finder implementation.
	 *
	 * @return void
	 */
	public function registerViewFinder()
	{
		$me = $this;
		$this->container->bindShared('view.finder', function($app) use ($me)
		{
			$paths = $me->viewPaths;

			return new FileViewFinder($app['files'], $paths);
		});
	}

	/**
	 * Register the view environment.
	 *
	 * @return void
	 */
	public function registerEnvironment()
	{
		// Next we need to grab the engine resolver instance that will be used by the
		// environment. The resolver will be used by an environment to get each of
		// the various engine implementations such as plain PHP or Blade engine.
		$resolver = $this->container['view.engine.resolver'];

		$finder = $this->container['view.finder'];

		$env = new Environment($resolver, $finder, $this->container['events']);

		// We will also set the container instance on this view environment since the
		// view composers may be classes registered in the container, which allows
		// for great testable, flexible composers for the application developer.
		$env->setContainer($this->container);

		return $env;
	}

}

class Blade extends \Slim\View
{
    /**
     * @var string The path to the Blade code directory WITHOUT the trailing slash
     */
    public $parserDirectory = null;

    /**
     * @var array The options for the Blade environment, see
     */
    public $parserOptions = array();

    /**
     * @var BladeEnvironment The Blade environment for rendering templates.
     */
    private $parserInstance = null;

    /**
     * Render Blade Template
     *
     * This method will output the rendered template content
     *
     * @param string $template The path to the Blade template, relative to the Blade templates directory.
     * @param null $data
     * @return string
     */
    public function render($template, $data = null)
    {

        $env = $this->getInstance();
        
        $parser = $env->view();
        $data = array_merge($this->all(), (array) $data);

        try {
            $output = $env->view()->make($template, $data);
            $output = $output->__toString();
        } catch (Exception $e) {
			throw new \RuntimeException($e->getMessage());
        }

        return $output;
    }

    /**
     * Creates new BladeEnvironment if it doesn't already exist, and returns it.
     *
     * @return \Blade_Environment
     */
    public function getInstance()
    {
        if (!$this->parserInstance) {
            $views = $this->getTemplatesDirectory().'/';
			if(isset($this->parserOptions['cache'])) {
				$cache = $this->parserOptions['cache'];
			} else {
				throw new \RuntimeException('Cannot set the Blade cache directory');
			}
            $this->parserInstance = new Boling_Blade($views, $cache);
        }

        return $this->parserInstance;
    }

}