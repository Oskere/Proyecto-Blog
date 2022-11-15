<?php
require('c_mostrarPosts.php');
if($kind != 2){
    header("Location: c_PaginaPrincipal.php");
}
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
    <b>Tabla de posts</b>
    <br><br>
	</div>
    <body>
<html>
<?php
echo '<table>';
echo ('<tr><td>ID</td><td>Titulo</td><td>Resumen</td><td>Imagen</td><td>Fecha de creación</td><td>Estatus</td><td>ID de usuario</td><td></td></tr>');
while ($row = $resultado->fetch_assoc()) {
    echo('<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td>'.$row['brief'].'</td><td><img style="width:75px; height:75px;" src="'.$row['image'].'"></td><td>'.$row['created_at'].'</td><td>'.$row['status'].'</td><td>'.$row['user_id'].'</td><td><a href="eliminarPost.php?id='.$row['id'].'">Eliminar post</a></td></tr>');    
}
echo "</table>";
?>