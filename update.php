<?php
$c = mysqli_connect("localhost","root","","sahil");

if($_GET)
{
	$d = $_GET['data'];
	$r2 = mysqli_query($c,"select * from sahilkhan2 where sid=$d");
	$r = mysqli_fetch_array($r2);
}
?>
<form action="update.php" method="post">
	<input type="hidden" name="sid" value="<?php echo $r[0]; ?>">
	Username <input type="text" name="username" value="<?php echo $r[1]; ?>"></br>
	Password <input type="text" name="password" value="<?php echo $r[2]; ?>"></br>
	email<input type="text" name="email" value="<?php echo $r[3]; ?>"></br><br>
	Mo.number<input type="text" name="number" value="<?php echo $r[4]; ?>"></br><br>
	Address <textarea name="Address"><?php echo $r[5]; ?></textarea><br>
	<input type="submit" value="Update"> 
</form>
<?php
if($_POST)
{
	$sid=$_POST['sid'];
	$unm = $_POST['username'];
	$ps = $_POST['password'];
	$em = $_POST['email'];
	$nu = $_POST['number'];
	$Ad = $_POST['Address'];
	$q = "update sahilkhan2 set username = '$unm', password='$ps', email ='$em',number='$nu',Address='$Ad' where sid = $sid";
	if(mysqli_query($c,$q))
	{
		header("location:display.php");
	}

}
?>


