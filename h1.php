<?php
session_start();
require('connection.php');
 if(isset($_SESSION['user'])){
				echo "<h1>Welcome: ".$_SESSION['user']."</h1>";

			}
			  else
			  {
			  	header('Location:index.php');
			  }
			
require('connection.php');
$a=$_SESSION['id'];
 echo "WELCOMR";
 $sql = "SELECT id, name, address,contact FROM hotels where id=$a";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  " <h1>  " . $row["name"]. "</h1><br><h3> " . $row["address"]. "</h3><br><br>";
    }
} else {
    echo "0 results";
}


 ?>