<?php
    function addpostuser($title, $body,$user, $uploadPath, $db){
        $query = "INSERT INTO posts (title, body, user, img) 
                VALUES('$title', '$body','$user', '$uploadPath')";                                
        $result = mysqli_query($db, $query);       
        if($result){
            return true;  
        } else {            
            return false;
        }           
    }
?>;