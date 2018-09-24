<?php
  include_once('connection.php');
  session_start();
  if(isset($_SESSION['user']))
  {
  	header('Location:userpanel.php');

  }
  else if(isset($_SESSION['admin']))
  {
    header('Location:adminpanel.php');

  }
  $response='';
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
  	$name=$_POST['name'];
  	$email=$_POST['email'];
  	$password=$_POST['password'];
  	$response='';
  	$correct_response='';
  	if(empty($name) || empty($email) || empty($password))
  	{
  		$response='Fields cant be empty';
  	}
  	else
  	{
  		$query="SELECT `email` FROM `users` WHERE `email`='$email'";
  		$result=mysqli_query($conn,$query);
  		
  	if(mysqli_num_rows($result) > 0)
            {
                $response = 'Email already registered';
            }
            else
            {
                 /** 
                 *  you can use encryption for password for security
                 * there are many encryption functions like md5 , sha1 , sha156 etc
                 */
                $password = md5($password);

                /** 
                 * register the user to databse using the connection variable
                 * include the connection file for using the connection variable
                 */

                //write the query for inserting data into databse
                $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

                //execute the query using mysqli_connect() function which returns true on success
                if( mysqli_query($conn, $query) )
                {
                    $correct_response = 'Registration successfull...';
                    header("refresh:2;url=tlogin.php");
                }
                else
                {
                    $response = 'Something went wrong';
                }
            }
        }
    }
?>