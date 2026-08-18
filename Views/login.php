<?php

// Inicia o recupera la sesión actual de PHP.
session_start();

// Si existe un usuario guardado en la sesión,
// destruimos esa sesión al entrar nuevamente al login.
if (!empty($_SESSION['usuario'])) {
    session_destroy();
}

?>

<!DOCTYPE html>

<!--
    Documento HTML en español.
-->
<html lang="es">

<head>

    <!--
        Permite utilizar correctamente caracteres como:
        á, é, í, ó, ú, ñ, ¿, etc.
    -->
    <meta charset="UTF-8">

    <!--
        Hace que la página se adapte correctamente
        al tamaño de celulares, tablets y computadoras.
    -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <!--
        Icono que aparece en la pestaña del navegador.
    -->
    <link
        rel="shortcut icon"
        href="../Assets/img/Logo_Uas.ico"
    >

    <!--
        Título que aparece en la pestaña de Chrome.
    -->
    <title>Iniciar sesión</title>


    <style>

        /* ==================================================
           CONFIGURACIÓN GENERAL
           ================================================== */

        /*
            Selecciona todos los elementos de la página.

            margin: 0;
            elimina márgenes predeterminados.

            padding: 0;
            elimina espacios internos predeterminados.

            box-sizing: border-box;
            hace que padding y bordes formen parte
            del ancho y alto de los elementos.
        */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /*
            Tanto <html> como <body>
            ocuparán todo el ancho disponible.
        */
        html,
        body {
            width: 100%;
            min-height: 100%;
        }


        /*
            Configuración principal
            del cuerpo de la página.
        */
        body {

            /*
                100vh representa el 100%
                de la altura visible del navegador.
            */
            min-height: 100vh;


            /*
                Fuente principal del sitio.
                Si Segoe UI no existe,
                utilizará Arial.
            */
            font-family:
                "Segoe UI",
                Arial,
                sans-serif;


            /*
                Utilizamos dos capas como fondo.

                1. Un filtro azul transparente.
                2. La fotografía Rectoría_UAS.jpg.
            */
            background-image:
                linear-gradient(
                    rgba(8, 32, 85, 0.12),
                    rgba(8, 32, 85, 0.12)
                ),
                url("../Assets/img/Rectoría_UAS.jpg");


            /*
                cover hace que la fotografía cubra
                toda la pantalla sin repetirse.
            */
            background-size: cover;


            /*
                Mantiene el centro de la fotografía visible.
            */
            background-position: center center;


            /*
                Evita que la imagen se repita.
            */
            background-repeat: no-repeat;


            /*
                Mantiene la fotografía fija
                cuando existe desplazamiento vertical.
            */
            background-attachment: fixed;


            /*
                Color de texto predeterminado.
            */
            color: #111;
        }



        /* ==================================================
           ENCABEZADO
           ================================================== */

        /*
            Barra azul superior que contiene:
            - Logo ADIUAS
            - Nombre de la Universidad
        */
        .header {

            /* Ocupa todo el ancho de la pantalla. */
            width: 100%;

            /* Azul institucional. */
            background-color: #082055;

            /*
                Sombra debajo del encabezado
                para separarlo visualmente del fondo.
            */
            box-shadow:
                0 4px 18px
                rgba(0, 0, 0, 0.25);

            /*
                Permite controlar su posición
                respecto a otros elementos.
            */
            position: relative;

            /*
                Hace que permanezca visualmente
                por encima del contenido.
            */
            z-index: 10;
        }



        /* ==================================================
           CONTENEDOR DEL LOGO Y DEL TEXTO
           ================================================== */

        /*
            Este contenedor utiliza Flexbox.

            Eso permite que el logo y el texto
            aparezcan uno al lado del otro.
        */
        .header-main {

            /* Utiliza todo el ancho disponible. */
            width: 100%;

            /* Altura mínima del encabezado. */
            min-height: 115px;

            /* Activa Flexbox. */
            display: flex;

            /*
                Coloca los elementos horizontalmente:
                LOGO → TEXTO.
            */
            flex-direction: row;

            /*
                Centra verticalmente
                el logo y el texto.
            */
            align-items: center;

            /*
                Hace que comiencen
                desde el lado izquierdo.
            */
            justify-content: flex-start;

            /*
                Separación de 30px
                entre el logo y el texto.
            */
            gap: 30px;

            /*
                12px arriba/abajo.
                32px izquierda/derecha.
            */
            padding: 12px 32px;
        }



        /* ==================================================
           CONTENEDOR DEL LOGO
           ================================================== */

        /*
            Caja blanca que contiene
            la imagen de ADIUAS.
        */
        .logo-box {

            /* Ancho del cuadro. */
            width: 210px;

            /* Alto del cuadro. */
            height: 88px;

            /*
                Utilizamos Flexbox
                para centrar la imagen.
            */
            display: flex;

            /* Centrado vertical. */
            align-items: center;

            /* Centrado horizontal. */
            justify-content: center;

            /*
                Evita que Flexbox reduzca
                automáticamente el logo.
            */
            flex-shrink: 0;

            /* Fondo blanco. */
            background-color: #ffffff;

            /* Esquinas ligeramente redondeadas. */
            border-radius: 6px;

            /*
                Evita que alguna parte
                de la imagen salga del cuadro.
            */
            overflow: hidden;

            /* Sombra ligera alrededor del logo. */
            box-shadow:
                0 2px 8px
                rgba(0, 0, 0, 0.18);
        }



        /* ==================================================
           IMAGEN ADIUAS
           ================================================== */

        /*
            Estilos aplicados únicamente
            a la imagen dentro de .logo-box.
        */
        .logo-box img {

            /* Ancho de la imagen. */
            width: 190px !important;

            /* Alto de la imagen. */
            height: 76px !important;

            /*
                Limita su tamaño máximo
                para que nunca se vuelva gigantesca.
            */
            max-width: 190px !important;
            max-height: 76px !important;

            /*
                Mantiene las proporciones originales.
                No estira ni deforma el logo.
            */
            object-fit: contain !important;

            /*
                Evita comportamientos extraños
                de imágenes inline.
            */
            display: block !important;
        }



        /* ==================================================
           UNIVERSIDAD AUTÓNOMA DE SINALOA
           ================================================== */

        .university-name {

            /* Texto blanco. */
            color: #ffffff;

            /*
                Fuente serif para darle
                apariencia institucional.
            */
            font-family:
                Georgia,
                "Times New Roman",
                serif;

            /*
                Tamaño responsive.

                Nunca menos de 22px.
                Aproximadamente 2% de la pantalla.
                Nunca más de 32px.
            */
            font-size:
                clamp(
                    22px,
                    2vw,
                    32px
                );

            /* Negrita. */
            font-weight: 700;

            /*
                Añade espacio entre letras.
            */
            letter-spacing: 2px;

            /*
                Convierte automáticamente
                el texto a mayúsculas.
            */
            text-transform: uppercase;

            /*
                Controla el espacio vertical
                entre líneas si el texto se divide.
            */
            line-height: 1.2;
        }



        /* ==================================================
           ÁREA PRINCIPAL
           ================================================== */

        /*
            Contenedor donde se encuentra
            la tarjeta del login.
        */
        .page {

            /*
                El área ocupa aproximadamente
                toda la pantalla menos el encabezado.
            */
            min-height:
                calc(
                    100vh
                    - 115px
                );

            /* Utiliza todo el ancho. */
            width: 100%;

            /* Activa Flexbox. */
            display: flex;

            /*
                El login comienza
                desde la parte superior.
            */
            align-items: flex-start;

            /*
                El login aparece
                hacia el lado izquierdo.
            */
            justify-content: flex-start;

            /*
                Espacio adaptable arriba/abajo.

                El 6% genera separación
                respecto al borde izquierdo.
            */
            padding:
                clamp(
                    45px,
                    6vh,
                    70px
                )
                6%;
        }



        /* ==================================================
           TARJETA DEL LOGIN
           ================================================== */

        .login-card {

            /*
                Ancho responsive.

                Mínimo: 360px.
                Preferido: 30% de pantalla.
                Máximo: 470px.
            */
            width:
                clamp(
                    360px,
                    30vw,
                    470px
                );

            /*
                Espacio interior:

                40px arriba.
                38px laterales.
                36px abajo.
            */
            padding:
                40px
                38px
                36px;

            /*
                Fondo blanco con ligera transparencia.
                Esto deja ver un poco la fotografía.
            */
            background:
                rgba(
                    255,
                    255,
                    255,
                    0.92
                );

            /*
                Borde blanco semitransparente.
            */
            border:
                1px solid
                rgba(
                    255,
                    255,
                    255,
                    0.60
                );

            /*
                Esquinas redondeadas.
            */
            border-radius: 24px;

            /*
                Difumina ligeramente
                la fotografía detrás del formulario.
            */
            backdrop-filter: blur(10px);

            /*
                Versión para navegadores WebKit.
            */
            -webkit-backdrop-filter: blur(10px);

            /*
                Sombra para separar visualmente
                el formulario del fondo.
            */
            box-shadow:
                0 18px 45px
                rgba(
                    0,
                    0,
                    0,
                    0.28
                );
        }



        /* ==================================================
           TÍTULO "INICIA SESIÓN"
           ================================================== */

        .login-title {

            /*
                Separación respecto
                al primer input.
            */
            margin-bottom: 30px;

            /* Azul institucional. */
            color: #082055;

            /*
                Tamaño responsive del título.
            */
            font-size:
                clamp(
                    34px,
                    2.8vw,
                    46px
                );

            /*
                Peso intermedio.
            */
            font-weight: 500;

            /*
                Junta ligeramente las letras.
            */
            letter-spacing: -0.8px;
        }



        /* ==================================================
           CAMPOS USUARIO Y CONTRASEÑA
           ================================================== */

        .form-control {

            /* Ocupan todo el ancho disponible. */
            width: 100%;

            /* Altura de cada input. */
            height: 50px;

            /* Separación entre campos. */
            margin-bottom: 18px;

            /*
                Pequeño espacio
                dentro de los inputs.
            */
            padding:
                0
                4px;

            /*
                Quitamos los bordes tradicionales.
            */
            border: none;

            /*
                Dejamos solamente
                una línea inferior.
            */
            border-bottom:
                2px solid
                #9f95db;

            /*
                Elimina el borde azul automático
                del navegador.
            */
            outline: none;

            /*
                Hace transparente el fondo.
            */
            background: transparent;

            /* Color del texto introducido. */
            color: #222;

            /* Tamaño del texto. */
            font-size: 1.08rem;

            /*
                Transiciones suaves
                cuando hacemos hover o focus.
            */
            transition:
                border-color 0.25s ease,
                box-shadow 0.25s ease;
        }



        /*
            Color del texto que aparece
            antes de escribir algo.
        */
        .form-control::placeholder {
            color: #6b6b6b;
        }



        /*
            Cuando pasamos el mouse
            sobre un input.
        */
        .form-control:hover {

            /* Cambia la línea a dorado. */
            border-bottom-color: #C49E0D;
        }



        /*
            Cuando hacemos clic dentro del input.
        */
        .form-control:focus {

            /* Cambia la línea a azul. */
            border-bottom-color: #082055;

            /*
                Añade una sombra sutil
                bajo la línea.
            */
            box-shadow:
                0 2px 0
                rgba(
                    8,
                    32,
                    85,
                    0.10
                );
        }



        /* ==================================================
           ¿OLVIDASTE TU CONTRASEÑA?
           ================================================== */

        .forgot {

            /*
                Se comporta como elemento inline
                pero permite margen y tamaño.
            */
            display: inline-block;

            /*
                Lo acerca un poco
                al campo de contraseña.
            */
            margin-top: -3px;

            /*
                Deja espacio antes del botón.
            */
            margin-bottom: 20px;

            /* Color dorado. */
            color: #A67F00;

            /*
                Fuente serif.
            */
            font-family:
                Georgia,
                serif;

            /*
                Texto ligeramente pequeño.
            */
            font-size: 0.92rem;

            /*
                Elimina el subrayado.
            */
            text-decoration: none;

            /*
                Suaviza el cambio de color.
            */
            transition:
                color 0.2s ease;
        }



        /*
            Al pasar el cursor
            sobre el enlace.
        */
        .forgot:hover {

            /* Cambia a azul. */
            color: #082055;
        }



        /* ==================================================
           BOTÓN INGRESAR
           ================================================== */

        .login-button {

            /*
                El botón ocupa todo
                el ancho del formulario.
            */
            width: 100%;

            /* Alto del botón. */
            height: 50px;

            /* Elimina borde tradicional. */
            border: none;

            /* Esquinas redondeadas. */
            border-radius: 6px;

            /* Fondo azul institucional. */
            background-color: #082055;

            /* Texto blanco. */
            color: white;

            /* Tamaño del texto. */
            font-size: 1rem;

            /* Negrita media. */
            font-weight: 600;

            /*
                Muestra la mano
                cuando pasamos el mouse.
            */
            cursor: pointer;

            /*
                Animaciones suaves.
            */
            transition:
                background-color 0.25s ease,
                box-shadow 0.25s ease,
                transform 0.15s ease;
        }



        /*
            Cuando pasamos el mouse
            sobre el botón.
        */
        .login-button:hover {

            /*
                Cambia el azul por dorado.
            */
            background-color: #C49E0D;

            /*
                Añade sombra.
            */
            box-shadow:
                0 7px 18px
                rgba(
                    0,
                    0,
                    0,
                    0.20
                );
        }



        /*
            Cuando presionamos físicamente
            el botón.
        */
        .login-button:active {

            /*
                Se mueve ligeramente hacia abajo
                dando sensación de clic.
            */
            transform:
                translateY(1px);
        }



        /* ==================================================
           TABLETS
           ================================================== */

        /*
            Estas reglas únicamente se aplican
            cuando la pantalla mide 850px
            o menos.
        */
        @media (max-width: 850px) {


            .header-main {

                /*
                    Reduce el espacio
                    entre logo y texto.
                */
                gap: 20px;

                /*
                    Reduce espacios laterales.
                */
                padding:
                    10px
                    20px;
            }


            /*
                Logo ligeramente más pequeño.
            */
            .logo-box {

                width: 175px;

                height: 75px;
            }


            /*
                Imagen más pequeña.
            */
            .logo-box img {

                width: 158px !important;

                height: 64px !important;
            }


            /*
                Reduce el título institucional.
            */
            .university-name {

                font-size: 20px;

                letter-spacing: 1.5px;
            }


            /*
                El formulario pasa al centro.
            */
            .page {

                justify-content: center;

                padding:
                    35px
                    20px;
            }


            /*
                El formulario puede ocupar
                hasta todo el ancho disponible,
                pero nunca más de 470px.
            */
            .login-card {

                width:
                    min(
                        100%,
                        470px
                    );
            }

        }



        /* ==================================================
           CELULARES
           ================================================== */

        /*
            Estas reglas se aplican
            a pantallas de 600px o menos.
        */
        @media (max-width: 600px) {


            body {

                /*
                    En móviles quitamos
                    el fondo fijo.
                */
                background-attachment: scroll;
            }


            .header-main {

                /*
                    Altura automática.
                */
                min-height: auto;

                /*
                    En celulares:
                    logo arriba,
                    texto abajo.
                */
                flex-direction: column;

                /*
                    Centra los elementos.
                */
                justify-content: center;

                /*
                    Reduce espacio.
                */
                gap: 8px;

                /*
                    Reduce padding.
                */
                padding:
                    12px
                    15px;
            }


            /*
                Caja del logo en móvil.
            */
            .logo-box {

                width: 160px;

                height: 70px;
            }


            /*
                Imagen en móvil.
            */
            .logo-box img {

                width: 145px !important;

                height: 60px !important;
            }


            /*
                Nombre institucional
                adaptado al celular.
            */
            .university-name {

                text-align: center;

                font-size: 14px;

                letter-spacing: 1px;
            }


            /*
                Ajusta el espacio principal.
            */
            .page {

                min-height:
                    calc(
                        100vh
                        - 125px
                    );

                align-items: flex-start;

                padding:
                    28px
                    15px;
            }


            /*
                El formulario ocupa todo
                el ancho disponible.
            */
            .login-card {

                width: 100%;

                padding:
                    32px
                    24px;

                border-radius: 20px;
            }


            /*
                Reduce el título
                "Inicia sesión".
            */
            .login-title {

                font-size: 32px;
            }

        }


    </style>

</head>


<body>


    <!-- ==================================================
         ENCABEZADO
         ================================================== -->

    <header class="header">


        <!--
            Contenedor donde colocamos horizontalmente
            el logo y el nombre de la universidad.
        -->
        <div class="header-main">


            <!-- ==================================================
                 LOGO ADIUAS
                 ================================================== -->

            <div class="logo-box">

                <!--
                    src indica la ubicación de la imagen.

                    alt muestra un texto alternativo
                    si por algún motivo la imagen no carga.
                -->
                <img
                    src="../Assets/img/adiuas.png"
                    alt="ADIUAS"
                >

            </div>



            <!-- ==================================================
                 NOMBRE DE LA UNIVERSIDAD
                 ================================================== -->

            <div class="university-name">

                Universidad Autónoma de Sinaloa

            </div>


        </div>


    </header>



    <!-- ==================================================
         CONTENIDO PRINCIPAL
         ================================================== -->

    <main class="page">



        <!-- ==================================================
             FORMULARIO DE INICIO DE SESIÓN
             ==================================================

             action:
             indica qué PHP procesará los datos.

             method="post":
             envía los datos mediante POST.
        -->

        <form
            class="login-card"
            action="../Controllers/ValidacionLogin.php"
            method="post"
        >



            <!--
                Título principal del formulario.
            -->
            <div class="login-title">

                Inicia sesión

            </div>



            <!-- ==================================================
                 USUARIO
                 ==================================================

                 type="text":
                 campo de texto.

                 name="input_username":
                 nombre utilizado para enviarlo a PHP.

                 required:
                 obliga a completar el campo.
            -->

            <input
                type="text"
                class="form-control"
                id="input_username"
                name="input_username"
                placeholder="Usuario"
                autocomplete="username"
                required
            >



            <!-- ==================================================
                 CONTRASEÑA
                 ==================================================

                 type="password":
                 oculta los caracteres introducidos.

                 name="input_password":
                 nombre enviado al controlador.
            -->

            <input
                type="password"
                class="form-control"
                id="input_password"
                name="input_password"
                placeholder="Contraseña"
                autocomplete="current-password"
                required
            >



            <!-- ==================================================
                 RECUPERAR CONTRASEÑA
                 ================================================== -->

            <a
                class="forgot"
                href="https://www.youtube.com/shorts/XYXb76YDDCY"
                target="_blank"
            >

                ¿Olvidaste tu contraseña?

            </a>

                    

            <!-- ==================================================
                 BOTÓN INGRESAR
                 ==================================================

                 type="submit":
                 al presionarlo envía el formulario
                 al archivo ValidacionLogin.php.
            -->

            <input
                type="submit"
                value="Ingresar"
                class="login-button"
            >


        </form>


    </main>


</body>

</html>