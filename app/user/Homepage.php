<?php 
//User Access
include '../auth/userAccess.php';
//Interface
include '../partials/header.php'; 
include '../partials/navbar.php';

require "../database/database.php";
$db = new Database();

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
  
    <div class="main-block">
      <h1>Choose Transaction Type:</h1>
        <form>
        <div class="metod">
          <div style="display:inline-block"> 
            <label for="radioOne" class="radio">Deposit</label>
            <span>
              <input class="fname" type="text" name="name" placeholder="Enter Amount">
            </span><br>
            <button href="/" class="button">Submit</button>
          </div>
          <div style="display:inline-block">
            <label for="radioTwo" class="radio">Withdrawal</label>
            <span>
              <input class="fname" type="text" name="name" placeholder="Enter Amount">
            </span><br>        
            <button href="/" class="button">Submit</button>
          </div>
                    <div style="display:inline-block">
            <label for="radioTwo" class="radio">Buy Crypto</label>
            <span>
              <input class="fname" type="text" name="name" placeholder="Enter Amount">
            </span><br>        
            <button href="/" class="button">Submit</button>
          </div>
                    <div style="display:inline-block">
            <label for="radioTwo" class="radio">Sell Crypto</label>
            <span>
              <input class="fname" type="text" name="name" placeholder="Enter Amount">
            </span><br>        
            <button href="/" class="button">Submit</button>
          </div>
        </div>
      </form>
    </div>
    

  </div>

</body>




<?php 

include "../partials/footer.php"; 

?> 
