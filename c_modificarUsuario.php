<?php
 $id = $_GET['id'];
 $name= $_GET['name'];
 $lastname= $_GET['lastname'];
 $username= $_GET['username'];
 $email= $_GET['email'];
 $password= $_GET['password'];
 $image= $_GET['image'];
 $status= $_GET['status'];
require("v_modificarUsuario.php");
$mysqli = new mysqli("localhost", "root", "", "blog");


if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$stmt = $mysqli->prepare("UPDATE user SET name=?, lastname=?, username=?, email=?, password=?, image=?, status=? WHERE id=?");
$stmt->bind_param('ssssssii',$name,$lastname,$username,$email,$password,$image,$status,$id);
$stmt->execute();

$mysqli->close();

header("Location: v_verUsuarios.php");
?>