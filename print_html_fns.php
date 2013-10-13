<?php
//==========================================
//Functions that format output as HTML
//Author:jobslong
//Date:2013/10/12
//==========================================

function load_header($title)
{
	//print HTML header of SmartBJUT
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title><?php $title?></title>
		<meta charset="utf-8">
	    <meta name="description" content="">
	    <meta name="author" content="josblong">
	    <link href="css/bootstrap.css" rel="stylesheet">
	    <style type="text/css">
	      body {
	        padding-top: 40px;
	        padding-bottom: 40px;
	        background-color: #f5f5f5;
	      }

	      .form-signin {
	        max-width: 300px;
	        padding: 19px 29px 29px;
	        margin: 0 auto 20px;
	        background-color: #fff;
	        border: 1px solid #e5e5e5;
	        -webkit-border-radius: 5px;
	           -moz-border-radius: 5px;
	                border-radius: 5px;
	        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	                box-shadow: 0 1px 2px rgba(0,0,0,.05);
	      }
	      .form-signin .form-signin-heading,
	      .form-signin .checkbox {
	        margin-bottom: 10px;
	      }
	      .form-signin input[type="text"],
	      .form-signin input[type="password"] {
	        font-size: 16px;
	        height: auto;
	        margin-bottom: 15px;
	        padding: 7px 9px;
	      }

	    </style>
	    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	</head>
	<body>
		<h1>Load header</h1>
	
<?php 
}

function load_site_info()
{
	//print HTML header of SmartBJUT
?>
		<h2>load_site_info</h2>
	
<?php 
}

function load_bottom()
{
	//print HTML bottom of SmartBJUT
?>
	
	<h1>load_bottom</h1>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap-transition.js"></script>
	<script src="js/bootstrap-alert.js"></script>
	<script src="js/bootstrap-modal.js"></script>
	<script src="js/bootstrap-dropdown.js"></script>
	<script src="js/bootstrap-scrollspy.js"></script>
	<script src="js/bootstrap-tab.js"></script>
	<script src="js/bootstrap-tooltip.js"></script>
	<script src="js/bootstrap-popover.js"></script>
	<script src="js/bootstrap-button.js"></script>
	<script src="js/bootstrap-collapse.js"></script>
	<script src="js/bootstrap-carousel.js"></script>
	<script src="js/bootstrap-typeahead.js"></script>
	</body>
	</html>
	
<?php 
}

function load_login_form()
{
	//print form of login
?>
	<div class="container">
	    <form class="form-signin" method="post" action="homepage.php">
	       	<h2 class="form-signin-heading">Please sign in</h2>
	        <input type="text" class="input-block-level" placeholder="Email address" name="username">
	        <input type="password" class="input-block-level" placeholder="Password" name="password">
	        <label class="checkbox">
	        	<input type="checkbox" value="remember-me"> Remember me
	        	<a href="register_form.php">Not a menber.</a>
	        </label>
	        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
	    </form>
	</div>
<?php 
}

function load_form_register()
{
	//print form of register
?>
	<form method="post" action="register_new.php">
		<label>Register Now!</label><br>
		Email:<input type="text" name="email"><br>
		User Name:<input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		Confirm: <input type="password" name="password2"><br>
		<input type="submit" value="Register!">
	</form>
<?php
}

function load_password_form()
{
	//print form of changing password
?>
	<!-- TODO -->
<?php
}



?>
