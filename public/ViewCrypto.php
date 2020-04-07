<?php

require "../database/database.php";
include '../app/partials/header.php';
include '../app/partials/navbar.php';
?>


<h1>Cryptos</h1>

<div class="container">
    <table style="width: 100%">
    <tr>
        <th>Crypto</th>
        <th>Price</th>
        <th>Change</th>
        <th>MarketCap</th>
    </tr>



$crypto = $db_run("SELECT Name, Price, PercentChange, MarketCapital FROM Cryptos");
$result = mysqli_query($db, $crypto) or die ("Bad Query: $crypto");
if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td> <?php echo $row['Name'] ?></td>
            <td> <?php echo $row['Price'] ?></td>
            <td> <?php echo $row['PercentChange'] ?></td>
            <td> <?php echo $row['MarketCapital'] ?></td>
        </tr>
        <?php
    }
} 
else {
    echo "0 results";
}

<?php
include '../app/partials/footer.php';
?>
