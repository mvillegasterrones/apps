<?php
session_start();
if (isset($_SESSION['ingreso']) && $_SESSION['ingreso'] == 'YES') {
    if ( $_SESSION['reg_curso_1'] == 'Si' || $_SESSION['reg_curso_2'] == 'Si' || $_SESSION['reg_curso_3'] == 'Si' ) {
        include './includes.php';
?>
<!-- https://material-minimal.com/learn/design-process/user-experience/ -->
<!-- generar link de wsp: https://postcron.com/es/blog/landings/generador-de-enlaces-para-whatsapp/ -->
<!DOCTYPE html>
<html lang="es" data-mdb-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Inicio | <?= $nombre_empresa ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="icon" href="./img/lg-lyceum.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <!--<link rel="stylesheet" href="../template-mdb5/css/pro.mdb.min.css" />-->
    <link rel="stylesheet" href="./template-mdb5/css/pro.mdb.min.css" />
    <!-- My Style -->
    <!--<link rel="stylesheet" href="../template-mdb5/css/style.css" />-->
    <!-- Local Style -->
    <link rel="stylesheet" href="./template-mdb5/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body onload="open_video_sourse(<?= $_GET['id'] ?>)" style="background-color: rgb(85, 108, 117) !important;">

<div id="loading-overlay">
    <div class="spinner"></div>
</div>
<!--Main Navigation-->
<header class="mb-10">
    <!-- Navbar -->
    <?php include './sections/nav-bar.php' ?>
    <!-- Navbar -->
</header>

<section class="container">
    <!-- Viodeo intro -->
    <div class="col-lg-12 col-md-12 mb-10">
        <h3 id="cur_numero">cur_numero</h3>
        <h4 id="cur_nombre">cur_nombre</h4>
        <h5 id="cur_nombre_video">cur_nombre_video</h5>
        <div class="card border border-3 border-warning shadow-5-strong"
             data-mdb-animation-init
             data-mdb-animation-start="onScroll"
             data-mdb-animation="fade-in"
             data-mdb-animation-show-on-load="false"
             data-mdb-animation-delay="600">
            <video class="rounded rounded-5" id="video-curso" controls autoplay controlsList="nodownload">
                <!--<source src="" type="video/mp4">-->
                <!--<source src="ruta_del_video.webm" type="video/webm">-->
                <!-- Texto alternativo -->
                <!--<p>¡Mira nuestro video de introducción al curso!</p>-->
            </video>
        </div>
    </div>
</section>

<!--Footer-->
<?php include './sections/footer.php' ?>
<!-- End Footer -->
</body>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- MDB -->
<script type="text/javascript" src="./template-mdb5/js/pro.mdb.umd.min.js"></script>
<!-- MyScripts -->
<script src="./js/scripts.js"></script>
<script src="./js/js_usuario.js"></script>
<script src="./js/jCurso.js"></script>
</html>
    <?php
    } else {
        echo 'No autorizado!';
        header('location: ./index.php');
    }
    echo 'No autorizado!';
    header('location: ./index.php');
}
?>