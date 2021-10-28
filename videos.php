<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'partials/header.php'?>
    <div class="container">
    <div class = "container mt-3">
  <h1 class ="display-1 text-center">Videos</h1>
  <div class = "row mt-5">
    <div class="col-md-4 mt-2">
      <div class="card text-center">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/vaaaDFJ0wM0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h5 class="card-title">¿Cómo hacer una LASAGNA en casa?</h5>
          <p class="card-text">Pino Prestanizzi</p>
          <a href="https://www.youtube.com/watch?v=vaaaDFJ0wM0&t=1313s" class="btn btn-primary">Ir al video</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-2">
      <div class="card text-center">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/SpU35Q0AXWI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h5 class="card-title">Arroz Feijao</h5>
          <p class="card-text">El vegano cordobes</p>
          <a href="https://www.youtube.com/watch?v=SpU35Q0AXWI" class="btn btn-primary">Ir al video</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-2">
      <div class="card text-center">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/URsI6_C--Xg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h5 class="card-title">Cachorro Quente</h5>
          <p class="card-text">Nandu andrade</p>
          <a href="https://www.youtube.com/watch?v=URsI6_C--Xg&t=1s" class="btn btn-primary">Ir al video</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-2">
      <div class="card text-center">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/T16JUI38vOk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h5 class="card-title">El Pastel de chocolate mas delicioso!</h5>
          <p class="card-text">Bien tasty</p>
          <a href="https://www.youtube.com/watch?v=T16JUI38vOk" class="btn btn-primary">Ir al video</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-2">
      <div class="card text-center">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/yIFfZN65jig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h5 class="card-title">Travis Scott Burger</h5>
          <p class="card-text">HowToBasic</p>
          <a href="https://www.youtube.com/watch?v=yIFfZN65jig" class="btn btn-primary">Ir al video</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-2">
      <div class="card text-center">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/A6cqoSYAE10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h5 class="card-title">😁😱طريقة تحضير شاورما جيدة</h5>
          <p class="card-text">شيف عمر</p>
          <a href="https://www.youtube.com/watch?v=A6cqoSYAE10" class="btn btn-primary">Ir al video</a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center mt-5">
    < paginador >
  </div>
<?php include 'partials/footer.php' ?>
</body>
</html>