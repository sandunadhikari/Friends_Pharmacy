<DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome to Friends Pharmacy</title>
	
	<meta charset="utf-8" />
	<link rel="stylesheet" href="styles/stockStyle.css" type="text/css" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<body class="body">
	
	<div class="header">
	  <img img src="images/logo.png"/>
	  <h1 style="text-align:center;">Stock Management</h1>
	</div>
	
	<div class="mainContent">	
		<div class="content">
			<h3 style="text-align:center;">Add New Medicine</h3>
			<fieldset>
				<legend>Select Medicine Catogary</legend>
				<form action="">
				  <input type="radio" name="gender" value="male"> Over the counter drug<br>
				  <input type="radio" name="gender" value="female"> Two ii drug<br>
				  <input type="radio" name="gender" value="other"> Narcootics
				</form>
			</fieldset>
			
			<article class="topContent">
				<label for='name'>Medicine ID: </label>
				<input type='text' class='inputField' name='txtMedicineID' /><br/>
				<label for='email'>Brand Name: </label>
				<input type='text' class='inputField' name='txtBrandName' /><br/>
				
				<label for='name'>Generic Name: </label>
				<input type='text' class='inputField' name='txtGenericName' /><br/>
				<p></p>
				<label for='Type'>Type: </label>
				<select class = "type">
				  <option value="Tablets">Tablets</option>
				  <option value="Capsules">Capsules</option>
				  <option value="liquid<">liquid</option>
				</select></br>
				<p></p>
				
				<label for='Category'>Category: </label>
				<select class = "Category">
				  <option value="Antibiotics">Antibiotics</option>
				  <option value="60">asd</option>
				  <option value="80">ert</option>
				</select></br>
				<p></p>
				<label for='Supplier'>Supplier: </label>
				<select class = "Supplier">
				  <option value="Supplier1">Supplier1</option>
				  <option value="Supplier2">Supplier2</option>
				  <option value="Supplier3">Supplier3</option>
				</select></br>
				<p></p>
				<label for='content'>content: </label>
				<textarea cols='16' rows='7' name='txtDescription'></textarea></br>
				<p></p>
				<label for='image'>Add image: </label>
				<input type="file" name="pic" accept="image/*">
				<p></p>
				<input type="submit" name = "" value="Clear" >
				<span style="padding-left:10em"><input type="submit" name = "" value="Submit" ></span>
				
				
			</article>
		</div>	
	</div>
	
	
	<aside class="topSide">			
		

		
			<br><a target="_top" href="index.html"><u>Add new Medicine</u></a></br>
			<a target="_top" href="index.html"><u>Update Stock</u></a></br>
			<a target="_top" href="index.html"><u>View Stock</u></a></br>
			<a href="index.html"><u>View Usage</u></a></br>
			<a href="index.html"><u>Remove Medicine</u></a></br>
			<a href="index.html"><u>Delete Medicine</u></a></br>
			
			<p></p>
			<br><a style="font-weight: bold" href="index.html"><u>Main menu</u></a></br>
		
	</aside>
	<footer class="mainFooter">
		<p>Copyright &copy; <a href="#" title="Friends Pharmacy">friendspharmacy.lk</a></p>
	</footer>

</body>

</html>