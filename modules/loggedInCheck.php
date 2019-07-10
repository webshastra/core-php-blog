<?php
    session_start();   
    require ('./models/random.php');
    require ('./config.php');    
    if ( isset( $_SESSION['user_id'] )) {
        $userId = $_SESSION['user_id'];
        $userData = fetchuserById($userId, $db);       
    } elseif (isset($_COOKIE['user_id'])){
        $userId =  $_COOKIE['user_id'];
        $userData = fetchuserById($userId, $db);
    }
    else {
        header("Location: login.php");
    }
?>