<?php 
class Product {
    
    public $name;
    public $quantity;
    public $category;
    public $price;
    

    function __construct($name, $quantity, $category, $price) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->category = $category;
        $this->price = $price; 

        
    }
    public function getName() {
        return $this->name;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    
    public function getCategory() {
        return $this->category;
    }
    public function getPrice() {
        if ($this->quantity > 0) {
        return $this->price = $this->price * $this->quantity;
    } else {
        return $this->price = $this->price; 
        }
    }

    public function getType() {
        return $this->type;
    }
    
}
?>