<?php
//==========================================
//FScript to process new registrations
//Author:jobslong
//Date:2013/10/12
//==========================================

// include function files for SmartBJUT
require_once('smartbjut_fns.php');

//create short variable names
$email=$_POST['email'];
$username=$_POST['username'];
$passwd=$_POST['password'];
$passwd2=$_POST['password2'];

// start session which may be needed later
// start it now because it must go before headers
session_start();

try
{
	// check forms filled in
	if (!filled_out($_POST)) 
	{
		throw new Exception('You have not filled the form out correctly –
		please go back and try again.');
	}

	// email address not valid
	if (!valid_email($email)) 
	{
		throw new Exception('That is not a valid email address.
		Please go back and try again.');
	}
	// passwords not the same
	if ($passwd != $passwd2) 
	{
		throw new Exception('The passwords you entered do not match –
		please go back and try again.');
	}

	// check password length is ok
	// ok if username truncates, but passwords will get
	// munged if they are too long.
	if ((strlen($passwd) < 6) || (strlen($passwd) > 16)) 
	{
		throw new Exception('Your password must be between 6 and 16 characters.
		Please go back and try again.');
	}

	// attempt to register
	// this function can also throw an exception
	register($username, $email, $passwd);

	// register session variable
	$_SESSION['valid_user'] = $username;

	// provide link to members page
	load_header('Registration successful');
	echo 'Your registration was successful. Go to the members page to start
	setting up your bookmarks!';
	
	//end page
	load_bottom();
}
catch (Exception $e) 
{
	load_header('Problem:');
	echo $e->getMessage();
	load_bottom();
	exit;
}

?>