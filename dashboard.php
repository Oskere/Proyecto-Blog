<?php 
require 'c_dashboard.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url('pato3.jpg');
            background-size: cover;
        }
        .title{
            margin: auto;
        }
        .titulo{
            text-align: center;
        }
        .subtitulo{
            text-align: center;
        }
        #dpfp{
            display: flex;
            justify-content: center;
        }
        #pfp{
            height:250px;
            width:250px;
            border-radius: 50%;
        }
        #posts{
            margin:auto;
             background-color: rgba(255, 255, 255, 0.527);
            text-align:center;
            border: 1px solid black;
            box-sizing:border-box;
        }
        td{
            border: 1px solid black;
            box-sizing:border-box;
        }
        .logout{
            position: absolute;
            top: 20px;
            right: 40px;
        }
        
    </style>
</head>
<body>
	<div class="logout">
    	<a href="c_logout.php">Logout</a>
    </div>
    <?php
    while($raw = $result ->fetch_assoc()){
        echo '<div class="title">';
        echo '<h1 class="titulo">'.$raw['name'].'</h1>';
        echo '<h2 class="subtitulo">'.$raw['lastname'].'</h2>';
        echo '<div id="dpfp"><img id="pfp" src="'.$raw['image'].'"></img></div>';
    }
    echo '</div>';
    echo '<table id="posts">';
    echo ('<tr><td>ID</td><td>Titulo</td><td>Resumen</td><td>Fecha de creación</td><td>Estado</td><td colspan="3">Editar</td></tr>');
    while ($row = $resultado->fetch_assoc()) {
        echo('<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td>'.$row['brief'].'</td><td>'.$row['created_at'].'</td><td>'.$row['status'].'</td><td><a href="c_modificarpost.php?id='.$row['id'].'&title='.$row['title'].'&brief='.$row['brief'].'&content='.$row['content'].'&image='.$row['image'].'">Modificar</a></td><td><a href="eliminarPost.php?id='.$row['id'].'">Eliminar</a></td><td><a href="statuspost.php?id='.$row['id'].'&status='.$row['status'].'">Cambiar Status</a></td></tr>');
    
    }
    echo "</table>";
    ?>

</body>
</html>