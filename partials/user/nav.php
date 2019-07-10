<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo $baseUrlUser ?>">User Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $baseUrlUser ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=".../../addPost.php">Add Post</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $baseUrl ?>">Visit Site</a>
      </li>    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download"> <?php echo ucwords($userData->name) ?> <span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="download">
          <a class="dropdown-item" target="_blank" href="#">Settings</a>          
          <a class="dropdown-item" href=".../../logout.php">Logout</a>        
        </div>
      </li>
    </ul>
    <form action=".../../search.php" method="GET"  class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name='key' type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>