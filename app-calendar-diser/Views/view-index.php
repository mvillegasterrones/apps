<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php //include './views/sections/slider.php' 
?>

<main class="main-content position-relative border-radius-lg">
    <?php include './Views/sections/nav-bar.php' ?>

    <div class="container-fluid py-4">
        <div class="row mb-lg-7">
            <div class="col-12 ms-auto">
                <div class="d-flex mb-1">

                    <p><img src="./assets/img/logos/logo-minedu.png" style="width: 140px;height: 35px;" alt="logo-minedu"></p>
                    &nbsp;&nbsp;&nbsp;
                    <h5 class="py-1"><i class="fa-duotone fa-calendar-users"></i> PLANNER DISER 
                        <label class="text-info text-muted" onclick="pg_body().on_load()" id="loader-index">
                            <a href="javascript:;" style="color: yellow !important;">
                                <i class="fa-regular fa-arrows-rotate"></i> Actualizar</a>
                        </label>
                        <label class="" id="main-loader"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Cargando PLANNER...</label>
                    </h5>

                    <!--<div class="alert alert-primary pt-0 pb-0">
                        <h6 class="m-0">Crgando...</h6>
                    </div>-->

                    <div class="pe-4 mt-1 position-relative ms-auto" style="border: 0px solid yellow !important;">
                        <p class="text-white text-xs font-weight-bold mb-2">
                            Equipo:
                        </p>
                        <!-- // TODO: Lista de cons del equipo -->
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="avatar-group">
                                <?php
                                $nEquipo = 0;
                                do {
                                ?>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="<?= htmlspecialchars($equipo[$nEquipo]) ?>">
                                    <img alt="Image placeholder" src="./assets/img/logos/usuario.png" class />
                                </a>
                                <?php
                                    $nEquipo++;
                                } while ($nEquipo <= count($equipo) - 1);
                                ?>
                                <!--<a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Jessica Rowland">
                                    <img alt="Image placeholder" src="./assets/img/team-1.jpg" class />
                                </a>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Jessica Rowland">
                                    <img alt="Image placeholder" src="./assets/img/team-1.jpg" class />
                                </a>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Jessica Rowland">
                                    <img alt="Image placeholder" src="./assets/img/team-1.jpg" class />
                                </a>
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                    title="Jessica Rowland">
                                    <img alt="Image placeholder" src="./assets/img/team-1.jpg" class />
                                </a>
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
                                </a>-->
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

                <span class="badge bg-gradient-primary mt-0"><i class="fas fa-circle"></i> Teams</span>
                <span class="badge bg-gradient-info mt-0"><i class="fas fa-circle"></i> Zoom</span>
                <span class="badge bg-gradient-success mt-0"><i class="fas fa-circle"></i> Meet</span>
                <span class="badge bg-gradient-warning mt-0"><i class="fas fa-circle"></i> Presencial</span>
                <div class="col-12 mt-2">
                    Hola!
                </div>

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
                                            Tipo</th>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nombre - Titulo</th>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">
                                            -</th>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">
                                            Estado - Fecha</th>
                                        <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">
                                            Asistencia</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
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
                                <h6 class="mb-0">Próximas reuniones</h6>
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