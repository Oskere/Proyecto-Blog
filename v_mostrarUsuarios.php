<?php
require('c_mostrarUsuarios.php')
?>
<html>
<head> 
<style>
        body{
        background-color:lightgray;
        font-family:helvetica;
        }
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
           margin:auto;
           width:80%;
        }
        td{
        min-width:30px;
        text-align: center;
        }
    </style>
    </head>
    <body>
    <div style="width:140px; height:20px; border:1px solid black; text-align:center; margin:auto; margin-bottom:40px;">
    <b>Tabla de usuarios</b>
    <br><br>
	</div>
    <body>
<html>
<?php
echo '<table>';
echo ('<tr><td>ID</td><td>Nombre</td><td>Apellido</td><td>Nombre de usuario</td><td>Correo electrónico</td><td>contraseña</td><td>Imagen</td><td>Estatus</td><td>Tipo de usuario</td><td>Fecha de creación</td></tr>');
while ($row = $resultado->fetch_assoc()) {
    echo('<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['lastname'].'</td><td>'.$row['username'].'</td><td>'.$row['email'].'</td><td>'.$row['password'].'</td><td><img style="width:100px;height:75px;" src="'.$row['image'].'"></td><td>'.$row['status'].'</td><td>'.$row['kind'].'</td><td>'.$row['created_at'].'</td></tr>');    
    
}
echo "</table>";
?>