<?php
//==========================================
//Operate Database!
//Author:jobslong
//Date:2013/10/12
//==========================================

//requir constants of database
require_once('configure.php');

//open a connect of db
function db_connect()
{
	//$result = new DB($DB_DRIVE,$DB_HOSTNAME,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
	$result = new mysqli('localhost','smartbjut','smartbjut','smartbjut');
	if (!$result) 
	{
		throw new Exception('Could not connect to database server');
	} else 
	{
		return $result;
	}
}

?>
