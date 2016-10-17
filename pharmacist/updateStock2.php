<?php
require 'stockController.php';
$title = "Update Stock";
$stockController = new stockController();

if(isset($_POST['btnView'])){
    $medicine_Name = $_POST["txtMedicinedName"];
    $stockTable = $stockController->UpdateStockTables($medicine_Name);
}

$content = $stockTable;
include 'template.php';
?>
