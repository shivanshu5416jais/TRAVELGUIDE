<?php
    error_reporting(0);
   session_start();
   
   echo '<br>';
      echo "<h4>Oops!! Place not found</h4>";
      require('userpanel.php');
   header("refresh:2;url=userpanel.php");

?>