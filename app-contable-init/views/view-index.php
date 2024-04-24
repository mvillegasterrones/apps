<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php include './views/sections/slider.php' ?>

<main class="main-content position-relative border-radius-lg">
    <?php include './views/sections/nav-bar.php' ?>

    <div class="container-fluid py-4">
        <div class="row mt-4">

            <div class="col-12 mb-4">
                <div class="card shadow-lg">
                    <img src="<?= $ruta_local ?>assets/img/shapes/pattern-left.png" alt="pattern-lines" class="position-absolute overflow-hidden opacity-4 start-0 top-0 h-100 border-radius-xl" />
                    <img src="<?= $ruta_local ?>assets/img/shapes/pattern-right.png" alt="pattern-lines" class="position-absolute overflow-hidden opacity-4 end-0 top-0 h-100 border-radius-xl" />
                    <div class="card-body px-5 z-index-1 bg-cover">
                        <div class="row">
                            <div class="col-lg-3 col-12 my-auto">
                                <h4 class="text-body opacity-9 text-center">
                                    Since Last Charge
                                </h4>
                                <hr class="horizontal light mt-1 mb-3" />
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <h6 class="mb-0 text-body opacity-7">Distance</h6>
                                        <h3 class="text-body">
                                            145 <small class="text-sm align-top">Km</small>
                                        </h3>
                                    </div>
                                    <div class="ms-lg-6 ms-4 text-center">
                                        <h6 class="mb-0 text-body opacity-7">Average Energy</h6>
                                        <h3 class="text-body">
                                            300 <small class="text-sm align-top">Kw</small>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 text-center align-content-center">
                                <!--<img class="w-75 w-lg-100 mt-n7 mt-lg-n8 d-none d-md-block" src="<?= $ruta_local ?>assets/img/tesla.png" alt="car image" />-->
                                <img class="w-75 w-lg-75 mt-n7 mt-lg-n8 d-none d-md-block" src="<?= $ruta_local ?>assets/img/logos/empresas/logo-empresa-jym.png" alt="car image" />
                                <div class="d-flex align-items-center">
                                    <h4 class="text-body opacity-7 ms-0 ms-md-auto">
                                        Available Range
                                    </h4>
                                    <h2 class="text-body ms-2 me-auto">
                                        47<small class="text-sm align-top"> %</small>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12 my-auto">
                                <h4 class="text-body opacity-9">Nearest Charger</h4>
                                <hr class="horizontal light mt-1 mb-3" />
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0 text-body">Miclan, DW</h6>
                                        <h6 class="mb-0 text-body">891 Limarenda road</h6>
                                    </div>
                                    <div class="ms-lg-6 ms-4">
                                        <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 py-0">
                                            <i class="ni ni-map-big" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <!--<h1 class="mt-0">Bienvenido <code><?= $_SESSION['user_rol'] ?></code></h1>-->

                <div class="row mt-0">
                    <div class="col-12 col-lg-5 mb-2">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center border-bottom py-3">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle border border-primary">
                                        <img alt="Image placeholder" class="p-1" src="<?= $ruta_local ?>assets/img/logos/logo-user.png">
                                    </a>
                                    <div class="mx-3">
                                        <a href="javascript:;" class="text-dark font-weight-600 text-sm"><?= $_SESSION['user_datos'] ?></a>
                                        <small class="d-block text-muted"><?= $_SESSION['user_cargo'] ?></small>
                                    </div>
                                </div>
                                <div class="text-end ms-auto">
                                    <button type="button" class="btn btn-xs btn-primary mb-0">
                                        <i class="fas fa-pen pe-2" aria-hidden="true"></i> Editar
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="mb-1 border-bottom">

                                    <div class="d-flex">
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="h6 mt-0"><i class="fas fa-check-circle text-success"></i> <?= $_SESSION['user_apellidos'] ?></h6>
                                            <p class="text-sm">APELLIDOS</p>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="h6 mt-0"><i class="fas fa-check-circle text-success"></i> <?= $_SESSION['user_nombres'] ?></h6>
                                            <p class="text-sm">NOMBRES</p>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="h6 mt-0"><i class="fas fa-check-circle text-success"></i> <?= $_SESSION['user_documento'] ?></h6>
                                            <p class="text-sm">TIPO DOC / NRO</p>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-2">
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="h6 mt-0">
                                                <span class="badge badge-<?= $_SESSION['user_c_rol'] ?> badge-lg"><?= $_SESSION['user_rol'] ?></span>

                                                <span class="badge badge-<?= $_SESSION['user_c_estado'] ?> badge-lg"><?= $_SESSION['user_estado'] ?></span>
                                            </h6>
                                            <p class="text-sm">ROL / ESTADO</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="mb-1">
                                    <div class="d-flex mt-2">
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="h6 mt-0"><i class="fas fa-check-circle text-success"></i> <?= $_SESSION['user_ruc'] . '<br>' . $_SESSION['user_empresa'] ?></h6>
                                            <p class="text-sm">RUC / EMPRESA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7">
                        <div class="card">

                            <div class="card-header d-flex align-items-center border-bottom py-3">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle border border-primary">
                                        <img alt="Image placeholder" class="p-1" src="<?= $ruta_local ?>assets/img/systems-logo/sys-logo-sf.png">
                                    </a>
                                    <div class="mx-3">
                                        <a href="javascript:;" class="text-dark font-weight-600 text-sm">SELECCIONE SISTEMA</a>
                                        <!--<small class="d-block text-muted"><?= $_SESSION['user_cargo'] ?></small>-->
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row mt-2">
                                    <div class="col-12 col-md-3 mb-4 mb-md-0">
                                        <div class="card bg-gradient-dark text-center system-card">
                                            <div class="card-body">
                                                <div class="mb-2">
                                                    <img src="./assets/img/systems-logo/e-contable-sf.png" class="system-logo" alt="">
                                                    <small>CONTABLE</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-3 mb-4 mb-md-0">
                                        <div class="card bg-gradient-dark text-center system-card">
                                            <div class="card-body">
                                                <div class="mb-2">
                                                    <img src="./assets/img/systems-logo/e-farmacia-sf.png" class="system-logo" alt="">
                                                    <small>FARMACIA</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-3 mb-4 mb-md-0">
                                        <div class="card bg-gradient-dark text-center system-card">
                                            <div class="card-body">
                                                <div class="mb-2">
                                                    <img src="./assets/img/systems-logo/e-admin-sf.png" class="system-logo" alt="">
                                                    <small>ADMIN</small>
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
        </div>
    </div>
</main>