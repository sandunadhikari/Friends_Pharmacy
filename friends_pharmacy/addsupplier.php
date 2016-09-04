<html>
    <head>
        <title>Add supplier</title>
        <link rel="stylesheet" type="text/css" href="styles/addsupplier.css">
        <script type="text/javascript">
            function validateForm(){
                
                var sid=document.getElementById("sid").value;
                var cname=document.getElementById("cname").value;
                var add=document.getElementById("add").value;
                var mno=document.getElementById("lno").value;
                var mail=document.getElementById("mail").value;
                var fax=document.getElementById("fax").value;
               
                
                
                if(sid==null || cname==null || add==null || mno==null || mail==null || fax==null){
                    alert("Please Enter empty fields");
                    
                }
                
            }
            
            
        </script>
    </head>
    
        <body>
            <div id="d1"><img src="../images/logo.png"</div>
            <span>
            <div id="d2">
                <div id="d3">
                <ul class="l1">
                <li><a href=#.php>Customer Details</a></li>
                <br><li><a href=#.php>Supplier Details</a></li>
                    <ul class="l1">
                          <li><a href=#.php>Add supplier</a></li>
                          <li><a href=#.php>Delete supplier</a></li>
                          <li><a href=#.php>Update suplier details</a></li>
                          <li><a href=#.php>Place oredr</a></li>
                
                    </ul>
                    
                
                
                </ul>
                </div>
            </div>
            
            <div id="d4">
                 <form id="f1" method="post">
                <table>   
                    <tr height=40>
                <td> Supplier ID</td>
                <td><input type="text" name="sid" id="sid"> </td> 
                    </tr>
                    <tr height=40>
                <td width=170 >Company </td>
                <td><input type="text" name="cname" id="cname"></td>
                    </tr>
                    
                    <tr height=40>
                <td width=50> Address</td>
                <td><input type="text" name="add" id="add"> </td> 
                    </tr>
                    <tr height=40>
                <td width=50> Mobile Number</td>
                <td><input type="text" name="mno" id="mno"> </td>
                         
                    </tr>
                    <tr height=40>
                <td width=50> Land Number</td>
                <td><input type="text" name="lno" id="lno"> </td>
                    <tr height=40>
                <td width=50> Email</td>
                <td><input type="text" name="mail" id="mail"> </td> 
                    </tr>
                    <tr height=40>
                <td width=50> Fax</td>
                <td><input type="text" name="fax" id="fax"> </td> 
                    </tr>
                    
                  
                 
                </div>
                </table><br><br>
   <input id="i2" type="submit" name="go" value="Add supplier" onsumbit="validateForm();">
                 </form>
            </span>
<?php

    $hostname="localhost";
    $username="root";
    $password="";

        if(isset($_POST['cname'])){
                $cname=$_POST['cname'];
            }
         if(isset($_POST['sid'])){
                $sid=$_POST['sid'];
            }
         if(isset($_POST['add'])){
                $add=$_POST['add'];
            }
         if(isset($_POST['mno'])){
                $mno=$_POST['mno'];
            }
        if(isset($_POST['lno'])){
                $lno=$_POST['lno'];
            }
         if(isset($_POST['mail'])){
                $mail=$_POST['mail'];
            }
         if(isset($_POST['fax'])){
                $fax=$_POST['fax'];
            }
        
        if(isset($_POST['go'])){
                $con=mysqli_connect("localhost","root","") or die("Can't connect to mysql");
                mysqli_select_db($con,"pharmacy") or die("Can't connect to Database");
                
                mysqli_query($con,"INSERT INTO supplier (supplier_id,company_name,address,telephone,mobile,email,fax)
                                    VALUES ('$cname','$add','$mail','$mno','$lno','$mail','$fax');");
                
            } 


?>
            

        </body>
</html>