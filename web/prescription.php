<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Friends Pharmacy</title>

	<meta charset="utf-8" />
	<link rel="stylesheet" href="../public/css/web/prescriptionStyle.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php require '../includes/customer_header.php';?>
		
	<div class="content">
		<article class="description">
				
			<p>Ordering from our online pharmacy is easy, we promise! There is a convenient way to order your prescription medication from Friends Pharmacy. The fastest way to order is to  Create a Friends Pharmacy account on this website and place your online drug order right over the web by uploading a clear image of the prescription. You can speak to one of our friendly Patient Service Representatives by calling us at 0112556556 or simply <a href="contact.php">Contact Us</a>.</p> 
				
			<p><b>Upload Your Prescription Here</b></p>
			
			<form action=" " method="post" enctype="multipart/form-data">
			    Select image to upload: <br><br>
			    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
			    <input type="submit" value="Upload Image" name="submit">
			</form>
			
		</article>
	</div>

<?php
	
	if(isset($_POST['submit']))
	{
		//specifies the directory where the file is going to be placed
		$target_dir = "../customer/uploads/";


		//specifies the path of the file to be uploaded
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

		//check whether the file already exists in the "uploads" folder.
		$uploadOk = 1;


		//holds the file extension of the file
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


		// Check if image file is an actual image or fake image
		// if(isset($_POST["submit"])) 
		// {
		//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		//     if($check !== false) {
		//     	$message = "File is an image - " . $check["mime"] . ".<br>";
		// 		echo "<script type='text/javascript'>alert('$message');</script>";
		//         // echo "File is an image - " . $check["mime"] . ".<br>";
		//         $uploadOk = 1;
		//     } else {
		//     	$message = "File is not an image.";
		// 		echo "<script type='text/javascript'>alert('$message');</script>";
		//         // echo "File is not an image.<br>";
		//         $uploadOk = 0;
		//         exit();
		//     }
		// }

		//check the file is already exist or not
		if (file_exists($target_file)) 
		{
			$message = "Sorry, file already exists.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		    // echo "Sorry, file already exists.<br>";
		    $uploadOk = 0;
		    exit();
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) 
		{
			$message = "Sorry, your file is too large.";
			echo "<script type='text/javascript'>alert('$message');</script>";
	    	// echo "Sorry, your file is too large.<br>";
	    	$uploadOk = 0;
	    	exit();
		}

		// Allow certain file cairo_format_stride_for_width(format, width)
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
		{
			$message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
		    $uploadOk = 0;
		    exit();
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
			$message = "Sorry, your file was not uploaded.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			exit();
		    // echo "Sorry, your file was not uploaded.";
		} 
		// if everything is ok, try to upload file
		else 
		{
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
		    {
		    	$message = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been successfully uploaded.";
				echo "<script type='text/javascript'>alert('$message');</script>";
				// echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been successfully uploaded.";
				exit();
		    } 
		    else 
		    {
		    	$message = "Sorry, there was an error uploading your file.";
				echo "<script type='text/javascript'>alert('$message');</script>";
		        // echo "Sorry, there was an error uploading your file.";
		        exit();
	   		}
		}
	}	

?>
	<aside class="topSide">			
		<img src="../public/image/add3.jpg">
	</aside>
	
	<aside class="bottomSide">		
		<img src="../public/image/add1.jpeg">
	</aside>
		
	<?php require '../includes/customer_footer.php';?>

</body>
</html>