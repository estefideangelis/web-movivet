<html>
<head>
	<meta charset="utf-8">
	<title>Administrador</title>
<link href="diseño.css" rel="stylesheet" type="text/css">

</head>
<body>
	<h1>Modificar administrador</h1>
	<?php
	$codamodifr= $_GET["codamodif"];

//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$codigo=$_GET["codamodif"];
	$consulta ="SELECT * FROM administrador WHERE idAdmin='$codigo'";
//3.Ejecutr esa consulta en la base
	if($datos= mysqli_query($conexion,$consulta)){
		$fila=mysqli_fetch_array($datos);
		$idAdmin=$fila["idAdmin"];
		$nombreUsuario=$fila["nombreUsuario"];
		$password=$fila["password"];
	


		

echo"<ul><li><a href='administrador.php'>Volver</a> </li></ul>";

	}else{
		echo"<p>No se pudo modificar.</p>";

		echo"<ul><li><a href='administrador.php'>Volver</a> </li></ul>";


	}
	echo'<td>'.$fila['idAdmin'].'</td>';
}
?>
<form method="post" action="updateadministrador.php">



<ul>
<li><label for="idAdmin">idAdmin</li></br>
<input type="hidden" name="idAdmin"  value="<?php echo $idAdmin; ?>" />
<br>
<li><label for="nombreUsuario">nombreUsuario</li></br>
<input type="text" name="nombreUsuario"  value="<?php echo $nombreUsuario; ?>" />
<br>
<li><label for="password">password</li></br>
<input type="text" name="password" value="<?php echo $password; ?>" />
</br>

<input type="submit" name="enviar">


</ul>
</form>
</body>
</html>
