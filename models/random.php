<?php 
    function fetchuserById($id, $db){
        $user_check_query = "SELECT * FROM users WHERE id='$id' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_object($result);
        return $user;
    }

    function fetchAllPosts($userId , $db) {
        $user_check_query = "SELECT * FROM posts WHERE user='$userId'";
        $result = mysqli_query($db, $user_check_query);
        return $result;
    }

    function fetchAllPostsIndex($db) {
        $user_check_query = "SELECT * FROM posts";
        $result = mysqli_query($db, $user_check_query);
        return $result;
    }

    function fetchauthor($authorid,$db) {
        $user_check_query = "SELECT * FROM users where id='$authorid' Limit 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_object($result);
        return $user;
    }


    function fetchPostData($postid, $db){
        $user_check_query = "SELECT * FROM posts where id='$postid' LIMIT 1" ;
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_object($result);
        return $user;
    }

    function searchAllPost($key , $db) {
        $user_check_query = "SELECT * FROM posts WHERE title LIKE '%{$key}%' OR body LIKE '%{$key}%'";
        $result = mysqli_query($db, $user_check_query);        
        return $result;
    }
  

?>