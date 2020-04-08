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
    <?php

  
    ?>

  </div>

</body>




<?php 

include "../partials/footer.php"; 

?> 
