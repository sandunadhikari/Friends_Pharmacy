<?php 
$host = "localhost";
$user = "root";
$passwd = "";
$database = "friends_pharmacy";
$con=mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());

   
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM supplier WHERE company_name LIKE '".$_POST["query"]."%'";  
      $result = mysqli_query($con, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
        {  
          $output = '<table id="us_table"><tr><th>Company Name</th></tr><ul>';
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<tr><td><li>'.$row["company_name"].'</li></td></tr>';  
           }  
      }  
      else  
      {  
           $output .= '<li id="notfound">Supplier not found</li>';  
      }   
      $output .= '</ul>';  
      echo $output;  
 } 
 
 
 ?>  