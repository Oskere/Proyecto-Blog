<?php
require('c_mostrarPosts.php')
?>
<html>
<head> 
<style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
           margin:auto;
            width: 30%;
        }
    </style>
    </head>
    <body>
    <div style="width:100px; height:20px; border:1px solid black; text-align:center; margin:auto; margin-bottom:40px;">
    <a href="añadir.php">Añadir registro</a>
    <br><br>
	</div>
<?php

echo '<table>';
while ($row = $resultado->fetch_assoc()) {
    echo('<tr><td>'.$row['title'].'</a></td><td>'. $row['brief'] .'</td><td></td></tr>');
    
}
echo "</table>";

$mysqli->close();

?>
</body>
</html>