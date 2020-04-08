<?php

require "../database/database.php";


class Crypto {

    public $CryptoID; 
    public $Name; 
    public $Price; 
    public $Stock;
    public $MarketCapital;

    

    function __construct ($CryptoID){

        
        $Crypto = $db->run("SELECT * FROM Cryptos WHERE CryptoID=?", [$CryptoID])->fetch();
    
        $this->CryptoID = $Crypto['CryptoID'];
        $this->Name     = $Crypto['Name'];
        $this->Price    = $Crypto['Price'];
        $this->Stock    = $Crypto['Stock'];
        $this->MarketCapital = $Crypto['MarketCapital'];
    
    }
    
        
    public function getCoinPrice(){
    

    }


    public function getCoinName(){

       
    }

    public function updateCoinAmount(){



    }




    
}
?>

