<?php

$c['assets'] = "/assets";
$c['temp'] = $c['assets']."/temp_upload";

// Backoffice Assets
$c['bo'] = [
	'css' 		=> $c['assets']."/backoffice/css",
	'js' 		=> $c['assets']."/backoffice/js",
	'font' 		=> $c['assets']."/backoffice/fonts",
	'vendor' 	=> $c['assets']."/backoffice/vendor",
	'images' 	=> $c['assets']."/backoffice/img",
	'user' 		=> $c['assets']."/backoffice/images/users",
	'icon' 		=> $c['assets']."/backoffice/images/icons",
	'budget' 	=> $c['assets']."/backoffice/images/budget",
];

return $c;