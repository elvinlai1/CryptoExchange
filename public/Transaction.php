<?php include '../app/partial/header.php'; ?>

<body>

<h1>Transaction History</h1>

<div class="container">
    <table>
    <tr>
        <th>Transaction</th>
        <th>Account</th>
        <th>Crypto</th>
        <th>PurchasePrice</th>
        <th>PurchaseAmount</th>
    </tr>

<?php
require '../app/database/database.php';

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'dbName');


$transaction = $db_run("SELECT * FROM Transaction");
$query_run = mysqli_query($connection, $transaction) or die("Bad Query: $transaction");

// output data of each row
while($row = mysqli_fetch_assoc($result)) {
    <?php
    <tr>
        <td> <?php echo $row['TransactionID'] ?></td>
        <td> <?php echo $row['AccountID'] ?></td>
        <td> <?php echo $row['CryptoID'] ?></td>
        <td> <?php echo $row['PurchasePrice'] ?></td>
        <td> <?php echo $row['PurchaseAmount'] ?></td>
    </tr>
    ?>
}
?>
</div>

</body>

<?php include '../app/partial/footer.php'; ?>
