<?php 
//User Access
include '../auth/userAccess.php';
//Interface
include '../partials/header.php'; 
include '../partials/navbar.php';


?>


<body>
  <div class=bodyframe>
    <h1>
      Hello <?php echo $_SESSION['firstName'] ." ".  $_SESSION['lastName'];?>
    </h1>
    <br>
    <h2> Your  Account Value: </h2>
    

</body>

<?php 

include "../partials/footer.php"; 

?> 
