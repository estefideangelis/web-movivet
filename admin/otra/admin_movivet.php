<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    
    
	<link href="diseño.css" rel="stylesheet" type="text/css">

	<title>Ecommerce</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
	
</head>
<body>
	<h1>Categorias</h1>


<ul> 
		<li><a href="test.php">Dar de alta</a> </li>
		<li><a href="baja_imagenes.php">Dar de baja</a> </li>
        	<li><a href="#">Modificar</a> </li>
	
	</ul>
	
		<?php
//1.Que el soft de PHP se indentifique ante MySql


if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$consulta ="SELECT*FROM imagenes";

//3.Ejecutr esa consulta en la base
	$resultado= mysqli_query($conexion,$consulta);
//4.Extraer los datos obtenidos
	echo"<center>";
	echo"<table border=2>\n";
	echo "<tr><td>id imagen</td><td>nombre_imagen</td><td>URL imagen</td></tr> \n"; 
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["IDimagen"]."</td>";
		
echo'<td>'.$fila['IDimagen'].'</td>';
echo'<td>'.$fila['nombre_imagen'].'</td>';
echo'<td>'.$fila['URLimagen'].'</td>';
	echo"</tr>\n";
	    echo"</center>";
	

	}
}else{
	echo"<p>En este momento no funciona la base de datos</p>";

}
?>


</body>
</html>
