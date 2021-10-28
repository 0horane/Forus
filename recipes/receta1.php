<?php include '../database/database.php';?>
<?php include '../partials/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RECETAS</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="title">Listado de Recetas</h1>
    <div class="conteiner">
            <?php for($i=0; $i < 30; $i++) {?> <?php//aquí tendría quue que vincularce con la base de datos y preguntar cuantos registros hay en la tabla 'recipes'?>
                <div class="card">
                    <img src="../images/descarga.jpg"> <?php//aquí deverian agregarse las imagenes que suban los usuarios de las recetas?>
                        <h4><?php 
                            echo 'Hamburgesa' ?></h4><?php//aquí se coloca el nombre del platillo?>
                    <p>Un platillo esquisito y fácil de cocinar</P> <?php//aquí va un texto corto para ver si te gusta la receta o no?>
                    <a href="#">leer mas..</a> <?php//aquí iria la url que direcciona a la receta completa?>
                </div>
            <?php } ?>
    </div>
</body>
</html>