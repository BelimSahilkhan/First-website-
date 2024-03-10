<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		session_destroy();
		unset($_SESSION['username']);
	}
	else
	{
		echo "Alerdy Logout";
		header("location:login.php");
	}
?>