<?php

if(isset($_POST['submit']))
{
	$conn = mysqli_connect('localhost', 'root', '', 'friends_pharmacy') or die(mysqli_error());
	
	$first = mysqli_real_escape_string($conn, $_POST['fname']);
	$last = mysqli_real_escape_string($conn, $_POST['lname']);
	$nic = mysqli_real_escape_string($conn, $_POST['nic']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$bday = mysqli_real_escape_string($conn, $_POST['bday']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	
	$encrypt_password=md5($password);
	$sql = "INSERT INTO customer (first_name, last_name, nic, email, password, birthday, gender, contact_number) VALUES ('$first','$last','$nic','$email','$encrypt_password','$bday','$gender','$contact')";
	
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	mysqli_close($conn);	
	
	header("Location: index.php");	
}

?>