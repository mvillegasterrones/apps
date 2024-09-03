<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es" data-mdb-theme="">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Cursos | <?= $nombre_empresa ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="icon" href="./img/lg-lyceum.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="../template-mdb5/css/pro.mdb.min.css" />
    <!-- My Style -->
    <link rel="stylesheet" href="../template-mdb5/css/style.css" />
    <!-- Local Style -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body style="background-color: #E5E9EB !important;">

<div id="loading-overlay">
    <div class="spinner"></div>
</div>

<!--Main Navigation-->
<?php include './sections/nav-bar-course.php'?>
<!--Main Navigation-->
<main class="mb-10" id="principal">
    <!--All contenido de las secciones del nav-bar -->
    <header>
        <!-- Background image -->
        <div class="p-5 text-center bg-image mb-5" style="background-image: url('img/banners/5-min.png');width: 100%;height: 500px;margin-top: 58px;"
             data-mdb-animation-init
             data-mdb-animation-start="onLoad"
             data-mdb-animation="fade-in"
             data-mdb-animation-show-on-load="false"
             data-mdb-animation-delay="100">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3 text-warning">Conoce más sobre el apasionante mundo de la gestión de programas y proyectos sociales.</h1>
                        <h5 class="mb-3">Sumérgete en el fascinante mundo de la gestión de programas y proyectos sociales de manera simple, práctica y accesible para todos.</h5>
                        <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#courses" role="button">Empecemos</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>

    <!-- Cards of courses -->
    <section id="courses" class="container mt-sm-10"
             data-mdb-animation-init
             data-mdb-animation-start="onScroll"
             data-mdb-animation="fade-in"
             data-mdb-animation-show-on-load="false"
             data-mdb-animation-delay="100">
        <h3 class="fw-bold text-center color-institucional-1 mb-5"><i class="fas fa-layer-group color-institucional-1"></i> Lista de Cursos</h3>
        <div class="row gx-lg-5 mb-7">
            <!-- First course -->
            <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
                <div class="card rounded-6 h-100 toast-light shadow-5-strong"
                         data-mdb-animation-init
                         data-mdb-animation-start="onScroll"
                         data-mdb-animation="fade-in"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-delay="300">
                    <div class="mt-n3 bg-image bg-warning hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
                             data-mdb-ripple-color="light">
                             <!--data-mdb-modal-init
                             data-mdb-target="#project-1"-->
                        <img src="./img/home-01.png" class="w-100" />
                        <a href="javascript:;">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-uppercase color-institucional-1"><?= $titulo_curso_01 ?></h5>
                        <p class="text-muted">
                            <small>Publicado el <u>01.01.2024</u> por
                                <a href="#about-us" class="text-dark"><?= $nombre_corto ?></a></small>
                        </p>
                            <!--<p>
                                <i class="fa-regular fa-bookmark"></i> Proyectos Sociales
                            </p>-->
                        <p>
                            <i class="fa-solid fa-bookmark text-warning"></i> Proyectos Sociales
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-regular fa-star-half-stroke text-warning"></i>
                        </p>
                        <?= $contenido_curso_01 ?>
                        <?= $btn_show_modal_surso_01 ?>
                        <?= $btn_quiero_curso_1 ?>
                        <a href="./docs/Brochure%20curso%20virtual%202.0.pdf" target="_blank" class="btn btn-secondary btn-rounded"
                               data-mdb-ripple-init><i class="fas fa-file-pdf text-danger"></i> Brochure</a>
                    </div>
                    <div class="card-footer text-muted">
                        <i class="fas fa-check-circle text-success"></i> Acceso ilimitado&nbsp;
                        <i class="fas fa-users text-primary"></i> 450+ &nbsp;&nbsp;
                        <i class="fas fa-comments text-warning"></i> 50+ &nbsp;&nbsp;
                        <i class="fas fa-clock text-info"></i> 17+ &nbsp;&nbsp;
                    </div>
                </div>
            </div>

            <!-- Second course -->
            <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
                <div class="card rounded-6 h-100 toast-light shadow-5-strong"
                         data-mdb-animation-init
                         data-mdb-animation-start="onScroll"
                         data-mdb-animation="fade-in"
                         data-mdb-animation-show-on-load="false"
                         data-mdb-animation-delay="400">
                    <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
                             data-mdb-ripple-color="light"
                        <!--data-mdb-modal-init
                        data-mdb-target="#project-1"-->
                        <img src="./img/b-cursos-cerrado.png" class="w-100" />
                        <a href="javascript:;">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="placeholder col-12"></span>
                        </h5>
                        <p class="text-muted">
                            <span class="placeholder col-11"></span>
                        </p>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                        </p>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p>
                        <a href="javascript:;" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                    </div>
                    <div class="card-footer text-muted">
                        <span class="placeholder col-12"></span>
                    </div>
                </div>
            </div>
            <!-- Thrid course -->
            <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
                <div class="card rounded-6 h-100 toast-light shadow-5-strong"
                     data-mdb-animation-init
                     data-mdb-animation-start="onScroll"
                     data-mdb-animation="fade-in"
                     data-mdb-animation-show-on-load="false"
                     data-mdb-animation-delay="500">
                    <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
                        data-mdb-ripple-color="light"
                        <!--data-mdb-modal-init
                        data-mdb-target="#project-1"-->
                        <img src="./img/b-cursos-cerrado.png" class="w-100" />
                        <a href="javascript:;">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="placeholder col-12"></span>
                        </h5>
                        <p class="text-muted">
                            <span class="placeholder col-11"></span>
                        </p>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                        </p>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p>
                        <a href="javascript:;" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                    </div>
                    <div class="card-footer text-muted">
                        <span class="placeholder col-12"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row Certificacion -->
        <div class="row text-start">
            <div class="col-12 mb-5"
                 data-mdb-animation-init
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation="fade-in"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-delay="300">
                <div class="alert alert-light shadow-5-strong" role="alert" data-mdb-color="light" data-mdb-alert-init="" data-mdb-alert-initialized="true">
                    <h4 class="alert-heading color-institucional-1"><i class="fas fa-check-circle color-institucional-1"></i> Obtén Certificación!</h4>
                    <p class="text-muted">
                        Completa el/los curso/s y obtén un certificado reconocido que puedes agregar a tu currículum y mostrar a futuros empleadores.
                    </p>
                    <hr>
                    <!--<p class="mb-0">
                        Whenever you need to, be sure to use margin utilities to keep things nice and tidy.
                    </p>-->
                </div>

            </div>
        </div>
        
        <div class="col-12"
             data-mdb-animation-init
             data-mdb-animation-start="onScroll"
             data-mdb-animation="fade-in"
             data-mdb-animation-show-on-load="false"
             data-mdb-animation-delay="800">
            <img src="./img/certificate-model.png" class="w-100 border border-4 border-warning rounded rounded-7 shadow shadow-5-strong" alt="">
        </div>

    </section>
</main>
<?php include './modals/modal-curso-01-restricted.php' ?>
<?php include './modals/modal-register.php' ?>
<?php include './modals/modal-curso-01.php' ?>
<?php include './sections/footer.php' ?>
</body>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- MDB -->
<script src="../template-mdb5/js/pro.mdb.umd.min.js"></script>
<!--<script type="text/javascript" src="../template-mdb5/js/script.js"></script>-->
<!-- My Script -->
<script src="./js/scripts.js"></script>
<script src="./js/js_usuario.js"></script>
</html>