<main class="main-content position-relative border-radius-lg instrumento" id="inst-02">

    <div class="container-fluid py-4">
        <div class="row mb-5">
            <div class="col-12">
                <div class="multisteps-form mb-5">

                    <!-- // TODO: Section - Pills -->
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto my-4">
                            <h4>
                                <button type="button" class="btn btn-xs btn-outline-primary mb-0" onclick="funciones().page_reload()"><i class="fa-regular fa-arrow-left"></i> Volver</button>
                                <code>INST-02:</code> OBSERVACIÓN DEL TIEMPO DE COMIDA
                            </h4>
                            <div class="card">
                                <div class="card-body">
                                    <div class="multisteps-form__progress">
                                        <button class="multisteps-form__progress-btn js-active" type="button" title="Información">
                                            <span>Información</span>
                                        </button>
                                        <button class="multisteps-form__progress-btn" type="button" title="Información de la observación">
                                            Observación
                                        </button>
                                        <button class="multisteps-form__progress-btn" type="button" title="FRECUENCIAS DE COMIDAS EN UN DÍA">
                                            Sección 1
                                        </button>
                                        <button class="multisteps-form__progress-btn" type="button" title="FRECUENCIA DE CONSUMO DE ALIMENTOS FUENTES DE PROTEÍNAS, HIERRO Y VITAMINAS">
                                            Sección 2
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form id="form-inst-02" name="form-inst-02" class="multisteps-form__form needs-validation was-validated card-color-pastel mb-8" novalidate>

                                <!-- // TODO: Section 1 - Información -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder mb-0">Información</h5>
                                    <p class="mb-0 text-sm">En las II. EE. con Modelo de Servicio Educativo Secundaria (MSE) en el ámbito rural </p>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <p>
                                                    <b>* Objetivo:</b> conocer las prácticas durante el preparado, servido y consumo de un tiempo de comida determinado. La finalidad es mejorar las prácticas de preparado, servido y consumo en el marco del servicio alimentario.
                                                </p>
                                                <p>
                                                    <b>* Indicaciones:</b> lo aplica el/la coordinador/a y/o responsables de bienestar y/o gestor de vida saludable, durante un tiempo de comida (desayuno, almuerzo o cena). La duración de la aplicación del instrumento es desde la preparación hasta el consumo del mismo (Tiempo estimado: 2.30 horas).
                                                </p>
                                                <!--<input class="multisteps-form__input form-control" type="text" placeholder="eg. Michael" />-->
                                            </div>
                                        </div>

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                Empezar
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- // TODO: Section 2 - Información del estudiante -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white text-uppercase" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder mb-0">INFORMACIÓN DE La OBSERVACIÓN</h5>
                                    <p class="mb-0 text-sm"><i class="fa-regular fa-circle-exclamation text-danger"></i> Todos los campos son obligatorios</p>
                                    <input type="hidden" id="id" name="id" value="0">
                                    <input type="hidden" id="action" name="action" value="save-update-inst-01">
                                    <div class="multisteps-form__content">

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>Nombres y apellidos del observador</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="Ingresar respuesta" name="txt-est-apellidos" id="txt-est-apellidos" maxlength="100" required />
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Cargo</label>
                                                <!--<input class="multisteps-form__input form-control" type="text" placeholder="Ingresar respuesta" name="txt-est-nombres" id="txt-est-nombres" maxlength="100" required />-->
                                                <select class="multisteps-form__input form-control" name="txt-est-sexo" id="txt-est-sexo" required>
                                                    <option value="" selected disabled>.: Seleccione cargo :.</option>
                                                    <option>Coordinador de la IE</option>
                                                    <option>Responsables de Bienestar</option>
                                                    <option>Gestor de Vida Saludable</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-3">
                                                <label>Grado de estudios</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="Ej. 1ero - sección" name="txt-est-edad" id="txt-est-edad" required />
                                            </div>
                                            <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                <label>Tiempo de comida obs.</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="Ingresar resp." required />
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label>Mes de reporte</label>
                                                <select class="multisteps-form__input form-control" name="txt-mes-reporte" id="txt-mes-reporte" required>
                                                    <option value="" disabled>.: Seleccione :.</option>
                                                    <option value="Mayo 204" selected>Mayo 2024</option>
                                                    <option value="Setiembre 2024" disabled>Setiembre 2024</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                <label>Fecha de Aplicación</label>
                                                <input class="multisteps-form__input form-control" type="date" placeholder="Ingresar resp." required />
                                            </div>
                                        </div>

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                Siguiente
                                                <i class="fa-duotone fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- // TODO: Section 3 - FRECUENCIAS DE COMIDAS EN UN DÍA -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white text-uppercase" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">OBSERVACIÓN DE LAS PREPARACIONES DE UN TIEMPO DE COMIDA</h5>
                                    <!--<p class=",b-0 text-sm">1.1. ¿En este último mes con qué frecuencia has consumido …?</p>-->
                                    <div class="multisteps-form__content">

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-4">
                                                <label>1.1. ¿Cuenta con un ambiente exclusivo de cocina?</label>
                                                <select class="multisteps-form__input form-control" id="txt-desayuno" name="txt-desayuno" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-8">
                                                <label>1.2. Se aplica las Buenas Prácticas de Manipulación en la preparaciones de los alimentos*</label>
                                                <select class="multisteps-form__input form-control" id="txt-almuerzo" name="txt-almuerzo" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mt-3" id="div-opc-2">
                                            <div class="col-12 col-sm-4">
                                                <label>1.2.1. Tiene la indumentaria adecuada (mandil, gorro que recoge el cabello de color claro y limpio)</label>
                                                <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>1.2.2. Cuenta con el kit de lavado de manos (jabón, papel higiénico o papel toalla)</label>
                                                <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>1.2.3. Practica el lavado de manos con agua y jabón de manera correcta</label>
                                                <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-4">
                                                <label>1.3. ¿El personal de cocina se encuentra con una indumentaria adecuada, aseado y limpio? </label>
                                                <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>1.4. ¿Se cumple con la programación del menú escolar ? </label>
                                                <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>1.5. Para la preparación ¿se hace uso de las dosificaciones de alimentos establecidas por el PNAEQW? </label>
                                                <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label>Observaciones *</label>
                                                <textarea class="multisteps-form__input form-control" id="txt-" name="txt-" placeholder="Ingrese observaciones" required></textarea>
                                            </div>
                                        </div>

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">
                                                <i class="fa-duotone fa-arrow-left"></i>
                                                Regresar
                                            </button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                Siguiente
                                                <i class="fa-duotone fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- // TODO: Section 4 - FRECUENCIA DE CONSUMO DE ALIMENTOS FUENTES DE PROTEÍNAS, HIERRO Y VITAMINAS -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">OBSERVACIÓN EN EL SERVIDO DE LAS PREPARACIONES (Se observará los 10 primeros platos servidos)</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3 text-uppercase">

                                            <div class="row">

                                                <div class="col-12 col-sm-6">
                                                    <label>2.1. ¿El servido cumple con las medidas caseras establecidas con el PNAEQW?</label>
                                                    <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                        <option value="" selected disabled>.: Seleccione :.</option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <div class="row mt-3" id="section-2-1">
                                                        <div class="col-12 col-sm-4">
                                                            <label>Desayuno</label>
                                                            <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                                <option value="" selected disabled>.: Seleccione :.</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <label>Almuerzo</label>
                                                            <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                                <option value="" selected disabled>.: Seleccione :.</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <label>Cena</label>
                                                            <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                                <option value="" selected disabled>.: Seleccione :.</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <label>2.2 ¿Las preparaciones contienen los 3 grupos de alimentos? </label>
                                                    <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                        <option value="" selected disabled>.: Seleccione :.</option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <div class="row mt-3" id="section-2-2">
                                                        <div class="col-12 col-sm-6">
                                                            <label>Carbohidratos (cerales, tuberculos, etc)</label>
                                                            <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                                <option value="" selected disabled>.: Seleccione :.</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <label>Proteínas de origen animal</label>
                                                            <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                                <option value="" selected disabled>.: Seleccione :.</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <label>Proteínas de origen vegetal</label>
                                                            <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                                <option value="" selected disabled>.: Seleccione :.</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <label>Vitaminas (frutas y verduras)</label>
                                                            <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                                <option value="" selected disabled>.: Seleccione :.</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mt-3">

                                                <div class="col-12 col-sm-4">
                                                    <label for="">2.3. ¿Las preparaciones fueron suficientes para el total de estudiantes?</label>
                                                    <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                        <option value="" selected disabled>.: Seleccione :.</option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>

                                                <div class="col-12 col-sm-4">
                                                    <label for="">2.4. ¿Se reporta incidentes en el que sobren o falten preparaciones para el servido (cuaderno de incidencia)?</label>
                                                    <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                        <option value="" selected disabled>.: Seleccione :.</option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="col-12 col-sm-4">
                                                    <label for="">2.5. ¿La preparación observada coincide con el menú escolar escolar programado?</label>
                                                    <select class="multisteps-form__input form-control" id="txt-" name="txt-" required>
                                                        <option value="" selected disabled>.: Seleccione :.</option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">
                                                    <i class="fa-duotone fa-arrow-left"></i>
                                                    Regresar
                                                </button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Next" onclick="instrumento_02().save()">
                                                    Guardar
                                                    <i class="fa-duotone fa-save"></i>
                                                </button>
                                            </div>
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