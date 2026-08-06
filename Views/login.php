
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">

  <title>Bienvenido a ADIUAS</title>

  <link rel="stylesheet" href="../Assets/css/login_styles.css">
  <link rel="shortcut icon" href="../Assets/img/Logo_Uas.ico">
  <link rel="stylesheet" type="text/css" href="../Assets/css/overhang.min.css" />

</head>
<body>
  <header>
    <nav>
    <div class="logo-container">
    <img src="../Assets/img/adiuas.jpg" alt="Logo de ADIUAS" class="logo">
  </div>

  <div class="inicio-container">
      <a href=""> <h2>Inicio</h2> </a>

      <a href="https://www.uas.edu.mx/nuestra-universidad/mision-vision-y-valores"><h2>¿Quiénes somos?</h2></a>
      
      <a href="https://www.facebook.com/UASoficial/"><h2>Contacto</h2></a>
  </div>

    </nav>
  </header>

  <div class="main-content">
    <h1>Iniciar Sesión</h1>
    <form id="loginform" action="../Controllers/ValidacionLogin.php" method="post">

      <label for="username">Usuario</label>
      <input type="text" id="username" name="input_username" autofocus required>

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="input_password" required>

      <input type="submit" value="Ingresar" class="btn">
      
    </form>
  </div>

  <div class="footer">
    <footer>
      &copy; 2025 Programa ADIUAS — Universidad Autónoma de Sinaloa
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <script type="text/javascript" src="../Assets/js/overhang.min.js"></script>
  <script src="..\Assets\js\app.js"></script>
</body>
</html>



