<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Friends Pharmacy</title>

	<meta charset="utf-8" />
	<link rel="stylesheet" href="../public/css/web/otcStyle.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<?php require '../includes/customer_header.php';?>

	<div class="content">
		<article>				
			<p>	Search for a products:</p>
			<form>
				<input type="text" placeholder="Search..." required>
                <button type="button">Search</button>
			</form>

			<hr>

			<p>Browse by category:</p>

			<div class="list">
				<ul class="list1">
					<li><a href="#">Allergy Cold and Sinus</a><br/></li>
					<li><a href="#">Dental Products</a><br/></li>
					<li><a href="#">Devices</a><br/></li>
					<li><a href="#">Digestive</a><br/></li>
					<li><a href="#">Eye and Ear care</a><br/></li>
					<li><a href="#">Flu Prevention and Treatment</a><br/></li>
					<li><a href="#">Glouse Products</a><br/></li>
					<li><a href="#">Herbal Products</a><br/></li>
					<li><a href="#">Insulin Syringes</a><br/></li>
					<li><a href="#">Minerals</a><br/></li>

				</ul>

				<ul class="list2">
					<li><a href="#">Multivitamins</a><br/></li>
					<li><a href="#">Nose Care</a><br/></li>
					<li><a href="#">Pain Relief</a><br/></li>
					<li><a href="#">Skin Care</a><br/></li>
					<li><a href="#">Syringes</a><br/></li>
					<li><a href="otc2.php">Vitamins</a><br/></li>
					<li><a href="#">Muscle Relaxants</a></li>
					<li><a href="#">Sunscreens</a></li>
					<li><a href="#">Sleep Aids</a></li>
					<li><a href="#">Lancets</a></li>
				</ul>
			</div>			
		</article>
	</div>	




	<aside class="topSide">			
		<img src="../public/image/add3.jpg">
	</aside>
	
	<aside class="bottomSide">		
		<img src="../public/image/add2.jpg">
	</aside>


	<?php require '../includes/customer_footer.php';?>

</body>
</html>