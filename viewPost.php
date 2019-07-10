<?php  
    require ('models/random.php');  
    require ('config.php');  
    $postid = $_GET["post"];
    $assetslink =   'assets/blog';
    $fetch = fetchPostData($postid, $db);
?>
<?php if($fetch) { ?>
<!doctype html>
<html lang="en">
<!-- Head starts -->
<?php include ("partials/blog/head.php") ?>
<!-- Head ends -->

<body>
    <div class="wrap">

        <!-- Head starts -->
        <?php include ("partials/blog/nav.php") ?>
        <!-- Head ends -->

        <section class="site-section py-lg">
            <div class="container">
                <div class="row blog-entries element-animate">
                    <div class="col-md-12 col-lg-12 main-content"> 
                        <h1 class="mb-4"><?php echo ucwords($fetch->title);?></h1>   
                        <div class="post-meta">
                            <span class="author mr-2"><img src="<?php echo $assets ?>/images/person_1.jpg" alt="Colorlib" class="mr-2">
                                <?php  
                                    $author = fetchauthor($fetch->user, $db); 
                                    echo $author->name;
                                ?></span>&bullet;
                            <span class="mr-2">
                                <?php 
                                    $phpdate = strtotime( $fetch->time ); 
                                    $mysqldate = date( 'M d, Y', $phpdate );
                                    echo $mysqldate;
                                ?>
                            </span> &bullet;                            
                        </div>                                                
                        <div class="post-content-body">
                            <p>
                                <?php echo ucfirst($fetch->body) ?>
                            </p>                            
                            <div class="row mb-5">
                                <div class="col-md-4 mb-4">
                                    <img src="uploads/images/<?php echo $fetch->img ?>" alt="Image placeholder" class="img-fluid">
                                </div>                                
                            </div>
                        </div>                    
                    </div>
                    <!-- END main-content -->    
                </div>
            </div>
        </section>
        <!-- END section -->

    </div>

    <!-- LOADER starts -->
    <?php include ("partials/blog/loader.php") ?>
    <!-- LOADER ends -->

    <!-- footer starts -->
    <?php include ("partials/blog/footer.php") ?>
    <!-- footer ends -->


</body>

</html>
<?php } else { echo "404 Error !! Page Not Found";} ?>