<script>
//Display a confirmation box when trying to delete an object
    function showConfirm(id)
    {
        // build the confirmation box
        var c = confirm("Are you sure you wish to Delete this item?");

        // if true, delete item and refresh
        if (c)
            window.location = "removeStock2.php?delete=" + id;
    }
</script>
<?php
include ("../Entities/stockEntity.php");

class stockController {

    function CreateStockTables($medicine_Name) {
        $host = "localhost";
        $user = "root";
        $passwd = "";
        $database = "friends_pharmacy";
        $mysqli = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());

        $query = "SELECT * FROM stock WHERE medicine_name LIKE '$medicine_Name'";

        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        $stockArray = array();

        while ($row = mysqli_fetch_array($result)) {
            $id = $row[0];
            $medicineName = $row[1];
            $batchNumber = $row[2];
            $quantity = $row[3];
            $entry_date = $row[4];
            $production_date = $row[5];
            $EXP_date = $row[6];


            //Create stock objects and store them in an array.
            $stock = new StockEntity($id, $medicineName, $batchNumber, $quantity, $entry_date, $production_date, $EXP_date);
            array_push($stockArray, $stock);
        }
        mysqli_close($mysqli);
        $result = "";
        $result = "
       <h3 style='text-align:center;'>$medicine_Name<h3>
          <table class='sortable'>
                <tr>
                    
                    <th></th>
                    <th><b>batch_no</b></th>
                    <th><b>quantity</b></th>
                    <th><b>entry_date</b></th>
                    <th><b>expire_date</b></th>
                    <th><b>production_date</b></th>
                </tr>";

        foreach ($stockArray as $key => $stock) {
            $result = $result . "
                    
               
                <tr>
                    
                    <td><a href='#' onClick=showConfirm($stock->id) >Delete</td>
                    <td><b>$stock->batch_no</b></td>
                    <td><b>$stock->quantity</b></td>
                    <td><b>$stock->entry_date </b></td>
                    <td><b>$stock->expire_date</b></td>
                    <td><b>$stock->production_date</b></td>
                    
                </tr>

";
        }
        $result = $result . "</table>";
        return $result;
    }

    function UpdateStockTables($medicine_Name) {
        $host = "localhost";
        $user = "root";
        $passwd = "";
        $database = "friends_pharmacy";
        $mysqli = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());

        $query = "SELECT * FROM stock WHERE medicine_name LIKE '$medicine_Name'";

        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        $stockArray = array();

        while ($row = mysqli_fetch_array($result)) {
            $id = $row[0];
            $medicineName = $row[1];
            $batchNumber = $row[2];
            $quantity = $row[3];
            $entry_date = $row[4];
            $production_date = $row[5];
            $EXP_date = $row[6];

            //Create stock objects and store them in an array.
            $stock = new StockEntity($id, $medicineName, $batchNumber, $quantity, $entry_date, $production_date, $EXP_date);
            array_push($stockArray, $stock);
        }
        mysqli_close($mysqli);
        $result = "";
        $result = "
       
       <h3 style='text-align:center;'>$medicine_Name<h3>
        
          <table class='sortable'>
                <tr>
                    
                    <th></th>
                    <th><b>batch no</b></th>
                    <th><b>quantity</b></th>
                    <th><b>entry date</b></th>
                    <th><b>expire date</b></th>
                    <th><b>production date</b></th>
                    
                </tr>";
        foreach ($stockArray as $key => $stock) {
            $result = $result . "
                    
                
                <tr>
                    
                    <td><a href='updateStock1.php?update=$stock->id' >Update</td>
                    <td><b>$stock->batch_no</b></td>
                    <td><b>$stock->quantity</b></td>
                    <td><b>$stock->entry_date </b></td>
                    <td><b>$stock->expire_date</b></td>
                    <td><b>$stock->production_date</b></td>
                    
                </tr>
               

";
        }

        $result = $result . "</table>";
        return $result;
    }

    function DeleteStock($id) {
        $host = "localhost";
        $user = "root";
        $passwd = "";
        $database = "friends_pharmacy";
        $mysqli = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());
        $query = "select medicine_name from stock where id=$id";
        //Execute query and close connection
        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        $row = mysqli_fetch_array($result);
        mysqli_close($mysqli);

        $medicineName = $row[0];


        $query = "DELETE FROM stock WHERE id = $id";
        $this->PerformQuery($query);
        $query = "ALTER TABLE stock DROP COLUMN id ";
        $this->PerformQuery($query);
        $query = "ALTER TABLE stock ADD COLUMN id INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";
        $this->PerformQuery($query);

        return $medicineName;
    }

    function PerformQuery($query) {
        $host = "localhost";
        $user = "root";
        $passwd = "";
        $database = "friends_pharmacy";
        $mysqli = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error());

        //Execute query and close connection
        mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        mysqli_close($mysqli);
    }

}
?>
