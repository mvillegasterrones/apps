<div class="modal fade" id="modal-register" tabindex="-1"
     aria-labelledby="modal-registerLabel"
     aria-hidden="true"
     data-mdb-backdrop="static"
     data-mdb-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-registerLabel"><i class="fas fa-plus"></i> Login / Registrarme</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Pills navs -->
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="mdb-tab-login" data-mdb-pill-init="" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true" data-mdb-tab-initialized="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="mdb-tab-register" data-mdb-pill-init="" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false" data-mdb-tab-initialized="true" tabindex="-1">Registrarme</a>
                    </li>
                </ul>
                <!-- Pills navs -->

                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="pills-login" role="tabpanel" aria-labelledby="mdb-tab-login">

                        <form class="row g-3 needs-validation" id="form-login" novalidate>
                            <div class="col-12">
                                <div class="input-group form-outline" data-mdb-input-init>
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" id="login_correo" aria-describedby="inputGroupPrepend" required />
                                    <label for="login_correo" class="form-label">Correo</label>
                                    <div class="valid-feedback">Correcto!</div>
                                    <div class="invalid-feedback">Correo requerido!.</div>
                                </div>
                            </div>

                            <div class="col-12 mt-5">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="password" class="form-control" id="login_password" required />
                                    <label for="login_password" class="form-label">Password</label>
                                    <div class="valid-feedback">Correcto!</div>
                                    <div class="invalid-feedback">Password requerido!.</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="alert alert-info" id="iniciando" style="display: none;">
                                    <i class="fas fa-spinner fa-spin"></i> Iniciando sesión...
                                </div>
                                <div class="alert alert-success" id="ok" style="display: none;">
                                    <i class="fas fa-check-circle"></i> Bienvenido...
                                </div>
                                <div class="alert alert-warning" id="alerta" style="display: none;">
                                    <i class="fas fa-exclamation-triangle"></i> Usuario no registrado
                                </div>
                                <div class="alert alert-warning" id="error" style="display: none;">
                                    <i class="fas fa-exclamation-triangle"></i> Usuario no registrado
                                </div>
                                <div class="alert alert-danger" id="error2" style="display: none;">
                                    <i class="fas fa-times-circle"></i> Ingresar usuario!
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" data-mdb-ripple-init><i class="fas fa-check-circle"></i> Iniciar</button>

                            <div class="row text-center mb-4 mt-4">
                                <div class="col-12">
                                    <!-- Simple link -->
                                    <a href="https://api.whatsapp.com/send?phone=51902821901&text=Hola%20Lyceum%20Group!,%20Me%20olvide%20mis%20credenciales%20de%20acceso%20a%20la%20plataforma,%20soy:%20" target="_blank">¿Olvidaste tus credenciales?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="mdb-tab-register">

                        <form id="form-register-user" name="form-register-user" class="row g-3 needs-validation" novalidate>
                            <input type="hidden" id="accion" name="accion" value="sp_register_user">
                            <div class="col-12">
                                <div class="form-outline mt-0" data-mdb-input-init>
                                    <input type="number" class="form-control" id="reg-dni" name="reg-dni" maxlength="8" required />
                                    <label for="reg-dni" class="form-label">Nro. DNI</label>
                                    <!--<div class="valid-feedback">Looks good!</div>-->
                                    <div class="valid-feedback">Correcto!</div>
                                    <div class="invalid-feedback">DNI requerido!.</div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="text" class="form-control" id="reg-apellidos-nombres" name="reg-apellidos-nombres" required />
                                    <label for="reg-apellidos-nombres" class="form-label">Apellidos y Nombres</label>
                                    <div class="valid-feedback">Correcto!</div>
                                    <div class="invalid-feedback">Datos requerido!.</div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 mb-2">
                                <div class="input-group form-outline" data-mdb-input-init>
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" id="reg-correo" name="reg-correo" aria-describedby="inputGroupPrepend" maxlength="100" required />
                                    <label for="reg-correo" class="form-label">Correo</label>
                                    <div class="valid-feedback">Correcto!</div>
                                    <div class="invalid-feedback">Correo requerido!.</div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="password" class="form-control" id="reg-password" name="reg-password" maxlength="8" required />
                                    <label for="reg-password" class="form-label">Password</label>
                                    <div class="valid-feedback">Correcto!</div>
                                    <div class="invalid-feedback">Password requerido!.</div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="text" class="form-control" id="reg-celular" name="reg-celular" maxlength="9" required />
                                    <label for="reg-celular" class="form-label">Celular</label>
                                    <div class="valid-feedback">Correcto!</div>
                                    <div class="invalid-feedback">Celular requerido!.</div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 d-none">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="text" class="form-control" id="reg-codigo" name="reg-codigo" value="00000000" required />
                                    <label for="reg-codigo" class="form-label">Código</label>
                                    <div class="valid-feedback">Correcto!</div>
                                    <div class="invalid-feedback">Código requerido!.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="invalidCheck" id="invalidCheck" required />
                                    <label class="form-check-label" for="invalidCheck">Acepto los términos y condiciones</label>
                                    <div class="valid-feedback">Correcto!</div>
                                    <div class="invalid-feedback">Debe aceptar los términos y condiciones</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary btn-block" type="submit" data-mdb-ripple-init>Eniar formulario</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- Pills content -->

            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                        data-mdb-dismiss="modal">Cerrar</button>
            </div>-->
        </div>
    </div>
</div>