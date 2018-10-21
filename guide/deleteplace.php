
<?php 
// session_start();
require('../connection.php');
require('adminpanel.php');
error_reporting(0);
if (isset($_SESSION['admin']))
  {

	
	echo '<center><a href="update.php">add PLACE</a></center>';
	echo '<center><a href="deleteplace.php">Delete PLACE</a></center>';
	$query="SELECT * FROM place ";
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
	<table style="margin-left: auto;margin-right: auto;">
	<tr>
	<th>place</th>
	<th colspan=2></th>
	</tr>
	
<?php
	while($result =mysqli_fetch_assoc($run_query))
{
	echo'<tr>
	          <td>'.$result["place"].'</td>
	          <td><a href="editp.php?place='.$result["place"].'&& id='.$result["id"]. '">EDIT</a></td>
			  <td><a href="deletep.php?id='.$result["id"].'">DELETE</a></td>
	   </tr>';
	
	
}
}
  }
	else{
		header('Location:../index.php');
        }

	?>
