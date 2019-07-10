<?php  
    require('modules/loggedInCheck.php');
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
        <div class="row" style="margin-top:20px;">
            <div class="col-lg-8">
                <legend class="legend-style">Add New Post</legend>
                <?php if (isset($_SESSION["err"])) { ?> 
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Oh snap!</strong> 
                        <?php 
                            foreach($_SESSION["err"] as $value)
                            {
                                echo $value;
                                echo "<br>"; 
                            } 
                        ?>
                        <?php unset($_SESSION["err"]); ?>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION["singleErr"])) { ?> 
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Oh snap!</strong> 
                        <?php 
                            echo  $_SESSION["singleErr"];
                        ?>
                        <?php unset($_SESSION["singleErr"]); ?>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION["scss"])) { ?> 
                    <div class="alert alert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Sucess !</strong> 
                        <?php 
                            echo  $_SESSION["scss"];
                        ?>
                        <?php unset($_SESSION["scss"]); ?>
                    </div>
                <?php } ?>
                <form action="controllers/addPost.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Post Title">
                            <small class="form-text text-muted">Max 60 Characters</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" required class="form-control-file" name="image" id="image"
                                aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Add A Featured Image To The Post.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea">Post Body</label>
                            <textarea class="form-control" name="body" rows="2"
                                style="margin-top: 0px; margin-bottom: 0px; height: 208px;"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="" style="float:right">
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
    <!-- form ends  -->
</body>
</html>