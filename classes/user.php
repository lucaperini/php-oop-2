<?php 
class User {
    
    public $firstName;
    public $lastName;
    public $isRegistered;
    public $discount;
    public $creditCard;
    

    function __construct($firstName, $lastName, $isRegistered, $discount, $creditCard) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->setCreditCard($creditCard);
        $this->isRegistered = $isRegistered;
        $this->discount = $discount;
        
    }

    public function getFirstName() {
        return $this->firstName;
    }   
    public function getLastName() {
        return $this->lastName;
    }

    public function getIsRegistered(){
        
        if ($this->isRegistered){
            $this->discount = 20;
            return 'Si';
            
        }else {
            $this->discount = 0;
            return 'No';

        }
    }

    public function getDiscount() {

    return 'Hai diritto al '. $this->discount . '% di sconto';
    } 

    public function getCreditCard() {
        return $this->creditCard;
    }

    public function setCreditCard($creditCard){
        if (!$creditCard instanceof CreditCard) return false;
        $this->creditCard = $creditCard;
    }

    public function getBalance() {
        return $this->creditCard->balance . '€';
    }

    public function buyProduct($product) {
        if ($this->creditCard->expireYear < date('Y')){
            return 'Carta di credito scaduta.';
        }
        if ($this->getBalance() < $product->price){
            return 'Carta priva di disponibilità';
        }
        if ($this->discount > 0){
            $price = $product->price * $product->quantity - $product->price/100 * $this->discount;
            $this->creditCard->balance -= $product->price;
            return "Transazione eseguita. Hai diritto ad uno sconto del $this->discount%. Hai speso ".round($price, 2) . " €";
        } else {
            $this->creditCard->balance -= $product->price;
            return "Transazione eseguita. Non hai diritto allo sconto. Hai speso ".round($product->price*$product->quantity, 2)." €";
        }
    }
}
?>

