<?php  
    require ('modules/loggedInCheck.php'); 
    $result = fetchAllPosts($userId, $db);  
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
         <div class="container">
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
         <?php if(mysqli_num_rows($result) > 0) { ?>
         <table class="table table-hover ">
            <thead>
                <tr class="table-dark table-striped table-bordered">                
                    <th>Post Id</th> 
                    <th>Post Title</th>            
                    <th>Time</th>
                    <th>img</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>                
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>                    
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo ucwords($row["title"]) ?></td>                    
                                <td>
                                    <?php 
                                        $phpdate = strtotime( $row["time"] ); 
                                        $mysqldate = date( 'd-M-Y H:i A', $phpdate );
                                        echo $mysqldate;
                                    ?>
                                     <td>
                                    <img src="uploads/images/<?php echo $row["img"] ?> " height="100px" width="100px";/>

                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" href="" class="btn btn-info">Actions</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop3" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item" href="viewPost.php?post=<?php echo $row["id"] ?>">View</a>
                                            <a class="dropdown-item" href="editpost.php?post_id=<?php echo $row["id"] ?>">Edit</a>
                                            <a class="dropdown-item" href="controllers/deletePost.php?post_id=<?php echo $row["id"] ?>">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>                    
                        </tr>    
                    <?php } ?>                           
            </tbody>
        </table>
        <?php } else { echo "No Records"; } ?> 
         </div>        
    </body>

</html>