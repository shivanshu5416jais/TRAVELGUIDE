
<?php 
		// session_start();
error_reporting(0);
		require('../connection.php');
		require('adminpanel.php');
		if (isset($_SESSION['admin'])) 
		{
		    
		  	
		  	echo '<center><a href="update.php">add PLACE</a></center>';
	echo '<center><a href="deleteplace.php">Delete PLACE</a></center>';
		  	echo'<form action="update.php" method="post" >';
		    echo '<center><table style="border:2px solid grey;border-radius:10px;background-color:#c6e9f2;"><tr><td>CITY</td><td><input type="text" name="place" placeholder="place" required=""></td></tr></table></center>';
              
		    echo'</form>';
		    if($_SERVER['REQUEST_METHOD']=='POST')
		    {
		      $place=$_POST['place'];
		      $sql = "SELECT `id` FROM `place` where `place`='$place'";
		      $resul = mysqli_query($conn, $sql);

		     if (mysqli_num_rows($resul) > 0) 
		     {
		    // output data of each row
		      echo "PLACE ALREADY";
		 
		     }
		     else
		     {
		 


		      $query="INSERT INTO place (place) 
		      VALUES ('$place');";
		 	  $result=mysqli_query($conn,$query);
		 	  echo "<center>Added</center>";
		      header("refresh:2;url=deleteplace.php");
		 
		     }
		 	}
		 }
		else
		{
			header('Location:../index.php');
		}

 ?>


