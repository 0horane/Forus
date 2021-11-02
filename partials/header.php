<style>
  nav{
    border-bottom: 2.5px solid #2322;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
      <div div="navbarsito" class="container my-2">
        <a class="navbar-brand" href="#">
          <img src="images/logoheader.png" width ="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="recetas.php">Recetas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="donations.php">Donaciones</a>
            </li>
            </li>
            <?php 
          

          if (!$loggedin){
            ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="login.php">Iniciar Sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="register.php">Registrarse</a>
            </li>
            <?php
          } else {
            ?>
			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mi actividad
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Mis recetas</a></li>
                <li><a class="dropdown-item" href="#">Favoritos</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="database/logout.php?url=<?php echo $_SERVER['REQUEST_URI'];  ?>">Logout</a>
            </li>

            <?php
          }
          
          ?>
          </ul>
          <form class="d-flex" action="search.php">
            <input name="q" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value=<?php echo isset($_GET['q']) ? $_GET['q']:'' ; ?>>
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>