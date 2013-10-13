<?php
//==========================================
//Functions to authenticate user
//Author:jobslong
//Date:2013/10/12
//==========================================

//register new user with db
//return true or error message
function register($username,$email,$address)
{
	// connect to db
	$conn = db_connect();
	// check if username is unique
	$result = $conn->query("select * from users where user_name = '".$username."'");
	if (!$result) 
	{
		throw new Exception('Could not execute query');
	}
	if ($result->num_rows > 0) 
	{
		throw new Exception('That username is taken - go back and choose another one.');
	}

	// if ok, put in db
	$result = $conn->query("insert into users values('".$username."', sha1('".$password."'), '".$email."')");
	if (!$result) 
	{
		throw new Exception('Could not register you in database - please try againlater.');
	}
	return true;
}

function login($username, $password) 
{
	// check username and password with db
	// if yes, return true
	// else throw exception
	// connect to db
	$conn = db_connect();

	// check if username is unique
	//$result = $conn->query("select * from users where user_name='".$username."'and user_password = sha1('".$password."')");
	$result = $conn->query("select * from users where user_name='".$username."'and user_password = '".$password."'");
	if (!$result) 
	{
		throw new Exception('Could not log you in.');
	}
	if ($result->num_rows>0) 
	{
		return true;
	} else 
	{
		throw new Exception('Could not log you in.');
	}
}

function check_valid_user() 
{
	// see if somebody is logged in and notify them if not
	if (isset($_SESSION['valid_user'])) 
	{
		echo "Logged in as ".$_SESSION['valid_user'].".<br />";
	} 
	else 
	{
		// they are not logged in
		load_heading('Problem:');
		echo 'You are not logged in.<br />';
		load_url('login.php');
		load_bottom();
		exit;
	}
}

function change_password()
{
	//TODO
}

function reset_password()
{
	//TODO

}

function get_random_rand()
{


}

?>
