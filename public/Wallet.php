<?php 
include '../app/partial/header.php'; 
include '../app/partial/navbar.php'; 
?>

<body>

<h1>Your Wallet</h1>

<div class="container">
    <table>
    <tr>
        <th>Crypto</th>
        <th>Amount</th>
    </tr>

<?php
require '../app/database/database.php';

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'CryptoTrader');


$wallet = $db_run("SELECT CoinName, CoinTotal FROM Wallet");
$query_run = mysqli_query($connection, $wallet) or die("Bad Query: $transaction");

// output data of each row
while($row = mysqli_fetch_assoc($query_run)) {
    ?>
    <tr>
        <td> <?php echo $row['CoinName'] ?></td>
        <td> <?php echo $row['CoinTotal'] ?></td>
    </tr>
    <?php
}
?>
</div>

</body>

<?php include '../app/partial/footer.php'; ?>
