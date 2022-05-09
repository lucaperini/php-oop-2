<?php 
class Supplies extends Product{
    
    protected $type;
    protected $inStock;
    

    function __construct($type, $price) {
        $this->type = $type;
        $this->category = $price;
      
        
    }
}
?>