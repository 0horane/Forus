<?php
require 'partials\session_start.php';

if (isset($_SESSION["id"])){
	$_SESSION["msg"]="Ya estas logeado";
	header('Location: index.php');
	exit;
}


if(!empty($_POST['usr']) && !empty($_POST['pwd']) && !empty($_POST['pwdc']) && !empty($_POST['Email'])){
		if ($_POST['pwd']==$_POST['pwdc']){

			$sqlquery= 'select * from users where users.UserName = "' . $_POST['usr'] . '"';
			if(!($result = qq($link, $sqlquery))){exit(mysqli_error($link));}
			
			if (mysqli_num_rows($result) == 0) { 
				$sqlquery="insert into users VALUES(null,'" . $_POST['usr'] . "' , md5('" . $_POST['pwd'] . "'), '". $_POST['Email'] ."',now(),null)";

				if(!(qq($link, $sqlquery))){exit(mysqli_error($link));}
				//echo("account created");
				session_unset();
				session_destroy();
				session_start();

				$_SESSION["user"]=$_POST['usr'];
				$_SESSION["msg"]="account created";
				$sqlquery='select * from users where users.UserName = "' . $_SESSION["user"] . '"';
				$_SESSION["id"]=mysqli_fetch_assoc(qq($link, $sqlquery))["ID"];
				header('Location: index.php');
				exit;
			} else { 
				$_SESSION["msg"]= 'este usuario ya existe';
			   
			}  
		
		} else {
			$_SESSION["msg"]= 'SSon diferentes las contraseñas';
		}
	
} else {
	if(!empty($_POST['usr']) || !empty($_POST['pwd']) || !empty($_POST['Email']) || !empty($_POST['pwdc'])){
		   echo("no completaste todos los campos");
	   }}
	   
require 'partials\session_start.php';

?>