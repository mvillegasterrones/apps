<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es">
<html lang="es" data-mdb-theme="dark">
<!--
* https://mdbootstrap.com/learn/mdb-foundations/mdb-ui-kit/cascading-effect/
* https://mdbootstrap.com/docs/standard/
* https://mdbgo.com
* https://github.com/mdbootstrap/mdb-ui-kit
* http://mvillegasterrones.engineer/
-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Inicio | EACE</title>
    <!-- MDB icon -->
    <link rel="icon" href="./img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="icon" href="./img/logo-ecegp-only.jpeg">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../fontawesome-pro-6.5.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="./css/pro.mdb.min.css" />
    <!-- My Style -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!--! Main Navigation-->
    <header class="mb-0">

        <!-- ? Navbar -->
        <?php include './views/sections/nav-bar.php' ?>
        <!-- Navbar -->

        <!-- ? Section: Split screen -->
        <?php include './views/sections/hero.php' ?>
        <!-- Section: Split screen -->

    </header>
    <!--Main Navigation-->

    <!--! Main layout-->
    <main>
        <section class="mb-10"></section>

        <div class="container">

            <!-- * MISION Y VISION (Ok)-->
            <section class="mb-10">
                <h2 class="fw-bold mb-7 pt-10 text-center">Nuestra Misión y Visión</h2>

                <div class="row gx-lg-5">

                    <!-- * MISION-->
                    <div class="col-xl-6 col-md-12 mb-4"
                        data-mdb-animation-init
                        data-mdb-animation-reset="true"
                        data-mdb-animation-start="onScroll"
                        data-mdb-animation="zoom-in"
                        data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="200">
                        <div class="card toast-primary rounded-6 border border-2 border-dark shadow shadow-5-strong mt-lg-10" data-mdb-ripple-init>
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center col-md-3 rounded-7" style="display:flex;justify-content: center;align-items: center;">
                                            <!--<i class="fa-regular fa-hand-pointer fa-3x me-4 color-institucional-1"></i>-->
                                            <img src="./img/vision.png" style="width: 100%;" alt="">
                                        </div>
                                        <div>
                                            <h4 class="color-institucional-1">Nuestra Misión</h4>
                                            <p class="mb-0 text-muted">La Escuela de Ciencias Empresariales y Gestión Pública tiene por misión empoderar a nuestros alumnos con confianza creativa, espíritu emprendedor, sentido humano y amor por la naturaleza, permitiéndoles convertir ideas en acción y mejorar el desempeño de las organizaciones empresariales y públicas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- * VISION-->
                    <div class="col-xl-6 col-md-12 mb-4 mt-lg-5"
                        data-mdb-animation-init
                        data-mdb-animation-start="onScroll"
                        data-mdb-animation="zoom-in"
                        data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="400">
                        <div class="card toast-primary rounded-6 border border-2 border-dark shadow shadow-5-strong mt-lg-10" data-mdb-ripple-init>
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center col-md-3 rounded-7" style="display:flex;justify-content: center;align-items: center;">
                                            <!--<i class="fa-regular fa-hand-pointer fa-3x me-4 color-institucional-1"></i>-->
                                            <img src="./img/mision.png" style="width: 100%;" alt="">
                                        </div>
                                        <div>
                                            <h4 class="color-institucional-1">Nuestra Visión</h4>
                                            <p class="mb-0 text-muted">La Escuela de Ciencias Empresariales y Gestión Pública tiene por visión generar, diseminar y preservar
                                                conocimiento que fomente la innovación pública y privada. Aspiramos a brindar una educación no
                                                presencial a nivel nacional para la formación integral y continua de profesionales a lo largo de sus vidas,
                                                permitiéndoles alcanzar su máximo potencial de empleabilidad.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

            <!-- * NUESTRO PROPOSITO (Ok)-->
            <section class="mb-10"
                data-mdb-animation-init
                data-mdb-animation-start="onScroll"
                data-mdb-animation="fade-in"
                data-mdb-animation-show-on-load="false"
                data-mdb-animation-delay="500">
                <h2 class="fw-bold mb-7 pt-10 text-center color-institucional-1">Propósito de nuestra institución</h2>

                <div class="card toast-primary rounded-6 border border-2 border-dark shadow shadow-5-strong mt-lg-10" data-mdb-ripple-init
                    data-mdb-animation-init
                    data-mdb-animation-start="onScroll"
                    data-mdb-animation="zoom-in"
                    data-mdb-animation-show-on-load="false"
                    data-mdb-animation-delay="500">

                    <div class="card-body">
                        <div class="d-flex justify-content-between p-md-1">
                            <div class="d-flex flex-row">
                                <div class="align-self-center col-md-3 rounded-7" style="display:flex;justify-content: center;align-items: center;">
                                    <!--<i class="fa-regular fa-hand-pointer fa-3x me-4 color-institucional-1"></i>-->
                                    <img src="https://cdn-icons-png.flaticon.com/512/977/977451.png" style="width: 50%;" alt="">
                                </div>
                                <div>
                                    <h4 class="color-institucional-1">Nuestro Propósito</h4>
                                    <p class="mb-0 text-muted">La Escuela de Ciencias Empresariales y Gestión Pública se fundó para ofrecer educación superior de
                                        calidad en el nivel nacional, especialmente para quienes deben trabajar mientras estudian. Surgió en
                                        respuesta a la expansión de la educación privada con fines de lucro y el rápido desarrollo de la
                                        educación no presencial y la inteligencia artificial. Cambios que consideramos podrían acentuar las
                                        brechas formativas entre los egresados de universidades de élite y los alumnos de bajos recursos...</p>
                                    <a href="#!" class="btn btn-secondary btn-rounded mt-2" data-mdb-ripple-init data-mdb-modal-init
                                        data-mdb-target="#project-proposito">Leer mas...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- * NUESTROS VALORES -->
            <section id="why-select-me" class="container mt-5 mb-lg-2"
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
                        data-mdb-animation-delay="200">Nuestros Valores
                    </h3>
                    <h5 class="text-center text-muted mb-5"
                        data-mdb-animation-init
                        data-mdb-animation-start="onScroll"
                        data-mdb-animation="fade-in"
                        data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="400">En el Centro Andino de Investigación en Innovación, nuestros valores fundamentales están diseñados
                        para orientar la conducta humana en su contexto social y ambiental, promoviendo una autorreflexión
                        crítica que fomente el crecimiento personal y profesional. Estos valores no sólo guían nuestras
                        interacciones con el mundo exterior, sino que también nos inspiran a mejorar continuamente como
                        individuos comprometidos con la integridad, la solidaridad, el profesionalismo, la perseverancia, la
                        curiosidad, el amor por la naturaleza y el sentido de pertenencia por nuestro país. Al adherirnos a estos
                        principios, buscamos construir una comunidad más ética, colaborativa y sostenible.
                    </h5>
                </div>
            </section>
            <!-- End Section: Valores -->
        </div>

        <!-- ? Carousel wrapper -->
        <div id="carouselDarkVariant-valores" class="carousel slide carousel-fade carousel-dark"
            data-mdb-ride="carousel"
            data-mdb-carousel-init
            data-mdb-animation-init
            data-mdb-animation-start="onScroll"
            data-mdb-animation="fade-in"
            data-mdb-animation-show-on-load="false"
            data-mdb-animation-delay="500">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="1" aria-label="Slide 1"></button>
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="2" aria-label="Slide 1"></button>
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="3" aria-label="Slide 1"></button>
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="4" aria-label="Slide 1"></button>
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="5" aria-label="Slide 1"></button>
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="6" aria-label="Slide 1"></button>
            </div>

            <!-- Inner -->
            <div class="carousel-inner">
                <!-- 1 valor item -->
                <div class="carousel-item active">
                    <div class="bg-image">
                        <img src="./img/valores/valores-01.jpg" class="w-100" alt="integridad" />
                        <div class="mask degradado"><!--  style="background-color: hsla(0, 0%, 0%, 0.6)" -->
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="container text-center color-institucional-1">
                                    <div class="container">
                                        <h1>Integridad</h1>
                                        <h5 class="container">La integridad es un valor fundamental que implica adherirse consistentemente a principios y valores éticos, actuar con honestidad y responsabilidad, y mantener la coherencia entre las acciones, decisiones y palabras. Ser íntegro significa ser auténtico y transparente y cumplir con los compromisos asumidos. La integridad es esencial para construir confianza y credibilidad en todas las relaciones personales y profesionales.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2 valor item -->
                <div class="carousel-item">
                    <div class="bg-image">
                        <img src="./img/valores/valores-02.jpg" class="w-100" alt="solidaridad" />
                        <div class="mask degradado" style="background-color: hsla(0, 0%, 0%, 0.6)">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="container text-center color-institucional-1">
                                    <div class="container">
                                        <h1>Solidaridad</h1>
                                        <h5 class="container">La compasión es la conducta que busca comprender los desafíos de los demás, acompañada de un deseo genuino y altruista de ayudar y tener un impacto positivo en la vida de las personas que conforman las familias, los ciudadanos, los clientes, las organizaciones, la comunidad inmediata y la sociedad en la que vivimos. Trasciende la empatía, impulsando acciones para apoyar a quienes lo necesitan.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3 valor item -->
                <div class="carousel-item">
                    <div class="bg-image">
                        <img src="./img/valores/valores-04.jpg" class="w-100" alt="Louvre Museum" />
                        <div class="mask degradado" style="background-color: hsla(0, 0%, 0%, 0.6)">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="container text-center color-institucional-1">
                                    <div class="container">
                                        <h1>Profesionalismo</h1>
                                        <h5 class="container">El profesionalismo es la conducta y las cualidades que caracterizan a una persona en su campo de trabajo. Implica adherirse a estándares éticos y culturales, mostrar transparencia por las acciones realizadas, argumentar con fundamentos las decisiones tomadas, mostrar de manera clara el resultado de lo hecho, y mantener una actitud de respeto, puntualidad y compromiso con los compañeros de trabajo.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->

                <!-- 4 valor item -->
                <div class="carousel-item">
                    <div class="bg-image">
                        <img src="./img/valores/valores-03.jpg" class="w-100" alt="Louvre Museum" />
                        <div class="mask degradado" style="background-color: hsla(0, 0%, 0%, 0.6)">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="container text-center color-institucional-1">
                                    <div class="container">
                                        <h1>Perseveracia y Resilencia</h1>
                                        <h5 class="container">La perseverancia es la capacidad de mantener el esfuerzo y la determinación para alcanzar objetivos a largo plazo a pesar de las dificultades, obstáculos y fracasos. Este valor implica una actitud resiliente y persistente, donde el individuo sigue trabajando hacia sus metas con constancia y dedicación, sin rendirse ante los desafíos.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->

                <!-- 5 valor item -->
                <div class="carousel-item">
                    <div class="bg-image">
                        <img src="./img/valores/valores-05.jpg" class="w-100" alt="Louvre Museum" />
                        <div class="mask degradado" style="background-color: hsla(0, 0%, 0%, 0.6)">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="container text-center color-institucional-1">
                                    <div class="container">
                                        <h1>Curiosidad</h1>
                                        <h5 class="container">La curiosidad es el deseo de conocer, explorar y entender más acerca del mundo, las ideas y uno mismo. Este valor impulsa a las personas a hacer preguntas, buscar respuestas y estar abiertas a nuevas experiencias y conocimientos. La curiosidad fomenta un amor por el aprendizaje continuo y la innovación.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->

                <!-- 6 valor item -->
                <div class="carousel-item">
                    <div class="bg-image">
                        <img src="./img/valores/valores-06.jpg" class="w-100" alt="Louvre Museum" />
                        <div class="mask degradado" style="background-color: hsla(0, 0%, 0%, 0.6)">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="container text-center color-institucional-1">
                                    <div class="container">
                                        <h1>Amor por la Naturaleza</h1>
                                        <h5 class="container">El amor por la naturaleza es el valor que impulsa a las personas a apreciar, respetar y proteger el medio ambiente y todos los seres vivos que lo habitan. Este valor se manifiesta en la conducta sostenible, la conciencia ecológica y el compromiso con la conservación de los recursos naturales y la biodiversidad.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->

                <!-- 7 valor item -->
                <div class="carousel-item">
                    <div class="bg-image">
                        <img src="./img/valores/valores-07.jpg" class="w-100" alt="Louvre Museum" />
                        <div class="mask degradado" style="background-color: hsla(0, 0%, 0%, 0.6)">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="container text-center color-institucional-1">
                                    <div class="container">
                                        <h1>Sentido de pertenencia por el país</h1>
                                        <h5 class="container">El sentido de pertenencia por el país es el compromiso y orgullo de formar parte de una nación, compartiendo su cultura, historia y valores. Este valor se refleja en el deseo de contribuir al desarrollo y bienestar del país, respetar sus instituciones y leyes, y promover el patriotismo y la cohesión social. Fomenta la participación activa en la comunidad y el trabajo conjunto para alcanzar objetivos comunes que beneficien a toda la sociedad.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel wrapper -->

        <div class="container">
            <!--! Section: My projects -->
            <section class="mb-10 text-center">
                <!--<h2 class="fw-bold mb-7 text-center">Nuestros Valores</h2>-->
                <div class="row gx-lg-5">

                </div>
            </section>
            <!-- Section: My projects -->

            <!--! Section: Projects modals -->
            <section class="">

                <!-- * Modal project proposito -->
                <div class="modal fade" id="project-proposito" tabindex="-1" aria-labelledby="project-1Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="project-1Label">Nuestro Propósito</h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <!-- Section: Design Block -->
                                <section>

                                    <div class="row gx-lg-5 align-items-center">
                                        <div class="col-lg-12 mb-4 mb-lg-0">
                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(204, 30%, 20%)">
                                                        <i class="fas fa-check-circle fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <!--<p class="fw-bold mb-1">Support 24/7</p>-->
                                                    <p class="text-muted mb-0">
                                                        La Escuela de Ciencias Empresariales y Gestión Pública se fundó para ofrecer educación superior de calidad en el nivel nacional, especialmente para quienes deben trabajar mientras estudian. Surgió en respuesta a la expansión de la educación privada con fines de lucro y el rápido desarrollo de la educación no presencial y la inteligencia artificial. Cambios que consideramos podrían acentuar las brechas formativas entre los egresados de universidades de élite y los alumnos de bajos recursos.<br><br>
                                                        La escuela se centra en generar y diseminar conocimientos que fomenten la innovación en el sector
                                                        público y privado. Diseñamos experiencias formativas específicas para personas que necesitan trabajar
                                                        para costear sus estudios, y fomentamos el crecimiento económico empresarial facilitando dinámicas colaborativas de innovación que permiten a las empresas encontrar nuevos mercados o fortalecer los existentes.<br><br>
                                                        Nuestra propuesta educativa es mayoritariamente digital, complementada con dinámicas presenciales para fortalecer las relaciones entre alumnos y docentes. Los principales desafíos han sido crecer de manera sostenible, establecer alianzas estratégicas que generen valor, promover proyectos de innovación en empresas peruanas y adoptar tecnología actual para diseñar procesos formativos efectivos. La escuela se ha convertido en una institución clave en la región andina, capacitando a graduados que mejoran las organizaciones empresariales y públicas, promoviendo un desarrollo sostenible y equitativo.
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
                                    data-mdb-dismiss="modal">Cerrar</button>
                                <!--<button type="button" class="btn btn-primary" data-mdb-ripple-init
                                    data-mdb-ripple-init>Save
                                    changes</button>-->
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Section: Projects modals -->

            <!--! Section: About me -->
            <section class="mb-10">

                <div class="container text-center">
                    <h2 class="fw-bold mb-7 text-center"
                    data-mdb-animation-init
                    data-mdb-animation-reset="true"
                    data-mdb-animation-start="onScroll"
                    data-mdb-animation="fade-in"
                    data-mdb-animation-show-on-load="false"
                    data-mdb-animation-delay="400">Experiencias de aprendizaje en línea</h2>
                    <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                        data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">
                            <h1 class="fw-bold text-info"><i class="fa-light fa-medal"></i></h1>
                            <h4>Programas de certificación</h4>
                            <p>Avance en su carrera y desarrolle su confianza con una experiencia de aprendizaje orientada a la acción de 3 a 6 meses que consta de cursos de cohorte y a su propio ritmo.
                            </p>
                        </div>

                        <div class="col-lg-4 mb-5 mb-lg-0" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                        data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                            <h1 class="text-info"><i class="fa-light fa-users-between-lines"></i></h1>
                            <h4>Cursos de cohorte</h4>
                            <p>Colabora con una comunidad global en nuestros cursos en línea de 5 semanas y aplica nuevas habilidades a tu trabajo diario para aumentar tu impacto.
                            </p>
                        </div>

                        <div class="col-lg-4" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                        data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
                            <h1 class="text-info"><i class="fa-light fa-chalkboard-user"></i></h1>
                            <h4>Cursos a su propio ritmo</h4>
                            <p>Aprende en cualquier momento y en cualquier lugar. Mejore sus habilidades con cursos en línea flexibles y cortos diseñados para adaptarse a su vida. Acceso 90 días desde la compra.
                            </p>
                        </div>
                    </div>
                    <!--<div class="row gx-0 align-items-center">
                    </div>-->
                </div>
            </section>
            <!-- Section: About me -->

            <!-- Section: Testimonials -->
            <section class="mb-10 text-center"
                data-mdb-animation-init
                data-mdb-animation-reset="true"
                data-mdb-animation-start="onScroll"
                data-mdb-animation="fade-in"
                data-mdb-animation-show-on-load="false"
                data-mdb-animation-delay="200">

                <h2 class="fw-bold mb-7 text-center"
                    data-mdb-animation-init
                    data-mdb-animation-reset="true"
                    data-mdb-animation-start="onScroll"
                    data-mdb-animation="fade-in"
                    data-mdb-animation-show-on-load="false"
                    data-mdb-animation-delay="400">Nuestro Equipo</h2>

                <div class="row gx-lg-5">

                    <!-- First column -->
                    <div class="col-lg-4 mb-5 mb-lg-0">

                        <div data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                            data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">
                            <div class="rounded-7 p-4 shadow-3 main-bg-color-grey"><!-- style="background-color: hsl(218, 62.2%, 95%)" -->
                                <!-- Divider here -->
                                <hr class="hr hr-blurry">

                                <p class="mt-4 mb-2 text-info">Project Manager at Minedu</p>
                                <p class="h5 mb-4 text-primary">Manuel Villegas</p>
                                <p class="pb-4 mb-4 text-info">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis molestias quidem
                                    itaque earum tempora distinctio soluta ut, eius, impedit porro iure praesentium
                                    ratione possimus quos suscipit, ratione nostrum cum odit.
                                </p>
                            </div>
                            <img src="https://mdbootstrap.com/img/new/avatars/22.jpg"
                                class="w-100 rounded-7 mt-n5 shadow-5-strong" style="max-width: 100px" alt="Avatar" />
                        </div>

                    </div>
                    <!-- First column -->

                    <!-- Second column -->
                    <div class="col-lg-4 mb-5 mb-lg-0">

                        <div data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                            data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                            <div class="rounded-7 p-4 shadow-3 main-bg-color-grey"><!--  style="background-color: hsl(218, 62.2%, 95%)" -->

                                <!-- Divider here -->
                                <hr class="hr hr-blurry">

                                <p class="text-info mt-4 mb-2">CEO Design</p>
                                <p class="h5 mb-4 text-primary">Jasmine Díaz</p>
                                <p class="pb-4 mb-4 text-info">
                                    Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                    soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                                    placeat facere possimus, omnis voluptas assumenda est omnis.
                                </p>
                            </div>
                            <img src="https://mdbootstrap.com/img/new/avatars/11.jpg"
                                class="w-100 rounded-7 mt-n5 shadow-5-strong" style="max-width: 100px" alt="Avatar" />
                        </div>

                    </div>
                    <!-- Second column -->

                    <!-- Third column -->
                    <div class="col-lg-4">

                        <div data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                            data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
                            <div class="rounded-7 p-4 shadow-3 main-bg-color-grey"><!-- style="background-color: hsl(218, 62.2%, 95%)" -->

                                <!-- Divider here -->
                                <hr class="hr hr-blurry">

                                <p class="text-info mt-4 mb-2">Senior Product Designer at Facebook</p>
                                <p class="h5 mb-4 text-primary">Cindy Jasmine</p>
                                <p class="pb-4 mb-4 text-info">
                                    Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                    eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque
                                    earum rerum hic tenetur a sapiente delectus ut aut reiciendis.
                                </p>
                            </div>
                            <img src="https://mdbootstrap.com/img/new/avatars/12.jpg"
                                class="w-100 rounded-7 mt-n5 shadow-5-strong" style="max-width: 100px" alt="Avatar" />
                        </div>

                    </div>
                    <!-- Third column -->

                </div>
            </section>
            <!-- Section: Testimonials -->

            <!-- Section: Contact -->
            <section class="mb-10 text-center" id="section-contact">

                <div class="container">

                    <div class="row gx-0 align-items-center">

                        <!-- First column -->
                        <div class="col-lg-6 mb-5 mb-lg-0">

                            <div style="background: hsla(0, 0%, 100%, 0.55); 
                          backdrop-filter: blur(30px);
                          z-index: 1;" class="card rounded-7 me-lg-n5" data-mdb-animation-init
                                data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                                data-mdb-animation-show-on-load="false" data-mdb-animation-delay="500">
                                <div class="card-body p-lg-5 shadow-5">
                                    <form>
                                        <!-- Name input -->
                                        <div class="form-outline mb-4" data-mdb-input-init>
                                            <input type="text" id="form4Example1" class="form-control" />
                                            <label class="form-label" for="form4Example1">Nombre y Apellido</label>
                                        </div>

                                        <!-- Email input -->
                                        <div class="form-outline mb-4" data-mdb-input-init>
                                            <input type="email" id="form4Example2" class="form-control" />
                                            <label class="form-label" for="form4Example2">Email</label>
                                        </div>

                                        <!-- Message input -->
                                        <div class="form-outline mb-4" data-mdb-input-init>
                                            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                            <label class="form-label" for="form4Example3">Mensaje</label>
                                        </div>

                                        <!--! Checkbox -->
                                        <!--<div class="form-check d-flex justify-content-center mb-4">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form4Example4" checked />
                                            <label class="form-check-label" for="form4Example4">
                                                Send me a copy of this message
                                            </label>
                                        </div>-->

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mb-4"
                                            data-mdb-ripple-init>Enviar</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- First column -->

                        <!-- Second column -->
                        <div class="col-lg-6 mb-5 mb-lg-0">

                            <div class="ratio ratio-1x1" data-mdb-animation-init data-mdb-animation-start="onScroll"
                                data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                                data-mdb-animation-delay="200" data-mdb-animation-offset="200">

                                <img src="./img/contacto.jpeg" class="rounded-6" alt="">
                                <!--<iframe class="shadow-3-strong rounded-7"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96813.17497894862!2d-73.97484803586903!3d40.68692922859912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2spl!4v1671718528728!5m2!1sen!2spl"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                            </div>

                        </div>
                        <!-- Second column -->

                    </div>

                </div>

            </section>
            <!-- Section: Contact -->

        </div>
    </main>
    <!--Main layout-->

    <!--! Footer-->
    <?php include './views/sections/footer.php' ?>
    <!--Footer-->
</body>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- MDB -->
<script src="./js/pro.mdb.umd.min.js"></script>
<!-- MyScripts -->
<script src="./js/scripts.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const frases = document.querySelector('.frases');
        const spanFrases = frases.querySelectorAll('div');
        let index = 0;

        function pasarFrase() {
            index = (index + 1) % spanFrases.length;
            frases.style.transform = `translateY(-${index * 100}%)`;
        }

        setInterval(pasarFrase, 6000); // ajusta el intervalo de tiempo según tus necesidades
    });
</script>

</html>