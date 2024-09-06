<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es">
<html lang="es" data-mdb-theme="dark">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ECEGP | Certificación en Especialización de Transformación Digital</title>
<?php include './views/sections/main-header.php' ?>
</head>

<body>
    <header class="mb-8">
        <!--? Navbar -->
        <?php include './views/sections/nav-bar.php' ?>
        <!-- Navbar -->

        <!-- Hero Parallax Section
         data-mdb-animation-init 
            data-mdb-animation-start="onLoad" 
            data-mdb-animation="fade-in-down" 
            data-mdb-animation-show-on-load="false" 
            data-mdb-animation-delay="100" -->
        <section class="hero-parallax" style="background-image: url('<?= $cert_img_card_2 ?>');">
            <div class="mask"
                style="background: linear-gradient(45deg, hsla(168, 85%, 52%, 0.7), hsla(263, 88%, 45%, 0.7) 100%);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="container text-center rounded-6 p-3"
                        style="background: hsla(0, 80%, 100%, 0.25);backdrop-filter: blur(30px);margin-top: -100px;"
                        data-mdb-animation-init data-mdb-animation-start="onLoad" data-mdb-animation="fade-in"
                        data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                        <h4 class="hero-title display-6 fw-bold mb-0">Certificación en Especialización de Transformación Digital</h4>
                    </div>
                </div>
            </div>
        </section>
        <!--<section class="hero-parallax d-flex justify-content-center align-items-center text-center"
            style="background-image: url(<?= $cert_img_card_2 ?>);"
            data-mdb-carousel-init
            data-mdb-animation-init 
            data-mdb-animation-start="onLoad" 
            data-mdb-animation="fade-in-down" 
            data-mdb-animation-show-on-load="false" 
            data-mdb-animation-delay="100">
            <div class="mask" style="background: linear-gradient(45deg, hsla(168, 85%, 52%, 0.7), hsla(263, 88%, 45%, 0.7) 100%);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="row">
                        <div class="col-12 main-bg-color-grey p-4 rounded rounded-6" style="background: hsla(0, 80%, 100%, 0.25);backdrop-filter: blur(30px);margin-top: -100px;"
                            data-mdb-carousel-init
                            data-mdb-animation-init 
                            data-mdb-animation-start="onLoad" 
                            data-mdb-animation="fade-in" 
                            data-mdb-animation-show-on-load="false" 
                            data-mdb-animation-delay="600">
                            <h3 class="hero-title display-1 fw-bold">Formación de Emprendedores para Docentes Universitarios</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <!-- FLOTANTE - CONTENIDO DEL CURSOt -->
        <div class="container mb-7">
            <div class="floating-card card mx-auto p-4 main-bg-color-grey" data-mdb-animation-init
                data-mdb-animation-start="onLoad" data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false"
                data-mdb-animation-delay="100">
                <div class="card-body">
                    <div class="row">
                        <!-- ? DETALLE -->
                        <div class="col-12 col-lg-6">
                            <div data-mdb-animation-init data-mdb-animation-start="onLoad" data-mdb-animation="fade-in"
                                data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                                <h4 class="color-institucional-1">Resumen</h4>
                                <p class="card-text text-muted">
                                El Programa de Especialización en Transformación Digital ofrece un enfoque práctico y orientado a resultados, diseñado para que los participantes puedan aplicar de inmediato las habilidades adquiridas en la transformación de sus organizaciones. Este programa complementa el aprendizaje tradicional y te permitirá convertirte en un especialista en áreas clave de la transformación digital, como la gestión de la innovación, tecnologías emergentes, cultura digital y análisis de datos.<br><br>
Te conectarás con otros profesionales interesados en la transformación digital, y en solo 6 meses, estarás listo para aplicar tus nuevas habilidades en el mercado laboral. Aprenderás a:

                                </p>
                                <hr class="container w-100">
                            </div>
                            <div data-mdb-animation-init data-mdb-animation-start="onScroll"
                                data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                                data-mdb-animation-delay="200">
                                <!--<div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">John Doe</p>
                                        <p class="text-muted mb-0">john.doe@gmail.com</p>
                                        <p class="fw-bold mb-1">John Doe</p>
                                        <p class="text-muted mb-0">john.doe@gmail.com</p>
                                        <p class="fw-bold mb-1">John Doe</p>
                                        <p class="text-muted mb-0">john.doe@gmail.com</p>
                                    </div>
                                </div>-->
                                <h4 class="d-none">Competencias Propuestas</h4>
                                <p class="">
                                <p class="d-none text-muted p-4 pt-1">-</p>
                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                                <hr class="container w-100">
                                <h4 class="">Resultados del Programa</h4>

                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>

                                <hr class="container w-100">
                                <h4 class="">Habilidades que Desarrollarás</h4>

                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                                <p class="text-muted p-4 pt-1">
                                    <i class="fa-regular fa-check-circle text-color-warning"></i>
                                    ....
                                </p>
                            </div>

                        </div>

                        <!-- ? PRECIOS E INFO -->
                        <div class="col-12 col-lg-6 mb-5" data-mdb-animation-init data-mdb-animation-start="onLoad"
                            data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                            data-mdb-animation-delay="400">
                            <div class="card main-bg-color-dark">
                                <div class="card-body">
                                    <h5 class="text-color-warning text-end">
                                        <p class="mb-1">Precio: S/. <?= $cert_precio_card_2 ?></p>
                                    </h5>
                                    <ul class="list-group list-group-light">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold"><i
                                                        class="fa-regular fa-check-circle text-warning"></i> Modo de
                                                    enseñanza</div>
                                            </div>
                                            <span class="badge rounded-pill badge-success">
                                                Digital
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold"><i
                                                        class="fa-duotone fa-solid fa-calendar-days text-warning"></i>
                                                    Fecha de inicio</div>
                                            </div>
                                            <span class="badge rounded-pill badge-primary">--/--/----</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold"><i
                                                        class="fa-regular fa-calendar-clock text-warning"></i> Duración
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-warning">06 meses</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold"><i
                                                        class="fa-regular fa-calendar-clock text-warning"></i> Tiempo de
                                                    dedicación</div>
                                            </div>
                                            <span class="badge rounded-pill badge-info">8 horas (incluido el material
                                                del curso)</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold"><i
                                                        class="fa-regular fa-check-circle text-warning"></i> Certificado
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-success">Certificación de
                                                Especialización</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12" data-mdb-animation-init data-mdb-animation-start="onScroll"
                            data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                            data-mdb-animation-delay="400">
                            <h4 class="mb-3">Estructura del Curso</h4>
                            <!-- ? LISTA DE SEMANDAS DEL CURSO -->
                            <div class="accordion accordion-borderless" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button data-mdb-collapse-init class="accordion-button" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Mes
                                                1:</b>&nbsp;Fundamentos del Marketing Digital
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne"
                                        class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingOne">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                ....
                                            </p>
                                            <p class="text-muted">
                                            <h6>Preguntas de discusión:</h6>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 1:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 2:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 3:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 4:</b>&nbsp; ....
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <Sema data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseTwo">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Mes
                                                2:</b>&nbsp; .... </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo"
                                        class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingTwo">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                ......
                                            </p>
                                            <p class="text-muted">
                                            <h6>Preguntas de discusión:</h6>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 1:</b>&nbsp; .....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 2:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 3:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 4:</b>&nbsp; ....
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseThree">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Mes
                                                3:</b>&nbsp; .... </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree"
                                        class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingThree">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                ......
                                            </p>
                                            <p class="text-muted">
                                            <h6>Preguntas de discusión:</h6>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 1:</b>&nbsp; .....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 2:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 3:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 4:</b>&nbsp; ....
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFour">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Mes
                                                4:</b>&nbsp; .... </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour"
                                        class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingFour">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                ......
                                            </p>
                                            <p class="text-muted">
                                            <h6>Preguntas de discusión:</h6>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 1:</b>&nbsp; .....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 2:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 3:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 4:</b>&nbsp; ....
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFive">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Mes
                                                5:</b>&nbsp; .... </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFive"
                                        class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingFive">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                ......
                                            </p>
                                            <p class="text-muted">
                                            <h6>Preguntas de discusión:</h6>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 1:</b>&nbsp; .....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 2:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 3:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 4:</b>&nbsp; ....
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseSix">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Mes
                                                6:</b>&nbsp; .... </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSix"
                                        class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingSix">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                ......
                                            </p>
                                            <p class="text-muted">
                                            <h6>Preguntas de discusión:</h6>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 1:</b>&nbsp; .....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 2:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 3:</b>&nbsp; ....
                                            </p>
                                            <p class="m-2 text-muted mb-1">
                                                <i class="fas fa-play"></i>
                                                <b>Semana 4:</b>&nbsp; ....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php //include './views/sections/transversal.php' ?>

    </header>

    <?php include './views/sections/footer.php' ?>

</body>

<?php include './views/sections/main-scripts.php' ?>

</html>