<?php
 $servername='localhost';
 $username='root';
 $password=null;
 $db_name='travelguide';

 $conn=mysqli_connect($servername,$username,$password,$db_name);
 if(!$conn)
 {
 	die('Connection failed'.mysqli_connect_error());
 }
 ?>