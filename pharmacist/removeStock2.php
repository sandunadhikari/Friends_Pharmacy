<script src="../public/js/sort.js"></script>
<?php
require 'stockController.php';
$title = "Remove Stock";
$stockController = new stockController();

if(isset($_POST['btnView'])){
    $medicine_Name = $_POST["txtMedicinedName"];
    $stockTable = $stockController->CreateStockTables($medicine_Name);
}

if(isset($_GET["delete"]))
{
    $medicine_Name=$stockController->DeleteStock($_GET["delete"]);
    echo '<script language="javascript">';
    echo 'alert("Deleted successfully")';
    echo '</script>';
    $stockTable = $stockController->CreateStockTables($medicine_Name);
}

$content = $stockTable;
include 'template.php';
?>
