<?php
include '../database/dbconnect.php';

include ("../Entities/drugEntity.php");
include ("../Entities/stockEntity.php");

include 'drugcon.php';
session_start();
if (empty($_SESSION['cart'])) {
    $_SESSION['name'] = array();
    $_SESSION['cart'] = array();
    $_SESSION['qty'] = array();
    $_SESSION['dosage'] = array();
    $_SESSION['unitprice'] = array();
    $_SESSION['amount'] = array();
}
//session_destroy();
if (isset($_POST['btnsubmititem'])) {

    array_push($_SESSION['name'], $_POST['medname']);
    array_push($_SESSION['cart'], $_POST['dosagetype']);
    array_push($_SESSION['qty'], $_POST['qtybox']);
    $stockid = $_POST['dosagetype'];
    $qty = $_POST['qtybox'];
    $query = "SELECT dosage,price FROM stock where id = $stockid";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    while ($row = mysqli_fetch_array($result)) {
        array_push($_SESSION['dosage'], $row[0]);
        array_push($_SESSION['unitprice'], $row[1]);
        array_push($_SESSION['amount'], ($row[1] * $qty));
    }
    //array_push($_SESSION['unitprice'], $_POST['dosagetype']);
    //print_r($_SESSION['cart']);
    //print_r($_SESSION['qty']);
    //session_destroy();
}





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


//array_push($_SESSION['unitprice'], $_POST['dosagetype']);

echo "<div id='notifications'>";
echo "<h3 id='h3' style='text-align: center'>Shopping Cart</h3>";

echo "<p class='totaltxt' style='text-align: center'>Total :</p>";
echo "<p class='totalno' style='text-align: center'>" . array_sum($_SESSION['amount']) . "</p>";

echo "<button class='addorder'  onclick= 'window.location.href ='index.php''><span>Add to Order list</span></button>";

echo "<div id=inner_noti>";
echo '<table id="myTable">';
echo '<tr>';
echo '<th>
            Medicine name
        </th>
        <th>
            Dosage
        </th>
         <th>
            Quantity
        </th>
         <th>
            Unit price
        </th> 
        <th>
            Amount
        </th>

         <th>
         
        </th>';
echo '</tr>';


foreach ($_SESSION['name'] as $key => $item) {
    echo '<tr>';

    echo '<td>';
    echo $item;
    echo '</td>';
    echo '<td>';
    echo $_SESSION['dosage'][$key];
    echo '</td>';
    echo '<td>';
    echo $_SESSION['qty'][$key];
    echo '</td>';
    echo '<td>';
    echo $_SESSION['unitprice'][$key];
    echo '</td>';
    echo '<td>';
    echo $_SESSION['amount'][$key];
    echo '</td>';
    echo '<td>';
    echo '<img  class="cancel" src="../public/image/cancel.png" style="width: 20px; height: 20px;">';
    echo '</td>';
    echo '</tr>';
}
echo '</table>';
echo "</div>";
echo "</div>";
//print_r($_SESSION['cart']);
//print_r($_SESSION['qty']);
//session_destroy();
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
            .totaltxt {
                position: absolute;
                right: 380px;
                top:25px;
            }
            .totalno {
                position: absolute;
                right: 340px;
                top:25px;
            }
            .addorder {
                width: 100px;
                height: autopx;
                position: absolute;
                right:5px; top:0px;
                background-color: rgb(106,184,42);
                color: white;
                padding: 10px 10px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                border-radius: 6px;

            }
            .addorder:hover {
                background-color:rgb(152, 214, 72);

            }
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



            $(".cancel").click(function() {
                var index = $(this).closest("tr").index();
                $('.totalno').hide();
                if (index != '')
                {
                    $.ajax({
                        url: "removecart.php",
                        method: "POST",
                        data: {query: index},
                        success: function(data)
                        {
                            $('.totalno').show();
                            $('.totalno').html(data);
                        }

                    });
                }

                var here = this;

                $(this).closest('tr').find('td').fadeOut('fast',
                        function(here) {
                            $(here).parents('tr:first').remove();
                        });


            });



            $(document).ready(function() {

                // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
                $('#noti_Counter')
                        .css({opacity: 0})
                        .text(<?php echo count($_SESSION['cart']); ?>)               // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
                        .css({top: '-15px', right: '10px'})
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
            .cancel {
                cursor:pointer;
            }
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
                    <img  class="cancel" src="../public/image/cart1.png" style="width: 50px; height: 50px; position: absolute; right: 10px;">    
                </div>
            </div>  
            <div id="notifications">

                <h3 id="h3" style="text-align: center">Shopping Cart</h3>





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



            $query3 = "SELECT DISTINCT dosage from stock where medicine_name='$drugforcart->medicine_name'";
            $result3 = mysqli_query($mysqli, $query3) or die(mysqli_error($mysqli));
            $disdosage = array();

            while ($row = mysqli_fetch_array($result3)) {
                array_push($disdosage, $row[0]);
            }

            $disprice = array();
            foreach ($disdosage as $val) {
                $query4 = "SELECT price from stock where dosage='$val' AND medicine_name='$drugforcart->medicine_name' AND entry_date = (select max(entry_date) from stock where medicine_name='$drugforcart->medicine_name' AND dosage='$val')";
                $result4 = mysqli_query($mysqli, $query4) or die(mysqli_error($mysqli));
                while ($row = mysqli_fetch_array($result4)) {
                    array_push($disprice, $row[0]);
                }
            }
            $disid = array();
            foreach ($disdosage as $val) {
                $query5 = "SELECT id from stock where dosage='$val' AND medicine_name='$drugforcart->medicine_name' AND expire_date = (select MIN(expire_date) from stock where medicine_name='$drugforcart->medicine_name' AND dosage='$val')";
                $result5 = mysqli_query($mysqli, $query5) or die(mysqli_error($mysqli));
                while ($row = mysqli_fetch_array($result5)) {
                    array_push($disid, $row[0]);
                }
            }
            $disqty = array();
            foreach ($disdosage as $val) {
                $query6 = "SELECT quantity from stock where dosage='$val' AND medicine_name='$drugforcart->medicine_name' AND expire_date = (select MIN(expire_date) from stock where medicine_name='$drugforcart->medicine_name' AND dosage='$val')";
                $result6 = mysqli_query($mysqli, $query6) or die(mysqli_error($mysqli));
                while ($row = mysqli_fetch_array($result6)) {
                    array_push($disqty, $row[0]);
                }
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
                            <td><input type="hidden" name ="medname" value=<?php echo $drugforcart->medicine_name ?>></td>

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

                                    <?php foreach ($disdosage as $value) { ?>
                                        <?php $drid = $disid[array_search($value, $disdosage)] ?>
                                        <?php $drprice = $disprice[array_search($value, $disdosage)] ?>
                                        <?php echo "<option value=$drid>$value" . " (Rs " . $disprice[array_search($value, $disdosage)] . ")" . "</option>"; ?>
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
                            <td><?php foreach ($disdosage as $value) { ?>
                                    <?php echo $value . " " . $disqty[array_search($value, $disdosage)] . " unit in stock<br>"; ?>
                                <?php } ?></td>
                            <td><input type = 'submit' name = 'btnsubmititem' value='Add to cart'></td>
                            <td><button ><span>Close</span></button></td>
                        </tr>   

                    </table>
                    <?php "</form>" ?>

                </div>
            </div>
        <?php } ?>

    </body>
</html>




