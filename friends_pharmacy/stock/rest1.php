<?php

$med_type = $_GET['medtype'];
$search = $_GET['search'];
$action = $_GET['action']; 
$period = $_GET['period'];
$date = date_create(date("o-m-d"));
switch($period) {
    case '1': {         date_sub($date,date_interval_create_from_date_string("365 days"));
    }
    break;
    case '2': {         date_sub($date,date_interval_create_from_date_string("30 days"));
    }
    break;
        case '3': {         date_sub($date,date_interval_create_from_date_string("7 days"));
    }
    break;
        case '4': {         date_sub($date,date_interval_create_from_date_string("1 days"));
    }
    break;
}
$conn = mysqli_connect("localhost", "root", "", "friends_pharmacy");
if (!$conn) {
    echo "Error";
}
$sql = '';
switch($med_type) {
    case '1': {
        if($action == '1') {
            $sql = "SELECT p.`date`, d.`medicine_id`, d.`medicine_name`, d.`category`, st.`batch_no`, st.`supplier`, st.`quantity`, st.`buying_price`, st.`selling_price`
             FROM purchasing p, drug d, stock st 
             WHERE p.medicine_id = d.medicine_id AND p.medicine_id = st.medicine_id AND p.medicine_id LIKE '$search%' AND p.`date` > '" .  date_format($date,"Y-m-d") . "'";
        } else if($action == '2') {
            $sql = "SELECT s.`date`, s.`medicine_id`, d.`medicine_name`, d.`category`, st.`batch_no`, st.`supplier`, st.`quantity`, st.`buying_price`, st.`selling_price`
            FROM selling s, drug d, stock st 
            WHERE s.medicine_id = d.medicine_id AND s.medicine_id = st.medicine_id AND d.medicine_id LIKE '$search%' AND s.`date` > '" .  date_format($date,"Y-m-d") . "'";
        }        
    }
    break;
    case '2': {
        if($action == '1') {
            //  $sql = "SELECT * FROM purchasing p, drug d, stock s WHERE p.medicine_id = d.medicine_id AND s.medicine_id = d.medicine_id AND d.medicine_name LIKE '$search%' AND p.`date` > '" . date_format($date,"Y-m-d") . "'";
            $sql = "SELECT p.`date`, d.`medicine_id`, d.`medicine_name`, d.`category`, st.`batch_no`, st.`supplier`, st.`quantity`, st.`buying_price`, st.`selling_price`
             FROM purchasing p, drug d, stock st 
             WHERE p.medicine_id = d.medicine_id AND p.medicine_id = st.medicine_id AND d.medicine_name LIKE '$search%' AND p.`date` > '" .  date_format($date,"Y-m-d") . "'";
        } else if($action == '2') {
            $sql = "SELECT s.`date`, s.`medicine_id`, d.`medicine_name`, d.`category`, st.`batch_no`, st.`supplier`, st.`quantity`, st.`buying_price`, st.`selling_price`
            FROM selling s, drug d, stock st 
            WHERE s.medicine_id = d.medicine_id AND s.medicine_id = st.medicine_id AND d.medicine_name LIKE '$search%' AND s.`date` > '" .  date_format($date,"Y-m-d") . "'";
        }        
    }
    break;
    case '3': {
        if($action == '1') {
             $sql = "SELECT p.`date`, d.`medicine_id`, d.`medicine_name`, d.`category`, st.`batch_no`, st.`supplier`, st.`quantity`, st.`buying_price`, st.`selling_price`
             FROM purchasing p, drug d, stock st 
             WHERE p.medicine_id = d.medicine_id AND p.medicine_id = st.medicine_id AND st.`batch_no` LIKE '$search%' AND p.`date` > '" .  date_format($date,"Y-m-d") . "'";
        } else if($action == '2') {
            // $sql = "SELECT * FROM selling s, drug d, stock st WHERE d.medicine_id = s.medicine_id AND st.medicine_id = d.medicine_id AND s.batch_no LIKE '$search%'" ;
            $sql = "SELECT s.`date`, s.`medicine_id`, d.`medicine_name`, d.`category`, st.`batch_no`, st.`supplier`, st.`quantity`, st.`buying_price`, st.`selling_price`
            FROM selling s, drug d, stock st 
            WHERE s.medicine_id = d.medicine_id AND s.medicine_id = st.medicine_id AND st.`batch_no` LIKE '$search%' AND s.`date` > '" .  date_format($date,"Y-m-d") . "'";
        }    
    }
    break;
    default: {
        
    }
}
// echo $sql;
// echo "<br>";
$result = mysqli_query($conn, $sql);
$res_data = array();
while($row = mysqli_fetch_assoc($result)) {
    
    array_push($res_data, $row);
}
echo(json_encode($res_data));

?>