 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mi proyecto</title>


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
        <a class="dropdown-item" href="ClienteBuscar.php">Buscar cliente</a>
        <a class="dropdown-item" href="Agregar/ClienteAgregar.php">Agregar cliente</a>
        <a class="dropdown-item" href="TopClientes.php">Cliente del mes</a>
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
        <a class="dropdown-item" href="Agregar/VendedorAgregar.php">Agregar vendedor</a>
        <a class="dropdown-item" href="Ganancias.php">Ganancias de los vendedores</a>
        <a class="dropdown-item" href="TopVentas.php">Top 5 en ventas</a>
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
        <a class="dropdown-item" href="Agregar/InventarioAgregar.php">Agregar productos al invenario</a>
        <a class="dropdown-item" href="inventarioBuscar.php">Muestra inventario</a>
        <a class="dropdown-item" href="#">Buscar proveedor</a>
        <a class="dropdown-item" href="Agregar/ProductosAgregar.php">Nuevo producto</a>
        <a class="dropdown-item" href="Tienda/fashi-master/LoMasVendido.php">Más vendido</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="https://branders.social/mweb2&tracking=5f4307afdc3f0">Página web</a>
    </li>

  </ul>
    <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   
    </p>      
    </p>
      <!-- El Serch -->
    <form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" id="myInput" type="text" placeholder="Buscar persona">
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
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Inicio <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Ventas.php">
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
      <div class="container p-3 my-3 border">
          <h1>Onova jabónes artesanales</h1>
          <p>base de datos</p>
      </div>
      <div class="container p-3 my-3 bg-dark text-white"></div>



 <!-- EL CARUSEL DE FOTOS -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div align="center">
      <img src="belleza.jpg" alt="Los Angeles" width="500" height="200">
      </div>
      <div class="carousel-caption">
        <h3 style="color:black;">Productos naturales</h3>
        <p style="color:black;">Nunca es tarde para cuidar tu piel</p>
      </div>   
    </div>
    <div class="carousel-item">
        <div align="center">
          <img src="onova2.jpg" alt="Chicago" width="50" height="50">
      </div>
      <div class="carousel-caption">
        <h3 style="color:black;">Amor</h3>
        <p style="color:black;">La mejor medicina para tu piel es el amor</p>
      </div>   
    </div>
    <div class="carousel-item">
       <div align="center">
          <img src="onova5.jpg" alt="New York" width="1000" height="1000">
       </div>
      <div class="carousel-caption">
        <h3 style="color:white;">Jabón de carbón activado</h3>
        <p style="color:white;">¿Cuída tu piel!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>









<!--

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>







          <!-- LA GALERIA DE IMAGENES  COMENTAR-->

   
    <br> <br> <br>
<div class="container">
  <h2>Información de la base de datos de Onova:</h2>
  <p>Jabones Artesanales</p>
  <p>🔝Mejora tu salud y tu belleza facial.</p>
  <p>🌳jabones 100% naturales.</p> 
  <p> 📍Morelia, Mich. </p>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/home/oscar/imágenes/clientes.jpg" target="_blank">
          <img src="clientes.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>CLIENTES</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="proveedores.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>PRODUCTOS</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="vendedor.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>VENDEDORES</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


<br> <br> <br> <br>
 <a name="Ancla" id="a"></a>
<div class="container p-3 my-3 bg-black text-white">
<div align="center"><iframe width="70%" height="600" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
</iframe> </div> </div>

  </body>
</html>
