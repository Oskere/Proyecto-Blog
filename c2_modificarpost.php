<?php
$id = $_GET['id'];
$titulo = $_GET['title'];
$resumen = $_GET['brief'];
$contenido = $_GET['content'];
$imagen = $_GET['image'];
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$stmt = $mysqli->prepare("UPDATE posts SET title=?, brief=?, content=?, image=? WHERE id=?");
$stmt->bind_param('ssssi',$titulo,$resumen,$contenido,$imagen,$id);
$stmt->execute();

session_start();
$_SESSION['username'];
header("Location: dashboard.php");

$mysqli->close();

?>