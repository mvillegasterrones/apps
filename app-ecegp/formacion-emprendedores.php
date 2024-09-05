<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es">
<html lang="es" data-mdb-theme="dark">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ECEGP | Formación de Emprendedores para Docentes Universitarios</title>
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
        <section class="hero-parallax" style="background-image: url('<?= $img_formac_emprendedores ?>');">
            <div class="mask" style="background: linear-gradient(45deg, hsla(168, 85%, 52%, 0.7), hsla(263, 88%, 45%, 0.7) 100%);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="container text-center rounded-6 p-3" style="background: hsla(0, 80%, 100%, 0.25);backdrop-filter: blur(30px);margin-top: -100px;"
                        data-mdb-animation-init 
                        data-mdb-animation-start="onLoad" 
                        data-mdb-animation="fade-in" 
                        data-mdb-animation-show-on-load="false" 
                        data-mdb-animation-delay="400">
                        <h4 class="hero-title display-6 fw-bold mb-0">Formación de Emprendedores para Docentes Universitarios</h4>
                    </div>
                </div>
            </div>
        </section>
        <!--<section class="hero-parallax d-flex justify-content-center align-items-center text-center"
            style="background-image: url(<?= $img_formac_emprendedores ?>);"
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
        <div class="container mb-10">
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
                                Este curso está diseñado para docentes universitarios que desean incorporar el espíritu emprendedor en sus enseñanzas y fomentar el emprendimiento entre sus estudiantes. El curso incluirá temas sobre generación de ideas de negocio, descubrir al cliente, definir la propuesta de valor, elaborar un prototipo, escalar el negocio y storytelling para negocios.
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
                                    <i class="fa-regular fa-check"></i> Fomento del Espíritu Emprendedor<br>
                                    <p class="text-muted p-4 pt-1">Habilidad para inspirar y motivar a los estudiantes a considerar el emprendimiento como una carrera viable.</p>
                                    <i class="fa-regular fa-check"></i> Desarrollo de Planes de Negocio<br>
                                    <p class="text-muted p-4 pt-1">Capacidad para guiar a los estudiantes en la elaboración de planes de negocio sólidos y viables.</p>
                                    <i class="fa-regular fa-check"></i> Conocimiento de Estrategias de Innovación<br>
                                    <p class="text-muted p-4 pt-1">Comprensión de las estrategias de innovación y su aplicación en el desarrollo de nuevos productos y servicios.</p>
                                    <i class="fa-regular fa-check"></i> Gestión de Recursos y Financiación<br>
                                    <p class="text-muted p-4 pt-1">Competencia para asesorar a los estudiantes sobre la obtención y gestión de recursos financieros para nuevos emprendimientos.</p>
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
                                        <p class="mb-1">Precio: S/. <?= $precio_formac_emprended ?></p>
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
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 1:</b>&nbsp;Generación de Ideas de Negocio
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingOne">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            Esta semana se centra en identificar problemas y necesidades del mercado y en el uso de técnicas de creatividad para generar ideas innovadoras que puedan transformarse en oportunidades de negocio.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo identificar problemas y necesidades del mercado que puedan transformarse en oportunidades de negocio?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué técnicas de creatividad son más efectivas para generar ideas innovadoras?</p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <Sema data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseTwo">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 2:</b>&nbsp;Descubrir al Cliente</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingTwo">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            Se profundiza en cómo investigar y comprender a los clientes a través de entrevistas y segmentación de mercado, y cómo validar sus necesidades y comportamientos para asegurar el éxito del negocio.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo realizar entrevistas efectivas a clientes para entender sus necesidades y comportamientos?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cuáles son los criterios clave para segmentar el mercado y validar el cliente objetivo?</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseThree">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 3:</b>&nbsp;Definir la Propuesta de Valor</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingThree">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            Esta semana se dedica a la construcción de una propuesta de valor sólida, identificando los beneficios y características clave del producto o servicio que lo diferencian en el mercado y cómo comunicarlo eficazmente.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo identificar y comunicar los beneficios clave de un producto o servicio que lo diferencien de la competencia?<p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué elementos son esenciales para construir una propuesta de valor convincente?<p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFour">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 4:</b>&nbsp;Elaborar un Prototipo</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingFour">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            Los participantes aprenderán a desarrollar prototipos rápidos y a realizar pruebas de concepto, utilizando el feedback para iterar y mejorar el diseño antes de una implementación a gran escala
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cuál es el proceso más eficiente para desarrollar y probar prototipos rápidos?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo utilizar el feedback del usuario para iterar y mejorar el prototipo?</p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseFive">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 5:</b>&nbsp;Escalar el Negocio</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingFive">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            Se explorarán estrategias y modelos de negocio escalables, así como métodos para la expansión de mercados y la gestión del crecimiento sostenible.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cuáles son los modelos de negocio más adecuados para la escalabilidad?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué estrategias de expansión de mercado pueden aplicarse para gestionar el crecimiento sostenible?</p>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                            data-mdb-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseSix">
                                            <i class="fa-duotone fa-solid fa-calendar-days me-2"></i><b>Semana 6:</b>&nbsp;Storytelling para Negocios</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse main-bg-color-grey"
                                        aria-labelledby="headingSix">
                                        <div class="accordion-body">
                                            <p class="text-muted">
                                            En esta semana, se discutirá la importancia del storytelling en los negocios, aprendiendo a contar la historia del negocio de manera efectiva para captar la atención y persuadir a los interesados.
                                            </p>
                                            <p class="text-muted">
                                                <h6>Preguntas de discusión:</h6>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Qué elementos hacen que una historia sea efectiva y persuasiva en un contexto de negocios?</p>
                                                <p class="m-2 text-muted mb-1"><i class="fas fa-question-circle"></i> ¿Cómo puede el storytelling mejorar la comunicación de la propuesta de valor de un negocio?</p>

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