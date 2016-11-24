<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<title>Adminstrador</title>
	<link href="diseño.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Nosotros</h1>

	
	<?php
//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){
mysqli_query($conexion,"SET NAMES 'UTF8'");
//2.Preparar la consulta SQL
	$consulta ="SELECT*FROM nosotros";

//3.Ejecutr esa consulta en la base
	$resultado= mysqli_query($conexion,$consulta);
//4.Extraer los datos obtenidos
	echo"<center>";
	echo"<table border=1>\n";
	echo "<tr><td>textoID</td><td>textoES</td><td>textoEN</td><td>URL</td></td><td>Eliminar</td><td>Modificar</td></tr> \n"; 
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["textoID"]."</td>";
		
	
echo'<td>'.$fila['textoID'].'</td>';
echo'<td>'.$fila['textoES'].'</td>';
echo'<td>'.$fila['textoEN'].'</td>';
echo'<td>'.$fila['URL'].'</td>';
/*echo'<td>'.$fila['URLimagen'].'</td>';*/
	echo'<td><a href="nosotros1.php?codaborrar='.$fila['textoID'].'">Borrar</a></td>';
  echo'<td><a href="nosotrosmod1.php?codamodif='.$fila['textoID'].'">Modificar</a></td>';
	echo"</a></tr>\n";
    echo"</center>";
	

	}
}else{
	echo"<p>En este momento no funciona la base de datos</p>";

}
?>
</body>
</html>