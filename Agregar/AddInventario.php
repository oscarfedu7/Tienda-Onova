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
      
    $clave = $_POST['clave'];
    $cantidad = (int)$_POST['cant'];



    $variable = "select * from InventarioProductos where clave_producto=$clave";
    $tabla = $baseDatos->query($variable);

    $variable2="select cantidad from InventarioProductos where clave_producto=$clave";
    $cantidad2= $baseDatos->query($variable2);



   if ($tabla->num_rows > 0) {
       while($row = $cantidad2->fetch_assoc()) {
        $cantidadF=(int)$row["cantidad"];
        //echo $clave;
        }
        
        $insertar = "UPDATE InventarioProductos
        SET cantidad = ($cantidadF + $cantidad)
        WHERE clave_producto=$clave";

       
   } else {
       $insertar="INSERT INTO `InventarioProductos` (`clave_producto`, `cantidad`) VALUES ('$clave', '$cantidad')";
   }


    if ($baseDatos->query($insertar) === TRUE) {
   //echo "New record created successfully";
    } else {
    echo "Error: " . $insertar . "<br>" . $baseDatos->error;
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
