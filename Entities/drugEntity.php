<?php

class drugEntity {

    public $id;
    public $medicine_name;
    public $generic_name;
    public $type;
    public $category;
    public $supplier_id;
    public $discription;
    public $image;
    public $group_name;

    function __construct($id, $medicine_name, $generic_name,$type,$category, $supplier_id, $discription,$image,$group_name) {
        $this->id = $id;
        $this->medicine_name = $medicine_name;
        $this->generic_name=$generic_name;
        $this->type = $type;
        $this->category = $category;
        $this->supplier_id = $supplier_id;
        $this->discription= $discription;
        $this->image =  $image;
        $this->group_name = $group_name;
    }

}

?>
