<?php
require('c_mostrarComentarios.php')
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
    <div style="width:160px; height:20px; border:1px solid black; text-align:center; margin:auto; margin-bottom:40px;">
    <b>Tabla de comentarios</b>
    <br><br>
	</div>
    <body>
<html>
<?php
echo '<table>';
echo ('<tr><td>ID</td><td>Titulo</td><td>Resumen</td><td>Contenido</td><td>Imagen</td><td>Fecha de creación</td><td>Estatus</td><td>ID de usuario</td></tr>');
while ($row = $resultado->fetch_assoc()) {
    echo('<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td>'.$row['brief'].'</td><td>'.$row['content'].'</td><td><img style="width:100px; height:75px;" src="'.$row['image'].'"></td><td>'.$row['created_at'].'</td><td>'.$row['status'].'</td><td>'.$row['user_id'].'</td></tr>');    
    
}
echo "</table>";
?>