 <!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome to Friends Pharmacy</title>

	<meta charset="utf-8" />
	<link rel="stylesheet" href="styles/otcStyle.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<body>	
	<?php require '../includes/customer_header.php';?>	
	<?php require '../includes/slideshow.php';?>
	<div class="content">
		<article class="topContent">
				
			<p>	Search for a products:</p>
			<form>
				<input type="text" placeholder="Search...">
                <button type="button">Search</button>
			</form>

			<hr>
			
				<h2>Vitamin C and/or Equivalance</h2>
				<img src="../public/image/vitaminC.png" width="120" height="120">	
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</span>
			
				<form>
					<table class="detailsTable">
						<tr>
							<td>Unit Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs </td> <td><input type="text" name="price" readonly></td>
						</tr>
						<tr>
							<td>No: of Tablets/Capsules</td> <td><input type="number" name="number"></td>
						</tr>
						<tr>
							<td>Dosage</td> <td> <select>
													<option>15mg</option>
													<option>40mg</option>
													<option>75mg</option>
													<option>90mg</option>
													<option>120mg</option>
												 </select></td>
						</tr>
						<tr>
							<td>Total: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs </td> <td><input type="text" name="total" readonly></td>
						</tr>
						<tr>
							<td><button>Add to Order Cart</button></td> <td><button>View Order Cart</button> </td>
						</tr>
					</table>
				</form>
			
			
			
		</article>
	</div>	

	
	<aside class="topSide">			
		<!-- <img src="../public/image/add2.jpg"> -->
	</aside>
	
	<aside class="bottomSide">		
		<!-- <img src="../public/image/add3.jpg"> -->
	</aside>
	
	<?php require '../includes/customer_footer.php';?>
	
</body>

</html>