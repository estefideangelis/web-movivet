<html>
<head>
	<meta charset="utf-8">
	<title>Administrador</title>
<link href="diseño.css" rel="stylesheet" type="text/css">

</head>
<body>
	<h1>Modificar galeria</h1>
	<?php
	$codamodifr= $_GET["codamodif"];

//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$codigo=$_GET["codamodif"];
	$consulta ="SELECT * FROM galeria WHERE galeriaID='$codigo'";
//3.Ejecutr esa consulta en la base
	if($datos= mysqli_query($conexion,$consulta)){
		$fila=mysqli_fetch_array($datos);
		$galeriaID=$fila["galeriaID"];
		$textoES=$fila["textoES"];
		$textoEN=$fila["textoEN"];
		$URL=$fila["URL"];
		$altES=$fila["altES"];
		$altEN=$fila["altEN"];


		

echo"<ul><li><a href='galeria.php'>Volver</a> </li></ul>";

	}else{
		echo"<p>No se pudo modificar.</p>";

		echo"<ul><li><a href='galeria.php'>Volver</a> </li></ul>";


	}
	echo'<td>'.$fila['galeriaID'].'</td>';
}
?>
<form method="post" action="updategaleria.php">



<ul>
<li><label for="galeriaID">galeriaID</li></br>
<input type="hidden" name="galeriaID"  value="<?php echo $galeriaID; ?>" />
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
<li><label for="altES">altES</li></br>
<input type="text" name="altES" value="<?php echo $altES; ?>" />
</br>
<li><label for="altEN">altEN</li></br>
<input type="text" name="altEN" value="<?php echo $altEN; ?>" />
</br>
<input type="submit" name="enviar">


</ul>
</form>
</body>
</html>
