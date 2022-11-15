<html>
    <head>
        <style>
            body{
                height:100vh;
                background-image: url("https://fondosmil.com/fondo/70708.jpg")
            }
            div{
                width: 300px;
                margin: auto;
                text-align: center;
                color: white;
            }
            table{
                margin:auto;
                background-color: rgba(255, 255, 255, 0.527);
            }
            #pfp{
                height: 75px;
                width: 75px;
                border-radius: 100%;
            }
        </style>
    </head>
    <body>
        <div>
        <h1>Datos Usuarios</h1>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                 <th>STATUS</th>
                <th>KIND</th>
                <th>NAME</th>
                <th>LASTNAME</th>
                  <th>IMAGE</th>
                    <th>ADMINISTRATION</th>

            </tr>
<?php
error_reporting(0);
//Conexion a la BBDD
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$listado=$mysqli->query("SELECT * FROM  user");

while ($row = $listado->fetch_assoc()) {
    $concat.='<tr>';
    $concat.= '<td>'.$row["id"].'</td>';
    $concat.= '<td>' . $row["username"] . '</td>';
    $concat.= '<td>'.$row["status"].'</td>';
    $concat.= '<td>'.$row["kind"].'</td>';
    $concat.= '<td>'.$row["name"].'</td>';
    $concat.= '<td>'.$row["lastname"].'</td>';
    $concat.= '<td><img id="pfp" src="'.$row["image"].'"></td>';
    $concat.='<td> <a href="C_eliminarUsuario.php?id=' . $row['id'] .'"><button>'."BORRAR".'</button></a><a href="V_modificarUsuario.php?username='. $row['username'] .'&password='. $row['password'].'&kind='. $row['kind'].'&id='. $row['id'].'&status='. $row['status'].'&name='. $row['name'].'&lastname='. $row['lastname'].'&email='. $row['email'].'&image='. $row['image'].'"><button>'."EDITAR".'</button></a></td>';
    $concat.= '</tr>';
}

echo $concat;
?>

 </table>
 <a href="dashboard.php">volver</a>

    </body>
</html>