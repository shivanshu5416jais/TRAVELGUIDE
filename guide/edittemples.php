<?php 
// session_start();
error_reporting(0);
require('../connection.php');
require('adminpanel.php');
  if (isset($_SESSION['admin'])) {
    
  	echo "<center>EDIT TEMPLES";
  	echo'<a href=tinsert.php>ADD TEMPLES</a>';
  	echo'<a href=tdelete.php>DELETE TEMPLE</a></center>';
}
else
{ header('Location:../index.php');
}
 ?>
