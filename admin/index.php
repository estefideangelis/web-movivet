<?php 
session_start();
if ($_SESSION["usuario_login"]!="SI"){
	header("location:../administrador.php");
	exit;
	}
?>

<html>
<head>
	<title>Administrador</title>
    <link rel="shortcut icon" href="img/favicon.png">
	<link href="diseñoindex.css" rel="stylesheet" type="text/css">
</head>
<body >
	<h1>Administrador</h1>
	<ul> 
    <li><a href="home.php">HOME</a> </li>
    <li><a href="nosotros.php">NOSOTROS</a> </li>
    <li><a href="servicios.php">SERVICIOS</a> </li>
    <li><a href="reserva.php">RESERVA</a> </li>
    <li><a href="tienda.php">TIENDA</a> </li>
    <li><a href="galeria.php">GALERIA</a> </li>
    <li><a href="contacto.php">CONTACTO</a> </li>
    <li><a href="inicioSesion.php">INICIO SESION</a> </li>
    <li><a href="registroUsuario.php">REGISTRO USUARIO</a> </li>
    <li><a href="sesionAdmin.php">SESION ADMINISTRADOR</a> </li>
    <li><a href="encabezado.php">ENCABEZADO</a> </li>
    <li><a href="footer.php">FOOTER</a> </li>
    <li><a href="administrador.php">ADMINISTRAR ADMINISTRADORES</a> </li>
    <li><a href="usuario.php">USUARIOS</a> </li>
    <li><a href="sesionAdmin.php">USUARIO ADMINISTRADOR</a> </li>
    <li><a href="sesionAdmin.php">SESION ADMINISTRADOR</a> </li>
    <li><a href="menu.php">MENU</a> </li>
    <li><a href="reservado.php">RESERVADO</a> </li>
	<li><a href="imagenes.php">IMAGENES</a> </li>

		
    
	</ul>


</body>
</html>