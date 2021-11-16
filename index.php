<?php
    require_once 'database/database.php';
    require_once 'partials/session_start.php';
    require_once 'partials/starfunc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recetario</title>
  <link rel="shortcut icon" href="cutlery.png">
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
        <h1 class = "display-1 mt-5">Recetario</h1>
        <h3 class = "display-4">Unidos por el amor de la cocina</h3>
      </div>
    </div>
  </header>
  <div class = "container mt-3">
  <h1 class ="display-1 text-center">Recetas del dia</h1>
  <div id="cardbox" class = "row mt-5" >
  </div>
<?php include 'partials/footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  


$.ajax({
  cache:false,
  url: window.location.pathname.split('/').slice(0,-1).join('/')+"/api/api.php",
  dataType:"json",
  data: {
    qt: 'sr',
    v:  'pd'
  },
  success:function(result){
	  //console.log(`${result[0]},${result[1]},${result[2]}`);
    $.ajax({
      url: window.location.pathname.split('/').slice(0,-1).join('/')+"/api/api.php",
      dataType:"json",
      data: {
        qt: 'rd',
        v:  `${result[0]},${result[1]},${result[2]}`
      },
      success: function( result ) {
        str="";
        for (x=0;x<3;x++){
          //console.log(result);
        str+=gencard(result[x]['id'],result[x]['name'],result[x]['recipe'],result[x]['username'],result[x]['views'],result[x]['img_path'],result[x]['code'], (<?php echo strval($loggedin) ?> ? true : false), false);
        
        }

        box=document.getElementById("cardbox");
        box.innerHTML=str;
        setfavs()
        }


  
        
        //console.log(str);
      
    });
  }
});


  //console.log("se paso");
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
</html>