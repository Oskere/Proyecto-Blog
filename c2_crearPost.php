<?php
session_start();
//$id_post=rand(4,99);
$user=($_SESSION['username']);
$titulo = $_GET['title'];
$resumen = $_GET['brief'];
$contenido = $_GET['content'];
$imagen = $_GET['image'];
$date = date('Y-m-d H:i:s');
$status=1;
$timestamp = strtotime($date);
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$prov = $mysqli->query('SELECT id FROM user WHERE username="'.$user.'"');
while ($row = $prov->fetch_assoc()) {
    $id=$row['id'];
}

$stmt = $mysqli->prepare("INSERT INTO posts (id,title,brief,content,image,created_at,status,user_id) VALUES (?,?,?,?,?,?,?,?)");
$stmt->bind_param('isssssii',$id_post,$titulo,$resumen,$contenido,$imagen,$date,$status,$id);
$ok=$stmt->execute();
$mysqli->close();
header("Location: c_PaginaPrincipal.php");
?>