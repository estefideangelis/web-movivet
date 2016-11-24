<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<title>usuario</title>
    <link rel="shortcut icon" href="img/favicon.png">
	
		<link href="diseño.css" rel="stylesheet" type="text/css">
        
        </head>
<body>
	<h1>usuario</h1>

	
	<?php
//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$consulta ="SELECT*FROM usuario";

//3.Ejecutr esa consulta en la base
	$resultado= mysqli_query($conexion,$consulta);
//4.Extraer los datos obtenidos
	echo"<center>";
	echo"<table border=1>\n";
	echo "<tr><td>IDusuario</td><td>nombre</td><td>email</td></td><td>Eliminar</td></tr> \n"; 
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["IDusuario"]."</td>";
		
	
echo'<td>'.$fila['IDusuario'].'</td>';
echo'<td>'.$fila['nombre'].'</td>';
echo'<td>'.$fila['email'].'</td>';

/*echo'<td>'.$fila['URLimagen'].'</td>';*/
	echo'<td><a href="usuario1.php?codaborrar='.$fila['IDusuario'].'">Borrar</a></td>';
 
	echo"</a></tr>\n";
    echo"</center>";
	

	}
}else{
	echo"<p>En este momento no funciona la base de datos</p>";

}
?>
</body>
</html>