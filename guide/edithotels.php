<?php 
session_start();
require('../connection.php');
require('adminpanel.php');
  if (isset($_SESSION['admin'])) {
    
  	echo "EDIT HOTELS";
  	echo'<a href=hinsert.php>ADD HOTELS</a>';
  	echo'<a href=hdelete.php>DELETE HOTEL</a>';
}
else
{ header('Location:../index.php');
}
 ?>


