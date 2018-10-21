<?php
   session_start();
      error_reporting(0);
    
    ?>
<html>
<head>
	<title>TRAVEL GUIDE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	body{
		background: url(./campaign-bg.jpg);
	background-position: right;
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:fixed;
	background-size: cover;
	color:black;
	height: 100vh;
	}
	.title{
    width: 40%;
    height: 100px;
		float:left;}
	.nav-link{
		width: 40%;
		height: 100px;
		float: left;
	}
	
	a{
		text-decoration: none;
		display: inline-block;
		padding: 2px;
        box-sizing: border-box;

	}
	.rightmenu {
	font-family: 'Monsterrat', sans-serif;
	display: inline-block;
	list-style: none;
	height: 50px;
	font-size: 20px;
	background-color:  #129490;
	opacity: 0.7;
	font-weight: bold;
	/*line-height: 10px;*/
	margin-left: 30px;
	text-transform: uppercase;
	}

	.rightmenu form a{
		
		padding: 15px;
	background-color: blue: 	
	text-decoration: none;
	color: white;
	}

</style>
</head>
<body>
	
		<div class="title"><h1>GUIDE PANEL</h1> </div></center>

		<center><div class="nav-link"><a href="#">
			<?php if(isset($_SESSION['admin']))
			  {
				echo "<h1>Welcome: Guide</h1>";
              }
               // <input type="text" placeholder="place" >
              

			  else
			  {
			  	header('Location:index.php');
			  }
			?>
		</a></div>
		<div class="nav-linklogin" style="width: 20%;float: right;height: 100px;"><a href="../logout1.php"><h3>Log Out</h3></a> </div>
		<div class="rightmenu" ><form action="adminpanel.php" method="post">
		<!-- <a href="update.php">add PLACE</a>
		 --><a href="deleteplace.php"> PLACE</a>
		<a href="hdelete.php">HOTELS</a>
		<a href="tdelete.php">TEMPLES</a>
		<a href="mondelete.php">MONUMENTS</a>
		<a href="malldelete.php">MALLS</a>
		</form></div>
	
</body>
</html>