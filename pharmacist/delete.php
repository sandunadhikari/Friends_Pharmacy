<?php

$title = "";

$content = "<h3 style='text-align:center;'>Delete Medicine</h3>
    <form action='delete.php' method ='post'>
    
      <fieldset>
        <label for='medicineName' style='font-size:20px;'>Medicine name: </label>
        <input type ='text' id='medicine' class='drugBox' name ='txtBrandName' autocomplete='off' required><br/>
        <div id='medicineList'></div> 
        <p></p>
        <input type='submit' name = 'btnView' value='View' >
        
      </fieldset>
</form> ";

if(isset($_POST['btnView'])){
    
     $medicine_Name =  $_POST["txtBrandName"];
  
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $database = "friends_pharmacy";
    $mysqli=mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());
        $query = "SELECT * FROM drug WHERE medicine_name LIKE '$medicine_Name'";
    $result = mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
    $coffeeArray = array();
    $row = mysqli_fetch_array($result);
    mysqli_close($mysqli);
  
  $medicine_id=$row[0];
  $brand_name =$row[1];
  $generic_name = $row[2];
  $type = $row[3];
  $category = $row[4];
  $supplier_id =$row[5];
  $content = $row[6];
  $group = $row[8];
  $image  =$row[7];
  
  $content = "<h3 style='text-align:center;'>Delete Medicine</h3>
    <form action='delete.php' method ='post'>
    
      <fieldset>
        <label for='name'>Medicine ID: </label>
        <label class='inputField' name ='txtMedicineID'>$medicine_id'</label><br/>
            <p></p>
            
        <label for='Brand Name'>Brand Name: </label>
        <label class='inputField' name ='txtBrandName'>$brand_name</label><br/>
	
        <p></p>
        <label for='name'>Generic Name: </label>
	<input type='text' class='inputField' name='txtGenericName' value='$generic_name'/><br/>
        <p></p>
        
        
        <label for='Type'>Type: </label>
        <select class = 'type' name='types'>
           <option value='$type'>$type</option>
          <option value='Tablets'>Tablets</option>
          <option value='Capsules'>Capsules</option>
          <option value='liquid'>liquid</option>
        </select></br>
        <p></p>
        
        
        <label for='Category'>Category: </label>
	<input type='text' class='inputField' name='txtGenericName' value='$category'/><br/>
        <p></p>

        
        <label for='group'>Group: </label>
        <select class = 'type' name = 'groups'>
          <option value='$group'>$group</option>
          <option value='OC'>Over the counter drug</option>
          <option value='Two ii'>Two ii drug</option>
          <option value='Narcootics'>Narcootics</option>
        </select></br>
        <p></p>
                                
        <label for='Supplier'>Supplier: </label>
        <select class = 'type' name = 'suppliers'>
            <option value='$supplier_id'>$supplier_id</option>
          <option value='Supplier1'>Supplier1</option>
          <option value='Supplier2'>Supplier2</option>
          <option value='Supplier3'>Supplier3</option>
        </select></br>
        <p></p>
                                
        <label for='content'>content: </label>
	<textarea cols='33' rows='12' name='txtContent'>$content</textarea></br>
	<p></p>			
         
        <label for='image'>Add image: </label>
        <input type='file' name='pic' accept='image/*' value='$image'>
        <p></p>
        
        <input type='submit' name = 'btnDelete' value='Delete' ></span><br/> 
        </fieldset>
</form> ";
}
  
   

else if(isset($_POST['btnDelete'])){
    $brand_name =  $_POST["txtBrandName"];
  
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $database = "friends_pharmacy";
    $mysqli=mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());
    
    $query = "delete FROM drug WHERE medicine_name LIKE '$brand_name'";
    mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
    
    mysqli_close($mysqli);
    
   
        echo '<script language="javascript">';
        echo 'alert("Successfully deleted")';
        echo '</script>';
    
    
    
}









include './MedicineTemplate.php';


?>
<script>
$(document).ready(function(){  
      $('#medicine').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"Search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#medicineList').fadeIn();  
                          $('#medicineList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#medicine').val($(this).text());  
           $('#medicineList').fadeOut(); 
           
           
        });  
 });  
 
 </script>