<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es">
<html lang="es" data-mdb-theme="dark">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ECEGP | RESKALLING</title>
<?php include './views/sections/main-header.php' ?>

<style>
        .timeline {
            position: relative;
            padding: 2rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 100%;
            background-color: #007bff;
        }

        .timeline-step {
            position: relative;
            margin-bottom: 50px;
        }

        .timeline-step::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background-color: #007bff;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline-content {
            position: relative;
            width: 45%;
            padding: 1.5rem;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .timeline-content.left {
            left: 0;
        }

        .timeline-content.right {
            left: 55%;
        }

        @media (max-width: 768px) {
            .timeline-content {
                width: 90%;
                left: 5% !important;
            }
            .timeline::before {
                left: 5%;
            }
        }
    </style>


</head>

<body>
    <header class="mb-8">
        <!--? Navbar -->
        <?php include './views/sections/nav-bar.php' ?>
        <!-- Navbar -->

        <!-- Carousel wrapper -->
        <div id="carouselMaterialStyle" class="carousel slide carousel-fade vh-50" data-mdb-ride="carousel"
            data-mdb-carousel-init data-mdb-animation-init data-mdb-animation-start="onLoad"
            data-mdb-animation="fade-in-down" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="bg-image">
                        <img src="<?= $img_hero_reskalling_01 ?>"
                            class="w-100" alt="Louvre Museum" />
                        <div class="mask"
                            style="background: linear-gradient(45deg, hsla(168, 85%, 52%, 0.7), hsla(263, 88%, 45%, 0.7) 100%);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="row">
                                    <!--<div class="col-12 main-bg-color-grey p-4 rounded rounded-6"
                                        style="background: hsla(0, 80%, 100%, 0.25);backdrop-filter: blur(30px)">
                                        <h3>RESKALLING</h3>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-image">
                        <img src="<?= $img_hero_reskalling_01 ?>"
                            class="w-100" alt="Louvre Museum" />
                        <div class="mask"
                            style="background: linear-gradient(45deg, hsla(168, 85%, 52%, 0.7), hsla(263, 88%, 45%, 0.7) 100%);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="row">
                                    <!--<div class="col-12 main-bg-color-grey p-4 rounded rounded-6"
                                        style="background: hsla(0, 80%, 100%, 0.25);backdrop-filter: blur(30px)">
                                        <h3>Programas de Capacitación Continua </h3>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row mb-7">
                <div class="col-12" data-mdb-animation-init data-mdb-animation-start="onScroll"
                    data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="100">
                    <div class="card main-bg-color-grey" data-mdb-animation-init data-mdb-animation-start="onScroll"
                        data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="500">
                        <div class="card-body">
                            <h1>Competencias para tiempos de cambio</h1>
                            <p class="text-muted">
                            En un entorno donde las habilidades técnicas y profesionales pueden quedar obsoletas rápidamente, aseguramos que nuestros alumnos se mantengan competitivos y relevantes con talleres digitales cortos.
                            </p>
                            <h6 class="mb-3">Los participantes aprenderán a:</h6>
                            <p class="text-muted">
                                <i class="fa-regular fa-check-circle"></i> Adaptarse a nuevas tecnologías y metodologías para la toma de decisiones.
                            </p>
                            <p class="text-muted">
                                <i class="fa-regular fa-check-circle"></i> Mejorar la toma de decisiones mediante habilidades analíticas y estratégicas.
                            </p>
                            <p class="text-muted">
                                <i class="fa-regular fa-check-circle"></i> Fortalecer su liderazgo y gestión de equipos para enfrentar desafíos en un entorno dinámico.
                            </p>
                            <p class="text-muted">
                                <i class="fa-regular fa-check-circle"></i> Fomentar la innovación y la resiliencia para mantener competitividad organizacional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="row gx-lg-5 mb-10">
                    <!--1. Aplicaciones movíles -->
                    <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
                        <div class="card main-bg-color-grey rounded-6 h-100" data-mdb-animation-init
                            data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up"
                            data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                            <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6"
                                data-mdb-ripple-init data-mdb-ripple-color="light">
                                <img src="<?= $cert_img_card_1 ?>" class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Certificación en Especialización de Marketing Digital
                                </h5>
                                <p class="card-text text-muted">
                                    Es un programa práctico de 6 meses diseñado para que los participantes desarrollen
                                    habilidades en SEO, marketing de contenidos, redes sociales y análisis de datos. A
                                    través de proyectos aplicados, crearás un portafolio profesional. (Certificación en
                                    Especialización de Marketing Digital)
                                </p>
                                <a href="<?= $cert_link_card_1 ?>" class="btn btn-secondary btn-rounded"
                                    data-mdb-ripple-init>Ver mas <i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end 1 -->

                    <!-- 2. Desarrollo web -->
                    <div class="col-lg-4 mb-6 mb-lg-0">
                        <div class="card main-bg-color-grey rounded-6 h-100" data-mdb-animation-init
                            data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up"
                            data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
                            <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6"
                                data-mdb-ripple-init data-mdb-ripple-color="light">
                                <img src="<?= $cert_img_card_2 ?>" class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Certificación en Especialización de Transformación
                                    Digital</h5>
                                <p class="card-text text-muted">
                                    Es un programa práctico de 6 meses diseñado para especializarte en la gestión de
                                    innovación, tecnologías emergentes, y cultura digital. Desarrollarás un plan
                                    integral de transformación digital que podrás implementar de inmediato, mejorando tu
                                    empleabilidad y conectándote con profesionales afines. (Link)
                                </p>
                                <a href="<?= $cert_link_card_2 ?>" class="btn btn-secondary btn-rounded"
                                    data-mdb-ripple-init>Ver mas <i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end 2 -->

                    <!-- 3. Rede -->
                    <div class="col-lg-4 mb-6 mb-lg-0">
                        <div class="card main-bg-color-grey rounded-6 h-100" data-mdb-animation-init
                            data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up"
                            data-mdb-animation-show-on-load="false" data-mdb-animation-delay="800">
                            <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6"
                                data-mdb-ripple-init data-mdb-ripple-color="light">
                                <img src="<?= $cert_img_card_3 ?>" class="w-100 h-100" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Certificación en Especialización de Crecimiento Empresarial y Desarrollo de Negocios</h5>
                                <p class="card-text text-muted">
                                    La Certificación en Crecimiento Empresarial y Desarrollo de Negocios es un programa
                                    práctico de 6 meses diseñado para especializarte en identificar oportunidades de
                                    crecimiento, desarrollar nuevos negocios y escalar empresas de manera sostenible.
                                    (Link)
                                </p>
                                <a href="<?= $cert_link_card_3 ?>" class="btn btn-secondary btn-rounded"
                                    data-mdb-ripple-init>Ver mas <i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end 3 -->

                </div>

            </div>

            <!-- Sección Timeline -->
            <!--<section class="timeline container text-color-dark">
                <div class="timeline-step">
                    <div class="timeline-content left">
                        <h4 class="fw-bold">Evento 1</h4>
                        <p class="mb-0">Descripción del evento 1. Este es un ejemplo de un evento en la línea de tiempo.
                        </p>
                    </div>
                </div>

                <div class="timeline-step">
                    <div class="timeline-content right">
                        <h4 class="fw-bold">Evento 2</h4>
                        <p class="mb-0">Descripción del evento 2. Este es otro evento que aparece en la línea de tiempo.
                        </p>
                    </div>
                </div>

                <div class="timeline-step">
                    <div class="timeline-content left">
                        <h4 class="fw-bold">Evento 3</h4>
                        <p class="mb-0">Descripción del evento 3. Puedes añadir más eventos según sea necesario.</p>
                    </div>
                </div>

                <div class="timeline-step">
                    <div class="timeline-content right">
                        <h4 class="fw-bold">Evento 4</h4>
                        <p class="mb-0">Descripción del evento 4. El diseño es responsive para móviles.</p>
                    </div>
                </div>
            </section>-->

        </div>
    </main>

    <?php include './views/sections/footer.php' ?>

</body>

<?php include './views/sections/main-scripts.php' ?>

</html>