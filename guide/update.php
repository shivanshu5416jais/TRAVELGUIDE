
<?php 
session_start();
require('../connection.php');
require('adminpanel.php');
  if (isset($_SESSION['admin'])) {
    
  	echo "strihng";
  	echo'<form action="update.php" method="post" >';
echo '<input type="text" name="place" placeholder="place" required="">';

echo'</form>';
if($_SERVER['REQUEST_METHOD']=='POST')
{
 $place=$_POST['place'];
 $sql = "SELECT `id` FROM `place` where `place`='$place'";
$resul = mysqli_query($conn, $sql);

if (mysqli_num_rows($resul) > 0) {
    // output data of each row
  echo "PLACE ALREADY";
 
    }
    else
    {
 


 $query="INSERT INTO place (place) 
VALUES ('$place');";
 		$result=mysqli_query($conn,$query);
 		echo "Added";
    
 
}
 	}}
else{
	header('Location:../index.php');
}

 ?>


