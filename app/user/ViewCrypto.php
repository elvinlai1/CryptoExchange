<?php

require "../database/database.php";
include '../partials/header.php'; 
include '../partials/navbar.php';

$db = new Database();

?>


<h1>Market</h1>

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

$CryptoMarket = $db->run("SELECT * FROM Cryptos")->fetchAll();

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



<?php
include "../partials/footer.php"; 
?>
