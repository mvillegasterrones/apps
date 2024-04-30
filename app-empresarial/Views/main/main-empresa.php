<div class="row mt-0">
    <div class="col-lg-8 col-md-6 mb-4 mb-lg-0">
        <div class="card h-100 ">
            <div class="card-header">
                <div class="row text-uppercase">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-0">
                            <i class="fa-duotone fa-cubes"></i> Lista de Empresas Registradas
                        </h6>
                    </div>
                    <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-xs btn-outline-primary mb-0" onclick="pg_body().on_show_hide('section-empresas', 'section-rubros')"><i class="fa-regular fa-arrow-left"></i></button>
                        <button type="button" class="btn btn-xs btn-outline-primary mb-0"><i class="fa-regular fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <ul class="list-group list-group-flush" id="list-empresas"></ul>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header pb-0 p-3 text-uppercase">
                <h6 class="mb-0">
                    <i class="fa-solid fa-circle-check text-success"></i> Empresa Activa
                </h6>
            </div>
            <div class="card-body p-3" id="empresa-activa">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="fas fa-info-circle text-info opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm" id="datos-rubro">-</h6>
                                <span class="text-xs">Rubro</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="fas fa-info-circle text-info opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm" id="datos-empresa">-</h6>
                                <span class="text-xs">Nro. RUC / Razón Social<!--<span class="font-weight-bold">15 open</span>--></span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="fas fa-info-circle text-info opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm" id="datos-direccion">-</h6>
                                <span class="text-xs">Domicilio Fiscal SUNAT</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="fas fa-info-circle text-info opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm" id="datos-ubicacion">-</h6>
                                <span class="text-xs">Región / Provincia / Distrito</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="fas fa-info-circle text-info opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm" id="datos-estado">-</h6>
                                <span class="text-xs">Estado SUNAT</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="fas fa-info-circle text-info opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm" id="datos-condicion">-</h6>
                                <span class="text-xs">Condición SUNAT</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>