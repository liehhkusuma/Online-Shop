<?php

$c['max_file_size'] = "209715200"; // 200M
$c['max_image_size'] = "20000000";
$c['max_doc_size'] = "50000000";
$c['max_video_size'] = $c['max_file_size'];

$c['image_type'] = "gif,jpeg,jpg,png,bmp";
$c['document_type'] = "txt,pdf,doc,xls,docx,xlsx";
$c['video_type'] = "mpeg,avi,flv,mp4,webm,swf";

/**
* File Uploader Module
* ====================================================================
* File Name format : {stamp} , {filename} , {filename[10]}
*/

/**
 Users Documents
*/
// $c['users_document']['path'] = $c['path_bo_dn']['documents'];
// $c['users_document']['nameformat'] = "{stamp}_{filename[10]}";


/**
* Crop Uploader Module
* =====================================================================
* Start - Image files configuration Image orientation options
* Available options: widen, heighten, special, square, crop;
* Image Name format : {stamp} , {filename} , {filename[10]}
*/
$c['image_quality'] = 90;

/** 
 Users Photo
*/
$c['bo_users'] = [
	'path' => config('path.bo.user'),
	'rule_type' => $c['image_type'],
	'nameformat' => "{stamp}_{filename[10]}",
	'img_ratio' => 1,
	'img_orientation' => "square",
	'imgsize' => [
		"" => [250,250],
		"sm" => [100,100],
	],
	'imgshow' => "",
];

/** 
 Users Photo
*/
$c['bgt_transaction'] = [
	'path' => config('path.bo.budget'),
	'rule_type' => $c['image_type'].",".$c['document_type'].",".$c['video_type'],
	'nameformat' => "{stamp}_{filename[10]}",
	'img_ratio' => 1,
	'img_orientation' => "square",
	'imgsize' => [
		"" => [250,250],
		"sm" => [100,100],
	],
	'imgshow' => "",
];

return $c;