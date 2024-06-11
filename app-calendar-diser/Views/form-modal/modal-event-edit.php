<!-- Modal -->
<div class="modal fade" id="modal-event-edit" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient"><i class="fa-regular fa-calendar-lines-pen"></i> EDITAR</h3>
                        <!--<p class="mb-0"><i class="fa-regular fa-info-circle"></i> Reporte de IE registradas</p>-->
                    </div>
                    <div class="card-body card-color-pastel pb-3">
                        <form class="needs-validation was-validated" role="form text-left" id="form-event-edit" name="form-event-edit">
                            
                            <input type="hidden" id="id" name="id" value="0">
                            <input type="hidden" name="action" id="action" value="update-event-modal">
                            
                            <div class="row mt-2 text-uppercase">
                                <div class="col-12 col-sm-6">
                                    <label for="">Fecha de Inicio <b style="color: red!important;">*</b></label>
                                    <input class="form-control form-control-sm" type="text" name="cal_fecha_inicio"
                                        id="cal_fecha_inicio" maxlength="250" readonly required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">Fecha de Fin <b style="color: red!important;">*</b></label>
                                    <input class="form-control form-control-sm" type="text" name="cal_fecha_fin"
                                        id="cal_fecha_fin" maxlength="250" readonly required>
                                </div>

                                <div class="col-12 col-sm-12">
                                    <label for="">TÍTULO (MAX 250 CARACTERES)</label>
                                    <textarea class="form-control" name="cal_nombre_programa" id="cal_nombre_programa" required></textarea>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label for="">DESCRIPCIÓN</label>
                                    <textarea class="form-control" name="cal_descripcion_programa" id="cal_descripcion_programa" required></textarea>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label for="">LINK DE LA REUNIÓN</label>
                                    <textarea class="form-control" name="cal_link_reunion" id="cal_link_reunion" required></textarea>
                                </div>
                            </div>
                        </form>
                        <div class="text-center">
                            <button type="button" class="btn bg-gradient-info btn-sm btn-rounded w-25 mt-4 mb-0"
                            onclick="sys_calendar().edit()">Actualizar</button>
                            <button type="button" class="btn bg-gradient-danger btn-sm btn-rounded w-25 mt-4 mb-0"
                                data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>