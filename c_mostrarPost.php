<?php
error_reporting(0);
session_start();
$user=($_SESSION['username']);
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$id = $_GET['id'];
if(isset($_GET['id'])){
    $resultadoPost = $mysqli->query("SELECT * FROM posts where ID=".$id);
    $rowPost = $resultadoPost->fetch_assoc();
    $resultadoUsuario = $mysqli->query("SELECT * FROM user where ID=".$rowPost['user_id']);
    $rowUsuario = $resultadoUsuario->fetch_assoc();
    $prov = $mysqli->query('SELECT id FROM user WHERE username="'.$user.'"');
while ($row = $prov->fetch_assoc()) {
    $id=$row['id'];
}
    $RowsComentarios = Array();
    $i=0;
    foreach($mysqli->query("SELECT * FROM comments where post_id =".$rowPost['id'])as $comment){
    $RowsComentarios[$i] = $comment;
    $i++;
    };
}
else{
    header('Location: c_PaginaPrincipal.php');
}
$prov = $mysqli->query('SELECT id FROM user WHERE username="'.$user.'"');
while ($row = $prov->fetch_assoc()) {
    $id=$row['id'];
}

if($row['id']==$rowPost['user_id']){
    $edit=true;
}
else{
    $edit=false;
}
$mysqli->close();

include_once 'v_mostrarPost.php';
?>