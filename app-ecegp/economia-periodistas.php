<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es">
<html lang="es" data-mdb-theme="dark">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ECEGP | Economía para Perdiodistas</title>
<?php include './views/sections/main-header.php' ?>
</head>

<body>
    <header class="mb-8">
        <!--? Navbar -->
        <?php include './views/sections/nav-bar.php' ?>
        <!-- Navbar -->

        <!-- Hero Parallax Section
          -->
        <section class="hero-parallax" style="background-image: url('<?= $img_econom_perdiodistas ?>');">
            <div class="mask" style="background: linear-gradient(45deg, hsla(168, 85%, 52%, 0.7), hsla(263, 88%, 45%, 0.7) 100%);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="container text-center rounded-6 p-3" style="background: hsla(0, 80%, 100%, 0.25);backdrop-filter: blur(30px);margin-top: -100px;"
                        data-mdb-animation-init 
                        data-mdb-animation-start="onLoad" 
                        data-mdb-animation="fade-in" 
                        data-mdb-animation-show-on-load="false" 
                        data-mdb-animation-delay="400">
                        <h4 class="hero-title display-6 fw-bold mb-0">Economía para Periodistas</h4>
                    </div>
                </div>
            </div>
        </section>
        <!--<section class="hero-parallax d-flex justify-content-center align-items-center text-center"
            style="background-image: url('<?= $img_econom_perdiodistas ?>');"
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
                            <h3 class="hero-title display-1 fw-bold">Economía para Periodistas</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <!-- FLOTANTE - CONTENIDO DEL CURSOt -->
        <div class="container mb-7">
            <div class="floating-card card mx-auto p-4 main-bg-color-grey"
                data-mdb-animation-init 
                data-mdb-animation-start="onLoad" 
                data-mdb-animation="zoom-in" 
                data-mdb-animation-show-on-load="false" 
                data-mdb-animation-delay="100">
                <div class="card-body">
                    <div class="row">
                        <!-- ? DETALLE -->
                        <div class="col-12 col-lg-6">

                            <div
                                data-mdb-animation-init 
                                data-mdb-animation-start="onLoad" 
                                data-mdb-animation="fade-in" 
                                data-mdb-animation-show-on-load="false" 
                                data-mdb-animation-delay="400">
                                <h4 class="card-title">Descripción del Curso</h4>
                                <p class="card-text text-muted">
                                    Este curso está dirigido a periodistas que desean comprender mejor los conceptos
                                    económicos fundamentales para informar de manera precisa y profunda sobre temas
                                    económicos. Los participantes aprenderán a analizar y comunicar de manera efectiva los
                                    indicadores económicos clave que determinan la salud de la economía de un país.
                                </p>
                                <hr class="container w-100">
                            </div>
                            <div
                                data-mdb-animation-init 
                                data-mdb-animation-start="onScroll" 
                                data-mdb-animation="fade-in" 
                                data-mdb-animation-show-on-load="false" 
                                data-mdb-animation-delay="200">
                                <h4>Competencias Propuestas</h4>
                                <p class="">
                                    <p class="d-none text-muted p-4 pt-1">Habilidad para evaluar y analizar indicadores
                                        económicos y su impacto en la economía y la sociedad.</p>
                                    <i class="fa-regular fa-check"></i> Comprensión de Conceptos Económicos Básicos<br>
                                    <p class="text-muted p-4 pt-1">Capacidad para entender y explicar los principios
                                        fundamentales de la economía, incluyendo el Producto Interno Bruto (PIB), la tasa de
                                        desempleo, la inflación, el déficit o superávit fiscal, la balanza comercial y el índice
                                        de confianza del consumidor.</p>
                                    <i class="fa-regular fa-check"></i> Análisis de Indicadores Económicos<br>
                                    <p class="text-muted p-4 pt-1">Habilidad para evaluar y analizar indicadores económicos y su
                                        impacto en la economía y la sociedad.</p>
                                    <i class="fa-regular fa-check"></i> Interpretación de Datos Económicos<br>
                                    <p class="text-muted p-4 pt-1">Competencia para interpretar estadísticas y datos económicos,
                                        comprendiendo su relevancia y contexto.</p>
                                    <i class="fa-regular fa-check"></i> Comunicación Efectiva de Información Económica<br>
                                    <p class="text-muted p-4 pt-1">Capacidad para comunicar conceptos y datos económicos de
                                    manera clara y accesible al público general.</p>
                                </p>

                            </div>

                        </div>

                        <!-- ? PRECIOS E INFO -->
                        <div class="col-12 col-lg-6 mb-5"
                            data-mdb-animation-init 
                            data-mdb-animation-start="onLoad" 
                            data-mdb-animation="fade-in" 
                            data-mdb-animation-show-on-load="false" 
                            data-mdb-animation-delay="400">
                            <div class="card main-bg-color-dark">
                                <div class="card-body">
                                    <h5 class="text-color-warning text-end">
                                        <p class="mb-1">Precio: S/. <?= $precio_econom_perdistas ?></p>
                                    </h5>
                                    <ul class="list-group list-group-light">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold"><i
                                                        class="fa-regular fa-check-circle text-warning"></i> Modo de
                                                    enseñanza</div>
                                                <!--<div class="text-muted">john.doe@gmail.com</div>-->
                                            </div>
                                            <span class="badge rounded-pill badge-success">
                                                Digital síncrono
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold"><i
                                                        class="fa-duotone fa-solid fa-calendar-days text-warning"></i>
                                                    Fecha de inicio</div>
                                                <!--<div class="text-muted">alex.ray@gmail.com</div>-->
                                            </div>
                                            <span class="badge rounded-pill badge-primary">--/--/----</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold"><i
                                                        class="fa-regular fa-calendar-clock text-warning"></i> Duración
                                                </div>
                                                <!--<div class="text-muted">kate.hunington@gmail.com</div>-->
                                            </div>
                                            <span class="badge rounded-pill badge-warning">06 meses</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold"><i
                                                        class="fa-regular fa-calendar-clock text-warning"></i> Tiempo de
                                                    dedicación</div>
                                                <!--<div class="text-muted">kate.hunington@gmail.com</div>-->
                                            </div>
                                            <span class="badge rounded-pill badge-info">8 horas (incluido el material
                                                del curso)</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-bold"><i
                                                        class="fa-regular fa-check-circle text-warning"></i> Certificado
                                                </div>
                                                <!--<div class="text-muted">kate.hunington@gmail.com</div>-->
                                            </div>
                                            <span class="badge rounded-pill badge-success">Curso de
                                                Especialización</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12"
                            data-mdb-animation-init 
                            data-mdb-animation-start="onScroll" 
                            data-mdb-animation="fade-in" 
                            data-mdb-animation-show-on-load="false" 
                            data-mdb-animation-delay="400">
                            <h4 class="mb-3">Estructura del Curso</h4>
                            <!-- ? LISTA DE SEMANDAS DEL CURSO -->
                            <div class="accordion accordion-borderless" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button data-mdb-collapse-init class="accordion-button" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 1:</b> Desafíos del Crecimiento Económico en el Siglo XXI
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingOne">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                Explora las limitaciones del PIB como indicador de bienestar y las alternativas emergentes para medir el desarrollo económico. Se discutirán enfoques de crecimiento sostenible e inclusivo, y se analizarán las tendencias globales actuales.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué indicadores alternativos al PIB podrían ofrecer una visión más completa del bienestar económico?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo pueden los países balancear el crecimiento económico con la sostenibilidad ambiental?</p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <Sema data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseTwo">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 2:</b> Desempleo y Transformación del Mercado Laboral
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingTwo">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                Analiza el impacto de la automatización y digitalización en el empleo, los desafíos en la medición del desempleo y las políticas necesarias para mitigar el desempleo estructural en un mundo cambiante.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo debería adaptarse la educación para preparar a la fuerza laboral ante la automatización?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué políticas públicas podrían mitigar el impacto del desempleo estructural en la era digital?</p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseThree">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 3:</b> Inflación y Desigualdad Económica

                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingThree">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                Examina el vínculo entre la inflación y la desigualdad económica, explorando cómo las políticas monetarias pueden influir en la distribución del ingreso y el papel de los bancos centrales en la estabilidad económica.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿De qué manera la inflación exacerba las desigualdades económicas?<p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué medidas podrían tomar los bancos centrales para controlar la inflación sin aumentar la desigualdad?<p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFour">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 4:</b> Sostenibilidad Fiscal y Endeudamiento Público
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingFour">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                Aborda los desafíos de la sostenibilidad fiscal, el manejo del endeudamiento público y las implicaciones de las políticas fiscales expansivas y contractivas en la economía y la equidad social.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cuáles son las principales señales de una crisis de deuda soberana inminente? </p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué estrategias fiscales podrían ayudar a equilibrar la necesidad de gasto público con la sostenibilidad fiscal a largo plazo? </p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFive">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 5:</b> Globalización y Comercio Internacional en Tiempos de Crisis
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingFive">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                Explora cómo la globalización y las dinámicas del comercio internacional han cambiado tras la pandemia, analizando el debate entre proteccionismo y libre comercio y el futuro de los acuerdos comerciales.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué lecciones ha dejado la pandemia sobre la resiliencia de las cadenas de suministro globales? </p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo deberían adaptarse las políticas comerciales en un mundo post-pandemia para equilibrar seguridad y crecimiento? </p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseSix">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 6:</b> Confianza del Consumidor y Recuperación Económica
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingSix">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                                Analiza la importancia de la confianza del consumidor en la recuperación económica, los factores que la influencian y las estrategias para fomentar un entorno económico positivo en tiempos de incertidumbre.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo pueden los gobiernos y empresas restaurar la confianza del consumidor en tiempos de crisis económica? </p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué rol juegan los medios de comunicación en la formación de la percepción económica del consumidor? </p>

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

        <?php include './views/sections/transversal.php' ?>

    </header>

    <?php include './views/sections/footer.php' ?>

</body>

<?php include './views/sections/main-scripts.php' ?>

</html>