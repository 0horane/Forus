<?php 

//qt es query type
//v: buscar video por id
//r: buscar receta por id
//vl: listar ids de videos con limit puesto en string con formato:  "idInicial,cantidad"
//rl: listar ids de recetas con limit puesto en string con formato:  "idInicial,cantidad"
//rb: NO IMPLEMENTADO api busqueda de recetas
//vb: NO IMPLEMENTADO api busqueda de videos

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
}
echo json_encode($json);
?>