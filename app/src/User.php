<?php

require "../database/database.php";

class User {

    private $AccountID; 
    private $LoginID; 
    private $Password; 
    private $FirstName; 
    private $LastName; 
    private $Email; 

    protected function __construct($loginID){

        $profile = $db->run("SELECT * FROM USERS WHERE LoginID=?", [$loginID])->fetch();

        $this->AccountID = $profile['AccountID'];
        $this->LoginID = $profile['LoginID'];
        $this->FirstName = $profile['FirstName'];
        $this->LastName = $profile['LastName'];
        $this->Email = $profile['Email'];

    }

    public function getAccountID(){

        return $this->AccountID;

    }

    public function getFundAmount(){

        $db = new database();
        $getFund = $db->run("SELECT * FROM Funds WHERE AccountID=?", [$this->AccountID])->fetch();
        $fund = $getFund['Balance'];
        return $fund; 

    }

    public function updateFundAmount(){

        $db = new database();
        $getFund = $db->run("SELECT * FROM Funds WHERE AccountID=?", [$this->AccountID])->fetch();
        $fund = $getFund['Balance'];
      

    }

    public function getTransactionsHistory(){

        $db = new database();
        $transaction = $db->run("SELECT * FROM Funds WHERE AccountID=?", [$this->AccountID])->fetch();
        return $transactions

    }

}