<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= $ico ?>"><!-- ./assets/img/favicon.png -->
    <title>
        ESCE | Theaching The Teachers
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

    <div class="card container card-body mb-7 shadow-xl mx-3 mx-md-7 mt-n6">
        <section class="py-md-2 px-lg-5 pb-5">
            <div class="container">
                <h2 class="text-color-grey mb-5 mb-lg-7"><img src="<?= $ico ?>" class="w-5"> Teaching The Theachers</h2>
                <div class="row align-items-start">
                    <div class="col-12 col-md-12 col-lg-8">
                        <!--<h3 class="mb-4 text-color-grey">Tenemos una perspectiva de la innovación como motor de
                            crecimiento</h3>-->
                        <p class="">
                        El programa "Teaching the Teachers" está diseñado para capacitar a educadores y periodistas que trabajan en temas de economía, emprendimiento o sostenibilidad. Este programa proporciona herramientas y metodologías actualizadas que permiten a los participantes comprender, interpretar, sintetizar y enseñar conocimiento técnico de manera más efectiva, ampliando sus competencias y fortaleciendo su capacidad para impactar en sus campos de trabajo. Los cursos son dictados de forma sincrona y asincrona, en clases y talleres digitales. Los cursos de este programa están diseñados para mejorar los conocimientos y habilidades de los participantes para ser agentes críticos de cambios económicos y de negocios. 
                        </p>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <img src="https://www.shutterstock.com/image-photo/teacher-university-front-chalkboard-multinational-260nw-1896797164.jpg" class="w-100" alt="" srcset="">
                    </div>
                </div>
                <div class="row mb-5">
                    <hr class="col-12 bg-dark">
                </div>
            </div>
        </section>
    </div>

    <!--<h2 class="text-xolor-grey text-center mb-7"><img src="<?= $ico ?>" class="w-5">Nuestro equipo</h2>-->

    <?php include './sections/page-sections/footer.php' ?>

    <?php include './sections/page-sections/ref-scripts.php' ?>
</body>

</html>