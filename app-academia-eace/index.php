<?php include './includes.php' ?>
<!-- https://material-minimal.com/learn/design-process/user-experience/ -->
<!-- generar link de wsp: https://postcron.com/es/blog/landings/generador-de-enlaces-para-whatsapp/ -->
<!DOCTYPE html>
<html lang="es" data-mdb-theme="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Inicio | <?= $nombre_empresa ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="icon" href="./img/lg-lyceum.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <!--<link rel="stylesheet" href="../template-mdb5/css/pro.mdb.min.css" />-->
    <link rel="stylesheet" href="../template-mdb5/css/pro.mdb.min.css" />
    <!-- My Style -->
    <!--<link rel="stylesheet" href="../template-mdb5/css/style.css" />-->
    <!-- Local Style -->
    <link rel="stylesheet" href="../template-mdb5/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .carrusel {
            /*width: 300px;*/
            /* ajusta el ancho según tus necesidades */
            overflow: hidden;
        }

        .frases {
            /*padding: 20px;*/
            display: flex;
            flex-direction: column;
            height: 20px;
            min-height: 90px;
            transition: transform 1.0s ease-in-out;
        }

        /* Media query para móviles */
        @media only screen and (max-width: 600px) {
            .frases div .texto {
                font-size: 16px;
                /* ajusta el tamaño de fuente para móviles según tus necesidades */
            }
        }
    </style>
</head>

<body><!--  style="background-color: rgb(85, 108, 117) !important;" -->
    <!-- Start your project here-->
    <!--<section class="container">-->

    <div id="loading-overlay">
        <div class="spinner"></div>
    </div>

    <!--Main Navigation-->
    <header class="mb-10">

        <!-- Navbar -->
        <?php include './sections/nav-bar.php' ?>
        <!-- Navbar -->

        <section class="mb-8"></section>

        <div class="row" style="background-color: #E5E9EB !important;">
            <!-- Seperator -->
            <section class="mb-6"></section>

            <!-- Section initial -->
            <section id="wellcome" class="mb-xl-10 mb-4" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="100">
                <div class="container">
                    <div class="row gx-0">
                        <!-- First column -->
                        <!--<div class="col-lg-1 mb-5 mb-lg-0"></div>-->
                        <div class="col-lg-5 mb-5 mb-lg-0 text-lg-start text-sm-center text-white">
                            <div class="rounded-7 me-lg-n5" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="500">
                                <div class="p-lg-5 text-xl-start text-lg-start text-center">
                                    <h4 class="color-institucional-1">Gestiona tus proyectos sociales de manera simple, dinámica y orientada a resultados.</h4>
                                    <p class="h6 text-muted mb-3">
                                        Amplía tus conocimientos y habilidades en la gestión de proyectos de desarrollo y ayuda humanitaria mediante enfoques metodológicos innovadores y herramientas clave disponibles para ti. ¡Simplifica tu proceso de gestión y alcanza resultados impactantes!"
                                    </p>
                                    <section class="text-center mb-3">
                                        <div class="row" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="300">
                                            <div class="col-lg-4 col-md-6 mb-md-5 mb-lg-0 position-relative" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="500">
                                                <i data-mdb-animation-init data-mdb-animation-start="onHover" data-mdb-animation="tada" data-mdb-animation-reset="true" data-mdb-animation-initialized="true" style="animation-duration: 500ms;" class="fas fa-layer-group fa-2x color-institucional-1 mb-2"></i>
                                                <h6 class="fw-normal mb-0 text-muted">Cursos</h6>
                                                <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 mb-md-0 position-relative" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="900">
                                                <i data-mdb-animation-init data-mdb-animation-start="onHover" data-mdb-animation="tada" data-mdb-animation-reset="true" data-mdb-animation-initialized="true" style="animation-duration: 500ms;" class="fa-solid fa-user-check fa-2x color-institucional-1 mb-2"></i>
                                                <h6 class="fw-normal mb-0 text-muted">Asesorías</h6>
                                                <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 mb-md-0 position-relative" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="1100">
                                                <i data-mdb-animation-init data-mdb-animation-start="onHover" data-mdb-animation="tada" data-mdb-animation-reset="true" data-mdb-animation-initialized="true" style="animation-duration: 500ms;" class="fa-solid fa-users fa-2x color-institucional-1 mb-2"></i>
                                                <h6 class="fw-normal mb-0 text-muted">Comunidad</h6>
                                            </div>



                                        </div>
                                    </section>
                                    <p class="text-center">
                                        <a class="btn btn-institucional-1 btn-lg btn-rounded align-sm-center" href="#about-me" role="button" data-mdb-ripple-init>Empecemos<i class="fas fa-angle-down ms-2"></i></a>
                                    </p>

                                </div>
                            </div>

                        </div>
                        <!-- First column -->

                        <!--<div class="col-1"></div>-->

                        <!-- Second column -->
                        <div class="col-lg-7 mb-5 mb-lg-0 align-items-end align-content-end" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                            <div class="bg-image hover-overlay rounded-7 shadow-0" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200" data-mdb-animation-offset="300">
                                <img src="./img/home-banner-01.png" class="px-5 w-100" alt="" />
                                <div class="" style="background: linear-gradient(
                                       45deg,
                                       hsla(169, 84.5%, 52%, 0.3),
                                       hsla(263, 87.7%, 44.7%, 0.3) 100%
                                       )">
                                </div>
                            </div>
                        </div>
                        <!-- Second column -->

                    </div>

                </div>

            </section>
            <!-- end Section initial -->
        </div>

        <div class="row">
            <!-- Carousel wrapper -->
            <div class="carrusel btn-institucional-1">
                <div class="frases col-12 text-center">

                    <div class="col-12 mt-xl-3 mt-0">
                        <h5>"La educación es el arma más poderosa que puedes usar para cambiar el mundo."</h5>
                        <p><strong>Nelson Mandela</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0">
                        <h5>"La educación no es preparación para la vida; la educación es la vida en sí misma."</h5>
                        <p><strong>John Dewey</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0">
                        <h5>"El conocimiento es poder."</h5>
                        <p><strong>Francis Bacon</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-3">
                        <h5>"Lo que el hombre no conoce, no lo posee." </h5>
                        <p><strong>Johann Wolfgang von Goethe</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0 mb-1">
                        <h5>"El que no lee, a los 70 años habrá vivido solo una vida; el que lee, habrá vivido 5000."</h5>
                        <p><strong>Umberto Eco</strong></p>
                    </div>

                    <div class="col-12 mt-xl-3 mb-xl-0 mt-0 mb-4">
                        <h5>"La mejor manera de predecir el futuro es crearlo."</h5>
                        <p><strong>Abraham Lincoln</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0">
                        <h5>"El aprendizaje nunca se agota."</h5>
                        <p><strong>Leonardo da Vinci</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mb-xl-0 mt-2 mb-2">
                        <h5>"La curiosidad es la mecha del aprendizaje."</h5>
                        <p><strong>William Arthur Ward</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0">
                        <h5 class="texto">"No se puede enseñar a alguien nada, solo se le puede ayudar a que lo descubra por sí mismo."</h6>
                            <p><strong>Galileo Galilei</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0 mb-0">
                        <h5>"La mente es como un paracaídas, solo funciona si se abre."</h5>
                        <p><strong>Albert Einstein</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0 mb-0">
                        <h5 class="texto">"La educación es lo que queda después de que uno ha olvidado todo lo que ha aprendido en la escuela."</h5>
                        <p><strong>Albert Einstein</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0">
                        <h5 class="texto">"No es la cantidad de conocimiento lo que importa, sino la profundidad de la comprensión."</h6>
                            <p><strong>Confucio</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0">
                        <h5 class="texto">"El que aprende y aprende y no practica lo que aprende, es como el que ara y ara y no siembra."</h5>
                        <p><strong>Anónimo</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0">
                        <h5 class="texto">"El secreto de la educación es enseñar a los demás a pensar por sí mismos."</h5>
                        <p><strong>Albert Einstein</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0">
                        <h5>"La educación es el progreso. El conocimiento es la libertad."</h5>
                        <p><strong>Proverbio árabe</strong></p>
                    </div>
                    <div class="col-12 mt-xl-3 mt-0">
                        <h5 class="texto">Recuerda que el aprendizaje es un proceso continuo que dura toda la vida. ¡No dejes de aprender nunca!</h5>
                        <p><strong>-</strong></p>
                    </div>
                    <!--<span>1 frase</span>
                <span>2 frase</span>
                <span>3 frase</span>
                <span>4 frase</span>
                <span>5 frase</span>
                <span>6 frase</span>
                <span>7 frase</span>
                <span>8 frase</span>
                <span>9 frase</span>
                <span>10 frase</span>
                <span>11 frase</span>
                <span>12 frase</span>-->
                </div>
            </div>
            <!-- Carousel wrapper -->
        </div>


    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        <div class="container">

            <!-- Section: About me (Ok) -->
            <section id="about-me" class="mb-5">
                <div class="container">
                    <div class="row gx-0 align-items-center">
                        <!-- 1era column -->
                        <div class="col-lg-6 mb-5 mb-lg-0" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">
                            <div class="bg-image hover-overlay rounded-7">
                                <img src="./img/home-01.png" class="w-100" alt="" />
                                <div class="" style="background: linear-gradient(
                                       45deg,
                                       hsla(169, 84.5%, 52%, 0.3),
                                       hsla(263, 87.7%, 44.7%, 0.3) 100%
                                       )">
                                </div>
                            </div>
                        </div>
                        <!-- 1era column -->

                        <!-- 2da column -->
                        <div class="col-lg-6 mb-5 mb-lg-0 text-xl-start text-lg-start text-md-start text-center">
                            <div class="me-lg-n5" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                                <div class="p-lg-5">
                                    <h3 class="fw-bold color-institucional-1">
                                        <span class="">Accede a nuestra formación online de cursos, con herramientas vinculadas para una experiencia de aprendizaje enriquecida.</span>
                                    </h3>
                                    <hr class="container">
                                    <p class="text-muted mb-4">
                                        Ofrecemos formación específica en el campo de la gestión de programas y proyectos sociales, disponible 100% en línea para que puedas completarla dónde te encuentres y cuando lo desees. Nuestra plataforma incluye herramientas complementarias, sesiones prácticas y plantillas listas para ser utilizadas o adaptadas según tus necesidades específicas.
                                    </p>
                                    <a href="./courses.php" type="button" class="btn btn-institucional-1 btn-rounded" data-mdb-ripple-init>Empecemos <i class="fas fa-angle-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- First column -->
                    </div>
                </div>
            </section>
            <!-- End Section: About me -->

            <!-- Section: About me part-2 -->
            <section id="about-me-2" class="mb-5">
                <div class="container">
                    <div class="row gx-0 align-items-center">
                        <!-- First column -->
                        <div class="col-lg-6 mb-5 mb-lg-0 text-xl-start text-lg-start text-md-start text-center">
                            <div style="backdrop-filter: blur(30px);
                        z-index: 1;" class="rounded-7 me-lg-n5" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">
                                <div class="p-lg-5">
                                    <h2 class="fw-bold color-institucional-1">
                                        <span class="">¿Necesitas asesoría personalizada?</span>
                                    </h2>
                                    <hr class="container">
                                    <p class="text-muted mb-4">
                                        ¡Contáctanos y programa una cita con uno de nuestros profesionales capacitados! Te ofrecemos orientación individualizada para ayudarte en tu proceso de aprendizaje o para mejorar la gestión de tu proyecto, con un enfoque especializado en MEAL (monitoring, evaluation, accountability and learning)."
                                    </p>
                                    <!--<p class="text-primary">
                                    <strong>Es muy importante ser guiado por un nutricionista cuando estas en la búsqueda de mejorar tus hábitos alimenticios y estilo de vida, este cambio siempre debe ser progresivo y sostenible en el tiempo</strong>.
                                </p>-->
                                    <a href="https://api.whatsapp.com/send?phone=51902821901&text=Hola%20Álvaro!" target="_blank" type="button" class="btn btn-institucional-1 btn-rounded" data-mdb-ripple-init>Contáctanos <i class="fas fa-angle-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- First column -->

                        <!-- Second column -->
                        <div class="col-lg-6 mb-5 mb-lg-0" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                            <div class="bg-image hover-overlay rounded-7">
                                <img src="./img/home-02.png" class="w-100" alt="" />
                                <div class="" style="background: linear-gradient(
                                       45deg,
                                       hsla(169, 84.5%, 52%, 0.3),
                                       hsla(263, 87.7%, 44.7%, 0.3) 100%
                                       )">
                                </div>
                            </div>
                        </div>
                        <!-- Second column -->
                    </div>
                </div>
            </section>
            <!-- End Section: About me part-2 -->

            <!-- Section: About me part-3 -->
            <section id="about-me" class=" mb-xl-10 mb-lg-10 mb-sm-4">
                <div class="container">
                    <div class="row gx-0 align-items-center">
                        <!-- 1era column -->
                        <div class="col-lg-6 mb-5 mb-lg-0" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                            <div class="bg-image hover-overlay rounded-7">
                                <img src="./img/home-03.png" class="w-100" alt="" />
                                <div class="" style="background: linear-gradient(
                                       45deg,
                                       hsla(169, 84.5%, 52%, 0.3),
                                       hsla(263, 87.7%, 44.7%, 0.3) 100%
                                       )">
                                </div>
                            </div>
                        </div>
                        <!-- 1era column -->

                        <!-- 2da column -->
                        <div class="col-lg-6 mb-5 mb-lg-0 text-xl-start text-lg-start text-md-start text-center">
                            <div style="backdrop-filter: blur(30px);
                        z-index: 1;" class="rounded-7 me-lg-n5" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">
                                <div class="p-lg-5">
                                    <h2 class="fw-bold color-institucional-1">
                                        <span class="">Únete a nuestra comunidad</span>
                                    </h2>
                                    <hr class="container">
                                    <p class="text-muted mb-4">
                                        Al inscribirte en nuestros cursos, formarás parte de la comunidad de Lyceum Group. Disfruta de sesiones periódicas de retroalimentación donde podrás compartir experiencias y conocimientos con otros miembros. ¡Únete y sé parte de nuestra red de aprendizaje colaborativo!"
                                    </p>
                                    <!--<a href="./courses.php" type="button" class="btn btn-success btn-rounded">Emepcemos <i class="fas fa-angle-right"></i></a>-->
                                </div>
                            </div>
                        </div>
                        <!-- 2da column -->
                    </div>
                </div>

            </section>
            <!-- End Section: About me part-3 -->

            <!-- Section: Projects modals (Ok) -->
            <section class="">

                <!-- Modal project 1 -->


            </section>
            <!-- Section: Projects modals -->

        </div>
    </main>
    <!--</section>-->
    <?php include './modals/modal-restricted.php' ?>
    <?php include './modals/modal-register.php' ?>
    <!--Footer-->
    <?php include './sections/footer.php' ?>
    <!-- End Footer -->
</body>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- MDB -->
<script src="../template-mdb5/js/pro.mdb.umd.min.js"></script>
<!-- MyScripts -->
<script src="./js/scripts.js"></script>
<script src="./js/js_usuario.js"></script>
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