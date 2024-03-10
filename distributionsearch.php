<form action="distributionsearch.php" method="post">
	Enter Data<input type="text" name="search" required><br>
	<input type="submit" value="search">
</form>
<?php
if($_POST)
{
	$con=mysqli_connect("localhost","root","","sahil");
	$sa=$_POST['search'];
	$q = "select * from sahilkhan3 where name like('%$sa%') or Address like('%$sa%') or number like('%sa%') or email like('%$sa%')"; 
	$r=mysqli_query($con,$q);
	if(mysqli_num_rows($r)<=0)
	{
	 	echo "no record";
	}
	else
	{
	echo "<table border='1'>
	<tr>
			<th>Sid</th>
			<th>Name</th>
			<th>Address</th>
			<th>Mo.number</th>
			<th>email</th>
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
