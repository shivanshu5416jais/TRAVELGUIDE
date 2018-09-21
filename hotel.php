 <?php

 include_once('connection.php');
 include('place.php');
 include('h1.php');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
header('Location:h1.php');

?>