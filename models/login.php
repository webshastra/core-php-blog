<?php 
    function fetchUserByEmail($email, $db){
        $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($db, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            $user = mysqli_fetch_object($result);
            return $user;
        } else {
            return false;
        }                
    }
?>