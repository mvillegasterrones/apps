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

    <header class=""
        style="background: url('./assets/img/hero/main-hero.png') no-repeat center center;background-size: cover;">
        <div class="page-header min-vh-100 text-color-grey" loading="lazy">
            <span class="mask opacity-4"
                style="background: linear-gradient(to right, rgba(173, 216, 230, 6), rgba(173, 216, 230, 0));"></span>
            <div class="container">
                <div class="row p-3">
                    <div
                        class="col-lg-8 col-md-12 d-flex justify-content-center text-md-start text-center flex-column mt-sm-0 mt-7">
                        <h1 class="text_color_primary">Escuela de <br>
                            <b class="text_color_info">Ciencias Empresariales y</b><br>
                            <b class="bg_gradient_info_to_primary text-white p-1 rounded rounded-15">Gestión Pública</b>
                        </h1>
                        <div class="buttons">
                            <a href="#section-cursos">
                                <button type="button" class="btn btn-info bg_color_primary text-white mt-4"
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
    <div class="bg_color_info">
        <div class="container">
            <div class="row align-content-center">
                <div class="col-6 p-5 h-100">
                    <h3 class="text-white">Sé el primero en ver nuestras noticias</h3>
                    <ss class="text-white">
                        Puede que no se encuentre registrado/a, pero eventualmente, ESCE te brinda excelentes servicios
                        y noticias las cuales te haremos llegar.
                        </p>
                </div>
                <div class="col-6 pt-6 h-100">
                    <div class="row align-items-center">
                        <div class="col-1 h-100 align-items-center">
                            <button type="button"
                                class="btn btn-white text_color_info btn-icon-only rounded-circle mt-3">
                                <i class="fas fa-paper-plane fa-1x p-0 m-0"></i>
                            </button>
                        </div>
                        <div class="col-7 mb-0 h-100 align-items-center">
                            <input type="text"
                                class="form-control form-control-lg main-bg-color-white text-dark p-2 mb-sm-0"
                                placeholder="Ingresa tu email"
                                style="background-color: white !important;border-radius: 20px;">
                        </div>
                        <div class="col-4 ps-0 h-100 align-items-center">
                            <button type="button"
                                class="btn bg-white text_color_primary mb-0 h-100 position-relative z-index-2">Suscribirme</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-bg-color-white"
        style="background: url('./assets/img/hero/hero-sec-2.png') no-repeat center center;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 p-5 h-100 align-content-center text-center">
                    <h3>Escoge <b class="bg_gradient_info_to_primary text-white p-1 rounded rounded-15">tu próxima
                            habilidad</b></h3>
                    <p class="text_info">
                        Busca en nuestras <b class="text_color_primary">ofertas de formación</b> la que más te guste y
                        asegúrate de que tienes todos los requisitos necesarios para lograrlo.
                    </p>
                </div>
                <div class="col-3"></div>
                <div class="col-12 mt-4 mb-10">
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card broder border-2 shadow-02" data-animation="true">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="./assets/img/hero/hero-card-01.png"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <div class="d-flex mt-n6 mx-auto">
                                        <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Refresh">
                                            <i class="material-icons text-lg">refresh</i>
                                        </a>
                                        <button class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Edit">
                                            <i class="material-icons text-lg">edit</i>
                                        </button>
                                    </div>
                                    <h5 class="font-weight-normal mt-3">
                                        <a href="javascript:;">Cozy 5 Stars Apartment</a>
                                    </h5>
                                    <p class="mb-0">
                                        The place is close to Barceloneta Beach and bus stop just 2 min by walk and near
                                        to "Naviglio" where you can enjoy the main night life in Barcelona.
                                    </p>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer d-flex">
                                    <p class="font-weight-normal my-auto">$899/night</p>
                                    <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>
                                    <p class="text-sm my-auto"> Barcelona, Spain</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 col-md-6 col-lg-4">
                            <div class="card broder border-2 shadow-02" data-animation="true">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="./assets/img/hero/hero-card-02.png"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <div class="d-flex mt-n6 mx-auto">
                                        <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Refresh">
                                            <i class="material-icons text-lg">refresh</i>
                                        </a>
                                        <button class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Edit">
                                            <i class="material-icons text-lg">edit</i>
                                        </button>
                                    </div>
                                    <h5 class="font-weight-normal mt-3">
                                        <a href="javascript:;">Cozy 5 Stars Apartment</a>
                                    </h5>
                                    <p class="mb-0">
                                        The place is close to Barceloneta Beach and bus stop just 2 min by walk and near
                                        to "Naviglio" where you can enjoy the main night life in Barcelona.
                                    </p>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer d-flex">
                                    <p class="font-weight-normal my-auto">$899/night</p>
                                    <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>
                                    <p class="text-sm my-auto"> Barcelona, Spain</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 col-md-6 col-lg-4">
                            <div class="card broder border-2 shadow-02" data-animation="true">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="./assets/img/hero/hero-card-03.png"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg&quot;);">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <div class="d-flex mt-n6 mx-auto">
                                        <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Refresh">
                                            <i class="material-icons text-lg">refresh</i>
                                        </a>
                                        <button class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Edit">
                                            <i class="material-icons text-lg">edit</i>
                                        </button>
                                    </div>
                                    <h5 class="font-weight-normal mt-3">
                                        <a href="javascript:;">Cozy 5 Stars Apartment</a>
                                    </h5>
                                    <p class="mb-0">
                                        The place is close to Barceloneta Beach and bus stop just 2 min by walk and near
                                        to "Naviglio" where you can enjoy the main night life in Barcelona.
                                    </p>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer d-flex">
                                    <p class="font-weight-normal my-auto">$899/night</p>
                                    <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>
                                    <p class="text-sm my-auto"> Barcelona, Spain</p>
                                </div>
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