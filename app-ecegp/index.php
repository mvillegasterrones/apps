<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es">
<html lang="es" data-mdb-theme="dark">
<!--
* https://mdbootstrap.com/learn/mdb-foundations/mdb-ui-kit/material-minimal/
* https://mdbootstrap.com/learn/mdb-foundations/mdb-ui-kit/animations/
* https://mdbootstrap.com/docs/standard/
* https://mdbgo.com
* https://github.com/mdbootstrap/mdb-ui-kit
* http://mvillegasterrones.engineer/
-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Inicio | ECEGP</title>
    <?php include './views/sections/main-header.php' ?>
</head>

<body>

    <!--! Main Navigation-->
    <header class="mb-0">

        <!-- ? Navbar -->
        <?php include './views/sections/nav-bar.php' ?>
        <!-- Navbar -->

        <!-- ? Section: Split screen -->
        <?php //include './views/sections/hero.php' ?>
        <!-- Section: Split screen -->


        <div class="container-fluid hero-section d-flex align-items-center">
            <!-- Lado Izquierdo (Texto y Iconos) -->
            <div class="col-md-6 left-content">
                <h1 class="hero-title text-start mb-0 text-color-grey">ESCE</h1>
                <h1 class="hero-description text-color-secondary w-75 fw-bold">
                    ESCUELA DE CIENCIAS EMPRESARIALES Y GESTIÓN PÚBLICA
                </h1>
                <div class="d-flex justify-content-start icons-container">
                    <div class="icon-item mx-2 div-icon">
                        <i class="fas fa-cogs fa-2x"></i>
                    </div>
                    <div class="icon-item mx-2 div-icon">
                        <i class="fas fa-edit fa-2x"></i>
                    </div>
                    <div class="icon-item mx-2 div-icon">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <div class="icon-item mx-2 div-icon">
                        <i class="fas fa-lightbulb fa-2x"></i>
                    </div>
                </div>
                <button class="mt-5 btn main-bg-color-secondary text-color-white">Conocer mas <i class="fa-light fa-arrow-right"></i></button>
            </div>

            <!-- Lado Derecho (Imagen) -->
            <div class="col-md-6 right-image text-center">
                <img src="<?= $img_hero_01 ?>" alt="Imagen Hero" class="img-fluid hero-img">
            </div>
        </div>



    </header>
    <!--Main Navigation-->

    <!--! Main layout-->
    <main>
        <div class="container">

        </div>
    </main>
</body>

</html>