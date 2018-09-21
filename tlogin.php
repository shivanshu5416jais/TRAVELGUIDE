<?php
 require('login1.php');
 ?>
 <html>
 <head>
 	<title>login</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <div class="container">
 	<div class="navbar">
 		<div class="title">TOURIST GUIDE</div>
 	    <div class="login"><a href="tlogin.php"><h3>Sign in</h3></a></div>
 	    <div class="nav-link"><a href="index.php"><h3>Signup</h3></a></div>	
 	</div>
 	<form action="tlogin.php" method="post">
 		<h1 class="form-title">Login to tg</h1>
 		<div class="login-form">
 			<?php
				if(!empty($response))
				{
					echo "<div class='form-group'><span>".$response."</span> </div>";
				}
			?>

			<div class="form-group">
				<label class="form-label">Email:</label><br/>
				<input class="form-control" placeholder="Email" name="email">
			</div>
			<div class="form-group">
				<label class="form-label">Password :</label><br/>
				<input type="password" class="form-control" placeholder="Password" name="password">
			</div>
			<input class="btn" type="submit" value="Login"><br/>
            </div>
		</form>
		<div class="form-ques">
			Not have an account?<a href="index.php"> Create Account</a>
		</div>
	</div>
</body>
</html>