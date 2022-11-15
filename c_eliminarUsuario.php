<?php
$id = $_GET['id'];

$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$pResultado=$mysqli->query('SELECT id FROM posts WHERE user_id="'.$id.'"');
    while ($row = $pResultado->fetch_assoc()) {
        $mysqli->query('DELETE FROM comments WHERE post_id="'.$row['id'].'"');
    }

$resultado = $mysqli->query('DELETE FROM user WHERE id="'.$id.'"');


$mysqli->close();

session_destroy();

header("Location: c_PaginaPrincipal.php");

?>