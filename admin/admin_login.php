<?php
session_start();
$conn=mysqli_connect("localhost","root","","travelguide");
?>
<html>
<head></head>
<body>
<?php
error_reporting(0);
if(isset($_POST['login'])){
	
$email = $_POST['email'];
$password = $_POST['password'];
$password=md5($password);
 $query="select * from admin1 where email='$email' AND password='$password'";
 
$run_query=mysqli_query($conn,$query);
if($run_query){

if(mysqli_num_rows($run_query)>0){
	
$_SESSION["email"]=$email;
$_SESSION["password"]=$password;
header("Location:admin_panel.php");
  }
else
{
echo"<div class='alert alert-warning'><strong>warning!</strong>admin login not sucessfull...</div>";
}
}
}
?>
<a href="../index.php">NEW USER</a>
<a href="../tlogin.php">REGISTERED USER</a>
<center><h1>*****login for admin*****</h1></center>
<div class="form">
<form action="admin_login.php" method="POST">
<center>
<table>
<tr>
<th></th>
<th>#login form#</th>
</tr>
<tr>
<td>email</td>
<td><input type="email" name="email" placeholder="emailid " required=""></td> 
</tr>
<tr>
<td> password</td>
<td><input type="password" name="password"placeholder="password" required=""></td> 
</tr>
<tr>
<td></td>
<td><input type="submit" value="login" name="login"></td> 
</tr>
</table>
</center>
</form>
</div>
</body>
</html>

