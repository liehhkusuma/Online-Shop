<?php
if(is_main !== 1)
{
    header('HTTP/1.1 404 Not Found');
    echo "<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">\n<html><head>\n<title>404 Not Found</title>\n</head>";
    echo "<body>\n<h1>Not Found</h1>\n<p>The requested URL ".$_SERVER['REQUEST_URI']." was not found on this server.</p>\n";
    echo "<hr>\n".$_SERVER['SERVER_SIGNATURE']."\n</body></html>\n";
    exit;
}

/* Set Time Zone */
ini_set('display_errors', 1);
if(!ini_get('date.timezone')){ date_default_timezone_set('Asia/Jakarta');}

$base_url = "http://" . $_SERVER['HTTP_HOST'] . preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME']));

/* Apps attribute */
$this_site = "Galih Online Shop";

/* Link Assets */
$link_css = $base_url."/assets/css";
$link_img = $base_url."/assets/img";
$link_js = $base_url."/assets/js";

/* Link htaccess */
$index = 'home-riri-online-shop';
$product = 'product-list-riri-online-shop';
$product_detail = 'detail-product-list-riri-online-shop';
$cart = 'cart-shop-list-riri-online-shop';
$checkout = 'checkout-shop-riri-online-shop';
$login = 'login-account-riri-online-shop';
$registration = 'registration-account-riri-online-shop';
$account = 'account-riri-online-shop';
$update_data = 'update-data-customer';
$update_account = 'update-data-account';
$list_shopping = 'list-shopping';

?>