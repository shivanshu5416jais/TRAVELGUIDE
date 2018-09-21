<?php
   session_start();
    require('connection.php');
   
    
    ?>
<html>
<head>
	<title>TRAVEL GUIDE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
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
</style>
</head>
<body>
	<div class="navbar">
		<div class="title"><h3>tourist</h3> </div>

		<div class="nav-link"><a href="#">
			<?php if(isset($_SESSION['user'])){
				echo "<h1>Welcome: ".$_SESSION['user']."</h1>";

			}
			  else
			  {
			  	header('Location:index.php');
			  }
			?>
		</a></div>
		<div class="nav-link logIn"><a href="logout1.php"><h3>Log 1Out</h3></a> </div>
		<form action="w.php" method="post">
		<input type="text" placeholder="place" name="place">
		<input type="submit" name="SUBBMIT" value="SUBMIT">
		</form>
	</div>
</body>
</html>