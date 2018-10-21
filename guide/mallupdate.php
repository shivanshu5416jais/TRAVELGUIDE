
<?php
session_start();
error_reporting(0);
$conn=mysqli_connect("localhost","root","","travelguide");
if (isset($_SESSION['admin'])) {
?>
<html>
<head></head>
<body>

<center>	
<form action="" method="POST">
	<table style="border: 4px solid grey; ">

		<tr><td>NAME</td>
	<td><input type ="text" name="name" value="<?php 
  
	$name1=$_GET['name']; echo $name1; ?>"></td> <br><br>
</tr>
<tr>
<td>ADDRESS</td>
<td>	
<input type ="text" name="address" value="<?php 
  
	$address1=$_GET['address']; echo $address1; ?>"> <br><br></td></tr>
	<tr>
<td>CONTACT</td>
<td><input type="text" name="contact" value="<?php 
  
	$contact1=$_GET['contact']; echo $contact1; ?>"> <br><br></td></tr>

	<tr>

<td>ABOUT</td>
<td>		
	<input type ="text" name="about" value="<?php 
  
	$about1=$_GET['about']; echo $about1; ?>"> <br><br></td></tr>
	<tr>
		<td></td>
		<td>
<input type="submit" name="submit" value="UPDATE"></td></tr>
</table>
</form>
</center>
<?php
if($_POST['submit'])
{   $name=$_POST['name'];
	$address=$_POST['address'];
		$contact=$_POST['contact'];
		$about=$_POST['about'];
	echo $name;
	$query="UPDATE malls SET name='$name',address='$address',contact='$contact'  ,about='$about' WHERE name='$name1' AND address='$address1'";
	$data=mysqli_query($conn, $query);
	if($data)
	{
	echo "<center><font color='green'>record update sucessful.</center>";
	header("refresh:2;url=malldelete.php");
	}
	else
		echo "<font color='red'>record update not sucessful.<a href='malldelete.php'>CHECK UPDATE";
	}
else
{
}
	?>


</body>
</html
<?php
  }
  else
  {
  	header('Location:../index.php');
  }
  ?>