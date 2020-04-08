<?php 
 
 //Destroy all session variables and logout
if(isset($_GET['action']) && $_GET['action'] == "Logout"){
  session_start();
  session_unset();
  session_destroy();
  header('location: /CryptoExchange/');
}

?>


<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="Homepage.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="MarketPage.php">Market <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="WalletPage.php">Wallet <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="TransactionPage.php">Transaction <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="text-align: right" href="?action=Logout">Log Out <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
