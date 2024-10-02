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

    <div class="pb-5 main-bg-color-warning">
        <div class="container text-center">
            <div class="row my-5">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="text-color-white p-3">Innovación <b
                            class="main-bg-color-grey p-1 rounded rounded-15">Empresarial</b></h2>
                    <p class="text-color-white">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro quis dolore perferendis. Ab odio
                        quo adipisci labore illum exercitationem dolorum?
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 text-start text-white">
                    <p class="mb-0">Detalle 0001</p>
                    <h5 class="text-white mb-2">Lorem ipsum dolor sit amet.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ea veniam suscipit sapiente
                        incidunt provident accusamus, et sint porro eius, natus quae. Fuga, eos. Officiis numquam sed
                        perferendis dicta iure.</p>
                    <i class="fas fa-edit text-color-grey"></i> Lorem ipsum dolor sit.<br>
                    <i class="fas fa-edit text-color-grey"></i> Lorem ipsum dolor sit.<br>
                    <i class="fas fa-edit text-color-grey"></i> Lorem ipsum dolor sit.<br>
                    <i class="fas fa-edit text-color-grey"></i> Lorem ipsum dolor sit.<br>
                    <i class="fas fa-edit text-color-grey"></i> Lorem ipsum dolor sit.<br>
                    <button class="btn main-bg-color-grey btn-dark btn-rounded-20p mt-4">Acction 1</button>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-body text-center pb-0">
                                    <h4 class="mb-0">Olivia Harper</h4>
                                    <p>@oliviaharper</p>
                                    <p class="mt-2">
                                        The connections you make at Web Summit are unparalleled, we met users all over
                                        the world.
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
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-body text-center pb-0">
                                    <h4 class="mb-0">Olivia Harper</h4>
                                    <p>@oliviaharper</p>
                                    <p class="mt-2">
                                        The connections you make at Web Summit are unparalleled, we met users all over
                                        the world.
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
                        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-body text-center pb-0">
                                    <h4 class="mb-0">Olivia Harper</h4>
                                    <p>@oliviaharper</p>
                                    <p class="mt-2">
                                        The connections you make at Web Summit are unparalleled, we met users all over
                                        the world.
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
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-body text-center pb-0">
                                    <h4 class="mb-0">Olivia Harper</h4>
                                    <p>@oliviaharper</p>
                                    <p class="mt-2">
                                        The connections you make at Web Summit are unparalleled, we met users all over
                                        the world.
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
            </div>
        </div>
    </div>

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