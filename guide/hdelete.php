<?php 
require('edithotels.php');
  if (isset($_SESSION['admin'])) {
  		echo'<form action="hdelete.php" method="post" >';
echo '<input type="text" name="place" placeholder="place" required="">';
echo '<input type="text" name="name" placeholder="name" required="">';
echo '<input type="submit" name="submit" value="submit">';
echo'</form>';
if($_SERVER['REQUEST_METHOD']=='POST')
{
 $place=$_POST['place'];
 $name=$_POST['name'];
 $sql = "SELECT `id` FROM `place` where `place`='$place'";
$resul = mysqli_query($conn, $sql);

if (mysqli_num_rows($resul) > 0) {
	$row = mysqli_fetch_assoc($resul);
    $id=$row["id"];
   // echo $id;
    $sql="SELECT * FROM hotels where id='$id' AND name='$name'";
    $result=mysqli_query($conn,$sql);

    // output data of each row
    if(mysqli_num_rows($result)>0)
    {
    	$sql="DELETE FROM hotels where id='$id' AND name='$name'";
$result=mysqli_query($conn,$sql);
    }
    else
    {
    echo"NOT PRESENT";
}
 
    }
    else
    {
 


echo"PLACE NOT EXIST";
 
}
 	}
}
else
{
	header('Location:../index.php');
}
 ?>
