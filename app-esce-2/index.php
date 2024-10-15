<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= $ico ?>"><!-- ./assets/img/favicon.png -->
    <title>
        ESCE | Home
    </title>
    <?php include './sections/page-sections/ref-header.php' ?>

</head>

<body class="case-study bg-gray-200">
    <div class="container position-sticky z-index-sticky top-0 mb-2 mb-sm-0 mb-md-0 mb-lg-0">
        <div class="row">
            <div class="col-12">
                <?php include './sections/page-sections/nav-bar-3.php' ?>
            </div>
        </div>
    </div>
    <header class=""
        style="background: url('./assets/img/hero/hero-card-02.png') no-repeat center center;background-size: cover;">
        <div class="page-header min-vh-100 text-color-grey" loading="lazy">
            <span class="mask opacity-4"></span>
            <div class="container">
                <div class="row p-3">
                    <div
                        class="col-lg-8 col-md-12 d-flex justify-content-center text-md-start text-center flex-column mt-sm-0 mt-7">
                        <h1 class="text-white">Escuela de <br>
                            Ciencias Empresariales y<br>
                            <b class="bg-gradient-warning text-white p-1 rounded rounded-15">Gestión Pública</b>
                        </h1>
                        <div class="buttons">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="text-white">
                                        Domina la gestión de organizaciones con cursos virtuales para reinventar tu
                                        carrera o transformar tu negocio
                                    </h5>
                                </div>
                            </div>
                            <!--<a href="#section-cursos">
                                <button type="button" class="btn btn-lg btn-warning mt-4"
                                    style="border-radius: 20px;">Próximos cursos</button>
                            </a>-->
                        </div>
                    </div>
                    <div class="col-4 d-lg-block d-sm-none">
                        <!--<img src="<?= $img_hero_main ?>" class="w-100 h-100 d-none d-lg-block" alt="">-->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- //? NEWSLETTER -->
    <div class="main-bg-color-grey mx-md-2 mt-n7 mb-7">
        <div class="container">
            <div class="row align-content-center">
                <div class="col-12 col-lg-6 p-5">
                    <h3 class="text-white">ESCE NEWSLETTER</h3>
                    <p class="text-white">
                        suscríbete para tener acceso a nuestro boletín mensual, dónde encontrarás información sobre
                        herramientas aplicables de gestión, economía y el desarrollo de nuevos negocios.
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row align-items-center mt-lg-6 mb-5">
                        <div class="col-1 h-100 align-items-center">
                            <button type="button"
                                class="btn btn-white text-color-grey btn-icon-only rounded-circle mt-3">
                                <i class="fas fa-paper-plane fa-1x p-0 m-0"></i>
                            </button>
                        </div>
                        <div class="col-7 mb-0 h-100 align-items-center">
                            <input type="text"
                                class="form-control form-control-lg main-bg-color-white text-dark p-2 mb-sm-0"
                                placeholder="Ingresa tu email"
                                style="background-color: white !important;border-radius: 20px;">
                        </div>
                        <div class="col-4 ps-0 h-100 align-items-center">
                            <button type="button"
                                class="btn btn-warning mb-0 h-100 position-relative z-index-2 btn-rounded-20p">Suscribirme</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //? TU PROXIMA HABILIDAD -->
    <div class="container text-center">
        <h2>Escoge <b class="bg-gradient-danger text-white p-1 rounded rounded-15">tu próxima
                habilidad</b></h2>
        <p class="text_info mb-4">
            ESCE te prepara para resolver problemas concretos, potenciando tu creatividad con herramientas de gestión
            aplicables, una mentalidad de crecimiento y la resiliencia necesaria para enfrentar retos en contextos de
            constante cambio.
        </p>

        <section>
            <!--<div class="container">-->
            <div class="row">
                <div class="gliderrr">
                    <div data-glide-el="track" class="glide__track">
                        <ul class="glide__slides h-100">

                            <li class="glide__slide h-100">
                                <div class="glide__container h-100">
                                    <div class="card h-100 mt-4">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                            <a class="d-block blur-shadow-image">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOxogo8eFV1Cz5w9PEFyLeXjpQq5djHz9HCQ&s"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                            <div class="colored-shadow"
                                                style="background-image: url('./assets/img/hero/hero-card-01.png');">
                                            </div>
                                        </div>
                                        <div class="card-body px-4 pt-4">
                                            <a href="javascript:;">Inteligencia Artificial</a>
                                            <p class="mt-2">
                                                The place is close to Barceloneta Beach and bus stop just 2 min by
                                                walk and near
                                                to "Naviglio" where you can enjoy the main night life in Barcelona.
                                            </p>
                                        </div>
                                        <hr class="dark horizontal my-0">
                                        <div class="card-footer d-flex">
                                            <button
                                                class="btn bg-gradient-danger btn-block w-100 move-on-hover icon-move-right mb-1">
                                                Acción 1&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="far fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="glide__slide h-100">
                                <div class="glide__container h-100">
                                    <div class="card h-100 mt-4">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                            <a class="d-block blur-shadow-image">
                                                <img src="./assets/img/hero/hero-card-02.png" alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-lg">
                                            </a>
                                            <div class="colored-shadow"
                                                style="background-image: url('./assets/img/hero/hero-card-02.png');">
                                            </div>
                                        </div>
                                        <div class="card-body px-4 pt-4">
                                            <a href="javascript:;">Marketing Digital</a>
                                            <p class="mt-2">
                                                The place is close to Barceloneta Beach and bus stop just 2 min by
                                                walk and near
                                                to "Naviglio" where you can enjoy the main night life in Barcelona.
                                            </p>
                                        </div>
                                        <hr class="dark horizontal my-0">
                                        <div class="card-footer d-flex">
                                            <button
                                                class="btn bg-gradient-danger btn-block w-100 move-on-hover icon-move-right mb-1">
                                                Acción 1&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="far fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="glide__slide h-100">
                                <div class="glide__container h-100">
                                    <div class="card h-100 mt-4">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                            <a class="d-block blur-shadow-image">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT36Srf1-cRPxpvrQ-cMiy6K_rYBbplSIa2JA&s"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                            <div class="colored-shadow"
                                                style="background-image: url('./assets/img/hero/hero-card-03.png');">
                                            </div>
                                        </div>
                                        <div class="card-body px-4 pt-4">
                                            <a href="javascript:;">Emprendimiento</a>
                                            <p class="mt-2">
                                                The place is close to Barceloneta Beach and bus stop just 2 min by
                                                walk and near
                                                to "Naviglio" where you can enjoy the main night life in Barcelona.
                                            </p>
                                        </div>
                                        <hr class="dark horizontal my-0">
                                        <div class="card-footer d-flex">
                                            <button
                                                class="btn bg-gradient-danger btn-block w-100 move-on-hover icon-move-right mb-1">
                                                Acción 1&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="far fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="glide__slide h-100">
                                <div class="glide__container h-100">
                                    <div class="card h-100 mt-4">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                            <a class="d-block blur-shadow-image">
                                                <img src="./assets/img/hero/hero-crecim.jpg" alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-lg">
                                            </a>
                                            <div class="colored-shadow"
                                                style="background-image: url('./assets/img/hero/hero-crecim.jpg');">
                                            </div>
                                        </div>
                                        <div class="card-body px-4 pt-4">
                                            <a href="javascript:;">Soft Skills</a>
                                            <p class="mt-2">
                                                The place is close to Barceloneta Beach and bus stop just 2 min by
                                                walk and near
                                                to "Naviglio" where you can enjoy the main night life in Barcelona.
                                            </p>
                                        </div>
                                        <hr class="dark horizontal my-0">
                                        <div class="card-footer d-flex">
                                            <button
                                                class="btn bg-gradient-danger btn-block w-100 move-on-hover icon-move-right mb-1">
                                                Acción 1&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="far fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="glide__slide h-100">
                                <div class="glide__container h-100">
                                    <div class="card h-100 mt-4">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                            <a class="d-block blur-shadow-image">
                                                <img src="./assets/img/hero/hero-003.jpg" alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-lg">
                                            </a>
                                            <div class="colored-shadow"
                                                style="background-image: url('./assets/img/hero/hero-003.jpg');">
                                            </div>
                                        </div>
                                        <div class="card-body px-4 pt-4">
                                            <a href="javascript:;">Bienestar</a>
                                            <p class="mt-2">
                                                The place is close to Barceloneta Beach and bus stop just 2 min by
                                                walk and near
                                                to "Naviglio" where you can enjoy the main night life in Barcelona.
                                            </p>
                                        </div>
                                        <hr class="dark horizontal my-0">
                                        <div class="card-footer d-flex">
                                            <button
                                                class="btn bg-gradient-danger btn-block w-100 move-on-hover icon-move-right mb-1">
                                                Acción 1&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="far fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--<li class="glide__slide h-100">
                                <div class="glide__container h-100">
                                    <div class="card h-100 mt-4">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                            <a class="d-block blur-shadow-image">
                                                <img src="./assets/img/hero/theaching-teachers-02.jpg"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                            <div class="colored-shadow"
                                                style="background-image: url('./assets/img/hero/theaching-teachers-02.jpg');">
                                            </div>
                                        </div>
                                        <div class="card-body px-4 pt-4">
                                            <a href="javascript:;">Cozy 5 Stars Apartment</a>
                                            <p class="mt-2">
                                                The place is close to Barceloneta Beach and bus stop just 2 min by
                                                walk and near
                                                to "Naviglio" where you can enjoy the main night life in Barcelona.
                                            </p>
                                        </div>
                                        <hr class="dark horizontal my-0">
                                        <div class="card-footer d-flex">
                                            <button
                                                class="btn bg-gradient-danger btn-block w-100 move-on-hover icon-move-right mb-1">
                                                Acción 1&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="far fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>-->

                        </ul>
                    </div>
                </div>
            </div>
            <!--</div>-->
        </section>

    </div>

    <!--<div>
        <img src="./assets/img/sec-03.png" class="w-100" alt="">
    </div>-->

    <!-- //? EXPERIENCIA ESCE -->
    <section class="container mx-auto">
        <div class="col-12 col-lg-11 mx-auto">

            <div class="row align-content-center align-items-center mx-auto">
                <div class="col-12 col-lg-4">
                    <div class="text-sections">
                        <div id="text1" class="text-muted p-6">
                            <h5>See</h5>
                            <p>Our courses engage you through stories, expertise, and humor. Each lesson has a series of
                                3-5
                                minute videos that explain the why, what, and how of a specific topic. Plus we bring
                                everything to life through case studies from around the globe.</p>
                        </div>
                        <div id="text3" class="text-muted p-6">
                            <h5>Reflect</h5>
                            <p>
                                Our learning experiences have a variety of reflective activities to help you make the
                                connections to your specific work challenges. Reflection is one of the most effective
                                ways
                                to deepen your professional impact.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 align-content-center align-items-center">
                    <div class="circle-container m-0 p-0 align-content-center">
                        <div class="circle mx-auto align-content-center align-items-center">
                            <div class="quadrant" id="quadrant1" data-target="text1">
                                <div class="text-white text-center p-5">
                                    <i class="material-icons text-6xl mb-0">subscriptions</i>
                                    <h6 class="text-color-white">See</h6>
                                </div>
                            </div>
                            <div class="quadrant" id="quadrant2" data-target="text2">
                                <div class="text-white text-center p-5">
                                    <i class="material-icons text-6xl mb-0">library_books</i>
                                    <h6 class="text-color-white">Try</h6>
                                </div>
                            </div>
                            <div class="quadrant" id="quadrant3" data-target="text3">
                                <div class="text-white text-center p-5 pt-4">
                                    <h6 class="text-color-white mb-0">Reflect</h6>
                                    <i class="material-icons text-6xl mb-0">psychology</i>
                                </div>
                            </div>
                            <div class="quadrant" id="quadrant4" data-target="text4">
                                <div class="text-white text-center p-5 pt-4">
                                    <h6 class="text-color-white mb-0">Share</h6>
                                    <i class="material-icons text-6xl mb-0">forum</i>
                                </div>
                            </div>
                        </div>
                        <div class="inner-circle"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="text-sections">
                        <div id="text2" class="text-muted p-6">
                            <h5>Try</h5>
                            <p>
                                In order to develop new skills, you need to try them out through repeated practice and
                                exposure to new contexts. Our courses provide opportunities to try out new behaviors
                                online
                                and through real-world projects.
                            </p>
                        </div>
                        <div id="text4" class="text-muted p-6">
                            <h5>Share</h5>
                            <p>
                                Knowledge is constructed through interaction with others—which is the foundation of our
                                cohort experience. It’s through sharing and discussing with qualified teaching leads and
                                a
                                global peer network that you build greater understanding.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- //? INNOVACION EMPRESARIAL -->
    <div class="main-bg-color-grey">
        <div class="container pt-3 pb-5">
            <div class="row my-5 text-center">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="text-color-white p-3">Innovación <b
                            class="bg-gradient-warning p-1 rounded rounded-15">Empresarial</b></h2>
                    <p class="text-color-white">
                        Colabora con nosotros para superar los retos que detienen el crecimiento de tu empresa. Te
                        guiamos en la solución de problemas y en la creación de productos y servicios que impulsen tu
                        negocio hacia el futuro.
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 text-start text-white">
                        <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                            <p class="mb-0">Nuestos servicios</p>
                            <h4 class="text-white mb-2">Servicios de Innovación Empresarial.</h4>
                            <p>
                                Utilizamos metodologías ágiles para ayudarte a descubrir nuevo valor en lo que haces,
                                crecer con el desarrollo de productos innovadores y resolver problemas complejos. Con
                                nosotros podrás
                            </p>
                            <p><i class="fas fa-edit text-color-warning"></i> Definir con precisión los desafíos de tu
                                empresa.</p>
                            <p><i class="fas fa-edit text-color-warning"></i> Aprovechar el conocimiento interno y
                                combinarlo con ideas frescas para crecer o resolver problemas.</p>
                            <p><i class="fas fa-edit text-color-warning"></i> Desarrollar productos y servicios a bajo
                                costo.</p>
                            <p><i class="fas fa-edit text-color-warning"></i> Comunicar de manera clara y convincente el
                                valor de tus nuevas propuestas.</p>
                            <p><button class="btn main-bg-color-warning btn-warning btn-rounded-20p mt-4">Acction
                                    1</button></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="row text-start mb-5">

                            <div class="col-12 col-lg-6 mb-4 mb-lg-5 position-relative">
                                <div class="card levitate-on-hover p-4 h-100"
                                    style="box-shadow: 0 20px 20px -10px var(--main-bg-color-warning) !important;">
                                    <div class="card-body pb-0">
                                        <h4 class="mb-0">Innovation Bottom-Up</h4>
                                        <hr class="bg-warning w-100">
                                        <p><b>Nuestro servicio</b></p>
                                        <p class="mt-2">
                                            Trabajamos con tu equipo para descubrir el conocimiento que ya poseen,
                                            movilizarlo en un ambiente colaborativo y construir soluciones efectivas a
                                            problemas reales, además de identificar nuevas oportunidades de negocio.
                                        </p>
                                        <p><b>Nuestro enfoque</b> se basa en 4 pilares clave</p>

                                        <div class="p-3 d-flex px-0 py-1">
                                            <i class="material-icons text-primary font-weight-bold">done</i>
                                            <div class="ps-3">
                                                <span class="text-sm">
                                                    <b>Generación:</b> Espacios de creatividad e ideación mediante
                                                    talleres y plataformas digitales.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="p-3 d-flex px-0 py-1">
                                            <i class="material-icons text-primary font-weight-bold">done</i>
                                            <div class="ps-3">
                                                <span class="text-sm">
                                                    <b>Evaluación:</b> Priorizamos la viabilidad técnica, necesidades
                                                    del cliente y facilidad de implementación.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="p-3 d-flex px-0 py-1">
                                            <i class="material-icons text-primary font-weight-bold">done</i>
                                            <div class="ps-3">
                                                <span class="text-sm">
                                                    <b>Pruebas de bajo costo:</b> Prototipos rápidos y feedback de
                                                    usuarios antes de la implementación.

                                                </span>
                                            </div>
                                        </div>
                                        <div class="p-3 d-flex px-0 py-1">
                                            <i class="material-icons text-primary font-weight-bold">done</i>
                                            <div class="ps-3">
                                                <span class="text-sm">
                                                    <b>Oportunidades escalables:</b> Ideas viables con potencial de
                                                    crecimiento en relación al esfuerzo y costo.

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="card-footer pt-2">
                                        <div class="mx-auto">
                                            <p class="mb-0"><b>Live online</b> Lorem, ipsum dolor.</p>
                                            <p><b>In person</b> Lorem, ipsum dolor.</p>
                                        </div>
                                    </div>-->
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mb-4 mb-lg-5">
                                <div class="card levitate-on-hover p-4 h-100"
                                    style="box-shadow: 0 20px 20px -10px var(--main-bg-color-warning) !important;">
                                    <div class="card-body pb-0">
                                        <h4 class="mb-0">Innovation de Productos o Servicios</h4>
                                        <hr class="bg-warning w-100">
                                        <p><b>Nuestro servicio</b></p>
                                        <p class="mt-2">
                                            Trabajamos junto a tu equipo para convertir ideas en productos o servicios
                                            viables, integrando el conocimiento interno con nuevas metodologías. Te
                                            acompañamos desde la concepción hasta el lanzamiento, para que tus
                                            propuestas sean efectivas.
                                        </p>
                                        <p><b>Nuestro enfoque</b> se basa en 5 pilares clave</p>

                                        <div class="p-3 d-flex px-0 py-1">
                                            <i class="material-icons text-primary font-weight-bold">done</i>
                                            <div class="ps-3">
                                                <span class="text-sm">
                                                    <b>Ideación y Conceptualización:</b> Creamos espacios para la
                                                    generación de ideas innovadoras.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="p-3 d-flex px-0 py-1">
                                            <i class="material-icons text-primary font-weight-bold">done</i>
                                            <div class="ps-3">
                                                <span class="text-sm">
                                                    <b>Validación de Concepto:</b> Evaluamos la viabilidad técnica y el
                                                    alineamiento con las expectativas del cliente.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="p-3 d-flex px-0 py-1">
                                            <i class="material-icons text-primary font-weight-bold">done</i>
                                            <div class="ps-3">
                                                <span class="text-sm">
                                                    <b>Prototipado Rápido:</b> Prototipos rápidos y feedback de usuarios
                                                    antes de la implementación.

                                                </span>
                                            </div>
                                        </div>
                                        <div class="p-3 d-flex px-0 py-1">
                                            <i class="material-icons text-primary font-weight-bold">done</i>
                                            <div class="ps-3">
                                                <span class="text-sm">
                                                    <b>Escalabilidad:</b> Identificamos las ideas con mayor potencial y
                                                    potencial retorno de inversión.

                                                </span>
                                            </div>
                                        </div>
                                        <div class="p-3 d-flex px-0 py-1">
                                            <i class="material-icons text-primary font-weight-bold">done</i>
                                            <div class="ps-3">
                                                <span class="text-sm">
                                                    <b>Deducción de Impuestos:</b> Acceso a incentivos fiscales para
                                                    empresas que invierten en I+D.

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="card-footer pt-2">
                                        <div class="mx-auto">
                                            <p class="mb-0"><b>Live online</b> Lorem, ipsum dolor.</p>
                                            <p><b>In person</b> Lorem, ipsum dolor.</p>
                                        </div>
                                    </div>-->
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mb-4">
                                <div class="card levitate-on-hover p-4 h-100"
                                    style="box-shadow: 0 20px 20px -10px var(--main-bg-color-warning) !important;">
                                    <div class="card-body pb-0">
                                        <h4 class="mb-0">Olivia Harper</h4>
                                        <hr class="bg-warning w-100">
                                        <p>@oliviaharper</p>
                                        <p class="mt-2">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem enim
                                            maxime iusto nostrum eum, minus quisquam aspernatur harum, dolorem aliquam
                                            repudiandae molestiae consectetur quo eaque maiores, ea cupiditate nesciunt
                                            ad sequi amet! Accusantium, saepe molestiae.
                                        </p>
                                    </div>
                                    <div class="card-footer pt-2">
                                        <div class="mx-auto">
                                            <p class="mb-0"><b>Live online</b> Lorem, ipsum dolor.</p>
                                            <p><b>In person</b> Lorem, ipsum dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mb-4">
                                <div class="card levitate-on-hover p-4 h-100"
                                    style="box-shadow: 0 20px 20px -10px var(--main-bg-color-warning) !important;">
                                    <div class="card-body pb-0">
                                        <h4 class="mb-0">Olivia Harper</h4>
                                        <hr class="bg-warning w-100">
                                        <p>@oliviaharper</p>
                                        <p class="mt-2">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem enim
                                            maxime iusto nostrum eum, minus quisquam aspernatur harum, dolorem aliquam
                                            repudiandae molestiae consectetur quo eaque maiores, ea cupiditate nesciunt
                                            ad sequi amet! Accusantium, saepe molestiae.
                                        </p>
                                    </div>
                                    <div class="card-footer pt-2">
                                        <div class="mx-auto">
                                            <p class="mb-0"><b>Live online</b> Lorem, ipsum dolor.</p>
                                            <p><b>In person</b> Lorem, ipsum dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //? TIPOS DE CERTIFICADOS -->
    <div class="main-bg-color-white">
        <div class="container pt-3 pb-5">
            <div class="row my-5 text-center">
                <div class="col-md-6 mx-auto mb-4 text-center">
                    <h2 class="text-color-grey p-3">Tipos de <b
                            class="bg-gradient-danger p-1 rounded rounded-15 text-white">Certificados</b></h2>
                    <p class="text-color-grey">
                        Al completar nuestros cursos o talleres, obtendrás certificaciones que avalan tu participación
                        en procesos diseñados para el desarrollo de competencias. Estos certificados tienen como
                        objetivo ampliar tu conocimiento en gestión de organizaciones y mejorar tus oportunidades
                        profesionales.
                    </p>
                </div>
            </div>

            <div class="container pb-5 position-relative z-index-3 text-color-grey">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-7">
                        <div class="card h-100">
                            <div class="text-center mt-n5 z-index-1">
                                <div class="position-relative">
                                    <div class="blur-shadow-avatar rounded-circle">
                                        <img class="avatar avatar-xxl shadow-lg pt-2 pb-2" src="<?= $ico ?>"
                                            alt="avatar">
                                    </div>
                                    <div class="colored-shadow rounded start-0 end-0 mx-auto avatar-xxl"
                                        style="background-image: url('<?= $ico ?>'"></div>
                                    <div class="colored-shadow start-0 end-0 mx-auto avatar-xxl"></div>
                                </div>
                            </div>
                            <div class="card-body text-center pb-0">
                                <h4 class="mb-0">Crtificado de Asistencia</h4>
                                <p>por @esce</p>
                                <p class="mt-2">
                                    Se otorga a quienes participan en nuestros cursos cortos, certificando únicamente la
                                    asistencia.
                                </p>
                            </div>
                            <div class="card-footer text-center pt-2">
                                <div class="mx-auto">
                                    <a href="javascript:;" class="icon-move-right text-sm">Ver más
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-7">
                        <div class="card h-100">
                            <div class="text-center mt-n5 z-index-1">
                                <div class="position-relative">
                                    <div class="blur-shadow-avatar rounded-circle">
                                        <img class="avatar avatar-xxl shadow-lg pt-2 pb-2" src="<?= $ico ?>"
                                            alt="avatar">
                                    </div>
                                    <div class="colored-shadow rounded start-0 end-0 mx-auto avatar-xxl"
                                        style="background-image: url('<?= $ico ?>')"></div>
                                    <div class="colored-shadow start-0 end-0 mx-auto avatar-xxl"></div>
                                </div>
                            </div>
                            <div class="card-body text-center pb-0">
                                <h4 class="mb-0">Certificado de Competencia</h4>
                                <p>por @esce</p>
                                <p class="mt-2">
                                    Se concede a los participantes de nuestros talleres, validando su participación en
                                    dinámicas diseñadas para fomentar el desarrollo de competencias, sin evaluaciones
                                    formales.
                                </p>
                            </div>
                            <div class="card-footer text-center pt-2">
                                <div class="mx-auto">
                                    <a href="javascript:;" class="icon-move-right text-sm">Ver más
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-7">
                        <div class="card h-100">
                            <div class="text-center mt-n5 z-index-1">
                                <div class="position-relative">
                                    <div class="blur-shadow-avatar rounded-circle">
                                        <img class="avatar avatar-xxl shadow-lg pt-2 pb-2" src="<?= $ico ?>"
                                            alt="avatar">
                                    </div>
                                    <div class="colored-shadow rounded start-0 end-0 mx-auto avatar-xxl"
                                        style="background-image: url(&quot;../assets/img/team-4.jpg&quot;);"></div>
                                    <div class="colored-shadow start-0 end-0 mx-auto avatar-xxl"></div>
                                </div>
                            </div>
                            <div class="card-body text-center pb-0">
                                <h4 class="mb-0">Certificado de Liderazgo</h4>
                                <p>por @esce</p>
                                <p class="mt-2">
                                    Se otorga al completar 4 cursos o talleres, de los cuales al menos 2 deben ser
                                    talleres. Este certificado reconoce la participación en procesos de aprendizaje
                                    orientados a la solución de problemas a través de la aplicación de modelos de
                                    gestión.

                                </p>
                            </div>
                            <div class="card-footer text-center pt-2">
                                <div class="mx-auto">
                                    <a href="javascript:;" class="icon-move-right text-sm">Ver más
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //? SECCION RECURSOS -->
    <div class="main-bg-color-grey">
        <div class="container pt-5 pb-2">
            <div class="container">
                <div class="row my-5 align-content-center align-items-center">
                    <div class="col-12 col-lg-6 p-5">
                        <div class="card">
                            <img src="./assets/img/hero/hero-001.jpg" class="h-75 rounded rounded-15" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 text-color-white p-4">
                        <p class="mb-0">Lorem, ipsum dolor.</p>
                        <h1 class="text-color-white mb-4">Recursos diseñados para elevar tu juego profesional</h1>
                        <h5 class="text-color-white">Recursos pensados para ayudarte a aplicar conocimiento de gestión
                            en tu vida profesional y mejorar tu perfil de empleabilidad. Aquí encontrarás recursos sobre
                            herramientas de gestión, ideas, casos y más.</h5>
                        <h5 class="text-color-white mt-4 mb-4">ESCE pone a tu disposición recursos gratuitos creados por
                            nuestros docentes y colaboradores con el objetivo de que puedas sacarle provecho y aplicarlo
                            en tu vida profesional.</h5>
                        <p>
                            <button class="btn bg-gradient-warning btn-rounded-20p icon-move-right mt-2">Ver más <i
                                    class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i></button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //? PREGUNTAS FRECUENTES -->
    <div class="main-bg-color-white">
        <div class="container pt-5 pb-2">
            <div class="container">
                <div class="row my-5">
                    <div class="col-12 col-lg-4 text-center">
                        <h3>Preguntas Frecuentes</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita assumenda necessitatibus
                            corporis maiores laudantium corrupti voluptates, pariatur rerum mollitia dignissimos
                            repellendus, dolorum iure nemo nobis dicta commodi quo facilis exercitationem.</p>
                        <!--<p>
                            <button class="btn bg-gradient-warning btn-rounded-20p icon-move-right mt-2">Accion <i
                                    class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i></button>
                        </p>-->
                    </div>
                    <div class="col-12 col-lg-8 mx-auto">
                        <div class="accordion" id="accordionRental">
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingOne">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        ¿Cómo funcionan los cursos y talleres en línea de ESCE? ¿Importa mi zona
                                        horaria?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionRental" style="">
                                    <div class="accordion-body text-sm opacity-8">
                                        Los cursos y talleres se ofrecen en formatos sincrónicos y no importa en qué
                                        zona horaria te encuentres porque todos son ofrecidos a nivel nacional y
                                        comparten la misma zona horaria.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        ¿Tendré acceso al material después de finalizar el curso?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Sí, tendrás acceso a todos los materiales proporcionados por el docente, como
                                        diapositivas, workbooks y hojas resumen. Además, al finalizar cada curso corto,
                                        recibirás un resumen con las ideas clave abordadas. Sin embargo, para fomentar
                                        la participación sincrónica y garantizar una comunidad digital activa durante el
                                        curso, los videos de las sesiones no estarán disponibles una vez que el curso o
                                        taller haya terminado.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingThree">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        ¿Cuál es el rol del instructor y el equipo de enseñanza? ¿Podré recibir
                                        retroalimentación?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Nuestros instructores y equipos de facilitación guían las sesiones y están
                                        disponibles para resolver dudas a través de foros y espacios de interacción.
                                        Aunque no hay evaluaciones formales, se ofrecen comentarios durante las
                                        actividades y dinámicas de aprendizaje.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingFour">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        ¿Puedo tomar el curso con mi equipo?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Sí, los cursos y talleres de ESCE son ideales para equipos de trabajo.
                                        Fomentamos la participación grupal para que puedas aplicar los conocimientos
                                        adquiridos en un entorno colaborativo. De hecho, lo equipos de 3 o más personas
                                        cuentan con un descuento del 25%
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingFifth">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth"
                                        aria-expanded="false" aria-controls="collapseFifth">
                                        ¿Ofrecen descuentos?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseFifth" class="accordion-collapse collapse"
                                    aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Sí, ofrecemos descuentos por pronta matrícula o promociones especiales en
                                        ciertos periodos del año. Para más detalles, consulta nuestras políticas de
                                        descuentos o contacta al equipo de soporte.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingSix">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                        aria-expanded="false" aria-controls="collapseSix">
                                        ¿Obtendré un certificado al finalizar un curso o taller?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Sí, al completar un curso o taller, recibirás un certificado que acredita tu
                                        participación en las dinámicas de aprendizaje diseñadas para el desarrollo de
                                        competencias.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingSeven">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                        aria-expanded="false" aria-controls="collapseSeven">
                                        ¿Cómo puedo inscribirme en un curso o taller?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Puedes inscribirte directamente a través de nuestra plataforma en línea. Si
                                        tienes alguna pregunta sobre el proceso de inscripción, no dudes en
                                        contactarnos.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include './sections/page-sections/footer-2.php' ?>

    <?php include './sections/page-sections/ref-scripts.php' ?>

</body>
<script>
    const navbar = document.getElementById("main-navbar")

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 0) {
            navbar.classList.remove("navbar-transparent")
            navbar.classList.remove("text-white")
            navbar.classList.add("blur")
            navbar.classList.add("text-color-grey")
        } else {
            navbar.classList.remove("text-color-grey")
            navbar.classList.remove("blur")
            navbar.classList.add("navbar-transparent")
            navbar.classList.add("text-white")
        }
    })
</script>

</html>