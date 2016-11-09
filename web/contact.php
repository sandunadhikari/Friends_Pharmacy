<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Friends Pharmacy</title>

	<meta charset="utf-8" />
	<link rel="stylesheet" href="../public/css/web/contactStyle.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
    <?php require '../includes/customer_header.php';?>

	<div class="mainContent">	
		<h3>Send us a Message</h3>			
		<p><br>
		We hope you are provided the best customer service. We are happy to ask any question you have or provide with you an estimate. Just send us a message in the form below and we'll respond as soon as we can. Your feedback will be highly appreciated.</p> <br>

		<form action="" method="POST">
			<label>Full Name</label> <br> <input type="text" name="name"><br>
			<label>Email</label> <br> <input type="email" name="email"><br>
			<label>Message</label> <br> <textarea rows="10" cols="70"></textarea><br>
			<button type="button">SEND</button>
		</form>			
	</div>
	
	<aside class="contactSide">			
		<h3>Contact Info</h3>
		We love to hear from you. It's easy to contact our patient service at Friends Pharmacy any time.
		Just use any o the following information to find out how to call us, write us, email us, fax us or dropped by in person if you just happen to be in Kirulapone. <br> <br>

		<img src="images/tele.png"> <label><b>Phone</b></label> <br>
		<p>+94-11- 342 3462</p>
		<img src="images/email.png"> <label><b>Email</b></label> <br>
		<p>friendspharmacy@gmail.com</p>
		<img src="images/fax.png"> <label><b>Fax</b></label> <br>
		<p>+94-11- 259 2549 </p>
		<img src="images/letter.png"> <label><b>Address</b></label> <br>
		<p>No: 65, <br> Main Street, <br> Kirulapone </p>
	</aside>

    <?php require '../includes/customer_footer.php';?>

</body>
</html>