
<table border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Address</th>
		<th>Mo.number</th>
		<th>Email</th>
	</tr>
<?php
	$con=mysqli_connect("localhost","root","","sahil");
	$q="select *from sahilkhan3";
	$r=mysqli_query($con,$q);
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



?>