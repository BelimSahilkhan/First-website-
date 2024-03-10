<center>
<form action="psearch.php" method="post">
	Enter Data<input type="text" name="search" required><br>
	<input type="submit" value="search">
</form>
<?php
if($_POST)
{
	$con=mysqli_connect("localhost","root","","sahil");
	$az=$_POST['search'];
	$q = "select * from sahilkhan5 where pname like('%$az%')";
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
			<th>Pro.Name</th>
			<th>Pro.Description</th>
			<th>Pro.Price</th>
			<th>Pro.S.Price</th>
			<th>Pro.Distribution</th>
	</tr>";
		
		while($r2=mysqli_fetch_array($r))
		{
			echo "<tr>";
			echo "<td>$r2[0]</td>";
			echo "<td>$r2[1]</td>";
			echo "<td>$r2[2]</td>";
			echo "<td>$r2[3]</td>";
			echo "<td>$r2[4]</td>";
			echo "<td>$r2[5]</td>";

			echo "</tr>";
		
		}
	}
}

?>
<center>