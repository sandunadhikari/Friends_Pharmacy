<DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome to Friends Pharmacy</title>
	
	<meta charset="utf-8" />
	<link rel="stylesheet" href="styles/aboutStyle.css" type="text/css" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<body class="body">
	
	<header class="mainHeader">
		<img src="images/logo.png">
		
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="otc.php">Over the Counter Products</a></li>
				<li><a href="prescription.php">Prescription Products</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="contact.php">Contact Us</a></li>		
			</ul>
		</nav>
	</header>
	
	<div class="mainContent">	
		<div class="content">
			<article class="topContent">
			<h2>Vitamin C and/or Equivalance</h2>
			<h4>short description about drug</h4>
			
			<p><img class="imgDrug" src="images\vitaminC.jpg" width="100" height="140">
			This is some text. This is some text. This is some text.
			This is some text. This is some text. This is some text.
			This is some text. This is some text. This is some text.
			This is some text. This is some text. This is some text.
			This is some text. This is some text. This is some text.
			This is some text. This is some text. This is some text.
			This is some text. This is some text. This is some text.	
			</p>
			<p><big> unit price: Rs 2.00 </big></P>
			
			
			  No: of Tablets/Capsulrs: <input type="text" name="count" id="numberOfTablets"><br>
			  <p></p>
			  <input style ="width:80;"type="submit" value="Total" onclick="myFunction()">
			  <span style="padding-left:4em">Rs:<input type="text" name="count" id ="Total"></span><br>
			  <script>
				function myFunction() {
					
					document.getElementById("Total").value = parseInt(numberOfTablets.value*2);
				}
				</script>
				<p></p>
				
			<select>
			  <option value="20">20 Tablets: Rs.40.00</option>
			  <option value="60">60 Tablets: Rs.110.00</option>
			  <option value="80">80 Tablets: Rs.150.00</option>
			  <option value="100">100 Tablets: Rs.180.00</option>
			</select>
			<h5> *CAN NOT BE SPLIT Must be taken in existing form</h5>
			
			<form>
			 <input type="submit" name = "" value="add to cart" >
			 <span style="padding-left:9em"><input type="submit" name = "" value="view cart" ></span>
			</form>
			
			</article>
		</div>	
	</div>
	
	<aside class="topSide">			
		<article>
			<h2>Top Sidebar</h2>
			<p>If you find that your paragraphs are too long:
			Consider splitting a single long paragraph into two shorter ones. It is perfectly acceptable to begin a paragraph with a sentence connecting it to the previous paragraph.</p>
		</article>
	</aside>
	
	<aside class="bottomSide">
		<article>
			<h2>Middle Sidebar</h2>
			<p>If you find that your paragraphs are too long:
			Consider splitting a single long paragraph into two shorter ones. It is perfectly acceptable to begin a paragraph with a sentence connecting it to the previous paragraph.</p>
		</article>
		
	</aside>
	
		
	
	<footer class="mainFooter">
		<p>Copyright &copy; <a href="#" title="Friends Pharmacy">friendspharmacy.lk</a></p>
	</footer>

</body>

</html>