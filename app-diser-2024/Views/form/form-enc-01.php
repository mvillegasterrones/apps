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
                                <code>ENC-01:</code> ACEPTABILIDAD DE LOS ALIMENTOS DE PNAEQW
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
                                            title="INFORMACIÓN DE LA POBLACION ESTUDIANTIL">
                                            Sección 1
                                        </button>
                                        <button class="multisteps-form__progress-btn" type="button"
                                            title="INFORMACIÓN DEL SERVICIO DE ALIMENTACIÓN">
                                            Sección 2
                                        </button>
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
                                    <p class="mb-0 text-sm">En las II. EE. con Modelo de Servicio Educativo Secundaria
                                        (MSE) </p>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <p>
                                                    <b>* Instrucciones:</b> Esta encuesta esta dirigida a las/los
                                                    estudiantes para consultarles luego del consumo de sus alimentos. La
                                                    finalidad es conocer la aceptabilidad de los alimentos y su
                                                    pertinencia. Asimismo, se busca conocer si las combinaciones son de
                                                    agradables para el o la estudiante.
                                                </p>
                                                <!--<input class="multisteps-form__input form-control" type="text"              placeholder="eg. Michael" />-->
                                            </div>
                                        </div>

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                title="Next">
                                                Empezar
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- // TODO: Section - Información del estudiante -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white text-uppercase"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder mb-0">Datos Generales</h5>
                                    <!--<p class="mb-0 text-sm"><i class="fa-regular fa-circle-exclamation text-danger"></i>
                                        Todos los campos son obligatorios</p>-->
                                    <input type="hidden" id="id" name="id" value="0">
                                    <input type="hidden" id="action" name="action" value="save-update-inst-03">
                                    <div class="multisteps-form__content">

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                                                <label>Edad</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="0" name="txt_edad" id="txt_edad" maxlength="8"
                                                    required />
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label>Sexo</label>
                                                <select class="multisteps-form__input form-control" name="txt_sexo"
                                                    id="txt_sexo" required>
                                                    <option value="" selected disabled>.: Selecciones :.</option>
                                                    <option>Hombre</option>
                                                    <option>Mujer</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>Lengua Materna</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="Ingrese" name="txt_lmaterna" id="txt_lmaterna"
                                                    required />
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label>Grado</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="Ingrese" name="txt_grado" id="txt_grado" required />
                                            </div>
                                        </div>

                                        <h5 class="font-weight-bolder mt-5 mb-0">Datos del Servicio</h5>

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-3">
                                                <label>ración servida</label>
                                                <select class="multisteps-form__input form-control" name="txt_racion"
                                                    id="txt_racion" required>
                                                    <option value="" selected disabled>.: Selecciones :.</option>
                                                    <option>Desayuno</option>
                                                    <option>Almuerzo</option>
                                                    <option>Cena</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label>Tiempo de comida</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="Ingrese" name="txt_tiempo" id="txt_tiempo" required />
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>1. ¿Cómo calificarías las preparaciones servidas el día de
                                                    hoy?</label>
                                                <select class="multisteps-form__input form-control" name="txt_1"
                                                    id="txt_1" required>
                                                    <option value="" selected disabled>.: Selecciones :.</option>
                                                    <option>Bueno</option>
                                                    <option>Regular</option>
                                                    <option>Malo</option>
                                                </select>
                                            </div>
                                        </div>

                                        <label class="mt-3">2. ¿Cómo calificarÍas los alimentos recibidos?</label>

                                        <div class="row mt-0">
                                            <div class="col-12 col-sm-3">
                                                <label for="">Plato principal</label>
                                                <select class="multisteps-form__input form-control" name="txt_2_1"
                                                    id="txt_2_1" required>
                                                    <option value="" selected disabled>.: Selecciones :.</option>
                                                    <option>No agradable</option>
                                                    <option>Regular</option>
                                                    <option>Agradable</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label for="">Entrada</label>
                                                <select class="multisteps-form__input form-control" name="txt_2_2"
                                                    id="txt_2_2" required>
                                                    <option value="" selected disabled>.: Selecciones :.</option>
                                                    <option>No agradable</option>
                                                    <option>Regular</option>
                                                    <option>Agradable</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <label for="">Refrigerio</label>
                                                <select class="multisteps-form__input form-control" name="txt_2_3"
                                                    id="txt_2_3" required>
                                                    <option value="" selected disabled>.: Selecciones :.</option>
                                                    <option>No agradable</option>
                                                    <option>Regular</option>
                                                    <option>Agradable</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <label for="">Bebible</label>
                                                <select class="multisteps-form__input form-control" name="txt_2_4"
                                                    id="txt_2_4" required>
                                                    <option value="" selected disabled>.: Selecciones :.</option>
                                                    <option>No agradable</option>
                                                    <option>Regular</option>
                                                    <option>Agradable</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <label for="">Otros</label>
                                                <select class="multisteps-form__input form-control" name="txt_2_5"
                                                    id="txt_2_5" required>
                                                    <option value="" selected disabled>.: Selecciones :.</option>
                                                    <option>No agradable</option>
                                                    <option>Regular</option>
                                                    <option>Agradable</option>
                                                </select>
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

                                <!-- // TODO: Section 1 - Datos del Servicio -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white text-uppercase"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">DATOS DEL SERVICIO</h5>
                                    <!--<p class=",b-0 text-sm">1.1. ¿En este último mes con qué frecuencia has consumido …?</p>-->
                                    <div class="multisteps-form__content">

                                        <label class="text-uppercase">3. ¿Cuan agradable sentiste los siguientes alimentos?</label>

                                        <div class="row mt-3 h-100">

                                            <div class="col-12 col-sm-4 h-100">
                                                <label>3.1 Conserva de Carne de pollo/gallina/pavita </label>
                                                <select class="multisteps-form__input form-control" id="txt_3_1"
                                                    name="txt_3_1" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4 h-100">
                                                <label>3.2 Conserva de Carne de res/cordero/carnero/cerdo</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_2"
                                                    name="txt_3_2" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4 h-100">
                                                <label>3.3 Conserva de sangresita</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_3"
                                                    name="txt_3_3" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row mt-3">

                                            <div class="col-12 col-sm-4">
                                                <label for="">3.4 Carne fresca del monte (majaz/sajino)</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_4"
                                                    name="txt_3_4" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.5 Carne de motelo/lagarto </label>
                                                <select class="multisteps-form__input form-control" id="txt_3_5"
                                                    name="txt_3_5" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.6 Carne seca: charqui y chalona</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_6"
                                                    name="txt_3_6" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row mt-3 text-uppercase">

                                            <div class="col-12 col-sm-4">
                                                <label for="">3.7 Pescado fresco de río (paiche, boquichico)</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_7"
                                                    name="txt_3_7" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.8 Conserva de pescado </label>
                                                <select class="multisteps-form__input form-control" id="txt_3_8"
                                                    name="txt_3_8" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.9 Pescado seco</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_9"
                                                    name="txt_3_9" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row mt-3 text-uppercase">

                                            <div class="col-12 col-sm-4">
                                                <label for="">3.10 Vísceras (hígado, corazón, mollejitas, bofe de res)</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_10"
                                                    name="txt_3_10" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.11 Lentejas secas </label>
                                                <select class="multisteps-form__input form-control" id="txt_3_11"
                                                    name="txt_3_11" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.12 Arvejas secas</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_12"
                                                    name="txt_3_12" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                                title="Prev">
                                                <i class="fa-duotone fa-arrow-left"></i>
                                                Regresar
                                            </button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                title="Next">
                                                Siguiente
                                                <i class="fa-duotone fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- // TODO: Section 2 - INFORMACIÓN DEL SERVICIO DE ALIMENTACIÓN -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">INFORMACIÓN DEL SERVICIO DE ALIMENTACIÓN</h5>
                                    <div class="multisteps-form__content text-uppercase">
                                        <label class="text-uppercase">(*) considerar que en caso de contar con la
                                            información se tomarán fotografías como evidencia.</label>

                                        <div class="row mt-3">

                                            <div class="col-12 col-sm-4">
                                                <label>2.1 ¿Cuentan con alimentos frescos (frutas y verduras) para
                                                    complementar las preparaciones? <i>En caso de ser una respuesta
                                                        afirmativa indicar quien lo proporciona</i></label>
                                                <select class="multisteps-form__input form-control" id="txt_2_1"
                                                    name="txt_2_1" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.2 ¿Cuentan con un área adecuada para el almacenamiento de
                                                    alimentos frescos?</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_2"
                                                    name="txt_2_2" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.3 ¿Cuentan con equipos de conservación de cadena de frío
                                                    (refrigerador/congelador)?</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_3"
                                                    name="txt_2_3" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row mt-3">

                                            <div class="col-12 col-sm-4">
                                                <label>2.4 ¿Cuentan con un huerto escolar en uso? En caso la respuesta
                                                    sea SI, Detallar las frutas y/o verduras que provee.</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_4"
                                                    name="txt_2_4" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.5 ¿Se ha identificado alguna situación crítica respecto al
                                                    servicio alimentario? En caso la respuesta sea SI, Detallar.</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_5"
                                                    name="txt_2_5" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.6 ¿Hubo alguna incidencia en cuanto a la recepción alimentos?
                                                    En caso la respuesta sea SI, Detallar.</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_6"
                                                    name="txt_2_6" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row mt-3">

                                            <div class="col-12 col-sm-4">
                                                <label>2.7 ¿Se ha identificado alguna alerta respecto a la distribución
                                                    de los alimentos en el servicio alimentario? De ser positivo, en
                                                    observaciones indicar cuáles fueron y que acciones se
                                                    tomaron.</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_7"
                                                    name="txt_2_7" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.8 ¿El CAE respeta las raciones programadas establecidas por el
                                                    PNAEQW?</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_8"
                                                    name="txt_2_8" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.9 ¿Las raciones entregadas por el PNAEQW son acorde a la
                                                    cantidad de estudiantes residentes matriculados?</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_9"
                                                    name="txt_2_9" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row mt-3">

                                            <div class="col-12 col-sm-4">
                                                <label>2.10 ¿Cuál es su percepción del servicio alimentario?</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_10"
                                                    name="txt_2_10" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Bueno</option>
                                                    <option>Regular</option>
                                                    <option>Malo</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.11 ¿Durante este año con qué frecuencia han sido visitados por
                                                    el PNAEQW?</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_11"
                                                    name="txt_2_11" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Semanal</option>
                                                    <option>Mensual</option>
                                                    <option>Ocacional</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.12 Usted ¿Ha recibido capacitación sobre nutrición o
                                                    alimentación saludable?</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_12"
                                                    name="txt_2_12" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row mt-3">

                                            <div class="col-12 col-sm-4">
                                                <label>2.13 ¿Ha recibido el personal de cocina alguna capacitación?
                                                    <b>de ser si la respuesta detallar cuales fueron los temas
                                                        (...)</b></label>
                                                <select class="multisteps-form__input form-control" id="txt_2_13"
                                                    name="txt_2_13"
                                                    onchange="instrumento_03().active_item('txt_2_13', 'txt_2_13_temas')"
                                                    required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                                <input type="text"
                                                    class="multisteps-form__input form-control mt-2 d-none"
                                                    id="txt_2_13_temas" name="txt_2_13_temas"
                                                    placeholder="Detallar temas **" value="-" required>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.14 ¿Cuenta el personal de cocina con carnet de sanidad
                                                    vigente?</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_14"
                                                    name="txt_2_14" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.15 ¿El abastecimiento de agua procede de...?</label>
                                                <select class="multisteps-form__input form-control" id="txt_2_15"
                                                    name="txt_2_15"
                                                    onchange="instrumento_03().active_item('txt_2_15', 'txt_2_15_otro')"
                                                    required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Red publica dentro de la IIEE</option>
                                                    <option>Pilón/Grifo de uso público</option>
                                                    <option>Pozo</option>
                                                    <option>Rio/acequia/laguna</option>
                                                    <option>Agua de lluvia</option>
                                                    <option>Otro</option>
                                                </select>
                                                <input type="text"
                                                    class="multisteps-form__input form-control mt-2 d-none"
                                                    id="txt_2_15_otro" name="txt_2_15_otro"
                                                    placeholder="Detallar otro **" required>
                                            </div>

                                        </div>

                                        <div class="row mt-3">

                                            <div class="col-12 col-sm-4">
                                                <label>2.16 ¿Cuál es el combustible que usan con mayor frecuencia para
                                                    preparar los alimentos? </label>
                                                <select class="multisteps-form__input form-control" id="txt_2_16"
                                                    name="txt_2_16"
                                                    onchange="instrumento_03().active_item('txt_2_16', 'txt_2_16_otro')"
                                                    required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Gas licuado/GLP</option>
                                                    <option>Kerosene</option>
                                                    <option>Carbón</option>
                                                    <option>Leña</option>
                                                    <option>Bosta</option>
                                                    <option>Residuos agrícolas</option>
                                                    <option>Otro</option>
                                                </select>
                                                <input type="text"
                                                    class="multisteps-form__input form-control mt-2 d-none"
                                                    id="txt_2_16_otro" name="txt_2_16_otro"
                                                    placeholder="Detallar otro **" required>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.17 ¿De donde se obtienen los productos del refrigerio? <b>(Solo
                                                        en caso del refrigerio)</b></label>
                                                <select class="multisteps-form__input form-control" id="txt_2_17"
                                                    name="txt_2_17"
                                                    onchange="instrumento_03().active_item('txt_2_17', 'txt_2_17_otro')"
                                                    required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>De los productos que brinda el PNAEQW</option>
                                                    <option>Aporte de las familias </option>
                                                    <option>Lo consiguen los estudiantes y prepara por su cuenta*
                                                    </option>
                                                    <option>Otro</option>
                                                </select>
                                                <input type="text"
                                                    class="multisteps-form__input form-control mt-2 d-none"
                                                    id="txt_2_17_otro" name="txt_2_17_otro"
                                                    placeholder="Detallar otro **" required>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>2.18 ¿En qué cree usted que se pueda mejorar el servicio
                                                    alimentario?</label>
                                                <textarea class="multisteps-form__input form-control" name="txt_2_18"
                                                    id="txt_2_18" placeholder="Detallar" required></textarea>
                                            </div>

                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6 text-uppercase">
                                                <label>Fecha de aplicación</label>
                                                <input class="multisteps-form__input form-control" type="date"
                                                    placeholder="dd/mm/yyyy" name="txt_fecha_aplicacion"
                                                    id="txt_fecha_aplicacion" required />
                                            </div>
                                        </div>

                                        <!--<div class="row">-->
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                                title="Prev">
                                                <i class="fa-duotone fa-arrow-left"></i>
                                                Regresar
                                            </button>
                                            <button class="btn bg-gradient-primary ms-auto mb-0" type="button"
                                                title="Next" onclick="encuesta_01().save()">
                                                Guardar
                                                <i class="fa-duotone fa-save"></i>
                                            </button>
                                        </div>
                                        <!--</div>-->
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