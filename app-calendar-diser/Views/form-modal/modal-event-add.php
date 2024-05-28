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
                    </div>
                    <div class="card-body card-color-pastel pb-3 text-uppercase">

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

                                <div class="col-12 col-sm-6 mt-3" id="section-one">
                                    <label for="">Region/es <b style="color: red !important;">*</b></label>
                                    <input type="hidden" class="multisteps-form__input form-control form-control-sm"
                                        id="cal_regiones" name="cal_regiones"
                                        placeholder="Seleccione regiones de la lsita" readonly required>

                                    <div class="col-12 mt-2 table-responsive" style="height: 150px !important;">

                                        <?php
                                        $n = 0;
                                        do {
                                            ?>

                                            <div class="form-check" style="padding-left: 50px;">
                                                <input class="form-check-input" type="checkbox"
                                                    id="opc-region-<?= $n + 1 ?>" value="<?= htmlspecialchars($dre[$n]) ?>"
                                                    onclick="chk().validar_chk('section-one', 'cal_regiones')">
                                                <label class="custom-control-label"
                                                    for="opc-region-<?= $n + 1 ?>"><?= htmlspecialchars($dre[$n]) ?></label>
                                            </div>

                                            <?php

                                            $n++;
                                        } while ($n <= count($dre) - 1);
                                        ?>

                                    </div>

                                </div>

                                <div class="col-12 col-sm-6 mt-3" id="section-two">
                                    <label for="">UGEL <b style="color: red !important;">*</b></label>
                                    <input type="hidden" class="multisteps-form__input form-control form-control-sm"
                                        id="cal_ugel" name="cal_ugel" placeholder="Seleccione regiones de la lsita"
                                        readonly required>

                                    <div class="col-12 mt-2 table-responsive" style="height: 150px !important;">

                                        <?php
                                        $n2 = 0;
                                        do {
                                            ?>

                                            <div class="form-check" style="padding-left: 50px;">
                                                <input class="form-check-input" type="checkbox" id="opc-ugel-<?= $n2 + 1 ?>"
                                                    value="<?= htmlspecialchars($dre_ugel[$n2]) ?>"
                                                    onclick="chk().validar_chk('section-two', 'cal_ugel')">
                                                <label class="custom-control-label"
                                                    for="opc-ugel-<?= $n2 + 1 ?>"><?= htmlspecialchars($dre_ugel[$n2]) ?></label>
                                            </div>

                                            <?php

                                            $n2++;
                                        } while ($n2 <= count($dre_ugel) - 1);
                                        ?>

                                    </div>

                                </div>

                                <div class="col-12 col-sm-6 mt-3" id="section-three">
                                    <label for="">Participantes <b style="color: red !important;">*</b></label>
                                    <input type="hidden" class="multisteps-form__input form-control form-control-sm"
                                        id="cal_participantes" name="cal_participantes"
                                        placeholder="Seleccione regiones de la lsita" readonly required>

                                    <div class="col-12 mt-2 table-responsive" style="height: 150px !important;">

                                        <?php
                                        $n3 = 0;
                                        do {
                                            ?>

                                            <div class="form-check" style="padding-left: 50px;">
                                                <input class="form-check-input" type="checkbox" id="opc-ugel-<?= $n3 + 1 ?>"
                                                    value="<?= htmlspecialchars($participantes_lista[$n3]) ?>"
                                                    onclick="chk().validar_chk('section-three', 'cal_participantes')">
                                                <label class="custom-control-label"
                                                    for="opc-ugel-<?= $n2 + 1 ?>"><?= htmlspecialchars($participantes_lista[$n3]) ?></label>
                                            </div>

                                            <?php

                                            $n3++;
                                        } while ($n3 <= count($participantes_lista) - 1);
                                        ?>

                                    </div>

                                </div>

                                <div class="col-12 col-sm-6 mt-3">
                                    <label for="">Número de participantes TOTAL <b
                                            style="color: red !important;">*</b></label>
                                    <input type="number" class="form-control form-control-sm"
                                        name="cal_nro_participantes" id="cal_nro_participantes"
                                        placeholder="Ingrese nro. total de participantes" required>

                                    <div class="col-12 col-sm-12 mt-3">
                                        <label for="">Fecha de Inicio <b
                                            style="color: red !important;">*</b></label>
                                        <input class="form-control form-control-sm datetimepicker" type="text"
                                            placeholder="Seleccione fecha de inicio" name="cal_fecha_inicio"
                                            id="cal_fecha_inicio" data-input required />
                                    </div>
                                    <div class="col-12 col-sm-12 mt-3">
                                        <label for="">Fecha de Fin <b
                                            style="color: red !important;">*</b></label>
                                        <input class="form-control form-control-sm datetimepicker" type="text"
                                            placeholder="Seleccione fecha de fin" name="cal_fecha_fin"
                                            id="cal_fecha_fin" data-input required />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 mt-3">
                                    <label for="">Link de la reunión  <b
                                            style="color: red !important;">*</b></label>
                                    <textarea class="form-control form-control-sm" name="cal_link_reunion" id="cal_link_reunion" placeholder="Agregue el link de acceso a la reunión" required></textarea>
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label for="">Link del registro de Asistencia  <b
                                            style="color: red !important;">*</b></label>
                                    <textarea class="form-control form-control-sm" name="cal_link_asistencia" id="cal_link_asistencia" placeholder="Agregue el link para el registro de Asistencia" required></textarea>
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