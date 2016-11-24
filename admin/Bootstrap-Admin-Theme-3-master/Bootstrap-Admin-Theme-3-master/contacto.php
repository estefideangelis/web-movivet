<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="file:///C|/Users/Estefi/Desktop/WEB MOVIVET/admin/Bootstrap-Admin-Theme-3-master/Bootstrap-Admin-Theme-3-master/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="file:///C|/Users/Estefi/Desktop/WEB MOVIVET/admin/Bootstrap-Admin-Theme-3-master/Bootstrap-Admin-Theme-3-master/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<?php
//1.Que el soft de PHP se indentifique ante MySql
if($conexion=mysqli_connect("localhost","ucymxbzr_estefi","maimo!123","ucymxbzr_movivet")){

//2.Preparar la consulta SQL
	$consulta ="SELECT*FROM contacto";

//3.Ejecutr esa consulta en la base
	$resultado= mysqli_query($conexion,$consulta);
//4.Extraer los datos obtenidos
	echo"<center>";
	echo"<table border=1>\n";
	echo "<tr><td>textoID</td><td>textoES</td><td>textoEN</td><td>URL</td></td><td>Eliminar</td><td>Modificar</td></tr> \n"; 
	while($fila=mysqli_fetch_array($resultado)){
		$id=$fila["textoID"]."</td>";
		
	
echo'<td>'.$fila['textoID'].'</td>';
echo'<td>'.$fila['textoES'].'</td>';
echo'<td>'.$fila['textoEN'].'</td>';
echo'<td>'.$fila['URL'].'</td>';
/*echo'<td>'.$fila['URLimagen'].'</td>';*/
	echo'<td><a href="contacto1.php?codaborrar='.$fila['textoID'].'">Borrar</a></td>';
  echo'<td><a href="contactomod1.php?codamodif='.$fila['textoID'].'">Modificar</a></td>';
	echo"</a></tr>\n";
    echo"</center>";
	

	}
}else{
	echo"<p>En este momento no funciona la base de datos</p>";

}
?>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

      <link href="file:///C|/Users/Estefi/Desktop/WEB MOVIVET/admin/Bootstrap-Admin-Theme-3-master/Bootstrap-Admin-Theme-3-master/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="file:///C|/Users/Estefi/Desktop/WEB MOVIVET/admin/Bootstrap-Admin-Theme-3-master/Bootstrap-Admin-Theme-3-master/bootstrap/js/bootstrap.min.js"></script>

    <script src="file:///C|/Users/Estefi/Desktop/WEB MOVIVET/admin/Bootstrap-Admin-Theme-3-master/Bootstrap-Admin-Theme-3-master/vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="file:///C|/Users/Estefi/Desktop/WEB MOVIVET/admin/Bootstrap-Admin-Theme-3-master/Bootstrap-Admin-Theme-3-master/vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="file:///C|/Users/Estefi/Desktop/WEB MOVIVET/admin/Bootstrap-Admin-Theme-3-master/Bootstrap-Admin-Theme-3-master/js/custom.js"></script>
    <script src="file:///C|/Users/Estefi/Desktop/WEB MOVIVET/admin/Bootstrap-Admin-Theme-3-master/Bootstrap-Admin-Theme-3-master/js/tables.js"></script>
  </body>
</html>