<?php 
class Pet {
    
    protected $type;
    protected $birthYear;
    protected $gender;
    protected $isAvaiable;
    protected $price;

    function __construct($type, $birthYear, $gender, $price, $isAvailable) {
        $this->type = $type;
        $this->birthYear = $birthYear;
        $this->gender = $gender;
        $this->price = $price;
        $this->isAvailable = $isAvailable;
    }
}
?>