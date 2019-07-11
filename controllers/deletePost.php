<?php
    require('../modules/routesAuth.php');
    require('../models/deletePost.php');

    $postid = $_GET["post_id"];    
    $user = deletepost($postid,$db);
    if($user){
        $_SESSION["scss"] = "Post Deleted sucessfully";
        header("location:../user.php");   
    } else {
        $_SESSION["singleErr"] = "Some Error Occured";
        header("location:../user.php");
    }
?>