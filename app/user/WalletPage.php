<?php
//User Access
include '../auth/userAccess.php';
//Interface
include '../partials/header.php'; 
include '../partials/navbar.php';

require "../database/database.php";
$db = new Database();

?>

<h1>Your Wallet</h1>


<div class="container">
    <table style="width: 100%">
    <tr>
        <th>Crypto</th>
        <th>Amount</th>
        <th>Account Balance</th>
    </tr>
   
<?php

$Wallet = $db->run("SELECT * FROM wallet")->fetchAll();

foreach($Wallet as $row){

    echo "<tr>";
    echo "<td>" . $row['CoinName'] . "</td>";
    echo "<td>" . $row['Cointotal'] . "</td>";
    echo "<td>" . $row['Balance'] . "</td>";
    echo"</tr>";
}

?>


<?php 
include "../partials/footer.php"; 
?> 