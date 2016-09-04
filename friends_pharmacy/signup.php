<?php

include 'db.php';

if(isset($_POST['submit']))
{
	$first = $_POST['fname'];
	$last = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$bday = $_POST['bday'];
	$blood = $_POST['blood'];
	$gender = $_POST['gender'];
	$contact = $_POST['contact'];
	
	
	$sql = "INSERT INTO customer (first_name, last_name, email, password, birthday, blood_group, gender, contact_number) VALUES ('$first','$last','$email','$password','$bday','$blood','$gender','$contact')";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	mysqli_close($conn);	
	
	header("Location: index.php");
}

?>