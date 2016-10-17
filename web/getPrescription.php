<html>
<head>

</head>
<body>

<?php
session_start();

if(isset($_SESSION['email']) && !empty($_SESSION['email']))
{
	if(isset($_POST['submit']))
	{
		if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
		{
			echo "Please select an image";
		}
		else
		{
			$image = addslashes($_FILES['image']['tmp_name']);
			$name = addslashes($_FILES['image']['name']);
			$date = date("Y-m-d");
			$image = file_get_contents($image);
			$image = base64_encode($image);
			saveImage($name,$date,$image);
		}
	}
}
else
{
	echo "You must be logged in before upload a prescription";  
}


function saveImage($name,$date,$image)
{
	$conn = mysqli_connect('localhost', 'root', '', 'friends_pharmacy') or die(mysql_error());

	$query = "INSERT into prescription (name, order_date, image) values ('$name', '$date', '$image')";
	
	$result = mysqli_query($conn,$query);
	
	if($result)
	{
		echo "Image Uploaded.";
	}
	else{
		echo "Image not uploaded.";
	}	
}

?>	


</body>
</html>



