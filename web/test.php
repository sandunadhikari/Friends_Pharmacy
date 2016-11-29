<?php
include ("../Entities/cartEntity.php");
session_start();
if (isset($_POST['btnsubmititem'])) {
    if (empty($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    array_push($_SESSION['cart'], $_GET['id2']);
    print_r($_SESSION['cart']);
}
?>
<?php
include ("../Entities/drugEntity.php");
include ("../Entities/stockEntity.php");
include '../database/dbconnect.php';
include 'drugcon.php';

$query = "SELECT * FROM drug ";

$drugArray = array();
$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
while ($row = mysqli_fetch_array($result)) {


    $id = $row[0];
    $medicine_name = $row[1];
    $generic_name = $row[2];
    $type = $row[3];
    $category = $row[4];
    $supplier_id = $row[5];
    $discription = $row[6];
    $image = $row[7];
    $group_name = $row[8];


    $drug = new drugEntity($id, $medicine_name, $generic_name, $type, $category, $supplier_id, $discription, $image, $group_name);
    array_push($drugArray, $drug);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Friends Pharmacy</title>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="../public/css/web/otcStyle.css" type="text/css" />
        <link rel="stylesheet" href="../public/css/web/cart.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../public/js/jquery-2.0.0.js"></script>
        <style>
            .drugTable
            {
                width: 750px;
                height: 250px;
                margin: 10px 10px 10px 0;
                border: 3px solid #E3E3E3;
                border-radius: 10px;
                moz-border-radius: 10px;
            }

            .drugTable tr th, .drugTable tr td
            {
                text-align: left;
                padding: 0px 5px 0 5px;
            }

            .drug img
            {
                padding: 0px 10px 10px 10px;
                height: 150px;
                width: 150px;
                -moz-border-radius: 50px;
                -webkit-border-radius: 50px;
                border-radius: 50px;
            }
        </style>
        <script>


            $(document).ready(function() {

                // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
                $('#noti_Counter')
                        .css({opacity: 0})
                        .text(<?php echo count($_SESSION['cart']); ?>)               // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
                        .css({top: '-10px'})
                        .animate({top: '10px', opacity: 1}, 500);

                $('#noti_Button').click(function() {

                    // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
                    $('#notifications').fadeToggle('fast', 'linear', function() {
                        if ($('#notifications').is(':hidden')) {
                            $('#noti_Button').css('background-color', '#2E467C');
                        }
                        else
                            $('#noti_Button').css('background-color', '#FFF');        // CHANGE BACKGROUND COLOR OF THE BUTTON.
                    });

                    $('#noti_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

                    return false;
                });

                // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
                $(document).click(function() {
                    $('#notifications').hide();

                    // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
                    if ($('#noti_Counter').is(':hidden')) {
                        // CHANGE BACKGROUND COLOR OF THE BUTTON.
                        $('#noti_Button').css('background-color', '#2E467C');
                    }
                });

                $('#notifications').click(function() {
                    return True;       // DO NOTHING WHEN CONTAINER IS CLICKED.
                });
            });
        </script>

        <style>

            #noti_Button {
                cursor:pointer;
            }
            #noti_Counter {
                display:block;
                position:absolute;

                right:30px;
                background:#E1141E;
                color:#FFF;
                font-size:12px;
                font-weight:normal;
                padding:1px 3px;
                margin:-8px 0 0 25px;
                border-radius:2px;
                -moz-border-radius:2px; 
                -webkit-border-radius:2px;
                z-index:1;
            }

            /* THE NOTIFICAIONS WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
            #notifications {
                display:none;
                width:430px;
                position:absolute;
                top:60px;
                right:5px;
                background:#FFF;
                border:solid 1px rgba(100, 100, 100, .20);
                -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
                z-index: 0;
            }
            /* AN ARROW LIKE STRUCTURE JUST OVER THE NOTIFICATIONS WINDOW */
            #notifications:before {         
                content: '';
                display:block;
                width:0;
                height:0;
                color:transparent;
                border:10px solid #CCC;
                border-color:transparent transparent #FFF;
                margin-top:-20px;
                margin-left:80%;
            }
            #inner_noti {
                border-bottom:solid 1px rgba(100, 100, 100, .30);
                background-color: #caf7a3;
            }
            #inner_noti:hover {
                background-color: #a9f26a;
            }
        </style>

    </head>
    <body>

        <div id="noti_Container" >
            <div id="noti_Counter"></div>   <!--SHOW NOTIFICATIONS COUNT.-->
            <div id="noti_Button">
                <div>
                    <img  src="../public/image/cart.png" style="width: 40px; height: 40px; position: absolute; top:10px; right: 50px;">    
                </div>
            </div>  
            <div id="notifications">
                <h3 id="h3" style="text-align: center">Shopping Cart</h3>
                <?php
                foreach ($_SESSION['cart'] as $key => $item) {
                    echo "<div id=inner_noti>
               <a>$item</a>
                </div>";
                }
                ?>
                <div style="height:auto;"></div>

            </div>
        </div>


        <?php require '../includes/customer_header.php'; ?>

        <div class="content">
            <?php foreach ($drugArray as $key => $drug) { ?>

                <table class = 'drugTable'>
                    <tr>

                        <?php echo "<th rowspan='6' width = '150px' ><img runat = 'server' src = '$drug->image' /></th>" ?>

                        <th width = '75px' >Brand: </th>
                        <td><?php echo $drug->medicine_name ?> </td>
                    </tr>

                    <tr>
                        <th>Generic: </th>
                        <td><?php echo $drug->generic_name ?></td>
                    </tr>

                    <tr>
                        <th>Group: </th>
                        <td><?php echo $drug->group_name ?></td>
                    </tr>

                    <tr>
                        <th>Type: </th>
                        <td><?php echo $drug->type ?></td>
                    </tr>

                    <tr>
                        <th>Category: </th>
                        <td><?php echo $drug->category ?></td>
                    </tr>

                    <tr>
                        <td colspan='2' ><?php echo $drug->discription ?></td>
                    </tr>   
                    <tr>
                        <td></td>
                        <td> <button class="product-btn-add" style="width: 100px; height: 30px;" onclick= "window.location.href = 'cart1.php?id=<?php echo $drug->id ?>'"><span>Add to Cart</span></button></td>
                        <!--<td> <button class="product-btn-add" style="width: 100px; height: 30px;" id='myBtn' onclick='myFunction()'><span>Add to Cart</span></button></td>-->
                    </tr>   
                </table>
            <?php } ?>
        </div>	
        <aside class="topSide">			
            <img src="../public/image/add3.jpg">
        </aside>

        <aside class="bottomSide">		
            <img src="../public/image/add2.jpg">
        </aside>


        <?php require '../includes/customer_footer.php'; ?>


        <?php if (isset($_GET['id'])) { ?>
            <?php echo $id2 = $_GET['id']; ?>

            <?php
            $query = "SELECT * FROM drug where id=$id2";
            $drugarray = array();
            $result1 = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
            while ($row = mysqli_fetch_array($result1)) {
                $id = $row[0];
                $medicine_name = $row[1];
                $generic_name = $row[2];
                $type = $row[3];
                $category = $row[4];
                $supplier_id = $row[5];
                $discription = $row[6];
                $image = $row[7];
                $group_name = $row[8];
                $drugforcart = new drugEntity($id, $medicine_name, $generic_name, $type, $category, $supplier_id, $discription, $image, $group_name);
            }

            $query2 = "SELECT quantity from stock where medicine_name='$drugforcart->medicine_name'";
            $result2 = mysqli_query($mysqli, $query2) or die(mysqli_error($mysqli));

            $drugprice = array();
            $drugdosage = array();
            $drugid = array();
            $qtyarray = array();

            $stockArray = array();
            while ($row = mysqli_fetch_array($result2)) {
                $id = $row[0];
                $medicineName = $row[1];
                $batchNumber = $row[2];
                $quantity = $row[3];
                $entry_date = $row[4];
                $production_date = $row[5];
                $EXP_date = $row[6];
                $dosage = $row[7];
                $price = $row[8];

                array_push($drugprice , $price);
                array_push($drugdosage , $dosage);
                array_push($drugid , $id);
                array_push($qtyarray , $quantity);
                //Create stock objects and store them in an array.
                $stock = new StockEntity($id, $medicineName, $batchNumber, $quantity, $entry_date, $production_date, $EXP_date, $dosage, $price);
                array_push($stockArray, $stock);
            }
            mysqli_close($mysqli);
            ?>


            <div id = 'myModal' class = 'modal'>
                <div class = 'modal-content'>
                    <h3 style = 'text-align:center;'><?php echo $drugforcart->medicine_name ?></h3>
                    
                    <?php echo " <form name = 'myForm2' action = 'cart1.php?id2=$id2' method = 'post' onsubmit = 'return validateForm2()'>" ?>



                    <table class = 'drugforcartTable'>
                        <tr>

                            <?php echo "<th rowspan='6' width = '150px' ><img runat = 'server' src = '$drugforcart->image' /></th>" ?>


                        </tr>

                        <tr>
                            <th>Generic: </th>
                            <td><?php echo $drugforcart->generic_name ?></td>
                        </tr>

                        <tr>
                            <th>Group: </th>
                            <td><?php echo $drugforcart->group_name ?></td>
                        </tr>

                        <tr>
                            <th>Type: </th>
                            <td><?php echo $drugforcart->type ?></td>
                        </tr>

                        <tr>
                            <th>Category: </th>
                            <td><?php echo $drugforcart->category ?></td>
                        </tr>

                        <tr>
                            <td colspan='2' ><?php echo $drugforcart->discription ?></td>
                        </tr> 

                        <tr>


                            <td></td>
                            <td>Dosage:</td>
                            
                             <td>
                                <select name = 'dosagetype' >
                                    
                                    <?php foreach ($drugdosage as $value) { ?>
                                    <?php echo $value; ?>
                                        <?php $drid = $drugid[array_search($value, $drugdosage)] ?>
                                        <?php echo "<option value=.$drid'>$value" . " (Rs " . $drugprice[array_search($value, $drugdosage)] . ")" . "</option>"; ?>
                                    <?php } ?>
                                </select>      
                            </td>

                        </tr>   
                        <tr>
                            <td></td>
                            <td>Quantity:</td>
                            <td><input type="number" name='qtybox'></td>
                            <td>

                            </td>

                        </tr>   
                        <tr>
                            <td><?php echo array_sum($qtyarray) . " unit in stock"; ?></td>
                            <td><input type = 'submit' name = 'btnsubmititem' value='Add to cart'></td>
                            <td><button  onclick= "window.location.href = 'cart1.php?test=<?php $drid ?>'"><span>Close</span></button></td>
                        </tr>   

                    </table>






                    <?php "</form>" ?>

                </div>
            </div>
        <?php } ?>

    </body>
</html>




