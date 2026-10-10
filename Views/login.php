<?php

session_start();

    if (!isset($_SESSION['usuario'])) {
        session_destroy();
    }


?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Assets/img/Logo_Uas.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/login.css">
    <title>Iniciar sesion</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html"><img src="../Assets/img/adiuas.png" class="logo" height="77px"
                    width="200px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <h2>UNIVERSIDAD AUTONOMA DE SINALOA</h2>
                </ul>
            </div>
    </nav>


    <div class="form-container">

        <form action="../Controllers/ValidacionLogin.php" method="post">

            <h1 class="display-3">INICIA SESION</h1>
            <p>Recuerda que si pierdes tu contraseña, puedes pedir a
                alguien de la facultad de informática para que te ayude a recuperarla.
            </p>

            <div class="form-floating mb-3">

                <input type="text" class="form-control" id="input_username" name="input_username" placeholder=" "
                    required>
                <label for="floatingInput" class="form-label">Usuario</label>

            </div>

            <div class="form-floating password-field">
                <input type="password" class="form-control" id="input_password" name="input_password" placeholder=" "
                    autocomplete="current-password" required>
                <label for="input_password" class="form-label">Contraseña</label>
                <button class="password-toggle" type="button" id="toggle_password" aria-label="Mostrar contraseña"
                    aria-pressed="false" aria-controls="input_password">
                    <img src="../Assets/img/eye.svg" alt="" id="password_toggle_icon">
                </button>
            </div>

            <input type="submit" value="Ingresar" class="btn">

        </form>

    </div>

    <script>
        const passwordInput = document.getElementById("input_password");
        const passwordToggle = document.getElementById("toggle_password");
        const passwordToggleIcon = document.getElementById("password_toggle_icon");
        passwordToggle.addEventListener("click", () => {
            const isVisible = passwordInput.type === "text";
            passwordInput.type = isVisible ? "password" : "text";
            passwordToggleIcon.src = isVisible ? "../Assets/img/eye.svg" : "../Assets/img/eye-slash.svg";
            passwordToggle.setAttribute("aria-label", isVisible ? "Mostrar contraseña" : "Ocultar contraseña");
            passwordToggle.setAttribute("aria-pressed", String(!isVisible));
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>