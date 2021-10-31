<?php

include '..\database\database.php';

print_r(mysqli_fetch_array(qq($link,"Select User_ID as dog, Recipes_ID as dog FROM favorites")));



?>