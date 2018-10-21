<?php 
// session_start();
require('../connection.php');
require('edithotels.php');
error_reporting(0);
if (isset($_SESSION['admin']))
  {

  $query="SELECT * FROM hotels ";
$run_query=mysqli_query($conn,$query);
$total=mysqli_num_rows($run_query);
if($total!=0)
{
  echo '<style>
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
  echo'<table style="margin-left:auto; margin-right:auto;" >
  <tr>
  <th>place id</th>
  <th>name</th>
  <th>address</th>
  <th>contact</th>
  <th ></th>
  </tr>';
  

  while($result =mysqli_fetch_assoc($run_query))
{
  echo'<tr><center>';
  $a=$result["id"];
     $q="SELECT name FROM place WHERE id='$a'";
     $t=mysqli_query($conn,$q);
           echo' <td>'.$a.'</td>
             <td>'.$result["name"].'</td>
               <td>'.$result["address"].'</td>
                 <td>'.$result["contact"].'</td> 
        <td><a href="hdeletep.php?id='.$result["name"].'&& address='.$result["address"].'">DELETE</a></td>';
      echo' <td><a href="hupdate.php?name='.$result["name"].'&& address='.$result["address"].'&& about='.$result["about"].'&& contact='.$result["contact"].'">UPDATE</a></td>';
  echo ' </center> </tr>';
  
  
}
echo '</table>';

}
  }
  else{
    header('Location:../index.php');
        }

  ?>
