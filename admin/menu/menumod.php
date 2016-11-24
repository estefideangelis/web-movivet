<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<title>Administrador</title>
	<link href="diseño.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Modificar menu</h1>
	<ul> 
		<li><a href="#">Volver</a> </li>
		
	
	</ul>
	<?php
//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){


//2.Preparar la consulta SQL
	$consulta ="SELECT*FROM menu";

//3.Ejecutr esa consulta en la base
	$resultado= mysqli_query($conexion,$consulta);
//4.Extraer los datos obtenidos
	echo"<center>";
	echo"<table border=1>\n";
echo "<tr><td>seccionID</td><td>nombreES</td><td>nombreEN</td><td>URL</td></td><td>Eliminar</td><td>Modificar</td></tr> \n"; 
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["seccionID"]."</td>";
		
	
echo'<td>'.$fila['seccionID'].'</td>';
echo'<td>'.$fila['nombreES'].'</td>';
echo'<td>'.$fila['nombreEN'].'</td>';
echo'<td>'.$fila['URL'].'</td>';

	echo'<td><a href="modmenu1.php?codamodif='.$fila['seccionID'].'">Modificar</a></td>';

	echo"</a></tr>\n";
    echo"</center>";
	

	}
}else{
	echo"<p>En este momento no funciona la base de datos</p>";

}
?>
</body>
</html>