 <?php

 include_once('connection.php');
 include('place.php');
 include('t1.php');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
header('Location:t1.php');

?>