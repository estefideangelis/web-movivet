<html>
<head>
	<meta charset="utf-8">
	<title>Administrador</title>
	<link href="diseño.css" rel="stylesheet" type="text/css">

</head>
<body>
	<h1>Modificar servicios</h1>
	<?php
	$codamodifr= $_GET["codamodif"];

//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$codigo=$_GET["codamodif"];
	$consulta ="SELECT * FROM servicios WHERE textoID='$codigo'";
//3.Ejecutr esa consulta en la base
	if($datos= mysqli_query($conexion,$consulta)){
		$fila=mysqli_fetch_array($datos);
		$textoID=$fila["textoID"];
		$textoES=$fila["textoES"];
		$textoEN=$fila["textoEN"];
		$URL=$fila["URL"];


		

echo"<ul><li><a href='servicios.php'>Volver</a> </li></ul>";

	}else{
		echo"<p>No se pudo modificar.</p>";

		echo"<ul><li><a href='servicios.php'>Volver</a> </li></ul>";


	}
	echo'<td>'.$fila['textoID'].'</td>';
}
?>
<form method="post" action="updateservicios.php">



<ul>
<li><label for="textoID">textoID</li></br>
<input type="hidden" name="textoID"  value="<?php echo $textoID; ?>" />
<br>
<li><label for="textoES">textoES</li></br>
<input type="text" name="textoES"  value="<?php echo $textoES; ?>" />
<br>
<li><label for="textoEN">textoEN</li></br>
<input type="text" name="textoEN" value="<?php echo $textoEN; ?>" />
</br>
<li><label for="URL">URL</li></br>
<input type="text" name="URL" value="<?php echo $URL; ?>" />
</br>
<input type="submit" name="enviar">


</ul>
</form>
</body>
</html>
