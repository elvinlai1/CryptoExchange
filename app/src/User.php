<?php

require "../database/database.php";


class User {

    private $AccountID; 
    private $LoginID; 
    private $Password; 
    private $FirstName; 
    private $LastName; 
    private $Email; 


    protected function getUserProfile($loginID){

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



}