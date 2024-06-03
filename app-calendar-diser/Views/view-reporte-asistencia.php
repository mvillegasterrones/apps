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
                        <h5><?= '{' . $_REQUEST['id'] . '} -' . $_REQUEST['denominacion'] ?></h5>
                        <span class="mb-4"><i class="fa-solid fa-calendar-days text-warning"></i>
                            <?= $_REQUEST['fi'] . ' - ' . $_REQUEST['fe'] ?></span>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<div class="row mt-2">
    <div class="col-12 mt-2 col-lg-8 m-auto mt-1">
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0" id="tbl-reporte-asistencia">
                    <thead class="text-center">
                        <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">DRE/REGION</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">UGEL
                            </th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">CARGO</th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                CODMOD</th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                DNI - APELLIDOS Y NOMBRES</th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">CORREO
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">CELULAR
                            </th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>