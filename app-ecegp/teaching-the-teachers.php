<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es">
<html lang="es" data-mdb-theme="dark">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ECEGP | Theaching The Theachers</title>
<?php include './views/sections/main-header.php' ?>
</head>

<body>
    <header class="mb-8">
        <!--? Navbar -->
        <?php include './views/sections/nav-bar.php' ?>
        <!-- Navbar -->

        <!-- Hero -->
        <!-- Carousel wrapper -->
        <div id="carouselMaterialStyle" class="carousel slide carousel-fade vh-50" data-mdb-ride="carousel"
            data-mdb-carousel-init data-mdb-animation-init data-mdb-animation-start="onLoad"
            data-mdb-animation="fade-in-down" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="bg-image">
                        <img src="https://universidadeuropea.com/resources/media/images/como-ser-profesor-universidad-1200x630.original.jpg" class="w-100" alt="Louvre Museum" />
                        <div class="mask"
                            style="background: linear-gradient(45deg, hsla(168, 85%, 52%, 0.7), hsla(263, 88%, 45%, 0.7) 100%);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="row">
                                    <div class="col-12 main-bg-color-grey p-4 rounded rounded-6"
                                        style="background: hsla(0, 80%, 100%, 0.25);backdrop-filter: blur(30px)">
                                        <h3>THEACHREING THE TEACHERS</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-image">
                        <img src="https://cloudfront-us-east-1.images.arcpublishing.com/elcomercio/6OVGYOMCM5FBNOHPJ57C2DHW3Y.jpg" class="w-100" alt="Louvre Museum" />
                        <div class="mask"
                            style="background: linear-gradient(45deg, hsla(168, 85%, 52%, 0.7), hsla(263, 88%, 45%, 0.7) 100%);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="row">
                                    <div class="col-12 main-bg-color-grey p-4 rounded rounded-6"
                                        style="background: hsla(0, 80%, 100%, 0.25);backdrop-filter: blur(30px)">
                                        <h3>THEACHREING THE TEACHERS</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <main>

        <div class="container">

            <div class="row">
                <div class="col-12 mb-10" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                data-mdb-animation-show-on-load="false" data-mdb-animation-delay="100">
                    <div class="card main-bg-color-grey" data-mdb-animation-init data-mdb-animation-start="onScroll"
                        data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="500">
                        <div class="card-body">
                            <h1>Theaching The Theachers</h1>
                            <p class="text-muted">
                                El programa "Teaching the Teachers" está diseñado para capacitar a educadores y
                                periodistas que trabajan en temas de economía, emprendimiento o sostenibilidad. Este
                                programa proporciona herramientas y metodologías actualizadas que permiten a los
                                participantes comprender, interpretar, sintetizar y enseñar conocimiento técnico de
                                manera más efectiva, ampliando sus competencias y fortaleciendo su capacidad para
                                impactar en sus campos de trabajo. Los cursos son dictados de forma sincrona y
                                asincrona, en clases y talleres digitales. Los cursos de este programa están diseñados
                                para mejorar los conocimientos y habilidades de los participantes para ser agentes
                                críticos de cambios económicos y de negocios.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gx-lg-5 mb-10">
                <!--1. Aplicaciones movíles -->
                <div class="col-lg-3 col-md-12 mb-6 mb-lg-0">
                    <div class="card main-bg-color-grey rounded-6 h-100" data-mdb-animation-init data-mdb-animation-start="onScroll"
                        data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="400">
                        <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
                            data-mdb-ripple-color="light">
                            <img src="<?= $img_econom_perdiodistas ?>"
                                class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Economía para Periodistas</h5>
                            <p class="card-text text-muted">
                                Este curso de seis semanas ofrece una comprensión profunda de temas económicos clave como el PIB, la tasa de desempleo, la inflación, el déficit fiscal, la balanza comercial y el índice de confianza del consumidor.
                            </p>
                            <a href="<?= $economia_periodistas ?>" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Ver mas <i class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end 1 -->

                <!-- 2. Desarrollo web -->
                <div class="col-lg-3 mb-6 mb-lg-0">
                    <div class="card main-bg-color-grey rounded-6 h-100" data-mdb-animation-init data-mdb-animation-start="onScroll"
                        data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="600">
                        <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
                            data-mdb-ripple-color="light">
                            <img src="<?= $img_formac_emprendedores ?>"
                                class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Formación de Emprendedores para Docentes Universitarios</h5>
                            <p class="card-text text-muted">
                                Este curso de seis semanas está diseñado para docentes universitarios que buscan integrar el espíritu emprendedor en su enseñanza y fomentar el emprendimiento entre sus estudiantes.
                            </p>
                            <a href="<?= $formacion_emprendedores ?>" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Ver mas <i class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end 2 -->

                <!-- 3. Rede -->
                <div class="col-lg-3 mb-6 mb-lg-0">
                    <div class="card main-bg-color-grey rounded-6 h-100" data-mdb-animation-init data-mdb-animation-start="onScroll"
                        data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="800">
                        <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
                            data-mdb-ripple-color="light">
                            <img src="<?= $img_econom_circular ?>"
                                class="w-100 h-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Economía Circular para Docentes Universitarios</h5>
                            <p class="card-text text-muted">
                                Este está diseñado para docentes universitarios que desean integrar los principios de la economía circular en sus enseñanzas, actualizándose en las últimas tendencias y prácticas sostenibles.
                            </p>
                            <a href="<?= $economia_circular ?>" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Ver mas <i class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end 3 -->

                <!-- 4. Rede -->
                <div class="col-lg-3 mb-6 mb-lg-0">
                    <div class="card main-bg-color-grey rounded-6 h-100" data-mdb-animation-init data-mdb-animation-start="onScroll"
                        data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="1000">
                        <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
                            data-mdb-ripple-color="light">
                            <img src="<?= $img_econom_docentes ?>"
                                class="w-100 h-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Economía para Docentes Universitarios</h5>
                            <p class="card-text text-muted">
                                Este curso está dirigido a docentes universitarios que enseñan economía o disciplinas afines, y busca actualizar y profundizar su conocimiento en teoría económica y tendencias en la economía global
                            </p>
                            <!--<a href="#!" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Read more</a>-->
                        </div>
                    </div>
                </div>
                <!-- end 4 -->
            </div>

            <div class="row text-center mb-10">
                <div class="col-12 mb-5" data-mdb-animation-init data-mdb-animation-start="onScroll"
                        data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="100">
                    <h3 class="mb-4">Ir mas allá con los programas de certificación</h3>
                    <h5>ECEGP es parte de un programa de certificación:</h5>
                </div>
                <div class="col-3"></div>
                <div class="col-6" data-mdb-animation-init data-mdb-animation-start="onScroll"
                        data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false"
                        data-mdb-animation-delay="200">
                    <img src="<?= $url_img_certificado ?>" class="w-75" alt="">
                </div>
                <div class="col-3"></div>
            </div>

        </div>
    </main>

    <?php include './views/sections/footer.php' ?>

</body>

<?php include './views/sections/main-scripts.php' ?>

</html>