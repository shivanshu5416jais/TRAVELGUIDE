<?php
session_start();
if(!isset($_SESSION['user']))
 {
 	header('Location:index.php');
 }
else{
echo "WELCOME TO place";
echo $_SESSION['id'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="hotel.php">Hotels</a>
<a href="temples.php">Temples</a>
</body>
</html>