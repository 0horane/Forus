<?php 

include '..\database\database.php';

if (isset($_GET['r'])) {
    $id=$_GET['r'];

} else if  (isset($_POST['r'])){
    $id=$_POST['r'];

} else {
    exit();
}
$query="SELECT * FROM recipes WHERE ID =".$id;
$result=mysqli_fetch_assoc(qq($link, $query));
if ($result['Deleted_At']){
    exit();
}

$json=[
    'id'=>$result['ID'],
    'user_id'=>$result['User_ID'],
    'name'=>$result['Name'],
    'recipe'=>$result['Recipe'],
    'views'=>$result['Views'],
    'img_path'=>$result['img_path'],
    'created_at'=>$result['Created_At'],
    

];

echo json_encode($json);
?>