<DOCTYPE html>
<html lang="en">
<head>
	<title>Add Staff Members</title>
	
	<meta charset="utf-8" />
	<link rel="stylesheet" href="styles/homeStyle.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<img src="images/logo.png">
</head>

<body>
	<form action="newMember.php" method="POST" enctype="multipart/form-data">
	<table>
		<tr><td>First Name: </td><td> <input type="text" name="fname"></td></tr>
		<tr><td>Last Name: </td><td> <input type="text" name="lname"></td></tr>
		<tr><td>Gender: </td><td> <Input type="radio" name="gender" value="male">Male</td>
							 <td> <Input type="radio" name="gender" value="female">Female</td></tr>
		<tr><td>Birthday: </td><td> <input type="date" name="bday"></td></tr>
		<tr><td>NIC: </td><td> <input type="text" name="nic"></td></tr>
		<tr><td>Marital Statues: </td><td> <input type="text" name="statues"></td></tr>
		<tr><td>Blood Group: </td><td> <Input type="text" name="blood"></td></tr>
		<tr><td>Address:</td><td> <textarea rows="3" cols="50" name="address"></textarea></td></tr>
		<tr><td>Contact Number:</td><td> <input type="tel" name="contact"></td></tr>
		<tr><td>Email:</td><td> <input type="email" name="email"></td></tr>
		<tr><td>Password:</td><td> <input type="password" name="password"></td></tr>
		<tr><td>Occupation:</td><td> <input type="text" name="occupation"></td></tr>
		<tr><td>Joining Date: </td><td> <input type="date" name="date"></td></tr>
		<tr><td><input type="submit" name="submit"></td></tr>
	</table>			
	</form>

</body>





</html>