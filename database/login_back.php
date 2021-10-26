<?php
require_once '../partials/session_start.php';



if(!empty($_POST['usr']) && !empty($_POST['pwd'])){
	
	$sqlquery= 'select * from users where users.UserName = "' . $_POST['usr'] . '" OR users.Email = "' . $_POST['usr'] . '"';
	if(!($result = qq($link, $sqlquery))){exit(mysqli_error($link));}
	
	if (mysqli_num_rows($result) == 0) { 
		$_SESSION["msg"]="El nombre de usuario o contraseña es incorrecto";
	} else { 
		if  (md5($_POST['pwd']) == mysqli_fetch_assoc($result)["Password"]){
		//   echo("logged in");
		   session_unset();
		   session_destroy();
		   session_start();
		   $_SESSION["user"]=$_POST['usr'];
		   $_SESSION["msg"]="logged in";
		   $sqlquery='select * from users where users.UserName = "' . $_SESSION["user"] . '"';
		   $_SESSION["id"]=mysqli_fetch_assoc(qq($link, $sqlquery))["ID"];
			header('Location: index.php');
			exit;
	   } else {
			$_SESSION["msg"]="El nombre de usuario o contraseña es incorrecto";
	   }
	}  
		
	
	
}


?>