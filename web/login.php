<?php

session_start();
	
$conn = mysqli_connect('localhost', 'root', '', 'friends_pharmacy') or die(mysql_error());

if(isset($_POST['login']))
{ 	
	$email=mysqli_real_escape_string($conn, $_POST['user']);
	$password=mysqli_real_escape_string($conn, $_POST['pass']);	

	$query = mysqli_query($conn, "SELECT * FROM customer WHERE email='$email'");

	$numrows = mysqli_num_rows($query);

	if($numrows != 0)
	{
		while ($row = mysqli_fetch_assoc($query)) 
		{
			$dbemail = $row['email'];
			$dbpassword = $row['password'];
		}
		if($email == $dbemail && md5($password) == $dbpassword)
		{
			echo'<script>alert("Welcome to Friends Pharmacy."); window.location.href="index.php";</script>';  
			$_SESSION['email'] = $email;
			
		}
		else
		{
			echo'<script>alert("Your password is incorrect."); window.location.href="index.php";</script>';  
		}
	}
	else
	{
		echo'<script>alert("You are not registered. \nPlease create an account."); window.location.href="index.php";</script>';  
	}
}

?>