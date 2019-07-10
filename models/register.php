<?php
    function checkuser($email, $db){
        $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    function fetchuser($email, $db){
        $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_object($result);
        return $user;
    }

    function registeruser($email, $_password, $name, $mob , $db){
        $password = md5($_password);//encrypt the password before saving in the database

        $query = "INSERT INTO users (email, name, password, mob)
                VALUES('$email', '$name', '$password', '$mob')";                                

        $result = mysqli_query($db, $query);   
    
        if($result){
            return true;  
        } else {            
            return false;
        }           
    }


?>