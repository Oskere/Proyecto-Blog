<?php
session_start();
$user=($_SESSION['username']);
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$prov = $mysqli->query('SELECT id FROM user WHERE username="'.$user.'"');
while ($row = $prov->fetch_assoc()) {
    $id=$row['id'];
}

$mysqli->close();

include_once 'v_crearPost.php';
?>