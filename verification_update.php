<?php
error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","","travelguide");
$email=$_SESSION["email"];
$query1="SELECT * FROM users where `email`='$email'";
    $result=mysqli_query($conn, $query1);
if($result)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $a=$row["verification"];
        
    }
}
$query="UPDATE users set verification='1' where email='$email'";
    $data=mysqli_query($conn, $query);
if($a==2)
{
    if($data)
    
    {
    
    echo "<font color='green'>account verified sucessfully.<a href='tlogin.php'>click here to login</a>";
    }
    else
        echo "<font color='red'>account verification unsucessfull CONTACT ADMIN OR TRY REGISTER AGAIN.<a href='index.php'>CLICK TO REGISTER AGAIN</a>";
    
}
else
    echo "OPPS! Sorry the link has been expired";
    ?>