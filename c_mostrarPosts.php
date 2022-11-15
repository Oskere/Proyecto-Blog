<?php
session_start();
$user=($_SESSION['username']);
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$resultado = $mysqli->query("SELECT * FROM `posts` WHERE status=1");

$prov = $mysqli->query('SELECT kind FROM user WHERE username="'.$user.'"');
while ($row = $prov->fetch_assoc()) {
    $kind=$row['kind'];
}

$mysqli->close();
?>