<?php
//User Access
include '../auth/userAccess.php';
//Interface
include '../partials/header.php'; 
include '../partials/navbar.php';
//Database Connection
require "../database/database.php";
$db = new Database();

//Grab the CryptoMarket
$CryptoMarket = $db->run("SELECT * FROM Cryptos")->fetchAll();

?>


<h1>Markets</h1>

<div class="container">
    <table style="width: 100%">
    <tr>
        <th>Crypto</th>
        <th>Price</th>
        <th>Change</th>
        <th>MarketCap</th>
        <th>Stock</th>
    </tr>

<?php

//Display Values in a table
foreach($CryptoMarket as $row){

    echo "<tr>";
    echo "<td>" . $row['CryptoID'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Price'] . "</td>";
    echo "<td>" . $row['Changes'] . "</td>";
    echo "<td>" . $row['Stock'] . "</td>";
    echo"</tr>";
}

?>

 </table>
</div>

<?php
include "../partials/footer.php"; 
?>
