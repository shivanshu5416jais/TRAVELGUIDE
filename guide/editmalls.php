<?php 
// session_start();
error_reporting(0);
require('../connection.php');
require('adminpanel.php');
  if (isset($_SESSION['admin'])) {
    
  	echo "<center>EDIT MALLS";
  	echo'<a href=mallinsert.php>ADD MALLS</a>';
  	echo'<a href=malldelete.php>DELETE MALLS</a></center>';
}
else
{ header('Location:../index.php');
}
 ?>


