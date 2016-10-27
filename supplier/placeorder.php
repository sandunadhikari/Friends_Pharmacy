<html>
<head>
    <title>Place an order</title>
    <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <link type="text/css" href="css/placeorder.css" rel="stylesheet">
      <?php require('../includes/_header.php'); ?>
</head>
    <body>
         <?php require_once("../includes/navigation.php") ?>
        <?php 
    $output='';
    ?>
        <div id="d1">
    <form action="placeorder.php" method="post">
   <input type="text" id="medname" name="medname" placeholder="Medicine name">
    <div id="medList"><?php echo $output?></div>
   <input id="load" type="submit" name="btn" value="search">
    </form>
    
    <div id="d2">
    
            <form action="placeorder.php" method="post">
              <table>
                    <tr height="50">
                        <td>Supplier</td>
                        <td><select>
                            <?php
                            for($i=1; $i<$num; $i++){
                                ?>
                               <option value="<?php echo $sup;?>"><?php echo $sup;?></option>
                            <?php
                            }
                            ?>
                        </select></td>
                   </tr>
                   <tr height="50">
                        <td>Amount</td>
                        <td><input type="text" id="amnt" name="amnt"></td>
                   </tr>
                   <tr height="50">
                        <td>Date</td>
                        <td><input type="date" id="date" name="date"></td>
                   </tr>
             </table>  
                
            
            
            </form>
        
     
        
    </div>
       <?php require_once('../includes/_footer.php') ?>
    </body>


</html>
<script>
$(document).ready(function(){  
      $('#medname').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"placeorderdb.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#medList').fadeIn();  
                          $('#medList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#medname').val($(this).text());  
           $('#medList').fadeOut(); 
           
           
        });  
 });  
 
 </script>