<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php include './views/sections/slider.php'
?>

<main class="main-content position-relative border-radius-lg">
    <?php include './Views/sections/nav-bar.php' ?>

    <div class="container-fluid py-4" id="view-main">
        
        <label class="text-info text-muted" onclick="admin_reports().refresh()">
            <a href="javascript:;" style="color: yellow !important;">
                <i class="fa-regular fa-arrows-rotate"></i> Actualizar
            </a>
        </label>
        <div class="row mt-0">
            <div class="col-lg-7 col-md-12">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Instrumentos</h6>
                        <!--<div class="d-flex align-items-center">
                            <span class="badge badge-md badge-dot me-4">
                                <i class="bg-primary"></i>
                                <span class="text-dark text-xs">INST-01</span>
                            </span>
                            <span class="badge badge-md badge-dot me-4">
                                <i class="bg-dark"></i>
                                <span class="text-dark text-xs">INST-02</span>
                            </span>
                            <span class="badge badge-md badge-dot me-4">
                                <i class="bg-info"></i>
                                <span class="text-dark text-xs">INST-03</span>
                            </span>
                        </div>-->
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="330"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Total Instrumentos</h6>
                            <!--<button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" title="See which websites are sending traffic to your website">
                                <i class="fas fa-info"></i>
                            </button>-->
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-7 col-12 text-center">
                                <div class="chart mt-5">
                                    <canvas id="chart-doughnut" class="chart-canvas" height="200"></canvas>
                                </div>
                                <!--<a class="btn btn-sm bg-gradient-secondary mt-4">See all referrals</a>-->
                            </div>
                            <div class="col-lg-5 col-12">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="./assets/img/icons/ficha.png" class="avatar avatar-sm me-2" alt="logo_xd" />
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm"><i class="bg-primary" style="background-color: #2152ff !important;"></i> INST-01</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold" id="i01">
                                                        <i class="fas fa-spinner fa-spin"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="./assets/img/icons/ficha.png" class="avatar avatar-sm me-2" alt="logo_xd" />
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">INST-02</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold" id="i02">
                                                        <i class="fas fa-spinner fa-spin"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="./assets/img/icons/ficha.png" class="avatar avatar-sm me-2" alt="logo_xd" />
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">INST-03</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold" id="i03">
                                                        <i class="fas fa-spinner fa-spin"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="./assets/img/icons/encuesta.png" class="avatar avatar-sm me-2" alt="logo_xd" />
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">ENC-01</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold" id="e01">
                                                        <i class="fas fa-spinner fa-spin"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="./assets/img/icons/encuesta.png" class="avatar avatar-sm me-2" alt="logo_xd" />
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">ENC-02</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold" id="e02">
                                                        <i class="fas fa-spinner fa-spin"></i>
                                                    </span>
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


        <?php include './Views/form/main-admin.php' ?>
    </div>
</main>
<?php
include './views/form-modal/modal-reporte-inst-01-admin.php'
?>