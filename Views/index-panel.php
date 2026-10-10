<?php
include("../Controllers/UsuarioControlador.php");
session_start();

if (empty($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#06264b">
    <title>ADIUAS | Panel</title>
    <link rel="shortcut icon" href="../Assets/img/Logo_Uas.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/index-panel.css">
</head>
<body>
    <header class="panel-header">
        <nav class="navbar navbar-expand-xl panel-navbar" aria-label="Navegación principal">
            <div class="container-fluid panel-navbar-inner">
                <a class="navbar-brand panel-brand" href="../Controllers/CerrarSesion.php" aria-label="ADIUAS, inicio">
                    <img src="../Assets/img/adiuas.png" alt="ADIUAS, Atención a la Diversidad">
                </a>
                <button class="navbar-toggler panel-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelNavigation" aria-controls="panelNavigation" aria-expanded="false"
                    aria-label="Abrir menú">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse panel-navigation" id="panelNavigation">
                    <ul class="navbar-nav panel-nav-list">
                        <li class="nav-item">
                            <a class="nav-link panel-nav-link" href="informes.php">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                                <span>Informes</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <button class="nav-link panel-nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="9" width="14" height="12" rx="2"/><path d="M8 9V6a4 4 0 0 1 8 0v3m-4 4v4"/></svg>
                                <span>Ciclo escolar</span>
                            </button>
                            <ul class="dropdown-menu panel-dropdown">
                                <li><a class="dropdown-item" href="informes.php">2024–2025</a></li>
                                <li><a class="dropdown-item" href="informes.php">2025–2026</a></li>
                                <li><a class="dropdown-item" href="informes.php">2026–2027</a></li>
                                <li><a class="dropdown-item" href="informes.php">2027–2028</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link panel-nav-link" href="RegistroVisita.php">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="9" cy="7" r="4"/><path d="M2 21v-2a7 7 0 0 1 14 0v2m4-12v8m-4-4h8"/></svg>
                                <span>Registrar visita</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <button class="nav-link panel-nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 3h10l4 4v14H5zM15 3v5h4M8 12h8m-8 4h8"/></svg>
                                <span>Unidades</span>
                            </button>
                            <ul class="dropdown-menu panel-dropdown">
                                <li><a class="dropdown-item" href="informes.php">Operatividad y logística</a></li>
                                <li><a class="dropdown-item" href="informes.php">Tiflotecnologías</a></li>
                                <li><a class="dropdown-item" href="informes.php">Psicopedagogía</a></li>
                                <li><a class="dropdown-item" href="informes.php">Audición y lenguaje</a></li>
                                <li><a class="dropdown-item" href="informes.php">Psicología</a></li>
                                <li><a class="dropdown-item" href="informes.php">Asesorías académicas y creación de material adaptado</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="panel-account">
                        <a class="reports-link" href="informes2.php">Acceso a Informes 2</a>
                        <a class="account-icon" href="../Controllers/CerrarSesion.php" aria-label="Cerrar sesión de <?php echo htmlspecialchars(strtoupper($_SESSION['usuario']), ENT_QUOTES, 'UTF-8'); ?>">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21v-2a8 8 0 0 1 16 0v2z"/></svg>
                        </a>
                        <a class="account-name" href="../Controllers/CerrarSesion.php"><?php echo htmlspecialchars(strtoupper($_SESSION['usuario']), ENT_QUOTES, 'UTF-8'); ?></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="panel-main">
        <section id="panelCarousel" class="carousel slide carousel-fade panel-carousel" data-bs-ride="carousel" aria-label="Novedades de ADIUAS">
            <div class="carousel-inner">
                <article class="carousel-item active">
                    <div class="carousel-card">
                        <div class="carousel-image-wrap">
                            <img src="../Assets/img/Carrusel-banner.png" alt="Comunidad universitaria en actividades académicas">
                        </div>
                        <div class="carousel-copy">
                            <p class="carousel-kicker">ADIUAS · Universidad Autónoma de Sinaloa</p>
                            <h1>Atención a la diversidad</h1>
                            <p>Acompañamos a nuestra comunidad universitaria y construimos espacios accesibles para todas las personas.</p>
                        </div>
                    </div>
                </article>
                <article class="carousel-item">
                    <div class="carousel-card">
                        <div class="carousel-image-wrap">
                            <img src="../Assets/img/carousel.jpg" alt="Espacios universitarios de la UAS">
                        </div>
                        <div class="carousel-copy">
                            <p class="carousel-kicker">Una universidad para todas las personas</p>
                            <h2>Aprender sin barreras</h2>
                            <p>Promovemos apoyos y ajustes que favorecen la participación y el aprendizaje en cada unidad académica.</p>
                        </div>
                    </div>
                </article>
                <article class="carousel-item">
                    <div class="carousel-card">
                        <div class="carousel-image-wrap">
                            <img src="../Assets/img/carousel2.jpg" alt="Instalaciones y áreas verdes universitarias">
                        </div>
                        <div class="carousel-copy">
                            <p class="carousel-kicker">Comunidad ADIUAS</p>
                            <h2>La inclusión la construimos en equipo</h2>
                            <p>Estudiantes, familias y personal universitario participan en una comunidad con igualdad de oportunidades.</p>
                        </div>
                    </div>
                </article>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#panelCarousel" data-bs-slide="prev" aria-label="Anterior">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#panelCarousel" data-bs-slide="next" aria-label="Siguiente">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#panelCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Diapositiva 1"></button>
                <button type="button" data-bs-target="#panelCarousel" data-bs-slide-to="1" aria-label="Diapositiva 2"></button>
                <button type="button" data-bs-target="#panelCarousel" data-bs-slide-to="2" aria-label="Diapositiva 3"></button>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
