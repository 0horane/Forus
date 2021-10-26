<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
    #container-receta{
        background-color: white;
    }
</style>
<body>
    <?php include '../partials/header.php'?>
    
    <div id="container-receta" class='container'>
        <section>
            </a>
            <div class="search-result-item-body">
                <div class="row">
                    <div class="col-sm-9">
                        <img class="image mt-3" src="../images/chorizos_pomarola.jpg" width = "35%">
                        <h4 class="search-result-item-heading"><a href="#">
                            <?php
                            echo "TU VIEJA";
                            ?>
                        </a></h4>
                        <p class="info">New York, NY 20188</p>
                        <p class="recipes">Not just usual Metro. But something bigger. Not just usual widgets, but real widgets. Not just yet another admin template, but next generation admin template.</p>
                    </div>
                    <div class="col-sm-3 text-align-center">
                        <p class="fs-mini text-muted">comentar</p><a class="btn btn-primary btn-info btn-sm" href="#">Guardar</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>