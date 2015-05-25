<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-7"></div>
                
                <div class="col-md-5">
                    <div class="user-menu">
                        <ul>
                            <li><a href="<?php echo $account; ?>"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="<?php echo $cart; ?>"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="<?php echo $login; ?>"><i class="fa fa-user"></i> Login</a></li>
                            <li><a href="<?php echo $registration; ?>"><i class="fa fa-user"></i> Registration</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="<?php echo $index; ?>">Galih<span> Online Shop</span></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li <?php echo $nav_category == 'Home' ? 'class="active"' : ""; ?> ><a href="<?php echo $index; ?>">Home</a></li>
                        <li <?php echo $nav_category == 'Product' ? 'class="active"' : ""; ?> ><a href="<?php echo $product; ?>">Product page</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->