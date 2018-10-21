
<?php
session_start();
require('malldelete.php');
error_reporting(0);
//
$conn=mysqli_connect("localhost","root","","travelguide");
 $id = $_GET["id"];
 $query="DELETE FROM malls where name='$id'";
$data=mysqli_query($conn,$query);
if($data)
{   echo $id;
	echo "<font color='green'>record deleted sucessfully";
	header("refresh:1;url=malldelete.php");
}
else
{
	echo"<font color='red'>sorry,delete process failed";
}
?>