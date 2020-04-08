<?php 
include '../app/partials/header.php'; 
include '../app/auth/signIn.php';
?>

<body>
  <div class=bodyframe>
    <main id="content">
      <div id="login">
        <h2 class="text-center text-white pt-5">Login form</h2>
        <div class="container">
          <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
              <div id="login-box" class="col-md-12">
                <form id="login-form" class="form" action="" method="post">
                  <div class="form-group">
                    <label for="username" class="text-info">Username:</label><br>
                    <input type="text" name="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password" class="text-info">Password:</label><br>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-info btn-md" value="submit"><input type = reset>
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
