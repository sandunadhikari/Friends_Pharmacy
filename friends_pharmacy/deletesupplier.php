<html>
    <head>
        <title>Delete supplier</title>
        <link rel="stylesheet" type="text/css" href="../styles/deletesupplier.css">
        <script type="text/javascript">
        function validateForm(){
                
                var search=document.getElementById("i1").value;
            
                if(search==""){
                    alert("Please Enter a Supplier");
                    return false;
                }
            
        }
        
        </script>
    </head>
<?php
    $sid="";
    $con=mysqli_connect("localhost","root","") or die("Can't connect to mysql");
    mysqli_select_db($con,"friends_pharmacy") or die("Can't connect to Database");

    $output ='';
    $output2='';
    
        
    if(isset($_POST['search'])){
        $search = $_POST['search'];
        $search = preg_replace("#[^0-9a-z]#i","",$search);
        
       $query= mysqli_query($con,"SELECT * FROM supplier WHERE company_name LIKE '%$search%' ") or die ("coudn't search");
         
       $count=mysqli_num_rows($query);
        
        if($count == 0){
            $output ="There was no search result";
        }else{
            while($row = mysqli_fetch_array($query)){
               
                $sid = $row['supplier_id'];
                $output .= '<div>'. $sid. '<div>';
                //echo "<script type='text/javascript'> document.getElementById('i1').innerHTML=search;</script>";
            
            }$query2 = mysqli_query($con, "SELECT * FROM prices WHERE supplier_id LIKE '%$sid%'") or die ("coudn't find"); 

 $count2=mysqli_num_rows($query2);
 if($count2 ==0){
     $output2 ="Theres no any drug";
 }else{
     while($row2 = mysqli_fetch_array($query2)){
        $drug = $row2['medicine'];
        $output2 .= '<div>' . $drug. '</div>'; 
     }
 }
      
        }
    
   
    }
if(isset($_POST['delete'])){
    $sid=$_POST['search'];
    mysqli_query($con,"DELETE FROM supplier WHERE supplier_id='$sid'");
    mysqli_query($con,"DELETE FROM prices WHERE supplier_id='$sid'");
    $output2="";
    
}

?>

    <body>
        <div id="d1"><img src=../images/logo.png></div>
            <div id="d4">
                <form id="f1" action="deletesupplier.php" method="post" onsubmit="return validateForm();">
                <input id="i1" type="text" name="search" placeholder="Company name" value="<?php echo $sid; ?>">
                    <input type="submit" name="submit" value="search"><br><br><br>


                <table>
                <tr>
                <td width="100px" height=40>Supplier ID:</td> 

                <?php       
                echo "<td> $output
                    </td>
                       
                       
                    </tr>
                    <td  >Drugs:</td>  
                    <td> $output2</td> 
                    </tr>";
                    ?>
                    
                </table> <br><br><br><br><br>
                <input type="submit" name="delete" value="Delete Supplier">
                
                </form>
            </div>
    </body>
</html>
                
               