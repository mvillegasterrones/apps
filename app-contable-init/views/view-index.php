<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php include './views/sections/slider.php' ?>

<main class="main-content position-relative border-radius-lg">
    <?php include './views/sections/nav-bar.php' ?>

    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">

                <!--<h1>Hola! Bienvenido <code><?= $_SESSION['user_rol'] ?></code></h1>-->

                <div class="row mt-0">
                    <div class="col-12 col-lg-5">
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
                                            <h6 class="h6 mt-0"><i class="fas fa-check-circle text-success"></i> <?= $_SESSION['user_ruc'] .'<br>'. $_SESSION['user_empresa'] ?></h6>
                                            <p class="text-sm">RUC / EMPRESA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0" id="table-users-list">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">EMPLEADO</th>
                                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">CARGO</th>
                                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">ESTADO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--<tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div>
                                                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2">
                                                        </div>
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-xs">Spotify</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">$2,500</p>
                                                </td>
                                                <td>
                                                    <span class="badge badge-dot me-4">
                                                        <i class="bg-info"></i>
                                                        <span class="text-dark text-xs">working</span>
                                                    </span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 text-xs">60%</span>
                                                        <div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <button class="btn btn-link text-dark mb-0">
                                                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>-->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 col-md-6 mb-4 mb-md-0">
                                <div class="card bg-gradient-dark">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <sup class="text-white">$</sup> <span class="h2 text-white">3,300</span>
                                            <div class="text-white opacity-8 mt-2 text-sm">Your current balance</div>
                                            <div>
                                                <span class="text-success font-weight-600">+ 15%</span> <span class="text-white opacity-8">($250)</span>
                                            </div>
                                        </div>
                                        <button class="btn btn-sm btn-white mb-0 w-100">Add credit</button>
                                    </div>
                                    <div class="card-footer pt-0">
                                        <div class="row">
                                            <div class="col">
                                                <small class="text-white opacity-8">Orders: 60%</small>
                                                <div class="progress progress-xs my-2">
                                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                                </div>
                                            </div>
                                            <div class="col"><small class="text-white opacity-8">Sales: 40%</small>
                                                <div class="progress progress-xs my-2">
                                                    <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card bg-gradient-danger h-100">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col">
                                                <img src="../../assets/img/logos/bitcoin.jpg" class="w-30 border-radius-md" alt="Image placeholder">
                                            </div>
                                            <div class="col-auto">
                                                <span class="badge badge-lg badge-success">Active</span>
                                            </div>
                                        </div>
                                        <div class="my-4">
                                            <p class="text-white opacity-8 mb-0 text-sm">Address</p>
                                            <div class="h6 text-white cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="bottom">0yx8Wkasd8uWpa083Jj81qZhs923K21</div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col">
                                                <p class="text-white opacity-8 mb-0 text-sm">Name</p>
                                                <span class="d-block h6 text-white">John Snow</span>
                                            </div>
                                            <div class="col ms-auto text-end">
                                                <div class="btn-groups mt-3">
                                                    <div class="btn rounded-circle btn-sm btn-white mb-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <i class="ni ni-bold-down p-2"></i>
                                                    </div>
                                                    <div class="btn rounded-circle btn-sm btn-white mb-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <i class="ni ni-bold-up p-2"></i>
                                                    </div>
                                                    <div class="btn rounded-circle btn-sm btn-white mb-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <i class="ni ni-curved-next p-2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="card ">
                                <div class="card-header pb-0 p-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-2">Sales by Country</h6>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center ">
                                        <tbody>
                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div>
                                                            <img src="../../assets/img/icons/flags/US.png" alt="Country flag">
                                                        </div>
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                            <h6 class="text-sm mb-0">United States</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                        <h6 class="text-sm mb-0">2500</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                        <h6 class="text-sm mb-0">$230,900</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                        <h6 class="text-sm mb-0">29.9%</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div>
                                                            <img src="../../assets/img/icons/flags/DE.png" alt="Country flag">
                                                        </div>
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                            <h6 class="text-sm mb-0">Germany</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                        <h6 class="text-sm mb-0">3.900</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                        <h6 class="text-sm mb-0">$440,000</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                        <h6 class="text-sm mb-0">40.22%</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div>
                                                            <img src="../../assets/img/icons/flags/GB.png" alt="Country flag">
                                                        </div>
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                            <h6 class="text-sm mb-0">Great Britain</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                        <h6 class="text-sm mb-0">1.400</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                        <h6 class="text-sm mb-0">$190,700</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                        <h6 class="text-sm mb-0">23.44%</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div>
                                                            <img src="../../assets/img/icons/flags/BR.png" alt="Country flag">
                                                        </div>
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                            <h6 class="text-sm mb-0">Brasil</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                        <h6 class="text-sm mb-0">562</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                        <h6 class="text-sm mb-0">$143,960</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                        <h6 class="text-sm mb-0">32.14%</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>