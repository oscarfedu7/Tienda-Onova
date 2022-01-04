<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buscar Cliente</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">


     <style>
    /* Make the image fully responsive */
      .carousel-inner img {
        width: 50%;
        height: 50%;
      }
    </style>  



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
    ?>



  </head>












  <body>


<!-- LA NAVBAR-->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top flex-md-nowrap p-0 shadow">
  <!-- Brand -->
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Onova</a>

  <!-- Links -->
  <ul class="navbar-nav ">
    
      <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Clientes
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Buscar cliente</a>
        <a class="dropdown-item" href="#">Agregar cliente</a>
        <a class="dropdown-item" href="#">Cliente del mes</a>
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Proveedores
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="ProveedorBuscar.php">Buscar proveedor</a>
        <a class="dropdown-item" href="Agregar/ProveedorAgregar.php">Agregar proveedor</a>
        <a class="dropdown-item" href="#">¿Dónde conseguir un producto?</a>
        <a class="dropdown-item" href="#">Buscar empresa</a>
      </div>
    </li>
     <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Vendedores
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="VendedorBuscar.php">Buscar vendedor</a>
        <a class="dropdown-item" href="#">Agregar vendedor</a>
        <a class="dropdown-item" href="#">Top 10 en ventas</a>
        <a class="dropdown-item" href="#">Quién le vendio a.</a>
      </div>
    </li>
     <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Productos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="ProductosBuscar.php">Buscar producto</a>
        <a class="dropdown-item" href="#">Agregar productos al invenario</a>
        <a class="dropdown-item" href="#">Muestra inventario</a>  
        <a class="dropdown-item" href="#">Buscar proveedor</a>
        <a class="dropdown-item" href="#">Más vendido</a>
      </div>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="https://branders.social/mweb2&tracking=5f4307afdc3f0">Página web</a>
    </li>

  </ul>
    <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   
    </p>      
    </p>
      <!-- El Serch -->
    <form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" id="myInput2" type="text" placeholder="Buscar persona">
      <button class="btn btn-success" type="submit">Buscar</button>
    </form>

</nav>




<!-- LA BARRA NUEVA-->

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">

          <div align="center">  <img src="logo.png"  width="50%" height="100%"> </div>

          <li class="nav-item">
            <a class="nav-link " href="http://localhost/Proyecto2.php">
              <span data-feather="home"></span>
              Inicio <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="dollar-sign"></span>
              Ventas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="activity"></span>
              Utilidades
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Usuario.php">
              <span data-feather="users"></span>
              Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reportes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="package"></span>
              Inventario Material
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">







<div class="container">
  <h2>Clientes:</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Buscar cliente:">
  <br>
  <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <th>id</th> <th>Nombre</th> <th>Apellido</th> <th>Fecha de Nacimiento</th><th>Ciudad</th><th>Genero</th><th>Correo</th><th>id_teléfono</th><th>Teléfono</th><th>nosConoce</th>
    <tbody id="myTable">
      <?php
        $sql = "select a.id_persona, nombre_persona, apellido_persona, fechaNacimiento_persona, ciudad_persona, genero_persona, correo, id_teléfono, teléfono, nosConocePor  from (select o.id_persona, nombre_persona, apellido_persona, fechaNacimiento_persona, ciudad_persona, genero_persona, correo, id_teléfono, teléfono from (select Persona.id_persona, nombre_persona, apellido_persona, fechaNacimiento_persona, ciudad_persona, genero_persona, correo from Persona inner join Correos on Persona.id_persona=Correos.id_persona) as o inner join Teléfonos on o.id_persona = Teléfonos.id_persona) as a inner join Cliente on a.id_persona = Cliente.id_persona";
      $result = $baseDatos->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["id_persona"]."</td><td>".$row["nombre_persona"]."</td><td>".$row["apellido_persona"]."</td><td>".$row["fechaNacimiento_persona"]."</td><td>".$row["ciudad_persona"]."</td><td>".$row["genero_persona"]."</td><td>".$row["correo"]."</td><td>".$row["id_teléfono"]."</td><td>".$row["teléfono"]."</td><td>".$row["nosConocePor"]."</td></tr>";
        }
      } else {
        echo "0 results";
      }
      $baseDatos->close();
    ?>
      
    </tbody>
  </thead>>
  </table>
  
 <!-- <p>No se encontraron Clientes con esa descripción.</p> -->
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>






<!--

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>







        

  </body>
</html>
