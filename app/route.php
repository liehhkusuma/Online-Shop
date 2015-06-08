<?php

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

app()->group("/backoffice", function(){
	require_once("backoffice_route.php");
});

app()->get("/users-list", function(){
	return view("backoffice.users-list");
});

app()->get("/users-add", function(){
	return view("backoffice.users-add");
});

app()->get("/users-edit", function(){
	return view("backoffice.users-edit");
});

app()->get("/menu-list", function(){
	return view("backoffice.menu-list");
});

app()->get("/menu-add", function(){
	return view("backoffice.menu-add");
});

app()->get("/menu-edit", function(){
	return view("backoffice.menu-edit");
});

app()->get("/module-list", function(){
	return view("backoffice.module-list");
});

app()->get("/module-add", function(){
	return view("backoffice.module-add");
});

app()->get("/module-edit", function(){
	return view("backoffice.module-edit");
});

app()->get("/module-access-list", function(){
	return view("backoffice.module-access-list");
});

app()->get("/module-access-add", function(){
	return view("backoffice.module-access-add");
});

app()->get("/module-access-edit", function(){
	return view("backoffice.module-access-edit");
});

app()->get("/brands-list", function(){
	return view("backoffice.brands-list");
});

app()->get("/brands-add", function(){
	return view("backoffice.brands-add");
});

app()->get("/brands-edit", function(){
	return view("backoffice.brands-edit");
});

app()->get("/customer-list", function(){
	return view("backoffice.customer-list");
});

app()->get("/customer-add", function(){
	return view("backoffice.customer-add");
});

app()->get("/customer-edit", function(){
	return view("backoffice.customer-edit");
});

app()->get("/slide-list", function(){
	return view("backoffice.slide-list");
});

app()->get("/slide-add", function(){
	return view("backoffice.slide-add");
});

app()->get("/slide-edit", function(){
	return view("backoffice.slide-edit");
});

app()->get("/transaction-list", function(){
	return view("backoffice.transaction-list");
});

app()->get("/static-content-list", function(){
	return view("backoffice.static-content-list");
});

app()->get("/static-content-edit", function(){
	return view("backoffice.static-content-edit");
});

app()->get("/shipping-cost-list", function(){
	return view("backoffice.shipping-cost-list");
});

app()->get("/shipping-cost-edit", function(){
	return view("backoffice.shipping-cost-edit");
});

app()->get("/shipping-cost-add", function(){
	return view("backoffice.shipping-cost-add");
});

app()->get("/cat-product-list", function(){
	return view("backoffice.cat-product-list");
});

app()->get("/cat-product-add", function(){
	return view("backoffice.cat-product-add");
});

app()->get("/cat-product-edit", function(){
	return view("backoffice.cat-product-edit");
});

app()->get("/product-list", function(){
	return view("backoffice.product-list");
});

app()->get("/product-add", function(){
	return view("backoffice.product-add");
});

app()->get("/product-edit", function(){
	return view("backoffice.product-edit");
});


/* Video Iframe */
app()->get("/videoiframe", function(){
	return view('layout.video', ['video' => get('video')]);
})->name('videoiframe');

/* Ajax */
app()->post("/ajax/:method", "AjaxCtrl:index");