<?php require_once 'database/database.php'?>

<?php require_once './database/login_back.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Recetario</title>
    <link rel="shortcut icon" href="cutlery.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light+Two&family=Spartan:wght@200;300;500&display=swap" rel="stylesheet">  
    <style>
    .container{
        border-radius: 15px;
        width: 100%;
        margin-top: 5%;
    }
    #welcome{
        text-align: center;
    }
    .bg{
        background-image: url("images/imagenreglog.jpg");
        background-position: center;
        border-radius: 15px 0px 0px 15px;
    }
    .btn{
        background-color: #949492;
        color: white;
    }
    </style>
</head>
<body>
    <div class="container shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6">
            </div>
            <div class="col p-3">
                <div class="text-end">
                <a href="index.php"><img src="images/logo1.png" alt="logo" width="35%" href="index.php"></a>                </div>
                <h1 id = "welcome" class="py-5 mt-3">Welcome</h1>

            <!-- Aca vamos a empeazar a hacer todo lo que viene ser el form-->

                <form class = "mt-3" action = "login.php" method = "POST"> 
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre de usuario o mail</label>
		    <input name="usr" type="text" class="form-control" id="usr" aria-describedby="emailHelp" placeholder="Escribí aca tu email o numbre de usuario." value="<?php echo isset($_POST["usr"]) ?  $_POST["usr"] : "";?>">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>                           
                    <input name="pwd" type="password" class="form-control" id="pwd" placeholder = "Escribí aca tu contraseña.">
                  </div>
                  <div class = "d-grid">
                    <button type = "submit" value = "submit" class = "btn mt-2" name="loguearse">Login</button>
                  </div>
                </form>
                <div class="row text-center">
                    <div class="col-13 mt-3">
                        <span>New here? <a href= "register.php">Register</a></span>
                    </div>
                </div>
                      
            </div>
        </div>
    </div>
    <div class="container">
        <?php include 'partials/footer.php' ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
</html>
