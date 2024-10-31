<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= $ico ?>"><!-- ./assets/img/favicon.png -->
    <title>
        ESCE | <?= $ia_titulo_03 ?>
    </title>
    <?php include './sections/page-sections/ref-header.php' ?>
</head>

<body class="case-study bg-gray-200">
    <div class="container position-absolute z-index-sticky top-0 mb-2 mb-sm-0 mb-md-0 mb-lg-0">
        <div class="row">
            <div class="col-12" data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
                <?php include './sections/page-sections/nav-bar-3.php' ?>
            </div>
        </div>
    </div>
    <header class="fadeIn1"
        style="background: url('./assets/img/hero/hero-card-01.png') no-repeat center center;background-size: cover;background-image: linear-gradient(var(--main-bg-color-dark), rgba(0, 123, 255, 0.1)), url('<?= $img_ia_03 ?>');"
        data-aos="flip-up" data-aos-duration="1000" data-aos-delay="300">
        <div class="page-header min-vh-100 text-color-grey" loading="lazy">
            <span class="mask opacity-4"></span>
            <div class="container">
                <div class="row p-3">
                    <div
                        class="col-lg-8 col-md-12 d-flex justify-content-center text-md-start text-center flex-column mt-sm-0 mt-7">
                        <h6 class="mb-1 text-white fadeIn2 fadeInBottom"><?= $ia_subtitulo_03 ?></h6>
                        <h1 class="text-white fadeIn2 fadeInBottom"><?= $ia_titulo_03 ?></b>
                        </h1>
                        <div class="buttons fadeIn3 fadeInBottom">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <p class="text-white">
                                        <?= $ia_contenido_03 ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-lg-block d-sm-none">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-5">
        <section id="info">
            <div class="row align-content-center">
                <div class="col-12 col-lg-8">
                    <h6>DATOS DEL CURSO</h6>
                    <p>
                        Este curso online de dos horas está diseñado para profesionales que trabajan en la gestión de
                        organizaciones y emprendedores que buscan utilizar la inteligencia artificial para identificar
                        oportunidades estratégicas y mejorar el rendimiento de sus empresas. A través de un enfoque
                        práctico, aprenderás a utilizar herramientas de análisis de datos para detectar patrones clave
                        que te permitirán formular estrategias accionables y adaptarte a un entorno empresarial dinámico
                        y competitivo. El curso se enfoca en problemas reales, brindando soluciones inmediatas y
                        aplicables a tu contexto laboral.
                    </p>

                    <h3 style="font-weight: normal !important;">Próximas ediciones y precios</h3>
                    <hr class="w-100 main-bg-color-danger mb-0" style="height: 6px;">
                    <div class="card mb-5">
                        <div class="card-body">
                            <table class="table text-start mb-0">
                                <tr>
                                    <td colspan="1"><strong>01 de noviembre de 2024</stron>
                                    </td>
                                    <td><strong>Edición Online</st>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="table table-sm">
                                            <tr>
                                                <td>
                                                    <strong>Formato:</strong>
                                                    <p>Online</p>
                                                </td>
                                                <td>
                                                    <strong>Idioma:</strong>
                                                    <p>Español</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <strong>Agenda:</strong>
                                        <p>5 semanas<br>
                                            1 sesión vivo semanal</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 p-5">
                    <h3 style="font-weight: normal !important;">Características del programa</h3>

                    <h6>Área:</h6>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, accusantium.</p>

                    <h6>Nivel Lorem, ipsum dolor:</h6>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, accusantium.</p>

                    <h6>Años de experiencia:</h6>
                    <p class="mb-1"><i class="fas fa-star text-color-warning"></i> 1 - 3</p>
                    <p class="mb-1"><i class="fas fa-star text-color-warning"></i><i
                            class="fas fa-star text-color-warning"></i> 3 - 5</p>
                    <p class="mb-3"><i class="fas fa-star text-color-warning"></i><i
                            class="fas fa-star text-color-warning"></i><i class="fas fa-star text-color-warning"></i> +5
                    </p>

                    <h6>Precio:</h6>
                    <h2 class="">S/. 180.00</h2>

                    <strong class="text-color-warning mb-5"><i class="fas fa-info-circle"></i> Incluye acceso al
                        material del curso, así como recursos adicionales para implementar lo aprendido en el entorno
                        laboral.</strong>

                    <h3 class="mt-5" style="font-weight: normal !important;">Contacto</h3>
                    <p>Lorem, ipsum dolor.</p>
                    <p class="mb-1"><b>Correo:</b>&nbsp;<strong class="text-color-danger"><?= $esce_correo ?></strong>
                    </p>
                    <p><b>Teléfono:&nbsp;</b><strong class="text-color-danger"><?= $wsp ?></strong></p>
                </div>
            </div>
        </section>

        <section id="question" class="mb-7">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <h3 style="font-weight: normal !important;">¿Cómo utilizar la inteligencia artificial para
                        identificar oportunidades estratégicas y mejorar el rendimiento empresarial?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam no Quis not ut laoreet.Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat.</p>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="<?= $img_ia_03 ?>" class="w-100 h-100" alt="">
                </div>
            </div>
        </section>

        <section id="info-academica">
            <div class="row">
                <div class="col-12 col-lg-6 mx-auto">
                    <div class="row">
                        <div class="col-12">
                            <h3 style="font-weight: normal !important;">Información académica</h3>
                            <h4 style="font-weight: normal !important;">Estructura de programa</h4>
                            <p>8 semanas, 5 unidades didácticas</p>
                            <h4 style="font-weight: normal !important;">Contenido</h4>
                            <p>Asignaturas y descripción:</p>
                            <blockquote class="blockquote p-3 mb-3 border-start border-warning border-3 mb-7">
                                <p>
                                    <i class="fas fa-check text-color-warning"></i> Introducción a la inteligencia
                                    artificial
                                    aplicada a la gestión: Conceptos básicos
                                    de IA y su aplicación en la toma de decisiones estratégicas.
                                </p>
                                <p>
                                    <i class="fas fa-check text-color-warning"></i> Análisis de datos y reconocimiento
                                    de
                                    patrones estratégicos: Cómo utilizar herramientas de IA para identificar patrones
                                    relevantes y oportunidades de negocio en datos empresariales.
                                </p>
                                <p><i class="fas fa-check text-color-warning"></i> Transformación de insights en
                                    acciones
                                    estratégicas: Proceso de convertir los datos en estrategias prácticas y efectivas
                                    para tu organización o emprendimiento.</p>
                                <p><i class="fas fa-check text-color-warning"></i> Resolución de problemas prácticos:
                                    Casos
                                    reales donde los participantes aplicarán IA para identificar oportunidades y
                                    formular estrategias.</p>
                                <!--<footer class="blockquote-footer mt-2">
                                    Steve Jobs <cite title="Source Title">en su discurso de Stanford</cite>
                                </footer>-->
                            </blockquote>

                            <h3 style="font-weight: normal !important;">Objetivos del curso</h3>
                            <p><i class="fas fa-check text-color-warning"></i> Identificar patrones clave en los datos
                                utilizando inteligencia artificial para descubrir oportunidades estratégicas en tu
                                empresa o proyecto.</p>
                            <p><i class="fas fa-check text-color-warning"></i> Desarrollar estrategias accionables
                                basadas en insights obtenidos mediante el análisis de datos, mejorando la toma de
                                decisiones y optimizando los resultados.</p>

                            <h3 class="mt-7" style="font-weight: normal !important;">¿A quién va dirigido?</h3>
                            <p>
                                Este curso está dirigido a profesionales que trabajan en áreas de gestión dentro de
                                organizaciones y a emprendedores que deseen aprovechar la inteligencia artificial para
                                identificar nuevas oportunidades de negocio y mejorar su competitividad. Ideal para
                                aquellos que buscan aplicar el análisis de datos y las nuevas tecnologías para resolver
                                problemas estratégicos en sus empresas.
                            </p>

                            <img src="./assets/img/equipo/publico.png" class="w-100 mt-5" alt="">

                            <h3 class="mt-7" style="font-weight: normal !important;">Metodología</h3>
                            <p>
                                El curso tiene un enfoque totalmente práctico, diseñado para aplicar directamente las
                                herramientas de inteligencia artificial en la resolución de problemas de gestión. Los
                                participantes se enfrentarán a casos reales, donde podrán identificar oportunidades
                                estratégicas mediante el análisis de datos.
                            </p>

                            <div class="info-horizontal d-flex align-items-center mb-1">
                                <i class="material-icons opacity-10">check_circle</i>
                                <div class="description ps-3">
                                    <p class="mb-0"><b>Casos prácticos:</b> Ejercicios aplicados a problemas
                                        empresariales reales.</p>
                                </div>
                            </div>

                            <div class="info-horizontal d-flex align-items-cente mb-1r">
                                <i class="material-icons opacity-10">check_circle</i>
                                <div class="description ps-3">
                                    <p class="mb-0"><b>Foros de discusión: </b> Espacios de interacción y reflexión
                                        sobre las soluciones propuestas.</p>
                                </div>
                            </div>

                            <div class="info-horizontal d-flex align-items-center">
                                <i class="material-icons opacity-10">check_circle</i>
                                <div class="description ps-3">
                                    <p class="mb-0"><b>Simulación de problemas: </b> Definición de problemas simulados y
                                        una guía sobre cómo abordarlos para encontrar una solución.</p>
                                </div>
                            </div>

                            <h3 class="mt-7" style="font-weight: normal !important;">Coste y financiación</h3>
                            <p class="mb-1">Precio del curso: <strong>s/. 180.00</strong></p>
                            <strong class="text-color-warning mb-5"><i class="fas fa-info-circle"></i> Incluye acceso al
                                material del curso, así como recursos adicionales para implementar lo aprendido en el
                                entorno
                                laboral.</strong>

                            <img src="./assets/img/equipo/costo.png" class="w-100 mt-5" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="info-abc" class="text-color-white mt-7 mb-7">
            <div class="row main-bg-color-grey rounded rounded-15 mb-10">
                <div class="col-12 col-lg-5 m-0">
                    <img src="./assets/img/hero/hero-card-02.png" class="h-100 w-100 aos-init aos-animate" alt=""
                        data-aos="fade-right" data-aos-duration="1100" data-aos-delay="200">
                </div>
                <div class="col-12 col-lg-7 m-0 align-content-center align-items-center">
                    <div class="row p-6">
                        <div class="col-12 col-8 mx-auto">
                            <p class="mb-1 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="300">Lorem, ipsum.</p>
                            <h3 class="text-color-white aos-init aos-animate" data-aos="fade-up"
                                data-aos-duration="1200" data-aos-delay="300">Lorem ipsum dolor sit, amet consectetur adipisicing.</h3>
                            <p data-aos="fade-up" data-aos-duration="1250" data-aos-delay="350">Lorem ipsum dolor sit amet</p>
                            <p data-aos="fade-up" data-aos-duration="1300" data-aos-delay="400"
                                class="aos-init aos-animate">Lorem ipsum dolor sit ametLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                            <p data-aos="fade-up" data-aos-duration="1350" data-aos-delay="450" class="aos-init">
                                <a href="#"
                                    class="btn btn-warning main-bg-color-warning icon-move-right btn-rounded-20p mb-0">Descargar PDF <i class="fas fa-file-pdf text-xs ms-1" aria-hidden="true"></i></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>




    <?php include './sections/page-sections/footer-2.php' ?>

    <?php include './sections/page-sections/ref-scripts.php' ?>

</body>

</html>