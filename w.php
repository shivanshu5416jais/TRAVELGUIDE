<?php
   session_start();
   error_reporting(0);
    require('connection.php');
     require('place.php');
    ?>
   
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
	<title>AFTERLOGIN</title>
	<style type="text/css">
		
	*{
	box-sizing: border-box;
	margin: 0px;
	padding: 0px;
	}
		
	body{
		background-image: url(newimg.png);
		background-size: cover;	
		}

		.content h4{
			font-family: 'Montserrat', sans-serif;
			font-size: 40px;
			color: darkblue;
			margin: 0px;
			padding: 200px 0px 0px 40px;
		}

		.content h1{
			font-family: 'Montserrat', sans-serif;
			font-size: 70px;
			color: darkblue;
			margin: 0px;
			padding: 0px 0px 0px 40px;
		
		}

		form.example input[type=text] 
		{
			  padding: 10px;
			  font-size: 17px;
			  border: 1px solid grey;
			  float: left;
			  width: 40%;
			  opacity: 0.7;
			  margin-left: 30px;
			  border-radius: 25px 0px 0px 25px;
			  box-shadow: 5px 10px 8px #888888;
			  background: #bdecef;
		}
		form.example button 
		{
			 float: left;
			 width: 10%;
			 padding: 20px;
			 background: #129490;
				  color: white;
				  font-size: 17px;
				  /*margin-left: 30px;*/
				  border: 1px solid grey;
				  border-radius: 0px 25px 25px 0px;
				  border-left: none; /* Prevent double borders */
				  cursor: pointer;
			}


*{
	box-sizing: border-box;
	margin: 0px;
	padding: 0px;
	}
	nav.menu{
	width: 	100%;
	height: 100px;
	/*border-radius: 25px;*/
	background-color: #129490;
	opacity: 0.5;
	position: fixed;
	}

	.leftmenu{
	width: 	40%;
	line-height:100px;
	float: 	left;
	}

	.leftmenu h1{
	padding-left: 70px;
	font-weight: bold;
	color: white;
	font-size: 30px;
	font-family: 'Cedarville Cursive', cursive;
	}
	
	.rightmenu{
	width: 	55%;
	height: 200px;
	padding-top: 40px;
	padding-bottom: 100px;
	float: right;
	}

	.rightmenu ul{
	margin-left: 200px;
	}


	.rightmenu ul li{
	font-family: 'Monsterrat', sans-serif;
	display: inline-block;
	list-style: none;
	font-size: 18px;
	color: blue;
	font-weight: bold;
	/*line-height: 10px;*/
	margin-left: 30px;
	text-transform: uppercase;
	}

	.rightmenu ul li a{
	text-decoration: none;
	color: white;
	}

	#firstlist{	
	color: white;
	}

	.rightmenu ul li a:hover{
	color: 	darkblue;
	}



	</style>
</head>
<body>

	<nav class="menu">
		<div class="leftmenu">
			<h1>Welcome, <?php if(isset($_SESSION['user'])){
				echo " ".$_SESSION['user']."";

			}
			  else
			  {
			  	header('Location:index.php');
			  }
			?></h1>			
		</div>


	<div class="rightmenu">
				<ul>
					<li id="firstlist">HOME</li>
					<li><a href="comment.php">REVIEW</a></li>
					<li><a href="profile.php">YOUR PLACES</a></li>
					<li><a href="logout1.php">LOGOUT</a></li>
				</ul>
	</div>

	</nav>

	<div class='content'>
	<h4>Where do you want to fly with</h4>
	<h1>ALBATROSS?</h1>
	</div>

<form action="w.php" method="post" class="example">
		<input type="text" placeholder="place" name="place">
		<input type="submit" name="SUBBMIT" value="SUBMIT">
		</form>



</body>
</html>