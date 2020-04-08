<?php

require "../database/database.php";
include '../partials/header.php'; 
include '../partials/navbar.php';

$db = new Database();

?>

<h1>Your Wallet</h1>


<div class="container">
    <table style="width: 100%">
    <p> Balance does not include crypto values </p>
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