<?php
    require('../models/addPost.php');
    require('../modules/routesAuth.php');

    // Initializing variables
    $title = "";
    $body  = "";
    $user = $_SESSION['user_id'];
    $errors = array(); 

    if(isset($_FILES['image'])){
        
        $file_name = $_FILES['image']['name'];
        $uploadPath = "../uploads/images/".$file_name;
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        
        if($file_size > 10485760){         
           array_push($errors, "File size must be excately 10 MB");
        }
        
        if(empty($errors)==true){           
           if(!move_uploaded_file($file_tmp, $uploadPath))            
            {
                die('There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.');
            }
        }
        
    } else {
        array_push($errors, "Image Is Required");
    }

    // REGISTER USER
    if (!empty( $_POST ) ) {

        // receive all input values from the form
        $title= mysqli_real_escape_string($db, $_POST['title']);
        $body = mysqli_real_escape_string($db, $_POST['body']);
        

        // form validation: ensure that the addpost is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($title)) { array_push($errors, "Please Enter Post title"); }
        if (empty($body)) { array_push($errors, "Please Enter Post body"); }
    
    
        // Finally, user add post if there are no errors in the form
        if (count($errors) == 0) {            
            $postInsert = addpostuser($title, $body,$user, $file_name, $db);
            if($postInsert) {                                                                 
                $_SESSION["scss"] = "Post is submitted sucessfully";
                header("location:../addPost.php");       
            } else {
                $_SESSION["singleErr"] = "Post Failed To Save";
                header("location:../addPost.php");
            }
        } else {              
            $_SESSION["err"] = $errors;
            header("location:../addPost.php");            
        }
        
    } else {
        echo "No Data Recieved";
    }