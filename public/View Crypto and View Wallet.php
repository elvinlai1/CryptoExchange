<?php

require "../database/database.php";

/*[ViewWallet]*/

$checkwallet = $db_run("SELECT CryptoID, Cointotal FROM Wallet");
$result = mysqli_query($db,$checkwallet) or die("Bad Query: $checkwallet");
if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> Coin Type: ". $row["CryptoID"]. "<br> Coin Total: ". $row["Cointotal"] . "<br>";
    }
} 
else {
    echo "0 results";
}


/*[ViewCryptos]*/

$crypto = $db_run("SELECT * FROM Cryptos");
$result = mysqli_query($db, $crypto) or die ("Bad Query: $crypto");
if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> id: ". $row["id"]. " <br> Name: ". $row["Name"]. " <br> Price: " . $row["Price"]." <br> Stock: " . $row["Stock"]. " <br> Change: " . $row["Change"] . "<br>";
    }
} 
else {
    echo "0 results";
}

?>
