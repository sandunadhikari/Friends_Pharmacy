<?php
    session_start();
?>
<html>
<head>
    <link href="../styles/drugs.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
            function validateForm(){
                
                var sid=document.getElementById("sid").value;
                var drug=document.getElementById("drug").value;
                var price=document.getElementById("price").value;
                var dosage=document.getElementById("dosage").value;
                
                if(sid=="" || drug=="" || price=="" || dosage=="" ){
                    alert("Please Enter empty fields");  
                    return false(); 
                }else{
                        if(isNaN(mno)){
                            alert("Please enter the price correctly");
                            return false;
                        }
                }
                    
            }
    
    
    </script>
    
    </head>
    
<body>
    <div id="d1"><img src="../images/logo.png"></div>
        <div id="d2">
    <form method="post" action="drugs.php">
             <table>
                
                 <tr height="40">
                    <td>Supplier ID</td>
                    
                    <td><input type=text name="sid"></td>  
            
                </tr>
                <tr height="40">
                <td>Drug</td>
                <td><input type="drug" name="drug" id="drug"> </td>    
                
                </tr>
                <tr height="40">
                <td >Drug ID</td>
                <td><input type="text" name="drugid" id="drugid"></td>    
                </tr>
                  <tr height="40">
                <td >Dosage</td>
                <td><input type="text" name="dosage" id="dosage"></td>    
                </tr>
                <tr height="40">
                <td >Price</td>
                <td><input type="text" name="price" id="price"></td>    
                </tr>
        
        
        
        
            </table>
            
             <input id="i2" type="submit" name="go" value="Add Drug" onsubmit="return validateForm()">
             
            
            
            
    </form>
    
    
    
    
    </div>
   
    
    <?php
    if(isset($_POST['sid'])){
                $sid=$_POST['sid'];
    }

    if(isset($_POST['drug'])){
                $drug=$_POST['drug'];
    }

    if(isset($_POST['drugid'])){
                $drugid=$_POST['drugid'];
    }

    if(isset($_POST['price'])){
                $price=$_POST['price'];
    }
    if(isset($_POST['dosage'])){
                $dosage=$_POST['dosage'];
    }
       
       
    if(isset($_POST['go'])){
                $con=mysqli_connect("localhost","root","") or die("Can't connect to mysql");
                mysqli_select_db($con,"pharmacy") or die("Can't connect to Database");
        
        mysqli_query($con,"INSERT INTO prices (supplier_id,medicine_id,medicine,dosage,price)
                                    VALUES ('$sid','$drugid','$drug','$dosage','$price');");
    }
    
    ?>
    </body>

</html>