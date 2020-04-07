
<?php 

require "../app/database/database.php";
//If signup button pressed
//grab database file
//check for empty fields
//look up if database contains username and email already
//password_hash()


    session_start();

    // connect to database
    $connection = mysqli_connect("localhost", "root","", "authentication");
    $db = mysqli_select_db($connection, 'CryptoTrader');

    if (isset($_POST[''register_btn])) {
        session_start();
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);
        $confirm = mysql_real_escape_string($_POST['confirm']);

        if ($password == $confirm) {
            // create username
            password = md5($password); //hash password before storing for security purpose
            $sql = "INSERT INTO Users(username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $username;
            header("location: ../public/Homepage.php"); //redirect to home page
        }
        else {
            $_SESSION['message'] = "Two passwords do not match";
        }
    }

?>
