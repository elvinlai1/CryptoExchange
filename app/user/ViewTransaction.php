<?php

require "../database/database.php";
include '../partials/header.php'; 
include '../partials/navbar.php';

$db = new Database();

?>

<body>

<h1>Transaction History</h1>

<div class="container">
    <table style="width: 100%">
    <tr>
        <th>Transaction</th>
        <th>Account</th>
        <th>CryptoID</th>
        <th>PurchasePrice</th>
        <th>PurchaseAmount</th>
    </tr>

<?php

$Transactions = $db->run("SELECT * FROM Transaction")->fetchAll();

foreach($Transactions as $row){

    echo "<tr>";
    echo "<td>" . $row['TransactionID'] . "</td>";
    echo "<td>" . $row['AccountID'] . "</td>";
    echo "<td>" . $row['CryptoID'] . "</td>";
    echo "<td>" . $row['CryptoName'] . "</td>";
    echo "<td>" . $row['PurchaePrice'] . "</td>";
    echo "<td>" . $row['PurchaseAmount'] . "</td>";
    echo"</tr>";
}

?>


</div>

</body>

<?php
 include "../partials/footer.php";  
 ?>
