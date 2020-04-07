<?php

include "../app/partials/header.php";

?>


<title> Sign In </title>

<body class="text-center align-items-center py-5 my-5">

<div class="container">
<div class="row justify-content-center">

<div class="col-3">


          <form class="form-signin" action="./app/auth/signIn.php" method="post">
            
                  <div class="form-group">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            
          </form>

</div>
</div>
</div> 

</body>

<?php include "../app/partials/footer.php"; ?>