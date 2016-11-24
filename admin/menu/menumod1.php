<html>
<head>
	<meta charset="utf-8">
	<title>Administrador</title>
	<link href="diseño.css" rel="stylesheet" type="text/css">

</head>
<body>
	<h1>Modificar menu</h1>
	<?php
	$codamodifr= $_GET["codamodif"];

//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$codigo=$_GET["codamodif"];
	$consulta ="SELECT * FROM menu WHERE seccionID='$codigo'";
//3.Ejecutr esa consulta en la base
	if($datos= mysqli_query($conexion,$consulta)){
		$fila=mysqli_fetch_array($datos);
		$seccionID=$fila["seccionID"];
		$nombreES=$fila["nombreES"];
		$nombreEN=$fila["nombreEN"];
		$URL=$fila["URL"];


		

echo"<ul><li><a href='menu.php'>Volver</a> </li></ul>";

	}else{
		echo"<p>No se pudo modificar.</p>";

		echo"<ul><li><a href='menu.php'>Volver</a> </li></ul>";


	}
	echo'<td>'.$fila['seccionID'].'</td>';
}
?>
<form method="post" action="updatemenu.php">



<ul>
<li><label for="seccionID">seccionID</li></br>
<input type="hidden" name="seccionID"  value="<?php echo $seccionID; ?>" />
<br>
<li><label for="nombreES">nombreES</li></br>
<input type="text" name="nombreES"  value="<?php echo $nombreES; ?>" />
<br>
<li><label for="nombreEN">nombreEN</li></br>
<input type="text" name="nombreEN" value="<?php echo $nombreEN; ?>" />
</br>
<li><label for="URL">URL</li></br>
<input type="text" name="URL" value="<?php echo $URL; ?>" />
</br>
<input type="submit" name="enviar">


</ul>
</form>
</body>
</html>
