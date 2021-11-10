<?php include 'partials/session_start.php' ?>
<?php include 'partials/header.php' ?>
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
<style>
	#cartita{
		background-color: red;
		max-width: 25%;
	}
	#cartita img{
		margin-top: 10px;
	}
</style>
<body> 
<?php /*
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


while ($fila = mysqli_fetch_assoc($resultado)) {


	<div class="container mt-3 dp-flex justify-content-between">
		<div class="row mt-5">
			<div id="cartita" class="col-md-4 mt-2">
				<img src="images/descarga.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"><?php echo $fila["Name"] ?></h5>
					<p class="card-text">Un platillo esquisito y fácil de cocinar</P> 
					<a href="#">leer mas..</a> 
				</div>
			</div>

		</div>
    </div>
<?php }?>
<div class="container">
	<p class="text-center mt-5">< *Paginador* ></p>
  <?php include 'partials/footer.php' ?>
 
</div>
 */ ?>


<?php include 'partials/session_start.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
    <link rel="shortcut icon" href="cutlery.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
  <script>
	  let page=0;
	  let condition=0;
	  let direction=0;
  </script>
	
    <?php include 'partials/header.php'?>

	<form>
		<select id="condition" name="condition" onchange="submit()">
			<option value='a'>Alfabético</option>
			<option value='c'>Cronológico</option>
			<option value='f'>Por Favoritos</option>
			<option value='v'>Por Vistas</option>
			<option value='p'>Por Popularidad</option>
		</select>
		<select name="direction" onchange="submit()">
			<option value='a'>Ascendiente</option>
			<option value='d'>Descendiente</option>

		</select>
	</form>

    <div id="container" class="container">
		<div class = "container mt-3">
			<h1 class ="display-1 text-center">Recetas</h1>
			<div id="cardbox" class = "row mt-5">
			<?php for ($x=0;$x<9;$x++){ ?>
				<div class="col-md-4 mt-2">
					<div class="card text-center">
						<img src="images/platillodeldia.png" alt="platillodeldia">
						<div class="card-body">
							<h5 class="card-title">HOLA</h5>
							<p class="card-text">Nose</p>
							<a href="recipes/receta1.php" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			<?php } ?>
				
			</div>
		</div>
	<script>

		function updateCards (){

		}

	</script>
	<?php include 'partials/footer.php' ?>
  	</div>
</body>
</html>


</body>
</html>