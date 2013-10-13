<?php
	//==========================================
	//Front page with login form for the system
	//Author:jobslong
	//Date:2013/10/12
	//==========================================
	
	//include API Functions of SmartBJUT
	require_once('smartbjut_fns.php');

	//load header
	load_header();
	//load info of site
	load_site_info();
	//load form of login
	load_login_form();
	//load bottom
	load_bottom();
?>