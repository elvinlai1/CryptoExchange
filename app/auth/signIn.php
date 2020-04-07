<?php 


//Grab username and pw 
//Search for username 
//Compare password 
//password_verify()
//Initiate session
//Direct user to user homepage 


require '../app/database/database.php';

$db = new Database(); 

if(isset($_POST['submit'])) { 

    $user = $db->run("SELECT * FROM USERS WHERE LoginID=?", [$_POST['username']])->fetch();

        if ($user && password_verify($_POST['password'], $user['Password']))
            {
                echo "valid!";
                header('location: ../app/user/Homepage.php');
            } else {
                echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";;
            }
}
