<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis recetas</title>
    <link rel="shortcut icon" href="cutlery.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
    .img-recetas{
        height:100%;
        width: 100%;
    }
    .img-recetas img{
        position: relative;
    }
    .absoluto-videos{
        position: absolute;
        width: 100%;
        height: 100%;
        margin-top: 28%;
        right: 0;
        color: white;
    }

    .absoluto-videos2{
        position: absolute;
        width: 100%;
        height: 100%;
        margin-top: 28%;
        right: 0;
        color: white;
    }
    .img-recetas2{
        height: 100%;
        width: 118.3%;
    }
</style>
<body>
    <?php include_once 'partials/header.php'?>
    <div id="asd" class="container mt-5">
        <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <div class="recetas text-center">
                        <div class="absoluto-videos">
                          <h5 class="display-4 text">Mis Recetas</h5>
                          <button class="btn btn-primary">Ver mis recetas</button>
                        </div>
                        <img src="images/recetas.jpg" alt="" class="img-recetas">
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div class="videos text-center">
                        <div class="absoluto-videos2">
                          <h5 class="display-4 text">Mis videos</h5>
                          <button class="btn btn-primary">Ver mis videos</button>
                        </div>
                        <img src="images/videos.jpg"alt="" class="img-recetas2">
                    </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
        <?php include 'partials/footer.php' ?>
    </div>
</body>
</html>