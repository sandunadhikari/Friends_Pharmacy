<?php

	$conn = mysqli_connect('localhost', 'root', '', 'friends_pharmacy') or die(mysqli_error());
	
	$post_id = $_POST['post_id'];
	$reply = $_POST['reply'];
	$day = date("Y-m-d");

	$reply_query = mysqli_query($conn, "INSERT INTO reply (comment_id, reply, day) VALUES('$post_id', '$reply', '$day')");

?>