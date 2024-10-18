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

    <style>
        /* Estilos generales del card */
        .card-2 {
            width: 300px;
            height: 400px;
            background-color: #f5f5f5;
            border-radius: 15px;
            overflow: hidden;
            perspective: 1000px;
            /* Necesario para crear el efecto 3D */
            transition: all 0.5s ease-in-out;
            position: relative;
        }

        /* Contenido del card */
        .card-2-content {
            width: 100%;
            height: 100%;
            background-color: #08BCFB;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.6s ease-in-out;
            transform-style: preserve-3d;
            /* Habilita el efecto 3D */
            backface-visibility: hidden;
            /* Oculta la cara trasera al rotar */
        }

        /* Estilo inicial de la tarjeta */
        .card-2-content h3,
        .card-2-content p {
            color: white;
            text-align: center;
            margin: 0;
        }

        /* Efecto flip-up al hacer hover */
        .card-2:hover .card-2-content {
            transform: rotateX(-180deg);
            /* Rota hacia arriba */
        }

        /* Trasera del card cuando está rotando */
        .card-2:hover .card-2-content p {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="case-study bg-gray-200">
    <div class="container position-sticky z-index-sticky top-0 mb-10">
        <div class="row">
            <div class="col-12">
                <?php include './sections/page-sections/nav-bar-3.php' ?>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Fade-in desde arriba -->
        <div class="col-md-4" data-aos="fade-down" data-aos-duration="1500">
            <h3>Fade Down</h3>
        </div>

        <!-- Desliza desde la izquierda -->
        <div class="col-md-4" data-aos="slide-left" data-aos-duration="1500">
            <h3>Slide Left</h3>
        </div>

        <!-- Zoom en el elemento -->
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1500">
            <h3>Zoom In</h3>
        </div>
    </div>


    <section class="my-section main-bg-color-warning mt-10">
        <div class="container">
            <div class="row">
                <!-- Primer bloque con fade-in -->
                <div class="col-md-6 text-color-grey" data-aos="fade-right" data-aos-duration="100"
                    data-aos-delay="200">
                    <h2 clase="">Animación desde la derecha</h2>
                    <p>Este contenido se deslizará desde la derecha cuando hagas scroll.</p>
                </div>

                <!-- Segundo bloque con zoom-in -->
                <div class="col-md-6 text-color-grey" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                    <h2>Zoom en la animación</h2>
                    <p>Este contenido hará un efecto de zoom al aparecer.</p>
                </div>
            </div>
        </div>
    </section>


    <div class="card card-body mb-7 shadow-xl mx-3 mx-md-7 mt-n1">

        <section class="py-md-2 mb-7 px-lg-5 pb-5">
            <div class="container">
                <h2 class="text-color-grey mb-5 mb-lg-7"><img src="<?= $ico ?>" class="w-5"> Nosotros</h2>

                <div class="row">

                    <div class="col-12">
                        <button class="btn btn-primary btn-lg btn-hover-zoom">.btn-hover-zoom</button>
                    </div>

                    <div class="col-12">
                        <div class="card transition-card">
                            <div class="card-body">
                                <h5 class="card-title">.transition-card</h5>
                                <p class="card-text">Some example text to show how transition works.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="fade-in-box">
                            <h5>.fade-in-box:hover</h5>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="page-header header-filter min-vh-100"
                            style="background-image: url('<?= $img_hero_01 ?>');">
                            <div class="container">
                                <h1 class="title">Parallax Header</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="slide-in-box">
                            <h5>Sliding Content</h5>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary btn-ripple">Ripple Effect Button</button>
                    </div>

                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                            Open Modal
                        </button>

                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal Title</h5>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal content goes here...</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-color-white">
                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"
                            title="Tooltip on top">
                            Tooltip
                        </button>
                    </div>

                    <div class="col-12 text-dark">
                        <section>
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <h1 clase=" text-color-dark">Título Animado</h1>
                                <p class=" text-color-dark">Este contenido se animará cuando el usuario haga scroll.</p>
                            </div>
                        </section>
                    </div>

                    <section class="my-section">
                        <div class="container">
                            <div class="row text-color-warning">
                                <!-- Primer bloque con fade-in -->
                                <div class="col-md-6 text-dark" data-aos="fade-right" data-aos-duration="100"
                                    data-aos-delay="200" data-aos-once="false">
                                    <h2>Animación desde la derecha</h2>
                                    <p>Este contenido se deslizará desde la derecha cuando hagas scroll.</p>
                                </div>

                                <!-- Segundo bloque con zoom-in -->
                                <div class="col-md-6 text-dark" data-aos="zoom-in" data-aos-duration="1000"
                                    data-aos-delay="400" data-aos-once="false">
                                    <h2>Zoom en la animación</h2>
                                    <p>Este contenido hará un efecto de zoom al aparecer.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="col-12">
                        <div class="card-2">
                            <div class="card-2-content">
                                <h3>Título de la Tarjeta</h3>
                                <p>Este es un texto que se muestra cuando haces hover sobre la tarjeta.</p>
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
<script>
    /*$(document).ready(function () {
        $('.header-filter').parallax({
            imageSrc: '<?= $img_hero_01 ?>'
        });
    });*/

</script>

</html>