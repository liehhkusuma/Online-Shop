<?php
define('is_main',1);
include 'configurations/config.inc.php';

/* Nav */
$nav_category = 'Home';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this_site; ?></title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $link_css; ?>/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $link_css; ?>/style.css">
    <link rel="stylesheet" href="<?php echo $link_css; ?>/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <?php include 'includes/header.inc.php';?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Dashboard Galih Kusuma</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-promo">
                        <a href="<?php echo $list_shopping; ?>"><i class="fa fa-truck"></i></a>
                        <p>My Shopping List</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-promo">
                        <a href="<?php echo $update_account; ?>"><i class="fa fa-lock"></i></a>
                        <p>Update Account </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-promo">
                        <a href="<?php echo $update_data; ?>"><i class="fa fa-user"></i></a>
                        <p>Update Data</p>
                    </div>
                </div>
            </div>
            <br> <br> <br> <br>
        </div>
    </div>


    <?php include 'includes/footer.inc.php';?>
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="<?php echo $link_js; ?>/owl.carousel.min.js"></script>
    <script src="<?php echo $link_js; ?>/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="<?php echo $link_js; ?>/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="<?php echo $link_js; ?>/main.js"></script>
  </body>
</html>