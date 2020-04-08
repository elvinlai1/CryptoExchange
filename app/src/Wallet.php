<?php



class Wallet {

    private $WalletID;
    private $CryptoID;
    private $CoinName;
    private $Cointotal;


    protected function getWallet($accountID, $CryptoID){

        $db = new Database();

        $Wallet = $db->run("SELECT * FROM Wallet WHERE AccountID=? AND CryptoID=?",[$actID,$crypto])->fetch();

        $this->WalletID = $Wallet['WalletID'];
        $this->CryptoID = $Wallet['CryptoID'];
        $this->CoinName = $Wallet['CoinName'];
        $this->Cointotal = $Wallet['Cointotal']; 
        $this->AccountID = $Wallet['AccountID'];

        return $Wallet; 

    }


    public function updateWalletTotal($amt,$crypto){

        //Grab purchase amount 

        $db = new Database();
        $update = $db->run("UPDATE WALLET WHERE CryptoID=?", [$CryptoID]);


    }



    public function getCoinTotal(){



    }


    public function getCoinName(){

        
    }


    
}

?>