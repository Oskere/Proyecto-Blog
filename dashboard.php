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
            background-image: url('pato3.png');
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
<a style="color:white;" href="c_PaginaPrincipal.php"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
</svg></a>
	<div class="logout">
    	<a href="c_logout.php">Logout</a>
    </div>
    <?php
    while($raw = $result ->fetch_assoc()){
        echo '<div class="title">';
        echo '<h1 class="titulo">'.$raw['name'].'</h1>';
        echo '<h2 class="subtitulo">'.$raw['lastname'].'</h2>';
        echo '<div id="dpfp"><img id="pfp" src="'.$raw['image'].'"></img></div>';
        if($raw['kind']==2)
    echo '<table id="posts"><tr><td><a href="v_mostrarPosts.php">Posts</a></td><td><a href="v_verUsuarios.php">Usuarios</a></td></tr></table>';
    }
    echo '<div style="margin:auto; width:100px; background-color: rgba(255, 255, 255, 0.527);; border:1px solid black; text-align:center;"><a href="c_crearPost.php">Crear Post</a></div>';
    echo '</div>';
    echo '<table id="posts">';
    echo ('<tr><td>ID</td><td>Titulo</td><td>Resumen</td><td>Fecha de creación</td><td>Estado</td><td colspan="3">Editar</td></tr>');
    while ($row = $resultado->fetch_assoc()) {
        echo('<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td>'.$row['brief'].'</td><td>'.$row['created_at'].'</td><td>'.$row['status'].'</td><td><a href="c_modificarpost.php?id='.$row['id'].'&title='.$row['title'].'&brief='.$row['brief'].'&content='.$row['content'].'&image='.$row['image'].'">Modificar</a></td><td><a href="eliminarPost.php?id='.$row['id'].'">Eliminar</a></td><td><a href="statuspost.php?id='.$row['id'].'&status='.$row['status'].'">Cambiar Status</a></td></tr>');
    
    }
    
    ?>

    
</body>
</html>