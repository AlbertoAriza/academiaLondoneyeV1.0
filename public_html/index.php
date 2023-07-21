<?php

declare(strict_types=1);                                       // Use strict types
include '../src/bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--META PARA LA DESCRIPCIÓN QUE APARECE EN GOOGLE CUANDO TE BUSCAN-->
    <meta name="description" content="Cursos de inglés para hispanohablantes" />

    <!--META PARA AUTOR DE LA PÁGINA-->
    <meta name="author" content="Jose Aberto Ariza" />

    <!--META PARA LAS KEYWORDS DE LA PÁGINA-->
    <meta name="keywords" content="curso inglés, inglés desde cero, inglés avanzado, a1 inglés, a2 inglés, b1 inglés, aprender inglés" />

    <!--META PARA INDICACIONES AL ARCHIVO ROBOTS-->
    <meta name="robots" content="noindex" />
    <meta name="robots" content="nofollow" />

    <!--META QUE CONFORMA LA INFORMACIÓN CUANDO COMPARTEN TU LINK EN FACEBOOK-->
    <meta property="og:image" content="url de la imagen" />
    <meta property="og:title" content="Academia Online LondonEye" />
    <meta property="og:site_name" content="LondonEye English School" />
    <meta property="og:description" content="Cursos de inglés para hispanohablantes. Aprende inglés con tus series favoritas." />
    <meta property="og:url" content="https://academia.londoneyepad.com" />

    <!--META QUE CONFORMA LA INFORMACIÓN CUANDO COMPARTEN TU LINK EN TWITTER-->
    <meta property="twitter:image" content="url de la imagen" />
    <meta property="twitter:title" content="Academia Online LondonEye" />
    <meta property="twitter:description" content="Cursos de inglés para hispanohablantes. Aprende inglés con tus series favoritas." />

    <!--LINK PARA INSERTAR FAVICON-->
    <link rel="shortcut icon" href="imgs/favicon-128x128.png" type="image/x-icon" />

    <!--LINKS A LAS PÁGINAS DE ESTILOS CSS-->
    <link rel="stylesheet" href="style/estilosgenerales.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">

    <!--TÍTULO DE LA PÁGINA (APARECE EN EL NAVEGADOR ARRIBA)-->
    <title>LondonEye - Tu Academia de Inglés Online</title>
</head>

<body>

    <header>
        <?php include 'includes/header.php'; ?>
    </header>

    <main>

        <!-- *********************************** -->
        <!-- SECTION 1 - ENCABEZADO DE LA PÁGINA -->
        <section id="section1">
            <div>
                <img id="section1Foto" src="imgs/portada1.jpg" alt="">
            </div>
            <div>
                <h2 id="section1Texto">Aprende inglés con nuestros cursos online.</h2>
                <p>Desde casa y con tus propios horarios.</p>
            </div>
            <div id="franjaGris">
                <h2>¡Aprender inglés 100% online ya es posible!</h2>
            </div>
        </section>

        <!-- *********************************** -->
        <!-- SECTION 2 - ENCABEZADO DE LA PÁGINA -->
        <section id="section2">
            <h2 id="section2Header">NUESTROS CURSOS GRATUITOS</h2>

            <!-- DIV QUE CONTIENE LOS DISTINTOS CURSOS GRATUITOS -->
            <div class="contenedorCursos">

                <!-- PRIMER CURSO GRATUITO - ENGLISH FROM SCRATCH -->
                <div class="cursoGratis">
                    <div class="fotoCurso">
                        <img src="imgs/coverEngFromScratch_v2.png" alt="">
                    </div>
                    <div class="cursoInfo">
                        <h3>English from Scratch</h3>
                        <p>Curso gratuito de iniciación</p>
                        <p>Aprende inglés desde cero</p>
                        <p>A tu ritmo y desde casa</p>
                        <button class="btn_generico">Más información</button>
                    </div>
                </div>

                <!-- SEGUNDO CURSO GRATUITO - AUN POR DECIDIR -->
                <div class="cursoGratis">
                    <div class="fotoCurso">
                        <img src="imgs/testNivel.png" alt="Test de nivel">
                    </div>
                    <div class="cursoInfo">
                        <h3>Test de nivel</h3>
                        <p>Prueba nuestro test de nivel</p>
                        <p>Se adapta según tus respuestas <br> hasta darte tu nivel con precisión</p>
                        <button class="btn_generico">Hacer test</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="section3">
            <div id="profesoresContainer">
                <h2>NUESTROS PROFESORES</h2>
            </div>
        </section>
    </main>

    <footer>
        <?php include 'includes/footer.php' ?>
    </footer>
</body>

</html>