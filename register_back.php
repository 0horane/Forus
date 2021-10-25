<?php





if(!empty($_POST['usr']) && (!empty($_POST['pwd'] && !empty($_POST['pwdc'])))){
	$email = isset($_POST['Email']) ? $_POST['Email'] : "null" ;
	$sqlquery= 'select * from users where users.username = "' . $_POST['usr'] . '"';
	if(!($result = $mysqlinstance->query($sqlquery))){exit($mysqlinstance->error);}
	
	if (mysqli_num_rows($result) == 0) { 
	$mysqlinstance->query("insert into users VALUES(null,'" . $_POST['usr'] . "' , md5('" . $_POST['pwd'] . "'), '". $email ."',now(),null)");
		//echo("account created");
		session_start();
		$_SESSION["user"]=$_POST['usr'];
		$_SESSION["msg"]="account created";
		$sqlquery='select * from users where users.username = "' . $_SESSION["user"] . '"';
		$_SESSION["id"]=mysqli_fetch_assoc($mysqlinstance->query($sqlquery))["id"];
		header('Location: index.php');
		exit;
	} else { 
		echo 'este usuario ya existe';
	   
	}  
		
	
	
}else {
		   echo("no completaste todos los campos");
	   }


?>