<?php

require "../database/database.php";
include '../partials/header.php'; 
include '../partials/navbar.php';

$db = new Database();

?>


<h1>Your Wallet</h1>

<div class="container">
    <table style="width: 200px">
    <tr>
        <th>Crypto</th>
        <th>Amount</th>
        <th>AccountBalance</th>
    </tr>
    <p> Balance does not include crypto values </p>

<?php

$Wallet = $db->run("SELECT * FROM Cryptos")->fetchAll();

foreach($Wallet as $row){

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