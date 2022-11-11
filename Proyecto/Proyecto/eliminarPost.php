<?php
$id = $_GET['id'];

$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$resultado = $mysqli->query('DELETE FROM posts WHERE id="'.$id.'"');

header("Location: dashboard.php");
$mysqli->close();

?>