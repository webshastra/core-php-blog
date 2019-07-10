<?php 
    session_start();   
     
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!--header starts-->
    <?php include ("partials/user/header.php")?>
    <!--header ends-->
</head>

<body>
    <!-- navigation starts  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Registration </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
    <!-- navigation ends   -->

    <!-- form strts  -->
    <div class="container">
        <div class="row" style="margin-top:20px;">

            <div class="col-lg-4">
                <legend class="legend-style">Register Form</legend>
                <?php if (isset($_SESSION["error"])) { ?>
                <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>OOPS!</strong> <?php 
                                    foreach ($_SESSION["error"] as $value){
                                    echo $value; 
                                    echo "<br>";} ?>
                                     <?php unset($_SESSION["error"]); ?>
                </div>
                <?php } ?>
                <form action="controllers/register.php" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Id</label>
                            <input type="email" class="form-control"  name="email" aria-describedby="emailHelp"
                                placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control"  name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text" class="form-control"  name="name" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mob</label>
                            <input type="number" class="form-control"  name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <div class="" style="float:right" >                               
                                <a href="login.php">Click Here To Login</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
            </div>

        </div>
    </div>
    <!-- form ends  -->

</body>

</html>