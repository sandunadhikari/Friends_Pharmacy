<?php

require 'orderController.php';
$title = "Customer orders";
$orderController = new orderController();
if (isset($_POST["query"])) {
    $mail = $_POST["query"];
    $orderTable = $orderController->searchMail($mail);
    echo $orderTable;
}
?>  