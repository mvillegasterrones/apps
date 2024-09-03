<?php
include './includes.php';
//! if (isset($_SESSION['ingreso']) && $_SESSION['ingreso'] == 'YES') {
?>
<!-- https://material-minimal.com/learn/design-process/user-experience/ -->
<!-- generar link de wsp: https://postcron.com/es/blog/landings/generador-de-enlaces-para-whatsapp/ -->
<!DOCTYPE html>
<html lang="es" data-mdb-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Shop | <?= $nombre_empresa ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="icon" href="./img/lg-lyceum.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="../template-mdb5/css/pro.mdb.min.css" />
    <!-- My Style -->
    <link rel="stylesheet" href="../template-mdb5/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body><!-- rgb(85, 108, 117) -->
<div id="loading-overlay">
    <div class="spinner"></div>
</div>
<!--Main Navigation-->
<header class="mb-10">

    <!-- Navbar -->
    <?php include './sections/nav-bar-shop.php' ?>
    <!-- Navbar -->
</header>
<!-- section intro -->
<!--<div class="my-7 mb-10 d-inline-block" id="section-components"></div>-->
<!-- end section intro -->

<div class="container"
     data-mdb-animation-init
     data-mdb-animation-start="onScroll"
     data-mdb-animation="fade-in"
     data-mdb-animation-show-on-load="false"
     data-mdb-animation-delay="200">

    <!-- Section: COURSE 01 -->
    <section class="mb-7" id="course-01">
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0"
                 data-mdb-animation-init
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation="fade-in"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-delay="300">
                <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                    <img src="./img/curso-01/banner-sm.png" class="rounded rounded-7 border border-5 border-warning shadow-5-strong w-100 mb-2" alt="">
                    <h5 class="fw-bold text-uppercase text-center text-warning">
                        <!--<i class="fas fa-cubes text-theme me-3"></i>-->
                        <?= $titulo_curso_01 ?>
                    </h5>
                    <p class="color-institucional-1">
                        <h4 class="color-institucional-1"><?= $precio_curso_01 ?> o <?= $precio_curso_01_dol ?></h4>
                        <!--<h6 class="card-title">Detalles del curso</h6>-->
                        <i class="fas fa-check-circle text-warning"></i><strong class="color-institucional-1"> Acceso ilimitado</strong><br>
                    <i class="fas fa-check-circle text-warning"></i><strong class="color-institucional-1"> Curso 100% virtual</strong><br>
                    <i class="fas fa-check-circle text-warning"></i><strong class="color-institucional-1"> Modalidad asincrónica</strong><br>
                    <i class="fas fa-check-circle text-warning"></i><strong class="color-institucional-1"> +17 horas académicas</strong><br>
                    </p>
                    <!--<span class="badge bg-theme">Premium Components for v5</span>-->
                    <a class="btn btn-warning btn-lg btn-rounded" href="#section-shop" role="button" data-mdb-ripple-init="">Comprar ahora! <i class="fas fa-shopping-cart"></i></a>
                    <!--<br>
                    <span class="badge badge-secondary">Premium Components for v4</span>-->
                </div>
            </div>

            <div class="col-md-9 mb-4 mb-md-0 text-center">
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="card toast-light rounded-7 border border-3 border-warning shadow-5-strong"
                             data-mdb-ripple-init
                             data-mdb-ripple-color="light"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="500">
                            <div class="card-body text-start">
                                <div class="row">
                                    <div class="col-12 text-center align-items-center">
                                        <h4 class="text-warning">ALGUNA VEZ TE HAS PREGUNTADO ¿CÓMO DISEÑAR UN MARCO DE M&E PARA PROYECTOS SOCIALES?</h4>
                                        <p class="text-start">
                                            En este curso te revelo cómo crear un marco de M&E para tu proyecto o programa de desarrollo social con un enfoque basado en resultados usando plantillas Excel.<br>
                                            ¿Quieres saber más?, a continuación te brindamos más detalles
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Viodeo intro -->
                    <div class="col-lg-12 col-md-12 mb-10">
                        <div class="card border border-3 border-warning shadow-5-strong"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="300">
                            <video class="rounded rounded-5" controls controlsList="nodownload">
                                <source src="./recursos/curso-1/videos/Introduccion.mp4" type="video/mp4">
                                <!--<source src="ruta_del_video.webm" type="video/webm">-->
                                <!-- Texto alternativo -->
                                <p>¡Mira nuestro video de introducción al curso!</p>
                            </video>
                        </div>
                    </div>

                    <!-- section info instructor -->
                    <div class="col-12 mb-5" id="info-instructor"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="1300">
                        <div class="row">
                            <div class="col-12">
                                <div class="card toast-light rounded-start-4 border border-3 border-warning mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-3 rounded rounded-6">
                                            <img src="img/profile/foto-5.png"" alt="Alvaro Villanes" class="img-fluid h-100 rounded rounded-start-3"/>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h5 class="card-title text-warning">Hola!, soy Álvaro Villanes, conóceme un poco más...</h5>
                                                <p class="card-text text-start">
                                                    Soy licenciado en Sociología de la UNMSM, magíster en Gerencia Social de la Pontificia Universidad Católica del Perú, con conocimientos y experiencia en planificación estratégica, formulación, monitoreo y evaluación de proyectos sociales, diseño de procesos, formulación de indicadores, estudios de caso, sistematización de experiencias y supervisión en el desarrollo de aplicativos de monitoreo.<br><br>

                                                    Cuento con más de 15 años de experiencia profesional en el ámbito de la gestión de programas y proyectos de desarrollo social desempeñados en el sector público, privado y dentro de la cooperación internacional para el desarrollo.
                                                </p>
                                                <!--<p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end section info instructor-->

                    <!-- div iconos entrada -->
                    <div class="col-12 mb-5">
                        <div class="d-flex justify-content-center text-center"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="300">
                            <div class="card toast-light p-4 py-5 border border-3 border-warning rounded-6 shadow-5-strong mt-1 mb-5" style="
                                    /*margin-top: 50px;*/
                                    width: 100%;
                                    /*background-color: hsla(0, 0%, 100%, 0.9) !important;*/
                                    backdrop-filter: saturate(200%) blur(25px);
                                ">
                                <h1 class="h4 text-theme fw-bold text-uppercase text-warning"
                                    data-mdb-animation-init
                                    data-mdb-animation-start="onScroll"
                                    data-mdb-animation="fade-in"
                                    data-mdb-animation-show-on-load="false"
                                    data-mdb-animation-delay="400">
                                    ¡¡Mejora tus habilidades de gestión de proyectos sociales ahora!!<i class="fas fa-gem text-warning ms-2"></i>
                                </h1>
                                <p class="text-muted mb-6"
                                   data-mdb-animation-init
                                   data-mdb-animation-start="onScroll"
                                   data-mdb-animation="fade-in"
                                   data-mdb-animation-show-on-load="false"
                                   data-mdb-animation-delay="500">Empieza ahora!</p>
                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative text-warning"
                                         data-mdb-animation-init
                                         data-mdb-animation-start="onScroll"
                                         data-mdb-animation="fade-in"
                                         data-mdb-animation-show-on-load="false"
                                         data-mdb-animation-delay="600">
                                        <!--<i class="fas fa-cubes fa-2x text-theme mb-4"></i>-->
                                        <i class="fas fa-plug fa-2x text-warning mb-4"></i>
                                        <h5 class="text-theme fw-bold mb-3">500+</h5>
                                        <h6 class="fw-normal">Acceso ilimitado</h6>
                                        <hr class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0">
                                    </div>

                                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 position-relative text-warning"
                                         data-mdb-animation-init
                                         data-mdb-animation-start="onScroll"
                                         data-mdb-animation="fade-in"
                                         data-mdb-animation-show-on-load="false"
                                         data-mdb-animation-delay="700">
                                        <!--<i class="fas fa-layer-group fa-2x text-theme mb-4"></i>-->
                                        <i class="fas fa-users fa-2x text-warning mb-4"></i>
                                        <h5 class="text-theme fw-bold mb-3">450+</h5>
                                        <h6 class="fw-normal">Estudiantes</h6>
                                        <hr class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0">
                                    </div>

                                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 position-relative text-warning"
                                         data-mdb-animation-init
                                         data-mdb-animation-start="onScroll"
                                         data-mdb-animation="fade-in"
                                         data-mdb-animation-show-on-load="false"
                                         data-mdb-animation-delay="800">
                                        <!--<i class="fas fa-image fa-2x text-theme mb-4"></i>-->
                                        <i class="fas fa-comments fa-2x text-warning mb-4"></i>
                                        <h5 class="text-theme fw-bold mb-3">50+</h5>
                                        <h6 class="fw-normal">Comentarios</h6>
                                        <hr class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0">
                                    </div>

                                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 position-relative text-warning"
                                         data-mdb-animation-init
                                         data-mdb-animation-start="onScroll"
                                         data-mdb-animation="fade-in"
                                         data-mdb-animation-show-on-load="false"
                                         data-mdb-animation-delay="900">
                                        <!--<i class="fas fa-plug fa-2x text-theme mb-4"></i>-->
                                        <i class="fas fa-clock fa-2x text-warning mb-4"></i>
                                        <h5 class="text-theme fw-bold mb-3">17+</h5>
                                        <h6 class="fw-normal">Horas de clase</h6>
                                        <hr class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0">
                                    </div>

                                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative text-warning"
                                         data-mdb-animation-init
                                         data-mdb-animation-start="onScroll"
                                         data-mdb-animation="fade-in"
                                         data-mdb-animation-show-on-load="false"
                                         data-mdb-animation-delay="1000">
                                        <!--<i class="fas fa-flask fa-2x text-theme mb-4"></i>-->
                                        <i class="fas fa-user fa-2x text-warning mb-4"></i>
                                        <h5 class="text-theme fw-bold mb-3">1</h5>
                                        <h6 class="fw-normal">Instructor</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12"
                         data-mdb-animation-init
                         data-mdb-animation-start="onScroll"
                         data-mdb-animation="fade-in"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-delay="100">
                        <h1 class="mb-5 text-uppercase color-institucional-1">Contenido del curso</h1>
                    </div>

                    <!-- Modulo 1 y 2 -->
                    <div class="row gx-lg-5 mb-5">
                        <!-- First column: Modulo 1 -->
                        <div class="col-lg-6 col-md-12 mb-6 mb-lg-0">

                            <div class="card rounded-6 h-100 border border-3 border-warning shadow-5-strong"
                                 data-mdb-animation-init
                                 data-mdb-animation-start="onScroll"
                                 data-mdb-animation="fade-in"
                                 data-mdb-animation-show-on-load="false"
                                 data-mdb-animation-delay="200">
                                <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6"
                                     data-mdb-ripple-init
                                     data-mdb-ripple-color="light">
                                    <!--data-mdb-modal-init
                                    data-mdb-target="#project-1"-->
                                    <img src="./img/curso-01/modulo_1.png" class="w-100" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Módulo 1</h5>
                                    <p class="text-reset">
                                    <ul class="text-start">
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 01: ¿En qué consiste la gestión basada en resultados (GbR)?</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 02: Modelo lógico de los sistemas de monitoreo y evaluación</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 03: Errores habituales en la aplicación de la GbR</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 04: Monitoreo en el marco de la GbR</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 05: Pasos fundamentales del monitoreo de los resultados - Parte 1</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 06: Pasos fundamentales del monitoreo de los resultados - Parte 2</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Concluciones Módulo 01</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Test fin de módulo 1</a></li>
                                    </ul>
                                    </p>
                                    <!--<a href="#!" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Read more</a>-->
                                </div>
                            </div>

                        </div>
                        <!-- First column -->

                        <!-- Second column: Modulp 2 -->
                        <div class="col-lg-6 mb-6 mb-lg-0">

                            <div class="card rounded-6 h-100 border border-3 border-warning shadow-5-strong"
                                 data-mdb-animation-init
                                 data-mdb-animation-start="onScroll"
                                 data-mdb-animation="fade-in"
                                 data-mdb-animation-show-on-load="false"
                                 data-mdb-animation-delay="400">
                                <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6"
                                     data-mdb-ripple-init
                                     data-mdb-ripple-color="light">
                                    <!--data-mdb-modal-init
                                    data-mdb-target="#project-2"-->
                                    <img src="./img/curso-01/modulo_2.png" class="w-100" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Módulo 2</h5>
                                    <!--<p class="text-muted">
                                        <small>Virtual desde <u>01.01.2024</u> - por
                                            <a href="javascript:;" class="text-dark">Álvaro Villanes</a></small>
                                    </p>-->
                                    <p class="card-text">
                                    <ul class="text-start">
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 01: Cadena de resultados - Parte 1</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 02: Cadena de resultados - Parte 2</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 03: Indicadores en la gestión de resultados- Parte 1</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 04: Indicadores en la gestión de resultados- Parte 2</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 05:  Formulación de indicadores – Parte 1</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 06:  Formulación de indicadores – Parte 2</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 07:  Formulación de indicadores – Parte 3</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 08:  Formulación de indicadores – Parte 4</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Concluciones Módulo 02</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Test fin de módulo 2</a></li>
                                    </ul>
                                    </p>
                                    <!--<a href="#!" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Read more</a>-->
                                </div>
                            </div>

                        </div>
                        <!-- Second column -->
                    </div>

                    <!-- Modulo 3 y 4 -->
                    <div class="row gx-lg-5 mt-10 mb-10">
                        <!-- Third column: Modulp 3 -->
                        <div class="col-lg-6 mb-6 mt-6 mb-lg-0">
                            <div class="card rounded-6 h-100 border border-3 border-warning shadow-5-strong"
                                 data-mdb-animation-init
                                 data-mdb-animation-start="onScroll"
                                 data-mdb-animation="fade-in"
                                 data-mdb-animation-show-on-load="false"
                                 data-mdb-animation-delay="600">
                                <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6"
                                     data-mdb-ripple-init
                                     data-mdb-ripple-color="light">
                                    <!--data-mdb-modal-init
                                    data-mdb-target="#project-3"-->
                                    <img src="./img/curso-01/modulo_3.png" class="w-100" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Módulo 3</h5>
                                    <!--<p class="text-muted">
                                        <small>Virtual desde <u>01.01.2024</u> - por
                                            <a href="javascript:;" class="text-dark">Álvaro Villanes</a></small>
                                    </p>-->
                                    <p class="card-text">
                                    <ul class="text-start">
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 01: Matriz de indicadores - Parte 1</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 02: Matriz de indicadores - Parte 2</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 03: Flujo de datos - Parte 1</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 04: Flujo de datos - Parte 2</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 05: Rastreador de indicadores</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 06: Estrategia de comunicación/ Cronograma de informes</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 07:  Plan y presupuesto de actividades</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Concluciones Módulo 03</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Test fin de módulo 3</a></li>
                                    </ul>
                                    </p>
                                    <!--<a href="#!" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Read more</a>-->
                                </div>
                            </div>
                        </div>
                        <!-- Third column -->

                        <!-- For column: Modulp 4 -->
                        <div class="col-lg-6 mb-6 mt-6 mb-lg-0">
                            <div class="card rounded-6 h-100 border border-3 border-warning shadow-5-strong"
                                 data-mdb-animation-init
                                 data-mdb-animation-start="onScroll"
                                 data-mdb-animation="fade-in"
                                 data-mdb-animation-show-on-load="false"
                                 data-mdb-animation-delay="800">
                                <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6"
                                     data-mdb-ripple-init
                                     data-mdb-ripple-color="light">
                                    <!--data-mdb-modal-init
                                    data-mdb-target="#project-3"-->
                                    <img src="./img/curso-01/modulo_4.png" class="w-100" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Módulo 4</h5>
                                    <!--<p class="text-muted">
                                        <small>Virtual desde <u>01.01.2024</u> - por
                                            <a href="javascript:;" class="text-dark">Álvaro Villanes</a></small>
                                    </p>-->
                                    <p class="card-text">
                                    <ul class="text-start">
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 01: Elaboración de la matriz de marco lógico y de indicadores - Parte 1</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 02: Elaboración de la matriz de marco lógico y de indicadores - Parte 2</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 03: Elaboración del rastreador de indicadores - Parte 1</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 04: Elaboración del rastreador de indicadores - Parte 2</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 05: Elaboración del rastreador de indicadores - Parte 3</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 06: Elaboración del rastreador de indicadores - Parte 4</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 07: Elaboración del plan de actividades - Parte 1</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 08: Elaboración del plan de actividades - Parte 2</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 09: Elaboración del presupuesto de actividades - Parte 1</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 10: Elaboración del presupuesto de actividades - Parte 2</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 11: Monitoreo programático y financiero del proyecto - Parte 1</a></li>
                                        <li><a style="color: white !important;" href="javascript:;" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 12: Monitoreo programático y financiero del proyecto - Parte 2</a></li>
                                    </ul>
                                    </p>
                                    <!--<a href="#!" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Read more</a>-->
                                </div>
                            </div>
                        </div>
                        <!-- For column -->

                    </div>

                    <div class="col-12"
                         data-mdb-animation-init
                         data-mdb-animation-start="onScroll"
                         data-mdb-animation="fade-in"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-delay="100">
                        <h1 class="mb-5 text-uppercase color-institucional-1">Increíbles beneficios</h1>
                    </div>

                    <!-- BENEFICIOS -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card toast-light h-100 rounded-7 border border-3 shadow-4-strong border-warning"
                             data-mdb-ripple-init
                             data-mdb-ripple-color="light"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="200">
                            <div class="card-body text-start bg-secondary rounded rounded-6">
                                <!--<h5 class="card-title h1 rounded rounded-5">
                                    <img src="./img/excel.png" alt="">
                                    <i class="fas fa-file-excel text-white"></i>
                                </h5>-->
                                <div class="rounded rounded-7">
                                    <img src="./img/excel.png" class="rounded rounded-7" alt="">
                                </div>
                                <h4>Utiliza plantillas editables en Microsoft Excel</h4>
                                <p class="card-text">
                                    Con nuestras plantillas en hojas de cálculo Excel, podrás crear tu propio marco de M&E de forma sencilla y eficiente. Además, podrás sistematizar tu información y generar dashboards de alto impacto para tu organización o institución.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card toast-light rounded-7 border border-3 shadow-4-strong border-warning"
                             data-mdb-ripple-init
                             data-mdb-ripple-color="light"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="300">
                            <div class="card-body text-start bg-secondary rounded rounded-6">
                                <h5 class="card-title"><img src="./img/libro.png" alt=""></h5>
                                <h4>Aprende a formular correctaente resultados e indicadores</h4>
                                <p class="card-text">
                                    Las técnicas SMART y CREMA te ayudan a formular declaraciones de resultado e indicadores claros, medibles, alcanzables, relevantes y oportunos. Ambas se basan en la lógica de una cadena de resultados, que garantiza la coherencia y la alineación de los objetivos.
                                </p>
                                <!--<a href="#" class="btn btn-primary" data-mdb-ripple-init>Go somewhere</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card toast-light rounded-7 border border-3 shadow-4-strong border-warning"
                             data-mdb-ripple-init
                             data-mdb-ripple-color="light"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="400">
                            <div class="card-body text-start bg-secondary rounded rounded-6">
                                <h5 class="card-title"><img src="./img/herramienta.png" alt=""></h5>
                                <h4>Emplea las herramientas que se usan en la cooperación internacional</h4>
                                <p class="card-text">
                                    Aprenderás las especificaciones teóricas y técnicas necesarias para realizar un monitoreo programático y financiero adecuado de tus proyectos.
                                </p>
                                <!--<a href="#" class="btn btn-primary" data-mdb-ripple-init>Go somewhere</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card h-100 toast-light rounded-7 border border-3 shadow-4-strong border-warning"
                             data-mdb-ripple-init
                             data-mdb-ripple-color="light"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="500">
                            <div class="card-body text-start bg-secondary rounded rounded-6">
                                <h5 class="card-title"><img src="./img/key-conversation.png" alt=""></h5>
                                <h4>Grupo privado de comunicación</h4>
                                <p class="card-text">
                                    Podrás participar en un grupo privado de participantes para compartir tus dudas, recibir asistencia técnica y brindarnos tus comentarios sobre el contenido del curso.
                                </p>
                                <!--<a href="#" class="btn btn-primary" data-mdb-ripple-init>Go somewhere</a>-->
                            </div>
                        </div>
                    </div>
                    <!-- END BENEFICIOS -->

                    <div class="mb-10"></div>

                    <div class="col-12"
                         data-mdb-animation-init
                         data-mdb-animation-start="onScroll"
                         data-mdb-animation="fade-in"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-delay="100">
                        <h1 class="mb-5 text-uppercase color-institucional-1"><i class="fas fa-gem"></i> BONUS</h1>
                        <img src="img/home-01.png" class="w-100" alt="">
                    </div>

                    <!-- Bonus -->
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4"
                         data-mdb-animation-init
                         data-mdb-animation-start="onHover"
                         data-mdb-animation="tada"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-reset="true">
                        <div class="card h-100 border border-3 border-warning shadow-5-strong"
                             data-mdb-ripple-init
                             data-mdb-ripple-color="light"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="200">
                            <img src="img/bonus/bono-1.png" class="card-img-top" alt="Skyscrapers"/>
                            <div class="card-body">
                                <h2 class="card-title text-warning">BONUS 1</h2>
                                <p class="card-text">
                                    Clases de construcción de un marco de M&E usando el programa Power BI.
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Recien agregado</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4"
                         data-mdb-animation-init
                         data-mdb-animation-start="onHover"
                         data-mdb-animation="tada"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-reset="true">
                        <div class="card h-100 border border-3 border-warning shadow-5-strong"
                             data-mdb-ripple-init
                             data-mdb-ripple-color="light"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="400">
                            <img src="img/bonus/bono-2.png" class="card-img-top" alt="Skyscrapers"/>
                            <div class="card-body">
                                <h2 class="card-title text-warning">BONUS 2</h2>
                                <p class="card-text">
                                    Tutorial sobre la herramienta de clasificación de complejidad de proyectos.
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Recien agregado</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4"
                         data-mdb-animation-init
                         data-mdb-animation-start="onHover"
                         data-mdb-animation="tada"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-reset="true">
                        <div class="card h-100 border border-3 border-warning shadow-5-strong"
                             data-mdb-ripple-init
                             data-mdb-ripple-color="light"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="600">
                            <img src="img/bonus/bono-3.png" class="card-img-top" alt="Skyscrapers"/>
                            <div class="card-body">
                                <h2 class="card-title text-warning">BONUS 3</h2>
                                <p class="card-text">
                                    Herramienta de estimación de tamaño de muestras finitas o infinitas.
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Recien agregado</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4"
                         data-mdb-animation-init
                         data-mdb-animation-start="onHover"
                         data-mdb-animation="tada"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-reset="true">
                        <div class="card h-100 border border-3 border-warning shadow-5-strong"
                             data-mdb-ripple-init
                             data-mdb-ripple-color="light"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="800">
                            <img src="img/bonus/bono-4.png" class="card-img-top" alt="Skyscrapers"/>
                            <div class="card-body">
                                <h2 class="card-title text-warning">BONUS 4</h2>
                                <p class="card-text">
                                    Guía de redacción de TDR y herramienta de calidad “TDR Checklist”.
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Recien agregado</small>
                            </div>
                        </div>
                    </div>
                    <!-- end Bonus -->

                    <div class="mb-7"></div>

                    <!-- Garantia -->
                    <div class="col-12 mt-10 mb-10">
                        <div class="card toast-light text-warning rounded-7 border border-3 border-warning shadow-5-strong"
                             data-mdb-ripple-init
                             data-mdb-ripple-color="light"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="500">
                            <div class="card-body text-start">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-12">
                                        <img src="./img/garantia.png" alt="">
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-12 align-items-center">
                                        <div class="mb-7"></div>
                                        <h1>Garantía de 7 días!!!</h1>
                                        <p>Si no le gusta lo que encuentra, le reembolsaré su dinero, sin hacer preguntas, dentro de los 7 días posteriores a la compra.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end garantia -->

                    <!-- Shopping -->
                    <div class="row mb-5" id="section-shop">
                        <div class="col-12 mb-0"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="200">
                            <h1 class="mb-5 text-uppercase color-institucional-1">COMPRAR AHORA!</h1>
                        </div>

                        <!-- BENEFICIOS -->
                        <div class="col-lg-8 col-md-12 mb-4">
                            <div class="card toast-light h-100 rounded-7 border border-3 shadow-4-strong border-warning"
                                data-mdb-ripple-init
                                data-mdb-ripple-color="light"
                                data-mdb-animation-init
                                data-mdb-animation-start="onScroll"
                                data-mdb-animation="fade-in"
                                data-mdb-animation-show-on-load="false"
                                data-mdb-animation-delay="200">
                                <div class="card-body text-start bg-secondary rounded rounded-6">
                                    <h4 class="color-institucional-1 text-center">Lleva tu curso en nuestra plataforma <?= $nombre_empresa ?></h4>
                                    <div class="row mt-4">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <h6 class="color-institucional-1 mt-2 mb-3 text-center">EN SOLES: <span class="bg-warning p-1 rounded rounded-5"><?= $precio_curso_01 ?></span></h6>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <img src="img/alvaro-yape.png" class="w-100 rounded-7" alt="">
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <img src="img/alvaro-plin.png" class="w-100 rounded-7" alt="">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <h6 class="color-institucional-1 mt-2 mb-3">EN DOLARES: <span class="bg-warning p-1 rounded rounded-5"><?= $precio_curso_01_dol ?></span></h6>
                                            <div class="rounded rounded-7 valign-wraper" style="background-color: white !important;">
                                                <br>
                                                <br>
                                                <a href="https://paypal.me/Lyceumgroup?country.x=PE&locale.x=es_XC" target="_blank"><img src="img/paypal-0.png" class="w-100 rounded rounded-7" alt="paypal"></a>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card toast-light rounded-7 border border-3 shadow-4-strong border-warning"
                                data-mdb-ripple-init
                                data-mdb-ripple-color="light"
                                data-mdb-animation-init
                                data-mdb-animation-start="onScroll"
                                data-mdb-animation="fade-in"
                                data-mdb-animation-show-on-load="false"
                                data-mdb-animation-delay="300">
                                <div class="card-body text-start bg-secondary rounded rounded-6">
                                    <h4 class="color-institucional-1 text-center">Lleva el curso en Hotmart</h4>
                                    <h6 class="color-institucional-1 mt-5 text-center">EN DOLARES: <span class="bg-warning p-1 rounded rounded-5"><?= $precio_curso_01_dol ?></span></h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-4"
                                                data-mdb-ripple-init
                                                data-mdb-ripple-color="light"
                                                data-mdb-animation-init
                                                data-mdb-animation-start="onScroll"
                                                data-mdb-animation="fade-in"
                                                data-mdb-animation-show-on-load="false"
                                                data-mdb-animation-delay="300"
                                                data-mdb-modal-init
                                                data-mdb-target="#modal-shop-course-1">
                                                <img src="./img/hotmart-2.svg" class="w-100" alt="">
                                                <img src="./img/hotmart-opc-pago.png" class="w-100 rounded rounded-7" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 mt-10">
                        <div class="alert alert-light rounded rounded-7 border border-5 border-warning text-start" style="color: white !important;">
                            <h4><i class="fas fa-info-circle"></i> Importante</h4>
                            <i class="fas fa-check-circle"></i> PASO 01: Si realizaste el pago mediante YAPE o PLIN, envia la constancia de pago adjuntando tu nombre completo y N° DNI, mediante WhatsApp haciendo clic <b><a href="https://api.whatsapp.com/send?phone=51902821901&text=Hola%20%C3%81lvaro!%20Te%20remito%20el%20comprobante%20de%20pago%20del%20curso:%20" target="_blank"><i class="fa-brands fa-whatsapp"></i> aquí</a></b> o escaena el siguiente QR. PASO 02: Registra tus datos en nuestra Web y envía tu formulario vía https://lyceum-group.conoce-mas.com/ Login --> Registrarme. PASO 03: Recibirás un mensaje por WhatsApp confirmando tu matrícula y acceso al curso.
                
                        </div>
                        <img src="img/wApp-QR.png" class="rounded-7 w-50" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: COURSE 01 -->

</div>
<?php include './modals/modal-shop-course-1.php' ?>
<?php include './modals/modal-register.php' ?>
<!--Footer-->
<?php include './sections/footer.php' ?>
<!-- End Footer -->
</body>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- MDB -->
<script src="../template-mdb5/js/pro.mdb.umd.min.js"></script>
<!-- MyScripts -->
<script src="./js/scripts.js"></script>
<script src="./js/js_usuario.js"></script>
</html>
<?php
/*} else {
    header('location: index.php');
}*/
?>