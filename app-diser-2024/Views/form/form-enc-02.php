<?php
$section_1 = array(
    'Proyecto Educativo Institucional - PEI',
    'Reglamento Interno - RI',
    'Plan Anual de Trabajo - PAT',
    'Proyecto Curricular de la IE - PCI/ Plan de Formación-PF',
    'Manual de funcionamiento del MSE',
    'Plan de gestión del bienestar del MSE',
    'Plan del TOECE de la IE',
    'Plan de TOECE del Aula',
    'Ninguno ',
);
?>

<main class="main-content position-relative border-radius-lg instrumento" id="inst-03">

    <div class="container-fluid py-4">
        <div class="row mb-5">
            <div class="col-12">
                <div class="multisteps-form mb-5">

                    <!-- // TODO: Section - Pills -->
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto my-4">
                            <h4>
                                <button type="button" class="btn btn-xs btn-outline-primary mb-0"
                                    onclick="funciones().page_reload()"><i class="fa-regular fa-arrow-left"></i>
                                    Volver</button>
                                <code>ENC-02:</code> ENCUESTA DE CONDICIONES DE BIENESTAR
                            </h4>
                            <div class="card">
                                <T class="card-body">
                                    <div class="multisteps-form__progress">
                                        <button class="multisteps-form__progress-btn js-active" type="button"
                                            title="Información">
                                            <span>Información</span>
                                        </button>
                                        <button class="multisteps-form__progress-btn" type="button"
                                            title="Dartos generales">
                                            Datos Generales
                                        </button>
                                        <button class="multisteps-form__progress-btn" type="button"
                                            title="Datos del servicio">
                                            GBSEMOC
                                        </button>
                                        <!--<button class="multisteps-form__progress-btn" type="button"
                                            title="INFORMACIÓN DEL SERVICIO DE ALIMENTACIÓN">
                                            Sección 2
                                        </button>-->
                                    </div>
                                    <code><i class="fa-regular fa-circle-exclamation"></i> 
                                    TODOS LOS CAMPOS SON OBLIGATORIOS</code>
                                </T>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form id="form-enc-01" name="form-enc-01"
                                class="multisteps-form__form needs-validation was-validated card-color-pastel mb-8"
                                novalidate>

                                <!-- // TODO: Section - Información -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder mb-0">Información</h5>
                                    <ESTUDIAN class="mb-0 text-sm">CONDICIONES DE BIENESTAR DE LOS/LAS ESTUDIANTES DE
                                        LAS IE DE LOS MSE EN EL ÁMBITO RURAL</ES>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <p>
                                                        La encuesta de bienestar recoge información de las y los
                                                        estudiantes de las IIEE MSE ámbito rural, respecto a condiciones
                                                        de bienestar, provisión de servicios constitutivos, tutoría,
                                                        acciones de prevención y protección frente a la violencia,
                                                        situaciones críticas que afectan el bienestar estudiantil,
                                                        continuidad educativa, etc.
                                                        La información registrada en el presente cuestionario tiene
                                                        carácter de declaración jurada, pudiendo la DISER solicitar los
                                                        medios de verificación que sustentan lo informado.
                                                    </p>
                                                    <!--<input class="multisteps-form__input form-control" type="text"              placeholder="eg. Michael" />-->
                                                </div>
                                            </div>

                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                    type="button" title="Next">
                                                    Empezar
                                                </button>
                                            </div>
                                        </div>
                                </div>

                                <!-- // TODO: Section -COMUNIDADs / INFORMANTE -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white text-uppercase"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder mb-0">COMUNIDAD / INFORMANTE</h5>
                                    <!--<p class="mb-0 text-sm"><i class="fa-regular fa-circle-exclamation text-danger"></i>
                                        Todos los campos son obligatorios</p>-->
                                    <input type="hidden" id="id" name="id" value="0">
                                    <input type="hidden" id="action" name="action" value="save-update-enc-02">
                                    <div class="multisteps-form__content">

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Nombre de la comunidad</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="Ingrese" name="txt_comu_nombre" id="txt_comu_nombre"
                                                    required />
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>Tipo de comunidad</label>
                                                <select class="multisteps-form__input form-control" name="txt_comu_tipo"
                                                    id="txt_comu_tipo" required>
                                                    <option value="" selected disabled>.: Selecciones :.</option>
                                                    <option>a. Anexo</option>
                                                    <option>b. Caserío</option>
                                                    <option>c. Centro Poblado</option>
                                                    <option>d. Otro</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3">
                                                <label>Cargo y nombre de la persona que responde la encuesta (Sólo
                                                    responde una persona por IIEE) </label>
                                                <select class="multisteps-form__input form-control" name="txt_cargo"
                                                    id="txt_cargo" required>
                                                    <option value="" selected disabled>.: Selecciones :.</option>
                                                    <option>Director (a)</option>
                                                    <option>Responsable de Bienestar (SRE)</option>
                                                    <option>Coordinador(a) de Secundaria en Alternancia (SA)</option>
                                                    <option>Coordinador(a) de Secundaria Tutorial (ST)</option>
                                                    <option>Otro personal designado (especifique cargo y nombre)
                                                    </option>
                                                </select>

                                            </div>
                                            <div class="col-12 col-sm-3 mt-3">
                                                <label>* Otro (Apellidos y Nombres)</label>
                                                <input class="multisteps-form__input form-control mt-2" type="text"
                                                    placeholder="Ingrese" name="txt_otro_nombre" id="txt_otro_nombre"
                                                    required />
                                            </div>
                                            <div class="col-12 col-sm-3 mt-3">
                                                <label>* Otro (Cargo)</label>
                                                <input class="multisteps-form__input form-control mt-2" type="text"
                                                    placeholder="Ingrese" name="txt_otro_cargo" id="txt_otro_cargo"
                                                    required />
                                            </div>
                                        </div>

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                title="Next">
                                                Siguiente
                                                <i class="fa-duotone fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- // TODO: Section 1 - GESTION DEL BIENESTAR SOCIOEMOCIONAL -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white text-uppercase"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">GESTIÓN DEL BIENESTAR SOCIOEMOCIONAL </h5>
                                    <!--<p class=",b-0 text-sm">1.1. ¿En este último mes con qué frecuencia has consumido …?</p>-->
                                    <div class="multisteps-form__content">

                                        <div class="row mt-3 h-100" id="section-one-one">

                                            <label>1. A la fecha ¿En qué Instrumentos de gestión escolar
                                                y documentos de la IE se han incluido acciones e
                                                instrumentos de bienestar vinculados a la tutoría,
                                                convivencia, protección y bienestar integral en los MSE?
                                                <b>(Opción múltiple)</b></label>

                                            <?php
                                            $i = 0;
                                            do {
                                                ?>

                                                <div class="form-check" style="padding-left: 50px;">
                                                    <input class="form-check-input" type="checkbox" id="op<?= $i+1 ?>"
                                                        value="<?= htmlspecialchars($section_1[$i]) ?>"
                                                        onclick="chk().validar_chk('section-one-one', 'valor-chk-1')">
                                                    <label class="custom-control-label" for="op<?= $i+1 ?>"><?= htmlspecialchars($section_1[$i]) ?></label>
                                                </div>

                                                <?php

                                                $i++;

                                            } while ($i <= count($section_1)-1);
                                            ?>
                                            
                                            <input type="text" class="multisteps-form__input form-control"
                                                id="valor-chk-1" name="valor-chk-1" readonly>

                                        </div>


                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                                title="Prev">
                                                <i class="fa-duotone fa-arrow-left"></i>
                                                Regresar
                                            </button>
                                            <button class="btn bg-gradient-primary ms-auto mb-0" type="button"
                                                title="Next" onclick="encuesta_02().save()">
                                                Guardar
                                                <i class="fa-duotone fa-save"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<script src="./assets/js/plugins/multistep-form.js"></script>

<script>

    let chk = () => ({
        validar_chk: (section, txtMostrar) => {
            var seleccionados = [];
            $('#' + section + ' input[type="checkbox"]:checked').each(function () {
                seleccionados.push($(this).val());
            });
            $('#' + section + ' #' + txtMostrar).val(seleccionados.join(", "))
            console.log(seleccionados);
        }
    })

</script>