<section class="">
    <div class="modal fade" id="project-1" tabindex="-1"
         aria-labelledby="project-1Label"
         aria-hidden="true"
         data-mdb-backdrop="static"
         data-mdb-keyboard="false">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title color-institucional-1 text-uppercase" id="project-1Label"><?= $titulo_curso_01 ?></h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Section: Design Block -->
                    <section>

                        <div class="row gx-lg-5 align-items-center">
                            <div class="col-lg-5 mb-5 mb-lg-0">
                                <div class="bg-image ripple rounded-7 shadow-5-strong" data-mdb-ripple-init
                                     data-mdb-ripple-color="light">
                                    <img src="./img/curso-01/banner-sm.png" class="w-100" />
                                    <!--<a href="#!">
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
                                    </a>-->
                                </div>
                            </div>

                            <div class="col-lg-7 mb-4 mb-lg-0 h-100">

                                <!-- Pills navs -->
                                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a
                                                data-mdb-pill-init
                                                class="nav-link active"
                                                id="ex3-tab-1"
                                                href="#ex3-pills-1"
                                                role="tab"
                                                aria-controls="ex3-pills-1"
                                                aria-selected="true"
                                        >Información</a
                                        >
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a
                                                data-mdb-pill-init
                                                class="nav-link"
                                                id="ex3-tab-2"
                                                href="#ex3-pills-2"
                                                role="tab"
                                                aria-controls="ex3-pills-2"
                                                aria-selected="false"
                                        >Curriculum</a
                                        >
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a
                                                data-mdb-pill-init
                                                class="nav-link"
                                                id="ex3-tab-3"
                                                href="#ex3-pills-3"
                                                role="tab"
                                                aria-controls="ex3-pills-3"
                                                aria-selected="false"
                                        >Bonus</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a
                                                data-mdb-pill-init
                                                class="nav-link"
                                                id="ex3-tab-4"
                                                href="#ex3-pills-4"
                                                role="tab"
                                                aria-controls="ex3-pills-4"
                                                aria-selected="false"
                                        >Recursos</a>
                                    </li>
                                </ul>
                                <!-- Pills navs -->

                                <!-- Pills content -->
                                <div class="tab-content" id="ex2-content">

                                    <!-- Informacion -->
                                    <div class="tab-pane fade show active" id="ex3-pills-1" role="tabpanel" aria-labelledby="ex3-tab-1">
                                        <div class="accordion accordion-borderless" id="accordionFlushExampleX">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOneX">
                                                    <button data-mdb-collapse-init class="accordion-button text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseOneX" aria-expanded="true" aria-controls="flush-collapseOneX">
                                                        <i class="fas fa-laptop"></i>&nbsp;&nbsp;Modalidad
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOneX" class="accordion-collapse collapse "
                                                     aria-labelledby="flush-headingOneX" data-mdb-parent="#accordionFlushExampleX">
                                                    <div class="accordion-body">
                                                        <code>100% Virtual</code>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwoX">
                                                    <button data-mdb-collapse-init class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseTwoX" aria-expanded="false" aria-controls="flush-collapseTwoX">
                                                        <i class="fas fa-chart-line"></i>&nbsp;&nbsp;¿Cuáles son los objetivos del curso?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwoX" class="accordion-collapse collapse" aria-labelledby="flush-headingTwoX"
                                                     data-mdb-parent="#accordionFlushExampleX">
                                                    <div class="accordion-body">
                                                        <i class="fas fa-check-circle text-warning"></i> Aprender sobre las acciones de monitoreo de los proyectos de desarrollo social, basadas en la gestión basada en resultados (GBR).<br>
                                                        <i class="fas fa-check-circle text-warning"></i> Comprender qué es una cadena de resultados y cómo se formulan las declaraciones de
                                                        resultado de los programas y proyectos sociales.<br>
                                                        <i class="fas fa-check-circle text-warning"></i> Aprender a formular indicadores sociales adecuados en el marco de la GBR, identificando la
                                                        tipología correcta según su ámbito de medición, desempeño o naturaleza.<br>
                                                        <i class="fas fa-check-circle text-warning"></i> Conocer los principios de la validación técnica de los indicadores sociales, utilizando los
                                                        atributos CREMA, características complementarias, ficha del indicador y cantidad adecuada.<br>
                                                        <i class="fas fa-check-circle text-warning"></i> Comprender los elementos clave de los cinco componentes de un marco integral de monitoreo y evaluación (M&E), para su construcción personalizada utilizando las plantillas disponibles.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThreeX">
                                                    <button data-mdb-collapse-init class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseThreeX" aria-expanded="false" aria-controls="flush-collapseThreeX">
                                                        <i class="fas fa-check-double"></i>&nbsp;&nbsp;Requisitos
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThreeX" class="accordion-collapse collapse" aria-labelledby="flush-headingThreeX"
                                                     data-mdb-parent="#accordionFlushExampleX">
                                                    <div class="accordion-body">
                                                        Conocimientos básicos en Excel, Power BI y ¡muchas ganas de aprender!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingFourX">
                                                    <button data-mdb-collapse-init class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseFourX" aria-expanded="false" aria-controls="flush-collapseFourX">
                                                        <i class="fas fa-users"></i>&nbsp;&nbsp;Público objetivo
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseFourX" class="accordion-collapse collapse" aria-labelledby="flush-headingFourX"
                                                     data-mdb-parent="#accordionFlushExampleX">
                                                    <div class="accordion-body">
                                                        <strong>Este curso está dirigido a personas interesadas en la gestión de proyectos sociales</strong>. Está abierto a estudiantes y profesionales de ciencias sociales, así como a trabajadores del sector público y privado que trabajan en proyectos de desarrollo social. También está orientado a cualquier persona que quiera aprender sobre la gestión de proyectos sociales desde cero.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end Informacion -->

                                    <!-- Curriculum -->
                                    <div class="tab-pane fade" id="ex3-pills-2" role="tabpanel" aria-labelledby="ex3-tab-2">
                                        <div class="accordion accordion-borderless" id="accordionFlushExampleX-c1">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOneX-c1">
                                                    <button data-mdb-collapse-init class="accordion-button text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseOneX-c1" aria-expanded="true" aria-controls="flush-collapseOneX-c1">
                                                        <i class="fas fa-play"></i>&nbsp;&nbsp;Introducción
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOneX-c1" class="accordion-collapse collapse "
                                                     aria-labelledby="flush-headingOneX-c1" data-mdb-parent="#accordionFlushExampleX-c1">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li><a href="./view-course.php?id=1" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> Introducción</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwoX-c1">
                                                    <button data-mdb-collapse-init class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseTwoX-c1" aria-expanded="false" aria-controls="flush-collapseTwoX-c1">
                                                        <i class="fas fa-play"></i>&nbsp;&nbsp;Módulo 01
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwoX-c1" class="accordion-collapse collapse" aria-labelledby="flush-headingTwoX-c1"
                                                     data-mdb-parent="#accordionFlushExampleX-c1">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li><a href="./view-course.php?id=2" target="_blank"  class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> Clase 01: ¿En qué consiste la gestión basada en resultados (GbR)?</a></li>
                                                            <li><a href="./view-course.php?id=3" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 02: Modelo lógico de los sistemas de monitoreo y evaluación</a></li>
                                                            <li><a href="./view-course.php?id=4" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 03: Errores habituales en la aplicación de la GbR</a></li>
                                                            <li><a href="./view-course.php?id=5" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 04: Monitoreo en el marco de la GbR</a></li>
                                                            <li><a href="./view-course.php?id=6" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 05: Pasos fundamentales del monitoreo de los resultados - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=7" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 06: Pasos fundamentales del monitoreo de los resultados - Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=8" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Concluciones Módulo 01</a></li>
                                                            <li><a href="https://forms.gle/pyxzpJxZmeQnC9PT8" target="_blank"  class="nav-link"><i class="fa-solid fa-pen text-warning"></i> Test fin de módulo 01</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThreeX-c1">
                                                    <button data-mdb-collapse-init class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseThreeX-c1" aria-expanded="false" aria-controls="flush-collapseThreeX-c1">
                                                        <i class="fas fa-play"></i>&nbsp;&nbsp;Módulo 02
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThreeX-c1" class="accordion-collapse collapse" aria-labelledby="flush-headingThreeX-c1"
                                                     data-mdb-parent="#accordionFlushExampleX-c1">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li><a href="./view-course.php?id=9" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 01: Cadena de resultados - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=10" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 02: Cadena de resultados - Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=11" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 03: Indicadores en la gestión de resultados- Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=12" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 04: Indicadores en la gestión de resultados- Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=13" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 05:  Formulación de indicadores – Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=14" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 06:  Formulación de indicadores – Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=15" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 07:  Formulación de indicadores – Parte 3</a></li>
                                                            <li><a href="./view-course.php?id=16" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 08:  Formulación de indicadores – Parte 4</a></li>
                                                            <li><a href="./view-course.php?id=17" target="_blank"  class="nav-link"><i class="fa-solid fa-video text-warning"></i> Concluciones Módulo 02</a></li>
                                                            <li><a href="https://forms.gle/WfmhASHvmU73Qjj56" target="_blank"  class="nav-link"><i class="fa-solid fa-pen text-warning"></i> Test fin de módulo 02</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingFourX-c1">
                                                    <button data-mdb-collapse-init class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseFourX-c1" aria-expanded="false" aria-controls="flush-collapseFourX-c1">
                                                        <i class="fas fa-play"></i>&nbsp;&nbsp;Módulo 03
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseFourX-c1" class="accordion-collapse collapse" aria-labelledby="flush-headingFourX-c1"
                                                     data-mdb-parent="#accordionFlushExampleX-c1">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li><a href="./view-course.php?id=18" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 01: Matriz de indicadores - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=19" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 02: Matriz de indicadores - Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=20" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 03: Flujo de datos - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=21" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 04: Flujo de datos - Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=22" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 05: Rastreador de indicadores</a></li>
                                                            <li><a href="./view-course.php?id=23" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 06: Estrategia de comunicación/ Cronograma de informes</a></li>
                                                            <li><a href="./view-course.php?id=24" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 07:  Plan y presupuesto de actividades</a></li>
                                                            <li><a href="./view-course.php?id=25" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Concluciones Módulo 03</a></li>
                                                            <li><a href="https://forms.gle/RLj7XuLrmm8VstrU9;" class="nav-link"><i class="fa-solid fa-pen text-warning"></i> Test fin de módulo 03</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingFiveX-c1">
                                                    <button data-mdb-collapse-init class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseFiveX-c1" aria-expanded="false" aria-controls="flush-collapseiverX-c1">
                                                        <i class="fas fa-play"></i>&nbsp;&nbsp;Módulo 04
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseFiveX-c1" class="accordion-collapse collapse" aria-labelledby="flush-headingFiveX-c1"
                                                     data-mdb-parent="#accordionFlushExampleX-c1">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li><a href="./view-course.php?id=29" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 01: Elaboración de la matriz de marco lógico y de indicadores - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=30" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 02: Elaboración de la matriz de marco lógico y de indicadores - Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=31" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 03: Elaboración del rastreador de indicadores - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=32" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 04: Elaboración del rastreador de indicadores - Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=33" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 05: Elaboración del rastreador de indicadores - Parte 3</a></li>
                                                            <li><a href="./view-course.php?id=34" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 06: Elaboración del rastreador de indicadores - Parte 4</a></li>
                                                            <li><a href="./view-course.php?id=35" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 07: Elaboración del plan de actividades - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=36" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 08: Elaboración del plan de actividades - Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=37" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 09: Elaboración del presupuesto de actividades - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=26" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 10: Elaboración del presupuesto de actividades - Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=27" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 11: Monitoreo programático y financiero del proyecto - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=28" target="_blank" class="nav-link"><i class="fa-solid fa-video text-warning"></i> Clase 12: Monitoreo programático y financiero del proyecto - Parte 2</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end Curriculum -->

                                    <!-- Bonus -->
                                    <div class="tab-pane fade" id="ex3-pills-3" role="tabpanel" aria-labelledby="ex3-tab-3">
                                        <div class="accordion accordion-borderless" id="accordionFlushExampleX-c2">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOneX-c2">
                                                    <button data-mdb-collapse-init class="accordion-button text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseOneX-c2" aria-expanded="true" aria-controls="flush-collapseOneX-c2">
                                                        <i class="fas fa-check-circle"></i>&nbsp;&nbsp;BONUS 1
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOneX-c2" class="accordion-collapse collapse "
                                                     aria-labelledby="flush-headingOneX-c2" data-mdb-parent="#accordionFlushExampleX-c2">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li><a href="./view-course.php?id=39" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 1 - Marco MyE en Power BI - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=40" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 1 - Marco MyE en Power BI - Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=41" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i>BONUS 1 - Marco MyE en Power BI - Parte 3 </a></li>
                                                            <li><a href="./view-course.php?id=42" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 1 - Marco MyE en Power BI - Parte 4</a></li>
                                                            <li><a href="./view-course.php?id=43" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 1 - Marco MyE en Power BI - Parte 5</a></li>
                                                            <li><a href="./view-course.php?id=44" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 1 - Marco MyE en Power BI - Parte 6</a></li>
                                                            <li><a href="./view-course.php?id=45" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 1 - Marco MyE en Power BI - Parte 7</a></li>
                                                            <li><a href="./view-course.php?id=46" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 1 - Marco MyE en Power BI - Parte 8</a></li>
                                                            <li><a href="./view-course.php?id=47" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 1 - Marco MyE en Power BI - Parte 9</a></li>
                                                            <li><a href="./view-course.php?id=48" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 1 - Marco MyE en Power BI - Parte 10</a></li>
                                                            <li><a href="./view-course.php?id=49" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 1 - Marco MyE en Power BI - Parte 11</a></li>
                                                            <li><a href="./view-course.php?id=50" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 1 - Marco MyE en Power BI - Parte 12</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwoX-c2">
                                                    <button data-mdb-collapse-init class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseTwoX-c2" aria-expanded="false" aria-controls="flush-collapseTwoX">
                                                        <i class="fas fa-check-circle"></i>&nbsp;&nbsp;BONUS 2
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwoX-c2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwoX-c2"
                                                     data-mdb-parent="#accordionFlushExampleX-c2">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li><a href="./view-course.php?id=51" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 2 - Herramienta de complejidad de proyectos - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=52" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 2 - Herramienta de complejidad de proyectos - Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=53" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 2 - Herramienta de complejidad de proyectos - Parte 3</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThreeX-c2">
                                                    <button data-mdb-collapse-init class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseThreeX-c2" aria-expanded="false" aria-controls="flush-collapseThreeX-c2">
                                                        <i class="fas fa-check-circle"></i>&nbsp;&nbsp;BONUS 3
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThreeX-c2" class="accordion-collapse collapse" aria-labelledby="flush-headingThreeX-c2"
                                                     data-mdb-parent="#accordionFlushExampleX-c2">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li><a href="./view-course.php?id=54" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 3 - Matriz de cálculo del tamaño de muestra</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingFourX-c2">
                                                    <button data-mdb-collapse-init class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseFourX-c2" aria-expanded="false" aria-controls="flush-collapseFourX-c2">
                                                        <i class="fas fa-check-circle"></i>&nbsp;&nbsp;BONUS 4
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseFourX-c2" class="accordion-collapse collapse" aria-labelledby="flush-headingFourX-c2"
                                                     data-mdb-parent="#accordionFlushExampleX-c2">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li><a href="./view-course.php?id=55" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 4 - TDR CHECKLIST - Parte 1</a></li>
                                                            <li><a href="./view-course.php?id=56" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 4 - TDR CHECKLIST - Parte 2</a></li>
                                                            <li><a href="./view-course.php?id=57" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 4 - TDR CHECKLIST - Parte 3</a></li>
                                                            <li><a href="./view-course.php?id=58" target="_blank" class="nav-link" style=""><i class="fa-solid fa-video text-warning"></i> BONUS 4 - TDR CHECKLIST - Parte 4</a></li>
                                                            <li><a href="./recursos/curso-1/videos/B-4/b4-TDR-checklist.xlsx" target="_blank" class="nav-link" style=""><i class="fas fa-file-excel text-success"></i> herramienta adicional de la herramienta llamada "TDR checklist"</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end Bonus -->

                                    <!-- Materiales -->
                                    <div class="tab-pane fade" id="ex3-pills-4" role="tabpanel" aria-labelledby="ex3-tab-4">
                                        <div class="accordion accordion-borderless" id="accordionFlushExampleX-c4">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOneX-c4">
                                                    <button data-mdb-collapse-init class="accordion-button text-uppercase" type="button" data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseOneX-c4" aria-expanded="true" aria-controls="flush-collapseOneX-c4">
                                                        <i class="fas fa-download"></i>&nbsp;&nbsp;DESCARGAS
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOneX-c4" class="accordion-collapse collapse show"
                                                     aria-labelledby="flush-headingOneX-c4" data-mdb-parent="#accordionFlushExampleX-c4">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li><a href="./recursos/curso-1/materiales.rar" target="_blank" class="nav-link" style=""><i class="fa-solid fa-download text-warning"></i> Materiales</a></li>
                                                            <li><a href="./recursos/curso-1/lecturas.rar" target="_blank" class="nav-link" style=""><i class="fa-solid fa-download text-warning"></i> Lecturas</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end Materiales -->
                                </div>

                                <!--<div class="d-flex align-items-start mb-5">
                                    <div class="flex-shrink-0">
                                        <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(204, 30%, 20%)">
                                            <i class="fas fa-laptop fa-lg text-white fa-fw"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <p class="fw-bold mb-1">Modalidad</p>
                                        <p class="text-muted mb-0">
                                            <code>100% Virtual</code>
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start mb-5">
                                    <div class="flex-shrink-0">
                                        <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(204, 30%, 20%)">
                                            <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <p class="fw-bold mb-1">¿Cuáles son los objetivos del curso?</p>
                                        <p class="text-muted mb-0">
                                            <i class="fas fa-check-circle"></i> Conocer y describir las acciones de monitoreo de los proyectos de desarrollo social a través de los fundamentos de la gestión basada en resultados (GBR).<br>
                                            <i class="fas fa-check-circle"></i> Comprender de forma clara qué es una cadena de resultados, y cómo se formulan las declaraciones de resultado de los programas y proyectos sociales.<br>
                                            <i class="fas fa-check-circle"></i> Aprender a formular de forma adecuada indicadores sociales en el marco de la (GbR), identificando la tipología correcta según su ámbito de medición, desempeño o naturaleza.<br>
                                            <i class="fas fa-check-circle"></i> Conocer los principios de la validación técnica de los indicadores sociales empleando los atributos CREMA, características complementarias, ficha del indicador y cantidad adecuada.<br>
                                            <i class="fas fa-check-circle"></i> Comprender los elementos clave de los cinco componentes de un marco integral de MyE para su construcción
                                            personalizada empleando las plantillas
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start mb-5">
                                    <div class="flex-shrink-0">
                                        <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(204, 30%, 20%)">
                                            <i class="fas fa-check-double fa-lg text-white fa-fw"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <p class="fw-bold mb-1">Requisitos</p>
                                        <p class="text-muted mb-0">
                                            Conocimientos básicos en Excel, Power BI y ¡muchas ganas de aprender!
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(204, 30%, 20%)">
                                            <i class="fas fa-users fa-lg text-white fa-fw"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <p class="fw-bold mb-1">Público objetivo</p>
                                        <p class="text-muted mb-0">
                                            <strong>Este curso está dirigido a estudiantes y/o profesionales de ciencias sociales o carreras afines, trabajadores del sector público y/o privado</strong>>, quienes laboran formulando e implementando proyectos de desarrollo social, así como a toda persona interesada en adentrarse desde lo básico al mundo de la gestión de los programas y proyectos sociales.
                                        </p>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </section>
                    <!-- Section: Design Block -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                            data-mdb-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</section>