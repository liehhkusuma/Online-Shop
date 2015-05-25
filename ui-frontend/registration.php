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
                        <h2>Registration Account</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                
                <div class="col-md-10">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <div class="woocommerce-info ">Success Registration Account!
                            </div>

                            <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">
                                <div id="customer_details" class="col2-set">
                                    <div class="col-2">
                                        <div class="woocommerce-billing-fields">
                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Nama Lengkap </label>
                                                <input type="text" value="" placeholder="Nama Lengkap" id="billing_first_name" name="billing_first_name" class="input-text" required>
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Alamat Email </label>
                                                <input type="email" value="" placeholder="Alamat Email" id="billing_last_name" name="billing_last_name" class="input-text" required>
                                            </p>    

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">No Telepon/ Handphone </label>
                                                <input type="text" value="" placeholder="No Telepon/ Handphone" id="billing_last_name" name="billing_last_name" class="input-text " required>
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Alamat </label>
                                                <input type="text" value="" placeholder="Alamat Email" id="billing_last_name" name="billing_last_name" class="input-text " required>
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Kota </label>
                                                <input type="text" value="" placeholder="Kota" id="billing_last_name" name="billing_last_name" class="input-text " required> 
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Provinsi </label>
                                                <select class="country_to_state country_select" id="billing_country" name="billing_country">
                                                    <option value="">Select a province</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Kode Pos </label>
                                                <input type="text" value="" placeholder="Kode Pos" id="billing_last_name" name="billing_last_name" class="input-text " required>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="order_review" style="position: relative;">
                                    <div id="payment">
                                        <div class="form-row place-order">
                                        <input type="submit" data-value="Place order" value="Registration" id="place_order" name="woocommerce_checkout_place_order" class="button alt">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </form>

                        </div>                       
                    </div>                    
                </div>
                <div class="col-md-1"></div>
            </div>
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