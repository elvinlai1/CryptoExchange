<?php



class Wallet {
    
    public $coinname;
    public $amount;


    public function __construct($coinname, $amount) {
        $this->coinname = $coinname; 
        $this->amount = $amount;
    }

    public function getAmount(){

        //SQL query
        require '../app/database/database.php';
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, 'dbName');
        
        $amount = $db_run("SELECT CoinTotal FROM Wallet");
        $query_run = mysqli_query($connection, $amount) or die("Bad Query: $amount");
        
        return $this->$row['CoinTotal'];

    }


    public function getCoinName(){

        //SQL query
        require '../app/database/database.php';
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, 'dbName');
        
        $coinname = $db_run("SELECT CoinName FROM Wallet");
        $query_run = mysqli_query($connection, $coinname) or die("Bad Query: $transaction");
        
        return $this->$row['CoinName'];
    }
    
}

?>