<?php
require('c_PaginaPrincipal.php');
session_start();
?>
<html>
<head>
	<style>
	body{
	margin:0;
    background-image:url("https://live.staticflickr.com/7351/15924847453_f5a25693e0_b.jpg");
    background-repeat: no-repeat;
    background-size: cover;	
}
        #dWrapper{
            height:100vh;
            width:cover;
            
            
        }
        #hTitulo{
        font-family: arial;
        text-shadow: 1px 1px #D3D3D3;
        color:white;
        font-size: 60px;
        }
        #dContent{
        display:flex;
        margin:auto;
        text-align:center;
        width:fit-content;
        height:95vh;
        background-size:cover;
        background-color:rgb(28,28,28,0.90);
        box-sizing:border-box;
         border:3px solid rgb(0, 143, 57);
        }
        #dPost{
        
        }
        #dTitulo{
            margin:auto;
            width: fit-content;
        }
        table,th,td{
            border:2px solid darkgrey;
            color:white;
            height: fit-content;
        }
        a{
            text-decoration: none;
            color: wheat;
        }
    </style>
</head>
<body>
	<div id="dWrapper">
        <a style="color:white;" href="<?php if($_SESSION['username']==null){
            echo 'V_LogIn.php';
        }else{
            echo 'dashboard.php';
        } ?>"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></a>
    <div id="dTitulo"><h1 id="hTitulo">Blog sobre patos</h1></div>
	<div id="dContent">
	
	
	<table>
	<?php 
    
    echo ('<tr><td>Usuario</td><td>Imagen de usuario</td><td>Titulo</td><td>Resumen</td><td>Imagen</td><td>Fecha de creación</td></tr>');
    foreach($RowsPosts as $post){
        if($post['status']==1){
        $i=-1;
        do{
            $i++;
        }while($post['user_id']!=$RowsUsuarios[$i]['id']);
    echo('<tr><td>'.$RowsUsuarios[$i]['username'].'</td><td><img style="width:fit-content; height:75px;" src="'.$RowsUsuarios[$i]['image'].'"></td><td><a href="c_mostrarPost.php?id='.$post['id'].'">'.$post['title'].'</a></td><td>'.$post['brief'].'</td><td><img style="width:100px; height:75px;" src="'.$post['image'].'"></td><td>'.$post['created_at'].'</td></tr>');
    }
}
	?>
	</table>
    </div>
	</div>
</body>
</html>