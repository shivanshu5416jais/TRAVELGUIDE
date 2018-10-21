<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","travelguide");
$email=$_GET['email'];
$query="delete from users where email='$email'";
$data=mysqli_query($conn,$query);
if($data)
{
	
    echo "<font color='green'>record deleted sucessfully.<a href='admin_panel.php'>CHECK UPDATE";

}
else
{
	echo "<font color='red'>record delete not sucessful.<a href='admin_panel.php'>CHECK UPDATE";
}
?>