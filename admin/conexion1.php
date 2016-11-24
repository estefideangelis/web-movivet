	<?php
//1.Que el soft de PHP se indentifique ante MySql


if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$consulta ="SELECT*FROM galeria";

//3.Ejecutar esa consulta en la base
	$resultado= mysqli_query($conexion,$consulta);
//4.Extraer los datos obtenidos
	echo"<center>";
	echo"<table border=2>\n";
	echo "<tr><td>galeriaID</td><td>textoES</td><td>textoEN</td><td>URL</td><td>altES</td><td>altEN</td></tr> \n"; 
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["galeriaID"]."</td>";
		
echo'<td>'.$fila['galeriaID'].'</td>';
echo'<td>'.$fila['textoES'].'</td>';
echo'<td>'.$fila['textoEN'].'</td>';
echo'<td>'.$fila['URL'].'</td>';
echo'<td>'.$fila['altES'].'</td>';
echo'<td>'.$fila['altEN'].'</td>';


	echo"</tr>\n";
	    echo"</center>";
	

	}
}else{
	echo"<p>En este momento no funciona la base de datos</p>";

}
?>
