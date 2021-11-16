<script>

function isfav (starid, swapstar=false){
    //console.log(starid);
    $.ajax({
        cache:false,
        url: window.location.pathname.split('/').slice(0,-1).join('/')+"/api/api.php",
        dataType:"json",
        data: {
            qt: swapstar ? 'sf' : 'if',
            v:  starid.slice(1)
        },
        success:function(result){
            starelement=document.getElementById(starid);
            if (result){
                starelement.innerHTML="★";
            } else {
                starelement.innerHTML="☆";
            }
            return(result);
        }
    });
    
}

function setfavs(){
    starlist=document.getElementsByClassName("fstar");
    for (x=0;x<starlist.length;x++) {
        //console.log(starlist[x].id);
        isfav(starlist[x].id);
    }

}

function genstar(id){
    str=`<button id="s${id}" class="fstar" style="color:gold;font-size:30;border:none;background-color:transparent;transform: translate(0px, -28%);" onclick="isfav('s${id}', true);">hfg</button>`

     
    

    return(str);
}


function gencard(id,name,text,author,views,image="",code="",hasfav=true,haseditdel=false){
    str="";
    str+=`  <div class="col-md-4 mt-2">
                <div class="card text-center" style="max-height:550px;">
                    <img src="images/recipe/${image}" alt="Sin Imagen" onerror=this.src="images/noimage.png" style="clip-path: inset(15% 0% 15% 0%);transform: translate(0px, -15%);">
                    <div class="card-body container" style="transform: translate(0px, -32%);">
                        <div class="row" style="height:30px;display:flex;align-items:center;">
                        <h5 class="card-title" style="transform: translate(0px, 5%);text-align:center;width=100%">${name}</h5>
                        </div>
                        <div class="row">
                        <div style="transform: translate(0px, -3%,); ">
                            <div style="height:200px;overflow:hidden;">
                                <p class="card-text">${text}</p>
                            </div>
                            <div style="padding:6px;">
                                <a href="recetaParticular.php?r=${id}" class="btn btn-primary mt-1">Ver Mas</a>
                                ${ haseditdel ? `<a href="edit_recipe.php.php?r=${id}" class="btn btn-primary mt-1">Editar</a>
                                <a href="edit_recipe.php.php?r=${id}" class="btn btn-warning mt-1">Borrar</a>` : ""}
                            </div>
                            <div style="display:flex;justify-content:space-around;">
                                <span>${views} 👁</span>`+ ( hasfav ? genstar(id) :"" )+`
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>`;
            
        return str;
}


</script>