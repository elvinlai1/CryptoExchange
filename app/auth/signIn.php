<?php 


//Grab username and pw 
//Search for username 
//Compare password 
//password_verify()
//Initiate session
//Direct user to user homepage 


require '../database/database.php';

$db = new Database(); 

$user = $db->run("SELECT * FROM users WHERE email=?", [$_POST['email']])->fetch();

    if ($user && password_verify($_POST['pass'], $user['password']))
        {
            echo "valid!";
            //header('location: ../');
        } else {
            echo "invalid";
            header('location: ../Homepage.html');
        }

