<?php

    $recipenumber=$row['ID'];
    $img_path=isset($row['img_path']) ? 'images/fromusers/'.$row['img_path']:'images/noimage.png';
    $title=$row['Name'];
    $creator=mysqli_fetch_assoc(qq($link, "SELECT UserName FROM users WHERE ID = ".$row['User_ID']))['UserName'];
    $content=$row['Recipe'];
    $views=$row['Views'];


?>

    <div id="container-receta" class='container'>
        <section>
            </a>
            <div class="search-result-item-body">
                <div class="row">
                    <div class="col-sm-9">
                        <a class="image-link" href="recipe.php/?r=<?php echo $recipenumber ; ?>">
                            <img class="image mt-3" src="<?php echo $img_path; ?>" width = "35%">
                        <h4 class="search-result-item-heading">
                            <a href="recipe.php/?r=<?php echo $recipenumber ; ?>"> 
                                <?php echo $title; ?>
                            </a>
                        </h4>
                        <p class="info"><?php echo $creator ;?></p>
                        <p class="recipes"><?php echo $content ?></p>
                    </div>
                    <div class="col-sm-3 text-align-center">
                        <a class="btn btn-primary btn-info btn-sm" href="recipe.php/?r=<?php echo $recipenumber; ?>">Ver más</a>
                        <?php include from['searchphp'].to['starphp'];?>
                        <p class="fs-mini text-muted"><?php echo $views ?><span style="color:gray"> 👁</span></p>
                    </div>
                </div>
            </div>
        </section>
    </div>


