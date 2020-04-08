<?php 


//Grab username and pw 
//Search for username 
//Compare password 
//password_verify()
//Initiate session
//Direct user to user homepage 


require '../app/database/database.php';

$db = new Database(); 

session_start();
    if(isset($_SESSION['signedin'])){
      header('location: Homepage.php');
    }

if(isset($_POST['submit'])) { 

    $loginid = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    $user = $db->run("SELECT * FROM USERS WHERE LoginID=?", [$loginid])->fetch();

        if ($user && password_verify($password, $user['Password']))
            {
                echo "valid!";
                header('location: ../app/user/Homepage.php');
                session_start();
                


            } else {
                echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";;
            }
}
