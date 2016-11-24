<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
		
	<?php
//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$consulta ="SELECT*FROM home WHERE textoID = 4";

//3.Ejecutr esa consulta en la base
	$resultado= mysqli_query($conexion,$consulta);
//4.Extraer los datos obtenidos
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["textoID"]."</p>";
		
	
echo'<h2>'.$fila['textoES'].'</h2>';

	

	}
}else{
	echo"<p>En este momento no funciona la base de datos</p>";

}
?>
</body>
</html>