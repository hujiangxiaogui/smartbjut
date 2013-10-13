<?php
//==========================================
//Functions to validate user-input data
//Author:jobslong
//Date:2013/10/12
//==========================================
//test that each variables has a value
function filled_out($form_vars)
{
	foreach ($form_vars as $key => $value) 
	{		
		if ((!isset($key))||($value == ''))
		{
			return false;
		}
	}
	return true;
}

//check an email address is possiably valid
function valid_email($address)
{
	if (ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $address)) 
	{
		return true;
	} else 
	{
		return false;
	}
}

?>
