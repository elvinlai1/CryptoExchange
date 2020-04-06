<?php

include "./app/partials/header.php";


?>

<div class ="container">
<body class="text-center">
    <form class="form-signin" action="./app/auth/signIn.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
  </body>
</div>



<?php
include "./app/partials/footer.php"; ?>