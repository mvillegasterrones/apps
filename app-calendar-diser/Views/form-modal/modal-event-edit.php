<!-- Modal -->
<div class="modal fade" id="modal-event-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"
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
                        <form role="form text-left" id="form-event-edit" name="form-event-edit">
                            <input type="text" id="id" name="id" value="0">
                            <div class="row mt-2">
                                <div class="col-12 col-sm-12">
                                    <label for="">TÍTULO (MAX 250 CARACTERES)</label>
                                    <textarea class="form-control" name="cal_nombre_programa" id="cal_nombre_programa"></textarea>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label for="">DESCRIPCIÓN</label>
                                    <textarea class="form-control" name="cal_descripcion_programa" id="cal_descripcion_programa"></textarea>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label for="">LINK DE LA REUNIÓN</label>
                                    <textarea class="form-control" name="cal_link_reunion" id="cal_link_reunion"></textarea>
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