<?php
// session_start();
error_reporting(0);
  require('register.php');
  if(isset($_SESSION['user']))
    {
        
        
        header('Location:userpanel.php');
    }
     if(isset($_SESSION['admin']))
    {
        
        
        header('Location:guide/adminpanel.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<title>PAGE1</title>

	<style type="text/css">
	/** {
    box-sizing: border-box;
	  }
*/
		
		body{
			background-image: url(ALBATROSS/img1.png);
			background-size: cover;
			
		}

		.alba{
			margin: 0px;
			width:70%;
			height: 80%;
		}
		.alba h1{
		font-family: 'Montserrat', sans-serif;
		font-size: 100px;
		color:#707070;
		margin: 0px;
		padding: 370px 0px 0px 50px;
		}

		.alba h4{
		font-family: 'Montserrat', sans-serif;
		font-size: 50px;
		color:#707070;
		margin: 0px;
		padding: 0px 0px 10px 210px;
		}
		body {
        
   /* background-color: black;*/
}



.container {

	position: absolute;
    padding: 16px;
    width:30%;
    border-radius: 30px;
    box-shadow: 5px 10px 8px #7CA5B8;
    margin-left: 810px;
    top: 1%;
    bottom: 0%;
    background-color: white;
    opacity: 0.9;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
    font-family: Arial, Helvetica, sans-serif;
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

.container h1{

font-family: Arial, Helvetica, sans-serif;

}

.container p{

    font-family: Arial, Helvetica, sans-serif;
}

.container label{
    font-family: Arial, Helvetica, sans-serif;
}
input[type=text]:focus, input[type=password]:focus {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #ddd;
    outline: none;
}


hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}


.registerbtn {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #14DCCF;
    color: white;
    padding: 16px 20px;
    margin: 8px ;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

.loginbtn {
    background-color: #14DCCF;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    margin-top: 4px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.loginbtn:hover {
    opacity: 1;
}

a {
    color: dodgerblue;
}

.signin {
    background-color: #f1f1f1;
    text-align: center;
    width: 20%;
    float: right;
}
	</style>

</head>

<body>
    <a href="admin/admin_login.php">ADMIN</a>
	<div class="alba">
	 <h1>ALBATROSS</h1>
	 <h4>...the Travel Guide</h4>
	</div>
    <script>
    function validateForm() {
        var $check=0;
    var x1 = document.forms["myForm"]["password"].value;
        var x2 = document.forms["myForm"]["firstname"].value;
        var x3 = document.forms["myForm"]["email"].value;
        var x4 = document.forms["myForm"]["hometown"].value;
        var x5 = document.forms["myForm"]["gender"].value;
        
    if (x1 == "" || x2 == "" || x3 == "" || x4 == "" || x5 == "") {
        alert("all must be filled out");
        $check=1;
        return false;
    
    }
}
    </script>

	
		<form action="index.php" onsubmit="return validateForm()" method="post" class="register_form">
   <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
		<?php
					if(!empty($response)){
						echo "<div class='form-group'><span>".$response."</span> </div><hr>";
                           header("refresh:3;url=index.php");
					}
					if(!empty($correct_response)){
						echo "<div class='formn-group'><span style='color:green;'>".$correct_response."</span></div><hr>";
					      header("refresh:3;url=index.php");
                    }
				?>
				 
    <label for="name"><b>name</b></label><br>
    <input type="text" placeholder="name" name="name" ><br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="email" name="email" ><br>

    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="password" name="password" ><br>
    <hr>
    <input type="submit" class="registerbtn" value="Register"></button>
    <cenetr><a class="registerbtn" href="tlogin.php" style="position: relative;width: 90%;
    padding: 16px 20px;
    margin-left: 8px;
    margin-top: 4px;
    text-align: center;
    text-decoration: none;
    color: white;
    display: inline-block;"> Have an account already? LOGIN</a></cenetr>
  </div>
	</form>


</body>

</html>
