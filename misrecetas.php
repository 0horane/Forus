<?php 
include 'partials/session_start.php' ;
require_once 'partials/starfunc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
	<link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="cutlery.png">
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <script>
	  let page=0;
	  let condition=0;
	  let direction=0;
  </script>
	
    <?php include 'partials/header.php'?>

	<form>
		<select id="condition" name="condition" onchange="updateCards ()">
			<option value='a'>Alfabético</option>
			<option value='c'>Cronológico</option>
			<option value='f'>Por Favoritos</option>
			<option value='v'>Por Vistas</option>
			<option value='p'>Por Popularidad</option>
		</select>
		<select id="direction" name="direction" onchange="updateCards ()">
			<option value='a'>Ascendiente</option>
			<option value='d'>Descendiente</option>

		</select>
	</form>

    <div id="container" class="container">
		<div class = "container mt-3">
			<h1 class ="display-1 text-center">Recetas</h1>
			<div id="cardbox" class = "row mt-5">

				
			</div>
		</div>
	<script>

		function updateCards (){
			conditionElement = document.getElementById('condition');
			condition=conditionElement.options[conditionElement.selectedIndex].value;
			directionElement = document.getElementById('direction');
			direction=directionElement.options[directionElement.selectedIndex].value;
			let str="";
			$.ajax({
				url: window.location.pathname.split('/').slice(0,-1).join('/')+"/api/api.php",
				dataType:"json",
				data: {
					qt: 'yr',
					v:  `${condition}${direction}`
				},
				success: function( result ) {
					let ajaxvalues=[];
					for (i=0;i<9;i++){
						if(result[0][i]){
						ajaxvalues.push(result[0][i]);
						}
					}
					$.ajax({
						url: window.location.pathname.split('/').slice(0,-1).join('/')+"/api/api.php",
						dataType:"json",
						data: {
							qt: 'rd',
							v:  ajaxvalues.join(',')
						},
						success: function( result ) {
							
							result.forEach(recipe=>{
								str+=gencard(recipe['id'],recipe['name'],recipe['recipe'],recipe['username'],recipe['views'],recipe['img_path']);
							});
							document.getElementById('cardbox').innerHTML=str;
						}
					});
				}
			});
			
		}
		updateCards ()
	</script>
	<?php include 'partials/footer.php' ?>
  	</div>
</body>
</html>


</body>
</html>