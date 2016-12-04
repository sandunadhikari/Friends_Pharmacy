<?php

class reminderEntity {

    public $reminder_id;
    public $nic;
    public $contactno;
    public $medname;
    public $instruction;
    public $quantity;
    public $time;
    public $startdate;
    public $enddate;
    public $Monday;
    public $Tuesday;
    public $Wednesday;
    public $Thursday;
    public $Friday;
    public $Satday;
    public $Sunday;

    function __construct($reminder_id, $nic, $contactno,$medname, $instruction, $quantity, $time, $startdate, $enddate, $Monday, $Tuesday, $Wednesday, $Thursday, $Friday, $Satday, $Sunday) {
        $this->reminder_id = $reminder_id;
        $this->nic = $nic;
        $this->contactno = $contactno;
        $this->medname = $medname;
        $this->instruction = $instruction;
        $this->quantity = $quantity;
        $this->time = $time;
        $this->startdate = $startdate;
        $this->enddate = $enddate;
        $this->Monday = $Monday;
        $this->Tuesday = $Tuesday;
        $this->Wednesday = $Wednesday;
        $this->tThursday = $Thursday;
        $this->Friday = $Friday;
        $this->Satday = $Satday;
        $this->Sunday = $Sunday;
    }

}

?>
