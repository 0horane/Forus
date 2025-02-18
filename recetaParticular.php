<?php     
require_once 'database/database.php';
require_once 'partials/session_start.php';
require_once 'partials/starfunc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetario - Receta no encontrada</title>
	<link rel="shortcut icon" href="cutlery.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<style>
    .titulo-comentarios{
        display: flex;
        justify-content: space-between;
    }
    .comentario{
        background-color: white;
        border-radius: 5px;
    }
    .comentarios{
        border: 1px solid  #d5d2d2;
        background-color: #f5f5f5;
        border-radius: 5px;
    }
    .fav-btn{
        height: 45px;
        width: 100px;
        border: none;
        color: white;
        font-size: 25px;
        background-color: rgb(255, 0, 68);
        border-radius: 15px;
        box-shadow: inset 0 0 0 0 #f9e506;
        transition: ease-out 0.3s;
        font-size: 2rem;
        outLine: none;
    }
    .fav-btn:hover{
        box-shadow: inset 100px 0 0 0 #f9e506;
        cursor: pointer;
        color: #000;
    }
    .fav-btn img{
        margin-bottom: 11px;
    }
    .options{
        display: flex;
        justify-content: space-between;
        margin-left: 9%;
    }
	
	#absoluto{
        color: white;
        width: 100%;
        height: 100%;
        top: 32%;
        right: 0;
        position: absolute;
    }
  
  #absoluto{
	text-shadow: -1px 1px 0 #000,
        1px 1px 0 #000,
        1px -1px 0 #000,
        -1px -1px 0 #000;
    }
  
    header{
        width: 100%;
        height: auto;
        position: relative;
        overflow: hidden;
    }
    .bordado{
        border: 1.5px solid #ececec;
        border-radius: 13px;
    }
</style>
<script>
    // $.(document).ready(function(){
    //    $(".fav").click(function(){
    //         $(this).toggleClass("active");
    //    });
    // });
    userid= <?php echo isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>;
</script>
<body>
    <?php include 'partials/header.php'?>
	<header class="mt-0">
				<div style="min-height:100vh;">
				<img id="insImg" class="image" src="asfkh" onerror='this.parentElement.style="background:linear-gradient(217deg, rgba(32,107,38,.8), rgba(32,107,38,0) 70.71%),linear-gradient(127deg, rgba(74,162,39,.8), rgba(74,162,39,0) 70.71%),linear-gradient(336deg, rgba(106,203,39,.8), rgba(106,203,39,0) 70.71%);";//this.style="display:none"' width = "100%" style="object-fit: cover;width:100%;height:100%;">
				</div>
				<div class = "container">
				  <div id = "absoluto" class = "text-center">
					<h1 id="insTitle" class = "display-1 mt-5"></h1>
					<h3 class = "display-4">Escrito por: <strong id="insAuthor"></strong></h3>
				  </div>
				</div>
			</header>
    <div id="container-receta" class='container'>
        <section>
            
            <div class="search-result-item-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-9">
                        <p class="fs-mini text-muted mt-3">Esta receta tiene: <span id="insViews"></span> 👁️ </p>
						<div id="insVid"></div>
                        <hr>
                        <div id="insRecipe"></div> 
                        <br>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
        <?php echo $loggedin ? "<div class='options col-10'>¿Te gusto la receta? ¡No olvides darle a favoritos!<div id='replace'>aa<script>document.getElementById('replace').innerHTML=genstar(${_GET['r']});</script></div></div>" : '';?>
            
                
               
            
        </div>

        <div class="bordado p-3">
            <h4 class="display-6 mt-2">Comentarios</h4>
            <?php if ($loggedin){ ?>
            <form onsubmit="return postComment(event);">
                <div class="form-group p-3">
                    <label for="exampleFormControlTextarea1">Dejá tu comentario!</label>
                    <textarea type="text" class="form-control mt-2" id="exampleFormControlTextarea1" rows=2 maxlength=500 ></textarea>
                    <input type="submit" class="btn btn-primary mt-2" value="Comentar"></button>
                </div>
            </form>
			<?php } ?>
        </div>
		
        <div id='comentarios-section' class="comentarios-section container-fluid">

            
              
        </div>
		<?php include 'partials/footer.php'; ?>
    </div>

    <script>
    function renderComments(){
            callAPI ('sc',<?php echo $_GET['r']; ?>,function( result ) {
                let str="";
                result.forEach(comment=>{
                    //console.log(comment);
                    str+=`<div class="comentarios p-2 mt-4" id="c${comment[0]['ID']}">
                            <div class="titulo-comentarios">
                                <h6>${comment[0]['UserName']}</h6>
                                <h6 class="text-end text-muted fst-italic">Comentado el dia ${comment[0]['Created_At']}</h6>
                            </div>
                            <h3 class="comentario col-12 p-3 text-break">${comment[0]['Text']}</h3>
                            ${ userid==comment[0]['User_ID'] ? 
                            `<button onclick="editComment('${comment[0]['ID']}')" class="btn btn-primary mt-1">Editar</button>`:``
                            }
                        </div>  `;
                });
                document.getElementById('comentarios-section').innerHTML=str;

            });
        }

    callAPI ('rd',<?php echo $_GET['r']; ?>,function( result ) {
        if (result){
            a=result;
            document.getElementById("insTitle").innerText=result[0]['name'];
            document.getElementById("insAuthor").innerText=result[0]['username'];
            document.getElementById("insImg").src="images/recipe/"+result[0]['img_path'];
            document.getElementById("insViews").innerText=result[0]['views'];
            document.getElementById("insRecipe").innerHTML=result[0]['recipe'];
            document.title=result[0]['name']+" - Recetario";
			document.getElementById("insVid").innerHTML=result[0]['code'] ? `<iframe src="//www.youtube-nocookie.com/embed/${result[0]['code']}" style="width:100%;height:500px; border-radius:3px" allowfullscreen="" frameborder="0"></iframe>` : "";
			
            
            renderComments()

            callAPI ('iv',<?php echo $_GET['r']; ?>,function( result ){});
            var str=genstar(<?php echo $_GET['r']; ?>);
			setfavs();


      } else {
        document.getElementById('container-receta').innerHTML="Esta receta no existe";
      }
    });
    

    setfavs();

    function postComment(event){
        event.preventDefault();
		commenttext=document.querySelector('textarea');
		if (commenttext.value){
			$.ajax({
				url: window.location.pathname.split('/').slice(0,-1).join('/')+"/api/api.php",
				dataType:"json",
				method:"post",
				data: {
					qt: 'mc',
					recipe:  <?php echo $_GET['r']; ?>,
					text: commenttext.value
				},
				success: function(result){
					if(result){
						renderComments();
						commenttext.value="";
					}
				}
			});
		}
        return false;
        
    }

    function editComment (commentid){
        comment=document.getElementById('c'+commentid);
        ntxtarea=document.createElement('textarea');
        ntxtarea.value=comment.children[1].innerHTML;
        ntxtarea.id='a'+commentid;
        ntxtarea.className='form-control';
        ntxtarea.maxLength=500;
        bcancel=document.createElement('button');
        bcancel.onclick=function(){renderComments()};
        bcancel.className='btn btn-primary mt-1';
        bcancel.innerHTML='Cancelar';
        bdel=document.createElement('button');
        bdel.onclick=function(){document.getElementById('a'+commentid).value="";saveEdit(commentid)};
        bdel.className='btn btn-warning mt-1';
        bdel.innerHTML='Eliminar';
        comment.replaceChild(ntxtarea, comment.children[1])
        comment.children[2].onclick=function(){saveEdit(commentid)};
        comment.children[2].innerHTML='Guardar';
        comment.appendChild(bcancel);
        comment.appendChild(bdel);

    }

    function saveEdit(commentid){
        comment=document.getElementById('a'+commentid);
        if (comment.value){
            $.ajax({
                url: window.location.pathname.split('/').slice(0,-1).join('/')+"/api/api.php",
                dataType:"json",
                method:"post",
                data: {
                    qt: 'mc',
                    recipe:  <?php echo $_GET['r']; ?>,
                    text: comment.value,
                    v: commentid
                },
                success: function(result){
                    if(result){
                        renderComments();
                    }
                }
            });
        } else {
            callAPI ('dc',commentid,function(result){
                if(result){
                    renderComments();
                }
            });
        }
        
    }


    </script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
</html>