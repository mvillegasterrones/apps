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
                <?php include './sections/page-sections/nav-bar.php' ?>
            </div>
        </div>
    </div>

    <div class="card card-body mb-7 shadow-xl mx-3 mx-md-7 mt-n6">
        <section class="py-md-2 px-lg-5 pb-5">
            <div class="container">
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-8">
                        <h2 class="mb-4 text-color-grey">NUESTRO PROPÓSITO, MISIÓN y VALORES</h2>
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

                        <h2 class="mb-4 text-color-grey">Nuestro Propósito</h2>
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
                    <h2 class="mb-4 text-color-grey">Nuestra Misión</h2>
                    <p class="mb-4">
                        Formar alumnos con creatividad, pensamiento crítico, comunicación efectiva y conciencia
                        ética,
                        que les permita mejorar sus oportunidades de empleo en la empresa privada, construir la
                        empresa
                        que siempre aspiraron tener, o contribuir en la administración pública con un servicio
                        honesto y
                        de impacto positivo, tanto a nivel, local, regional como nacional.
                    </p>
                    <h2 class="mb-5">Nuestros Valores</h2>
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
                                    <h4 class="text-center text-color-white p-3 rounded rounded-15">Respeto por la Naturaleza</h4>
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
                                    <h4 class="text-center text-color-white p-3 rounded rounded-15">Sentido de pertenencia
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
    </div>

    <?php include './sections/page-sections/footer.php' ?>

    <?php include './sections/page-sections/ref-scripts.php' ?>
</body>

</html>