<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$encPassword = md5($password);
	
	if(!empty($username) && !empty($password))
	{
		$query = "SELECT ID FROM users WHERE username = '$username' AND password = '$encPassword';";
		if($queryRunner = mysql_query($query))
		{
			$queryNumRows = mysql_num_rows($queryRunner);
			
			if($queryNumRows == 0)
			{
				echo 'Invalid Username/Password';
			}
			else if($queryNumRows == 1)
			{
				$id = mysql_result($queryRunner, 0, 'ID');
				$_SESSION['userId'] = $id;
				header('Location: Main.php');
			}
		}
	}
	else 
	{
		echo 'Please supply a username and password';
	}
}
?>

<form action="<?php echo $currentFile?>" method="post">
	Username: <input type="text" name="username">
	Password: <input type="password" name="password"><br><br>
	<input type="submit" value="Log In">
</form>