<form action="search2.php" method="post">
	Enter Data<input type="text" name="search" required><br>
	<input type="submit" value="search">
</form>
<?php
if($_POST)
{
	$con=mysqli_connect("localhost","root","","sahil");
	$da=$_POST['search'];
	$q = "select * from sahilkhan2 where username like('%$da%')";
	$r=mysqli_query($con,$q);
	if(mysqli_num_rows($r)<=0)
	{
	 	echo "no record";
	}
	else
	{
    echo 
	"<table border='1'>
	<tr>
			<th>Sid</th>
			<th>username</th>
			<th>password</th>
			<th>Mo.number</th>
			<th>email</th>
			<th>Address</th>
	</tr>";
		
		while($r2=mysqli_fetch_array($r))
		{
			echo "<tr>";
			echo "<td>$r2[0]</td>";
			echo "<td>$r2[1]</td>";
			echo "<td>$r2[2]</td>";
			echo "<td>$r2[3]</td>";
			echo "<td>$r2[4]</td>";

			echo "</tr>";
		
		}
	}
}

?>
