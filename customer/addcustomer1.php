<html>
    <head>
        
        <?php require('../includes/_header.php'); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-2.0.0.js"></script>
        <script src="js/jquery-ui.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
       
        <script>
        $( function() {
            $( "#dob" ).datepicker();
        } );
        
        </script>
        
        <style>
            .radio-left {
                float: left;
            }
            .customer_template_container {
                padding-left:13px;
                padding-top:20px;
              
}
            fieldset{
                 position: relative;
              border: none;
              width: 600px;
              margin:auto;
              text-align: center;
              border: 2px solid rgb(106,184,42);
              padding-top: 30px;
              background-color: rgb(229, 249, 212);
              top:100px;

            }
            form div {
                margin-bottom: 10px; 
            }
            form input {
                margin: 10px;
            }
            #btn{
                position:relative;
                float:right;
                height:30px;
            }
            #tbl{
                position: relative;
                float:right;
                right:100px;
                
            }
            h2{
                position:relative;
                float:right;
                right:580px;
                top:70px;
            }

        </style>
        
        <title>customer</title>
    </head>
    <body>
         <?php require_once("../includes/navigation.php") ?>
    
    <!--content goes here -->
     <h2>Add Customers</h2>
    <div class="customer_template_container" style=" padding-left:13px; padding-top:70px;">
        <fieldset style="padding-top: 30px;">
        <form action="reminder.php" method="POST" style="text-align:center ">
       <table id="tbl">
        <tr>
                <td>NIC</td>
        <td><input type="text" name="nic"></td>
        </tr>
        <tr>
          <td>First name</td>
        <td><input type="text" name="fname" ><td>
        </tr>
        <tr> 
            <td>Last Name</td>
        <td><input type="text" name="lname" ></td>
        </tr>
        <tr>
            <td>Date Of Birth</td>
        <td><input type="date" name="dob" id="dob"></td>
        </tr>
        <tr>
        <td>Gender</td>
        <td><input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other</td>
        </tr>
       
       <tr>
        
            <td>Email Address</td>
        <td><input type="email" name="email"></td>
         </tr>
           <tr>        
            <td>Contact Number</td>
        <td><input type="number" name="mobile"></td>
        </tr>
                <br>
                <br>
        <tr>
                <td><input id="btn" type="submit" value="Next"></td>
        </tr>
        
        </table> 
            </form>
        <?php // echo $content; ?>
        </fieldset>
    </div>		
	
    
    <?php require_once('../includes/_footer.php') ?>
    
        
        
       
        <!--<div class="container" style='text-align:center;'>
        <h2 style="margin-bottom:20px;">Add Customer</h2>
        <form class="form-horizontal"  method="post" action="">-->
    
    </body>
</html>