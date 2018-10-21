<?php
error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","","travelguide");
$email=$_GET['email'];
$query="DELETE from users where email='$email'";
$data=mysqli_query($conn,$query);
if($data)
{
	
    echo "<font color='green'>record deleted sucessfully.<a href='tlogin.php'>CLICK HERE TO GO TO LOGIN PAGE";

}
else
{
	echo "<font color='red'>record delete not sucessful.<a href='tlogin.php'>ERROR OCCURED CLICK TO LOGIN AGAIN";
}
session_destroy();


?>