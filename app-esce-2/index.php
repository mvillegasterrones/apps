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
                <?php include './sections/page-sections/nav-bar-3.php' ?>
            </div>
        </div>
    </div>
    <header class=""
        style="background: url('./assets/img/hero/hero-card-02.png') no-repeat center center;background-size: cover;">
        <div class="page-header min-vh-100 text-color-grey" loading="lazy">
            <span class="mask opacity-4"></span>
            <div class="container">
                <div class="row p-3">
                    <div
                        class="col-lg-8 col-md-12 d-flex justify-content-center text-md-start text-center flex-column mt-sm-0 mt-7">
                        <h1 class="text-white">Escuela de <br>
                            Ciencias Empresariales y<br>
                            <b class="bg-gradient-warning text-white p-1 rounded rounded-15">Gestión Pública</b>
                        </h1>
                        <div class="buttons">
                            <a href="#section-cursos">
                                <button type="button" class="btn btn-lg btn-warning mt-4"
                                    style="border-radius: 20px;">Próximos cursos</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 d-lg-block d-sm-none">
                        <!--<img src="<?= $img_hero_main ?>" class="w-100 h-100 d-none d-lg-block" alt="">-->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php include './sections/page-sections/footer.php' ?>

    <?php include './sections/page-sections/ref-scripts.php' ?>

</body>
<script>
    const navbar = document.getElementById("main-navbar")

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 0) {
            navbar.classList.remove("navbar-transparent")
            navbar.classList.remove("text-white")
            navbar.classList.add("blur")
            navbar.classList.add("text-color-grey")
        } else {
            navbar.classList.remove("text-color-grey")
            navbar.classList.remove("blur")
            navbar.classList.add("navbar-transparent")
            navbar.classList.add("text-white")
        }
    })
</script>
</html>