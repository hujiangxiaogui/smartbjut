<?php
//==========================================
//A user’s main page
//	 with a view of feathers of this web app
//Author:jobslong
//Date:2013/10/12
//==========================================

//include fuctions for this web application
require_once('smartbjut_fns.php');

//start session
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username && $password)
{
	try 
	{
		login($username,$password);
		//if login success, register the user id
		$_SESSION['valid_user'] = $username;	
	} catch (Exception $e) 
	{
		//unsuccessful login
		load_header("Problem");
		echo "login failed! try again!<br>";
		load_login_form();
		load_bottom();
		exit;
	}
}

load_header("Enjoy Smart BJUT");
check_valid_user();

//TODO
echo "<h2>Load Home Page/ jobslong<h2>";

load_bottom();

?>

