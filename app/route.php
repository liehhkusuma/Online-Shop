<?php

// Testing
app()->get("/test(:one(/:two(/:tree)))", function(){
	// echo $_SESSION['CRSF_TOKEN'];die;
	echo CRSF::protect();
});

app()->post("/socket", function(){
	require "socket.php";
});

/* Javascript Lang */
app()->get('/javascript_lang', function(){
	$res = "";
	foreach (config('jsvar') as $var => $val) {
		$val = is_array($val) ? json_encode($val) : "'$val'";
		$res .= "$$var = $val;";
	}
	$resp = app()->response();
	$resp['Content-Type'] = 'application/javascript';
	return $resp->body($res);
})->name('config:javascript');

/* Authentication */
app()->get("/", "AuthCtrl:index");
app()->post("/dologin", "AuthCtrl:dologin");
app()->get("/dologout", "AuthCtrl:dologout");

/* Dashboard */
app()->get("/dashboard", "DashboardCtrl:list");
app()->get("/profile", "DashboardCtrl:profile");
app()->post("/update-profile", "DashboardCtrl:updateProfile");

/*
| Production
*/
// Contact Person
app()->get("/contact-person(/:paging)", "ContPrsnCtrl:list");
app()->get("/contact-person/detail/:id", "ContPrsnCtrl:detail");
app()->get("/contact-person/add", "ContPrsnCtrl:add");
app()->get("/contact-person/edit/:id", "ContPrsnCtrl:edit");
app()->post("/contact-person/store", "ContPrsnCtrl:store");
app()->post("/contact-person/update/:id", "ContPrsnCtrl:update");
app()->post("/contact-person/delete/:id", "ContPrsnCtrl:delete");
app()->post("/contact-person/store_contact", "ContPrsnCtrl:store_contact");

// CLients
app()->get("/production-clients(/:paging)", "ProdClientsCtrl:list");
app()->get("/production-clients/detail/:id", "ProdClientsCtrl:detail");
app()->get("/production-clients/add", "ProdClientsCtrl:add");
app()->get("/production-clients/edit/:id", "ProdClientsCtrl:edit");
app()->post("/production-clients/store", "ProdClientsCtrl:store");
app()->post("/production-clients/update/:id", "ProdClientsCtrl:update");
app()->post("/production-clients/delete/:id", "ProdClientsCtrl:delete");
app()->post("/production-clients/store_contact", "ProdClientsCtrl:store_contact");

// Projects
app()->get("/production-projects(/:paging)", "ProdProjectsCtrl:list");
app()->get("/production-projects/detail/:id", "ProdProjectsCtrl:detail");
app()->get("/production-projects/add", "ProdProjectsCtrl:add");
app()->get("/production-projects/edit/:id", "ProdProjectsCtrl:edit");
app()->post("/production-projects/store", "ProdProjectsCtrl:store");
app()->post("/production-projects/update/:id", "ProdProjectsCtrl:update");
app()->post("/production-projects/delete/:id", "ProdProjectsCtrl:delete");
app()->post("/production-projects/store_client", "ProdProjectsCtrl:store_client");
app()->post("/production-projects/store_contact", "ProdProjectsCtrl:store_contact");

// Documents
app()->get("/production-docs(/:paging)", "ProdDocsCtrl:list");
app()->get("/production-docs/detail/:id", "ProdDocsCtrl:detail");
app()->get("/production-docs/add", "ProdDocsCtrl:add");
app()->get("/production-docs/edit/:id", "ProdDocsCtrl:edit");
app()->post("/production-docs/store", "ProdDocsCtrl:store");
app()->post("/production-docs/update/:id", "ProdDocsCtrl:update");
app()->post("/production-docs/delete/:id", "ProdDocsCtrl:delete");
app()->post("/production-docs/store_client", "ProdDocsCtrl:store_client");
app()->post("/production-docs/store_project", "ProdDocsCtrl:store_project");
app()->post("/production-docs/store_contact", "ProdDocsCtrl:store_contact");
app()->post("/production-docs/get_doc_type", "ProdDocsCtrl:get_doc_type");

/*
| Master
*/
// Document Access Type
app()->get("/master-doc-access-type(/:paging)", "MaDocAccessTypeCtrl:list");
app()->get("/master-doc-access-type/detail/:id", "MaDocAccessTypeCtrl:detail");
app()->get("/master-doc-access-type/add", "MaDocAccessTypeCtrl:add");
app()->get("/master-doc-access-type/edit/:id", "MaDocAccessTypeCtrl:edit");
app()->post("/master-doc-access-type/store", "MaDocAccessTypeCtrl:store");
app()->post("/master-doc-access-type/update/:id", "MaDocAccessTypeCtrl:update");
app()->post("/master-doc-access-type/delete/:id", "MaDocAccessTypeCtrl:delete");

// Document Departement
app()->get("/master-doc-departement(/:paging)", "MaDocDepartementCtrl:list");
app()->get("/master-doc-departement/detail/:id", "MaDocDepartementCtrl:detail");
app()->get("/master-doc-departement/add", "MaDocDepartementCtrl:add");
app()->get("/master-doc-departement/edit/:id", "MaDocDepartementCtrl:edit");
app()->post("/master-doc-departement/store", "MaDocDepartementCtrl:store");
app()->post("/master-doc-departement/update/:id", "MaDocDepartementCtrl:update");
app()->post("/master-doc-departement/delete/:id", "MaDocDepartementCtrl:delete");

// Document Type
app()->get("/master-doc-type(/:paging)", "MaDocTypeCtrl:list");
app()->get("/master-doc-type/detail/:id", "MaDocTypeCtrl:detail");
app()->get("/master-doc-type/add", "MaDocTypeCtrl:add");
app()->get("/master-doc-type/edit/:id", "MaDocTypeCtrl:edit");
app()->post("/master-doc-type/store", "MaDocTypeCtrl:store");
app()->post("/master-doc-type/update/:id", "MaDocTypeCtrl:update");
app()->post("/master-doc-type/delete/:id", "MaDocTypeCtrl:delete");

// Document Product Type
app()->get("/master-doc-product-type(/:paging)", "MaDocProdTypeCtrl:list");
app()->get("/master-doc-product-type/detail/:id", "MaDocProdTypeCtrl:detail");
app()->get("/master-doc-product-type/add", "MaDocProdTypeCtrl:add");
app()->get("/master-doc-product-type/edit/:id", "MaDocProdTypeCtrl:edit");
app()->post("/master-doc-product-type/store", "MaDocProdTypeCtrl:store");
app()->post("/master-doc-product-type/update/:id", "MaDocProdTypeCtrl:update");
app()->post("/master-doc-product-type/delete/:id", "MaDocProdTypeCtrl:delete");

// Budget Type
app()->get("/master-budget-type(/:paging)", "MaBgtTypeCtrl:list");
app()->get("/master-budget-type/detail/:id", "MaBgtTypeCtrl:detail");
app()->get("/master-budget-type/add", "MaBgtTypeCtrl:add");
app()->get("/master-budget-type/edit/:id", "MaBgtTypeCtrl:edit");
app()->post("/master-budget-type/store", "MaBgtTypeCtrl:store");
app()->post("/master-budget-type/update/:id", "MaBgtTypeCtrl:update");
app()->post("/master-budget-type/delete/:id", "MaBgtTypeCtrl:delete");

// Budget Category
app()->get("/master-budget-category(/:paging)", "MaBgtCategoryCtrl:list");
app()->get("/master-budget-category/detail/:id", "MaBgtCategoryCtrl:detail");
app()->get("/master-budget-category/add", "MaBgtCategoryCtrl:add");
app()->get("/master-budget-category/edit/:id", "MaBgtCategoryCtrl:edit");
app()->post("/master-budget-category/store", "MaBgtCategoryCtrl:store");
app()->post("/master-budget-category/update/:id", "MaBgtCategoryCtrl:update");
app()->post("/master-budget-category/delete/:id", "MaBgtCategoryCtrl:delete");

// Budget Transaction
app()->get("/budget-transaction(/:paging)", "BgtTransactionCtrl:list");
app()->get("/budget-transaction/detail/:id", "BgtTransactionCtrl:detail");
app()->get("/budget-transaction/add", "BgtTransactionCtrl:add");
app()->get("/budget-transaction/edit/:id", "BgtTransactionCtrl:edit");
app()->post("/budget-transaction/store", "BgtTransactionCtrl:store");
app()->post("/budget-transaction/update/:id", "BgtTransactionCtrl:update");
app()->post("/budget-transaction/delete/:slug", "BgtTransactionCtrl:delete");
app()->post("/budget-transaction/store_category", "BgtTransactionCtrl:store_category");
app()->post("/budget-transaction/store_file", "BgtTransactionCtrl:store_file");
app()->post("/budget-transaction/update_file", "BgtTransactionCtrl:update_file");
app()->post("/budget-transaction/list_file", "BgtTransactionCtrl:list_file");
app()->get("/budget-transaction/print", "BgtTransactionCtrl:print");

/*
| User Management
*/
// Users List
app()->get("/users(/:paging)", "UserCtrl:list");
app()->get("/users/detail/:id", "UserCtrl:detail");
app()->get("/users/add", "UserCtrl:add");
app()->get("/users/edit/:id", "UserCtrl:edit");
app()->post("/users/store", "UserCtrl:store");
app()->post("/users/update/:id", "UserCtrl:update");
app()->post("/users/delete/:id", "UserCtrl:delete");

// Document Departement
app()->get("/menu(/:paging)", "MenuCtrl:list");
app()->get("/menu/detail/:id", "MenuCtrl:detail");
app()->get("/menu/add", "MenuCtrl:add");
app()->get("/menu/edit/:id", "MenuCtrl:edit");
app()->post("/menu/store", "MenuCtrl:store");
app()->post("/menu/update/:id", "MenuCtrl:update");
app()->post("/menu/delete/:id", "MenuCtrl:delete");

// Module List
app()->get("/module(/:paging)", "ModuleCtrl:list");
app()->get("/module/detail/:id", "ModuleCtrl:detail");
app()->get("/module/add", "ModuleCtrl:add");
app()->get("/module/edit/:id", "ModuleCtrl:edit");
app()->post("/module/store", "ModuleCtrl:store");
app()->post("/module/update/:id", "ModuleCtrl:update");
app()->post("/module/delete/:id", "ModuleCtrl:delete");

// Document Product Type
app()->get("/module-access(/:paging)", "ModuleAccessCtrl:list");
app()->get("/module-access/detail/:id", "ModuleAccessCtrl:detail");
app()->get("/module-access/add", "ModuleAccessCtrl:add");
app()->get("/module-access/edit/:id", "ModuleAccessCtrl:edit");
app()->post("/module-access/store", "ModuleAccessCtrl:store");
app()->post("/module-access/update/:id", "ModuleAccessCtrl:update");
app()->post("/module-access/delete/:id", "ModuleAccessCtrl:delete");

/* Video Iframe */
app()->get("/videoiframe", function(){
	return view('layout.video', ['video' => get('video')]);
})->name('videoiframe');

/* Ajax */
app()->post("/ajax/:method", "AjaxCtrl:index");

/* Initial Image */
app()->get("/initial_image/:init", function($init){
	$fontname = assets('bo.font', true)."/lato/Lato-Bla-webfont.ttf";
	$fontsize = 18;
	$string = $init;
	$dimensions = imagettfbbox($fontsize, 0, $fontname, $string);

	$width = $dimensions[4] + 24;
	$height = 50;
	$im = imagecreate($width, $height);
	$colorhex = str2color($string);
	list($r,$g,$b) = hex2rgb($colorhex);

	// White background and blue text
	$bg = imagecolorallocate($im, $r, $g, $b);
	$textcolor = imagecolorallocate($im, 255, 255, 255);

	// Center text
	// pd($dimensions);
	$x = ceil(($width - $dimensions[4]) / 2);

	imagettftext($im, $fontsize, 0, $x, 32, $textcolor, $fontname, $string);

	// Output the image
	header('Content-type: image/png');

	imagepng($im);
	imagedestroy($im);
	return $im;

})->name('initial_image');

// Generate Dropbox
app()->get('/generate_dropbox', function() {
	// pd(DtProjectsElq::where(['dpro_id' => 14])->get()->toArray());
	$dc_get = DtClientsElq::get();
	foreach($dc_get as $dc){
		$dpro_get = DtProjectsElq::where(['dc_id' => $dc['dc_id']])->orderBy('dpro_create_date', 'asc')->get();
		$i = 1;
		foreach ($dpro_get as $dpro) {
			list($cli_num, $year) = explode("-",$dc['dc_cli_num']);
			$pro_fullnum = (intval($cli_num) + $i )."-". date("y", strtotime($dpro['dpro_create_date']));
			$dpro->update(['dpro_number' => $pro_fullnum]);
			Gen::DBXCreate($dpro);
			$i++;
		}
	}
});