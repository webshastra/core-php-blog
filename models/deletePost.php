<?php

function deletepost($name, $db){
    $user_check_query = "DELETE  FROM posts WHERE id='$name'";
    $result = mysqli_query($db, $user_check_query);
    return $result;
}

?>