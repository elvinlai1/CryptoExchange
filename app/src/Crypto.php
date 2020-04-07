<?php



class Crypto {
    
    public $coinname;
    public $coinprice;


    public function __construct($coinname, $coinprice) {
        $this->coinname = $coinname; 
        $this->coinprice = $coinprice;
    }

    public function getCoinPrice(){

        //SQL query
        require '../app/database/database.php';
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, 'dbName');
        
        $coinprice = $db_run("SELECT Price FROM Cryptos");
        $query_run = mysqli_query($connection, $coinprice) or die("Bad Query: $transaction");
        
        return $this->$row['Price'];

    }


    public function getCoinName(){

        //SQL query
        require '../app/database/database.php';
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, 'dbName');
        
        $coinname = $db_run("SELECT Name FROM Cryptos");
        $query_run = mysqli_query($connection, $coinname) or die("Bad Query: $transaction");
        
        return $this->$row['Name'];
    }
    
}
?>

