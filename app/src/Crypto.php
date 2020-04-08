<?php

require "../database/database.php";

class Crypto {

    public $CryptoID; 
    public $Name; 
    public $Price; 
    public $Stock;
    public $MarketCapital;

    function __construct($CryptoID){

        $db = new Database();
        $Crypto = $db->run("SELECT * FROM Cryptos WHERE CryptoID=?", [$CryptoID])->fetch();
    
        $this->CryptoID = $Crypto['CryptoID'];
        $this->Name     = $Crypto['Name'];
        $this->Price    = $Crypto['Price'];
        $this->Stock    = $Crypto['Stock'];
        $this->MarketCapital = $Crypto['MarketCapital'];
    
    }

    
    public function updateStock($Amt){

        //Grab purchase amount 

        $db = new Database();
        $Crypto = $db->run("SELECT * FROM Cryptos WHERE CryptoID=?", [$CryptoID])->fetch();


    }


    public function getPrice(){
    
        return $this->Price;

    }


    public function getCoinName(){

        return $this->Name; 
    }


    public function getStock(){

        return $this->Stock; 

    }

    
}
?>

