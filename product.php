<form action="product.php" method="post">
	Pro.Name<input type="" name="pname"><br>
	Pro.Description<textarea name="Description"></textarea><br>
	Pro.Price<input type="" name="pprice" ><br>
	Pro.S.Price<input type=""  name="sprice"><br>
		

<?php
	$con = mysqli_connect("localhost","root","","sahil");
	$r2 = mysqli_query($con,"select * from sahilkhan2");
?>
	Pro.Distribution<select name="username">
		<?php while($r = mysqli_fetch_array($r2))
		{ 
			echo "<option value='$r[1]'>$r[1]</option>";
		}
	        ?>
        </select><br>
	<input type="submit">
</form>
<?php
	if($_POST)
	{
		$a=$_POST['pname'];
		$b=$_POST['Description'];
		$c=$_POST['pprice'];
		$d=$_POST['sprice'];
		$e=$_POST['username'];
	


		$con=mysqli_connect("localhost","root","","sahil");
	
		$tb="create table sahilkhan5(id int(2) primary key auto_increment,pname varchar(35),Description 				varchar(200),pprice varchar(20),sprice varchar(10),username varchar(20))";
		
		mysqli_query($con,$tb);

		$in=mysqli_query($con,"insert into sahilkhan5(pname,Description,pprice,sprice,username)values		('$a','$b','$c','$d','$e')");
		if($con)
		{
			echo "inserted";
		}
	}
?>
	