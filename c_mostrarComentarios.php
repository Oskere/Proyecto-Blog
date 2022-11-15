<?php
$mysqli = new mysqli("localhost", "root", "", "comments");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$resultado = $mysqli->query("SELECT * FROM `posts`");


$mysqli->close();

?>