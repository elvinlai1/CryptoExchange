<?php 

//Grab username and pw 
//Search for username 
//Compare password 
//password_verify()
//Initiate session
//Direct user to user homepage 


require '../app/database/database.php';

$db = new Database(); 

if(isset($_SESSION['login'])){
    header('location: Homepage.php');
  }

if(isset($_POST['submit'])) { 

    //Take input, filter it and place inside variables
    $loginid = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    //Fetches information from login
    $user = $db->run("SELECT * FROM USERS WHERE LoginID=?", [$loginid])->fetch();

        if ($user && password_verify($password, $user['Password']))
            {

                session_start();
                //Set login to 1 to verify user has logged in
                $_SESSION['login'] = true;
                $_SESSION['loginID'] = $user['LoginID'];
                $_SESSION['firstName'] = $user['FirstName'];
                $_SESSION['lastName'] = $user['LastName'];
                $_SESSION['AccountID'] = $user['AccountID'];

                header('location: ../app/user/Homepage.php');

            } else {
                echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
            }
}
