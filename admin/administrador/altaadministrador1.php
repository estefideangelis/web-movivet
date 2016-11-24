<html>
<head>
	<meta charset="utf-8">
	<title>Alta administrador</title>
	<link href="diseño.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	<?php
	$idAdmin= $_POST["idAdmin"];
	$nombreUsuario= $_POST["nombreUsuario"];
	$password= $_POST["password"];
	
//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$consulta ="INSERT INTO administrador (idAdmin,nombreUsuario,password) VALUES('$idAdmin','$nombreUsuario','$password')";
//3.Ejecutr esa consulta en la base
	if(mysqli_query($conexion,$consulta)){
echo"<p>Se ha agregado con éxito.</p>";
echo"<ul><li><a href='administrador.php'>Volver a administrador</a> </li></ul>";
echo"<ul><li><a href='index.php'>Volver al Panel</a> </li></ul>";
		
		} else{
			
			echo"<p>No se pudo dar de alta.</p>";
			
		echo"<ul><li><a href='administrador.php'>Volver a administrador</a> </li></ul>";
echo"<ul><li><a href='index.php'>Volver al Panel</a> </li></ul>";

			
			}
}
?>
</body>
</html>