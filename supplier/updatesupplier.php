<?php
 
    $cname='';
    $add='';
    $mno='';
    $lno='';
    $mail='';
    $fax='';
$con=mysqli_connect("localhost","root","") or die("coudn't connect") ;
        mysqli_select_db($con,"friends_pharmacy");
         if(isset($_POST['btn'])){
            $search=$_POST['search'];
            
           $query1= mysqli_query($con,"SELECT * FROM supplier WHERE company_name='$search'") or die("don't work");
      while($row=mysqli_fetch_array($query1)){
          $cname=$row['company_name'];
          $add=$row['address'];
          $lno=$row['telephone'];
          $mno=$row['mobile'];
          $mail=$row['email'];
          $fax=$row['fax'];
      }
    }
    if(isset($_POST['go'])){
        $cname=$_POST['cname'];
        $add=$_POST['add'];
        $mno=$_POST['mno'];
        $lno=$_POST['lno'];
        $mail=$_POST['mail'];
        $fax=$_POST['fax'];
        
        $query2 =mysqli_query($con,"UPDATE supplier SET company_name='$cname', address='$add', mobile=$mno, telephone=$lno, email='$mail', fax=$fax WHERE company_name='$cname'");
      
?>
    <script>alert('Updated!');</script>
    <?php 
    }
?> 
    

        

<html>
<head>
    <title>Update Supplier</title>
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<link type="text/css" href="css/updatesupplier.css" rel="stylesheet">
   <?php require('../includes/_header.php'); ?>
</head>
    
<body>
      <?php require_once("../includes/navigation.php") ?>
    
    <?php 
    $output='';
    ?>
    <h2>Update Supplier</h2>

<div id="d1">
    <form action="updatesupplier.php" method="post">
    <input id= "companyname" type="text" name="search" placeholder="Company name" autocomplete="off">
    <div id="companyList"><?php echo $output?></div>
   <input id="load" type="submit" name="btn" value="Search">
    </form>
    
</div> 
    <div id="d2">
        <fieldset>
    <center>
    <form method="post" action="updatesupplier.php">
       
        <table id="tbl">
            <tr >
            <td>Company name</td>
            <td ><input type="text" id="cname" name="cname" value="<?php  echo $cname; ?>"></td>
            </tr>
            <tr>
            <td >Address </td>
            <td><input type="text" id="add" name="add" value="<?php  echo $add; ?>"></td>
            </tr>
             <tr >
            <td >Land number </td>
            <td><input type="text" id="lno" name="lno" value="<?php  echo $lno; ?>"></td>
            </tr>
            <tr >
            <td>Mobile number </td>
            <td><input type="text" id="mno" name="mno" value="<?php  echo $mno; ?>"></td>
            </tr>
             <tr >
            <td>Email </td>
            <td><input type="text" id="mail" name="mail" value="<?php  echo $mail; ?>"></td>
            </tr>
             <tr >
            <td>fax </td>
            <td><input type="text" id="fax" name="fax" value="<?php  echo $fax; ?>"></td>
            </tr>
        </table>
            <input id="i1" type="submit" name="go" value="Update">
        </form>    
    </center>
        </fieldset>
    </div>
    
     <?php require_once('../includes/_footer.php') ?>
    
</body>    
</html>
<script>
$(document).ready(function(){  
      $('#companyname').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"updatesupplierdb.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#companyList').fadeIn();  
                          $('#companyList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#companyname').val($(this).text());  
           $('#companyList').fadeOut(); 
           
           
        });  
 });  
 
 </script>