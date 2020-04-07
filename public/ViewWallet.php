<?php 
include '../app/partial/header.php'; 
include '../app/partial/navbar.php'; 
?>

<body>

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
require '../app/database/database.php';

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'CryptoTrader');


$wallet = $db_run("SELECT CoinName, CoinTotal, Balance FROM Wallet");
$query_run = mysqli_query($connection, $wallet) or die("Bad Query: $transaction");

// output data of each row
while($row = mysqli_fetch_assoc($query_run)) {
    ?>
    <tr>
        <td> <?php echo $row['CoinName'] ?></td>
        <td> <?php echo $row['CoinTotal'] ?></td>
        <td> <?php echo $row['Balance'] ?></td>
    </tr>
    <?php
}
?>
</div>

</body>

<?php include '../app/partial/footer.php'; ?>
