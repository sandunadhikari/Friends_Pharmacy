<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../public/css/web/customer_header.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<header>
    <nav>
        <ul>
            <li><img src="../public/image/logo_white.png" class="logo"></li>
            <li><a href="../web/index.php" class="active">Home </a></li>
            <li><a href="../web/about.php" class="active">About Us </a></li>
            <li><a href="../web/otc.php" class="active">Over the Counter Products </a></li>
            <li><a href="../web/prescription.php" class="active">Prescription Products </a></li>
            <li><a href="../web/events.php" class="active">Events </a></li>
            <li><a href="../web/contact.php" class="active">Contact Us </a></li>
            <li>
                
                <a href="#" id="loginform">Login</a>
                <div class="login">
                  <div class="arrow-up"></div>
                  <div class="formholder">
                    <div class="randompad">
                       <fieldset>
                        <form action="login.php" method="post">
                            <label name="email">Email</label>
                             <input type="email" name="user" />
                             <label name="password">Password</label>
                             <input type="password" name="pass" />
                             <input type="submit" value="Login" name="login" /> 
                             <div style="text-align: center; margin-top: 3%;">
                                 <a href="#" style="color: black; font-size: 15px; margin-bottom:-15px;">Forgot Your Password?</a>
                                 <a href="register.php" style="color: black; font-size: 15px;">Create an Account</a>  
                             </div>    
                        </form>                                                            
                       </fieldset>
                    </div>
                  </div>
                </div>
            </li>
        </ul>
    </nav>
</header>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../public/js/index.js"></script>

<div class="slider"></div>

</body>

</html>