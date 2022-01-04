<!DOCTYPE>
<html>
<head>
	<title>Agregar</title>
</head>

<body>

  <?php

    $servername = "localhost";
      $username = "oscar";
      $password = "Oscar.123";
      $BD = "proyecto";
      // Create connection
      $baseDatos = new mysqli($servername, $username, $password, $BD);
      // Check connection
      if ($baseDatos->connect_error) {
       die("Connection failed: " . $baseDatos->connect_error);
      }
      echo "Connected successfully";
    	
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cel = $_POST['cel'];
    $fechaN = $_POST['fecha'];
    $empresa = $_POST['empresa'];
    $ciudad = $_POST['ciudad'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];

    $insertar1 = "INSERT INTO `Persona` (`nombre_persona`, `apellido_persona`,`fechaNacimiento_persona`, `ciudad_persona`, `genero_persona`)  
    VALUES ('$nombre', '$apellido', '$fechaN', '$ciudad', '$sexo')";

    $obtenerClave = "select MAX(id_persona) from Persona limit 1";
    $clave2 = $baseDatos->query($obtenerClave);



   if ($clave2->num_rows > 0) {
  // output data of each row
  while($row = $clave2->fetch_assoc()) {
    $clave=(int)$row["MAX(id_persona)"];
    echo $clave;
  }
} else {
  echo "0 results";
}


    if ($baseDatos->query($insertar1) === TRUE) {
 	 echo "New record created successfully";
    } else {
	  echo "Error: " . $insertar1 . "<br>" . $baseDatos->error;
    }

  $clave = $clave +1;
  $insertar2 = "INSERT INTO `Teléfonos` (`id_persona`, `teléfono`) VALUES ('$clave', '$cel')";


    if ($baseDatos->query($insertar2) === TRUE) {
         echo "New record created successfully";
    } else {
          echo "Error: " . $insertar2 . "<br>" . $baseDatos->error;
    }


    $insertar3 = "INSERT INTO `Correos` (`id_persona`, `correo`) VALUES ('$clave', '$email')";

    $insertar4 = "INSERT INTO `Proveedor` (`id_persona`, `empresa`) VALUES ('$clave', '$empresa')"; 


    if ($baseDatos->query($insertar3) === TRUE) {
         echo "New record created successfully";
    } else {
          echo "Error: " . $insertar3 . "<br>" . $baseDatos->error;
    }


    if ($baseDatos->query($insertar4) === TRUE) {
         echo "New record created successfully4";
    } else {
          echo "Error: " . $insertar4 . "<br>" . $baseDatos->error;
    }



  ?>

</body>
</html>
