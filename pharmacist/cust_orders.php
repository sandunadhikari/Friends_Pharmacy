
<?php

require 'orderController.php';
$title = "Customer orders";
$orderController = new orderController();
if (isset($_GET["confirm"])) {
    $no = $_GET["order_no"];
    $content = "
        <table style='position: relative; left:950px;'>
            <tr>
                <td>
                <td><a href='#' onClick=showConfirm1($no)><img  class='confirm' src='../public/image/reject.png' style='width: 25px; height: 25px;'></a></td>
                <td><a href='#' onClick=showConfirm2($no)><img  class='confirm' src='../public/image/OK.png' style='width: 25px; height: 25px;'></a></td>
                </tr>
        </table>";
    $orderListTable = $orderController->orderListTable($_GET["order_no"]);
    
    $content = $content . $orderListTable."<a href='confiredOrder.php'><img  class='confirm' src='../public/image/back.png' style='width: 100px;; height: 35px; position: relative; left:400px;'></a>
                ";
}
else if (isset($_GET["order_no"])) {
    $no = $_GET["order_no"];
    $content = "
        <table style='position: relative; left:950px;'>
            <tr>
                <td>
                <td><a href='#' onClick=showConfirm1($no)><img  class='confirm' src='../public/image/reject.png' style='width: 25px; height: 25px;'></a></td>
                <td><a href='#' onClick=showConfirm2($no)><img  class='confirm' src='../public/image/OK.png' style='width: 25px; height: 25px;'></a></td>
                </tr>
        </table>";
    $orderListTable = $orderController->orderListTable($_GET["order_no"]);
    
    $content = $content . $orderListTable."<a href='cust_orders.php'><img  class='confirm' src='../public/image/back.png' style='width: 100px;; height: 35px; position: relative; left:400px;'></a>
                ";
} else if (isset($_POST["btnsub"])) {
    $no = $_POST["btnno"];
    $msg = $_POST["txtarea"];
    $orderController->reject($no, $msg);
    echo '<script language="javascript">';
    echo 'alert("Notification is sent to the customer!");';
    echo '</script>';
    $orderTable = $orderController->orderTable("not confirmed");
    $content = $orderTable;
} else if (isset($_GET["confirmed"])) {
    $orderController->confirmOrder($_GET["confirmed"]);
    $orderTable = $orderController->orderTable("not confirmed");
    $content = $orderTable;
} else {
    $orderTable = $orderController->orderTable("not confirmed");
    $content = $orderTable;
}

$content = $content . "<div id='confirmBox' class='confirmBox'>
        <div class='modal-content' style = 'width:700px; height:250px'>
          <span class='close'>x</a></span>
          <h3 style='text-align:center;'>Reject order</h3>
          <form name='myForm2' action='#'  method ='post' onsubmit='return validateForm2()'>
            <table>
                <tr>
                    <td>
                    <label align='center' width='10px'>Reason: </label>
                    </td>
                    <td >
                    <textarea rows='4' cols='50' name='txtarea'></textarea>
                    </td>
                </tr>

            </table>
          
          
          
          <p></p>
          <input type='hidden' name = 'btnno' id = 'no'>
          <input type='submit' name = 'btnsub' id = 'btnsub'>
          
          </form>
        </div>
        

</div>";

include 'template.php';
?>
