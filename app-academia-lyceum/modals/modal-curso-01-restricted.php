

<!-- Card de ocsto del curso -->
<div class="modal fade" id="modal-curso-01-restricted"
     tabindex="-1"
     aria-labelledby="exampleModalLabel"
     data-mdb-modal-initialized="true"
     data-mdb-backdrop="static"
     data-mdb-keyboard="false"
     aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title fw-bold"><i class="fas fa-info-circle"></i> Suscribirme al curso</p>
            </div>
            <div class="modal-body text-start">

                <div class="d-md-flex justify-content-between mt-4 pt-1 mb-5">
                    <div class="d-flex mb-4 mb-md-0">
                        <div class="flex-shrink-0">
                            <a href="javascript:;" data-mdb-ripple-init>
                                <img class="rounded-5 shadow-4 h-auto" src="./img/curso-01/banner-sm.png" alt="Generic placeholder image" style="width: 120px" data-mdb-ripple-init>
                            </a>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <p class="mb-1">
                                <strong><a href="#!" class="text-reset text-uppercase"><?= $titulo_curso_01 ?></a></strong>
                            </p>
                            <p class="mb-1 h4"><?= $precio_curso_01 ?></p>
                            <p class="text-muted mb-1"><i class="fas fa-check-circle text-success"></i> Curso 100% Virtual</p>
                            <p class="text-muted mb-1"><i class="fas fa-check-circle text-success"></i> Modalidad asincrónica</p>
                            <p class="text-muted mb-1"><i class="fas fa-check-circle text-success"></i> +17 horas académicas</p>
                            <p class="text-muted mb-4">
                                <i class="fa-regular fa-bookmark text-warning"></i> Proyectos Sociales
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-regular fa-star-half-stroke text-warning"></i>
                            </p>
                            <div class="row">
                                <p class="text-muted mb-1"><i class="fas fa-check"></i> Tarjeta de Credito/Debito</p>
                                <!--<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12" data-mdb-ripple-init>
                                    <p class="text-muted mb-1">Crédito/Debito</p>
                                    <a href="https://bit.ly/Curso_marco_MyE_proyectos_sociales" target="_blank"><img src="https://produzaseusucesso.com/wp-content/uploads/2020/09/hotmart-vertical-version-1024x1024.jpg" class="w-100 border border-5 rounded rounded-7" alt=""></a>
                                </div>-->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <iframe class="border border-5 rounded rounded-7" src="https://pay.hotmart.com/F75908508N?_hi=eyJzaWQiOiIyMDMzODg0OGVkNTA0NjE2ODA2NmMzZDMzZWUyZDQyNyJ9.1706634695337&bid=1706634698286" style="width: 100%; height: 500px;" frameborder="0"></iframe>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-2" data-mdb-ripple-init>
                                    <p class="text-muted mb-1"><i class="fas fa-check"></i> Yape</p>
                                    <img src="./img/alvaro-yape.png" class="w-100 border border-5 rounded rounded-7" alt="">
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-2" data-mdb-ripple-init>
                                    <p class="text-muted mb-1"><i class="fas fa-check"></i> Plin</p>
                                    <img src="./img/alvaro-plin.png" class="w-100 border border-5 rounded rounded-7" alt="">
                                </div>
                                <div class="col-12">
                                    <div class="alert alert-success">
                                        <i class="fas fa-info-circle"></i> Envie la captura de pantalla del pago realizado al <strong><a href="https://wa.link/2n62to" target="_blank">WhatsApp</a></strong> o escanea el siguiente QR QR
                                    </div>
                                    <p class="text-center align-content-center"><img src="./img/wApp-QR.png" class="w-25 rounded rounded-7" alt=""></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--<div>
                        <p><?= $precio_curso_01 ?></p>
                    </div>-->
                </div>


                <!--<div id="radio-cards">
                    <p class="h4 mb-1">Medio de pago</p>
                    <div class="row gx-xl-4">
                        <div class="col-md-4 mb-4">
                            <label>
                                <input id="radioDefault1" type="radio" name="defaultGroup" class="card-input-element" autocompleted="">

                                <div class="card card-input">
                                    <div class="card-body">
                                        <p class="text-uppercase fw-bold text-muted">Yape</p>
                                        <p class="">
                                            <img src="./img/yape.png" class="w-75" alt="">
                                        </p>
                                        <p class="mb-0">$279 / year</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="col-md-4 mb-4">
                            <label>
                                <input id="radioDefault2" type="radio" name="defaultGroup" class="card-input-element" checked="" autocompleted="">

                                <div class="card card-input">
                                    <div class="card-body">
                                        <p class="text-uppercase fw-bold text-muted">Plin</p>
                                        <p class="h2 fw-bold">3 items</p>
                                        <p class="mb-0">$499 / year</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="col-md-4 mb-4">
                            <label>
                                <input id="radioDefault3" type="radio" name="defaultGroup" class="card-input-element" autocompleted="">

                                <div class="card card-input">
                                    <div class="card-body">
                                        <p class="text-uppercase fw-bold text-muted">Hotmart</p>
                                        <p class="h2 fw-bold">7 items</p>
                                        <p class="mb-0">$799 / year</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>-->

            </div>
            <div class="modal-footer justify-content-center justify-content-md-between">
                <!--<button type="button" class="btn btn-tertiary px-3"
                        data-mdb-ripple-color="primary"
                        data-mdb-ripple-init
                        data-mdb-dismiss="modal">
                    Cerrar
                </button>-->
                <div>

                    <!--<button type="button" class="btn btn-secondary me-2 mb-2 mb-sm-0">
                                            Continue shopping
                                       </button>-->
                    <button type="button" class="btn btn-primary mb-2 mb-sm-0"
                            data-mdb-ripple-init
                            data-mdb-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
