<?php
//Program that uses sessions to log in a user. User data stored in an sql database.
require 'Core.php';//Calling file that starts output buffering, retrieves current file name and has a logged in function
require 'Connect.php';//Called so we can connect to the database

if(loggedIn())//If we are logged in. (If sessions have been set)
{
	echo 'You are logged in';//Say we are logged in.
}
else 
{
	include 'LoginForm.php';//otherwise we include this file which contains the login form and script to validate the 
							//login and set the sessions
}

?>