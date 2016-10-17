 <!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome to Friends Pharmacy</title>

	<meta charset="utf-8" />
	<link rel="stylesheet" href="styles/otcStyle.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<body>	
	<header>
		<nav>
			<ul>
				<li><img src="images/logo_white.png" class="logo"></li>
				<li><a href="index.php">Home </a></li>
				<li><a href="about.php">About Us </a></li>
				<li><a href="otc.php">Over the Counter Products </a></li>
				<li><a href="prescription.php">Prescription Products </a></li>
				<li><a href="events.php">Events </a></li>
				<li><a href="contact.php">Contact Us </a></li>
				<button id="myBtn">LOGIN</button>
				<!-- <li>
				<?php
				
				// session_start();
				// if(isset($_SESSION['email']))
				// {
				// 	echo "<a href='logout.php'><font color='yellow'>LOGOUT</font></a>";
				// 	echo "<div class='profile'><a href='#'> <img src='images/settings.png'> </a></div>";
				// }
				
				?>
				</li> -->
			</ul>			
		</nav>
	</header>


	<div id="myModal" class="modal">
	  <div class="login-card">
	    <div class="modal-header">
	      <span class="close">×</span>
	      <h2>LOGIN</h2>
	    </div>
	    <div class="modal-body">
	      <form action="" method="POST">
			<input type="email" required="required" name="user" placeholder="Email">
			<input type="password" required="required" name="pass" placeholder="Password"><br>
			<button name="login" id="login" onclick="login.php">LOGIN</button>
		  </form>
	    </div>
	    <div class="modal-footer">
	      <div class="login-help">
			<a href="register.php">Register</a> | <a href="#">Forget Password?</a>
		  </div>
	    </div>
	  </div>
	</div>
	
		<div class="mainContent">
		<!DOCTYPE html>
                <div class="tc">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:Arial, sans-serif">

    <!-- #region Jssor Slider Begin -->

    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    
    <!-- This code works with jquery library. -->

    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider-21.1.5.mini.js"></script>
    <!-- use jssor.slider-21.1.5.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];
            
            var jssor_1_SlideoTransitions = [
              [{b:0,d:1160,x:783,y:3}],
              [{b:260,d:780,x:-869,y:18}],
              [{b:1160,d:840,x:667,y:2}],
              [{b:2020,d:760,x:-11,y:-315}],
              [{b:2780,d:520,x:-272,y:-6}],
              [{b:3300,d:640,x:-3,y:-145}],
              [{b:0,d:700,x:307,y:-1,i:2}],
              [{b:0,d:700,x:-851,y:-5,i:1}],
              [{b:700,d:800,x:-827,y:-11}],
              [{b:1500,d:500,x:-10,y:-114}],
              [{b:2000,d:500,x:-9,y:141}],
              [{b:2000,d:420,x:14,y:-158}],
              [{b:2500,d:1100,x:-281}],
              [{b:0,d:800,x:-870,y:3}],
              [{b:800,d:500,x:7,y:112}],
              [{b:800,d:500,x:103,y:-202}],
              [{b:1300,d:900,x:12,y:-264}],
              [{b:2200,d:1000,x:-450,y:5}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 870);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('img/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 870px; height: 264px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 870px; height: 264px; overflow: hidden;">
            <div data-p="141.75" style="display: none; background-color:#6AB82A">
<!--                <img data-u="image" src="img/2-bg1.jpg" />-->
                <div style="position: absolute; top: 54px; left: 1px; width: 778px; height: 131px; \">
                    <img data-u="caption" data-t="0" style="position: absolute; top: 0px; left: -783px; width: 778px; height: 131px;" src="img/1-021.png" />
<!--                    <img data-u="caption" data-t="1" style="position: absolute; top: 132px; left: 868px; width: 392px; height: 74px;" src="img/" />-->
                    <img data-u="caption" data-t="2" style="position: absolute; top: 50px; left: -150px; width: 270px; height: 130px;" src="img/let.png" />
                </div>
                <div style="position: absolute; top: -50px; left: 2px; width: 350px; height: 380px;">
                    <img data-u="caption" data-t="3" style="position: absolute; top: 400px; left: 12px; width: 265px; height: 260px;" src="img/d.png" />
                    <img data-u="caption" data-t="9" style="position: absolute; top: 200px; left: 393px; width: 200px; height: 61px;" src="img/logo_white.png" />
                    
                </div>
            </div>
            <div data-p="141.75" style="display: none; background-color:#6AB82A">
<!--                <img data-u="image" src="img/2-bg1.jpg" />-->
                <div style="position: absolute; top: 5px; left: 19px; width: 410px; height: 260px;">
                    <img data-u="caption" data-t="6" style="position: absolute; top: 3px; left: -304px; width: 270px; height: 260px;" src="img/hccec@2x.png" />
                </div>
                <div style="position: absolute; top: -5px; left: 422px; width: 440px; height: 280px;">
                    <img data-u="caption" data-t="14" style="position: absolute; top: -90px; left: 11px; width: 250px; height: 77px;" src="img/logo_white.png" />
<!--                    <img data-u="caption" data-t="11" style="position: absolute; top: 285px; left: 38px; width: 130px; height: 32px;" src="img/needleimage.png" />-->
                    <img data-u="caption" data-t="12" style="position: absolute; top: 7px; left: 463px; width: 265px; height: 260px;" src="img/1s.jpg.png" />
                </div>
            </div>
            <div data-p="141.75" style="display: none; background-color:#6AB82A;">
<!--                <img data-u="image" src="img/3-bg1.jpg" />-->
                <div style="position: absolute; top: 2px; left: -2px; width: 310px; height: 260px;">
                    <img data-u="caption" data-t="13" style="position: absolute; top: -1px; left: 877px; width: 300px; height: 260px;" src="img/h.png" />
                </div>
                <div style="position: absolute; top: 2px; left: 311px; width: 560px; height: 260px;">
                    <img data-u="caption" data-t="14" style="position: absolute; top: -86px; left: 11px; width: 283px; height: 58px;" src="img/logo_white.png" />
<!--                    <img data-u="caption" data-t="15" style="position: absolute; top: 290px; left: 6px; width: 171px; height: 36px;" src="img/" />-->
                    <img data-u="caption" data-t="16" style="position: absolute; top: 265px; left: 273px; width: 247px; height: 260px;" src="img/doctor2.png" />
<!--                    <img data-u="caption" data-t="17" style="position: absolute; top: 220px; left: 651px; width: 102px; height: 37px;" src="img/3-4.png" />-->
                </div>
            </div>
            <a data-u="add" href="http://www.jssor.com" style="display:none">Simple Fade Slideshow</a>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>

    <!-- #endregion Jssor Slider End -->
</body>
</html>
</div>

	</div>
	
	
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
		<img src="images/add4.jpg">
	</aside>
	
	<aside class="bottomSide">		
		<img src="images/add3.jpg">
	</aside>
	
		
	<footer>
		<p align="center">Copyright &copy; <a href="#" title="Friends Pharmacy">friendspharmacy.lk</a></p>
	</footer>

	<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal
	btn.onclick = function() {
	    modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	    modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	</script>




<?php
	
$conn = mysqli_connect('localhost', 'root', '', 'friends_pharmacy') or die(mysql_error());

if(isset($_POST['login']))
{ 	
	$email=mysqli_real_escape_string($conn, $_POST['user']);
	$password=mysqli_real_escape_string($conn, $_POST['pass']);
	
	$query1 = mysqli_query($conn, "SELECT * FROM customer WHERE email='$email'");	
	$numrows1 = mysqli_num_rows($query1);
	
	$query2 = mysqli_query($conn, "SELECT * FROM staff WHERE email='$email'");	
	$numrows2 = mysqli_num_rows($query2);
	
	if($numrows1 != 0)
	{
		while($row = mysqli_fetch_assoc($query1))
		{
			$uname = $row['email'];
			$pword = $row['password'];
		}
		$encrypt_password=md5($password);
		if($email == $uname AND $encrypt_password == $pword)
		{
			
			$_SESSION['email'] = $email;	
			$message = "Welcome to Friends Pharmacy";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$message = "Your password is incorrect";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	else if($numrows2 != 0)
	{
		while($row = mysqli_fetch_assoc($query2))
		{			
			$uname = $row['email'];
			$pword = $row['password'];
		}
		$encrypt_password=md5($password);
		if($email == $uname AND $encrypt_password == $pword)
		{
			
			$_SESSION['email'] = $email;			
			echo '<script type="text/javascript">window.location = " ../main/main.php"  </script>';
                        
                }
		else
		{
			$message = "Your password is incorrect";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	else
	{
		$message = "Your email is incorrect. Please try again or Sign Up";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}


?>
</body>

</html>