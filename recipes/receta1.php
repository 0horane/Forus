<?php include '../database/database.php';?>
<?php include '../partials/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>RECETAS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="title">Listado de Recetas</h1>
	<div class="conteiner mt-3">
		<div class="row">
			<div class="col-12">
			<?php
				include_once '../database/database.php';
				$sql= "SELECT 'Name', 'Recipe', 'Views', 'img_path' FROM `recipes` WHERE 1";
				$resultSet=mysqli_query($link,$sql);
					while($row=mysqli_fetch_assoc($resultSet)){
						?>
						<div class="container">
							<div class="card">
							<img src="../images/<?php echo $row['img_path'] ?>> 
							<h4></h4>
							<p>Un platillo esquisito y fácil de cocinar</P> <?php//aquí va un texto corto para ver si te gusta la receta o no?>
							<a href="#">leer mas..</a> <?php//aquí iria la url que direcciona a la receta completa?>
							</div>
						<?php } ?>
					</div>
			</div>
		</div>
	</div>
</body>
</html>
    <?php//<div class="conteiner">
            <?php//<?php for($i=0; $i < 30; $i++) {?> <?php//aquí tendría quue que vincularce con la base de datos y preguntar cuantos registros hay en la tabla 'recipes'?>
                <?php//<div class="card">
                    <?php//<img src="../images/descarga.jpg"> <?php//aquí deverian agregarse las imagenes que suban los usuarios de las recetas?>
                       <?php// <h4><?php ?>
                          <?php//  echo 'Hamburgesa' ?><?php//</h4><?php//aquí se coloca el nombre del platillo?>
                   <?php// <p>Un platillo esquisito y fácil de cocinar</P> <?php//aquí va un texto corto para ver si te gusta la receta o no?>
              <?php//      <a href="#">leer mas..</a> <?php//aquí iria la url que direcciona a la receta completa?>
            <?php//    </div>
        <?php//    <?php } ?>
   <?php// </div>
<?php//</body>
<?php//</html>