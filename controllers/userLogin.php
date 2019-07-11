<?php
   require('../models/login.php');
   require('../config.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($db, $_POST['email']);
      $mypassword = mysqli_real_escape_string($db, $_POST['password']); 
      
      $auth = fetchUserByEmail($myemail, $db);
        if($auth) {
            if(md5($mypassword) == $auth->password){
                $_SESSION['user_id'] = $auth->id;
                $cookie_name = "user_id";
                $cookie_value = $auth->id;
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), $baseUrl);                                  
                header('location: ../user.php'); 
            } else {
                $_SESSION['err'] = 'Wrong Email/Password';
                header('location: ../login.php');
            }
           
        } else {
            $_SESSION['err'] = 'Wrong Email/Password';
            header('location: ../login.php');
        }      
   } else {
       die ('Server Accepts Only Post Request');
   }
?>  