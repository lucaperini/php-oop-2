<?php 
class Product {
    
    protected $quantity;
    protected $category;
    protected $inStock;
    protected $price;
    

    function __construct($quantity, $category, $inStock, $price) {
        $this->quantity = $quantity;
        $this->category = $category;
        $this->inStock = $inStock;
        $this->price = $price;

        
    }
}
?>