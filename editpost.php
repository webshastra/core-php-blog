<?php  
    require('modules/loggedIncheck.php');
    $postid = $_GET["post_id"];
    $fetch = fetchPostData($postid, $db);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
         <!--header starts-->
        <?php include ("partials/user/header.php")?>
        <!--header ends-->
    </head>
    <body>
        <!--navigation starts-->
        <?php include ("partials/user/nav.php")?>
        <!--navigation ends-->
         
        <!-- form strts  -->
        <div class="container">
            <div class="row" style="margin-top:20px; margin-bottom:40px;">

                <div class="col-lg-8">
                    <legend class="legend-style">Add New Post</legend>
                    <form action="controllers/updatePost.php" method="POST" enctype="multipart/form-data">
                        <fieldset>

                            <div class="form-group">
                                <label>Post Id</label>
                                <input type="text" class="form-control" name="post_id" readonly value="<?php echo $fetch->id;?>">                                 
                                <small class="form-text text-muted">Max 60 Characters</small>
                            </div>

                            <div class="form-group">
                                <label>Edit Post Title</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $fetch->title;?>">                                 
                                <small class="form-text text-muted">Max 60 Characters</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Update Featured Image</label>
                                <input type="file" required class="form-control-file" name="image"  aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Add  A Featured Image To The Post.</small>
                                <img src="uploads/images/<?php echo $fetch->img ?> " height="100px" width="100px";/>                                
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea">Edit Post Body</label>
                                <textarea class="form-control" name="body" rows="2" style="margin-top: 0px; margin-bottom: 0px; height: 208px;" placeholder=""><?php echo $fetch->body;?></textarea>
                            </div>

                            <div class="form-group">
                                <div class="" style="float:right"  >                             
                                    <a href="user.php">View ALL Your Posts</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <br>
                            
                        </fieldset>
                    </form>


                </div>
            </div>
        </div>
        </div>
        <!-- form ends  -->
    </body>

</html>

<?php
   
   