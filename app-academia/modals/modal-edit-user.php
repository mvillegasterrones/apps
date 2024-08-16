<div class="modal fade" id="modal-edit-user" tabindex="-1"
     aria-labelledby="modal-edit-userLabel"
     aria-hidden="true"
     data-mdb-backdrop="static"
     data-mdb-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-registerLabel"><i class="fas fa-pen"></i> Editar</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" novalidate>
                    <input type="text" class="d-none" id="id" value="0">
                    <div class="col-12">
                        <div class="form-outline mt-0" data-mdb-input-init>
                            <input type="number" class="form-control" id="reg-dni" value="47352403" maxlength="8" readonly required />
                            <label for="reg-dni" class="form-label">Nro. DNI</label>
                            <!--<div class="valid-feedback">Looks good!</div>-->
                            <div class="valid-feedback">Correcto!</div>
                            <div class="invalid-feedback">DNI requerido!.</div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" class="form-control text-uppercase" id="reg-apellidos-nombres" value="" readonly required />
                            <label for="reg-apellidos-nombres" class="form-label">Apellidos y Nombres</label>
                            <div class="valid-feedback">Correcto!</div>
                            <div class="invalid-feedback">Datos requerido!.</div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 mb-2">
                        <div class="input-group form-outline" data-mdb-input-init>
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="reg-correo" value="" aria-describedby="inputGroupPrepend" readonly required />
                            <label for="reg-correo" class="form-label">Correo</label>
                            <div class="valid-feedback">Correcto!</div>
                            <div class="invalid-feedback">Correo requerido!.</div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 d-none">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" class="form-control" id="reg-codigo" value="" required />
                            <label for="reg-codigo" class="form-label">Código</label>
                            <div class="valid-feedback">Correcto!</div>
                            <div class="invalid-feedback">Código requerido!.</div>
                        </div>
                    </div>
                    <div class="col-4 mt-4">
                        <label class="form-label select-label mb-0 active" style="margin-left: 0px;">Curso 1</label>
                        <select name="reg-curso-1" id="reg-curso-1" class="form-control">
                            <option>No</option>
                            <option>Si</option>
                        </select>
                        <!--<select id="reg-curso-1" data-mdb-select-init class="select-initialized" data-mdb-select-initialized="true">
                            <option>No</option>
                            <option>Si</option>
                        </select>-->
                    </div>
                    <div class="col-4 mt-4">
                        <label class="form-label select-label mb-0 active" style="margin-left: 0px;">Curso 2</label>
                        <select id="reg-curso-2" disabled data-mdb-select-init class="select-initialized" data-mdb-select-initialized="true">
                            <option>No</option>
                            <option>Si</option>
                        </select>
                    </div>
                    <div class="col-4 mt-4">
                        <label class="form-label select-label mb-0 active" style="margin-left: 0px;">Curso 3</label>
                        <select id="reg-curso-3" disabled data-mdb-select-init class="select-initialized" data-mdb-select-initialized="true">
                            <option>No</option>
                            <option>Si</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary btn-block" type="submit" onclick="sp_update_info_user_by_ID()" data-mdb-ripple-init>Actualizar</button>
                    </div>
                </form>
            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-mdb-ripple-init
                        data-mdb-dismiss="modal">Cerrar</button>
            </div>-->
        </div>
    </div>
</div>