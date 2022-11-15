<?php
$username = $_GET['username'];
$password = $_GET['password'];

$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$resultado = $mysqli->query("select password from user where username ='" .$username . "'");


while ($row = $resultado->fetch_assoc()) {
    $contra=$row['password'];
}

if($password==$contra){
    session_start();
    $_SESSION['username']=$username;
    header("Location: dashboard.php");
}else{
    header("Location: V_LogIn.php");
}

$mysqli->close();
?>