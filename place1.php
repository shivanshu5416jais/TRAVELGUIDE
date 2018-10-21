
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
  <title>Aflog1</title>
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


</head>
<body>
  <nav class="menu">
    <div class="leftmenu">
      <h1>Welcome, <?php 
      session_start();
      if(isset($_SESSION['user'])){
        echo " ".$_SESSION['user']."";

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
         <li><a href="comment.php">REVIEW</a></li>
          <li><a href="profileUpdate.php?email="<?php echo $_SESSION['user']; ?>"">YOUR PROFILE</a></li>
          <li><a href="logout1.php">LOGOUT</a></li>
        </ul>
  </div>

  </nav>
  <br><br><br><br><br><br>
<?php
  //session_start();
 // require('userpanel.php');
  if(!isset($_SESSION['user'])&&!isset($_SESSION['admin']))
   {
 	 header('Location:index.php');
   }
   else if(isset($_SESSION['id']))
   { echo '<br><br>';
  echo '<center><h1>';   echo "WELCOME TO ";
     //echo $_SESSION['id'];
      echo $_SESSION['place']; echo'</h1></center>'; 
      echo'<br><br>';
   }

 // header('Location:userpanel.php');
	?> 
<div class="gallery">
      <a href="h1.php">
      <img src="icon/hotelicon.jpeg" alt="5Terre" width="600px" height="400px" style="height: 160px;">
      </a>
  
      <div class="desc">CLICK HERE TO VIEW HOTELS</div>
  </div>

  <div class="gallery">
      <a href="t1.php">      <img src="icon/templeicon.jpeg" alt="Forest" width="600px" height="400px" style="height: 160px;">
      </a>
    <div class="desc">CLICK HERE TO VIEW TEMPLES</div>
  </div>
<div class="gallery">
      <a href="monument1.php">  <img src="icon/monumenticon.jpeg" alt="Forest" width="600px" height="200px" style="height: 160px;">
      </a>
    <div class="desc">CLICK HERE TO VIEW MONUMENTS</div>
  </div>
  <div class="gallery">
      <a href="mall1.php">  <img src="icon/mallicon.jpeg" alt="Forest" width="600px" height="400px" style="height: 160px;">
      </a>
    <div class="desc">CLICK HERE TO VIEW MALLS</div>
  </div>

</body>
</html>