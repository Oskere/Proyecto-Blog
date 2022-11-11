<?php
$name= $_GET['name'];
$lastname= $_GET['lastname'];
$username= $_GET['username'];
$email= $_GET['email'];
$password= $_GET['password'];
$image= $_GET['image'];
$status= 1;
$kind= 1;
$date = date('Y-m-d H:i:s');
$timestamp = strtotime($date);


//Conexion a la BBDD
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Sentencia para introducir a un usuario nuevo en la BBDD
echo "fecha: " . $date;
$stmt = $mysqli->prepare("INSERT INTO user (name,lastname,username,email,password,image,status,kind,created_at) VALUES (?, ?, ?,?,?,?,?,?,?)");
$stmt->bind_param('ssssssiis',$name,$lastname,$username,$email,$password,$image,$status,$kind,$date);
$ok=$stmt->execute();

//Si se ha introducido correctamente devolvera al login si no te devolvera a crear la cuenta
if ($ok==1) {
    session_start();
    $_SESSION['username']=$username;
    header("Location: dashboard.php");
} else {
    header("Location: v_signin.php");
}
$mysqli->close();

?>