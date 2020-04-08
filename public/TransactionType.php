<?php
include '../app/partials/header.php';
include '../app/auth/signUp.php';
?>
  
<body>
  <div class=bodyframe>
    <main id="content">
      <div id="signup">
        <h1 class="text-center text-white pt-5">Sign Up form</h1>
        <div class="container">
          <div id="-row" class="row justify-content-center align-items-center">
            <div id="signup-column" class="col-md-6 py-2">
              <div id="signup-box" class="col-md-12">
                <form id = signup-form class = "form" action="#!">
                  <div class="form-group" style="display:inline-block"> 
                    <label for="Deposit" class="text-info">Deposit</label>
                    <span>
                      <input class="form-control" type="text" name="Deposit" placeholder="Enter Amount">
                    </span><br>
                    <button href="/" class="button">Submit</button>
                  </div>
                  <div class="form-group" style="display:inline-block">
                    <label for="Withdrawal" class="text-info">Withdrawal</label>
                    <span>
                      <input class="form-control" type="text" name="Withdrawal" placeholder="Enter Amount">
                    </span><br>        
                    <button href="/" class="button">Submit</button>
                  </div>
                  <div class="form-group" style="display:inline-block">
                    <label for="BuyCrypto" class="text-info">Buy Crypto</label>
                    <span>
                      <input class="form-control" type="text" name="BuyCrypto" placeholder="Enter Amount">
                    </span><br>        
                    <button href="/" class="button">Submit</button>
                  </div>
                  <div class="form-group" style="display:inline-block">
                    <label for="SellCrypto" class="text-info">Sell Crypto</label>
                    <span>
                      <input class="form-control" type="text" name="SellCrypto" placeholder="Enter Amount">
                    </span><br>        
                    <button name="submit" href="/" class="button">Submit</button>
                  </div>
              </form>
            </div>
           </div>
          </div>
        </div>
      </div>
    </main>
  </div>  
</body>

<?php
include '../app/partials/footer.php';
?>


    
