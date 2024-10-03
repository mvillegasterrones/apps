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
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. A
                                        eos animi minima nisi aspernatur id exercitationem velit voluptatum omnis
                                        veritatis! Pariatur at ipsa omnis quis ab obcaecati vel laborum, velit
                                        voluptatibus, odit hic nisi officia quas, adipisci est blanditiis! Commodi unde
                                        non voluptates fuga atque eum incidunt iusto adipisci sed!</h6>
                                </div>
                            </div>
                            <!--<a href="#section-cursos">
                                <button type="button" class="btn btn-lg btn-warning mt-4"
                                    style="border-radius: 20px;">Próximos cursos</button>
                            </a>-->
                        </div>
                    </div>
                    <div class="col-4 d-lg-block d-sm-none">
                        <!--<img src="<?= $img_hero_main ?>" class="w-100 h-100 d-none d-lg-block" alt="">-->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="main-bg-color-grey mx-md-2 mt-n7 mb-7">
        <div class="container">
            <div class="row align-content-center">
                <div class="col-12 col-lg-6 p-5">
                    <h3 class="text-white">Sé el primero en ver nuestras noticias</h3>
                    <ss class="text-white">
                        Puede que no se encuentre registrado/a, pero eventualmente, ESCE te brinda excelentes servicios
                        y noticias las cuales te haremos llegar.
                        </p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row align-items-center mt-lg-6 mb-5">
                        <div class="col-1 h-100 align-items-center">
                            <button type="button"
                                class="btn btn-white text-color-grey btn-icon-only rounded-circle mt-3">
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
                                class="btn btn-warning mb-0 h-100 position-relative z-index-2 btn-rounded-20p">Suscribirme</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h2>Escoge <b class="bg-gradient-danger text-white p-1 rounded rounded-15">tu próxima
                habilidad</b></h2>
        <p class="text_info mb-7">
            Busca en nuestras <b class="text_color_primary">ofertas de formación</b> la que más te guste y<br>
            asegúrate de que tienes todos los requisitos necesarios para lograrlo.
        </p>
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4 mb-7">
                    <div class="card h-100 border-2 shadow-02" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="./assets/img/hero/hero-card-01.png" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg">
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
                            <button class="btn bg-gradient-danger btn-block w-100 move-on-hover icon-move-right mb-1">
                                Acción 1&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-arrow-right"></i>
                            </button>
                            <!--<p class="font-weight-normal my-auto">$899/night</p>
                            <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>
                            <p class="text-sm my-auto"> Barcelona, Spain</p>-->
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-7">
                    <div class="card h-100 border-2 shadow-02" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="./assets/img/hero/hero-card-02.png" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg">
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
                            <button class="btn bg-gradient-danger btn-block w-100 move-on-hover icon-move-right mb-1">
                                Acción 1&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-arrow-right"></i>
                            </button>
                            <!--<p class="font-weight-normal my-auto">$899/night</p>
                            <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>
                            <p class="text-sm my-auto"> Barcelona, Spain</p>-->
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-7">
                    <div class="card h-100 border-2 shadow-02" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="./assets/img/hero/hero-card-03.png" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg">
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
                            <button class="btn bg-gradient-danger btn-block w-100 move-on-hover icon-move-right mb-1">
                                Acción 1&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-arrow-right"></i>
                            </button>
                            <!--<p class="font-weight-normal my-auto">$899/night</p>
                            <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>
                            <p class="text-sm my-auto"> Barcelona, Spain</p>-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <div>
        <img src="./assets/img/sec-03.png" class="w-100" alt="">
    </div>

    <div class="main-bg-color-grey">
        <div class="container pt-3 pb-5">
            <div class="row my-5 text-center">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="text-color-white p-3">Innovación <b
                            class="bg-gradient-warning p-1 rounded rounded-15">Empresarial</b></h2>
                    <p class="text-color-white">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro quis dolore perferendis. Ab odio
                        quo adipisci labore illum exercitationem dolorum?
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 text-start text-white">
                        <p class="mb-0">Detalle 0001</p>
                        <h5 class="text-white mb-2">Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ea veniam suscipit sapiente
                            incidunt provident accusamus, et sint porro eius, natus quae. Fuga, eos. Officiis numquam
                            sed
                            perferendis dicta iure.</p>
                        <i class="fas fa-edit text-color-warning"></i> Lorem ipsum dolor sit.<br>
                        <i class="fas fa-edit text-color-warning"></i> Lorem ipsum dolor sit.<br>
                        <i class="fas fa-edit text-color-warning"></i> Lorem ipsum dolor sit.<br>
                        <i class="fas fa-edit text-color-warning"></i> Lorem ipsum dolor sit.<br>
                        <i class="fas fa-edit text-color-warning"></i> Lorem ipsum dolor sit.<br>
                        <button class="btn main-bg-color-warning btn-warning btn-rounded-20p mt-4">Acction 1</button>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="row text-start mb-5">

                            <div class="col-12 col-lg-6 mb-4">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h4 class="mb-0">Olivia Harper</h4>
                                        <hr class="bg-warning w-100">
                                        <p>@oliviaharper</p>
                                        <p class="mt-2">
                                            The connections you make at Web Summit are unparalleled, we met users all
                                            over
                                            the world.
                                        </p>
                                    </div>
                                    <div class="card-footer pt-2">
                                        <div class="mx-auto">
                                            <p class="mb-0"><b>Lorem, ipsum.</b> Lorem, ipsum dolor.</p>
                                            <p><b>Lorem, ipsum.</b> Lorem, ipsum dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-4">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h4 class="mb-0">Olivia Harper</h4>
                                        <hr class="bg-warning w-100">
                                        <p>@oliviaharper</p>
                                        <p class="mt-2">
                                            The connections you make at Web Summit are unparalleled, we met users all
                                            over
                                            the world.
                                        </p>
                                    </div>
                                    <div class="card-footer pt-2">
                                        <div class="mx-auto">
                                            <p class="mb-0"><b>Lorem, ipsum.</b> Lorem, ipsum dolor.</p>
                                            <p><b>Lorem, ipsum.</b> Lorem, ipsum dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h4 class="mb-0">Olivia Harper</h4>
                                        <hr class="bg-warning w-100">
                                        <p>@oliviaharper</p>
                                        <p class="mt-2">
                                            The connections you make at Web Summit are unparalleled, we met users all
                                            over
                                            the world.
                                        </p>
                                    </div>
                                    <div class="card-footer pt-2">
                                        <div class="mx-auto">
                                            <p class="mb-0"><b>Lorem, ipsum.</b> Lorem, ipsum dolor.</p>
                                            <p><b>Lorem, ipsum.</b> Lorem, ipsum dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h4 class="mb-0">Olivia Harper</h4>
                                        <hr class="bg-warning w-100">
                                        <p>@oliviaharper</p>
                                        <p class="mt-2">
                                            The connections you make at Web Summit are unparalleled, we met users all
                                            over
                                            the world.
                                        </p>
                                    </div>
                                    <div class="card-footer pt-2">
                                        <div class="mx-auto">
                                            <p class="mb-0"><b>Lorem, ipsum.</b> Lorem, ipsum dolor.</p>
                                            <p><b>Lorem, ipsum.</b> Lorem, ipsum dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-bg-color-white">
        <div class="container pt-3 pb-5">
            <div class="row my-5 text-center">
                <div class="col-md-6 mx-auto mb-4 text-center">
                    <h2 class="text-color-grey p-3">Tipos de <b
                            class="bg-gradient-danger p-1 rounded rounded-15 text-white">Certificados</b></h2>
                    <p class="text-color-grey">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro quis dolore perferendis. Ab odio
                        quo adipisci labore illum exercitationem dolorum?
                    </p>
                </div>
            </div>

            <div class="container pb-5 position-relative z-index-3 text-color-grey">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-7">
                        <div class="card">
                            <div class="text-center mt-n5 z-index-1">
                                <div class="position-relative">
                                    <div class="blur-shadow-avatar rounded-circle">
                                        <img class="avatar avatar-xxl shadow-lg pt-2 pb-2" src="<?= $ico ?>"
                                            alt="avatar">
                                    </div>
                                    <div class="colored-shadow rounded start-0 end-0 mx-auto avatar-xxl" style="background-image: url('<?= $ico ?>'></div>
                                    <div class=" colored-shadow start-0 end-0 mx-auto avatar-xxl"></div>
                                </div>
                            </div>
                            <div class="card-body text-center pb-0">
                                <h4 class="mb-0">Olivia Harper</h4>
                                <p>@oliviaharper</p>
                                <p class="mt-2">
                                    The connections you make at Web Summit are unparalleled, we met users all over the
                                    world.
                                </p>
                            </div>
                            <div class="card-footer text-center pt-2">
                                <div class="mx-auto">
                                    <a href="javascript:;" class="icon-move-right text-sm">See all products
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-7">
                        <div class="card">
                            <div class="text-center mt-n5 z-index-1">
                                <div class="position-relative">
                                    <div class="blur-shadow-avatar rounded-circle">
                                        <img class="avatar avatar-xxl shadow-lg pt-2 pb-2" src="<?= $ico ?>"
                                            alt="avatar">
                                    </div>
                                    <div class="colored-shadow rounded start-0 end-0 mx-auto avatar-xxl"
                                        style="background-image: url('<?= $ico ?>')"></div>
                                    <div class="colored-shadow start-0 end-0 mx-auto avatar-xxl"></div>
                                </div>
                            </div>
                            <div class="card-body text-center pb-0">
                                <h4 class="mb-0">Simon Lauren</h4>
                                <p>@simonlaurent</p>
                                <p class="mt-2">
                                    The networking at Web Summit is like no other European tech conference. Everything
                                    is amazing.
                                </p>
                            </div>
                            <div class="card-footer text-center pt-2">
                                <div class="mx-auto">
                                    <a href="javascript:;" class="icon-move-right text-sm">See all products
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-7">
                        <div class="card">
                            <div class="text-center mt-n5 z-index-1">
                                <div class="position-relative">
                                    <div class="blur-shadow-avatar rounded-circle">
                                        <img class="avatar avatar-xxl shadow-lg pt-2 pb-2" src="<?= $ico ?>"
                                            alt="avatar">
                                    </div>
                                    <div class="colored-shadow rounded start-0 end-0 mx-auto avatar-xxl"
                                        style="background-image: url(&quot;../assets/img/team-4.jpg&quot;);"></div>
                                    <div class="colored-shadow start-0 end-0 mx-auto avatar-xxl"></div>
                                </div>
                            </div>
                            <div class="card-body text-center pb-0">
                                <h4 class="mb-0">Lucian Eurel</h4>
                                <p>@luciaeurel</p>
                                <p class="mt-2">
                                    Web Summit will increase your appetite, your inspiration, your motivation and your
                                    network.
                                </p>
                            </div>
                            <div class="card-footer text-center pt-2">
                                <div class="mx-auto">
                                    <a href="javascript:;" class="icon-move-right text-sm">See all products
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="main-bg-color-grey">
        <div class="container pt-5 pb-2">
            <div class="container">
                <div class="row my-5">
                    <div class="col-12 col-lg-6 p-5">
                        <div class="card">
                            <img src="./assets/img/valores/integridad.jpeg" class="rounded rounded-15" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-color-white p-4">
                        <p class="mb-0">Lorem, ipsum dolor.</p>
                        <h2 class="text-color-white mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, perferendis!</h2>
                        <h6 class="text-color-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi similique ducimus dicta sed laudantium! Aperiam ducimus culpa doloribus veniam tempore blanditiis facilis repellendus magni. Harum quas aut aspernatur? Quaerat nostrum, eligendi tempora sequi numquam necessitatibus explicabo in, ex cum consectetur voluptate atque earum. Ex, sunt? Aut, quos impedit. Dignissimos, neque!</h6>
                        <p>
                            <button class="btn bg-gradient-warning btn-rounded-20p icon-move-right mt-2">Accion <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i></button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-bg-color-white">
        <div class="container pt-5 pb-2">
            <div class="container">
                <div class="row my-5">
                    <div class="col-12 col-lg-4 text-center">
                        <h3>Preguntas Frecuentes</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita assumenda necessitatibus corporis maiores laudantium corrupti voluptates, pariatur rerum mollitia dignissimos repellendus, dolorum iure nemo nobis dicta commodi quo facilis exercitationem.</p>
                        <p>
                            <button class="btn bg-gradient-warning btn-rounded-20p icon-move-right mt-2">Accion <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i></button>
                        </p>
                    </div>
                    <div class="col-12 col-lg-8 mx-auto">
                    <div class="accordion" id="accordionRental">
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        ¿Cómo hago un pedido?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0" aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0" aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
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
                                    <button class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ¿Cómo puedo hacer el pago?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0" aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0" aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
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
                                    <button class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Cuánto tiempo se tarda en recibir el pedido?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0" aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0" aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental">
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
                                    <button class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        ¿Puedo revender los productos?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0" aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0" aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRental">
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
                                    <button class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                                        ¿Dónde encuentro los detalles del envío?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0" aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0" aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
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
        </div>
    </div>

    <?php include './sections/page-sections/footer-2.php' ?>

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