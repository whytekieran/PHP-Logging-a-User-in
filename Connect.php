<?php

$errMsg = 'Could not connect to database'.'<br/>';
$sqlHost = 'localhost';
$sqlUser = 'root';
$sqlPass = '';
$database = 'mydatabase';

if(mysql_connect($sqlHost, $sqlUser, $sqlPass) && mysql_select_db($database))//Connecting to the database
{
	echo 'Connected to database'.'<br/>'.'<br/>';
}
else
{
	die($errMsg);
}

?>