<?php 
	session_start();

	//print_r($_GET);  
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	//echo $username;

	if($userid == null || $password == null || $Confirm_password == null || $name == null) 
	{
		echo "invalid id/password<br>";
	}
	else
	{
		if($userid."|" .$password. "|".$Confirm_password."|".$name."\r\n")
		{
			$_SESSION['status'] = true;
			header('location: home.php');
		}
		else
		{
			echo "invalid user";
		}
	}


?>