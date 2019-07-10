<?php
    session_start();
    require ('config.php'); 
    unset($_SESSION["user_id"]);
    if (isset($_COOKIE['user_id'])) {        
        unset($_COOKIE['user_id']);
        setcookie('user_id', '', time() - 3600, $baseUrl);
    }
    session_destroy();
    header("Location:login.php");
?>