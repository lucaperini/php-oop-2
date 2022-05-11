<?php
require_once __DIR__ . '/Product.php';
class Food extends Product{
    
    
    public $brand;
    public $ingredients;
    

    public function __construct($name, $quantity, $category, $price, $brand, $ingredients) {
        parent::__construct($name, $quantity, $category, $price);
        $this->brand = $brand;
        $this->ingredients = $ingredients;
        }

        public function getBrand() {
            return $this->brand;
        }
        
        public function getIngredients() {
            return $this->ingredients;
        }
}
?>