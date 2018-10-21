<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","travelguide");

?>
<html>
<head></head>
<body>

<form action="" method="GET">
firstname<input type ="text" name="name" value="<?php echo $_GET['name']; ?>"/> <br><br>
email<input type ="text" name="email" value="<?php  echo $_GET['email']; ?>"/> <br><br>

<input type="submit" name="submit" value="UPDATE"/>
</form>
<?php
if($_GET['submit'])
{
	$name=$_GET['name'];
	$email=$_GET['email'];
	// $hometown=$_GET['hometown'];
	// $gender=$_GET['gender'];
	$query="update users set name='$name' where email='$email'";
	$data=mysqli_query($conn, $query);
	if($data)
	{
	echo "<font color='green'>record update sucessful.<a href='admin_panel.php'>CHECK UPDATE";
	}
	else
		echo "<font color='red'>record update not sucessful.<a href='admin_panel.php'>CHECK UPDATE";
	}
else
{
	echo "<font color='blue'>Click on update button to save the changes";
}
	?>


</body>
</html>
