<?php

include 'db.php';

if(isset($_POST['submit']))
{
	$first = $_POST['fname'];
	$last = $_POST['lname'];
	$gender = $_POST['gender'];
	$bday = $_POST['bday'];
	$nic = $_POST['nic'];
	$statues = $_POST['statues'];
	$blood = $_POST['blood'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$occupation = $_POST['occupation'];
	$start = $_POST['date'];	

	$sql = "INSERT INTO staff (first_name, last_name, gender, birthday, nic, marital_statues, blood_group, address, contact_number, email, password, occupation, start_date) 
	VALUES ('$first','$last','$gender','$bday','$nic','$statues','$blood','$address','$contact','$email','$password','$occupation','$start')";

	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	mysqli_close($conn);
	header("Location: index.php");
}

?>