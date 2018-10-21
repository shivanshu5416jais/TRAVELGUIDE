<?php
error_reporting(0);
include'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php
session_start();
if (isset($_SESSION['user'])) {
	# code...

echo "Edit your name";
}
else
{
	header('Location:index.php');
}
?>
<form action="profile.php" method="GET">
	<input type ="text" name="name" value="
	<?php $a= $_SESSION['user'];
	$query="SELECT * FROM users WHERE `email`='$a'";
	$run_query=mysqli_query($conn,$query);
$total=mysqli_num_rows($run_query);
  	while($result =mysqli_fetch_assoc($run_query))
	 echo $result["name"]; 
	 ?>
	 "> <br>
<input type="submit" name="submit" value="submit">
</form>
<?php
if($_GET['submit'])
{   
	$email=$_SESSION['user'];
   // echo $email; 
	$name=$_GET['name'];
	$query="UPDATE users SET name='$name' WHERE email='$email'";
	$data=mysqli_query($conn, $query);
	if($data)
	{
	echo "<font color='green'>record update sucessful.";
	header("refresh:1;url=userpanel.php");
	}
	else
		echo "<font color='red'>record update not sucessful.<a href='deleteplace.php'>CHECK UPDATE";
	}
	?>
</body>
</html>