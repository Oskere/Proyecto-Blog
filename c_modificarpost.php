<?php
$id = $_GET['id'];
$titulo = $_GET['title'];
$resumen = $_GET['brief'];
$contenido = $_GET['content'];
$imagen = $_GET['image'];
require("v_modificarpost.php");
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->close();

?>