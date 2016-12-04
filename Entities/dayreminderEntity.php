<?php

class dayreminderEntity {

    public $reminder_id;
    public $nic;
    public $contactno;
    public $medname;
    public $instruction;
    public $quantity;
    public $time1;
    public $time2;
    public $time3;
    public $startdate;
    public $enddate;
   

    function __construct($reminder_id, $nic, $contactno,$medname, $instruction, $quantity, $time1,$time2,$time3, $startdate, $enddate) {
        $this->reminder_id = $reminder_id;
        $this->nic = $nic;
        $this->contactno = $contactno;
        $this->medname = $medname;
        $this->instruction = $instruction;
        $this->quantity = $quantity;
        $this->time = $time1;
        $this->time = $time2;
        $this->time = $time3;
        $this->startdate = $startdate;
        $this->enddate = $enddate;
    
    }

}

?>
