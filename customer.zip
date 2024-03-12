<center>
<form action="customer.php" method="post">
	Name<br>
	<input type="text" name="name"><br>
	Address<br>
	<textarea name="Address"></textarea><br>
	Mo.number<br>
	<input type="number" name="number"><br>
	Email<br>
	<input type="email" name="email"><br>
	<input type="submit" value="Save">
</form>
<?php
	if($_POST)
	{
		$a=$_POST['name'];
		$b=$_POST['Address'];
		$c=$_POST['number'];
		$d=$_POST['email'];
	


		$con=mysqli_connect("localhost","root","","sahil");
	
		$tb="create table sahilkhan4(sid int(5) primary key auto_increment,name varchar(20),Address varchar(250),number varchar(10),email varchar(10))";
		
		mysqli_query($con,$tb);

		$in=mysqli_query($con,"insert into sahilkhan4(name,Address,number,email)values('$a','$b','$c','$d')");
		if($con)
		{
			echo "inserted";
		}
	}
?>
