<?php    
$con=mysqli_connect("localhost","root","") or die ("couldn't connect sql");
mysqli_select_db($con,"friends_pharmacy") or die("couldn't connect database");
$query=mysqli_query($con,"SELECT medicine_name,batch_no,quantity,expire_date FROM stock where expire_date=DATE_ADD(curdate(),INTERVAL 21 Day);");
    
   
    $rows=mysqli_num_rows($query);
    if($rows < 1) $rows = 0;
while($row=mysqli_fetch_assoc($query)){
    $medi=$row['medicine_name'];
    $batch=$row['batch_no'];
    $quan=$row['quantity'];
    $ex=$row['expire_date'];
}
     
    ?>


<!--Header content goes here-->
<div class="header_content">
    <div class="mainHeader">
    </div>
    <div class="notification_area">
        <ul>
            <li id="noti_Container">
                <div id="noti_Counter" class="noti_Counter"><?php echo $rows ?></div>   
                <div id="noti_Button"></div>    
                <div id="notifications">
                <h3 class="noti_title">Notifications</h3>
                <div style="height:300px;">
                   <?php for($i=0;$i<$rows;$i++){
                        echo "<div id=inner_noti>
                                $quan quantity from $medi will expire on $ex date according to $batch batch number
                                
                            </div>";
                        }
                    ?>
                </div>
                <div class="seeAll"><a href="#">See All</a></div>
                </div>
            </li>
            
        </ul>
    </div>
</div>	

<div class="nav">
    <div class="logo">
        <img  src="../public/image/logo_white.png" class="logo">    
    </div>
    
    <ul class="mainmenu">

        <li><span><a a href="../main/main.php">Home</a></span></li>

      <li><!-- <img src="images/user.png" alt="User icon" class="icon"> --><span><a>Manage Stock</a><span></li>
        <ul class="submenu">
          
          <li><span><a href="../pharmacist/AddStock.php">Add stock</a></span></li>
          <li><span><a href="../pharmacist/updateStock1.php">Update stock</a></span></li>
          <li><span><a href="../pharmacist/removeStock.php">Delete stock</a></span></li>
          <li><span><a href="../pharmacist/viewStock.php">View stock</a></span></li>
          <li><span><a href="../pharmacist/viewusage.php">View stock usage</a></span></li>
       </ul>
       
      <li><span><a>New Medicine</a></span><div class="messages"></div></li>
        <ul class="submenu">
          
          <li><span><a href="../pharmacist/AddMedicine.php">Add medicine </a></span></li>
          <li><span><a href="../pharmacist/searchMedicine.php">Update medicine</a></span></li>
          <li><span><a href="../pharmacist/delete.php">Delete medicine</a></span></li>
        </ul>
      
      <li><span><a>Customer</a></span></li>
        <ul class="submenu">
          
          <li><span><a href="../customer/addcustomer1.php">Add customer</a></span></li>
          <li><span><a href="../customer/updatecustomer.php">Update customer</a></span></li>
          <li><span><a href="../customer/inactive.php">Delete customer</a></span></li>
          <li><span><a href="../customer/customerdetails.php">View customer</a></span></li>
          <li><span><a href="../customer/reminder.php">Reminders</a></span></li>
        </ul>
      
      
      <li><span><a>Supplier</a></span></li>
        <ul class="submenu">
          
         <li><span><a href="../supplier/addsupplier.php">Add supplier</a></span></li>
          <li><span><a href="../supplier/updatesupplier.php">Update supplier</a></span></li>
          <li><span><a href="../supplier/deletesupplier.php">Delete supplier</a></span></li>
          <li><span><a href="../supplier/viewsupplier.php">View supplier</a></span></li>
        </ul>
      
      <li><span><a>Report</a></span></li>
        <ul class="submenu">
          <li><span><a href="../pharmacist/report4.php">Daily Report</a></span></li>
          <li><span><a href="../pharmacist/report2.php">Sales of each Medicine</a></span></li>
          <li><span><a href="../pharmacist/report3.php">Cashier Wise Report</a></span></li>
          
        </ul>

          </span>
    </ul>    
</div>