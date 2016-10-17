<?php
	
$conn = mysqli_connect('localhost', 'root', '', 'friends_pharmacy') or die(mysql_error());

if(isset($_POST['login']))
{ 	
	$email=mysqli_real_escape_string($conn, $_POST['user']);
	$password=mysqli_real_escape_string($conn, $_POST['pass']);
	
	$query1 = mysqli_query($conn, "SELECT * FROM customer WHERE email='$email'");	
	$numrows1 = mysqli_num_rows($query1);
	
	$query2 = mysqli_query($conn, "SELECT * FROM staff WHERE email='$email'");	
	$numrows2 = mysqli_num_rows($query2);
	
	if($numrows1 != 0)
	{
		while($row = mysqli_fetch_assoc($query1))
		{
			$uname = $row['email'];
			$pword = $row['password'];
		}
		$encrypt_password=md5($password);
		if($email == $uname AND $encrypt_password == $pword)
		{
			
			$_SESSION['email'] = $email;
			$message = "Welcome to Friends Pharmacy";
			echo "<script type='text/javascript'>alert('$message');</script>";	
			

		}
		else
		{
			$message = "Your password is incorrect";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	else if($numrows2 != 0)
	{
		while($row = mysqli_fetch_assoc($query2))
		{			
			$uname = $row['email'];
			$pword = $row['password'];
		}
		$encrypt_password=md5($password);
		if($email == $uname AND $encrypt_password == $pword)
		{
			
			$_SESSION['email'] = $email;			
			$message = "Welcome to Friends Pharmacy";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$message = "Your password is incorrect";
			echo "<script type='text/javascript'>alert('$message');</script>";

		}
	}
	else
	{
		$message = "Your email is incorrect. Please try again or Sign Up";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}


?>