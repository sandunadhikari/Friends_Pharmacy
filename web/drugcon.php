<?php

class drugcon {

    function drugbyid($id) {
        include ("../Entities/drugEntity.php");
        include '../database/dbconnect.php';
        $query = "SELECT * FROM drug where id=$id";

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
            
        }
        mysqli_close($mysqli);
        return $drug;
    }

}
?>