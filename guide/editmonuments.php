<?php 
// session_start();
error_reporting(0);
require('../connection.php');
require('adminpanel.php');
  if (isset($_SESSION['admin'])) {
    
  	echo "<center>EDIT MONUMENTS";
  	echo'<a href=moninsert.php>ADD MONUMENTS</a>';
  	echo'<a href=mondelete.php>DELETE MONUMENTS</a></center>';
}
else
{ header('Location:../index.php');
}
 ?>


