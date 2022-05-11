<?php 
class Creditcard {
    
    public $number;
    public $expireYear;
    public $balance;
    

    public function __construct($number, $expireYear, $balance) {
        $this->number = $number;
        $this->expireYear = $expireYear;
        $this->balance = $balance;
    }

    public function getExpireYear()
    {
        return $this->expireYear;
    }

    public function setExpireYear($expireYear)
    {
        $this->expireYear = $expireYear;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getBalance()
    {
        return $this->creditCard->balance . '€';
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
}

?>