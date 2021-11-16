<?php
require 'partials\session_start.php';

if (isset($_SESSION["id"])){
	$_SESSION["msg"]="Ya estas logeado";
	$_SESSION["icon"]="info";
	header('Location: index.php');
	exit;
}

if(!empty($_POST['usr']) && !empty($_POST['pwd'])){
	
	$sqlquery= 'select * from users where users.UserName = "' . mysqli_real_escape_string($link, htmlspecialchars($_POST['usr'])) . '" OR users.Email = "' . mysqli_real_escape_string($link, htmlspecialchars($_POST['usr'])) . '"';
	if(!($result = qq($link, $sqlquery))){exit(mysqli_error($link));}
	
	if (mysqli_num_rows($result) == 0) { 
		$_SESSION["msg"]="El nombre de usuario o contraseña es incorrecto";
		$_SESSION["icon"]="error";
	} else { 
		if  (md5($_POST['pwd']) == mysqli_fetch_assoc($result)["Password"]){
		//   echo("logged in");
		   session_unset();
		   session_destroy();
		   session_start();
		   $_SESSION["user"]=$_POST['usr'];
		   $_SESSION["msg"]="logged in";
		   $_SESSION["icon"]="success";
		   $sqlquery='select * from users where users.UserName = "' . mysqli_real_escape_string($link, $_SESSION["user"]) . '"';
		   $_SESSION["id"]=mysqli_fetch_assoc(qq($link, $sqlquery))["ID"];
			header('Location: index.php');
			exit;
	   } else {
			$_SESSION["msg"]="El nombre de usuario o contraseña es incorrecto"; // El usuario y/o contraseña esta mal
			$_SESSION["icon"]="error";
		}
	}  
		
	
	
} else {
	$_SESSION["msg"]="nombre de usuario o contraseÑA no ingresado";
	$_SESSION["icon"]="error";
}

require 'partials\session_start.php';
?>