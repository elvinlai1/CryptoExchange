<?php

require "../database/database.php";
include '../partials/header.php'; 
include '../partials/navbar.php';

$db = new Database();

?>

<body>

<h1>Transaction History</h1>

<div class="container">
    <table>
    <tr>
        <th>Transaction</th>
        <th>Account</th>
        <th>CryptoID</th>
        <th>PurchasePrice</th>
        <th>PurchaseAmount</th>
    </tr>

<?php
require '../app/database/database.php';

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'dbName');


$transaction = $db_run("SELECT TransactionID, AccountID, CryptoName, PurchasePrice, PurchaseAmount FROM Transaction");
$query_run = mysqli_query($connection, $transaction) or die("Bad Query: $transaction");

// output data of each row
while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td> <?php echo $row['TransactionID'] ?></td>
        <td> <?php echo $row['AccountID'] ?></td>
        <td> <?php echo $row['CryptoName'] ?></td>
        <td> <?php echo $row['PurchasePrice'] ?></td>
        <td> <?php echo $row['PurchaseAmount'] ?></td>
    </tr>
    <?php
}
?>
</div>

</body>

<?php
 include "../partials/footer.php";  
 ?>
