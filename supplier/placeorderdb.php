<?php 
$host = "localhost";
$user = "root";
$passwd = "";
$database = "friends_pharmacy";
$connect=mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());

   
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM drug WHERE generic_name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
     
      if(mysqli_num_rows($result) > 0)  
      {  
          $output = '<table id="us_table"><tr><th>Medicine</th></tr><ul>';
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<tr><td><li>'.$row["generic_name"].'</li></td></tr>';  
           }  
      }  
      else  
      {  
           $output .= '<li id="notfound">Drug not found</li>';  
      }  
      $output .= '</ul></table>';  
      echo $output;  
 } 
 if(isset($_POST["search"])){
     $query1="SELECT supplier.company_name, drug.supplier_id, supplier.id FROM supplier INNER JOIN drug ON supplier.id=drug.supplier_id";
     $result1=mysql_query($connect,$query1);
     
    $num=mysqli_num_rows($result1);
    while($row=mysqli_fetch_assoc($result1)){
    $sup=$row['company_name'];
    
}
     
 }
 
 ?>  