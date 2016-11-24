<html>
<head>
	<title>administrador</title>
<link href="diseño.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Alta ADMINISTRADOR</h1>


<ul>
<li><label for="idAdmin">Alta ADMINISTRADOR</li></br>


 
		        	
	



<form method="post" action="altaadministrador1.php">

		<select name="idAdmin" >
			<?php
 
 		if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

 			$consulta="SELECT * FROM administrador";

 			$resultado = mysqli_query($conexion,$consulta);

 			while($fila = mysqli_fetch_array($resultado)){

 			echo'<option value='.$fila["idAdmin"].'>';

 			echo $fila["idAdmin"];
	 
	 
	 }
 
 '</option>';
 }
 ?>

</select>
<br>
<li><label for="nombreUsuario">nombreUsuario</li></br>
<input type="text" name="nombreUsuario" required/>
</br>
<li><label for="password">password</li></br>
<input type="text" name="password" required/>
</br>
</br>
<input type="submit" name="enviar">
<li><a href="administrador.php">Volver</a> </li>

</ul>
</form>

</body>
</html>