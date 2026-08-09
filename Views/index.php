<?php

    session_start();

    if(empty($_SESSION['usuario'])){
        
        header("Location: login.php");
        exit();
        
    }

?>
      
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Adiuas</title>
          <link rel="shortcut icon" href="../Assets/img/Logo_Uas.ico">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
          <link rel="stylesheet" href="../Assets\css\index.css">
      </head>
      <body>
       
              
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img src="../assets/img/adiuas.png" class="logo" height="77px" width="200px"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a href="login.php"><h2 class="item">Inicio</h2></a>
                      </li>
                      <li class="nav-item">
                          <a href="informes.php"><h2 class="item">Informes</h2></a>
                      </li>
                  
      
                      <li class="nav-item">
                          <h2 class="item">Registrar visita</h2>
                      </li>
      
                      <!--
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <h2>Unidades</h2>
                          </a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                      </li> -->
      
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          
                            <a href="" data-bs-toggle="dropdown"><h2>Unidades</h2></a>
                              
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><h3>Operatividad y logistica</h3></a></li>
                                <li><a class="dropdown-item" href="#"><h3>Tiflotecnologias</h3></a></li>
                                <li><a class="dropdown-item" href="#"><h3>Psicopedagogia</h3></a></li>
                                <li><a class="dropdown-item" href="#"><h3>Audicion y lenguaje</h3></a></li>
                                <li><a class="dropdown-item" href="#"><h3>Psicologia</h3></a></li>
                                <li><a class="dropdown-item" href="#"><h3>Asesorias academicas y creacion de material adaptado</h3></a></li>
      
                            </ul>
                        </li>
                    </ul>
      
                </ul>
                    
                <a href="../Controllers/CerrarSesion.php"><img src="../Assets\img\icon_user.png" alt="" height="50px" width="50px"></a> &nbsp;&nbsp;&nbsp;
                <a href="../Controllers/CerrarSesion.php"><h2>  <?php  echo $_SESSION['usuario'];  ?>  </h2></a>
            </nav>
      
      
      
          <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                  <div class="carousel-item">
                  <img src="../Assets/img/algo.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item active">
                  <img src="../Assets/img/uastrans.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                  <img src="../Assets/img/chikichiki.jpg" class="d-block w-100" alt="..." height="750px">
                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
          </div>
      
      
      
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
      </body>
      </html>





