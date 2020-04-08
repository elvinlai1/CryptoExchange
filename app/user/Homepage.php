<?php 
//User Access
include '../auth/userAccess.php';
//Interface
include '../partials/header.php'; 
include '../partials/navbar.php';

include '../src/Transaction.php';

?>


<body>
  <div class=bodyframe>
    <h1>
      Hello <?php echo $_SESSION['firstName'] ." ".  $_SESSION['lastName'];?>
    </h1>
    <br>
    <h2> Your  Account Value: </h2>

    <div class="container">
    <table style="width: 100%">
  
    <div id="-row" class="row justify-content-center align-items-center">
            <div id="signup-column" class="col-md-6 py-2">
              <div id="signup-box" class="col-md-12">
                <form id = signup-form class = "form" action="#!">
                  <div class="form-group" style="display:inline-block"> 
                    <label for="Deposit" class="text-info">Deposit</label>
                    <span>
                      <input class="form-control" type="text" name="Deposit" placeholder="Enter Amount">
                    </span><br>
                    <button href="public/SignUpPage.php" class="button">Submit</button>
                  </div>
                  <div class="form-group" style="display:inline-block">
                    <label for="Withdrawal" class="text-info">Withdrawal</label>
                    <span>
                      <input class="form-control" type="text" name="Withdrawal" placeholder="Enter Amount">
                    </span><br>        
                    <button href="public/SignUpPage.php" class="button">Submit</button>
                  </div>
                  <div class="form-group" style="display:inline-block">
                    <label for="BuyCrypto" class="text-info">Buy Crypto</label>
                    <span>
                      <input class="form-control" type="text" name="BuyCrypto" placeholder="Enter Amount">
                    </span><br>        
                    <button href="public/SignUpPage.php" class="button">Submit</button>
                  </div>
                  <div class="form-group" style="display:inline-block">
                    <label for="SellCrypto" class="text-info">Sell Crypto</label>
                    <span>
                      <input class="form-control" type="text" name="SellCrypto" placeholder="Enter Amount">
                    </span><br>        
                    <button name="submit" href="public/SignUpPage.php" class="button">Submit</button>
                  </div>
              </form>
            </div>
           </div>
          </div>
    

  </div>

</body>




<?php 

include "../partials/footer.php"; 

?> 
