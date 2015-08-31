<?php

ob_start();
session_start();
$currentFile = $_SERVER['SCRIPT_NAME'];

function loggedIn()
{
	if(isset($_SESSION['userId']) && !empty($_SESSION['userId']))
	{
		return true;
	}
	else
	{
		return false;
	}
}

?>