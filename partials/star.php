<?php
	if($loggedin){
		if (mysqli_num_rows( qq($link, "select * from favorites where User_id = '".$_SESSION['id']."' AND Recipes_id = ".$recipenumber ))>0){
			echo "<button class='fullstar' id='".$recipenumber."' onclick='function()'>★</button>"; 
			
		} else {
			☆
		}
		
		?><?php
	}
	
?>