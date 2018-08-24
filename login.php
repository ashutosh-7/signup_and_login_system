<?php
require 'config.php';
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
		<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
	<div class="left">
		<ul>
			<li><a href="index.php" class="home">Home</a></li> 
			<li><a href="register.php" class="login">Registration</a></li>
		</ul>

	</div>
	<div class="login-page">
		<div class="login-form">
			<form action="login.php" method="POST">
				
				<input type="text" placeholder="username" name="username"  required="required">
				<input type="password" placeholder="password" name="password" required="required"><br>
				<button name="login">LOGIN</button>
				
			</form>
			
		</div>
		

	</div>

</body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";

if(isset($_POST['login']))
{
	 $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      $username = $_POST['username'];
      $password = $_POST['password']; 
                          $encryption=md5($password) ;               



      $query="SELECT * from users WHERE username='$username' AND password='$encryption'";

      $query_run=mysqli_query($conn,$query);
        $result=mysqli_num_rows($query_run);
        if($result>0)
        {
        	$_SESSION['username']=$username;
        	header('location:success.php');

        }
        else{
        	header('location:error.php');

        }
    }


?>