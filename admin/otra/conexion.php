	<?php
//1.Que el soft de PHP se indentifique ante MySql


if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$consulta ="SELECT*FROM imagenes";

//3.Ejecutar esa consulta en la base
	$resultado= mysqli_query($conexion,$consulta);
//4.Extraer los datos obtenidos
	echo"<center>";
	echo"<table border=2>\n";
	echo "<tr><td>id imagen</td><td>nombre imagen</td><td>nombre imagen english</td><td>alt imagen</td><td>alt imagen english</td><td>URL imagen</td></tr> \n"; 
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["IDimagen"]."</td>";
		
echo'<td>'.$fila['IDimagen'].'</td>';
echo'<td>'.$fila['nombreImagenES'].'</td>';
echo'<td>'.$fila['nombreImagenEN'].'</td>';
echo'<td>'.$fila['altES'].'</td>';
echo'<td>'.$fila['altEN'].'</td>';
echo'<td>'.$fila['URLimagen'].'</td>';

	echo"</tr>\n";
	    echo"</center>";
	

	}
}else{
	echo"<p>En este momento no funciona la base de datos</p>";

}
?>
