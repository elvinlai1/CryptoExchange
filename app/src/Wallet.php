<?php

require "../database/database.php";

class Wallet {

    private $WalletID;
    private $CryptoID;
    private $CoinName;
    private $Cointotal;

    function __construct($accountID){

        $Wallet = $db->run("SELECT * FROM Wallet WHERE AccountID=?", [$accountID])->fetchAll();

        $this->WalletID = $Wallet['WalletID'];
        $this->CryptoID = $Wallet['CryptoID'];
        $this->CoinName = $Wallet['CoinName'];
        $this->Cointotal = $Wallet['Cointotal']; 
        $this->AccountID = $Wallet['AccountID'];

    }
    

    protected function getAmount(){

    }


    protected function getCoinName(){

        
    }
    
}

?>