
<?php

require 'orderController.php';
$title = "Customer orders";
$orderController = new orderController();
if (isset($_GET["order_no"])) {
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
    $content = $content . $orderListTable;
   


} else if (isset($_GET["confirmed"])) {
    $orderController->confirmOrder($_GET["confirmed"]);
    $orderTable = $orderController->orderTable();
    $content = $orderTable;
} else {
    $orderTable = $orderController->orderTable();
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
                    <textarea rows='4' cols='50'></textarea>
                    </td>
                </tr>

            </table>
          
          
          
          <p></p>
          <input type='submit' name = 'btnSubmitcat'>
          </form>
        </div>
        

</div>";

include 'template.php';
?>
