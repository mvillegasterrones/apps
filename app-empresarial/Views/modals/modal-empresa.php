<!-- Modal -->
<div class="modal fade" id="modal-form-empresa" tabindex="-1" role="dialog" aria-labelledby="modalformempresaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg rounded rounded-6" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient">Registrar Empresa</h3>
                        <p class="mb-0 d-none" id="spin-buscando"><i class="fa-duotone fa-spinner-third fa-spin"></i> Buscando...</p>
                        <p class="mb-0 d-none" id="spin-ok"><i class="fa-solid fa-check-circle text-success"></i> Consulta realizada</p>
                    </div>
                    <div class="card-body pb-3">
                        <form role="form text-left" id="form-empresa" name="form-empresa">

                            <input type="hidden" id="id" name="id" value="0">
                            <input type="hidden" id="action" name="action" value="set-empresa">

                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <label>RUC</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nro. de RUC" value="" aria-label="Icono" aria-describedby="icono-addon" id="emp_ruc" name="emp_ruc" maxlength="11">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-9">
                                    <label>RAZÓN SOCIAL</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="-" aria-label="-" aria-describedby="denominacion-addon" id="emp_razon_social" name="emp_razon_social" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <label>DIRECCIÓN</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="-" aria-label="-" aria-describedby="descripcion-addon" id="emp_direccion" name="emp_direccion" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label>REGIÓN</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="-" aria-label="-" aria-describedby="descripcion-addon" id="emp_dpto" name="emp_dpto" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label>PROVINCIA</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="-" aria-label="-" aria-describedby="descripcion-addon" id="emp_provincia" name="emp_provincia" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label>DISTRITO</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="-" aria-label="-" aria-describedby="descripcion-addon" id="emp_distrito" name="emp_distrito" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label>UBIGEO</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="-" aria-label="-" aria-describedby="descripcion-addon" id="emp_ubigeo" name="emp_ubigeo" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label>CONDICIÓN</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="-" aria-label="-" aria-describedby="descripcion-addon" id="emp_condicion" name="emp_condicion" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label>ESTADO</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="-" aria-label="-" aria-describedby="descripcion-addon" id="emp_estado" name="emp_estado" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="button" class="btn bg-gradient-primary btn-sm btn-rounded w-100 mt-4 mb-0" onclick=""><i class="fa-duotone fa-save"></i> Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>