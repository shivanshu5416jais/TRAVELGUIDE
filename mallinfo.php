<?php
include('connection.php');
error_reporting(0);
 session_start();
 $id = $_GET["id"];
 $sql = "SELECT * FROM malls where image='$id'";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result)>0)  
   {
   	while($row = mysqli_fetch_assoc($result)) 
   	{
   		echo '<center><h1>'.$row["name"].'</h1></center>';
         echo '<div style="height:400px;width:40%;float:left;">';
              echo '<h2>Location:'.$row["address"].'</h2><br>';
          echo '<h2>'.$row["about"].'</h2><br><h3>Contact:'.$row["contact"].'</h3></div>';

          echo '<div style="height:400px;width:50%;float:right;"><img style="position:relative;" src="guide/uploads/'.$id.'" width="100%" height="400px"/></div>';
         
   	}
   }



?>