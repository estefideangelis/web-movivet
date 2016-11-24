<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<title>Adminstrador</title>
	<link href="diseño.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>footer</h1>

	
	<?php
//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$consulta ="SELECT*FROM footer";

//3.Ejecutr esa consulta en la base
	$resultado= mysqli_query($conexion,$consulta);
//4.Extraer los datos obtenidos
	echo"<center>";
	echo"<table border=1>\n";
	echo "<tr><td>footerID</td><td>nombreEmpresa</td><td>derechosES</td><td>derechosEN</td><td>tienda</td><td>lugar</td><td>email</td><td>terminos</td><td>URL</td><td>Eliminar</td><td>Modificar</td></tr> \n"; 
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["footerID"]."</td>";
		
	
echo'<td>'.$fila['footerID'].'</td>';
echo'<td>'.$fila['nombreEmpresa'].'</td>';
echo'<td>'.$fila['derechosES'].'</td>';
echo'<td>'.$fila['derechosEN'].'</td>';
echo'<td>'.$fila['tienda'].'</td>';
echo'<td>'.$fila['lugar'].'</td>';
echo'<td>'.$fila['email'].'</td>';
echo'<td>'.$fila['terminos'].'</td>';
echo'<td>'.$fila['URL'].'</td>';
/*echo'<td>'.$fila['URLimagen'].'</td>';*/
	echo'<td><a href="footer1.php?codaborrar='.$fila['footerID'].'">Borrar</a></td>';
  echo'<td><a href="footermod1.php?codamodif='.$fila['footerID'].'">Modificar</a></td>';
	echo"</a></tr>\n";
    echo"</center>";
	

	}
}else{
	echo"<p>En este momento no funciona la base de datos</p>";

}
?>
</body>
</html>