<html>
<head>
	<meta charset="utf-8">
	<title>Administrador</title>
	<link href="diseño.css" rel="stylesheet" type="text/css">

</head>
<body>
	<h1>Modificar footer</h1>
	<?php
	$codamodifr= $_GET["codamodif"];

//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$codigo=$_GET["codamodif"];
	$consulta ="SELECT * FROM footer WHERE footerID='$codigo'";
//3.Ejecutr esa consulta en la base
	if($datos= mysqli_query($conexion,$consulta)){
		$fila=mysqli_fetch_array($datos);
	$footerID=$fila["footerID"];
	$nombreEmpresa=$fila["nombreEmpresa"];
	$derechosES=$fila["derechosES"];
	$derechosEN=$fila["derechosEN"];
	$tienda=$fila["tienda"];
	$lugar=$fila["lugar"];
	$email=$fila["email"];
	$terminos=$fila["terminos"];
	$URL=$fila["URL"];
	

		

echo"<ul><li><a href='footer.php'>Volver</a> </li></ul>";

	}else{
		echo"<p>No se pudo modificar.</p>";

		echo"<ul><li><a href='footer.php'>Volver</a> </li></ul>";


	}
	echo'<td>'.$fila['footerID'].'</td>';
}
?>
<form method="post" action="updatefooter.php">



<ul>
<li><label for="footerID">footerID</li></br>
<input type="hidden" name="footerID"  value="<?php echo $footerID; ?>" />
<br>
<li><label for="nombreEmpresa">nombreEmpresa</li></br>
<input type="text" name="nombreEmpresa"  value="<?php echo $nombreEmpresa; ?>" />
<br>
<li><label for="derechosES">derechosES</li></br>
<input type="text" name="derechosES"  value="<?php echo $derechosES; ?>" />
<br>
<li><label for="derechosEN">derechosEN</li></br>
<input type="text" name="derechosEN"  value="<?php echo $derechosEN; ?>" />
<br>
<li><label for="tienda">tienda</li></br>
<input type="text" name="tienda"  value="<?php echo $tienda; ?>" />
<br>
<li><label for="lugar">lugar</li></br>
<input type="text" name="lugar"  value="<?php echo $lugar; ?>" />
<br>
<li><label for="email">email</li></br>
<input type="text" name="email"  value="<?php echo $email; ?>" />
<br>
<li><label for="terminos">terminos</li></br>
<input type="text" name="terminos"  value="<?php echo $terminos; ?>" />
<br>
<li><label for="URL">URL</li></br>
<input type="text" name="URL"  value="<?php echo $URL; ?>" />
<br>

<input type="submit" name="enviar">


</ul>
</form>
</body>
</html>
