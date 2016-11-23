
<?php 
   $con=mysqli_connect("localhost","root","") or die("coudn't connect") ;
    mysqli_select_db($con,"friends_pharmacy");
    if(isset($_POST['cname'])){
            $cname=$_POST['cname'];
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
    
   $query= mysqli_query($con,"SELECT * FROM supplier WHERE company_name='$cname'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0){
        echo '<script language="javascript">';
        echo 'alert("This supplier already exist")';
        
        echo '</script>';
    
    }else 
        {
            mysqli_query($con,"INSERT INTO supplier (company_name,address,telephone,mobile,email,fax) VALUES ('$cname','$add','$mno','$lno','$mail','$fax');") or die("coudn't connect");
        }
    ?>
    <script>alert('Added successfully');</script>
    <?php 
    }
?> 
    





<html>
<head>
    <title>Add Supplier</title>
<link href="css/addsupplier.css" rel="stylesheet" type="text/css">
<?php require('../includes/_header.php'); ?>
  <script type="text/javascript">
        function validate(){
            var cname=document.getElementById("cname").value;
            var add=document.getElementById("add").value;
            var lno=document.getElementById("mno").value;
            var mno=document.getElementById("lno").value;
            var mail=document.getElementById("mail").value;
            var fax=document.getElementById("fax").value;
            var atpos = mail.indexOf("@");
         if( cname=="" || add=="" || mno=="" || mail==""){
                    alert("Please Enter empty fields");
                    return false;    
                }else{
                    if(isNaN(mno) || isNaN(lno) || isNaN(fax)){
                        alert("Please Enter numbers correctly");
                        return false;
                    }
                    if(atpos<0){
                        alert("You have enterd a invalid email address");
                        return false;
                    }
                }
            }
    </script> 
</head>
    <body>
            <h2>Add Supplier</h2>
    <?php require_once("../includes/navigation.php") ?>
        
      
            
    <div id="d1">
        <center>
            <fieldset style="border: 2px solid rgb(106,184,42);">
            <center>
        <form method="post" action="addsupplier.php" onsubmit=" return validate();">
            <frameset>
        <table>
            <tr height=60>
            <td >Company name</td>
            <td><input type="text" id="cname" name="cname" autocomplete="off"></td>
            </tr>
            <tr height=60>
            <td>Address </td>.
            <td><input type="text" id="add" name="add" autocomplete="off"></td>
            </tr>
             <tr height=60>
            <td>Land number </td>
            <td><input type="text" id="lno" name="lno" autocomplete="off"></td>
            </tr>
             <tr height=60>
            <td>Mobile number </td>
            <td><input type="text" id="mno" name="mno" autocomplete="off"></td>
            </tr>
             <tr height=60>
            <td>Email </td>
            <td><input type="text" id="mail" name="mail" autocomplete="off"></td>
            </tr>
             <tr height=60>
            <td>Fax </td>
            <td><input type="text" id="fax" name="fax" autocomplete="off"></td>
            </tr>
        </table>
            <input id="i1" type="submit" name="go" value="Add"  >
          
       
        </form>
        </center>
        </fieldset>
        </center>
        </div>
       
       
          
         <?php require_once('../includes/_footer.php') ?>
    </body>
</html>