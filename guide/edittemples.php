<?php 
session_start();
require('../connection.php');
require('adminpanel.php');
  if (isset($_SESSION['admin'])) {
    
  	echo "EDIT TEMPLES";
  	echo'<a href=tinsert.php>ADD TEMPLES</a>';
  	echo'<a href=tdelete.php>DELETE TEMPLE</a>';
}
else
{ header('Location:../index.php');
}
 ?>
