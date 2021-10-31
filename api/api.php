<?php 
//esta seria el api abierto, que se puede acceder por cualquier usuario o pagina (principalmente la nuestra)

//'qt' es query type. esto puede ser:
//v: buscar video por id (numerico). Tambien se puede por listas de id, como '1,3,4,5' (esto no iria dentro de comillas)
//r: buscar receta por id
//vl: listar ids de videos con limit puesto en string con formato:  "idInicial,cantidad"
//rl: listar ids de recetas con limit puesto en string con formato:  "idInicial,cantidad"
//sr: EN PROCESO ordena todas LAS recetas segun condiciones. 'v' van dos letras sepaardas: a,c,f,v,f para sortear por orden alfabetico, cronologico, por favoritos, vistas o popularidad; y la segunda: a,d siendo ascendiente o descendiente. devuelve una lista con todos los ids en orden.  
//vb: NO IMPLEMENTADO api busqueda de recetas
//vb: NO IMPLEMENTADO api busqueda de videos
//cf: cuenta los favoritos de una receta


//'v' es el valor que se ingresa como query (id o limit o numeros separados por coma o lo que sea). 
//Todas las variables se pueden mandar por post o get. 

//ejemplos
//http://localhost/Tarea/proyecto/Forus/api/api.php?qt=rl&v=2,5
/////////devuelve una lista con strings numericos mostrando las 5 recetas sin borrar despues de la que tiene id 2.
//http://localhost/Tarea/proyecto/Forus/api/api.php?qt=r&v=2,5,8,3
/////////devuelve una lista con arrays asociativos para las recetas 2, 3 y 5. La ocho no la devuelve porque esta borrada. Para acceder a la 8 se deberá usar el api privada desde la cuenta correspondiente
//http://localhost/Tarea/proyecto/Forus/api/api.php?qt=cf&v=3
/////////devuelve un array ["2","1"] con el primer numero siendo el total de favoritos de la receta 3 y el segundo siendo solo los de la ultima semana. Este segundo se puede usar para elejir los mas populares. 
//http://localhost/Tarea/proyecto/Forus/api/api.php?qt=sr&v=fd
/////////devuelve un array con los ids de todos las recetas, en orden de cantidad de favoritos decendiente




if (isset($_GET['qt'])) {
    $qt=$_GET['qt'];
} else if  (isset($_POST['qt'])){
    $qt=$_POST['qt'];
} else {
    exit('{"error":"no query type (qt) on get or post"}');
}

if (isset($_GET['v'])) {
    $value=$_GET['v'];

} else if  (isset($_POST['v'])){
    $value=$_POST['v'];

} else if ($qt=='v' ||$qt=='r') {
    $value='0,25';
} else if ($qt=='sr') {
    $value='aa';
} else {
    exit('{"error":"no query value"}');
}


include '..\database\database.php';
$json=[];

switch($qt){
    case 'v':
        if (is_numeric($value)){
            $query="SELECT * FROM videos WHERE ID =".$value." AND Deleted_At IS NULL";
        }
        else {
            
            $idarr=explode (",", $value);
            $query="SELECT * FROM videos WHERE ( 0 ";
            foreach ($idarr as $subid){
                $query.="OR ID=".$subid." ";
            }
            $query.=" ) AND Deleted_At IS NULL";
        }
        $result=qq($link, $query);
        while ($row=mysqli_fetch_assoc($result)){
            array_push($json, [
                'id'=>$row['ID'],
                'user_id'=>$row['User_ID'],
                'author'=>$row['Author'],
                'name'=>$row['Name'],
                'code'=>$row['Code'],
                'created_at'=>$row['Created_At'],
            ]);
        }
        break;


    case 'r':
        if (is_numeric($value)){
            $query="SELECT * FROM recipes WHERE ID =".$value." AND Deleted_At IS NULL";
        }
        else {
            
            $idarr=explode (",", $value);
            $query="SELECT * FROM recipes WHERE ( 0 ";
            foreach ($idarr as $subid){
                $query.="OR ID=".$subid." ";
            }
            $query.=" ) AND Deleted_At IS NULL";
        }
        $result=qq($link, $query);
        while ($row=mysqli_fetch_assoc($result)){
            array_push($json, [
                'id'=>$row['ID'],
                'user_id'=>$row['User_ID'],
                'name'=>$row['Name'],
                'recipe'=>$row['Recipe'],
                'views'=>$row['Views'],
                'img_path'=>$row['img_path'],
                'created_at'=>$row['Created_At'],
            ]);
        }
        break;

    
    case 'rl':
        if (is_numeric($value)){
            $query="SELECT * FROM recipes WHERE ID >".$value." AND Deleted_At IS NULL LIMIT 0,25";
        }
        else {
            $idarr=explode (",", $value);
            $query="SELECT * FROM recipes WHERE ID >".$idarr[0]." AND Deleted_At IS NULL LIMIT 0,".$idarr[1];
        }   
        $result=qq($link, $query);
        while ($row=mysqli_fetch_assoc($result)){
            array_push($json,$row['ID']);
        }
        break;



    case 'vl':
        if (is_numeric($value)){
            $query="SELECT * FROM videos WHERE ID >".$value." AND Deleted_At IS NULL LIMIT 0,25";
        }
        else {
            $idarr=explode (",", $value);
            $query="SELECT * FROM videos WHERE ID >".$idarr[0]." AND Deleted_At IS NULL LIMIT 0,".$idarr[1];
        }   
        $result=qq($link, $query);
        while ($row=mysqli_fetch_assoc($result)){
            array_push($json,$row['ID']);
        }
        break;

    case 'cf':
        $query="SELECT COUNT('User_ID') as tf FROM favorites WHERE Recipes_ID=".$value;
        $result1=mysqli_fetch_assoc(qq($link, $query))['tf'];
        $query="SELECT COUNT('User_ID') as rf FROM favorites WHERE Recipes_ID=".$value." AND Created_At + INTERVAL 7 DAY > NOW()";
        $result2=mysqli_fetch_assoc(qq($link, $query))['rf'];
        array_push($json,$result1,$result2);
        
        break;

    case 'sr':
        $orderarr = str_split($value);
        $query="SELECT recipes.*, COUNT(favorites.Recipes_ID) as favcount FROM recipes LEFT JOIN favorites ON favorites.Recipes_ID = recipes.ID WHERE Deleted_At IS NULL GROUP BY recipes.ID ORDER BY ";
        switch ($orderarr[0]){
            case 'a':
                $query.="Name";
                break;
            case 'c':
                $query.="Created_At";
                break;
            case 'f':
                $query.="favcount";
                break;
            case 'v':
                $query.="Views";
                break;
            case 'p':
                $query="SELECT recipes.*, COUNT(favorites.Recipes_ID) as popularity FROM recipes LEFT JOIN favorites ON favorites.Recipes_ID = recipes.ID AND favorites.Created_At + INTERVAL 7 DAY > NOW() WHERE Deleted_At IS NULL GROUP BY recipes.ID ORDER BY popularity";
                break;
            }
            switch ($orderarr[1]){
                case 'a':
                    $query.=" ASC";
                    break;
                case 'd':
                    $query.=" DESC";
                    break;
            }
        $result=qq($link, $query);
        while ($row=mysqli_fetch_assoc($result)){
            array_push($json,$row['ID']);
        }
        break;

        
}
echo json_encode($json);
?>