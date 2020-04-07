<?php

/*[ViewWallet]*/

$sql = "SELECT CryptoID, Cointotal FROM Wallet";
$result = $conn->query($sql);
$result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Coin Type: ". $row["CryptoID"]. " - Coin Total: ". $row["Cointotal"] . "<br>";
    }
} else {
    echo "0 results";
}


/*[ViewCryptos]*/

$sql = "SELECT CrpytoID, Name, Price, Stock, Change FROM Cryptos";
$result = $conn->query($sql);
f ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["Name"]. " - Price: " . $row["Price"]." - Stock: " . $row["Stock"]. " - Change: " . $row["Change"] . "<br>";
    }
} else {
    echo "0 results";
}

?>
