 <!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome to Friends Pharmacy</title>

	<meta charset="utf-8" />
	<link rel="stylesheet" href="../public/css/web/otcStyle.css" type="text/css" />
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

			<table class="tableResult">
				<tr>
			    	<th>Drug</th>
			    	<th>Related Drug Names</th>
			  	</tr>
				<tr>
					<td><a href="#">Biotine and/or equivalance</a><br/></td>
					<td>Blotine</td>
				</tr>
				<tr>
					<td><a href="#">calcium carbonate and/or equivalance</a><br/></td>
					<td>calcium</td>
				</tr>
				<tr>
					<td><a href="#">cod liver and/or equivalance</a><br/></td>
					<td>cod liver oil</td>
				</tr>
				<tr>
					<td><a href="#">folic acid and/or equivalance</a><br/></td>
					<td>folic asid/apo acid</td>
				</tr>
				<tr>
					<td><a href="#">niacin and/or equivalance</a><br/></td>
					<td>niacin liver oil</td>
				</tr>
				<tr>
					<td><a href="#">vitamin B and/or equivalance</a><br/></td>
					<td>Vitamin B</td>
				</tr>
				<tr>
					<td><a href="otc3.php">vitamin C and/or equivalance</a><br/></td>
					<td>Vitamin C</td>
				</tr>
				<tr>
					<td><a href="#">vitamin D and/or equivalance</a><br/></td>
					<td>Vitamin D</td>
				</tr>
			</table>

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		</article>
	</div>	

	
	<aside class="topSide">			
		<img src="../public/image/add2.jpg">
	</aside>
	
	<aside class="bottomSide">		
		<img src="../public/image/add3.jpg">
	</aside>
	
		
	<?php require '../includes/customer_footer.php';?>
</body>

</html>