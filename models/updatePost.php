
<?php

    function checkPost($postId, $userid, $db){
        $user_check_query = "SELECT * FROM posts WHERE id='$postId' and user='$userid' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $ifFound = mysqli_fetch_object($result);
        if($ifFound){           
            return true;
        } else {
            return false;
        }      
    }

    function updatePost($title, $body, $fileStorageName, $user, $postid, $db){
        $sql ="UPDATE posts SET title='$title', body='$body', img='$fileStorageName'
        WHERE id='$postid' and user='$user'";
        $result = mysqli_query($db, $sql);  
        if($result){
            return true;  
        } else {    
            echo mysqli_error($db);       
            // return false;
        }           
    } 
?>