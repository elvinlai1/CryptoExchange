
<html lang="en">

<style>
</style>
  
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
      <div id="signup">
        <h2 class="text-center text-white pt-5">Sign Up form</h2>
        <div class="container">
          <div id="-row" class="row justify-content-center align-items-center">
            <div id="signup-column" class="col-md-6">
              <div id="signup-box" class="col-md-12">
                <form id="signup-form" class="form" action="" method="post">
                  <div class="form-group">
                    <label for="FirstName" class="text-info">First Name: </label><input type="text" name="FName" id="FName" class="form-control" required>

                    <label for="LastName" class="text-info">Last Name: </label><input type="text" name="LName" id="FName" class="form-control" required>

                    <label for="DateOfBirth" class="text-info">Date of Birth: </label><input type="date" name="DOB" id="DOB" value="yyyy/mm/dd" max:"1999-04-07" class="form-control">
                  </div><br>
                  <div class="form-group">
                    <label for="password" class="text-info">Email:</label><input type="email" id="email" name="email" autocomplete="off" class="form-control" required>
                  </div><br>
                  <div class="form-group">
                    <label for="username" class="text-info">Username:</label><input type="text" name="username" id="username" class="form-control" required>
                  </div><br>
                  <div class="form-group">
                    <label for="password" class="text-info">Password:</label><input type="password" name="password" id="password" class="form-control" required>
                  </div><br>
                  <div class="form-group">
                    <label for="confirm" class="text-info">Confirm Password:</label><input type="password" name="confirm" id="confirm" class="form-control" required>
                  </div><br>
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
      <footer> Copyright &copy; 2020 CryptoExchange<br>
      </footer>
    </main>
  </div>
  <div class=cookies>
  </div>
</body>

</html>