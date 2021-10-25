<?php
    define('DB_SERVER',"localhost");
    define('DB_USER',"root");
    define('DB_PASS',"");
    define('DB_NAME',"pasteleria");
    
    $conexionEnlace = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if(!$conexionEnlace){
        echo "Error en con la conexion a MySQL " . "<br>";
        echo "Error de depuracion " . mysqli_error() . "<br>";
        echo "Errno de depuracion " . mysqli_errno() . "<br>";
        exit();
    }
?>