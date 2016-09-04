<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "friends_pharmacy";	
	
$conn = mysqli_connect($host, $user, $password, $db) or die(mysqli_error());

session_start();

if(isset($_POST['login']))
{ 	
	$email = $_POST['user'];
	$password = $_POST['pass'];

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
		if($email == $uname AND $password == $pword)
		{
			header("Location: index.php");
			@$_SESSION['email'] = $email;			
		}
		else
		{
			echo "Your Password is incorrect!";
		}
	}
	else if($numrows2 != 0)
	{
		while($row = mysqli_fetch_assoc($query2))
		{
			$uname = $row['email'];
			$pword = $row['password'];
		}
		if($email == $uname AND $password == $pword)
		{
			header("Location: main.php");
			@$_SESSION['email'] = $email;			
		}
		else
		{
			echo "Your Password is incorrect!";
		}
	}
	else
	{
		die("You are not a member, please sign up");
	}
}


?>