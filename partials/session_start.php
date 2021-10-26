<?php

session_start();

$loggedin=isset($_SESSION["user"]) ? 1 : 0; 


if (isset($_SESSION["msg"])){
	?>
    <script>
    document.addEventListener("DOMContentLoaded", function(){
        alert('<?php echo $_SESSION["msg"]; ?>');
    });
    </script>
    <?php
	$_SESSION["msg"]=null;
}





?>
