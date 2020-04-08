<?php 

include "../src/Crypto.php";
include "../src/User.php";
include "../src/Wallet.php";

require "../database/database.php";

class Transaction {



    public function getCryptoPrice($CryptoID){

        //Query CryptoID
        

    }

    public function getUserWallet($accountID){

        //Send accountID to Users to find walletID
        //Get WalletID 
        //Get 

    }


    public function buyCrypto($accountID,$purchaseAmount){

        //Get purchase amount value

    }


    public function sellCrypto($accountID, $sellAmount){

        //Get sell amount value

    }


   

    public function DepositAccount($accountID, $fundAmount){

        //Get amount to fund 
        //Get AccountID 

    }

    public function WithdrawalAccount(){

        //uhhhh technically not implentable?

    }



    public function postTransaction($accountID,){

        //Get AccountID
        //TransactionID = uniqueID
        //Get CryptoID
        //PurchaseAmount
        //PricePrice


    }




}