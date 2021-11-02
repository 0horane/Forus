<?php
    require_once 'database/database.php';
    require_once 'partials/session_start.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetario</title>
    <link rel="shortcut icon" href="favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<style>
		.row{
			background-color: red;
		}
		.info-search{
            margin-top: 15px;
			display: flex;
			justify-content: end;
		}
        #arriba{
            padding:20px;
            background:#024959;
            font-size:20px;
            color:#fff;
            cursor:pointer;
            position:fixed;
            bottom:20px;
            right:20px;
        }
	</style>
</head>
<body>
    <?php include 'partials/header.php' ?>
<?php
    if (isset($_GET['q'])){
        $q=$_GET['q'];
        $perpage=2;
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        } else {$page = 0;}



        $sqlquery=" FROM recipes WHERE Name LIKE '%".$q."%' OR Recipe LIKE '%".$q."%' ";
        $qlen=ceil(mysqli_fetch_assoc(qq($link, "SELECT COUNT(ID) AS cOC".$sqlquery))['cOC']/$perpage);
        qq($link, "SELECT *".$sqlquery."limit " . $page*$perpage . ",". $perpage);


        if ($page >=$qlen-5){
            $startpage=$qlen-10;
            $endpage=$qlen;
            
        } else if ($page>=5){
            $startpage=$page-5;
            $endpage=$page+5;
        
        } else{
            $startpage=0;
            $endpage=10;
            
        }
        if ($startpage<0){
            $startpage=0;
        }
        
        $temp=$page-1;
        $spchar=strpos($_SERVER['REQUEST_URI'],"?") ? '&' : '?';
        echo "<a class= 'text-center' href='".$_SERVER['REQUEST_URI'].$spchar."page=0'><<</a><span> </span>";
        echo $page!=0 ? "<a href='".$_SERVER['REQUEST_URI'].$spchar."page=". $temp ."'><</a><span> </span>" : '' ;
        for ($i=$startpage;$i<$endpage;$i++){
            echo "<a href='".$_SERVER['REQUEST_URI'].$spchar."page=${i}'>${i}</a><span> </span> " ;
        }
        $temp=$page+1;
        $temp2=$qlen-1;
        echo $page!=$temp2 ? "<a href='".$_SERVER['REQUEST_URI'].$spchar."page=". $temp ."'>></a><span> </span>" : '';
        echo "<a href='".$_SERVER['REQUEST_URI'].$spchar."page=" . $temp2 . "'>>></a><span> </span>";

        $rows=qq($link, "SELECT *".$sqlquery."limit " . $page*$perpage . ",". $perpage);
?>

        <?php

        while ($row=mysqli_fetch_assoc($rows)){
        //	print_r($row);
            ?>
            <button id="arriba" href="search.php"class="btn btn-primary">asd</button>
            <div class="container">
				<div class="row justify-content-center mt-5 rounded-3">
					<a class="image-link p-2 col-4" href="recipe.php/?r=<?php echo $row['ID']; ?>"><img class="image" src="<?php echo isset($row['img_path']) ? 'images/fromusers/'.$row['img']:'images/noimage.png' ?>" width="100%"></a>
					<div class="col-8">
						<div style="justify-content:space-between" class="d-flex">
							<h4 style="display:inline-block">
								<a href="recipe.php/?r=<?php echo $row['ID']; ?>">
								 <?php echo $row['Name']?>
								</a>
							</h4>
						
							<span class="text-end text-muted"><?php echo $row['Created_At'] ?></span>
						</div>
						<p class="info text-muted">
                            Creado por:
							<?php
							echo mysqli_fetch_assoc(qq($link, "SELECT UserName FROM users WHERE ID = ".$row['User_ID']))['UserName'];
							?>                            
						</p>
						<p class="description">
							<?php echo $row['Recipe'];  ?>
						</p>
					</div>
				</div>
				<div class="info-search">
					<p><?php echo $row['Views'] ?><span style="color:gray"> 👁</span></p>
						<?php mysqli_fetch_assoc(qq($link, "SELECT COUNT(User_id) AS cOC FROM favorites WHERE Recipes_id = ".$row['ID']))['cOC'] ?> 
						<span class="mx-2" style="color:gold">☆</span> <!-- Queda editar esto -->
					</p>
					<a class="btn btn-primary btn-info btn-sm" href="recipe.php/?r=<?php echo $row['ID']; ?>">Ver más</a>
				</div>
				<br>
			</div>
  <?php } ?>








<?php } else { ?>


<h1>
     esto tiene que quedar como la pagina principal de google (≧∇≦)ﾉ
</h1>



<?php } ?>

</body>