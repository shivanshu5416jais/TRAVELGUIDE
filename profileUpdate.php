<?php
error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","","travelguide");

?>
<html>
<head></head>
<body>
    <?php
    if($_SESSION["user"]==true)
{
//FETCHING A PARTICULAR DETAIL WITH WHOSE SESSION USER IS LOGIN
    if($conn)
{	
echo"<h3>connection ok </h3>"	;	
$query="select * from users ";
$run_query=mysqli_query($conn,$query);
$total=mysqli_num_rows($run_query);
if($total!=0)
{
	?>
	 <style type="text/css">
    
  *{
  box-sizing: border-box;
  margin: 0px;
  padding: 0px;
  }
  nav.menu{
  width:  100%;
  height: 100px;
  /*border-radius: 25px;*/
  background-color: #129490;
  opacity: 0.5;
  position: fixed;
  }

  .leftmenu{
  width:  40%;
  line-height:100px;
  float:  left;
  }

  .leftmenu h1{
  padding-left: 10px;
  font-weight: bold;
  color: white;
  font-size: 25px;
  font-family: 'Cedarville Cursive', cursive;
  }
  
  .rightmenu{
  width:  55%;
  height: 200px;
  padding-top: 40px;
  padding-bottom: 100px;
  float: right;
  }

  .rightmenu ul{
  margin-left: 200px;
  }


  .rightmenu ul li{
  font-family: 'Monsterrat', sans-serif;
  display: inline-block;
  list-style: none;
  font-size: 18px;
  color: blue;
  font-weight: bold;
  /*line-height: 10px;*/
  margin-left: 30px;
  text-transform: uppercase;
  }

  .rightmenu ul li a{
  text-decoration: none;
  color: white;
  }

  #firstlist{ 
  color: white;
  }

  .rightmenu ul li a:hover{
  color:  darkblue;
  }
/*
  .gallery{ 
  
  margin-top: 300px;



  }*/




  div.gallery {
    margin-top: 100px;
    margin-left: 40px;
    border: 1px solid #ccc;
    float:left;
    width: 270px;
  }


  div.gallery:hover {
        
    transform: scale(1.2);
    transition: transform .5s;
  }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }

  </style>

	<nav class="menu">
		<div class="leftmenu">
			<h1>Welcome, <?php 
           require('connection.php');
           session_start();

			if(isset($_SESSION['user'])){
				
				echo $_SESSION['user'];

			}
			  else
			  {
			  	header('Location:index.php');
			  }
			
			?></h1>			
		</div>


	<div class="rightmenu">
				<ul>
					<li id="firstlist"><a href="userpanel.php">HOME</a></li>
					<li><a href="comment.php">COMMENT</a></li>
					<li><a href="profileUpdate.php?email="<?php echo $_SESSION['user']; ?>"">YOUR PROFILE</a></li>
					<li><a href="logout1.php">LOGOUT</a></li>
				</ul>
	</div>

	</nav>
	<table>
	<tr>
	<th>FIRST NAME</th>
	<th>EMAIL ID</th>
	<th>PASSWORD</th>
	<th colspan=2>OPERATIONS</th>
	<th>PROFILE PIC</th>
	</tr>
	
<?php
	while($result =mysqli_fetch_assoc($run_query))
{
        if($result['email']==$_SESSION["user"])
	echo"<tr>
	          <td>".$result['name']."</td>
	          <td>".$result['email']."</td>
	          <td>".$result['password']."</td>
			  <td><a href='profileUpdate.php?name=$result[name]& email=$result[email]& password=$result[password]'>EDIT</a></td>
			  <td><a href='deactivate.php?name=$result[name]& email=$result[email]& password=$result[password]'>DEACTIVATE</a></td>
	          <td><img src='icon/.".$result['imageSource']."' height='100' width='100'></td>
	   </tr>";
	
	
}
}
}	
else
	
	echo"<h3>OOPPS! database connection FAILED because</h3>".mysqli_connect_error();
	
    
    ?>
    
    
<br><br><br><br><br><br><br>    
<form action="" method="post" enctype="multipart/form-data">
firstname<input type ="text" name="name" value="<?php echo $_GET['name']; ?>"/> <br><br>
email<input type ="text" name="email" value="<?php  echo $_GET['email']; ?>"/> <br><br>
profile picture update  <input type="file" name="uploadfile" value=""/><br><br><br>
<input type="submit" name="submit" value="UPDATE"/>
</form>
<?php
if($_POST['submit'])
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	   $filename= $_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="icon/.$filename";
move_uploaded_file($tempname,$folder);
echo "<br><img src='$folder' height='100' width='100'/><br><br>";

	$query="UPDATE users SET name='$name',imageSource='$filename' WHERE email='$email'";
	$data=mysqli_query($conn, $query);
	if($data)
	{
	echo "<font color='green'>record update sucessful.<a href='profileUpdate.php'>CHECK UPDATE";
	}
	else
		echo "<font color='red'>record update not sucessful.<a href='profileUpdate.php'>CHECK UPDATE";
	}
else
{
	echo "<font color='blue'>Click on update button to save the changes";
}
    }
    else
        header('Location:tlogin.php');
	?>


</body>
</html>
