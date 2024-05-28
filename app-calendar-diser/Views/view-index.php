<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php //include './views/sections/slider.php' 
?>

<main class="main-content position-relative border-radius-lg">
    <?php include './Views/sections/nav-bar.php' ?>

    <div class="container-fluid py-4">
        <div class="row mb-lg-7">
            <div class="col-12 ms-auto">
                <div class="d-flex mb-4">
                    <div class="pe-4 mt-1 position-relative ms-auto">
                        <p class="text-white text-xs font-weight-bold mb-2">
                            Equipo:
                        </p>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="avatar-group">
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Jessica Rowland">
                                    <img alt="Image placeholder" src="./assets/img/team-1.jpg" class />
                                </a>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Audrey Love">
                                    <img alt="Image placeholder" src="./assets/img/team-2.jpg"
                                        class="rounded-circle" />
                                </a>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Michael Lewis">
                                    <img alt="Image placeholder" src="./assets/img/team-3.jpg"
                                        class="rounded-circle" />
                                </a>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Lucia Linda">
                                    <img alt="Image placeholder" src="./assets/img/team-4.jpg"
                                        class="rounded-circle" />
                                </a>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Ronald Miller">
                                    <img alt="Image placeholder" src="./assets/img/team-5.jpg"
                                        class="rounded-circle" />
                                </a>
                            </div>
                        </div>
                        <hr class="vertical light mt-0" />
                    </div>
                    <div class="ps-4">
                        <button class="btn btn-outline-white btn-icon-only mb-0 mt-3 py-0" data-bs-toggle="modal"
                            data-target="#new-board-modal">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card card-calendar">
                    <div class="card-body p-3">
                        <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="row">
                    <div class="col-xl-12 col-md-6 mt-xl-0 mt-4">
                        <div class="card">
                            <div class="card-header p-3 pb-0">
                                <h6 class="mb-0">Próximos eventos</h6>
                            </div>
                            <div class="card-body border-radius-lg p-3">
                                <div class="d-flex">
                                    <div>
                                        <div
                                            class="icon icon-shape bg-danger-soft shadow text-center border-radius-md shadow-none">
                                            <i class="ni ni-money-coins text-lg text-danger text-gradient opacity-10"
                                                aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="numbers">
                                            <h6 class="mb-1 text-dark text-sm">Cyber Week</h6>
                                            <span class="text-sm">27 March 2021, at 12:30 PM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mt-4">
                                    <div>
                                        <div
                                            class="icon icon-shape bg-primary-soft shadow text-center border-radius-md shadow-none">
                                            <i class="ni ni-bell-55 text-lg text-primary text-gradient opacity-10"
                                                aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="numbers">
                                            <h6 class="mb-1 text-dark text-sm">
                                                Meeting with Marry
                                            </h6>
                                            <span class="text-sm">24 March 2021, at 10:00 PM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mt-4">
                                    <div>
                                        <div
                                            class="icon icon-shape bg-success-soft shadow text-center border-radius-md shadow-none">
                                            <i class="ni ni-books text-lg text-success text-gradient opacity-10"
                                                aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="numbers">
                                            <h6 class="mb-1 text-dark text-sm">
                                                Book Deposit Hall
                                            </h6>
                                            <span class="text-sm">25 March 2021, at 9:30 AM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mt-4">
                                    <div>
                                        <div
                                            class="icon icon-shape bg-warning-soft shadow text-center border-radius-md shadow-none">
                                            <i class="ni ni-delivery-fast text-lg text-warning text-gradient opacity-10"
                                                aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="numbers">
                                            <h6 class="mb-1 text-dark text-sm">
                                                Shipment Deal UK
                                            </h6>
                                            <span class="text-sm">25 March 2021, at 2:00 PM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mt-4">
                                    <div>
                                        <div
                                            class="icon icon-shape bg-info-soft shadow text-center border-radius-md shadow-none">
                                            <i class="ni ni-palette text-lg text-info text-gradient opacity-10"
                                                aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="numbers">
                                            <h6 class="mb-1 text-dark text-sm">
                                                Verify Dashboard Color Palette
                                            </h6>
                                            <span class="text-sm">26 March 2021, at 9:00 AM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 mt-4">
                        <div class="card bg-gradient-dark">
                            <div class="card-header bg-transparent p-3 pb-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h6 class="text-white mb-0">Productivity</h6>
                                        <p class="text-sm text-white">
                                            <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                                            <span class="font-weight-bold">4% more</span> in 2021
                                        </p>
                                    </div>
                                    <div class="col-5 text-end">
                                        <div class="dropdown me-3">
                                            <a class="cursor-pointer" href="javascript:;" id="dropdownTable"
                                                data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fa fa-ellipsis-h text-white" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end ms-n5 px-2 py-3"
                                                aria-labelledby="dropdownTable" data-popper-placement="bottom-start">
                                                <li>
                                                    <a class="dropdown-item border-radius-md"
                                                        href="javascript:;">Action</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item border-radius-md"
                                                        href="javascript:;">Another action</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item border-radius-md"
                                                        href="javascript:;">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="chart">
                                    <canvas id="chart-line-1" class="chart-canvas" height="100"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</main>
<?php
include './Views/form-modal/modal-event-edit.php';
include './Views/form-modal/modal-event-add.php';
/*include './Views/form-modal/modal-reporte-inst-02.php';
include './Views/form-modal/modal-reporte-inst-03.php';
include './Views/form-modal/modal-reporte-enc-01.php';
include './Views/form-modal/modal-reporte-enc-02.php';*/
?>