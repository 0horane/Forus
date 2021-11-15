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

function gencard(id,name,text,author,views,image="",code="",hasfav=true,haseditdel=false){
    str="";
    str+=`  <div class="col-md-4 mt-2">
                <div class="card text-center" style="max-height:550px;">
                    <img src="images/recipe/${image}" alt="Sin Imagen" onerror=this.src="images/noimage.png" style="clip-path: inset(15% 0% 15% 0%);transform: translate(0px, -15%);">
                    <div class="card-body" style="transform: translate(0px, -32%);">
                        <h5 class="card-title">${name}</h5>
                        <div style="transform: translate(0px, -3%,); ">
                            <div style="height:200px;overflow:hidden;">
                                <p class="card-text">${text}</p>
                            </div>
                            <div style="padding:6px;">
                                <a href="recetaParticular.php?r=${id}" class="btn btn-primary mt-1">Ver Mas</a>
                                <a href="edit_recipe.php.php?r=${id}" class="btn btn-primary mt-1">Editar</a>
                                <a href="edit_recipe.php.php?r=${id}" class="btn btn-warning mt-1">Borrar</a>
                            </div>
                            <div style="display:flex;justify-content:space-around;">
                                <span>${views} 👁</span>`+ ( hasfav ? `<?php include 'star.php' ?>` :"" )+`
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
            
        return str;
}

</script>