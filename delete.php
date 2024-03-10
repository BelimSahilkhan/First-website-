<?php 
	$con=mysqli_connect("localhost","root","","sahil");
	$d=mysqli_query($con,"delete from sahilkhan2 where sid=$_GET[data]");
	
	if($d)
	{
		header("location:display.php");
	}
?>