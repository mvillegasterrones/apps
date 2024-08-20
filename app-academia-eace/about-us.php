<?php include './includes.php' ?>
<!-- https://material-minimal.com/learn/design-process/user-experience/ -->
<!-- generar link de wsp: https://postcron.com/es/blog/landings/generador-de-enlaces-para-whatsapp/ -->
<!DOCTYPE html>
<html lang="es" data-mdb-theme="">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Academia Virtual | <?= $nombre_empresa ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="icon" href="./img/lg-lyceum.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <!--<link rel="stylesheet" href="../template-mdb5/css/pro.mdb.min.css" />-->
    <link rel="stylesheet" href="../template-mdb5/css/pro.mdb.min.css" />
    <!-- My Style -->
    <!--<link rel="stylesheet" href="../template-mdb5/css/style.css" />-->
    <!-- Local Style -->
    <link rel="stylesheet" href="../template-mdb5/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!-- Start your project here-->
<!--<section class="container">-->

<div id="loading-overlay">
    <div class="spinner"></div>
</div>

    <!--Main Navigation-->
    <header class="mb-0">

        <!-- Navbar -->
        <?php include './sections/nav-bar-about-us.php' ?>
        <!-- Navbar -->

        <!-- Section: Split screen -->
        <section class="mb-0">
            <div class="container-fluid px-0">
                <div class="row g-0">
                    <!-- First column -->
                    <div class="col-lg-6 vh-100 d-flex flex-column justify-content-center align-items-center mb-2">
                        <!-- Headings -->
                        <div class="h-100 d-flex justify-content-center align-items-center px-5 mb-0">
                            <div class="">
                                <h2 class="display-4"
                                    data-mdb-animation-init
                                    data-mdb-animation-start="onLoad"
                                    data-mdb-animation="fade-in"
                                    data-mdb-animation-show-on-load="false"
                                    data-mdb-animation-delay="200">
                                    <?= $nombre_persona ?></h2>

                                <h1 class="display-2 fw-bold text-uppercase"
                                    data-mdb-animation-init
                                    data-mdb-animation-start="onLoad"
                                    data-mdb-animation="fade-in"
                                    data-mdb-animation-show-on-load="false"
                                    data-mdb-animation-delay="400">
                                    <?= $persona_cargo ?></h1>
                            </div>
                        </div>
                        <!-- CTA elements -->
                        <div class="d-flex align-items-center w-100 justify-content-between  px-5 mb-xl-5 mb-0"
                             data-mdb-animation-init
                             data-mdb-animation-start="onLoad"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="600">
                            <!--<a href="https://github.com/mdbootstrap/mdb-ui-kit" target="_blank" class="text-dark"><i class="fab fa-github fa-xl"></i></a>
                            <hr class="hr d-none d-xl-flex" style="height: 2px; width: 200px;">-->

                            <a href="<?= $social_facebook ?>" target="_blank" class="text-dark"><i class="fab fa-facebook text-primary-emphasis fa-xl"></i></a>
                            <hr class="hr d-none d-xl-flex" style="height: 2px; width: 70px;">

                            <a href="<?= $social_instagram ?>" target="_blank" class="text-dark"><i class="fab fa-instagram text-danger-emphasis fa-xl"></i></a>
                            <hr class="hr d-none d-xl-flex" style="height: 2px; width: 70px;">

                            <a href="<?= $social_linkedin ?>" target="_blank" class="text-dark"><i class="fab fa-linkedin-in text-info-emphasis fa-xl"></i></a>
                            <!--<hr class="hr d-none d-xl-flex" style="height: 2px; width: 70px;">-->

                            <!--<a href="<?= $social_tweeter ?>" target="_blank" class="text-dark"><i class="fab fa-twitter text-info fa-xl"></i></a>
                            <hr class="hr d-none d-xl-flex" style="height: 2px; width: 10px;">-->

                            <!--<a href="<?= $social_youtube ?>" target="_blank" class="text-dark"><i class="fab fa-youtube text-danger fa-xl"></i></a>-->
                            <hr class="hr d-none d-xl-flex" style="height: 2px; width: 100px;">

                            <a class="btn btn-institucional-1 btn-lg btn-rounded" href="#about-me" role="button" data-mdb-ripple-init>Comencemos<i class="fas fa-angle-down ms-2"></i></a>
                        </div>
                    </div>
                    <!-- First column -->

                    <!-- Second column -->
                    <div class="col-lg-6 d-none d-lg-inline-block vh-100">
                         <!--data-mdb-animation-init
                         data-mdb-animation-start="onLoad"
                         data-mdb-animation="fade-in"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-delay="200"-->
                        <!-- Carousel wrapper -->
                        <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel"
                             data-mdb-carousel-init>
                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0"
                                        class="rounded-circle active" style="width: 7px; height: 7px" aria-current="true"
                                        aria-label="Slide 1"></button>
                                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"
                                        class="rounded-circle" style="width: 7px; height: 7px"></button>
                                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"
                                        class="rounded-circle" style="width: 7px; height: 7px"></button>
                            </div>

                            <!-- Inner -->
                            <div class="carousel-inner shadow-5-strong" style="border-bottom-left-radius: 4rem">
                                <!-- Single item -->
                                <div class="carousel-item active">
                                    <!-- https://imgs.search.brave.com/T0MEFn_20YKahB0gt7Lriq_bKr-3v_2l7FkhtcQbma8/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9kM3B1/YXk1cGt4dTlzNC5j/bG91ZGZyb250Lm5l/dC9hY2FkZW15L2lt/YWdlbmVzL290aGVy/cy9jZXJ0aWZpY2F0/ZXMvY2VydGlmaWNh/dGUtaW1nLnBuZw -->
                                    <img src="./img/banners/1-min.png"
                                         class="d-block vh-100 vw-100 object-cover" alt="15 years of experience in the IT industry" style="width: 100% !important;" />
                                    <div class="carousel-caption d-none d-md-block text-primary">
                                        <h5>Cursos 100% Online</h5>
                                        <p>Mantente conectado a cualquier hora a nuestras clases.</p>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <!-- https://imgs.search.brave.com/W18xdZNTJ3kOWPAyk1s-eQQTIXIAnbDbrUrYCa5rrno/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9lZGl0/Lm9yZy9pbWcvYmxv/Zy90b3ctY2xhc2Vz/LXJlcGFzby1wbGFu/dGlsbGEtYmFubmVy/LWdyYXRpcy1lZGl0/YXIud2VicA -->
                                    <img src="./img/banners/4-min.png"
                                         class="d-block vh-100 vw-100 object-cover" alt="243 completed projects" style="width: 100% !important;"/>
                                    <div class="carousel-caption d-none d-md-block text-primary">
                                        <h5>Variedad de cursos disponibles</h5>
                                        <p>Tenemos para ti una variedad de cursos disponibles en nuestra plataforma.</p>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <!-- https://imgs.search.brave.com/S1avIIx_l5_ZBOAjfACowWzRmBD_a-BF5UmEIz8SKeE/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pMC53/cC5jb20vZm9ybWFj/aW9ub25saW5lLmV1/L3dwLWNvbnRlbnQv/dXBsb2Fkcy8yMDIz/LzA5L2N1cnNvLWdy/YXRpcy1tYXJrZXRp/bmctZGlnaXRhbC1j/b250ZW5pZG8tY29t/bXVuaXR5LW1hbmFn/ZXIuanBnP3Jlc2l6/ZT0xMjAwLDY4MCZz/c2w9MQ -->
                                    <img src="./img/banners/3-min.png"
                                         class="d-block vh-100 vw-100 object-cover" alt="53 satisfied customers" style="width: 100% !important;"/>
                                    <div class="carousel-caption d-none d-md-block text-primary">
                                        <h5>Registrate y disfruta de grandes beneficios!</h5>
                                        <p>Registrate en nuestra plataforma y disfruta de todos los beneficios que tenemos para ti!.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Inner -->

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                                    data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
                                    data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- Carousel wrapper -->

                    </div>
                    <!-- Second column -->

                </div>
            </div>

        </section>
        <!-- Section: Split screen -->

    </header>
    <!--Main Navigation-->



    <!--Main layout-->
    <section class="" style="background-color: #E5E9EB !important;color:#E5E9EB !important;">
        <div class="container mb-5"><h1 style="background-color: #E5E9EB !important;">.</h1></div>
        <!--<div class="container mb-0">-->
            <!-- Section: About me (Ok) -->
            <section id="about-me" class="container mb-10 mt-10">
                <div class="container">
                    <div class="row gx-0 align-items-center">
                        <!-- First column -->
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div style="backdrop-filter: blur(30px);
                        z-index: 1;" class="card toast-light rounded-7 me-lg-n5"
                                 data-mdb-animation-init
                                 data-mdb-animation-start="onScroll"
                                 data-mdb-animation="slide-in-left"
                                 data-mdb-animation-show-on-load="false"
                                 data-mdb-animation-delay="200">
                                <div class="card-body p-lg-5 shadow-5">
                                    <h2 class="fw-bold">
                                        <span class="color-institucional-1">Hola, Soy el <?= $nombre_persona ?></span>
                                    </h2>
                                    <p class="fw-bold"><em><?= $persona_cargo ?></em></p>
                                    <hr class="container">
                                    <p class="text-muted mb-4">
                                        <strong>Soy licenciado en Sociología de la UNMSM, magíster en Gerencia Social de la Pontificia Universidad Católica del Perú</strong>, con conocimientos y experiencia en planificación estratégica, formulación, monitoreo y evaluación de proyectos sociales, diseño de procesos, formulación de indicadores, estudios de caso, sistematización de experiencias y supervisión en el desarrollo de aplicativos de monitoreo.<br><br>
                                        Cuento con más de 15 años de experiencia profesional en el ámbito de la gestión de programas y proyectos de desarrollo social desempeñados en el sector público, privado y dentro de la cooperación internacional para el desarrollo.
                                    </p>
                                    <!--<p class="text-primary">
                                        <strong>Es muy importante ser guiado por un nutricionista cuando estas en la búsqueda de mejorar tus hábitos alimenticios y estilo de vida, este cambio siempre debe ser progresivo y sostenible en el tiempo</strong>.
                                    </p>-->
                                    <!--<a href="#plains" type="button" class="btn btn-primary btn-rounded">Emepcemos</a>-->
                                </div>
                            </div>
                        </div>
                        <!-- First column -->

                        <!-- Second column -->
                        <div class="col-lg-6 mb-5 mb-lg-0"
                             data-mdb-animation-init
                             data-mdb-animation-start="onLoad"
                             data-mdb-animation="slide-in-right"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="400">
                            <div class="bg-image hover-overlay rounded-7 shadow-4 rotate-lg">
                                <img src="./img/profile/foto-1.jpg" class="w-100" alt="" />
                                <div class="mask" style="background: linear-gradient(
                                       45deg,
                                       hsla(169, 84.5%, 52%, 0.3),
                                       hsla(263, 87.7%, 44.7%, 0.3) 100%
                                       )">
                                </div>
                            </div>
                        </div>
                        <!-- Second column -->
                    </div>
                </div>

            </section>
            <!-- End Section: About me -->

            <!-- Section: mision and vision (Ok) -->
            <section id="mision-and-vision" class="container mb-10">
                <div class="row">
                    <div class="col-xl-6 col-ls-6 col-md-12 col-sm-12 mb-5">
                        <div class="card h-100 rounded-7 toast-light shadow-5 me-lg-5"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="slide-in-left"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="300">
                            <div class="row g-0">
                                <div class="col-md-4 rounded-7" style="display:flex;justify-content: center;align-items: center;">
                                    <img
                                            src="./img/mision.png"
                                            alt="Trendy Pants and Shoes"
                                            class="img-fluid mx-5 rounded-start"
                                    />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title color-institucional-1"><i class="fa-regular fa-check-circle"></i> Misión</h5>
                                        <p class="card-text text-muted">
                                            "En <?= $nombre_empresa ?>, nuestra misión es proporcionar oportunidades de aprendizaje accesibles y de calidad que inspiren el crecimiento personal y profesional. Nos esforzamos por romper las barreras educativas al ofrecer cursos virtuales 100% online, permitiendo a los estudiantes aprender a su propio ritmo, desde cualquier lugar del mundo. Estamos comprometidos a empoderar a individuos de todas las edades y antecedentes para alcanzar sus metas y transformar sus vidas a través de la educación.".
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">by <?= $nombre_empresa ?></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-ls-6 col-md-12 col-sm-12 h-100">
                        <div class="card h-100 rounded-7 toast-light shadow-5 mb-3 me-lg-5"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="slide-in-right"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="400">
                            <div class="row g-0">
                                <div class="col-md-4 rounded-7" style="display:flex;justify-content: center;align-items: center;">
                                    <img
                                            src="./img/vision.png"
                                            alt="Trendy Pants and Shoes"
                                            class="img-fluid rounded-start"
                                    />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title color-institucional-1"><i class="fa-regular fa-check-circle"></i> Visión</h5>
                                        <p class="card-text text-muted">
                                            "Nuestra visión es ser la plataforma líder en educación en línea, reconocida por proporcionar cursos innovadores que se adaptan a las cambiantes demandas del mundo actual. Aspiramos a crear una comunidad global de aprendices apasionados que compartan conocimientos, se inspiren mutuamente y contribuyan al desarrollo continuo de sus habilidades. En <?= $nombre_empresa ?>, imaginamos un futuro donde el aprendizaje en línea sea la piedra angular de la formación educativa, impulsando el progreso y la igualdad de oportunidades en todo el mundo.".
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">by <?= $nombre_empresa ?></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- End Section: mision and vision -->

            <!-- Section: Indicators (Ok) -->
            <section id="indicators" class="container mb-10">

                <section class="text-center">
                    <div class="row"
                         data-mdb-animation-init
                         data-mdb-animation-start="onScroll"
                         data-mdb-animation="fade-in"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-delay="300">
                        <div class="col-lg-4 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="500">
                            <i class="fas fa-layer-group fa-5x color-institucional-1 mb-4"></i>
                            <!--<i class="fa-solid fa-folder-tree"></i>-->
                            <h5 class="color-institucional-1 fw-bold mt-2 mb-3">
                                <span class="counter"
                                      data-purecounter-start="0"
                                      data-purecounter-end="3"
                                      data-purecounter-duration="1000"></span>+
                            </h5>
                            <!--<span class="counter"
                            data-purecounter-start="0"
                            data-purecounter-end="10"
                            data-purecounter-duration="500">10</span>+-->

                            <h6 class="fw-normal mb-0">Cursos</h6>
                            <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
                        </div>

                        <!--<div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="700">
                            <i class="fas fa-layer-group fa-3x text-primary mb-4"></i>
                            <h5 class="text-primary fw-bold mt-2 mb-3">
                                <span class="counter"
                                      data-purecounter-start="0"
                                      data-purecounter-end="10"
                                      data-purecounter-duration="1500"></span>+
                            </h5>
                            <h6 class="fw-normal mb-0">Citas Semanales</h6>
                            <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
                        </div>-->

                        <div class="col-lg-4 col-md-6 mb-5 mb-md-0 position-relative"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="900">
                            <i class="fa-solid fa-chalkboard-user fa-5x color-institucional-1 mb-4"></i>
                            <!--<img src="./img/body-01.png" alt="my-body">-->
                            <h5 class="color-institucional-1 fw-bold mt-2 mb-3">
                                <span class="counter"
                                      data-purecounter-start="0"
                                      data-purecounter-end="5"
                                      data-purecounter-duration="1000"></span>+
                            </h5>
                            <h6 class="fw-normal mb-0">Instructores</h6>
                            <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-5 mb-md-0 position-relative"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="1100">
                            <i class="fa-solid fa-users fa-5x color-institucional-1 mb-4"></i>
                            <!--<i class="fa-solid fa-users"></i>-->
                            <!--<img src="./img/happy-01.png" alt="my-happy">-->
                            <h5 class="color-institucional-1 fw-bold mt-2 mb-3">
                                <span class="counter"
                                      data-purecounter-start="0"
                                      data-purecounter-end="500"
                                      data-purecounter-duration="3000">128</span>+
                            </h5>
                            <h6 class="fw-normal mb-0">Estudiantes</h6>
                        </div>
                    </div>
                </section>

            </section>
            <!-- End Section: Indicators -->

            <!-- Section: porque elegirnos (Ok) -->
            <section id="why-select-me" class="container mt-5 mb-5 mb-lg-10"
                     data-mdb-animation-init
                     data-mdb-animation-start="onScroll"
                     data-mdb-animation="fade-in"
                     data-mdb-animation-show-on-load="false"
                     data-mdb-animation-delay="300">

                <div class="row">
                    <h3 class="fw-bold text-center color-institucional-1 mb-5"
                        data-mdb-animation-init
                        data-mdb-animation-start="onScroll"
                        data-mdb-animation="fade-in"
                        data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="200"><i class="fa-solid fa-check-circle color-institucional-1"></i> ¿Por qué Elegirnos?</h3>
                    <h5 class="text-center text-muted mb-5"
                        data-mdb-animation-init
                        data-mdb-animation-start="onScroll"
                        data-mdb-animation="fade-in"
                        data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="200">En <?= $nombre_empresa ?>, creemos en la educación accesible y flexible. Aquí encontrarás razones para elegir nuestros cursos</h5>
                    <div class="col-xl-6 col-md-12 mb-4"
                         data-mdb-animation-init
                         data-mdb-animation-start="onScroll"
                         data-mdb-animation="fade-in"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-delay="500">
                        <div class="card toast-light rounded-6 border border-2 border-dark shadow shadow-4-strong" data-mdb-ripple-init>
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="fa-regular fa-hand-pointer fa-3x me-4 color-institucional-1"></i>
                                        </div>
                                        <div>
                                            <h4 class="color-institucional-1">Flexibilidad total</h4>
                                            <p class="mb-0 text-muted">Nuestra modalidad asincrónica te ofrece la libertad de aprender a tu propio ritmo, adaptándote a tu horario y desde cualquier ubicación en el mundo. Eliminamos las restricciones geográficas y los horarios fijos, brindándote la flexibilidad que necesitas para alcanzar tus objetivos de aprendizaje.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 mb-4 mt-xl-5 mt-lg-5"
                         data-mdb-animation-init
                         data-mdb-animation-start="onScroll"
                         data-mdb-animation="fade-in"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-delay="700">
                        <div class="card toast-light rounded-6 border border-2 border-dark shadow shadow-4-strong" data-mdb-ripple-init>
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="fa-solid fa-folder-tree fa-3x me-4 color-institucional-1"></i>
                                        </div>
                                        <div>
                                            <h4 class="color-institucional-1">Cursos y contenido complementario</h4>
                                            <p class="mb-0 text-muted">En nuestra plataforma, encontrarás una amplia variedad de cursos diseñados para ofrecerte una experiencia de aprendizaje integral. Además del contenido principal, proporcionamos recursos complementarios como plantillas de trabajo, lecturas adicionales y bonificaciones especiales. Todo esto está cuidadosamente diseñado para sumergir al estudiante en el fascinante mundo de la gestión de programas y proyectos sociales.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 mb-4"
                         data-mdb-animation-init
                         data-mdb-animation-start="onScroll"
                         data-mdb-animation="fade-in"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-delay="900">
                        <div class="card toast-light rounded-6 border border-2 border-dark shadow shadow-4-strong" data-mdb-ripple-init>
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="fa-solid fa-list-check fa-3x me-4 color-institucional-1"></i>
                                        </div>
                                        <div>
                                            <h4 class="color-institucional-1">Contenido de calidad al alcance de todos</h4>
                                            <p class="mb-0 text-muted">Nuestros cursos están diseñados para ser accesibles para todo tipo de público, ofreciendo a los estudiantes la oportunidad de explorar los aspectos más relevantes de cada tema. Estos cursos están alineados con las tendencias y paradigmas actuales abordados por la cooperación internacional y áreas de responsabilidad social en general. Queremos asegurarnos de que nuestro contenido sea fácilmente comprensible y útil para todos nuestros estudiantes, independientemente de su nivel de experiencia previa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 mb-4 mt-xl-5 mt-lg-5"
                         data-mdb-animation-init
                         data-mdb-animation-start="onScroll"
                         data-mdb-animation="fade-in"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-delay="1100">
                        <div class="card toast-light rounded-6 border border-2 border-dark shadow shadow-4-strong" data-mdb-ripple-init>
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="fa-solid fa-users fa-3x me-4 color-institucional-1"></i>
                                        </div>
                                        <div>
                                            <h4 class="color-institucional-1">Grupo privado de aprendizaje</h4>
                                            <p class="mb-0 text-muted">En nuestra plataforma, ofrecemos a nuestros estudiantes un grupo privado de participantes donde podrán compartir experiencias, recibir asistencia técnica y participar en sesiones periódicas de retroalimentación grupal. Este espacio exclusivo está diseñado para enriquecer la experiencia de aprendizaje, fomentar la colaboración entre los estudiantes y brindar un apoyo continuo a lo largo del curso.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- End Section: Pricing -->

            <!-- Section: How funcions (Ok) -->
            <section id="how-functions" class="container mb-5 text-center">
                <h3 class="fw-bold text-center color-institucional-1 mb-5"><i class="fa-solid fa-check-circle color-institucional-1"></i> ¿Como Funciona?</h3>

                <div class="row gx-lg-5">
                    <!-- First column -->
                    <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
                        <div class="card rounded-6 h-100 shadow-5-strong toast-light"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="200">
                            <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6"
                                 data-mdb-ripple-init
                                 data-mdb-ripple-color="light"
                                 data-mdb-modal-init
                                 data-mdb-target="#modal-register">
                                <img src="./img/b-registo-2.png" class="w-100" />
                                <a href="javascript:;">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title color-institucional-1">Registrate!</h5>
                                <!--<p class="text-muted">
                                    <small>Finished <u>13.09.2021</u> for
                                        <a href="" class="text-dark">Techify</a></small>
                                </p>-->
                                <p class="card-text text-muted">
                                    Regístrate en <?= $nombre_empresa ?> y obtén acceso instantáneo a tu área de cursos. ¡Es rápido y sencillo!
                                </p>
                                <a href="javascript:;" class="btn btn-institucional-1 btn-rounded"
                                   data-mdb-ripple-init
                                   data-mdb-modal-init
                                   data-mdb-target="#modal-register">Registrate Ahora!</a>
                            </div>
                        </div>

                    </div>
                    <!-- First column -->

                    <!-- Second column -->
                    <div class="col-lg-4 mb-6 mb-lg-0">
                        <div class="card rounded-6 h-100 shadow-5-strong toast-light" data-mdb-animation-init data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                            <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6"
                                 data-mdb-ripple-init
                                 data-mdb-ripple-color="light">
                                 <!--data-mdb-modal-init
                                 data-mdb-target="#project-2"-->
                                <img src="./img/b-cursos-2.png" class="w-100" />
                                <a href="javascript:;">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title color-institucional-1">Explora Nuestros Cursos</h5>
                                <!--<p class="text-muted">
                                    <small>Finished <u>12.01.2022</u> for
                                        <a href="" class="text-dark">Rubicon</a></small>
                                </p>-->
                                <p class="card-text text-muted">
                                    Descubre una variedad de cursos en nuestro catálogo. Filtra por categoría, nivel de habilidad o palabras clave para encontrar el curso perfecto para ti.
                                </p>
                                <a href="./courses.php" class="btn btn-institucional-1 btn-rounded" data-mdb-ripple-init>Explorar</a>
                            </div>
                        </div>
                    </div>
                    <!-- Second column -->

                    <!-- Third column -->
                    <div class="col-lg-4 mb-6 mb-lg-0">
                        <div class="card rounded-6 h-100 shadow-5-strong toast-light"
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
                                <img src="./img/b-aprende-2.png" class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title color-institucional-1">Aprende a Tu Ritmo</h5>
                                <!--<p class="text-muted">
                                    <small>Finished <u>10.11.2022</u> for
                                        <a href="" class="text-dark">Aprende a tu Rirmo</a></small>
                                </p>-->
                                <p class="card-text text-muted">
                                    Avanza a través del contenido a tu propio ritmo. Accede a las lecciones en cualquier momento y lugar, ya sea desde tu computadora, tableta o dispositivo móvil.
                                </p>
                                <!--<a href="#!" disabled="" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Leer mas...</a>-->
                            </div>
                        </div>
                    </div>
                    <!-- Third column -->
                </div>

            </section>
            <!-- Section: how functions -->

            <!-- Section: Projects modals (Ok) -->
            <section id="project-cards" class="container mb-6">
                <!-- Modal project 1 -->
                <?php include './modals/modal-restricted.php' ?>
                <?php include './modals/modal-register.php' ?>
                <!-- Modal project 2 -->
                <div class="modal fade" id="project-2" tabindex="-1" aria-labelledby="project-2Label" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="project-2Label">Balanced design</h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Section: Design Block -->
                                <section>

                                    <div class="row gx-lg-5 align-items-center">
                                        <div class="col-lg-5 mb-5 mb-lg-0">
                                            <div class="bg-image ripple rounded-7 shadow-5-strong" data-mdb-ripple-init
                                                 data-mdb-ripple-color="light">
                                                <img src="https://mdbootstrap.com/img/new/textures/full/7.jpg" class="w-100" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                                                        <div class="d-flex justify-content-center align-items-center h-100">
                                                            <div class="px-4 py-5 px-md-5 text-white text-center">
                                                                <h3 class="text-uppercase fw-bold mb-4">
                                                                    The future is <u style="color: hsl(210, 12%, 80%)">now</u>
                                                                </h3>
                                                                <p class="mb-0" style="color: hsl(210, 12%, 80%)">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Harum quia laboriosam error consequuntur fugit,
                                                                    doloribus rerum, iure nesciunt amet quidem veniam
                                                                    cupiditate hic fugiat dolore aperiam quisquam libero
                                                                    earum quibusdam?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hover-overlay">
                                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 mb-4 mb-lg-0">
                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                                                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Support 24/7</p>
                                                    <p class="text-muted mb-0">
                                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                        Nihil quisquam quibusdam modi sapiente magni molestias
                                                        pariatur facilis reprehenderit facere aliquam ex.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                                                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Safe and solid</p>
                                                    <p class="text-muted mb-0">
                                                        Eum nostrum fugit numquam, voluptates veniam neque quibusdam ullam aspernatur odio soluta,
                                                        quisquam dolore animi mollitia a omnis praesentium, expedita nobis!
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                                                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Extremely fast</p>
                                                    <p class="text-muted mb-0">
                                                        Enim cupiditate, minus nulla dolor cumque iure eveniet facere ullam beatae hic voluptatibus
                                                        dolores exercitationem? Facilis debitis aspernatur amet nisi iure eveniet facere?
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                                                        <i class="fas fa-chart-pie fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Live analytics</p>
                                                    <p class="text-muted mb-0">
                                                        Illum doloremque ea, blanditiis sed dolor laborum praesentium maxime sint, consectetur atque
                                                        ipsum ab adipisci ullam aspernatur odio soluta, quisquam dolore
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Section: Design Block -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                                        data-mdb-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-mdb-ripple-init data-mdb-ripple-init>Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal project 3 -->
                <div class="modal fade" id="project-3" tabindex="-1" aria-labelledby="project-3Label" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="project-3Label">Metaverse 2.0</h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Section: Design Block -->
                                <section>

                                    <div class="row gx-lg-5 align-items-center">
                                        <div class="col-lg-5 mb-5 mb-lg-0">
                                            <div class="bg-image ripple rounded-7 shadow-5-strong" data-mdb-ripple-init
                                                 data-mdb-ripple-color="light">
                                                <img src="https://mdbootstrap.com/img/new/textures/full/30.jpg" class="w-100" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                                                        <div class="d-flex justify-content-center align-items-center h-100">
                                                            <div class="px-4 py-5 px-md-5 text-white text-center">
                                                                <h3 class="text-uppercase fw-bold mb-4">
                                                                    The future is <u style="color: hsl(210, 12%, 80%)">now</u>
                                                                </h3>
                                                                <p class="mb-0" style="color: hsl(210, 12%, 80%)">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Harum quia laboriosam error consequuntur fugit,
                                                                    doloribus rerum, iure nesciunt amet quidem veniam
                                                                    cupiditate hic fugiat dolore aperiam quisquam libero
                                                                    earum quibusdam?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hover-overlay">
                                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 mb-4 mb-lg-0">
                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(260, 84%, 43%)">
                                                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Support 24/7</p>
                                                    <p class="text-muted mb-0">
                                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                        Nihil quisquam quibusdam modi sapiente magni molestias
                                                        pariatur facilis reprehenderit facere aliquam ex.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(260, 84%, 43%)">
                                                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Safe and solid</p>
                                                    <p class="text-muted mb-0">
                                                        Eum nostrum fugit numquam, voluptates veniam neque quibusdam ullam aspernatur odio soluta,
                                                        quisquam dolore animi mollitia a omnis praesentium, expedita nobis!
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(260, 84%, 43%)">
                                                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Extremely fast</p>
                                                    <p class="text-muted mb-0">
                                                        Enim cupiditate, minus nulla dolor cumque iure eveniet facere ullam beatae hic voluptatibus
                                                        dolores exercitationem? Facilis debitis aspernatur amet nisi iure eveniet facere?
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(260, 84%, 43%)">
                                                        <i class="fas fa-chart-pie fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Live analytics</p>
                                                    <p class="text-muted mb-0">
                                                        Illum doloremque ea, blanditiis sed dolor laborum praesentium maxime sint, consectetur atque
                                                        ipsum ab adipisci ullam aspernatur odio soluta, quisquam dolore
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Section: Design Block -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                                        data-mdb-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-mdb-ripple-init>Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Section: Projects modals -->

            <!-- Section: Certificate -->
            <section id="certificate" class="container mb-0 text-center"
                     data-mdb-animation-init
                     data-mdb-animation-start="onScroll"
                     data-mdb-animation="fade-in"
                     data-mdb-animation-show-on-load="false"
                     data-mdb-animation-delay="200">
                <!--<div class="container">-->
                <div class="row gx-0 align-items-center">
                    <!-- First column -->
                    <div class="col-lg-6 mb-lg-0">
                        <div style="backdrop-filter: blur(50px);z-index: 1;" class="card toast-light rounded-7 me-lg-n5"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="500">
                            <div class="card-body p-lg-5 shadow-5">
                                <storong class="h3 color-institucional-1"><i class="fas fa-check-circle"></i> Obtén Certificación!</storong>
                                <p class="text-muted">
                                    Completa el curso y obtén un certificado reconocido que puedes agregar a tu currículum y mostrar a futuros empleadores.
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- First column -->

                    <!-- Second column -->
                    <div class="col-lg-6 mb-lg-0">
                        <div class="col-12 mb-10"></div>
                        <div class="ratio ratio-1x1 rounded-7"
                             data-mdb-animation-init
                             data-mdb-animation-start="onScroll"
                             data-mdb-animation="fade-in"
                             data-mdb-animation-show-on-load="false"
                             data-mdb-animation-delay="400">
                            <img class="w-100 mt-10 h-75 m-0 p-0 rounded-7 border border-3 border-dark" src="./img/certificate-model.png" alt="img-gob-bye">
                        </div>
                    </div>
                    <!-- Second column -->
                </div>
                <!--</div>-->
            </section>
            <!-- End Section: certificate -->

            <!-- Section: Good Bye -->
            <section id="good-bye" class="container mb-5 text-center"
                     data-mdb-animation-init
                     data-mdb-animation-start="onScroll"
                     data-mdb-animation="fade-in"
                     data-mdb-animation-show-on-load="false"
                     data-mdb-animation-delay="200">
                <!--<div class="container">-->
                    <div class="row gx-0 align-items-center">
                        <!-- First column -->
                        <div class="col-lg-6 mb-lg-0">
                            <div style="backdrop-filter: blur(50px);z-index: 1;" class="card toast-light rounded-7 me-lg-n5"
                                 data-mdb-animation-init
                                 data-mdb-animation-start="onScroll"
                                 data-mdb-animation="fade-in"
                                 data-mdb-animation-show-on-load="false"
                                 data-mdb-animation-delay="500">
                                <div class="card-body p-lg-5 shadow-5">
                                    <storong class="h3 color-institucional-1">¡Únete a <?= $nombre_empresa ?> hoy y da un Paso hacia Tu Futuro!</storong>
                                    <p class="text-muted">
                                        "En <strong><?= $nombre_empresa ?></strong>, estamos comprometidos a brindarte una experiencia de aprendizaje en línea excepcional. ¡Únete a nuestra comunidad global de estudiantes hoy y da un paso importante hacia el logro de tus metas!"
                                    </p>
                                    <p>
                                        <strong class="h3 color-institucional-1">¡Empieza Tu Aventura de Aprendizaje Ahora!.</strong>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!-- First column -->

                        <!-- Second column -->
                        <div class="col-lg-6 mb-lg-0">
                            <div class="col-12 mb-10"></div>
                            <div class="ratio ratio-1x1 rounded-7"
                                 data-mdb-animation-init
                                 data-mdb-animation-start="onScroll"
                                 data-mdb-animation="fade-in"
                                 data-mdb-animation-show-on-load="false"
                                 data-mdb-animation-delay="400">
                                <img class="w-100 h-75 m-0 p-0 rounded-7 border border-3 border-dark" src="./img/banners/banner-gb.jpg" alt="img-gob-bye">
                            </div>
                        </div>
                        <!-- Second column -->
                    </div>
                <!--</div>-->
            </section>
            <!-- End Section: Good Bye -->

        <section class="container mt-10 mb-0"><h1 style="color: rgb(85, 108, 117) !important;">.</h1></section>
        <!--</div>-->
    </section>
<!--</section>-->

<!--Footer-->
<?php include './sections/footer.php' ?>
<!-- End Footer -->
</body>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- MDB -->
<script src="../template-mdb5/js/pro.mdb.umd.min.js"></script>
<!-- Custom scripts -->
<!--<script type="text/javascript" src="../template-mdb5/js/script.js"></script>-->
<!-- Bootstrap JS -->
<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>-->
<!-- MyScripts -->
<script src="./js/scripts.js"></script>
<script src="./js/js_usuario.js"></script>
</html>