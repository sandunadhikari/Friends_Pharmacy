<?php

require 'stockController.php';
$title = "Customer orders";
$stockController = new stockController();
if (isset($_GET["order_no"])) {
    $orderListTable = $stockController->orderListTable($_GET["order_no"]);
    $content = $orderListTable;
} else {
    $orderTable = $stockController->orderTable();
    $content = $orderTable;
}
include 'template.php';
?>
