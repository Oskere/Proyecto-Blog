<?php

$id = $_GET['id'];
$status = $_GET['status'];

$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if($status == 1){
    $resultado = $mysqli->query('UPDATE posts SET status=0 WHERE id='.$id);
} else {
    $resultado = $mysqli->query('UPDATE posts SET status=1 WHERE id='.$id);
}

session_start();
$_SESSION['username'];

$mysqli->close();

header("Location: dashboard.php");
?>