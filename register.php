<?php
 error_reporting(0);
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
  if($_SERVER['REQUEST_METHOD']=='POST' && $check==0)
{ $hash = md5( rand(0,1000) );
          	$name=$_POST['name'];
          	$email=$_POST['email'];
          	$password=$_POST['password'];
          	$response='';
          	$correct_response='';
          	if(empty($name) || empty($email) || empty($password))
          	{
          		$response='Fields cannot be empty';
          	}
  	else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email))
{ 
$response='Please enter a valid email';
}            
      
else if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $response = "Only letters and white space allowed"; 
    }

                    else if ( preg_match('/\s/',$password) ){

                $response='Your password must not contain any whitespace';}
    else
      {
  	   $query="SELECT `email` FROM `users` WHERE `email`='$email'";
  		 $result=mysqli_query($conn,$query);
  		//check if email is already registered
  	        if(mysqli_num_rows($result) > 0)
            {
                $response = 'Email already registered';
            }
       // if new email is being registered     
            else
            {
                $password = md5($password);
                $verification=2;
                //write the query for inserting data into databse
                $query = "INSERT INTO `users`(`name`, `email`, `password`,`verification`) VALUES ('$name','$email','$password','$verification')";
               //execute the query using mysqli_connect() function which returns true on success
                if( mysqli_query($conn, $query) )
                {    
                     
require './phpm/helo.php';

$mail = new PHPMailer;
//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'shivanshu5416jaiswal@gmail.com';                 // SMTP username
$mail->Password = 'shiv1357';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('shivanshu5416jaiswal@gmail.com', 'TRAVEl GUIDE');
$mail->addAddress($email);     // Add a recipient              // Name is optional
//$mail->addReplyTo(EMAIL);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'TRAVEL GUIDE WELCOMES';
$password=md5($_POST['password']);
$query1="select * from users where email='$_POST[email]' AND password='$password'";
$run_query=mysqli_query($conn,$query1);
if($run_query){
  
if(mysqli_num_rows($run_query)>0){
  
$_SESSION["email"]=$email;
$_SESSION["password"]=$password;
  }
else
{
echo"<div class='alert alert-warning'><strong>warning!</strong>session creation not sucessfull...</div>";
}
}

$mail->Body    = 'Your Activation Code is '.$hash.' Please Click On This link <a href="http://localhost/travelguides/verification_update.php">'.$hash.'</a>to activate your account.';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent please verify your email:';
    echo $email;
}


                    $correct_response = 'Registration successfull...';
                    header("refresh:3;url=tlogin.php");

                    // to take to login page within 2 sec
}                    //                
              
                else
                {
                    $response = 'Something went wrong';
                }
        }
            
         
      }
    }
?>