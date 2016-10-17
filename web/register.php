<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create New Account</title>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<h3>Create A New Account</h3>
	<form action="signup.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr><td>First Name: </td><td><input type="text" name="fname" required="required"></td></tr>
			<tr><td>Last Name:</td><td><input type="text" name="lname" required="required"></td></tr>
			<tr><td>NIC:</td><td><input type="text" name="nic" required="required"></td></tr>
			<tr><td>Email:</td><td><input type="email" name="email" required="required"></td></tr>
			<tr><td>Password:</td><td><input type="password" name="password" required="required"></td></tr>
			<tr><td>Birthday:</td><td> <input type="date" name="bday" required="required"></td></tr>
			<tr><td>Gender:</td><td><Input type="radio" name="gender" value="male" required="required">Male</td>
								<td><Input type="radio" name="gender" value="female" required="required">Female</td></tr>
			<tr><td>Contact Number:</td><td><input type="tel" name="contact" required="required"></td></tr>
			
				
			<tr><td><input type="submit" name="submit"></td></tr>
		</table>			
	</form>

</body>
</html>