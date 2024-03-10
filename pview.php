<table border="1">

<tr>
	<th>sid</th>
	<th>Pro.Name</th>
	<th>Pro.Description</th>
	<th>Pro.Price</th>
	<th>Pro.S.Price</th>
	<th>Pro.Distribution</th>
</tr>

<?php
	$con=mysqli_connect("localhost","root","","sahil");
	$q="select *from sahilkhan5";
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
		echo "</tr>";
		
	}
?>