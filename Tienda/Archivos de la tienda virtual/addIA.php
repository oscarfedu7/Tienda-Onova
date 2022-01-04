<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda Onova</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">



     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
        <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        Onova@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +443-3253253
                    </div>
                </div>
                <div class="ht-right">
                    <a href="#" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="mex.jpeg" data-imagecss="flag yt"
                                data-title="English">Español</option>
                            <option value='yu' data-image="img/flag-1.jpg" data-imagecss="flag yu"
                                data-title="Spanish">English </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="https://www.facebook.com/ONova-Jabones-Artesanales-Morelia-299035788565555"><i class="ti-facebook"></i></a>
                        <a href="https://www.instagram.com/onova_jabonesartesanales/"> <i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo2.png" alt="" width="70%" height="70%">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">Categorias</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>2</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="carbón.jpeg" alt="" width="70%" height="70%"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$40.00 x 1</p>
                                                            <h6>Jabón de Carbón Activado</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="producto9.jpeg" alt="" width="60%" height="60%"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$149.00 x 1</p>
                                                            <h6>Shampoo EGO</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$189.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">Comprar</a>
                                        <a href="Carrito.php" class="primary-btn checkout-btn">Ver carrito</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$150.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Categorías</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="Dermatologo.php">Dermatologo</a></li>
                            <li><a href="Lesiones.php">Lesiones</a></li>
                            <li><a href="Nutrición.php">Nutrición</a></li>
                            <li><a href="Belleza.php">Belleza</a></li>
                            <li><a href="CuidadoCabello.php">Cuidado del cabello</a></li>
                            <li><a href="Medicinas.php">Medicinas</a></li>
                            <li><a href="CuidadoDental.php">Cuidado dental</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="./TiendaInicio.php">Inicio</a></li>
                        <li><a href="LoMasVendido.php">Lo Más Vendido</a></li>
                        <li><a href="recomendado.php">Recomendado para ti</a></li>
                        <li class="active"><a href="IA.php">IA</a></li>
                        <li><a href="#">Otros</a>
                            <ul class="dropdown">
                                <li><a href="Carrito.php">Carrito de compra</a></li>
                                <li><a href="COntacto.php">Contacto</a></li>
                                <li><a href="./register.html">Registro</a></li>
                                <li><a href="./login.html">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->



    <div class="container">
  <h2>Productos Dermatológicos</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Buscar cliente:">
  <br>
  <table class="table table-bordered table-striped">
      <thead class="thead-dark">
         <th>Imagen</th><th>clave</th> <th>Linea</th> <th>Producto</th> <th>Categoría</th><th>Costo</th><th>Descripción</th>
    <tbody id="myTable">


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



    // Variables
      $Nutrición=0;
      $Medicina=0;
      $Belleza=0;
      $Dermatologo=0;
      $Cabello=0;
      $Dental=0;
      $Lesiones=0;
      
    $temas[0] = (boolean)$_POST['temas1'];
    $temas[1] = (boolean)$_POST['temas2'];
    $temas[2] = (boolean)$_POST['temas3'];
    $temas[3] = (boolean)$_POST['temas4'];
    $temas[4] = (boolean)$_POST['temas5'];
    $temas[5] = (boolean)$_POST['temas6'];
    $temas[6] = (boolean)$_POST['temas7'];
   

   if($temas[0]==1){
    $Lesiones++;
   }
      if($temas[1]==1){
    $Nutrición++;
   }
      if($temas[2]==1){
    $Belleza++;
   }
      if($temas[3]==1){
    $Dermatologo++;
   }
      if($temas[4]==1){
    $Medicina++;
   }
      if($temas[5]==1){
    $Dental++;
   }
      if($temas[6]==1){
    $Cabello++;
   }


    $pregunta[0] = (boolean)$_POST['pregunta1'];
    $pregunta[1] = (boolean)$_POST['pregunta2'];
    $pregunta[2] = (boolean)$_POST['pregunta3'];
    $pregunta[3] = (boolean)$_POST['pregunta4'];
    $pregunta[4] = (boolean)$_POST['pregunta5'];
    $pregunta[5] = (boolean)$_POST['pregunta6'];
    $pregunta[6] = (boolean)$_POST['pregunta7'];   

   if($pregunta[0]==1){
    $Lesiones++;
   }
      if($pregunta[1]==1){
    $Nutrición++;
   }
      if($pregunta[2]==1){
    $Belleza++;
   }
      if($pregunta[3]==1){
    $Dermatologo++;
   }
      if($pregunta[4]==1){
    $Medicina++;
   }
      if($pregunta[5]==1){
    $Dental++;
   }
      if($pregunta[6]==1){
    $Cabello++;
   }


    $buscar[0] = (boolean)$_POST['buscar1'];
    $buscar[1] = (boolean)$_POST['buscar2'];
    $buscar[2] = (boolean)$_POST['buscar3'];
    $buscar[3] = (boolean)$_POST['buscar4'];
    $buscar[4] = (boolean)$_POST['buscar5'];
    $buscar[5] = (boolean)$_POST['buscar6'];
   

   if($buscar[0]==1){
    $Lesiones++;
    $Medicina++;
   }
      if($buscar[1]==1){
    $Belleza++;
    $Dermatologo++;
   }
      if($buscar[2]==1){
    $Nutrición++; 
   }
      if($buscar[3]==1){
    $Cabello++; 
   }
      if($buscar[4]==1){
    $Dermatologo++;
   }
      if($buscar[5]==1){
    $Dental++;
   }

    $ob[0] = (boolean)$_POST['vehicle1'];
    $ob[1] = (boolean)$_POST['vehicle2'];
    $ob[2] = (boolean)$_POST['vehicle3'];
    $ob[3] = (boolean)$_POST['vehicle4'];
    $ob[4] = (boolean)$_POST['vehicle5'];
    $ob[5] = (boolean)$_POST['vehicle6'];
    $ob[6] = (boolean)$_POST['vehicle7'];
   

   if($ob[0]==1){
    $Dermatologo++;
   }
      if($ob[1]==1){
    $Nutrición++;
   }
      if($ob[2]==1){
    $Dental++;
   }
      if($ob[3]==1){
    $Medicina++;
   }
      if($ob[4]==1){
    $Cabello++;
   }
      if($ob[5]==1){
    $Belleza++;
   }
      if($ob[6]==1){
    $Lesiones++;
   }



    $aa[0] = (boolean)$_POST['nut'];
    $aa[1] = (boolean)$_POST['der'];
    $aa[2] = (boolean)$_POST['les'];
    $aa[3] = (boolean)$_POST['med'];
    $aa[4] = (boolean)$_POST['bel'];
    $aa[5] = (boolean)$_POST['den'];
    $aa[6] = (boolean)$_POST['cab'];   

   if($aa[0]==1){
    $Nutrición++;
   }
      if($aa[1]==1){
    $Dermatologo++;
   }
      if($aa[2]==1){
    $Lesiones++;
   }
      if($aa[3]==1){
    $Medicina++;
   }
      if($aa[4]==1){
    $Belleza++;
   }
      if($aa[5]==1){
    $Dental++;
   }
      if($aa[6]==1){
    $Cabello++;
   }


    echo "Les: ".$Lesiones;
    echo "Nut: ".$Nutrición;
    echo "Der: ".$Dermatologo;
    echo "Med: ".$Medicina;
    echo "Den: ".$Dental;
    echo "Cab: ".$Cabello;
    echo "Bell: ".$Belleza;




    $belleza = (boolean)$_POST['belleza'];
    $salud = (boolean)$_POST['salud'];


    if($belleza==1){
      $Belleza++; $Cabello++; $Dermatologo++;
    }
    else{
      $Lesiones++; $Medicina++; $Dental++; 
    }

    $max=max($Lesiones, $Nutrición, $Dermatologo, $Medicina, $Dental, $Cabello, $Belleza);
    
    $maximo;
    if($Lesiones==$max){
        $maximo="Lesiones";
    }
    elseif ($Medicina==$max) {
        $maximo="Medicinas";
    }
    elseif ($Nutrición==$max) {
        $maximo="Nutrición";
    }
    elseif ($Dermatologo==$max) {
        $maximo="Dermatológico";
    }
    elseif ($Dental==$max) {
        $maximo="Cuidado dental";
    }
    elseif($Belleza==$max) {
        $maximo="Belleza";
    }
    else{
        $maximo="Cuidado del cabello";
    }

    $sql = "select * from Producto where categoría_producto='".$maximo."'";
      $result = $baseDatos->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>  <td class='td1'>  <img src='".$row["imagen"]."'/ width='1050' height='300'> 
  </td><td>".$row["clave_producto"]."</td><td>".$row["Linea_producto"]."</td><td>".$row["producto"]."</td><td>".$row["categoría_producto"]."</td><td>".$row["costo_producto"]."</td><td>".$row["descripción_producto"]."</td> </tr>";
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

      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>



