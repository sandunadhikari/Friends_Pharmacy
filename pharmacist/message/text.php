<?php

	$recipient=$_POST['recipient'];
	$message=$_POST['message'];
	
	echo "Your message is sucsesfuly";
	

	// Authorisation details.
	$username = "mithsendesilva@gmail.com";
	$apiKey = "T3IUHWbFrYs-ET7Tuv2tRA3LzJTq7wyyqsERuBJkf5";
	//$hash = "28c50dbddbb8acce9afd17b12cf5fa99337b3eac";
        //$pword = "Mm@0711446323";
                 
	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "Friends Pharmacy"; // This is who the message appears to be from.
	$numbers = "'94'+'$recipient'"; // A single number or a comma-seperated list of numbers
	$message = "$message";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&apiKey=".$apiKey."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
?>