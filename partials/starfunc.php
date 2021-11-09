<script>

function swapstar (starid){

    $.ajax({
        cache:false,
        url: window.location.pathname.split('/').slice(0,-1).join('/')+"/api/api.php",
        dataType:"json",
        data: {
            qt: 'sf',
            v:  starid
        },
        success:function(result){
            starelement=document.getElementById(starid);
            if (result){
                starelement.innerHTML="★";
            } else {
                starelement.innerHTML="☆";
            }

        }
    });
}

function gencard(id,name,text,author,views,image="",code="",hasfav=false,haseditdel=false){
    str="";
    str+=`<div class="col-md-4 mt-2">
          <div class="card text-center">
            <img src="images/recipe/${img}" alt="Sin Imagen" onerror=this.src="images/noimage.png" style="clip-path: inset(25% 0% 25% 0%);">
            <div class="card-body">
              <h5 class="card-title">${name}</h5>
              <div style="height:200px;overflow:hidden;">
              <p class="card-text">${text}</p>
              </div>
              <?php include 'star.php' ?>
              <a href="recetaParticular.php?r=${id}" class="btn btn-primary mt-1">Ver Mas</a>
              <a href="edit_recipe.php.php?r=${id}" class="btn btn-primary mt-1">Editar</a>
              <a href="edit_recipe.php.php?r=${id}" class="btn btn-warning mt-1">Borrar</a>
              <p>${views} 👁</p>
            </div>
          </div>
        </div>`;

        return str;
}

</script>