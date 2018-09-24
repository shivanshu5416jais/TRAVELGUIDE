<?php 
require('edithotels.php');
  if (isset($_SESSION['admin'])) {
  		echo'<form action="hinsert.php" method="post" >';
echo '<input type="text" name="place" placeholder="place" required="">';
echo '<input type="text" name="name" placeholder="name" required="">';
echo '<input type="text" name="address" placeholder="address" required="">';
echo '<input type="text" name="contact" placeholder="contact" required="">';
echo '<input type="submit" name="submit" value="submit">';
echo'</form>';
if($_SERVER['REQUEST_METHOD']=='POST')
{
 $place=$_POST['place'];
 $name=$_POST['name'];
 $address=$_POST['address'];
 $contact=$_POST['contact'];
 $sql = "SELECT `id` FROM `place` where `place`='$place'";
$resul = mysqli_query($conn, $sql);

if (mysqli_num_rows($resul) > 0) {
	$row = mysqli_fetch_assoc($resul);
    $id=$row["id"];
    echo $id;
    $sql="SELECT * FROM hotels where id='$id' AND name='$name' AND address='$address'";
    $result=mysqli_query($conn,$sql);

    // output data of each row
    if(mysqli_num_rows($result)>0)
    {
    	echo "ALREADY EXIST";
    }
    else
    {
    $sql="INSERT INTO hotels (id,name,address,contact) VALUES('$id','$name','$address','$contact');";
$result=mysqli_query($conn,$sql);
}
 
    }
    else
    {
 


 $query="INSERT INTO place (place) 
VALUES ('$place');";
 		$result=mysqli_query($conn,$query);
 		 $sql = "SELECT `id` FROM `place` where `place`='$place'";
$resul = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($resul);
    $id=$row["id"];
    echo $id;
    // output data of each row
    $sql="INSERT INTO hotels (id,name,address,contact) VALUES('$id','$name','$address','$contact');";
$result=mysqli_query($conn,$sql);

 
}
 	}
}
else
{
	header('Location:../index.php');
}
 ?>
