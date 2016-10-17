<?php
$con= mysqli_connect("localhost", "root", "", "friends_pharmacy");
if(!$con) {
    die("Connection failed");
}
$sid='';
switch ($_GET['type']) {
    case 'get' : {
      $search = $_GET['search'];

$sql = "SELECT supplier.company_name ,supplier.mobile,supplier.telephone,supplier.fax,supplier.address,drug_price.medicine_name,drug_price.dosage,drug_price.price FROM supplier INNER JOIN drug_price WHERE supplier.id = drug_price.id AND drug_price.medicine_name LIKE '%$search%'";
        
        $result = mysqli_query($con, $sql);
        $res_data = array();
        while($row = mysqli_fetch_assoc($result)) {
            array_push($res_data, $row);
        
        
        }
        }
    

    echo (json_encode($res_data)); 
    }


       
?>

        