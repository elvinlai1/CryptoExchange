<?php
session_start();
//check if login has been set or not null
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

  header ("Location: ../../public/LoginPage.php");

}
?>