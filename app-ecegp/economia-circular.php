<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es">
<html lang="es" data-mdb-theme="dark">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ECEGP | Economía Circular para Docentes Universitarios</title>
<?php include './views/sections/main-header.php' ?>
</head>

<body>
    <header class="mb-8">
        <!--? Navbar -->
        <?php include './views/sections/nav-bar.php' ?>
        <!-- Navbar -->

        <!-- Hero Parallax Section -->
         <!-- Hero Parallax Section con Imagen de Fondo 
          data-mdb-animation-init 
            data-mdb-animation-start="onLoad" 
            data-mdb-animation="fade-in-down" 
            data-mdb-animation-show-on-load="false" 
            data-mdb-animation-delay="100"-->
        <section class="hero-parallax" style="background-image: url('<?= $img_econom_circular ?>');">
            <div class="mask" style="background: linear-gradient(45deg, hsla(168, 85%, 52%, 0.7), hsla(263, 88%, 45%, 0.7) 100%);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="container text-center rounded-6 p-3" style="background: hsla(0, 80%, 100%, 0.25);backdrop-filter: blur(30px);margin-top: -100px;font-size: 15px !important;"
                        data-mdb-animation-init 
                        data-mdb-animation-start="onLoad" 
                        data-mdb-animation="fade-in" 
                        data-mdb-animation-show-on-load="false" 
                        data-mdb-animation-delay="400">
                        <h4 class="h5 hero-title display-6 fw-bold mb-0">Economía Circular para Docentes Universitarios</h4>
                    </div>
                </div>
            </div>
        </section>

<!-- Floating Card Content -->
<!--<div class="container">
    <div class="floating-card card mx-auto p-4">
        <div class="card-body">
            <h2 class="card-title">Contenido Flotante</h2>
            <p class="card-text">Este es el contenido principal de la página. Está dentro de una tarjeta flotante que se superpone a la sección Hero con efecto Parallax.</p>
            <a href="#!" class="btn btn-primary">Leer más</a>
        </div>
    </div>
</div>-->

        <!--<section class="hero-parallax d-flex justify-content-center align-items-center text-center"
            style="background-image: url(<?= $img_econom_circular ?>);"
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
                            <h3 class="hero-title display-1 fw-bold">Economía Circular para Docentes Universitarios</h3>
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
                                Este curso está destinado a docentes universitarios que enseñan economía o materias relacionadas. El curso busca actualizar y profundizar el conocimiento de los docentes en teoría económica, métodos de enseñanza y nuevas tendencias en la economía. A través de este curso, los docentes podrán reflexionar y actualizarse sobre temas económicos contemporáneos, con el objetivo de transmitir estos conocimientos actualizados a sus alumnos.
                                </p>
                                <hr class="container w-100">
                            </div>
                            <div
                                data-mdb-animation-init 
                                data-mdb-animation-start="onScroll" 
                                data-mdb-animation="fade-in" 
                                data-mdb-animation-show-on-load="false" 
                                data-mdb-animation-delay="200">
                                <h4>Competencias Principales Desarrolladas</h4>
                                <p class="">
                                    <p class="d-none text-muted p-4 pt-1">Habilidad para evaluar y analizar indicadores
                                        económicos y su impacto en la economía y la sociedad.</p>
                                    <i class="fa-regular fa-check"></i> Dominio de Teorías Económicas Avanzadas<br>
                                    <p class="text-muted p-4 pt-1">Capacidad para entender y enseñar teorías económicas complejas y su aplicación en diversos contextos.</p>
                                    <i class="fa-regular fa-check"></i> Metodologías de Enseñanza en Economía<br>
                                    <p class="text-muted p-4 pt-1">Habilidad para aplicar metodologías pedagógicas modernas y efectivas en la enseñanza de la economía.</p>
                                    <i class="fa-regular fa-check"></i> Análisis Económico y Modelos Cuantitativos<br>
                                    <p class="text-muted p-4 pt-1">Competencia en el uso de modelos económicos y herramientas cuantitativas para analizar problemas económicos.</p>
                                    <i class="fa-regular fa-check"></i> Actualización en Tendencias Económicas Globales<br>
                                    <p class="text-muted p-4 pt-1">Capacidad para mantenerse al día con las tendencias y desarrollos recientes en la economía global y su impacto en la educación económica.</p>
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
                                        <p class="mb-1">Precio: S/. <?= $precio_econom_circular ?></p>
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
                                            <span class="badge rounded-pill badge-warning">06 semanas</span>
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
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 1:</b>&nbsp;Introducción a la Economía Circular</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingOne">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            Esta semana se centra en comprender los principios básicos de la economía circular, diferenciándose del modelo económico lineal tradicional. Se explorarán conceptos clave como la reducción de residuos, la reutilización de materiales y la regeneración de recursos.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cuáles son las diferencias fundamentales entre la economía circular y la economía lineal?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué beneficios ofrece la economía circular en comparación con los modelos tradicionales?</p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <Sema data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseTwo">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 2:</b>&nbsp;Diseño Circular y Ciclo de Vida de los Productos</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingTwo">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            Se profundiza en cómo diseñar productos y servicios que se alineen con los principios de la economía circular, considerando todo el ciclo de vida del producto desde la creación hasta su eventual reutilización o reciclaje.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo se puede integrar el diseño circular en la planificación de nuevos productos?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué herramientas y metodologías existen para analizar el ciclo de vida de un producto en un contexto circular?</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseThree">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 3:</b>&nbsp;Modelos de Negocio Circulares</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingThree">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            Esta semana se dedica a la exploración de modelos de negocio que apoyen la economía circular, como la economía del servicio, el leasing, y la simbiosis industrial, analizando cómo estas estrategias pueden ser implementadas y escaladas.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué características definen un modelo de negocio circular exitoso?<p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo pueden las empresas transitar de un modelo de negocio lineal a uno circular?<p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFour">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 4:</b>&nbsp;Implementación de Prácticas Circulares en la Cadena de Suministro</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingFour">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            Los participantes aprenderán a integrar prácticas de economía circular en la cadena de suministro, explorando cómo optimizar el uso de recursos y minimizar los residuos en cada etapa del proceso.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cuáles son los desafíos más comunes en la implementación de prácticas circulares en la cadena de suministro?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo se puede medir el impacto de la economía circular en la eficiencia de la cadena de suministro?</p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFive">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 5:</b>&nbsp;Políticas y Normativas para la Economía Circular</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingFive">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            Se explorarán las políticas y regulaciones que apoyan la transición hacia una economía circular, tanto a nivel local como global, y cómo estas pueden influir en la adopción de prácticas sostenibles por parte de las empresas.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué papel juegan las políticas públicas en la promoción de la economía circular?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo pueden las empresas adaptarse a las nuevas normativas relacionadas con la economía circular?</p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseSix">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 6:</b>&nbsp;Educación y Sensibilización en Economía Circular</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingSix">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            En esta semana, se discutirá la importancia de educar y sensibilizar a las futuras generaciones sobre la economía circular, explorando estrategias pedagógicas para integrar estos conceptos en el currículo académico.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué metodologías pedagógicas son más efectivas para enseñar economía circular a diferentes niveles educativos?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo se puede involucrar a la comunidad académica en la promoción de la economía circular?</p>

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