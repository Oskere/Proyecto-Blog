<?php

$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if(isset($_GET['id']))
    $mysqli->query('DELETE FROM comments WHERE id="'.$_GET['id'].'"');

header("Location: c_mostrarPost.php?id=".$_GET['idPost']);
$mysqli->close();
?>