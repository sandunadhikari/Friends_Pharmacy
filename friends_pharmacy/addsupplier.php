<?php
    session_start();
?>
<html>
    <head>
        <title>Add supplier</title>
        <link rel="stylesheet" type="text/css" href="../styles/addsupplier.css">
        <script type="text/javascript">
            function validateForm(){
                
                var sid=document.getElementById("sid").value;
                var cname=document.getElementById("cname").value;
                var add=document.getElementById("add").value;
                var mno=document.getElementById("mno").value;
                var lno=document.getElementById("lno").value;
                var mail=document.getElementById("mail").value;
                var fax=document.getElementById("fax").value;
               
                if(sid=="" || cname=="" || add=="" || mno=="" || mail==""){
                    alert("Please Enter empty fields");
                    return false;    
                }else{
                    if(isNaN(mno) || isNaN(lno) || isNaN(fax)){
                        alert("Please Enter numbers correctly");
                        return false;
                    }
                    if((mno.toString()).length!=10)  {
                        alert("Mobile number is not correct");
                        return false;
                    }
                    if((lno.toString()).length!=10) {
                        alert("Land number is not correct ");
                        return false;
                    }
                }
            }
        </script>
    </head>
    
        <body>
            <div id="d1"><img src="../images/logo.png"></div>
            <span>
            
            
            <div id="d4">
                <form id="f1" method="post" action="addsupplier.php" onsubmit="return validateForm();">
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
                <input id="i2" type="submit" name="go" >
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
                mysqli_select_db($con,"friends_pharmacy") or die("Can't connect to Database");
                
                mysqli_query($con,"INSERT INTO supplier (company_name,address,telephone,mobile,email,fax) VALUES ('$cname','$add','$mno','$lno','$mail','$fax');") or die(mysqli_error());
                $_SESSION['sid']=$cname;
                header("location:drugs.php");

                 
            } 
            


?>
            

        </body>
</html>