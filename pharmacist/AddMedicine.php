<script>
function validateForm() {
    var x = document.forms["myForm"]["txtBrandName"].value;
    var y = document.forms["myForm"]["txtGenericName"].value;
    var z = document.forms["myForm"]["type"].value;
    var p = document.forms["myForm"]["category"].value;
    var q = document.forms["myForm"]["supplier"].value;
    
    
    
    
    if (x == null || x == "") {
        alert("Medicine name must be filled out");
        return false;
    }
    if (y == null || y == "") {
        alert("Batch number must be filled out");
        return false;
    }
    if (z == null || z == "") {
        alert("Type must be filled out");
        return false;
    }
    if (p == null || p == "") {
        alert("category must be filled out");
        return false;
    }
    if (q == null || q == "") {
        alert("supplier must be filled out");
        return false;
    }
 }
</script>


<?php

$title = "";

$content = "<h2 style='text-align:center;'>Add New Medicine</h2>
    <form name='myForm' action='AddMedicine.php' method ='post' onsubmit='return validateForm()'>
        <fieldset>
            <label for='email'>Medicine Name: </label>
            <input type='text' class='inputField' name='txtBrandName' autocomplete='off'/><br/>
            <p></p>
            <label for='name'>Generic Name: </label>
            <input type='text' class='inputField' name='txtGenericName' autocomplete='off' /><br/>
            <p></p>
            <label for='Type'>Type: </label>
            <select class = 'type' name='type'>
            <option value='Tablets'>Tablets</option>
            <option value='Capsules'>Capsules</option>
            <option value='liquid<'>liquid</option>
            </select></br>
            <p></p>

            <label for='Category'>Category: </label>
            <input type='text' class='inputField' name='category' autocomplete='off' /><br/>
            <p></p>

            <label for='group'>Group: </label>
            <select class = 'type' name='group'>
            <option value='OC'>Over the counter</option>
            <option value='two_ii'>Two ii</option>
            <option value='Narcotics'>Narcotics</option>
            </select></br>
            <p></p>

            <label for='Supplier'>Supplier: </label>
            <input type='text' class='inputField' id='supplier' name='supplier' autocomplete='off'/><br/>
            <div id='supplierList'style='position: fixed;'></div> 
            <p></p>

            <label for='content'>content: </label>
            <textarea cols='33' rows='12' name='txtContent'></textarea></br>
            <p></p>			

            <label for='image'>Add image: </label>
            <input type='file' name='pic' accept='image/*'>
            <p></p>

            <input type='submit' name = 'btnSubmit' location.href = 'AddMedicine.php'></span><br/> 
            <p></p>



     </fieldset>
</form> ";



if(isset($_POST['btnSubmit'])){
  
  $brand_name =$_POST["txtBrandName"];
  $generic_name = $_POST["txtGenericName"];
  $type = $_POST["type"];
  $category = $_POST["category"];
  $supplier_name =$_POST["supplier"];
  $discription = $_POST["txtContent"];
  $group = $_POST["group"];
  $image  =$_POST["pic"];
    
   $host = "localhost";
    $user = "root";
    $passwd = "";
    $database = "friends_pharmacy";
    $mysqli=mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error()); 
    
    
    if (mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM drug WHERE medicine_name ='$brand_name'")))
    {	
        echo '<script language="javascript">';
        echo 'alert("Stock is already added")';
        echo '</script>';
    }
    else {
   $q = "select id from supplier where company_name='$supplier_name'";
   $result = mysqli_query($mysqli,$q) or die(mysqli_error($mysqli));
   $row = mysqli_fetch_array($result);
   
   $supplier_id=$row[0];
   
   
   $query = "INSERT INTO drug
            (medicine_name,generic_name,type,category,supplier_id,discription,image,group_name)
             VALUES
             ('$brand_name','$generic_name','$type','$category','$supplier_id','$discription','$image','$group')";

    
    mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
    mysqli_close($mysqli);
    
   
    echo '<script language="javascript">';
    echo 'alert("Successfully added")';
    echo '</script>';
    
    
}
}
include './MedicineTemplate.php';
?>
<script>
$(document).ready(function(){  
      $('#supplier').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"supplierSearch.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#supplierList').fadeIn();  
                          $('#supplierList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#supplier').val($(this).text());  
           $('#supplierList').fadeOut(); 
           
           
        });  
 });  
 
 </script>