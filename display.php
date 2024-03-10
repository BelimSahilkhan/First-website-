<head>
	<style>
	.a{background-color:green;
	   border-style:double;}

	.b{background-color:red;
	  border-style:double;
	  }
	</style>
</head>


<?php
	session_start();
	

?>
<table border="1">

<tr>
	<th>sid</th>
	<th>username</th>
	<th>password</th>
	<th>Email</th>
	<th>number</th>
	<th>Address</th>
	<th class="b">Delete</th>
	<th class="a">Operation</th>
</tr>
<a href="search2.php">Search</a>
<?php
	$con=mysqli_connect("localhost","root","","sahil");
	$a=$_SESSION['username'];
	if($a==true)
	{
	}
	else 
	{
		header("location:login.php");
	}
	$q="select *from sahilkhan2";
	$r=mysqli_query($con,$q);
	while($r2=mysqli_fetch_array($r))
	{
		echo "<tr>";
		echo "<td>$r2[0]</td>";
		echo "<td>$r2[1]</td>";
		echo "<td>$r2[2]</td>";
		echo "<td>$r2[3]</td>";
		echo "<td>$r2[4]</td>";
		echo "<td>$r2[5]</td>";
		echo "<td class='b'><a href='delete.php? data=$r2[0]'>Delete</a></td>";
		echo "<td class='a'><a href='update.php? data=$r2[0]'>Edit</a></td>";
		echo "</tr>";
		
	}
?>