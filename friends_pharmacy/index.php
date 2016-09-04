<DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome to Friends Pharmacy</title>
	
	<meta charset="utf-8" />
	<link rel="stylesheet" href="styles/homeStyle.css" type="text/css" />
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
				<h3>Bottom Article</h3>
				<p>There is no set length for a paragraph. It is possible, however, to have your paragraphs too long or too short. There are some guiding principles that will help you to get your paragraphs right.
				The entire paragraph should concern itself with a single focus. If it begins with a one focus or major point of discussion, it should not end with another or wander within different ideas. This is one reason why paragraphs can become over-long. More will be said later about maintaining focus in your writing.
				A paragraph should usually begin with an introductory sentence, which sets out the subject of that paragraph. The remainder of the paragraph should go on to explain and 'unpack' that initial sentence. If you find that you are writing about something different from your initial sentence, your paragraph is probably too long and your focus has wandered.</p>
			</article>
			
			<article class="bottomContent">
				<h3>Bottom Article</h3>
				<p>There is no set length for a paragraph. It is possible, however, to have your paragraphs too long or too short. There are some guiding principles that will help you to get your paragraphs right.
				The entire paragraph should concern itself with a single focus. If it begins with a one focus or major point of discussion, it should not end with another or wander within different ideas. This is one reason why paragraphs can become over-long. More will be said later about maintaining focus in your writing.
				A paragraph should usually begin with an introductory sentence, which sets out the subject of that paragraph. The remainder of the paragraph should go on to explain and 'unpack' that initial sentence. If you find that you are writing about something different from your initial sentence, your paragraph is probably too long and your focus has wandered.</p>	
			</article>
		</div>	
	</div>
	
	<aside class="topSide">			
		<div class="login-card">
			<h1>Login</h1><br>
			<form action="login.php" method="POST">
				<input type="email" required="required" name="user" placeholder="Email">
				<input type="password" required="required" name="pass" placeholder="Password">
				<input type="submit" name="login" class="login login-submit" value="LOGIN">
			</form>

			<div class="login-help">
				<a href="register.php">Register</a> | <a href="#">Forget Password?</a>
			</div>
		</div>
	</aside>
	
	<aside class="middleSide">
		<article>
			<h2>Middle Sidebar</h2>
			<p>If you find that your paragraphs are too long:
			Consider splitting a single long paragraph into two shorter ones. It is perfectly acceptable to begin a paragraph with a sentence connecting it to the previous paragraph.</p>
		</article>
		
	</aside>
	
	<aside class="bottomSide">
		<article>
			<h2>Bottom Sidebar</h2>
			<p>If you find that your paragraphs are too long:
			Consider splitting a single long paragraph into two shorter ones. It is perfectly acceptable to begin a paragraph with a sentence connecting it to the previous paragraph.</p>
		</article>
	</aside>
	
	<footer class="mainFooter">
		<p>Copyright &copy; <a href="#" title="Friends Pharmacy">friendspharmacy.lk</a></p>
	</footer>

</body>

</html>
