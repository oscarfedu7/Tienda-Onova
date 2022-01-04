<!DOCTYPE>
<html>
<head>
	<title>Agregar</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


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
    //  echo "Connected successfully";
    	
    $linea = $_POST['linea'];
    $descripción = $_POST['desc'];
    $categoría = $_POST['categoría'];
    $producto = $_POST['producto'];
    $costo = $_POST['costo'];
    $imagen = $_POST['img'];

   
    $insertar1 = "INSERT INTO `Producto` (`Linea_producto`, `producto`, `categoría_producto`, `costo_producto`,`descripción_producto`, `imagen` ) VALUES ('$linea', '$producto', '$categoría', '$costo' ,'$descripción', '$imagen')";

    $obtenerClave = "select MAX(clave_producto) from Producto limit 1";
    $clave2 = $baseDatos->query($obtenerClave);



   if ($clave2->num_rows > 0) {
  // output data of each row
  while($row = $clave2->fetch_assoc()) {
    $clave=(int)$row["MAX(clave_producto)"];
   // echo $clave;
  }
} else {
  echo "0 results";
}


    if ($baseDatos->query($insertar1) === TRUE) {
 //	 echo "New record created successfully";
    } else {
	  echo "Error: " . $insertar1 . "<br>" . $baseDatos->error;
    }

  ?>

<header class="masthead mb-auto">
   <center>  <div class="alert alert-success alert-dismissible">
    <a href="http://localhost/Proyecto2.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Se han guadrado los datos con éxito.
  </div>
</center>
</header>
</body>
</html>
