<?php
error_reporting(0);
 session_start();
 include_once('connection.php');
 $response='';
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
 	$email=$_POST['email'];
 	$password=$_POST['password'];


 	$response='';
 	$password=md5($password);
 	if(empty($email)||empty($password))
 	{
 		$response='Fields cannot be empty';
 	}
 	else
 	{
 		$query="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password' AND verification='1'";
 		$result=mysqli_query($conn,$query);
 		if(mysqli_num_rows($result)>0)
 		{  
 			$row=mysqli_fetch_assoc($result);
 			$_SESSION['user']=$row['email'];
 			 function hit_count()
{
	$filename='count.txt';
    $handle=fopen($filename,'r');
	$current=fread($handle,filesize($filename));
    $handle=fopen($filename,'w');
	$current=$current+1;
	fwrite($handle,$current);
fclose($handle);
	}
    hit_count();
  			header('Location:userpanel.php');

 		}
 		$query="SELECT `email`,`password` FROM `admin` WHERE `email`='$email' AND `password`='$password'";
 		$result=mysqli_query($conn,$query);
 		if(mysqli_num_rows($result)>0)
 		{
 			$row=mysqli_fetch_assoc($result);
 			$_SESSION['admin']=$row['email'];
 			header('Location:../travelguides/guide/adminpanel.php');

 		}
 		else
 		{
 			$response='Email or Password is wrong';
 		}
 	}
 }
 ?>