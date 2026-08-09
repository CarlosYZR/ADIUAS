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
    <link rel="shortcut icon" href="../Assets/img/Logo_Uas.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/login.css">
    <title>Iniciar sesion</title>
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

      
                </ul>
                    
                
            <h2>ATENCION A LA DIVERSIDAD</h2>
    </nav>

    
    <div class="form-container">

        <form action="../Controllers/ValidacionLogin.php" method="post">

            <h1>Inicia sesion:</h1>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="input_username" name="input_username" placeholder=" " required>
                <label for="floatingInput" class="form-label">Usuario</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="input_password" name="input_password" placeholder=" " required>
                <label for="floatingPassword" class="form-label" >Contraseña</label>
            </div>

            <input type="submit" value="Ingresar" class="btn">

        </form>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>