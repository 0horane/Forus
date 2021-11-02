<?php
if (!isset($_SESSION)){
	session_start();
}

$loggedin=isset($_SESSION["user"]) ? 1 : 0; 


if (isset($_SESSION["msg"])){
	?>
    <script>
		
		function showErrMsg(){
			setTimeout(function() { alert('<?php echo $_SESSION["msg"]; ?>'); }, 0.01);
			
		}
		
		window.onload=showErrMsg;
	</script>
    <?php
	$_SESSION["msg"]=null;
}





?>
