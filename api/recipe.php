<?php 

include 'database\database.php';

if (isset($_GET['id'])) {
    $id=$_GET['id'];
} else if  (isset($_POST['id'])){
    $id=$_POST['id'];
} else {
    exit()
}
$query="SELECT * FROM recipes WHERE ID =".$id;
$result=mysqli_fetch_assoc(qq($link, $query));
if ($result['Deleted_At']){
    exit();
}
$json=[
    'id'=$result['ID'],
    'user_id'=$result['User_ID'],
    'name'=$result['Name'],
    'id'=$result['ID'],
    'recipe'=$result['Recipe'],
    'views'=$result['Views'],
    'img_path'=$result['img_path'],
    'created_at'=$result['img_path'],
    

]

echo json_encode($json);
?>