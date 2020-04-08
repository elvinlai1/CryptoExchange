<?php
include '../app/partials/header.php';
include '../app/auth/signUp.php';
?>
  
<body>
  <div class=bodyframe>
    <main id="content">
      <div id="signup">
        <h2 class="text-center text-white pt-5">Sign Up form</h2>
        <div class="container">
          <div id="-row" class="row justify-content-center align-items-center">
            <div id="signup-column" class="col-md-6 py-2">
              <div id="signup-box" class="col-md-12">
                <form id="signup-form" class="form" action="#!" method="post">
                  <div class="form-group">
                    <label for="FirstName" class="text-info">First Name: </label><input type="text" name="firstName" class="form-control" required>

                    <label for="LastName" class="text-info">Last Name: </label><input type="text" name="lastName" class="form-control" required>

                  </div>
                  <div class="form-group">
                    <label for="email" class="text-info">Email:</label><input type="email"  name="email" autocomplete="off" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="email" class="text-info">UserName:</label><input type="username" name="loginID" autocomplete="off" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="password" class="text-info">Password:</label><input type="password" name="password" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="confirm" class="text-info">Confirm Password:</label><input type="password" name="passwordMatch" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br><br>
                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
                    <input type="reset">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
</body>

<?php
include '../app/partials/footer.php';
?>
