<?php
$c = mysqli_connect("localhost","root","","sahil");
if($_GET)
{
	$d = $_GET['data'];
	$r2 = mysqli_query($c,"select * from sahilkhan4 where sid=$d");
	$r = mysqli_fetch_array($r2);
}
?>
<form action="update2.php" method="post">
	<input type="hidden" name="sid" value="<?php echo $r[0]; ?>">
	name <input type="text" name="name" value="<?php echo $r[1]; ?>"></br>
	Address <textarea name="Address"><?php echo $r[2]; ?></textarea><br>
	Mo.number <input type="text" name="number" value="<?php echo $r[3]; ?>"><br>
	email<input type="text" name="email" value="<?php echo $r[4]; ?>"></br>
	
	<input type="submit" value="Update"> 
</form>
<?php
if($_POST)
{
	$sid=$_POST['sid'];
	$name =$_POST['name'];
	$ad = $_POST['Address'];
	$nu = $_POST['number'];
	$em = $_POST['email'];
	$q = "update sahilkhan4	 set name = '$name', Address='$ad', number ='$nu', email='$em' where sid = $sid";
	if(mysqli_query($c,$q))
	{
		header("location:customerview.php");
	}

}
?>


