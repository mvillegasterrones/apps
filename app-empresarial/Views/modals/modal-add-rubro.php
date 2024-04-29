<!-- Modal -->
<div class="modal fade" id="modal-form-rubro" tabindex="-1" role="dialog" aria-labelledby="modalformrubroTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md rounded rounded-6" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-primary text-gradient">Registrar Rubro</h3>
                        <!--<p class="mb-0">Enter your email and password to register</p>-->
                    </div>
                    <div class="card-body pb-3">
                        <form role="form text-left" id="form-rubro" name="form-rubro">
                            <input type="hidden" id="id" name="id" value="0">
                            <input type="hidden" id="action" name="action" value="set-rubro">
                            <label>ICONO (fa-duotone fa-....)</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Icono" value="fa-duotone fa-" aria-label="Icono" aria-describedby="icono-addon" id="rubro-icono" name="rubro-icono">
                            </div>
                            <label>DENOMINACIÓN</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Denominación" aria-label="Denominacion" aria-describedby="denominacion-addon" id="rubro-name" name="rubro-name">
                            </div>
                            <label>DESCRIPCIÓN</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Descripción" aria-label="Descripcion" aria-describedby="descripcion-addon" id="rubro-descripcion" name="rubro-descripcion">
                            </div>
                            <label class="d-none">IMAGEN</label>
                            <div class="input-group mb-3 d-none">
                                <input type="file" class="form-control" placeholder="Imagen" aria-label="Imagen" aria-describedby="imagen-addon" id="rubro-imagen" name="rubro-imagen">
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn bg-gradient-primary btn-sm btn-rounded w-100 mt-4 mb-0" onclick="rubros().set_rubro()"><i class="fa-duotone fa-save"></i> Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>