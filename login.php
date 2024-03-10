<?php
		session_start();
?>
<html>
	<head>
	   <style>
		body 
		{
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			flex-direction: column;
			background:skyblue;
		}
		.box 
		{
			position: relative;
			width: 380px;
			height: 420px;
			background: #1c1c1c;
			border-radius: 8px;
			overflow: hidden;
		}
		.box::before 
		{
			content: '';
			z-index: 1;
			position: absolute;
			top: -50%;
			left: -50%;
			width: 380px;
			height: 420px;
			transform-origin: bottom right;
			background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
			animation: animate 6s linear infinite;
		}
		.box::after 
		{
			content: '';
			z-index: 1;
			position: absolute;
			top: -50%;
			left: -50%;
			width: 380px;
			height: 420px;
			transform-origin: bottom right;
			background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
			animation: animate 6s linear infinite;
			animation-delay: -3s;
		}
		@keyframes animate 
		{
			0%
			{
				transform: rotate(0deg);
			}
			100%
			{
				transform: rotate(360deg);
			}
		}
		form 
		{
			position: absolute;
			inset: 2px;
			background: #28292d;
			padding: 50px 40px;
			border-radius: 8px;
			z-index: 2;
			display: flex;
			flex-direction: column;
		}
		h2 
		{
			color: #45f3ff;
			font-weight: 500;
			text-align: center;
			letter-spacing: 0.1em;
		}
		.inputBox 
		{
			position: relative;
			width: 300px;
			margin-top: 35px;
		}
		.inputBox input 
		{
			position: relative;
			width: 100%;
			padding: 20px 10px 10px;
			background: transparent;
			outline: none;
			box-shadow: none;
			border: none;
			color: #23242a;
			font-size: 1em;
			letter-spacing: 0.05em;
			transition: 0.5s;
			z-index: 10;
		}
		.inputBox span 
		{
			position: absolute;
			left: 0;
			padding: 20px 0px 10px;
			pointer-events: none;
			font-size: 1em;
			color: #8f8f8f;
			letter-spacing: 0.05em;
			transition: 0.5s;
		}
		.inputBox input:valid ~ span,
		.inputBox input:focus ~ span 
		{
			color: #45f3ff;
			transform: translateX(0px) translateY(-34px);
			font-size: 0.75em;
		}
		.inputBox i 
		{
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 2px;
			background: #45f3ff;
			border-radius: 4px;
			overflow: hidden;
			transition: 0.5s;
			pointer-events: none;
			z-index: 9;
		}
		.inputBox input:valid ~ i,
		.inputBox input:focus ~ i 
		{
			height: 44px;
		}
		.links 
		{
			display: flex;
			justify-content: space-between;
		}
		.links a 
		{
			margin: 10px 0;
			font-size: 0.75em;
			color: #8f8f8f;
			text-decoration: beige;
		}
		.links a:hover, 
		.links a:nth-child(2)
		{
			color: #45f3ff;
		}
		input[type="submit"]
		{
			border: none;
			outline: none;
			padding: 11px 25px;
			background: #45f3ff;
			cursor: pointer;
			border-radius: 4px;
			font-weight: 600;
			width: 100px;
			margin-top: 10px;
		}
		input[type="submit"]:active 
		{
			opacity: 0.8;
		}
    </style>
	</head>
	<body>
	
	<div class="box">
	<form action="login.php" method="post" class="form">
			
			<h2>Login</h2>
		<div class="inputbox">
			<input type="text" name="username" required>
			 <span>USERNAME</span>
			<i></i>
	</div>
		<div class="inputbox">
		  	<input type="passsword" name="password" required>
		  	<span>PASSWORD</span>
			  <i></i>
  		</div>
		<div class="links">
			<a href="student.php">Newuser?</a>
		</div>
			<input type="submit" value="LOGIN">
		</form>
	 </div>
  	
	</center>
    </body>
</html>
<?php
	if($_POST)
	{
		$a=$_POST['username'];
		$b=$_POST['password'];
		$con=mysqli_connect("localhost","root","","sahil");
		$q="select * from sahilkhan1 where username='$a' and password='$b'";
		$r=mysqli_query($con,$q);
		if(mysqli_num_rows($r)==1)
		{
			$_SESSION['username']=$a;
			header("location:home.php");
		}
		else
		{
			echo "<script>alert('Login failed...?')</script>";
		}
	}
?>
</center>