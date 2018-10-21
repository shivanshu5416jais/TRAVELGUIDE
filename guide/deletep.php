
<?php
session_start();
error_reporting(0);
require('deleteplace.php');
error_reporting(0);
//
$conn=mysqli_connect("localhost","root","","travelguide");
 $id = $_GET["id"];
 $query="DELETE FROM hotels WHERE id='$id'";
 mysqli_query($conn,$query);
  $query="DELETE FROM temples WHERE id='$id'";
  mysqli_query($conn,$query);
$data=mysqli_query($conn,$query);
 $query="DELETE FROM place WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{  
	echo "<font color='green'><center>record deleted sucessfully</center>";
 header("refresh:2;url=deleteplace.php");
}
else
{
	echo"<font color='red'>sorry,delete process failed";
}
?>