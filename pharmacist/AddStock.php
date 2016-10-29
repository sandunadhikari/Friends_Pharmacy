<script>
function validateForm() {
    var x = document.forms["myForm"]["txtMedicineName"].value;
    var y = document.forms["myForm"]["txtbatchNumber"].value;
    var z = document.forms["myForm"]["txtQuantity"].value;
    var p = document.forms["myForm"]["entry_date"].value;
    var q = document.forms["myForm"]["EXP_date"].value;
    var s = document.forms["myForm"]["production_date"].value;
    
    
    
    if (x == null || x == "") {
        alert("Medicine name must be filled out");
        return false;
    }
    if (y == null || y == "") {
        alert("Batch number must be filled out");
        return false;
    }
    if (z == null || z == "") {
        alert("Quantity number must be filled out");
        return false;
    }
    if (p == null || p == "") {
        alert("Entry date must be filled out");
        return false;
    }
    if (q == null || q == "") {
        alert("EXP date must be filled out");
        return false;
    }
    
    
}


</script>
<?php
$title = "Add Stock";

$content = "<h2 style='text-align:center;'>Add New Stock</h2>
    <form name='myForm' action='AddStock.php' method ='post' autocomplete='off' onsubmit='return validateForm()'>
    
      <fieldset>
        <label class='lblf' for='name'>Medicine Name: </label>
        <input type ='text' id='a' class='inputField' name ='txtMedicineName' autocomplete='off'><br/>
        <p></p>
        <label class='lblf' for='batch_number'>Batch Number: </label>
	<input type='text' class='inputField' name='txtbatchNumber' autocomplete='off'/><br/>
        <p></p>
        <label class='lblf' for='quantity'>Quantity: </label>
	<input type='number' class='inputField' name='txtQuantity' autocomplete='off' /><br/>
        <p></p>
        <label class='lblf' for='Entry_date'>Entry Date: </label>
	<input type='date' id='entryDate' class='inputField' name='entry_date'  /><br/>
        <p></p>
        <label class='lblf' for='production_date'>Production Date: </label>
	<input type='date' id='entryDate' class='inputField' name='production_date' /><br/>
        <p></p>
        <label class='lblf' for='expire_date'>EXP Date: </label>
	<input type='date' id='entryDate' class='inputField' name='EXP_date' /><br/>
        <p></p>
        
        <input type='submit' name = 'btnSubmit'></span><br/> 
         <p></p>


      
     </fieldset>
</form> ";

if(isset($_POST['btnSubmit'])){
  
    $MedicineName =  $_POST["txtMedicineName"];
    $batchNumber =$_POST["txtbatchNumber"];
    $quantity = $_POST["txtQuantity"];
    $entry_date = $_POST["entry_date"];
    $production_date = $_POST["production_date"];
    $EXP_date = $_POST["EXP_date"];
  
  
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $database = "friends_pharmacy";
    $mysqli=mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());
   
    
    if (mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM stock WHERE medicine_name ='$MedicineName' AND batch_no='$batchNumber'")))
    {	
        echo '<script language="javascript">';
        echo 'alert("Stock is already added")';
        echo '</script>';
    }
    else {    
	
    $query2 = "INSERT INTO stock
    (medicine_name,batch_no,quantity,entry_date,production_date,expire_date)
    VALUES
    ('$MedicineName','$batchNumber','$quantity','$entry_date','$production_date','$EXP_date')";

    mysqli_query($mysqli,$query2) or die(mysqli_error($mysqli));
    mysqli_close($mysqli);
    //header("Location:AddStock.php");
    echo '<script language="javascript">';
    echo 'alert("Successfully added")';
    echo '</script>';
    }
   
}



include 'template.php';

?>
<script>
    $(document).ready(function() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} 
    document.getElementById("entryDate").defaultValue = yyyy+"-"+mm+"-"+dd;
    
});
</script>>