<!DOCTYPE html>
<html lang="en">

<head>
  <title>CryptoExchange</title>
  <meta charset="utf-8">
</head>
<style>
  header,
nav,
main,
footer,
aside {
  display: block;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-color: #ffffff;
}

#container {
  background-color: #eeeeee;
  color: #006600;
  min-width: 960px;
  font-family: Verdana, Arial, sans-serif;
}

header {
  background-color: #636631;
  background-image: ;
  background-position: bottom;
  background-repeat: repeat-x;
  height: 120px;
  color: White;
  text-align: right;
  padding: 0 20px;
  border-bottom: 2px solid #000000;
}

nav {
  float: left;
  width: 150px;
}

aside {
  float: right;
  width: 200px;
}

main {
  margin: 0 210px 0 160px;
  padding: 1px 10px 20px 10px;
  background-color: #ffffff;
  color: #006600;
}
footer {
  font-size: 0.7em;
  text-align: center;
  color: #006600;
  background-color: #ffffff;
  padding-top: 10;
}

h1 {
  margin-top: 0;
  font-size: 3em;
  text-align: left;
  text-shadow: 2px 2px 2px #000000;
}

header a {
  font-size: 0.8em;
}
header a:link,
header a:visited {
  color: #ffffff;
}
header a:focus,
header a:hover {
  color: #eeeeee;
}

</style>

<body>
  <div id="container">
    <header>
      <h1>CryptoExchange</h1>
    </header>
    <nav>
      <ul>
        <li><a>1</a></li>
        <li><a>2</a></li>
        <li><a>3</a></li>
        <li><a>4</a></li>
        <li><a>5</a></li>
      </ul>
    </nav>
    <aside>
      <h3>The right first title</h3>
      <p class="news">jhg</a>.</p>
      <h3>the right second title</h3>
      <p class="news">jhp</p>
    </aside>
    <main id="content">
      <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
          <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
              <div id="login-box" class="col-md-12">
                <form id="login-form" class="form" action="" method="post">
                  <h3 class="text-center text-info">Login</h3>
                  <div class="form-group">
                    <label for="username" class="text-info">Username:</label><br>
                    <input type="text" name="username" id="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password" class="text-info">Password:</label><br>
                    <input type="text" name="password" id="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                    <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                  </div>
                  <div id="register-link" class="text-right">
                    <a href="#" class="text-info">Register here</a>
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
</body>

</html>