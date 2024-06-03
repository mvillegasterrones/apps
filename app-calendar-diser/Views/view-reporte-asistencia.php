<div class="row mt-4">
    <div class="col-12 col-lg-8 m-auto">
        <form class="multisteps-form__form needs-validation was-validated mb-8" id="form-registro-asistencia"
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
                        <div class="col-12 col-sm-4">
                            
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                            
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0">

                        </div>
                    </div>
                    <div class="row mt-0">
                        
                    </div>
                    <div class="row mt-3">

                    </div>
                    <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-danger ms-auto mb-0" type="button" title="Enviar formulario" onclick="">
                            <i class="fas fa-times-circle"></i>
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>