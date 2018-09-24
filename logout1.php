<?php
  // include('connection.php');
    session_start();
    //check if the session exists
    if(isset($_SESSION['user'])||isset($_SESSION['admin']))
    {
        //destroy the existing session
        session_destroy();
        //redirect to home page
        header('Location:index.php');
    }
    else
    {  session_destroy();

        header('Location:index.php');
    }
?>