<?php 


//Grab username and pw 
//Search for username 
//Compare password 
//password_verify()
//Initiate session
//Direct user to user homepage 

require "../app/database/database.php";


$db = new Database(); 

$pdo = $db->connect();

$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$_POST['email']]);
$user = $stmt->fetch();

if ($user && password_verify($_POST['pass'], $user['pass']))
{
    echo "valid!";
} else {
    echo "invalid";
}