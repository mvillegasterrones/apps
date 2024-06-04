<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php //include './views/sections/slider.php' 
?>

<main class="main-content position-relative border-radius-lg">
    <?php include './Views/sections/nav-bar.php' ?>

    <div class="container-fluid py-4">
        <div class="row mb-lg-7">
            <div class="col-12 ms-auto">
                <div class="d-flex mb-1">

                    <h5 class="py-1"><i class="fa-duotone fa-calendar-users text-success"></i> PLANNER DISER</h5>

                    <div class="pe-4 mt-1 position-relative ms-auto" style="border: 0px solid yellow !important;">
                        <p class="text-white text-xs font-weight-bold mb-2">
                            Equipo:
                        </p>
                        <!-- // TODO: Lista de cons del equipo -->
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="avatar-group">
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Jessica Rowland">
                                    <img alt="Image placeholder" src="./assets/img/team-1.jpg" class />
                                </a>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Audrey Love">
                                    <img alt="Image placeholder" src="./assets/img/team-2.jpg" class="rounded-circle" />
                                </a>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Michael Lewis">
                                    <img alt="Image placeholder" src="./assets/img/team-3.jpg" class="rounded-circle" />
                                </a>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Lucia Linda">
                                    <img alt="Image placeholder" src="./assets/img/team-4.jpg" class="rounded-circle" />
                                </a>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Ronald Miller">
                                    <img alt="Image placeholder" src="./assets/img/team-5.jpg" class="rounded-circle" />
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

                <span class="badge bg-gradient-primary mt-0">Teams</span>
                <span class="badge bg-gradient-info mt-0">Zoom</span>
                <span class="badge bg-gradient-success mt-0">Meet</span>
                <span class="badge bg-gradient-warning mt-0">Presencial</span>

            </div>

            <div class="col-xl-9">
                <div class="card card-calendar">
                    <div class="card-body p-3">
                        <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
                    </div>
                </div>



                <div class="card mt-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0" id="tbl-report-calendar">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                            Project</th>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">
                                            Budget</th>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status</th>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">
                                            Completion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--<tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-spotify.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
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
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-dark mb-0">
                                                <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-invision.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-xs">Invision</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">$5,000</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot me-4">
                                                <i class="bg-success"></i>
                                                <span class="text-dark text-xs">done</span>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 text-xs">100%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-dark mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-jira.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-xs">Jira</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">$3,400</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot me-4">
                                                <i class="bg-danger"></i>
                                                <span class="text-dark text-xs">canceled</span>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 text-xs">30%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"
                                                            style="width: 30%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-dark mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-slack.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-xs">Slack</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">$1,000</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot me-4">
                                                <i class="bg-danger"></i>
                                                <span class="text-dark text-xs">canceled</span>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 text-xs">0%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"
                                                            style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-dark mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-webdev.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-xs">Webdev</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">$14,000</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot me-4">
                                                <i class="bg-info"></i>
                                                <span class="text-dark text-xs">working</span>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 text-xs">80%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"
                                                            style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-dark mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-xd.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-xs">Adobe XD</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">$2,300</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot me-4">
                                                <i class="bg-success"></i>
                                                <span class="text-dark text-xs">done</span>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 text-xs">100%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-dark mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>

            <div class="col-xl-3">
                <div class="row">
                    <div class="col-xl-12 col-md-6 mt-xl-0 mt-4 ms-auto">
                        <div class="card h-100">
                            <div class="card-header p-3 pb-0">
                                <h6 class="mb-0">Próximos eventos</h6>
                            </div>
                            <div class="card-body border-radius-lg p-3" id="events-recents">

                                <div class="mt-2">
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Cargando...
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
                            © MINEDU
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , Elaborado por
                            <a href="https://www.minedudiser.com" class="font-weight-bold" target="_blank">DISER -
                                APMGI</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link text-muted" target="_blank">Dirección de
                                    Servicios Educativos en el Ámbito Rural</a>
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
?>