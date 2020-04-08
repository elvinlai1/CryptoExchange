<?php
if($_SESSION['accType'] !== "user"){
    header('location: signinpage.php?message=noAccess'); 
}