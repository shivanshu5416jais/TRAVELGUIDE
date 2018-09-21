<?php

 include_once('connection.php');
 include_once('place1.php');
 $place=$_POST['place'];
 $sql = "SELECT `id` FROM `place` where `place`='$place'";
$resul = mysqli_query($conn, $sql);

if (mysqli_num_rows($resul) > 0) {
    // output data of each row
    $ro = mysqli_fetch_assoc($resul);
        $_SESSION['id']=$ro['id'];

    
 


 $query="SELECT `place` FROM `place` WHERE `place`='$place'";
 		$result=mysqli_query($conn,$query);
 		if(mysqli_num_rows($result)>0)
 		{    $sql = "SELECT `id` FROM `place` where `place`='$place'";
$resul = mysqli_query($conn, $sql);

if (mysqli_num_rows($resul) > 0) {
    // output data of each row
    $ro = mysqli_fetch_assoc($resul);
        $_SESSION['id']=$ro['id'];

    
 
}
 			$row=mysqli_fetch_assoc($result);
 			$_SESSION['place']=$row['place'];
 			header('Location:place1.php');
 		}

 		}
 		
else{      $a="NOT";
echo $a;
 			header('Location:userpanel.php');
 		}
?>