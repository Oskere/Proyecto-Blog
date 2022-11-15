<html>
<head>
	<style>
	   body{
	   margin:0px;
	   	   background-image:url("https://cdn.discordapp.com/attachments/702079890136236084/1039130074668093490/unknown.png");
	   
	   }
	   #dWrapper{
	   width:cover;
	   height:cover;
	   }
	   #dTitulo{
	   display:flex;
	   justify-content:center;
	   flex-direction:column;
	   grid-column: 3/5;
	   grid-row:1;
	   box-sizing: border-box;
	   border:3px solid rgb(0, 143, 57);
	   color:white;
	   }
	   #hTitulo{
	   font-size:30px;
	   font-family:arial;
	   text-shadow: 1px 1px 2px gray;
	   margin-left:50px;
	   color:white;
	   }
	   #dContent{
	   background-color:rgb(28,28,28,0.90);
	   display:grid;
	   grid-template-columns: repeat(4, 1fr);
       grid-gap: 0px;
       grid-auto-rows: minmax(100px, 200px);
	   width:1400px;
	   height:95vh;
       margin: auto;
       border-left:3px solid rgb(0, 143, 57);
       border-right:3px solid rgb(0, 143, 57);
       box-sizing:border-box;
	   }
	   #dImagen{
	   background-size:cover;
	   background-image:url("<?php echo $rowUsuario['image'] ?>");
	   border:3px solid rgb(0, 143, 57);
	   box-sizing: border-box;
	   grid-column:1;
	   grid-row:1;
	   }
	   #dTexto{
	   grid-row:2/6;
	   grid-column:1/3;
	   color:white;
	   }
	   #dImagenPost{
	   background-repeat: no-repeat;
       background-size: auto;
	   grid-row:2/6;
	   grid-column:3/5;
	   background-image:url("<?php echo $rowPost['image'] ?>");
	   }
	   #dInfoUsuarios{
	   font-size:30px;
	   grid-column:2;
	   grid-row:1;
	   font-family:arial;
	   border-bottom:3px solid rgb(0, 143, 57);
	   border-top:3px solid rgb(0, 143, 57);
	   box-sizing: border-box;
	   color:white;
	   }
	   #dFechaCreacion{
	   grid-column:4;
	   grid-row:6;
	   vertical-align:bottom;
	   color:white;
	   }
	   #dComentarios{
	   display:grid;
	   border:3px solid rgb(0, 143, 57);
	   box-sizing: border-box;
	   background-color:rgb(28,28,28,0.90);
	   width:1400px;
	   margin:auto;
	   grid-template-columns: repeat(2, 1fr);
       grid-gap: 0px;
       grid-auto-rows: minmax(40px, 40px);
       color:white;
       
	   }
	   #dComNombre{
	   grid-column:1/3;
	   grid-row:1;
	   border-bottom:3px solid rgb(0, 143, 57);
	   box-sizing: border-box;
	   color:white;
	   }
	   #dComTexto{
	   grid-column:1/4;
	   grid-row:2;
	   box-sizing: border-box;
	   color:white;
	   }
	   #dComFecha{
	   grid-column:3;
	   grid-row:1;
	   box-sizing: border-box;
       border-bottom:3px solid rgb(0, 143, 57);
       border-left:3px solid rgb(0, 143, 57);
       color:white;
	   
	   }
	   #dCrearComentario{
	   display:flex;
	   margin:auto;
	   background-color:rgb(28,28,28,0.90);
	   color:white;
	   width:300px;
	   height:200px;
	   box-sizing: border-box;
	   border:3px solid rgb(0, 143, 57);
	   }
	</style>
</head>
<body>
	<div id="dWrapper">
		<a style="color:white;" href="c_PaginaPrincipal.php"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
</svg></a>
		<div id="dContent"><div id="dImagen"></div><div id="dInfoUsuarios"><p><?php echo $rowUsuario['username'].'</p><p>'.$rowUsuario['email']?></p></div><div id="dTitulo"><h1 id="hTitulo"><?php echo $rowPost['title'] ?></h1></div><div id="dImagenPost"></div><div id="dTexto"><?php echo $rowPost['content'] ?></div><div id="dFechaCreacion">Fecha de publicación: <?php echo $rowPost['created_at']?></div>	
	</div>
		<?php
		for ($j=0; $j < count($RowsComentarios);$j++){
			if($id==$rowPost['user_id']){
				$borrar = '<a style="color:white;" href="eliminarComentario.php?id='.$RowsComentarios[$j]['id'].'&idPost='.$rowPost['id'].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
				<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
				<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
			  </svg></a>';
			}
			else{
				$borrar = '';
			}
		    echo '<div id="dComentarios">';
		    echo '<div id="dComNombre">'.$RowsComentarios[$j]["name"].' '. $RowsComentarios[$j]["email"].$borrar.'</div><div id="dComFecha">Fecha de publicación:'.$RowsComentarios[$j]["created_at"].'</div><div id="dComTexto">'.$RowsComentarios[$j]["comment"].'</div></div>';
			if($edit){
				echo '<div><a href="">Eliminar</a></div>';
			}
			echo '</div>';
			$j++;
		};
		?>
			<div id="dCrearComentario";>
			<form class="form" method="post">
					 <h2>Nuevo comentario</h2>
				<div class="inputBox">
                    <input type="text" required="required" name="name">
                    <span>Nombre</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="comment">
                    <span>Comentario</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="email">
                    <span>Email</span>
                    <i></i>
                </div>
                <div style=display:none;>
                <input type="text" name="id" readonly value="<?php echo $rowPost['id'] ?>">
                </div>
                <input type="submit" value="Crear comentario">
                
			</form>
		</div>  
		<?php
		if(isset($_POST['name']) && isset($_POST['comment']) && isset($_POST['email'])){
		    
		    $mysqli = new mysqli("localhost", "root", "", "blog");
		    if ($mysqli->connect_errno) {
		        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		    }
		$name= $_POST['name'];
		$comment= $_POST['comment'];
		$email= $_POST['email'];
		$post_id= $rowPost['id'];
		$date = date('Y-m-d H:i:s');
		$status= 1;
		$timestamp = strtotime($date);





		$stmt = $mysqli->prepare("INSERT INTO comments (name,comment,email,post_id,created_at,status) VALUES (?,?,?,?,?,?)");
		$stmt->bind_param('sssisi',$name,$comment,$email,$post_id,$date,$status);
		$stmt->execute();
		
		 

		$mysqli->close();
		echo "<meta http-equiv='refresh' content='0'>";
		}
		
	
		?>
	</div>
</body>
</html>