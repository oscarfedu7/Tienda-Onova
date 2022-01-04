<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregar Proveedor</title>


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


    <!--PHP -->


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
        <a class="dropdown-item" href="ClienteBuscar.php">Buscar cliente</a>
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
        <a class="dropdown-item" href="#">Agregar proveedor</a>
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










<!-- parte de las preguntas-->

<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="cliente.jpg" alt="" width="300" height="250">
    <h2>Agregar proveedor</h2>
    <p><a href="#Ancla">¿Ya es un usuario registrado?</a></p>
  </div>


    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Agregar datos:</h4>
      <form class="needs-validation"  action="AddProveedor.php" method="POST" novalidate>
        <div class="row">
          <div class="col-md">
            <label for="firstName">Nombre<span class="text-muted"> (Obligatorio)</span></label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="" required>
            <div class="invalid-feedback" >
             El nombre es requerido.
            </div>
          </div>

            <div class="col-md-6 mb-3">
              <label for="lastName">Apellidos<span class="text-muted"> (Obligatorio)</span></label>
              <input type="text" class="form-control" id="lastName" name="apellido" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
        </div>


        <p></p>
        <div class="mb-3">
          <label for="email">Teléfono <span class="text-muted">(Obligatorio)</span></label>
          <label for="username"></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">lada</span>
            </div>
            <input type="text" class="form-control" id="cel" name="cel" placeholder="" required>
            <div class="invalid-feedback" style="width: 100%;">
              tu teléfono es requerido.
            </div>
          </div>
        </div>


        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Obligatorio)</span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Por favor pon un correo válido.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Fecha de nacimiento</label>
          <input type="text" class="form-control" id="fecha" name="fecha" placeholder="AAAA/MM/DD">
          <div class="invalid-feedback">
            Escribe una fecha de nacimiento válida.
          </div>
        </div>


          <div class="mb-3">
            <label for="firstName">Empresa<span class="text-muted"> (Obligatorio)</span></label>
            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="" value="" required>
            <div class="invalid-feedback" >
             El nombre es requerido.
            </div>
          </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Ciudad<span class="text-muted"></span></label>
            <select class="custom-select d-block w-100" id="ciudad" name="ciudad">
              <option value="">Choose...</option>
              <option>Morelia</option>
              <option>Queretaro</option>
              <option>Leon</option>
              <option>Guadalajara</option>
              <option>CDMX</option>
            </select>
            <div class="invalid-feedback">
              Por favor selecciona una ciudad válida.
            </div>
          </div>

            <div class="col-md-5 mb-3">
            <label for="country">Sexo<span class="text-muted"> (Obligatorio)</span></label>
            <select class="custom-select d-block w-100" id="sexo2" name="sexo" required>
              <option value="">Choose...</option>
              <option>H</option>
              <option>M</option>
            </select>
            <div class="invalid-feedback">
              Por favor seleccione alguna opción.
            </div>
          </div>
        </div>

   
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Agregar proveedor</button>
      </form>
    </div>
  </div>

<br><br><br><br><br>




<a name="Ancla" id="a"></a>

  <!-- parte de las preguntas-->

<div class="container">
  <div class="py-5 text-center">
    <h2>Registrar como Proveedor a un Usuario ya registardo</h2>
  </div>


    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Agregar datos:</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md">
            <label for="firstName">id_Persona<span class="text-muted">(Obligatorio)</span></label>
            <input type="text" class="form-control" id="nombre" placeholder="" value="" required>
            <div class="invalid-feedback" >
             El id es requerido.
            </div>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md">
            <label for="firstName">Empresa<span class="text-muted">(Obligatorio)</span></label>
            <input type="text" class="form-control" id="empresa" placeholder="" value="" required>
            <div class="invalid-feedback" >
             El nombre es requerido.
            </div>
          </div>
        </div>
        
   
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Agregar cliente</button>
      </form>
    </div>
  </div>





  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019-2021 Onova</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>





</div>














<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script>


<!--

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>




<?php
        $sql = "INSERT INTO `Persona` (`nombre_persona`, `id_persona`,`fechaNacimiento_persona`, `ciudad_persona`, `genero_persona`) 
VALUES ('Oscar Fernández Durán', '0001', '2000/05/07', 'Morelia', 'H')";
      $result = $baseDatos->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["clave_producto"]."</td><td>".$row["Linea_producto"]."</td><td>".$row["ingrediente_producto"]."</td><td>".$row["tamaño_producto"]."</td><td>".$row["costo_producto"]."</td></tr>";
        }
      } else {
        echo "0 results";
      }
      $baseDatos->close();
    ?>



 
        

  </body>
</html>
