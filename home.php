<form action="home.php" method="get">
	
</form>
	
<style>
	   .a{color:red;}
	body{background-color:aqua;}
	.navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }
	
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        /* Change color on hover for dropdown links */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

         /* Show the dropdown content on hover */
        .dropdown:hover .dropdown-content {
            display: block;   
</style>
	</head>
<body>

<!-- Navigation bar -->
<div class="navbar">
	<a href="home.php">Home</a>
	<a href="display.php">Display</a>
	<a href="logout.php">Logout</a>
	
	
    <div class="dropdown">
      <button class="dropbtn">Customer Details</button>
        <div class="dropdown-content">
		<a href="customer.php">Add Customer</a>
		<a href="search.php">customer Search</a>
            	<a href="customerview.php">Customer View</a>
		
        </div>
     </div>

	<div class="dropdown">
      <button class="dropbtn">Destribution Details</button>
        <div class="dropdown-content">
            	<a href="distribution.php">Add distribution</a>
		<a href="distributionsearch.php">Distribution search
		<a href="view.php">Distribution view</a>
        </div>
     </div>

	<div class="dropdown">
      <button class="dropbtn">Product Details</button>
        <div class="dropdown-content">
            	<a href="product.php">Product Add</a>
		<a href="psearch.php">Search
		<a href="pview.php">View</a>
        </div>
     </div>
     </div>
   
</div>
</body>
</html><hr>
<?php
session_start();
echo "Welcome To My Project ".$_SESSION['username'];
?>
<center><h1 class="a">WELCOME TO MY PROJECT</h1></center>