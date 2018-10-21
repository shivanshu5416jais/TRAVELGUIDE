
<?php
session_start();
error_reporting(0);
$conn=mysqli_connect("localhost","root","","travelguide");
?>
<html>
<head></head>
<body>

	
<form action="" method="GET">
	<input type ="text" name="id" value="<?php 
  
	$id=$_GET['id']; echo $id; ?>"> <br><br>
<input type ="text" name="place" value="<?php 
  
	$place=$_GET['place']; echo $place; ?>"> <br><br>
<input type="submit" name="submit" value="UPDATE"/>
</form>
<?php
if($_GET['submit'])
{   $id=$_GET['id'];
	$place1=$_GET['place'];
	$query="UPDATE place SET place='$place1' WHERE id='$id'";
	$data=mysqli_query($conn, $query);
	if($data)
	{
	echo "<font color='green'>record update sucessful.";
	header("refresh:1;url=deleteplace.php");
	}
	else
		echo "<font color='red'>record update not sucessful.<a href='deleteplace.php'>CHECK UPDATE";
	}
else
{
}
	?>


</body>
</html>