
<?php include '../app/partials/Login.css'; ?>

<body>
  <div id="app">
    <ul id="nav">
      <li><a class="active" href="CryptoExchange/public/Homepage.html">Home</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#about">About</a></li>
      <li id="LoginRegister"><a href="CryptoExchange/public/Login.html">Log in</a></li>
      <li id="LoginRegister"><a href="CryptoExchange/public/SignUp.html">Sign up</a></li>
    </ul>
  </div>
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
                    <input type="text" name="username" id="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password" class="text-info">Password:</label><br>
                    <input type="password" name="password" id="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br><br>
                    <input type="submit" name="submit" class="btn btn-info btn-md" value="submit"><input type = reset>
                  </div>
                  <div id="register-link" class="text-right"><br>
                    <a href=sdf >Forget Password?</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer> Copyright &copy; 2020 CryptoExchange<br>
      </footer>
    </main>
  </div>
  <div class=cookies>
  </div>
 

  include "../app/auth/signIn.php";

</body>
?>
