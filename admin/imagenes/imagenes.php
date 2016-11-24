<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<title>Admin imágenes</title>
	<link href="diseño.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Admin Imágenes</h1>


<ul> 
		<li><a href="test.php">Dar de alta</a> </li>
		        	
	
	</ul>
	
	<?php
//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$consulta ="SELECT*FROM imagenes";

//3.Ejecutr esa consulta en la base
	$resultado= mysqli_query($conexion,$consulta);
//4.Extraer los datos obtenidos
	echo"<center>";
	echo"<table border=1>\n";
	echo "<tr><td>IDimagen</td><td>nombreImagenES</td><td>nombreImagenEN</td><td>altES</td><td>altEN</td><td>URLimagen</td><td>Eliminar</td></tr> \n"; 
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["IDimagen"]."</td>";
		
	
echo'<td>'.$fila['IDimagen'].'</td>';
echo'<td>'.$fila['nombreImagenES'].'</td>';
echo'<td>'.$fila['nombreImagenEN'].'</td>';
echo'<td>'.$fila['altES'].'</td>';
echo'<td>'.$fila['altEN'].'</td>';
echo'<td>'.$fila['URLimagen'].'</td>';
	echo'<td><a href="imagenes1.php?codaborrar='.$fila['IDimagen'].'">Borrar</a></td>';

	echo"</a></tr>\n";
    echo"</center>";
	

	}
}else{
	echo"<p>En este momento no funciona la base de datos</p>";

}
?>
</body>
</html>