<?php
session_start();
if (isset($_POST["query"])) {
    $x = $_POST["query"]-1;
    
    if($x==0 && sizeof($_SESSION['cart'])==1) {
        $_SESSION['name'] = array();
        $_SESSION['cart'] = array();
        $_SESSION['qty'] = array();
        $_SESSION['dosage'] = array();
        $_SESSION['unitprice'] = array();
    }
    
    else {
    
    unset($_SESSION['name'][$x]);
    $_SESSION['name'] = array_values($_SESSION['name']);
    
    unset($_SESSION['cart'][$x]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    
    unset($_SESSION['qty'][$x]);
    $_SESSION['qty'] = array_values($_SESSION['qty']);
    
    unset($_SESSION['dosage'][$x]);
    $_SESSION['dosage'] = array_values($_SESSION['dosage']);
    
    unset($_SESSION['unitprice'] [$x]);
    $_SESSION['unitprice'] = array_values($_SESSION['unitprice']);
    
    
    
    }
    print_r($_SESSION['cart']);
    echo sizeof($_SESSION['cart']);
}
?>  
<?php 
$host = "localhost";
$user = "root";
$passwd = "";
$database = "friends_pharmacy";
$connect=mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());

   
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM supplier WHERE company_name LIKE '".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li id="lisup">'.$row["company_name"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>supplier not found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 } 
 
 
 ?>  