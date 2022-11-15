<?php
error_reporting(0);
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

foreach($mysqli->query("SELECT * FROM user where status=1")as $key=>$user){
    $RowsUsuarios[$key] = $user;
};
foreach($mysqli->query("SELECT * FROM posts")as $key=>$post){
    $RowsPosts[$key] = $post;
};
$mysqli->close();

include_once 'v_PaginaPrincipal.php';
?>