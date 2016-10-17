<?php

class StockEntity {
    
    public $id;
    public $medicine_name;
    public $batch_no;
    public $quantity;
    public $entry_date;
    public $production_date;
    public $expire_date;
   
    
    function __construct($id,$medicine_name,$batch_no,$quantity,$entry_date,$production_date,$expire_date) {
        $this->id = $id;
        $this->medicine_name = $medicine_name;
        $this->batch_no = $batch_no;
        $this->quantity = $quantity;
        $this->entry_date = $entry_date;
        $this->production_date = $production_date;
        $this->expire_date = $expire_date;
       
    }

}

?>
