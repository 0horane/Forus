<?php
    require_once 'database/database.php';
    require_once 'partials/session_start.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido a la pasteleria!</title>
  <link rel="shortcut icon" href="favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
  body{
    background-clip: url("vids/backgroundVid.mp4");
  }
  header{
    width: 100%;
    height: auto;
    position: relative;
    overflow: hidden;
  }
  video{
    width: 100%;
  }
  #absoluto{
    color: white;
    width: 100%;
    height: 100%;
    top: 32%;
    right: 0;
    position: absolute;
  }
  footer{
    border-top: 2.5px solid #f1f0f0;
  }
</style>
<body>
  <?php include 'partials/header.php' ?>
  <header>
    <video onloadedmetadata="this.muted=true" autoplay loop>
      <source src="vids/BackgroundVideo.mp4">
    </video>
    <div class = "container">
      <div id = "absoluto" class = "text-center">
        <h1 class = "display-1 mt-5">Pasteleria</h1>
        <h3 class = "display-4">La mejor pagina de recetas</h3>
      </div>
    </div>
  </header>
  <div class = "container mt-3">
  <h1 class ="display-1 text-center">Recetas del dia</h1>
  <div class = "row mt-5">
    <div class="col-md-4 mt-2">
      <div class="card text-center">
        <img src="images/platillodeldia.png" alt="platillodeldia">
        <div class="card-body">
          <h5 class="card-title">HOLA</h5>
          <p class="card-text">Nose</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-2">
      <div class="card text-center">
        <img src="images/platillodeldia.png" alt="platillodeldia">
        <div class="card-body">
          <h5 class="card-title">HOLA</h5>
          <p class="card-text">Nose</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-2">
      <div class="card text-center">
        <img src="images/platillodeldia.png" alt="platillodeldia">
        <div class="card-body">
          <h5 class="card-title">HOLA</h5>
          <p class="card-text">Nose</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
<footer class="page-footer font-small blue pt-4 mt-5">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase">Contenido</h5>
      <p>Hemos realizado una pagina la cual pueda acortar el tiempo de busqueda de los usuarios cuando buscar recetas se trata</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">COLABORADORES</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Link 1</a>
        </li>
        <li>
          <a href="#!">Link 2</a>
        </li>
        <li>
          <a href="#!">Link 3</a>
        </li>
        <li>
          <a href="#!">Link 4</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Link 1</a>
        </li>
        <li>
          <a href="#!">Link 2</a>
        </li>
        <li>
          <a href="#!">Link 3</a>
        </li>
        <li>
          <a href="#!">Link 4</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> Lucas Abdhala</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>