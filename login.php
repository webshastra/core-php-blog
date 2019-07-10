<?php 
    session_start();   
    require ('config.php');   
    if ( isset( $_SESSION['user_id'] ) ) {
        header("Location: user.php");
    } 
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
        <a class="navbar-brand" href="#">User Login</a>
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
                <legend class="legend-style">Login Form</legend>
                <?php if ( isset( $_SESSION['err'] ) ) { ?>                    
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Oh snap!</strong> <?php echo $_SESSION["err"]; ?>
                        <?php unset($_SESSION["err"]); ?>
                    </div>
                <?php } ?>
                <form action="controllers/userLogin.php" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <label>Email Id</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                                placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                            <label class="custom-control-label" for="customSwitch1">Remember Me</label>
                        </div>
                        </div>                        
                        <div class="form-group">
                            <div class="" style="float:right"  >                             
                                <a href="register.php">Click Here To Register</a><br>
                                <a href="<?php echo $baseUrl ?>">Visit Site</a>
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