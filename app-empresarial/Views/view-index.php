<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php include './views/sections/slider.php' ?>

<main class="main-content position-relative border-radius-lg">
    <?php include './views/sections/nav-bar.php' ?>

    <div class="container-fluid py-4">
        <div class="row mt-4">

            <div class="col-12">

                <!--<h1 class="mt-0">Bienvenido <code><?= $_SESSION['user_rol'] ?></code></h1>-->

                <div class="row mt-0">
                    <!--<div class="col-12 col-lg-5 mb-2">
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
                    </div>-->

                    <div class="col-12 col-lg-12">

                        <div class="card">

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
                                    <button type="button" class="btn btn-xs btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#modal-form-rubro">
                                        <i class="fa-duotone fa-plus pe-2" aria-hidden="true"></i> Nuevo
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="text-center align-content-center" id="div-loader">
                                    <div class="spinner-border text-info" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div> Cargando...
                                </div>

                                <div class="row mt-2" id="main-cards"></div>

                                <?php include './Views/modals/modal-add-rubro.php' ?>

                            </div>
                        </div>

                        <?php include './Views/main/main-empresa.php' ?>

                        
                    </div>
                </div>

                

            </div>
        </div>
    </div>
</main>