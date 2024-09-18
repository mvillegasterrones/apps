<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= $ico ?>"><!-- ./assets/img/favicon.png -->
    <title>
        ESCE | Nosotros
    </title>
    <?php include './sections/page-sections/ref-header.php' ?>
</head>

<body class="case-study bg-gray-200">
    <div class="container position-sticky z-index-sticky top-0 mb-10">
        <div class="row">
            <div class="col-12">
                <?php include './sections/page-sections/nav-bar-2.php' ?>
            </div>
        </div>
    </div>

    <div class="card card-body mb-7 shadow-xl mx-3 mx-md-7 mt-n6">

        <section class="py-md-2 mb-7 px-lg-5 pb-5">
            <div class="container">
            <h2 class="text-color-grey mb-5 mb-lg-7"><img src="<?= $ico ?>" class="w-5"> Nosotros</h2>
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3 class="mb-4 text-color-grey">Nuestro Propósito, Misión y Valores</h3>
                        <p class="">
                            Somos una organización enfocada en la educación superior centrada en valores que reflejan
                            nuestra aspiración de formar, no sólo egresados de éxito, sino además personas que sean
                            valiosas, efectivas y éticas para sus comunidades. Estos valores guían nuestras aspiraciones
                            de
                            desarrollo institucional de largo plazo, y son la base que orienta nuestra actividad para
                            servir
                            a la sociedad y a nuestros alumnos.
                            Diseñamos experiencias formativas para personas que necesitan trabajar para financiar sus
                            estudios en administración o gestión pública. Además, fomentamos el crecimiento empresarial
                            a
                            través de dinámicas de innovación, de investigación y de cambio tecnológico, que permitan a
                            las
                            empresas crecer, explorar nuevos mercados o fortalecer los ya existentes.
                        </p>
                        <p class="mb-4">
                            Particularmente nos interesa apoyar a las micro y pequeñas empresas que tanto necesitan
                            soportes
                            de conocimiento para seguir progresando. Dotar de herramientas para mejorar la productividad
                            y
                            la eficiencia de quienes trabajan en el sector público, a cualquier nivel, en nuestro país.
                        </p>

                        <h3 class="mb-4 text-color-grey">Nuestro Propósito</h3>
                        <p class="mb-4">
                            Ser una institución que promueve el desarrollo económico y social descentralizado a través
                            de la
                            formación de profesionales y la re-capacitación de personas que ya trabajan en todo el país.
                        </p>
                    </div>
                    <div class="col-lg-4 ms-auto mt-lg-0 mt-4 mb-lg-0 mb-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image">
                                    <img src="<?= $img_equipo_esce ?>" alt="img-colored-shadow"
                                        class="img-fluid border-radius-lg">
                                </a>
                                <div class="colored-shadow" style="background-image: url('<?= $img_equipo_esce ?>');">
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="font-weight-normal">
                                    <a href="javascript:;">Equipo ESCE</a>
                                </h5>
                                <p class="mb-0">
                                    Somos un equipo de expertos que ofrece cursos y certificaciones en ciencias
                                    empresariales y gestión pública, combinando teoría y práctica para desarrollar
                                    habilidades clave y potenciar el crecimiento profesional.
                                </p>
                                <!--<button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out
                                    more</button>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                    <h3 class="mb-4 text-color-grey">Nuestra Misión</h3>
                    <p class="mb-4">
                        Formar alumnos con creatividad, pensamiento crítico, comunicación efectiva y conciencia
                        ética,
                        que les permita mejorar sus oportunidades de empleo en la empresa privada, construir la
                        empresa
                        que siempre aspiraron tener, o contribuir en la administración pública con un servicio
                        honesto y
                        de impacto positivo, tanto a nivel, local, regional como nacional.
                    </p>

                    <h3 class="mb-5">Nuestros Valores</h3>
                    <div class="col-lg-3 mb-5">
                        <div class="card-container">
                            <div class="card-flip">
                                <div class="card-front">
                                    <!--style="background-image: url('<?= $img_valores_v2_01 ?>') !important;opacity: 85%;"  -->
                                    <h4 class="p-3 text-color-white rounded rounded-15">Integridad</h4>
                                </div>
                                <div class="card-back">
                                    <p class="text-white opacity-8">
                                        <strong class="h3 text-white">Integridad</strong><br>
                                        Actuar con honestidad, coherencia y responsabilidad es esencial para
                                        construir confianza y credibilidad en todas nuestras relaciones.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <div class="card-container">
                            <div class="card-flip">
                                <div class="card-front">
                                    <!-- style="background-image: url('<?= $img_valores_v2_02 ?>') !important;opacity: 85%;"-->
                                    <h4 class="p-3 text-color-white rounded rounded-15">Solidaridad</h4>
                                </div>
                                <div class="card-back">
                                    <p class="text-white opacity-8">
                                        <strong class="h3 text-white">Solidaridad</strong><br>
                                        Más allá de la empatía, buscamos apoyar a quienes lo necesitan con un
                                        deseo
                                        genuino de impactar positivamente la vida de los demás.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <div class="card-container">
                            <div class="card-flip">
                                <div class="card-front">
                                    <!-- style="background-image: url('<?= $img_valores_v2_03 ?>') !important;opacity: 85%;"-->
                                    <h4 class="p-3 text-color-white rounded rounded-15">Resiliencia</h4>
                                </div>
                                <div class="card-back">
                                    <p class="text-white opacity-8">
                                        <strong class="h3 text-white">Resiliencia</strong><br>
                                        Mantenemos el esfuerzo y la determinación frente a los desafíos,
                                        trabajando
                                        con constancia hacia nuestros objetivos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                    <div class="col-lg-3 mb-5">
                        <div class="card-container">
                            <div class="card-flip">
                                <div class="card-front text-center">
                                    <!-- style="background-image: url('<?= $img_valores_v2_04 ?>') !important; background-size: cover;opacity: 85%;" -->
                                    <h4 class="text-center text-color-white p-3 rounded rounded-15">Respeto por la
                                        Naturaleza</h4>
                                </div>
                                <div class="card-back">
                                    <p class="text-white opacity-8">
                                        <strong class="h3 text-white">Respeto por la Naturaleza</strong><br>
                                        Valoramos y protegemos el medio ambiente, promoviendo una conducta
                                        sostenible y un compromiso con la conservación.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <div class="card-container shadow-lg">
                            <div class="card-flip">
                                <div class="card-front">
                                    <!-- style="background-image: url('<?= $img_valores_v2_05 ?>') !important;opacity: 85%;" -->
                                    <h4 class="text-center text-color-white p-3 rounded rounded-15">Sentido de
                                        pertenencia
                                        por el país</h4>
                                </div>
                                <div class="card-back">
                                    <p class="text-white opacity-8">
                                        <strong class="h3 text-white">Sentido de pertenencia por el país</strong><br>
                                        Nos sentimos orgullosos de nuestra nación, contribuyendo a su desarrollo y
                                        bienestar con compromiso y patriotismo
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <h2 class="text-xolor-grey text-center mb-8"><img src="<?= $ico ?>" class="w-5">Nuestro equipo</h2>

        <div class="card main-bg-color-white card-body mb-10 shadow-xl mx-3 mx-md-7 mt-n6 fade-in-up">
            <div class="" data-mdb-animation-init="" data-mdb-animation-reset="true"
                data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in"
                data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400"
                data-mdb-animation-initialized="true"
                style="visibility: visible; animation-delay: 400ms; animation-duration: 500ms;">
                <div class="card-content">
                    <div class="card-body text-start">
                        <!-- Cambia a un diseño en columna en pantallas pequeñas -->
                        <div class="d-flex flex-column flex-md-row justify-content-between mt-4 pt-1 mb-5">
                            <!-- Imagen arriba en pantallas pequeñas -->
                            <div class="flex-shrink-0 mb-4 mb-md-0">
                                <a href="#!">
                                <img class="rounded-5 shadow-4 w-100 h-auto img border-radius-md max-width-300 w-100 position-relative z-index-2 mt-n7"
                                        src="<?= $img_teams_01 ?>"
                                        alt="Generic placeholder image">
                                </a>
                            </div>
                            <!-- Texto abajo en pantallas pequeñas -->
                            <div class="flex-grow-1 ms-md-4 text-center text-md-start div-marca-agua">
                                <p class="mb-1">
                                    <strong><a href="#!" class="text-reset h4">Guido Pennano Alison</a></strong>
                                </p>
                                <p class="mb-1"><i>- Presidente Fundador</i></p>
                                <p class="text-muted text-start mb-1">
                                    ....
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card main-bg-color-white card-body mb-7 shadow-xl mx-3 mx-md-7 mt-n6">
            <div class="" data-mdb-animation-init="" data-mdb-animation-reset="true"
                data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in"
                data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400"
                data-mdb-animation-initialized="true"
                style="visibility: visible; animation-delay: 400ms; animation-duration: 500ms;">
                <div class="card-content">
                    <div class="card-body text-start">
                        <!-- Cambia a un diseño en columna en pantallas pequeñas -->
                        <div class="d-flex flex-column flex-md-row justify-content-between mt-4 pt-1 mb-5">
                            <!-- Imagen arriba en pantallas pequeñas -->
                            <div class="flex-shrink-0 mb-4 mb-md-0">
                                <a href="#!">
                                    <img class="rounded-5 shadow-4 w-100 h-auto img border-radius-md max-width-300 w-100 position-relative z-index-2 mt-n7"
                                        src="<?= $img_teams_02 ?>"
                                        alt="Generic placeholder image">
                                </a>
                            </div>
                            <!-- Texto abajo en pantallas pequeñas -->
                            <div class="flex-grow-1 ms-md-4 text-center text-md-start div-marca-agua">
                                <p class="mb-1">
                                    <strong><a href="#!" class="text-reset h4">José Ignacio Pineda Mendoza</a></strong>
                                </p>
                                <p class="mb-1"><i>- Miembro fundador de ESCE</i></p>
                                <p class="text-muted text-start mb-1">
                                    Cuenta con más de 20 años de
                                    experiencia
                                    en el sector de la educación superior. Ha enseñado cursos sobre innovación,
                                    emprendimiento y desarrollo sostenible en universidades de Perú y el Reino
                                    Unido.
                                    Además, ha desempeñado roles de liderazgo en universidades, donde se ha
                                    especializado en transformación organizacional, diseñando y ejecutando
                                    estrategias
                                    de turnaround y crecimiento, investigación aplicada de calidad y
                                    responsabilidad
                                    social. Su investigación se sitúa en la intersección de negocios,
                                    emprendimiento y
                                    desarrollo sostenible. Ha recibido un grant de la Academia Británica para
                                    explorar
                                    la Economía Circular en la Amazonía peruana, ha investigado el uso de
                                    tecnología
                                    digital entre emprendedores sociales para la Comisión Europea, y la creación
                                    de un
                                    sistema de innovación en salud en la ciudad de Manchester. Actualmente
                                    estudia los
                                    factores de éxito de emprendedores que logran resultados significativos con
                                    recursos
                                    escasos. Es PhD en Administración y Negocios por Alliance Manchester
                                    Business School
                                    de la Universidad de Manchester, MSc en Innovation and Entrepreneurship por
                                    la misma
                                    escuela de negocios, y economista de la Universidad del Pacífico.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include './sections/page-sections/footer.php' ?>

    <?php include './sections/page-sections/ref-scripts.php' ?>
</body>

</html>