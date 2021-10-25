<?php




if(!empty($_POST['usr']) && !empty($_POST['pwd'])){
	
	$sqlquery= 'select * from users where users.UserName = "' . $_POST['usr'] . '" OR users.Email = "' . $_POST['usr'] . '"';
	if(!($result = $mysqlinstance->query($sqlquery))){exit($mysqlinstance->error);}
	
	if (mysqli_num_rows($result) == 0) { 
		echo("El nombre de usuario o contraseña es incorrecto");
	} else { 
		if  (md5($_POST['pwd']) == mysqli_fetch_assoc($result)["password"]){
		//   echo("logged in");
		   session_start();
		   $_SESSION["user"]=$_POST['usr'];
		   $_SESSION["msg"]="logged in";
		   $sqlquery='select * from users where users.username = "' . $_SESSION["user"] . '"';
		   $_SESSION["id"]=mysqli_fetch_assoc($mysqlinstance->query($sqlquery))["id"];
			header('Location: index.php');
			exit;
	   } else {
		   echo("El nombre de usuario o contraseña es incorrecto");
	   }
	}  
		
	
	
}


?>