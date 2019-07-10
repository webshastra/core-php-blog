<?php

session_start();   

require ('../config.php');

if ( !isset( $_SESSION['user_id'] ) ) {
    header("Location: login.php");
} elseif(!isset($_COOKIE['user_id'])) {
    header("Location: login.php");
}
?>
