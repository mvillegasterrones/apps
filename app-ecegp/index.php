<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es">
<html lang="es" data-mdb-theme="dark">
<!--
* https://mdbootstrap.com/learn/mdb-foundations/mdb-ui-kit/material-minimal/
* https://mdbootstrap.com/learn/mdb-foundations/mdb-ui-kit/animations/
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
    <?php include './views/sections/main-header.php' ?>
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
            <section class="mb-10" data-mdb-animation-init data-mdb-animation-reset="true"
                data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false"
                data-mdb-animation-delay="100">
                <h2 class="fw-bold mb-5 pt-10 text-center" data-mdb-animation-init data-mdb-animation-reset="true"
                    data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in"
                    data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">Nuestro Propósito, Misión y
                    Valores</h2>

                <h5 class="mb-5 text-muted" data-mdb-animation-init data-mdb-animation-reset="true"
                    data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in"
                    data-mdb-animation-show-on-load="false" data-mdb-animation-delay="300">
                    Diseñamos experiencias formativas para personas que necesitan trabajar para financiar sus estudios
                    en administración o gestión pública. Además, fomentamos el crecimiento empresarial a través de
                    dinámicas de innovación y de investigación, que permiten a las empresas explorar nuevos mercados o
                    fortalecer los ya existentes.<br><br>
                    Somos una organización centrada en valores que reflejan nuestra aspiración de formar, no sólo
                    egresados de éxito, sino además personas que sean valiosas, efectivas y éticas para sus comunidades.
                    Estos valores guían nuestras aspiraciones de desarrollo institucional de largo plazo, y cómo le
                    servimos a la sociedad y a nuestros alumnos.

                </h5>

                <div class="row gx-lg-5">

                    <!-- * PROPOSITO-->
                    <div class="col-xl-6 col-md-12 mb-4" data-mdb-animation-init data-mdb-animation-reset="true"
                        data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in"
                        data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">
                        <div class="card toast-primary rounded-6 border border-2 border-dark shadow shadow-5-strong mt-lg-10"
                            data-mdb-ripple-init>
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center col-md-3 rounded-7"
                                            style="display:flex;justify-content: center;align-items: center;">
                                            <!--<i class="fa-regular fa-hand-pointer fa-3x me-4 color-institucional-1"></i>-->
                                            <img src="./img/vision.png" style="width: 100%;" alt="">
                                        </div>
                                        <div>
                                            <h4 class="color-institucional-1">Nuestro Propósito</h4>
                                            <p class="mb-0 text-muted">
                                                <strong>La Escuela de Ciencias Empresariales y Gestión Pública</strong>
                                                se fundó para ofrecer educación superior de Ser una institución que
                                                promueve el desarrollo económico y social descentralizado a través de la
                                                formación de profesionales y la re-capacitación de personas que ya
                                                trabajan en todo el país.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- * MISION-->
                    <div class="col-xl-6 col-md-12 mb-4 mt-lg-5" data-mdb-animation-init
                        data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in"
                        data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                        <div class="card toast-primary rounded-6 border border-2 border-dark shadow shadow-5-strong mt-lg-10"
                            data-mdb-ripple-init>
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center col-md-3 rounded-7"
                                            style="display:flex;justify-content: center;align-items: center;">
                                            <img src="./img/mision.png" style="width: 100%;" alt="">
                                        </div>
                                        <div>
                                            <h4 class="color-institucional-1">Nuestra Misión</h4>
                                            <p class="mb-0 text-muted">
                                                Formar alumnos con creatividad, pensamiento crítico, comunicación
                                                efectiva y conciencia ética, que les permita mejorar sus oportunidades
                                                de empleo en la empresa privada, construir la empresa que siempre
                                                aspiraron tener, o contribuir en la administración pública con un
                                                servicio honesto y de impacto positivo, tanto a nivel regional como
                                                nacional. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- * NUESTROS VALORES -->
            <section id="why-select-me" class="container mt-5 mb-lg-2" data-mdb-animation-init
                data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                data-mdb-animation-delay="300">

                <div class="row">
                    <h3 class="fw-bold text-center color-institucional-1 mb-5" data-mdb-animation-init
                        data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                        data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">Nuestros Valores
                    </h3>
                    <h5 class="text-center text-muted mb-5" data-mdb-animation-init data-mdb-animation-start="onScroll"
                        data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="400">En el Centro Andino de Investigación en Innovación, nuestros
                        valores fundamentales están diseñados
                        para orientar la conducta humana en su contexto social y ambiental, promoviendo una
                        autorreflexión
                        crítica que fomente el crecimiento personal y profesional. Estos valores no sólo guían nuestras
                        interacciones con el mundo exterior, sino que también nos inspiran a mejorar continuamente como
                        individuos comprometidos con la integridad, la solidaridad, el profesionalismo, la
                        perseverancia, la
                        curiosidad, el amor por la naturaleza y el sentido de pertenencia por nuestro país. Al
                        adherirnos a estos
                        principios, buscamos construir una comunidad más ética, colaborativa y sostenible.
                    </h5>
                </div>
            </section>
            <!-- End Section: Valores -->
        </div>

        <!-- ? Carousel wrapper VALORES -->
        <div id="carouselDarkVariant-valores" class="carousel slide carousel-fade carousel-dark mb-10"
            data-mdb-ride="carousel" data-mdb-carousel-init data-mdb-animation-init data-mdb-animation-start="onScroll"
            data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="500">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="1"
                    aria-label="Slide 1"></button>
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="2"
                    aria-label="Slide 1"></button>
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="3"
                    aria-label="Slide 1"></button>
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="4"
                    aria-label="Slide 1"></button>
                <!--<button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="5" aria-label="Slide 1"></button>
                <button data-mdb-target="#carouselDarkVariant-valores" data-mdb-slide-to="6" aria-label="Slide 1"></button>-->
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
                                        <h5 class="container">Actuar con honestidad, coherencia y responsabilidad es
                                            esencial para construir confianza y credibilidad en todas nuestras
                                            relaciones.
                                        </h5>
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
                                        <h5 class="container">Más allá de la empatía, buscamos apoyar a quienes lo
                                            necesitan con un deseo genuino de impactar positivamente la vida de los
                                            demás.
                                        </h5>
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
                                        <h1>Resilencia</h1>
                                        <h5 class="container">Mantenemos el esfuerzo y la determinación frente a los
                                            desafíos, trabajando con constancia hacia nuestros objetivos.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->

                <!-- 4 valor item -->
                <!--<div class="carousel-item">
                    <div class="bg-image">
                        <img src="./img/valores/valores-03.jpg" class="w-100" alt="Louvre Museum" />
                        <div class="mask degradado" style="background-color: hsla(0, 0%, 0%, 0.6)">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="container text-center color-institucional-1">
                                    <div class="container">
                                        <h1>Perseveracia y Resilencia</h1>
                                        <h5 class="container">Valoramos y protegemos el medio ambiente, promoviendo una conducta sostenible y un compromiso con la conservación.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- Inner -->

                <!-- 5 valor item -->
                <!--<div class="carousel-item">
                    <div class="bg-image">
                        <img src="./img/valores/valores-05.jpg" class="w-100" alt="Louvre Museum" />
                        <div class="mask degradado" style="background-color: hsla(0, 0%, 0%, 0.6)">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="container text-center color-institucional-1">
                                    <div class="container">
                                        <h1>Curiosidad</h1>
                                        <h5 class="container">Nos sentimos orgullosos de nuestra nación, contribuyendo a su desarrollo y bienestar con compromiso y patriotismo.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
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
                                        <h5 class="container">Valoramos y protegemos el medio ambiente, promoviendo una
                                            conducta sostenible y un compromiso con la conservación.</h5>
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
                                        <h5 class="container">Nos sentimos orgullosos de nuestra nación, contribuyendo a
                                            su desarrollo y bienestar con compromiso y patriotismo.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselDarkVariant-valores"
                    data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselDarkVariant-valores"
                    data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel wrapper -->

        <div class="container">

            <!-- Section: NUESTRO EQUIPO -->
            <section id="about-me" class="container mb-10 mt-10" data-mdb-animation-init data-mdb-animation-reset="true"
                data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                data-mdb-animation-delay="200">

                <h2 class="fw-bold mb-7 text-center" data-mdb-animation-init data-mdb-animation-reset="true"
                    data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                    data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">Nuestro Equipo</h2>

                    <div class="row">
                        <!-- GUIDO -->
                        <div class="col-1"></div>
                        <div class="col-lg-10 col-md-12 col-sm-12 mb-5">
                            <div class="card main-bg-color-grey"
                                data-mdb-animation-init
                                data-mdb-animation-reset="true"
                                data-mdb-animation-start="onScroll"
                                data-mdb-animation="zoom-in"
                                data-mdb-animation-show-on-load="false"
                                data-mdb-animation-delay="200">
                                <div class="card-content">
                                    <div class="card-body text-start">

                                        <!-- Cambia a un diseño en columna en pantallas pequeñas -->
                                        <div class="d-flex flex-column flex-md-row justify-content-between mt-4 pt-1 mb-5">
                                            <!-- Imagen arriba en pantallas pequeñas -->
                                            <div class="flex-shrink-0 mb-4 mb-md-0">
                                                <a href="#!">
                                                    <img class="rounded-5 shadow-4 w-100 h-auto" 
                                                        src="<?= $url_img_socio_guido ?>" 
                                                        alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <!-- Texto abajo en pantallas pequeñas -->
                                            <div class="flex-grow-1 ms-md-4 text-center text-md-start">
                                                <p class="mb-1">
                                                    <strong><a href="#!" class="text-reset">Guido Pennano Alison</a></strong>
                                                </p>
                                                <p class="mb-1">Presidente Fundador</p>
                                                <p class="text-muted mb-1">......</p>
                                            </div>
                                        </div>
                                        <!--<div class="d-md-flex justify-content-between mt-4 pt-1 mb-5">
                                            <div class="d-flex mb-4 mb-md-0">
                                                <div class="flex-shrink-0">
                                                    <a href="#!">
                                                        <img class="rounded-5 shadow-4 h-auto" src="https://mdbootstrap.com/img/new/avatars/22.jpg" alt="Generic placeholder image" class="w-100">
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="mb-1">
                                                        <strong><a href="#!" class="text-reset">Guido Pennano Alison</a></strong>
                                                    </p>
                                                    <p class="mb-1">Presidente Fundador</p>
                                                    <p class="text-muted mb-1">......</p>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>

                        <!-- GUIDO -->
                        <div class="col-1"></div>
                        <div class="col-lg-10 col-md-12 col-sm-12 mb-10">
                            <div class="card main-bg-color-grey"
                                data-mdb-animation-init
                                data-mdb-animation-reset="true"
                                data-mdb-animation-start="onScroll"
                                data-mdb-animation="zoom-in"
                                data-mdb-animation-show-on-load="false"
                                data-mdb-animation-delay="400">
                                <div class="card-content">
                                    <div class="card-body text-start">
                                        <!-- Cambia a un diseño en columna en pantallas pequeñas -->
                                        <div class="d-flex flex-column flex-md-row justify-content-between mt-4 pt-1 mb-5">
                                            <!-- Imagen arriba en pantallas pequeñas -->
                                            <div class="flex-shrink-0 mb-4 mb-md-0">
                                                <a href="#!">
                                                    <img class="rounded-5 shadow-4 w-100 h-auto" 
                                                    src="<?= $url_img_socio_guido ?>" 
                                                        alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <!-- Texto abajo en pantallas pequeñas -->
                                            <div class="flex-grow-1 ms-md-4 text-center text-md-start">
                                                <p class="mb-1">
                                                    <strong><a href="#!" class="text-reset">José Ignacio Pineda Mendoza</a></strong>
                                                </p>
                                                <p class="mb-1">Socio</p>
                                                <p class="text-muted mb-1">
                                                <strong>Miembro fundador de ESCE</strong> y cuenta con más de 20 años de experiencia
                                            en el sector de la educación superior. Ha enseñado cursos sobre innovación,
                                            emprendimiento y desarrollo sostenible en universidades de Perú y el Reino Unido.
                                            Además, ha desempeñado roles de liderazgo en universidades, donde se ha
                                            especializado en transformación organizacional, diseñando y ejecutando estrategias
                                            de turnaround y crecimiento, investigación aplicada de calidad y responsabilidad
                                            social. Su investigación se sitúa en la intersección de negocios, emprendimiento y
                                            desarrollo sostenible. Ha recibido un grant de la Academia Británica para explorar
                                            la Economía Circular en la Amazonía peruana, ha investigado el uso de tecnología
                                            digital entre emprendedores sociales para la Comisión Europea, y la creación de un
                                            sistema de innovación en salud en la ciudad de Manchester. Actualmente estudia los
                                            factores de éxito de emprendedores que logran resultados significativos con recursos
                                            escasos. Es PhD en Administración y Negocios por Alliance Manchester Business School
                                            de la Universidad de Manchester, MSc en Innovation and Entrepreneurship por la misma
                                            escuela de negocios, y economista de la Universidad del Pacífico.
                                                </p>
                                            </div>
                                        </div>
                                        <!--<div class="d-md-flex justify-content-between mt-4 pt-1 mb-5">
                                            <div class="d-flex mb-4 mb-md-0">
                                                <div class="flex-shrink-0">
                                                    <a href="#!">
                                                        <img class="rounded-5 shadow-4 h-auto"
                                                            src="https://mdbootstrap.com/img/new/avatars/22.jpg"
                                                            alt="Generic placeholder image" class="w-100">
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="mb-1">
                                                        <strong><a href="#!" class="text-reset">José Ignacio Pineda Mendoza</a></strong>
                                                    </p>
                                                    <p class="mb-1">SOCIO</p>
                                                    <p class="text-muted mb-1">
                                                    <strong>Miembro fundador de ESCE</strong> y cuenta con más de 20 años de experiencia
                                            en el sector de la educación superior. Ha enseñado cursos sobre innovación,
                                            emprendimiento y desarrollo sostenible en universidades de Perú y el Reino Unido.
                                            Además, ha desempeñado roles de liderazgo en universidades, donde se ha
                                            especializado en transformación organizacional, diseñando y ejecutando estrategias
                                            de turnaround y crecimiento, investigación aplicada de calidad y responsabilidad
                                            social. Su investigación se sitúa en la intersección de negocios, emprendimiento y
                                            desarrollo sostenible. Ha recibido un grant de la Academia Británica para explorar
                                            la Economía Circular en la Amazonía peruana, ha investigado el uso de tecnología
                                            digital entre emprendedores sociales para la Comisión Europea, y la creación de un
                                            sistema de innovación en salud en la ciudad de Manchester. Actualmente estudia los
                                            factores de éxito de emprendedores que logran resultados significativos con recursos
                                            escasos. Es PhD en Administración y Negocios por Alliance Manchester Business School
                                            de la Universidad de Manchester, MSc en Innovation and Entrepreneurship por la misma
                                            escuela de negocios, y economista de la Universidad del Pacífico.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>

            </section>

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

<?php include './views/sections/main-scripts.php' ?>

</html>