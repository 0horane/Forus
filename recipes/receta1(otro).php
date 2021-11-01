<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    .titulo-comentarios{
        display: flex;
        justify-content: space-between;
    }
    .comentario{
        background-color: white;
        border-radius: 5px;
    }
    body{
      background-color: #E9E9E9;
    }
    .comentarios{
        background-color: red;
        border-radius: 5px;

    }
    .fav-btn{
        height: 45px;
        width: 100px;
        border: none;
        color: white;
        font-size: 25px;
        background-color: rgb(255, 0, 68);
        border-radius: 15px;
        box-shadow: inset 0 0 0 0 #f9e506;
        transition: ease-out 0.3s;
        font-size: 2rem;
        outLine: none;
    }
    .fav-btn:hover{
        box-shadow: inset 100px 0 0 0 #f9e506;
        cursor: pointer;
        color: #000;
    }
    .fav-btn img{
        margin-bottom: 11px;
    }
    .options{
        display: flex;
        justify-content: space-between;
    }
</style>
<script>
    $.(document).ready(function(){
       $(".fav").click(function(){
            $(this).toggleClass("active");
       });
    });
</script>
<body>
    <?php include '../partials/header.php'?>
    <div id="container-receta" class='container'>
        <section>
            </a>
            <div class="search-result-item-body">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="display-1">Chorizitos a la pomarola</div>
                        <img class="image mt-3" src="../images/chorizos_pomarola.jpg" width = "75%">
                        <p class="fs-mini text-muted mt-3">Esta receta tiene: 3124123 👁️ </p>
                        <hr>
                        <div class="display-4">Ingredientes</div>
                        <ul class = "info mt-3">
                            <h5><li>Molde 24 cm</li></h5>
                            <h5><li>Base de chocolate</li></h5>
                            <h5><li>Huevos...2 unidades</li></h5>
                            <h5><li>Azúcar...100 grs</li></h5>
                            <h5><li>Leche...120 mml</li></h5>
                            <h5><li>Aceite girasol...30 ml</li></h5>
                            <h5><li>Cacao amargo en polvo...40 grs</li></h5>
                            <h5><li>Harina 0000...10 grs</li></h5>
                            <h5><li>Polvo para hornear...8 grs</li></h5>
                            <h5><li>Mousse de cafe</li></h5>
                            <h5><li>Leche...350 ml</li></h5>
                            <h5><li>Azucar...120 grs</li></h5>
                            <h5><li>Almidón de maíz..25 grs</li></h5>
                            <h5><li>Café en polvo saludable...8 grs</li></h5>
                            <h5><li>Crema de leche...450 ml</li></h5>
                            <h5><li>Azucar...40grs</li></h5>
                            <h5><li>Gelatina sin sabor...5 grs</li></h5>
                        </ul>
                        <h4 class="display-6">Procedimientos</h4>
                        <ul class="description">Base de chocolate <br>
                          <li>1° paso: pre calentar el horno a 180°C. Recubrir con papel manteca la base del molde de 24 cm. </li>
                          <li>2° paso: en un bowl batir los huevos junto con el azúcar. </li>
                          <li>3° paso: agregar la leche. Mezclar. Verter en forma de hilo el aceite mezclando constantemente. </li>
                          <li>4° paso: agregar en 3 veces la harina, revolver hasta disolver todos los grumos. </li>
                          <li>5° paso: por último, incorporar el cacao en polvo previamente tamizado. Batir bien.</li> 
                          <li>6° paso: verter la mezcla en el molde y llevar a horno 180°C por 15/20 minutos. Pinchar el centro antes de retirarlo del horno. Desmoldar una vez que esté completamente frío. </li>
                          <li>7° paso: con un poco de café y cagnac realizar un baño para el bizcochuelo. </li>
                          <li>8° paso: recubrir la pared del molde con papel film o un acetato. Colocar la base de bizcochuelo dentro, bañarlo y reservar. Comenzar con el mousse.</li>
                          <br>
                          Mousse de chocolate 
                          <li>1° paso: calentar a fuego medio la leche. </li>
                          <li>2° paso: en una olla de tamaño medio colocar los 120 gramos de azúcar, el almidón y el café soluble. Revolver. </li>
                          <li>3° paso: verter, a los polvos, la leche caliente en 3 veces, revolver hasta que el café se haya disuelto por completo. Llevar a fuego medio y cocinar hasta que lleve a hervor. Luego, colocar papel film a contacto a la crema y llevar a heladera hasta que esté completamente fría. </li>
                          <li>4° paso: por otro lado, batir la crema de leche junto con los 40 gramos de azúcar. Debe quedar bien firme. </li>
                          <li>5° paso: retirar la crema de café de la heladera, con la ayuda de la batidora mezclarla hasta que se una nuevamente. Incorporar un poco de la crema batida a la crema de café y batir. </li>
                          <li>6° paso: luego, verter toda la crema de café dentro de la crema de leche. Mezclar con la ayuda de la batidora. </li>
                          <li>7° paso: disolver la gelatina sin sabor con un poco de agua caliente, agregar una cucharada sopera de crema a la gelatina, unir y luego verterla dentro de la totalidad de la crema de café. Batir bien con la batidora. </li>
                          <li>8° paso: verter la mousse dentro del molde, emparejarla y llevarla a freezer por al menos 3 horas o hasta que esté completamente congelada. </li>
                          <li>9° paso: retirarla del freezer, desmoldar y decorar con cacao amargo en polvo. Dejar descongelar en heladera por al menos 5 horas antes de ser servida.</li>
                        </ul> <br>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="options col-10">
                ¿Te gusto la receta? ¡No olvides darle a favoritos!
                <button type="submit" class="fav-btn"><img src="star.png" alt="estrelha" width="25%"></button>
            </div>
        </div>
        <h4 class="display-6 mt-4">Comentarios</h4>
        <div class="comentarios-section container-fluid">
            <div class="comentarios p-2">
                <div class="titulo-comentarios">
                <h6>Lucas</h6>
                <h6 class="text-end">Hecho el dia 23223/1342534/1324132543</h6>
                </div>
                <h3 class="comentario col-12 p-3">Nefasto comerse el sanguche de medias me parece la cosa mas asquerosa de todas, pero igual esta rico</h3>
            </div>
            <div class="comentarios p-2 mt-2">
                <div class="titulo-comentarios">
                    <h6>donal trump</h6>
                    <h6 class="text-end">Hecho el dia 23223/1342534/1324132543</h6>
                </div>
                <h3 class="comentario col-12 p-3">🇱🇷🇱🇷🇱🇷🇱🇷🇱🇷🇱🇷🇱🇷🇱🇷 ز كيلوغرام الطماطم</h3>
            </div>    
        </div>
        <?php include '../partials/footer.php' ?>
    </div>
</body>
</html>