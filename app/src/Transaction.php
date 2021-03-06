<?php 

require "../database/database.php";

include "../src/Crypto.php";
include "../src/User.php";
include "../src/Wallet.php";



class Transaction {

    private $AccountID;
    private $CryptoID;
    private $CryptoName;
    private $PurchasePrice;
    private $PurchaseAmount;


    public function buyCrypto($actID,$Crypto,$amt){

        
        
        $this->AccountID = $actID; 
        $this->CryptoID = $Crypto; 
        $this->PurchaseAmount = $amt; 

        $User = new User($actID);
        $Crypto = new Crypto($CrytoID);
        $Wallet = new Wallet();

        //Get Cryptoprice
        $CryptoPrice = $Crypto->getPrice();

        //Get UserFund Amount
        if(!$UserFunds->checkFund()){


        }

        //Get Wallet Crypto total
        /*
        $Cryptototal = $Wallet->getWallet($actID, $CryptoID);
        
        //Check stock amount

        //Check UserFunds > (purchaseamount*cryptoprice) 
        //Update Fund
        //Update Wallet
        //Update Stock
        //Post Transaction

        //else echo error
        /*
        getCoinTotal()



        updateFundAmount()
        updateWalletTotal($amt)
        updateStock()

        $this->postTransaction();
        */
        
    }


    public function sellCrypto($actID, $Crypto, $amt){

        //Get sell amount value
        //getPrice()

        //updateStock($sellAmount);

        $this->postTransaction();

    }
   

    public function depositAccount($actID, $fundAmount){

        //Get amount to fund 
        //Get AccountID 

        $user = new User($actID);

        $user->updateFundAmount($fundAmount);

    
    }

    public function withdrawalAccount(){

        //uhhhh technically not implentable?

    }


    public function postTransaction(){

        //Get AccountID
        //TransactionID = uniqueID
        //Get CryptoID
        //PurchaseAmount
        //PricePrice
        //$db = new Database();

        $TransactionID = uniquid();

        $db->run("INSERT INTO `transaction`(`TransactionID`, `AccountID`, `CryptoID`, `CryptoName`, `PurchasePrice`, `PurchaseAmount`) 
                  VALUES (?,?,?,?,?,?)", [$TransactionID, $this->$AccountID, $this->CryptoID, $this->CryptoName, $this->PurchasePrice, $this->PurchaseAmount]);

    
    }

    public function retrieveTransactionHistory($accountID){

        $user = new User($accountID);
        $transactions = $user->getTransationHistory();

    }




}