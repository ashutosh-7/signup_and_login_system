<?php
require 'config.php';
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>

	<div >
		<ul>
			<li><a href="index.php" class="home">Home</a></li> 
			<li><a href="login.php" class="login">Log In</a></li>
		</ul>

	</div>






	

<div class="form">
			<form class="registerform" method="POST" action="register.php"> 
				<h3 class="start">SIGN UP FORM!</h3>
				<input type="text" placeholder="name" name="name" required="required">
				<input type="text" placeholder="username" name="username" required="required">
				<input type="password" placeholder="password" name="password" required="required">
				<input type="text" placeholder="e-mail" name="email" required="required">


				
				<select class="gender" name="gender" required="required">
					<option value="gender">........</option>


					<option value="Male">Male</option>
                    <option value="Female">Female</option>
				</select>
				<input type="text" placeholder="Mobile No." name="mobile" required="required">
				<input type="text" placeholder="Student No." name="stdno" required="required">
				<input type="text" placeholder="branch" name="branch" required="required">
				<button name="submit">Sign Up</button>

			</form>
</body>
</html>
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
if(isset($_POST['submit']))   //submit button press ho gaya
{

                    $name=$_POST['name'];
                    $username=$_POST['username'];
                    $password=$_POST['password']; 
                    $encryption=md5($password) ;               
                    
                   $email=$_POST['email'];
                    $mobile=$_POST['mobile'];
                    $gender=$_POST['gender'];
                    $branch=$_POST['branch'];
                    $stdno=$_POST['stdno'];


                    $query="SELECT * from users WHERE username='$username' ";
                    $query_run=mysqli_query($conn,$query);
                    $result=mysqli_num_rows($query_run);



                    if($result>0)
                    {
                       echo "Username already taken!";
                    }

                    else
                    {

                    	$query="INSERT INTO users (name,username,email,mobile,password,branch,stdno,gender) 
         VALUES ('$name','$username','$email','$mobile','$encryption','branch','$stdno','$gender')";
         $query_run=mysqli_query($conn,$query);
         if ($query_run) 
         {
                       
                        header('location:registersuccess.php');
         }
         else
         {
         	echo "Error!";

         }

                    }




}
	else
{
	echo " ";


}
?>



