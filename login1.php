<?php

 session_start();
 // if(isset($_SESSION['user']))
 // {
 // 	header('Location:index.php');
 // }
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
 		$query="SELECT `email`,`password` FROM `users` WHERE `email`='$email' AND `password`='$password'";
 		$result=mysqli_query($conn,$query);
 		if(mysqli_num_rows($result)>0)
 		{
 			$row=mysqli_fetch_assoc($result);
 			$_SESSION['user']=$row['email'];
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