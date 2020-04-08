<?php
require '../app/database/database.php';

//If signup button pressed
//check for empty fields
//check for identical password
//look up if database contains username and email already
//password_hash()


$db = new Database(); 


if(isset($_POST['submit'])) { 
    //Get and filter inputs

    $loginID        = filter_input(INPUT_POST, 'loginID');
    $password       = filter_input(INPUT_POST, 'password');
    $passwordMatch  = filter_input(INPUT_POST, 'passwordMatch');
    $firstName      = filter_input(INPUT_POST, 'firstName');
    $lastName       = filter_input(INPUT_POST, 'lastName');
    $email          = filter_input(INPUT_POST, 'email');

    //If any input is null, reload form
    if(
      empty($loginID) 
      || empty($password) 
      || empty($passwordMatch) 
      || empty($firstName) 
      || empty($lastName)
      || empty($email)
    ){
      header('location: ?message=emptyField');
      echo "<script type='text/javascript'>alert('Please fill in all fields');</script>";
    }

    if ($db_found) {
    }
    
    else {
    
    $errorMessage = "Error logging on";
    
    }

    //Check if passwords match
    if($password !== $passwordMatch){
        header('location: ?message=passwordError');
        echo "<script type='text/javascript'>alert('Passwords does not match');</script>";
    } else {

      //create uniqid
      $accID = uniqid();

      //hash password
      $hashed_pword = password_hash($password, PASSWORD_DEFAULT);

      //create user
      $signUp = $db->run("INSERT INTO Users (AccountID, LoginID, Password, FirstName, LastName, Email) 
                          VALUES( ?, ?, ?, ?, ?, ?)",[$accID, $loginID, $hashed_pword, $firstName, $lastName, $email]);

      //header("location: http://".$_SERVER['HTTP_HOST']);
      header('location: /CryptoExchange/index.php');
    }
    
        
}