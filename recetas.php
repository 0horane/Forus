<?php include 'partials/session_start.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
	<link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="cutlery.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body> 
<?php
include 'database/database.php';
$sqlRecipes='SELECT Name, Views
					FROM recipes
					ORDER BY Views DESC';
				
					;
$resultado = mysqli_query($link, $sqlRecipes);

if(!$resultado){
	die("Falló la consulta: " . mysqli_error($link));
}

/*
No se quien hizo todo esto (dice que fue estrada??) pero ignoró todas las instrucciones en el trello

En el archivo recetas.php
Recibe infromacion de una tarjeta desde el api usando javascript, y muestra una tarjeta, con la imagen, la parte inicial de la receta,
 la cantidad de vistas, la cantidad de favoritos, y un boton de ver mas. Si se aprieta este boton manda a la pagina de esta receta.

Campaya Alejandro hace 10 horas
Fetch API - Referencia de la API Web | MDN
https://developer.mozilla.org/es/docs/Web/API/Fetch_API
https://www.javascripttutorial.net/javascript-fetch-api/


Lo que estaba puesto antes aca estaba bien, solo hay que agregarle el fetch y meter los datos. Hacerlo desde el php no va a permitir
hacer el ajax que le prometimos al profe, y no nos permite usar las tarjetas que ya teníamos hechas que funcionaban bien

*/
while ($fila = mysqli_fetch_assoc($resultado)) {
?>
		<div class="container">
		<div class="row">
		<img class="card-img-top" src="images/descarga.jpg" alt="Card image cap">
		<div class="card-body">
		<h5 class="card-title"><?php echo $fila["Name"] ?></h5>
		<p class="card-text">Un platillo esquisito y fácil de cocinar</P> 
		<a href="#">leer mas..</a> 
		</div>
            </div>
<?php }?>
  <p class="text-center mt-5">< *Paginador* ></p>
  <?php include 'partials/footer.php' ?>
  </div>
</body>
</html>