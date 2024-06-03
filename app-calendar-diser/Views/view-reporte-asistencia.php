<div class="row mt-4 mb-0">
    <div class="col-12 col-lg-8 m-auto">
        <form class="multisteps-form__form needs-validation was-validated mb-0" id="form-registro-asistencia"
            name="form-registro-asistencia">
            <div class="card p-3 border-radius-xl js-active" data-animation="FadeIn">
                <h5 class="font-weight-bolder mb-0">
                    <img src="./assets/img/logos/logo-minedu.png" alt="">
                </h5>
                <p class="mb-0 text-sm">REPORTE DE ASISTENCIA</p>
                <div class="multisteps-form__content text-uppercase">
                    <div class="row mt-3">
                        <h5><?= $_REQUEST['denominacion'] ?></h5>
                        <span class="mb-2"><i class="fa-solid fa-calendar-days text-warning"></i>
                            <?= $_REQUEST['fi'] . ' - ' . $_REQUEST['fe'] ?></span>
                        <label class="text-info text-muted" onclick="location.reload()"><a
                                href="javascript:;"><i class="fa-regular fa-arrows-rotate"></i> Actualizar</a></label>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<div class="row mt-2">
    <div class="col-2"></div>
    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="card h-100">
            <div class="card-body p-3" id="card-chart-region">
                <label id="cargando"><i class="fas fa-spinner fa-spin"></i> Cargando...</label>
                <h6>Asistencia por DRE/Región</h6>
                <div class="chart pt-3">
                    <canvas id="chart-region" class="chart-canvas h-100"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="card h-100" id="card-chart-cargo">

            <div class="card-header pb-0 p-3">
                <label id="cargando"><i class="fas fa-spinner fa-spin"></i> Cargando...</label>
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">Reporte por cargo</h6>
                    <button type="button"
                        class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto"
                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Reporte de especialistas registrados por CARGO">
                        <i class="fas fa-info"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-3 mb-3">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center">
                        <div class="chart mt-2 text-white">
                            <canvas id="chart-cargo" class="chart-canvas text-white" height="200"></canvas>
                        </div>
                        <!--<a class="btn btn-sm bg-gradient-secondary mt-4">See all referrals</a>-->
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col-12 mt-2 col-lg-8 m-auto mt-1">
        <div class="card" id="card-table-reporte">
            <div class="table-responsive">
                <label id="cargando"><i class="fas fa-spinner fa-spin"></i> Cargando...</label>
                <table class="table align-items-center mb-0" id="tbl-reporte-asistencia">
                    <thead class="text-center">
                        <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">DRE/REGION
                            </th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">UGEL
                            </th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">CARGO
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                CODMOD</th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                DNI - APELLIDOS Y NOMBRES</th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                CORREO
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                CELULAR
                            </th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>