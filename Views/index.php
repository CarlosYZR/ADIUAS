<?php

    include("../Controllers/UsuarioControlador.php");

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
                  <a class="navbar-brand" href="../index.html"><img src="../assets/img/adiuas.png" class="logo" height="77px" width="200px"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                        
                      <li class="nav-item">   
                        <a href="informes.php">
                            <h2 class="item">
                                <svg style="margin-bottom: 4px;" xmlns="http://www.w3.org/2000/svg" width="50" height="45" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                                </svg>Informes
                            </h2>
                        </a>
                      </li>

                      <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          
                            <a href="" data-bs-toggle="dropdown"><h2>Ciclo escolar</h2></a>
                              
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="informes.php"><h3>2024 - 2025</h3></a></li>
                                <li><a class="dropdown-item" href="informes.php"><h3>2025 - 2026</h3></a></li>
                                <li><a class="dropdown-item" href="informes.php"><h3>2026 - 2027</h3></a></li>
                                <li><a class="dropdown-item" href="informes.php"><h3>2027 - 2028</h3></a></li>
      
                            </ul>
                        </li>
                    </ul>
                  
      
                      <li class="nav-item">
                          <a href="RegistroVisita.php">
                            <h2 class="item">
                                <svg style="margin-bottom: 5px;" xmlns="http://www.w3.org/2000/svg" width="50" height="45" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                                </svg>Registrar visita
                            </h2>
                          </a>
                      </li>
    
      
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          
                            <a href="" data-bs-toggle="dropdown"><h2>Unidades</h2></a>
                              
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="informes.php"><h3>Operatividad y logistica</h3></a></li>
                                <li><a class="dropdown-item" href="informes.php"><h3>Tiflotecnologias</h3></a></li>
                                <li><a class="dropdown-item" href="informes.php"><h3>Psicopedagogia</h3></a></li>
                                <li><a class="dropdown-item" href="informes.php"><h3>Audicion y lenguaje</h3></a></li>
                                <li><a class="dropdown-item" href="informes.php"><h3>Psicologia</h3></a></li>
                                <li><a class="dropdown-item" href="informes.php"><h3>Asesorias academicas y creacion de material adaptado</h3></a></li>
      
                            </ul>
                        </li>
                    </ul>
      
                </ul>
                    
                <a href="../Controllers/CerrarSesion.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                </a> &nbsp;&nbsp;&nbsp;
                <a href="../Controllers/CerrarSesion.php"><h2><?php  echo(strtoupper($_SESSION['usuario']));  ?></h2></a>
            </nav>
      


          <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">

                <!-- ##################### EVENTOS DEL AÑO ########################### -->
                <div class="carousel-item">
                    <img src="../Assets/img/carousel2.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item active">
                    <img src="../Assets/img/carrusel-banner.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../Assets/img/carousel.jpg" class="d-block w-100" alt="..." >
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
      

          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                     <div class="card" style="width: 420px; height: 720px;">
                            <div class="card-body">
                                <h1 class="card-title">Eventos del Mes</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                     
                  </div>
              </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
      </body>
      </html>


