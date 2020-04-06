<?php 


//Grab username and pw 
//Search for username 
//Compare password 
//password_verify()
//Initiate session
//Direct user to user homepage 


if (isset($_POST['submit'])) {

require "app/database/database.php";



$db = new Database(); 

$stmt = $db->connect()->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$_POST['email']]);
$user = $stmt->fetch();

    if ($user && password_verify($_POST['pass'], $user['pass']))
        {
            echo "<p>valid!</p>";
        } else {
            echo "<p>invalid</p>";
        }

}

