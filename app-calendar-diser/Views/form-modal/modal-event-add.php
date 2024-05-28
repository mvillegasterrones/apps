<!-- Modal -->
<div class="modal fade" id="modal-event-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient"><i
                                class="fa-regular fa-calendar-range"></i> NUEVO EVENTO</h3>
                        <!--<p class="mb-0"><i class="fa-regular fa-info-circle"></i> Reporte de IE registradas</p>-->
                    </div>
                    <div class="card-body card-color-pastel pb-3 text-uppercase">
                        <button class="btn btn-primary w-100 btn-sm mb-2" type="button" id="btn-cargando" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Cargando registros, espere...
                        </button>
                        <form class="needs-validation was-validated" name="form-event-add" id="form-event-add"
                            role="form text-left">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Área <b style="color: red !important;">*</b></label>
                                    <select class="form-control form-control-sm" name="cal_idArea" id="cal_idArea"
                                        required></select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">Tipo <b style="color: red !important;">*</b></label>
                                    <select class="form-control form-control-sm" name="cal_tipo_programa"
                                        id="cal_tipo_programa" required>
                                        <option value="" selected disabled>.: Seleccione :.</option>
                                        <option>1. Curso</option>
                                        <option>2. Taller de Asistencia Técnica</option>
                                        <option>3. Taller de Fortalecimiento de Capacidades</option>
                                        <option>4. Programa de Actualización</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label for="">Título (max 250 caracteres) <b
                                            style="color: red !important;">*</b></label>
                                    <textarea class="form-control form-control-sm" name="cal_nombre_programa"
                                        id="cal_nombre_programa" maxlength="250" placeholder="Ingrese título"
                                        required></textarea>
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label for="">Descripción <b style="color: red !important;">*</b></label>
                                    <textarea class="form-control form-control-sm" name="cal_descripcion_programa"
                                        id="cal_descripcion_programa" placeholder="Ingrese Descripción"
                                        required></textarea>
                                </div>
                                <div class="col-12 col-sm-12 mt-3">
                                    <label for="">Agenda <b style="color: red !important;">*</b></label>
                                    <textarea class="form-control form-control-sm" name="cal_agenda" id="cal_agenda"
                                        placeholder="Ingrese agenda" required></textarea>
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label for="">Modalidad <b style="color: red !important;">*</b></label>
                                    <select class="form-control form-control-sm" name="cal_modalidad" id="cal_modalidad"
                                        required>
                                        <option value="" selected disabled>.: Seleccione :.</option>
                                        <option>1. Virtual (Teams, Zoom, Meet, etc)</option>
                                        <option>2. Presencial</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label for="">Cobertura <b style="color: red !important;">*</b></label>
                                    <select class="form-control form-control-sm" name="cal_cobertura" id="cal_cobertura"
                                        required>
                                        <option value="" selected disabled>.: Seleccione :.</option>
                                        <option>1. Nacional</option>
                                        <option>2. Regional</option>
                                        <option>3. UGEL</option>
                                        <option>4. IE</option>
                                        <option>5. MINEDU</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label for="">Region/es</label>
                                    <select class="form-control" name="choices-multiple-remove-button"
                                        id="choices-multiple-remove-button" multiple>
                                        <option value="Choice 1" selected>Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                        <option value="Choice 4">Choice 4</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="text-center">
                            <button type="button" class="btn bg-gradient-primary btn-sm btn-rounded w-25 mt-4 mb-0"
                                data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>