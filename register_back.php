<?php





if(!empty($_POST['usr']) && !empty($_POST['pwd']) && !empty($_POST['pwdc']) && !empty($_POST['Email'])){

	$sqlquery= 'select * from users where users.UserName = "' . $_POST['usr'] . '"';
	if(!($result = mysqli_query($link, $sqlquery))){exit(mysqli_error($link));}
	
	if (mysqli_num_rows($result) == 0) { 
		$sqlquery="insert into users VALUES(null,'" . $_POST['usr'] . "' , md5('" . $_POST['pwd'] . "'), '". $_POST['Email'] ."',now(),null)";

		if(!(mysqli_query($link, $sqlquery))){exit(mysqli_error($link));}
		//echo("account created");
		session_start();

		$_SESSION["user"]=$_POST['usr'];
		$_SESSION["msg"]="account created";
		$sqlquery='select * from users where users.UserName = "' . $_SESSION["user"] . '"';
		$_SESSION["id"]=mysqli_fetch_assoc(mysqli_query($link, $sqlquery))["id"];
		header('Location: index.php');
		exit;
	} else { 
		echo 'este usuario ya existe';
	   
	}  
		
	
	
}else {
	if(!empty($_POST['usr']) || !empty($_POST['pwd']) || !empty($_POST['Email']) || !empty($_POST['pwdc'])){
		   echo("no completaste todos los campos");
	   }}


?>