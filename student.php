<head>
	<style>
	body{
		
		background: #0d1021;
		display: grid;
		
	
	    }
	  .form{
			border-style:solid;
			color:aqua;
			margin:30px;
			width:38%;
			height:80%;
			padding:0px;}
			.a{color:blue;
		}

		.b{
			border: double;
			background:skyblue;
			outline: none;
			padding: 11px 25px;
			color: green;
			cursor: pointer;
			border-radius: 4px;
			font-weight: 600;
			width: 40%;
			margin-top: 10px;
		   }
			
	</style>
</head>










<center>
<form action="student.php" method="post" class="form">
	<h1>Register</h1>
	Username<br>
	<input type="text" name="username" placeholder="Username"><br>
	Password<br>
	<input type="password" name="password" placeholder="Password"> <br>
	Email<br>
	<input type="email" name="email" placeholder="Email"><br>
	Mo.number<br>
	<input type="number" name="number" placeholder="Mo.number"><br>
	Address<br>
	<textarea name="Address" placeholder="Address"></textarea><br>
	&nbsp; 
	<input type="submit" value="Regester" class="b"><br>
	<a href="login.php">Alerady user them Login?</a>
</form>
</center>
<center>
<?php
	if($_POST)
	{
		$a=$_POST['username'];
		$b=$_POST['password'];
		$c=$_POST['email'];
		$d=$_POST['number'];
		$e=$_POST['Address'];
	


		$con=mysqli_connect("localhost","root","","sahil");
	
		$tb="create table sahilkhan2(sid int(5) primary key auto_increment,username varchar(20),password varchar(100),email varchar(10),number varchar(10),Address varchar(250))";
		
		mysqli_query($con,$tb);

		$in=mysqli_query($con,"insert into sahilkhan2(username,password,email,number,Address)values('$a','$b','$c','$d','$e')");
		if($con)
		{
			echo "inserted";
		}
	}
?>
</center>
