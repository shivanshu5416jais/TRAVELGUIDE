<?php
  require('register.php');
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>TRAVEL GUIDE</title>
</head>
<body>
	<div class="navbar">
		<div class="title"><h2>TRAVEL GUIDE</h2></div>
		<div class="login"><a href="tlogin.php">Login</a></div>
		<div class="signup"><a href="index.php">Sign up</a>
		</div>
	</div>
	<div class="form">
		<form action="index.php" method="post" class="register_form">
		<h1 class="form-title">REGISTER</h1>
		<?php
					if(!empty($response)){
						echo "<div class='form-group'><span>".$response."</span> </div>";
					}
					if(!empty($correct_response)){
						echo "<div class='formn-group'><span style='color:green;'>".$correct_response."</span></div>";
					}
				?>
		<div class="form-group">
			<label class="form-label">Name:</label>
			<input class="form-control" id="name" placeholder="Name    " name="name">
		</div>
		<div class="form-group">
			<label class="form-label">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Email   " name="email">
		</div>
		<div class="form-group">
			<label class="form-label">Password:</label>
			<input type="password" class="form-control" id="password" placeholder="password" name="password">
		</div>
		<input class="btn" type="submit" value="Register">
	</form>
</div>
</body>
</html>
