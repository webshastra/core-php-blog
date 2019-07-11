<?php
    require('../models/updatePost.php');
    require('../modules/routesAuth.php');
    
    // Initializing variables
    $title = "";
    $body  = "";
    $postid = "";
    $user = $_SESSION['user_id'];
    $errors = array(); 

    if(isset($_FILES['image'])){
        
        $file_name = $_FILES['image']['name'];      
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $fileStorageName = round(microtime(true) * 1000).'-'.$file_name;
        $uploadPath = "../uploads/images/".$fileStorageName;
        
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
        $postid =  mysqli_real_escape_string($db, $_POST['post_id']);
        $title= mysqli_real_escape_string($db, $_POST['title']);
        $body = mysqli_real_escape_string($db, $_POST['body']);

        // form validation: ensure that the addpost is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($postid)) { array_push($errors, "No Post Id Found"); }
        if (empty($title)) { array_push($errors, "Please Enter Post title"); }
        if (empty($body)) { array_push($errors, "Please Enter Post body"); }
        
        $isPost = checkPost($postid, $user, $db);
        if(!$isPost){
            array_push($errors, "Invalid Post Id / Post Doesn't Belong To User");
        };
        
        // Finally, user add post if there are no errors in the form
        if (count($errors) == 0) {            
            $update = updatePost($title, $body, $fileStorageName, $user, $postid, $db);
            if($update) {                                               
                echo "Post is Updated sucessfully";          
            } else {
                echo 'Post Update Failed';
            }
        } else {
            foreach ($errors as $value) {
                echo $value;
                echo '<br>' ;          
            }
        }
    } else {
        echo "No Data Recieved";
    }
?>
