
<?php
	// INCLUYO EL ARCHIVO DE CONEXIÓN A LA BASE DE DATOS
	 require "conexion1.php";
	
	// LA FUNCION PUEDE ESTAR EN UN ARCHIVO EXTERNO DE FUNCIONES GENERALES DEL SITIO
	// RECIBE COMO PARÁMETRO EL OBJETO $FILE Y DEVUELVE EL NOMBRE DEL ARCHIVO O LA PALABRA "error" SI NO PUDO GUARDARLO

	function subir_imagen($file){

		// VALIDO QUE NO ME LLEGUE EL FORMULARIO VACIO.
		if($file && $file["name"]!=""){

			// DEFINO CUÁL VA A SER LA URL DE MI SITIO WEB, Y LA CARPETA DONDE SE GUARDARÁN LAS IMÁGENES (ESTO DEBERÍA ESTAR EN UN ARCHIVO EXTERNO DE CONFIGURACIÓN)
			$direccion_web = "http://www.movivet.tk/admin/galeria/";
			$nombre_carpeta = "galeria/";
			
			// DEFINICIONES INTERNAS PARA CONTROL
			$target_file = $nombre_carpeta . basename($file["name"]);
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$checkFile = getimagesize($file["tmp_name"]);
			$uploadOk = true;

			// VERIFICO QUE EL TIPO DE ARCHIVO CORRESPONDA A UNA IMAGEN VÁLIDA.
		    if($checkFile === false || ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")) {
		        echo "Error. El archivo no es una imagen valida.";
		        $uploadOk = false;
		    }

		    // VERIFICO SI EL ARCHIVO YA EXISTE EN EL SERVIDOR
			if(file_exists($target_file)) {
			    echo "Error. El archivo ya existe."; // EN CASO DE QUERER RENOMBRARLO ANTES DE SUBIR, SE PUEDE AGREGAR UN STRING RANDOM A LA CADENA $target_file
			    $uploadOk = false;
			}
			
			// VERIFICO QUE EL TAMAÑO DEL ARCHIVO NO SEA MAYOR DE 1MB
			if ($file["size"] > 1000000) {
			    echo "Error. El archivo es mayor de 1MB";
			    $uploadOk = false;
			}

			// SI PASÓ TODAS LAS VALIDACIONES, INTENTO SUBIR EL ARCHIVO AL SERVIDOR
			if($uploadOk){
			    if(move_uploaded_file($file["tmp_name"], $target_file)){
			    	
			    	// SI LO PUDE SUBIR BIEN, DEVUELVO LA URL COMPLETA DEL ARCHIVO QUE ACABO DE SUBIR
			    	return $direccion_web.basename($file["name"]);
			    }
			}
		}

		// SI LLEGUÉ A ESTA LÍNEA SIGNIFICA QUE EN ALGÚN LUGAR EL CÓDIGO FALLÓ, ENTONCES DEVUELVO EL ERROR.
		return "error";
	}

	
	// PREGUNTO SI VENGO DEL SUBMIT DEL FORMULARIO
	if(isset($_POST["submit"])){

		// LEVANTO ALGUNOS DATOS DEL FORM
		$altES = mysqli_real_escape_string($conexion,$_POST["altES"]);
		$altEN = mysqli_real_escape_string($conexion,$_POST["altEN"]);
	
		
		// LEVANTO EL NOMBRE DEL ARCHIVO USANDO LA FUNCION subir_imagen DECLARADA ARRIBA
		$URL = subir_imagen($_FILES["archivo_a_subir"]);

		if($URL=="error"){
			echo "Error. Hubo un error con la imagen, por favor revisar";
		}
		else{

			// CONTINUO CON EL RESTO DE MI CÓDIGO...

			$sql = "insert into galeria(altES, altEN, URL) values ('$altES','$altEN','$URL')";
			
			// IMPRIMO LA CONSULTA SÓLO PARA DEBUG
			echo $sql;

			if(mysqli_query($conexion,$sql)){
				echo "Los datos se guardaron exitosamente!";
			}
			else{
				echo "Error. La consulta a la BBDD no se puede ejecutar.";
			}
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>Administrador</title>
    <link rel="shortcut icon" href="img/favicon.png">
	
		<link href="diseño.css" rel="stylesheet" type="text/css">
        </head>
<body>
	<form action="test1.php" method="post" enctype="multipart/form-data"> <!-- IMPORTANTISIMO AGREGAR EL ENCTYPE AL FORM, SINO NO FUNCIONA EL UPLOAD -->
	    <p>
	    	<label>Subir una imagen</label>
	    	<input type="file" name="archivo_a_subir">
	    </p>
	    <p>
	    	<label>Descripcion español</label>
	    	<input type="text" name="altES" placeholder="Escribir descripcion ES">
	    </p>
	    <p>
	    	<label>Descripcion ingles</label>
	    	<input type="text" name="altEN" placeholder="Escribir descripcion EN">
	    </p>
       

	    <input type="submit" value="Subir!" name="submit">
	</form>
</body>
</html>