<?php
  session_start();
  error_reporting(0);
  require('connection.php');
  //include('place1.php');
  //include('info.php');
  if(isset($_SESSION['user'])||isset($_SESSION['admin']))
  {
	echo "<h1>Welcome: ".$_SESSION['user']."</h1>";
    echo '<div style="float:right;"><a href="userpanel.php">HOME</a></div>';

  }
  else
  {
  	header('Location:index.php');
  }
  $a=$_SESSION['id'];

   echo "<center><h1>MONUMENTS</h1></center><br>";
   $sql = "SELECT * FROM monuments where id=$a";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0)  
   {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) 
        {
     //      $id=$row["name"];
    	// $a=$row["image"];
    	echo '<div style="width:100%;height:300px;"><a style="height:300px;width:48%;float:left;border:2px solid black;border-radius:20px;" href="monumentinfo.php?id=' . $row["image"] . '"><div style="height:300px;width:100%;float:left;border:2px solid black;border-radius:20px;">';
        echo  " <center><h1>  " . $row["name"]. "</h1></center><br><br>";
       $image = $row['image']; 
        // echo $a;
       echo '<img style="position:relative;float:right;" src="guide/uploads/'.$image.'" width="100%" height="60%" />';
        // echo '<img style="position:relative;" src="guide/uploads/'.$a.'" width="100%" height="200px" />';
        echo '</div></a></div>';
        }

    } 
    else 
    {
    echo "<center><h2><font color='red'>OOPs No Monument Found</h2></center>";
    }


 ?>