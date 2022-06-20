<?php 
	session_start();

	//print_r($_GET);  
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	//echo $username;

	if($userid == null || $password == null)
	{
		echo "invalid";
	}
	else
	{
		if($userid == "user" && $password == "1234"){
			$_SESSION['status'] = true;
			header('location: home.php');
		}
		else
		{
			echo "invalid user";
		}
	}


?>
