<html>
<style>
td{
	padding:10px;
}
</style>
<?php
error_reporting(0);
session_start();
if($_SESSION["email"]==true)
{

echo"<h1>Welcome To Travel Guide</h1>";
echo"<h2>YOU ARE A ADMIN YOU CAN DO ANYTHING WITH DATABASE</h2>";


	echo"hello"." ".$_SESSION["email"];
	$conn=mysqli_connect("localhost","root","","travelguide");
if($conn)
{	
echo"<h3>connection ok </h3>"	;	
$query="select * from users ";
$run_query=mysqli_query($conn,$query);
$total=mysqli_num_rows($run_query);
if($total!=0)
{   echo '<style>
table {  
    color: #333;
    font-family: Helvetica, Arial, sans-serif;
    width: 640px; 
    border-collapse: 
    collapse; border-spacing: 0; 
}

td, th {  
    border: 1px solid transparent; /* No more visible border */
    height: 30px; 
    transition: all 0.3s;  /* Simple transition for hover effect */
}

th {  
    background: #DFDFDF;  /* Darken header a bit */
    font-weight: bold;
}

td {  
    background: #FAFAFA;
    text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */        
tr:nth-child(even) td { background: #F1F1F1; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */        
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; }  
/* Hover cell effect! */
</style>
  ';
	?>
	<table>
	<tr>
	<th>FIRST NAME</th>
	<th>EMAIL ID</th>
<!-- 	<th>HOMETOWN</th>
	<th>GENDER</th> -->
	<th>PASSWORD</th>
	<th colspan=2>OPERATIONS</th>
	</tr>
	
<?php
	while($result =mysqli_fetch_assoc($run_query))
{
	echo"<tr>
	          <td>".$result['name']."</td>
	          <td>".$result['email']."</td>
	         
	          <td>".$result['password']."</td>
			  <td><a href='update.php?name=$result[name]& email=$result[email]&  password=$result[password]'>EDIT</a></td>
			  <td><a href='delete.php?name=$result[name]& email=$result[email]&  password=$result[password]'>DELETE</a></td>
			  <td><a href='comments.php?name=$result[name]& email=$result[email]&  password=$result[password]'>COMMENTS</a></td>
	   </tr>"; 
	
	
}
}
}	
else
	
	echo"<h3>OOPPS! database connection FAILED because</h3>".mysqli_connect_error();
	
	echo "<form action='admin_logout.php' method='POST'>";
echo"<button type='submit' name='submit'>log out</button>";
echo '</form>';

}
else
{
	header('Location:admin_login.php');

	}


?>

</table>
</html>


