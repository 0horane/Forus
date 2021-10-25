<?php require_once 'database/database.php'?>
<?php require_once 'register_back.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light+Two&family=Spartan:wght@200;300;500&display=swap" rel="stylesheet">  
    <style>
    body{
        background-color: #e5dbd8;
        font-family: 'Shadows Into Light Two', cursive;
        font-family: 'Spartan', sans-serif;
        font-weight: 300;
    }
    .container{
        background-color: #e1deaf;
        border-radius: 15px;
        width: 100%;
        margin-top: 8%;
    }
    #welcome{
        text-align: center;
    }
    .bg{
        background-image: url("images/backlogreg.jpg");
        background-position: center;
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
                    <h4>Forus</h4>
                </div>
                <h1 id = "welcome" class="py-5 mt-3">Welcome</h1>

            <!-- Aca vamos a empeazar a hacer todo lo que viene ser el form-->

                <form class = "mt-3" action = "register.php" method = "POST"> 
				  <div class="mb-3">
                    <label for="usr" class="form-label">Nombre de Usuario</label>
                    <input name='usr' type="text" class="form-control" id="username" aria-describedby="userHelp" placeholder="Escribí aca tu email." >
                    <div id="userHelp" class="form-text">Ingrese su nombre de usuario por el cual sera reconocido en nuestro sitio</div>
                  </div>
                  <div class="mb-3">
                    <label for="Email" class="form-label">Direccion de correo <span style="color:gray">(opcional)</span></label>
                    <input name='Email' type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Escribí aca tu email." >
                    <div id="emailHelp" class="form-text">Nunca compartiremos tu mail con nadie.</div>
                  </div>
                  <div class="mb-3">
                    <label for="pwd" class="form-label">Contraseña</label>
                    <input name='pwd' type="password" class="form-control" id="pwd" placeholder = "Escribí aca tu contraseña.">
                  </div>
                <!-- Aca yo supongo que tenemos que hacer que el boton submit solo funcione cuando password ==  confirmpassword -->
                  <div class="mb-3">
                    <label for="pwdc" class="form-label">Confirmar contraseña</label>
                    <input name='pwdc' type="password" class="form-control" id="pwd" placeholder = "Confirma tu contraseña.">
                  </div>
                  <div class = "d-grid">
                    <button type = "submit" value = "submit" class = "btn mt-2">Registrarse</button>
                  </div>
                <!-- al que le toque esta parte tiene que hacer con js que se ponhga gris el boton de sumbit hasta que el usuario y contrasenia sean iguakles-->
                </form>
                <div class="row text-center">
                    <div class="col-13 mt-3">
                        <span class =>¿Ya tenes una cuenta? <a href= "login.php">Loguéese</a></span>
                    </div>
                </div>      
            </div>
        </div>
    </div>
</body>
</html>