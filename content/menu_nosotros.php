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
	$consulta ="SELECT*FROM menu WHERE seccionID = 2";

//3.Ejecutr esa consulta en la base
	$resultado= mysqli_query($conexion,$consulta);
//4.Extraer los datos obtenidos
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["seccionID"]."</p>";
		
	
echo'<p>'.$fila['nombreES'].'</p>';

	

	}
}else{
	echo"<p>En este momento no funciona la base de datos</p>";

}
?>
</body>
</html>