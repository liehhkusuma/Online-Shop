<?php

/**
| Page Title
*/

/* Users */
$conf['page']['bo_users'] = [
	'parent' => 'Users Management',
	'name' => 'Users',
	'type' => 'User',
];
/* Menu */
$conf['page']['bo_menu'] = [
	'parent' => 'Users Management',
	'name' => 'Menu',
	'type' => 'Menu',
];
/* Module */
$conf['page']['bo_module'] = [
	'parent' => 'Users Management',
	'name' => 'Module',
	'type' => 'Module',
];
/* Access Level */
$conf['page']['bo_user_level'] = [
	'parent' => 'Users Management',
	'name' => 'Module Access',
	'type' => 'Access',
];


return $conf;