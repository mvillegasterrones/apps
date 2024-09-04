<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es">
<html lang="es" data-mdb-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= $crecim_empresarial_title ?></title>
    <?php include './views/sections/main-header.php' ?>
</head>

<body>
    <header class="mb-10">
        <!-- ? Navbar -->
        <?php include './views/sections/nav-bar.php' ?>
        <!-- Navbar -->

        <?php //include './views/sections/hero-crecim-empresarial.php' ?>

        <!-- Carousel wrapper -->
        <div id="carouselMaterialStyle" class="carousel slide carousel-fade vh-50" data-mdb-ride="carousel"
            data-mdb-carousel-init
            data-mdb-animation-init 
            data-mdb-animation-start="onLoad" 
            data-mdb-animation="fade-in-down" 
            data-mdb-animation-show-on-load="false" 
            data-mdb-animation-delay="300">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1"
                    aria-label="Slide 2"></button>
                <!--<button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>-->
            </div>

            <!-- Inner -->
            <div class="carousel-inner text-center rounded-5 shadow-4-strong">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="bg-image">
                        <img src="./img/hero/hero-01.jpg" class="w-100" alt="Louvre Museum" />
                        <div class="mask"
                            style="background: linear-gradient(45deg, hsla(168, 85%, 52%, 0.7), hsla(263, 88%, 45%, 0.7) 100%);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6 main-bg-color-grey p-4 rounded rounded-6"
                                    style="background: hsla(0, 80%, 100%, 0.25);backdrop-filter: blur(30px)">
                                        <h4>Tenemos una perspectiva de la innovación como motor de crecimiento</h4>
                                        <p>
                                            Sabemos lo complejo que es pasar por procesos de cambio como consecuencia de
                                            la innovación de productos, servicios o procesos y la creación de nuevos
                                            negocios.
                                        </p>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="bg-image">
                        <img src="./img/hero/hero-02.jpg" class="w-100" alt="Louvre Museum" />
                        <div class="mask"
                            style="background: linear-gradient(45deg, hsla(168, 85%, 52%, 0.7), hsla(263, 88%, 45%, 0.7) 100%);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <!--<p class="text-white mb-0">Can you see me?</p>-->
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6 main-bg-color-grey p-4 rounded rounded-6"
                                    style="background: hsla(0, 80%, 100%, 0.25);backdrop-filter: blur(30px)">
                                        <h4>Contribuimos a tomar el toro por las astas y enfrentar los cuellos de
                                            botella para generar nuevo valor de mercado o solucionar problemas
                                            empresariales complejos</h4>
                                        <p>
                                            Creemos que la competitividad de las empresas pasa por saber competir en el
                                            mercado, aproximándose cada vez más con las necesidades, problemas y
                                            emociones de los clientes.
                                        </p>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel wrapper -->

    </header>
    <main>

        <div class="container">

            <div class="row mb-5"
                data-mdb-animation-init 
                data-mdb-animation-start="onScroll" 
                data-mdb-animation="fade-in" 
                data-mdb-animation-show-on-load="false" 
                data-mdb-animation-delay="400">
                <div class="col-12 col-lg-6 text-start">
                    <div class="card mb-5 main-bg-color-grey"
                        data-mdb-animation-init 
                        data-mdb-animation-start="onLoad" 
                        data-mdb-animation="zoom-in" 
                        data-mdb-animation-show-on-load="false" 
                        data-mdb-animation-delay="500">
                        <div class="card-body">
                            <h4>Innovation Bottom UP</h4>
                            <p class="text-muted">
                                Decisiones basadas en el conocimiento existente para la solución de problemas
                                empresariales o la
                                identificación de nuevas oportunidades de negocio.
                            </p>
                            <div class="accordion" id="accordionExampleY">
                                <div class="accordion-item main-bg-color-grey">
                                    <h2 class="accordion-header" id="headingOneY">
                                        <button data-mdb-collapse-init class="accordion-button" type="button"
                                            data-mdb-target="#collapseOneY" aria-expanded="true"
                                            aria-controls="collapseOneY">
                                            <h6><i class="fas fa-info-circle fa-sm me-2 opacity-70"></i>Generación</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseOneY" class="accordion-collapse collapse"
                                        aria-labelledby="headingOneY" data-mdb-parent="#accordionExampleY">
                                        <div class="accordion-body">
                                            Creamos un espacio para fomentar la creatividad y la recolección de ideas a
                                            través de talleres, y plataformas digitales.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item main-bg-color-grey">
                                    <h2 class="accordion-header" id="headingTwoY">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#collapseTwoY" aria-expanded="false"
                                            aria-controls="collapseTwoY">
                                            <h6><i class="fas fa-info-circle fa-sm me-2 opacity-70"></i>Evaluación</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseTwoY" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoY" data-mdb-parent="#accordionExampleY">
                                        <div class="accordion-body">
                                            Prioriza las ideas evaluando su factibilidad técnica, su alineación con las
                                            necesidades de los consumidores, y su esfuerzo y tiempo de implementación.

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item main-bg-color-grey">
                                    <h2 class="accordion-header" id="headingThreeY">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#collapseThreeY" aria-expanded="false"
                                            aria-controls="collapseThreeY">
                                            <h6><i class="fas fa-info-circle fa-sm me-2 opacity-70"></i>Pruebas de bajo
                                                costo</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseThreeY" class="accordion-collapse collapse"
                                        aria-labelledby="headingThreeY" data-mdb-parent="#accordionExampleY">
                                        <div class="accordion-body">
                                            Desarrollar prototipos de las ideas seleccionadas, probarlos, y ajustar con
                                            base en la retroalimentación de usuarios y partes interesadas antes de su
                                            implementación a gran escala.

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item main-bg-color-grey">
                                    <h2 class="accordion-header" id="headingFourY">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#collapseFourY" aria-expanded="false"
                                            aria-controls="collapseFourY">
                                            <h6><i class="fas fa-info-circle fa-sm me-2 opacity-70"></i>Oportunidades
                                                Escalables</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseFourY" class="accordion-collapse collapse"
                                        aria-labelledby="headingFourY" data-mdb-parent="#accordionExampleY">
                                        <div class="accordion-body">
                                            Seleccionar ideas viables de mayor beneficio en relación a su costo y
                                            esfuerzo de implementación.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item main-bg-color-grey">
                                    <h2 class="accordion-header" id="headingFiveY">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#collapseFiveY" aria-expanded="false"
                                            aria-controls="collapseFiveY">
                                            <h6><i class="fas fa-info-circle fa-sm me-2 opacity-70"></i>Oportunidades
                                                Escalables</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseFiveY" class="accordion-collapse collapse"
                                        aria-labelledby="headingFiveY" data-mdb-parent="#accordionExampleY">
                                        <div class="accordion-body">
                                            Seleccionar ideas viables de mayor beneficio en relación a su costo y
                                            esfuerzo de implementación.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item main-bg-color-grey">
                                    <h2 class="accordion-header" id="headingSixY">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#collapseSixY" aria-expanded="false"
                                            aria-controls="collapseSixY">
                                            <h6><i class="fas fa-info-circle fa-sm me-2 opacity-70"></i>Cultura de
                                            Innovación</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseSixY" class="accordion-collapse collapse"
                                        aria-labelledby="headingSixY" data-mdb-parent="#accordionExampleY">
                                        <div class="accordion-body">
                                            Fomentar una cultura de innovación colaborativa y reconocer con recompensas
                                            a los empleados que generen ideas exitosas, incentivando su participación
                                            continua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 text-start">
                    <div class="card main-bg-color-grey"
                        data-mdb-animation-init 
                        data-mdb-animation-start="onScroll" 
                        data-mdb-animation="zoom-in" 
                        data-mdb-animation-show-on-load="false" 
                        data-mdb-animation-delay="700">
                        <div class="card-body">
                            <h4>Innovación de Productos o Servicios</h4>
                            <p class="text-muted">
                                Rivalidad basada en innovación y diferenciación a través de la mejora de nuevos productos o
                                servicios, o la creación de nuevos negocios.
                            </p>
                            <div class="accordion" id="accordionExampleY-2">
                                <div class="accordion-item main-bg-color-grey">
                                    <h2 class="accordion-header" id="headingOneY-2">
                                        <button data-mdb-collapse-init class="accordion-button" type="button"
                                            data-mdb-target="#collapseOneY-2" aria-expanded="true" aria-controls="collapseOneY-2">
                                            <h6><i class="fas fa-info-circle fa-sm me-2 opacity-70"></i>Nuevas Fuentes de Ingreso</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseOneY-2" class="accordion-collapse collapse"
                                        aria-labelledby="headingOneY-2" data-mdb-parent="#accordionExampleY-2">
                                        <div class="accordion-body">
                                            Abre nuevas líneas de negocio, encuentra nichos de mercado, atrae nuevos clientes y ofrece mayor valor percibido por los consumidores.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item main-bg-color-grey">
                                    <h2 class="accordion-header" id="headingTwoY-2">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#collapseTwoY-2" aria-expanded="false" aria-controls="collapseTwoY-2">
                                            <h6><i class="fas fa-info-circle fa-sm me-2 opacity-70"></i>Mejora de la Satisfacción del Cliente</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseTwoY-2" class="accordion-collapse collapse" aria-labelledby="headingTwoY-2"
                                        data-mdb-parent="#accordionExampleY-2">
                                        <div class="accordion-body">
                                            Creación o rediseño de nuevos productos o servicios para mejorar la experiencia del servicio, incrementando los niveles de fidelización y satisfacción.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item main-bg-color-grey">
                                    <h2 class="accordion-header" id="headingThreeY-2">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#collapseThreeY-2" aria-expanded="false"
                                            aria-controls="collapseThreeY-2">
                                            <h6><i class="fas fa-info-circle fa-sm me-2 opacity-70"></i>Capacidad de Respuesta a Cambios del Mercado
                                            </h6>
                                        </button>
                                    </h2>
                                    <div id="collapseThreeY-2" class="accordion-collapse collapse" aria-labelledby="headingThreeY-2"
                                        data-mdb-parent="#accordionExampleY-2">
                                        <div class="accordion-body">
                                            Adaptación rápida a cambios dinámicos para mantener su competitividad y fortalecer su resiliencia para superar las crisis y asegurar su sostenibilidad.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item main-bg-color-grey">
                                    <h2 class="accordion-header" id="headingFourY-2">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#collapseFourY-2" aria-expanded="false"
                                            aria-controls="collapseFourY-2">
                                            <h6><i class="fas fa-info-circle fa-sm me-2 opacity-70"></i>Deducción de Impuestos por el Gobierno Peruano
                                            </h6>
                                        </button>
                                    </h2>
                                    <div id="collapseFourY-2" class="accordion-collapse collapse" aria-labelledby="headingFourY-2"
                                        data-mdb-parent="#accordionExampleY-2">
                                        <div class="accordion-body">
                                            Acceso a incentivos fiscales para empresas que invierten en I+D.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php include './views/sections/footer.php' ?>
</body>
<?php include './views/sections/main-scripts.php' ?>

</html>