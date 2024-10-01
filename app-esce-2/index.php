<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= $ico ?>"><!-- ./assets/img/favicon.png -->
    <title>
        ESCE | Home
    </title>
    <?php include './sections/page-sections/ref-header.php' ?>
</head>

<body class="case-study bg-gray-200">
    <div class="container position-sticky z-index-sticky top-0 mb-2 mb-sm-0 mb-md-0 mb-lg-0">
        <div class="row">
            <div class="col-12">
                <?php include './sections/page-sections/nav-bar-2.php' ?>
            </div>
        </div>
    </div>

    <header class="">
        <div class="page-header min-vh-100 text-color-grey" loading="lazy">
            <!--<span class="mask bg-gradient-primary opacity-1"></span>
            <span class="mask bg-gradient-warning text-color-grey opacity-5"></span>-->
            <span class="mask opacity-4"
                style="background: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 123, 255, 0)) !important;"></span>
            <div class="container">
                <div class="row p-3">
                    <div
                        class="col-lg-8 col-md-12 d-flex justify-content-center text-md-start text-center flex-column mt-sm-0 mt-7">
                        <h1 class="text-color-white rounded rounded-15 mb-0"><strong class="p-1 main-bg-color-warning"
                                style="border-radius:15px !important; font-size: 4rem;font-weight: lighter !important;">ESCE</strong>
                        </h1>
                        <h1 class="text-color-grey">Escuela de Ciencias Empresariales y Gestión Pública</h1>
                        <p
                            class="lead mt-0 mb-1 p-2 rounded rounded-15 blur pe-md-5 me-md-5 text-color-secondary opacity-8">
                            Capacitación y Certificación en Crecimiento
                            Empresarial.
                        </p>
                        <p
                            class="lead mt-0 mb-0 mb-1 p-2 rounded rounded-15 blur pe-md-5 me-md-5 text-color-secondary opacity-8">
                            Desarrolla tus habilidades y avanza en tu carrera
                            profesional.
                        </p>
                        <!--<p class="lead pe-md-5 me-md-5 text-white opacity-8">The time is now for it be okay to be great. People in
              this world shun people for being nice.</p>-->
                        <div class="buttons">
                            <a href="#section-cursos"><button type="button"
                                    class="btn bg-gradient-warning mt-4">Próximos cursos</button></a>
                            <!--<a href="<?= $ruta_nosotros ?>"><button type="button"
                                    class="btn main-bg-color-grey text-white shadow-none mt-4">Nosotros</button></a>-->
                        </div>
                    </div>
                    <div class="col-4 d-lg-block d-sm-none">
                        <img src="<?= $img_hero_main ?>" class="w-100 h-100 d-none d-lg-block" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-7 mt-n6 mb-4">

        <section class="py-md-7 pb-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="info">
                            <div
                                class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                                <i class="material-icons opacity-10">grid_view</i>
                            </div>
                            <h5 class="mt-3">Cursos</h5>
                            <p>Choose the best design system for your next product.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info">
                            <div
                                class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                                <i class="material-icons opacity-10">supervisor_account</i>
                            </div>
                            <h5 class="mt-3">Docentes</h5>
                            <p>Get the latest design ideas and turn it into reality.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info">
                            <div
                                class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                                <i class="material-icons opacity-10">group_add</i>
                            </div>
                            <h5 class="mt-3">Estudiantes</h5>
                            <p>Make your code easier to maintain using variables.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info">
                            <div
                                class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                                <i class="material-icons opacity-10">devices</i>
                            </div>
                            <h5 class="mt-3">Fully Responsive</h5>
                            <p>This design system is fully supported on any device.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- REGISTRATE CON TU EMAIL -->
        <section class="my-5 pt-5 main-bg-color-grey rounded rounded-15 text-color-white">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6 m-auto">
                        <h4 class="text-color-white">Sé el primero en ver nuestras noticias</h4>
                        <p class="mb-4">
                            Puede que no se encuentre registrado/a, pero eventualmente, ESCE te brinda excelentes
                            servicios y noticias las cuales te haremos llegar.
                        </p>
                        <div class="row">
                            <div class="col-8 mb-0">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Ingresa tu Email</label>
                                    <input type="text" class="form-control text-color-white mb-sm-0">
                                </div>
                            </div>
                            <div class="col-4 ps-0">
                                <button type="button"
                                    class="btn bg-gradient-warning mb-0 h-100 position-relative z-index-2">Suscribirme</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 ms-auto mt-5 mt-lg-0">
                        <div class="position-relative">
                            <img class="max-width-50 w-100 position-relative z-index-2 rounded rounded-15"
                                src="<?= $img_newletter ?>" alt="ESCE img_newletter">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- card card-body mb-7 shadow-xl mx-3 mx-md-4 mt-n6 -->

        <!-- PROXIMOS CURSOSO -->
        <section class="py-md-2 pb-5" id="section-cursos">
            <div class="container">

                <div class="row my-5">
                    <div class="col-md-10 mx-auto">
                        <h2 class="text-color-grey text-center">Próximos Cursos</h2>
                    </div>

                    <section>
                        <div class="container">
                            <div class="row mt-0">
                                <div class="gliderrr">
                                    <div data-glide-el="track" class="glide__track">
                                        <ul class="glide__slides">
                                            <li class="glide__slide">
                                                <div class="glide__container">
                                                    <div class="card bg-gradient-faded-danger card-carousel">
                                                        <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6c757d"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>-->
                                                        <img src="<?= $ico ?>" class="w-25 m-2 imagen-telon">
                                                        <div class="card-body text-center pb-0 position-relative">
                                                            <!--<img class="w-75 end-0 start-0 mx-auto top-0 mt-lg-n6 mt-n4 position-absolute"
                                                                src="<?= $img_hero_01 ?>" alt="amg-gt"
                                                                loading="lazy">-->
                                                            <h6 class="mt-6">CURSO 01</h6>
                                                            <p class="text-color-white">Descripción del curso 01</p>
                                                            <button type="button"
                                                                class="btn btn-sm btn-rounded btn-outline-dark icon-move-right">Ver
                                                                Curso <i class="fas fa-arrow-right text-xs ms-1"
                                                                    aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="glide__slide">
                                                <div class="glide__container">
                                                    <div class="card bg-gradient-faded-warning card-carousel">
                                                        <div class="card-body text-center pb-0 position-relative">
                                                            <!--<img class="w-75 end-0 start-0 mx-auto top-0 mt-lg-n6 mt-n4 position-absolute"
                                                                src="./assets/img/automotive/cls.png" alt="g-amg"
                                                                loading="lazy">-->
                                                            <img src="<?= $ico ?>" class="w-25 m-2 imagen-telon">
                                                            <h6 class="mt-6">CURSO 02</h6>
                                                            <p class="text-color-white">Descripción del curso 02</p>
                                                            <button type="button"
                                                                class="btn btn-sm btn-rounded btn-outline-dark icon-move-right">Ver
                                                                Curso <i class="fas fa-arrow-right text-xs ms-1"
                                                                    aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="glide__slide">
                                                <div class="glide__container">
                                                    <div class="card bg-gradient-faded-danger card-carousel">
                                                        <div class="card-body text-center pb-0 position-relative">
                                                            <!--<img class="w-75 end-0 start-0 mx-auto top-0 mt-lg-n6 mt-n4 position-absolute"
                                                                src="./assets/img/automotive/cls.png"
                                                                alt="s-mayback" loading="lazy">-->
                                                            <img src="<?= $ico ?>" class="w-25 m-2 imagen-telon">
                                                            <h6 class="mt-6">CURSO 03</h6>
                                                            <p class="text-color-white">Descripción del curso 03</p>
                                                            <button type="button"
                                                                class="btn btn-sm btn-rounded btn-outline-dark icon-move-right">Ver
                                                                Curso <i class="fas fa-arrow-right text-xs ms-1"
                                                                    aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="glide__slide">
                                                <div class="glide__container">
                                                    <div class="card bg-gradient-faded-warning card-carousel">
                                                        <div class="card-body text-center pb-0 position-relative">
                                                            <!--<img class="w-75 end-0 start-0 mx-auto top-0 mt-lg-n6 mt-n4 position-absolute"
                                                                src="./assets/img/automotive/cls.png" alt="glc"
                                                                loading="lazy">-->
                                                            <img src="<?= $ico ?>" class="w-25 m-2 imagen-telon">
                                                            <h6 class="mt-6">CURSO 04</h6>
                                                            <p class="text-color-white">Descripción del curso 04</p>
                                                            <button type="button"
                                                                class="btn btn-sm btn-rounded btn-outline-dark icon-move-right">Ver
                                                                Curso <i class="fas fa-arrow-right text-xs ms-1"
                                                                    aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="glide__slide">
                                                <div class="glide__container">
                                                    <div class="card bg-gradient-faded-danger card-carousel">
                                                        <div class="card-body text-center pb-0 position-relative">
                                                            <!--<img class="w-75 end-0 start-0 mx-auto top-0 mt-n4 position-absolute"
                                                                src="./assets/img/automotive/cls.png" alt="cls"
                                                                loading="lazy">-->
                                                            <img src="<?= $ico ?>" class="w-25 m-2 imagen-telon">
                                                            <h6 class="mt-6">CURSO 05</h6>
                                                            <p class="text-color-white">Descripción del curso 05</p>
                                                            <button type="button"
                                                                class="btn btn-sm btn-rounded btn-outline-dark icon-move-right">Ver
                                                                Curso <i class="fas fa-arrow-right text-xs ms-1"
                                                                    aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

            </div>
        </section>

        <!-- PARENDIZAJE RESUMIDO -->
        <section class="py-md-2 pb-5">
            <div class="container">

                <div class="row my-5">
                    <div class="col-md-10 mx-auto text-center">
                        <h2 class="text-color-grey text-center">Experiencia de Aprendizaje </h2>
                        <p class="">
                            <strong>La Escuela de Ciencias Empresariales y Gestión Pública</strong> ofrece un modelo de
                            aprendizaje diseñado para profesionales en activo, combinando el enfoque centrado en el ser
                            humano con la ciencia del aprendizaje. A través de la práctica y la aplicación de nuevos
                            conceptos, se desarrollan habilidades creativas para resolver problemas. Los cursos siguen
                            un ciclo de entender problemas, crear soluciones, colaborar, presentar resultados y
                            reflexionar, con un fuerte componente digital. Se ofrecen modalidades de cursos en línea,
                            blended y presenciales, complementadas con webinars, estudios de caso y proyectos finales
                            para aplicar lo aprendido en situaciones reales.
                        </p>
                    </div>
                </div>

                <div class="row">
                </div>
            </div>
        </section>

        <section id="section-docentes"
            class="py-3 mt-5 main-bg-color-secondary position-relative overflow-hidden rounded rounded-15">
            <img src="./assets/img/shapes/pattern-lines.svg"
                class="position-absolute opacity-2 w-100 top-0 d-md-block d-none" alt="avatar">
            <div class="container pt-6 pb-5 position-relative z-index-3">
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                        <span class="badge badge-white text-dark mb-2">Perfil de nuestros Docentes</span>
                        <h2 class="text-white mb-3">Nuestros Docentes</h2>
                        <h5 class="text-white font-weight-light">
                            Si eres seleccionado para ellos, también obtendrás tres entradas, la oportunidad de acceder
                            al horario de oficina del inversor y al horario de mentor y mucho más, todo de forma
                            gratuita.
                        </h5>
                    </div>
                </div>
                <div class="row mt-8">
                    <div class="col-md-4 mb-md-0 mb-7">
                        <div class="card">
                            <div class="text-center mt-n5 z-index-1">
                                <div class="position-relative">
                                    <div class="blur-shadow-avatar rounded-circle">
                                        <img class="avatar avatar-xxl shadow-lg" src="<?= $img_docente_01 ?>"
                                            alt="avatar">
                                    </div>
                                    <div class="colored-shadow rounded start-0 end-0 mx-auto avatar-xxl"
                                        style="background-image: url('<?= $img_docente_01 ?>"></div>
                                    <div class="colored-shadow start-0 end-0 mx-auto avatar-xxl"></div>
                                </div>
                            </div>
                            <div class="card-body text-center pb-0">
                                <h4 class="mb-0"><?= $docente_nombre_01 ?></h4>
                                <p><?= $docente_especialidad_01 ?></p>
                                <p class="mt-2">
                                    <?= $docente_descripcion_01 ?>
                                </p>
                            </div>
                            <div class="card-footer text-center pt-2">
                                <div class="mx-auto">
                                    <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>quote-down</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path
                                                d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z"
                                                fill="#48484A" fill-rule="nonzero"
                                                transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) ">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-7">
                        <div class="card">
                            <div class="text-center mt-n5 z-index-1">
                                <div class="position-relative">
                                    <div class="blur-shadow-avatar rounded-circle">
                                        <img class="avatar avatar-xxl shadow-lg" src="<?= $img_docente_02 ?>"
                                            alt="avatar">
                                    </div>
                                    <div class="colored-shadow rounded start-0 end-0 mx-auto avatar-xxl"
                                        style="background-image: url('<?= $img_docente_02 ?>"></div>
                                    <div class="colored-shadow start-0 end-0 mx-auto avatar-xxl"></div>
                                </div>
                            </div>
                            <div class="card-body text-center pb-0">
                                <h4 class="mb-0"><?= $docente_nombre_02 ?></h4>
                                <p><?= $docente_especialidad_02 ?></p>
                                <p class="mt-2">
                                    <?= $docente_descripcion_02 ?>
                                </p>
                            </div>
                            <div class="card-footer text-center pt-2">
                                <div class="mx-auto">
                                    <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>quote-down</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path
                                                d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z"
                                                fill="#48484A" fill-rule="nonzero"
                                                transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) ">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-7">
                        <div class="card">
                            <div class="text-center mt-n5 z-index-1">
                                <div class="position-relative">
                                    <div class="blur-shadow-avatar rounded-circle">
                                        <img class="avatar avatar-xxl shadow-lg" src="<?= $img_docente_03 ?>"
                                            alt="avatar">
                                    </div>
                                    <div class="colored-shadow rounded start-0 end-0 mx-auto avatar-xxl"
                                        style="background-image: url('<?= $img_docente_03 ?>');"></div>
                                    <div class="colored-shadow start-0 end-0 mx-auto avatar-xxl"></div>
                                </div>
                            </div>
                            <div class="card-body text-center pb-0">
                                <h4 class="mb-0"><?= $docente_nombre_03 ?></h4>
                                <p><?= $docente_especialidad_03 ?></p>
                                <p class="mt-2">
                                    <?= $docente_descripcion_03 ?>
                                </p>
                            </div>
                            <div class="card-footer text-center pt-2">
                                <div class="mx-auto">
                                    <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>quote-down</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path
                                                d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z"
                                                fill="#48484A" fill-rule="nonzero"
                                                transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) ">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PREGUNTAS FRECUENTES -->
        <section class="py-md-2 pb-5">
            <div class="container">

                <div class="row my-5">
                    <div class="col-md-6 mx-auto text-center">
                        <h2 class="text-color-grey">Preguntas Frecuentes</h2>
                        <p>
                            Muchas personas no aprecian el momento hasta que ha pasado. No estoy haciendo todo lo
                            posible, y no estoy tratando de hacer
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="accordion" id="accordionRental">
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingOne">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        ¿Cómo hago un pedido?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        No siempre estamos en la posición en la que queremos estar. Estamos creciendo
                                        constantemente. Estamos constantemente cometiendo errores. Estamos
                                        constantemente tratando de expresarnos y hacer realidad nuestros sueños. Si
                                        tienes la oportunidad de jugar a este juego de la vida, necesitas apreciar cada
                                        momento. Muchas personas no aprecian el momento hasta que ha pasado.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        ¿Cómo puedo hacer el pago?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Realmente importa y luego realmente no importa. Lo que importa son las personas
                                        que se despiertan por ello. Y la gente que se ofende por ello, no importa.
                                        Porque se trata de motivar a los hacedores. Porque estoy aquí para seguir mis
                                        sueños e inspirar a otras personas a seguir sus sueños también.<br>

                                        No siempre estamos en la posición en la que queremos estar. Estamos creciendo
                                        constantemente. Estamos constantemente cometiendo errores. Estamos
                                        constantemente tratando de expresarnos y hacer realidad nuestros sueños. Si
                                        tienes la oportunidad de jugar a este juego de la vida, necesitas apreciar cada
                                        momento. Muchas personas no aprecian el momento hasta que ha pasado.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingThree">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        ¿Cuánto tiempo se tarda en recibir el pedido?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Ahora es el momento de que esté bien para ser genial. La gente en este mundo
                                        rechaza a la gente por ser genial. Por ser un color brillante. Por destacar.
                                        Pero ahora es el momento de estar bien para ser el mejor tú. ¿Creerías en lo que
                                        crees, si fueras el único que lo creyera? Si todo lo que hice falló, lo cual no
                                        sucede, en realidad tiene éxito, solo el hecho de que estoy dispuesto a fracasar
                                        es una inspiración. La gente tiene tanto miedo de perder que ni siquiera lo
                                        intentan. Como, una cosa que la gente no puede decir es que no lo estoy
                                        intentando, y no estoy haciendo todo lo posible, y no estoy tratando de hacerlo
                                        de la mejor manera que sé.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingFour">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        ¿Puedo revender los productos?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Siempre sentí que podía hacer cualquier cosa. ¡Eso es lo principal por lo que la
                                        gente está controlada! Pensamientos: ¡su percepción de ellos mismos! Se
                                        ralentizan por su percepción de sí mismos. Si te enseñan que no puedes hacer
                                        nada, no harás nada. Me enseñaron que podía hacerlo todo.<br><br>

                                        Si todo lo que hice falló, lo cual no sucede, en realidad tiene éxito, solo el
                                        hecho de que estoy dispuesto a fracasar es una inspiración. La gente tiene tanto
                                        miedo de perder que ni siquiera lo intentan. Como, una cosa que la gente no
                                        puede decir es que no lo estoy intentando, y no estoy haciendo todo lo posible,
                                        y no estoy tratando de hacerlo de la mejor manera que sé.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingFifth">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth"
                                        aria-expanded="false" aria-controls="collapseFifth">
                                        ¿Dónde encuentro los detalles del envío?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseFifth" class="accordion-collapse collapse"
                                    aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        No hay nada que realmente quisiera hacer en la vida en lo que no fuera capaz de
                                        ser bueno. Esa es mi habilidad. Realmente no tengo talento específico en nada,
                                        excepto en la capacidad de aprender. Eso es lo que hago. Para eso estoy aquí. No
                                        tengas miedo de equivocarte porque no puedes aprender nada de un cumplido.
                                        Siempre sentí que podía hacer cualquier cosa. ¡Eso es lo principal por lo que la
                                        gente está controlada! Pensamientos: ¡su percepción de ellos mismos! Se
                                        ralentizan por su percepción de sí mismos. Si te enseñan que no puedes hacer
                                        nada, no harás nada. Me enseñaron que podía hacerlo todo.
                                    </div>
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