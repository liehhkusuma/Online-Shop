<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Unicorn Admin</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo assets('bo.css');?>/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo assets('bo.css');?>/font-awesome.css" />
        <link rel="stylesheet" href="<?php echo assets('bo.css');?>/unicorn-login.css" />
    		<script type="text/javascript" src="<?php echo assets('bo.js');?>/respond.min.js"></script>
	</head>    <body>
        <div id="container">
            <div id="logo">
                <img src="<?php echo assets('bo.images');?>/logo.png" alt="" />
            </div>
            <div id="user">
                <div class="avatar">
                    <div class="inner"></div>
                    <img src="<?php echo assets('bo.images');?>/demo/av1_1.jpg" />
                </div>
                <div class="text">
                    <h4>Hello,<span class="user_name"></span></h4>
                </div>
            </div>
            <div id="loginbox">            
                <form id="loginform" action="index.html">
    				<p>Enter username and password to continue.</p>
                    <div class="input-group input-sm">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span><input class="form-control" type="text" id="username" placeholder="Username" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control" type="password" id="password" placeholder="Password" />
                    </div>
                    <div class="form-actions clearfix">
                        <input type="submit" class="btn btn-block btn-primary btn-default" value="Login" />
                    </div>
                </form>
            </div>
        </div>
        
        <script src="<?php echo assets('bo.js');?>/jquery.min.js"></script>  
        <script src="<?php echo assets('bo.js');?>/jquery-ui.custom.min.js"></script>
        <script src="<?php echo assets('bo.js');?>/unicorn.login.js"></script> 
    </body>
</html>
