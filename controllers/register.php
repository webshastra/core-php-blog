<?php

    require('../models/register.php');
    require('../config.php');    
    session_start();

    // initializing variables
    $email = "";
    $_password  = "";
    $username  = "";
    $phone  = "";
    $errors = array(); 

    // REGISTER USER
    if (!empty( $_POST ) ) {

        // receive all input values from the form
        $username = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $_password = mysqli_real_escape_string($db, $_POST['password']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($_password)) { array_push($errors, "Password is required"); }
        if (empty($phone)) { array_push($errors, "Phone is required"); }
        
        if (!empty($email && $db)) {
            // first check the database to make sure 
            // a user does not already exist with the same email  
            $user = checkuser($email, $db);   
            if ($user) { // if user exists    
                array_push($errors, "email already exists"); 
                    
            }
        }
    
            // Finally, register user if there are no errors in the form
            if (count($errors) == 0) {
                
                $userInster = registerUser($email, $_password, $username, $phone, $db);
                if($userInster) {
                    $Inserteduser = fetchuser($email, $db);
                        if($Inserteduser){                
                            $_SESSION['user_id'] = $Inserteduser->id;                                 
                            header('location: ../user.php');                
                        }
                        
                     else {
                             $_SESSION['error'] = 'Wrong Email/Password';
                           }
                     
                }else {
                     $_SESSION['error'] = 'Wrong Email/Password';
                     header('location: ../register.php');
                 }

            }else{
                
                $_SESSION['error'] = $errors;
                header('location:../register.php');
                    
            }

    }else{

        echo "No data recieved";
    }


?>