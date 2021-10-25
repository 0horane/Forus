<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
      <div class="container my-2">
        <a class="navbar-brand" href="#">Cakeria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Recipes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Vids</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php 
          

          if (!$loggedin){
            ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="register.php">Registrarse</a>
            </li>
            <?php
          } else {
            ?>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php?url=<?php echo $_SERVER['REQUEST_URI'];  ?>">Logout</a>
            </li>

            <?php
          }
          
          ?>
          </ul>
        </div>
      </div>
    </nav>