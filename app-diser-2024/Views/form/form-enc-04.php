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
                                <code>ENC-04:</code> FOCALIZACIÓN DE IE QUE CUMPLEN CONDICIONES
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
                                            Datos del servicio
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
                            <form id="form-enc-04" name="form-enc-04"
                                class="multisteps-form__form needs-validation was-validated card-color-pastel mb-8"
                                novalidate>

                                <!-- // TODO: Section - Información -->
                                <!--<div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
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
                                            </div>
                                        </div>

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                title="Next">
                                                Empezar
                                            </button>
                                        </div>
                                    </div>
                                </div>-->

                                <!-- // TODO: Section - Dartos generales / del servicio -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active text-uppercase"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder mb-0">I. Datos del Director</h5>
                                    <!--<p class="mb-0 text-sm"><i class="fa-regular fa-circle-exclamation text-danger"></i>
                                        Todos los campos son obligatorios</p>-->
                                    <input type="hidden" id="id" name="id" value="0">
                                    <input type="hidden" id="action" name="action" value="save-update-enc-04">
                                    <div class="multisteps-form__content">

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Nombres y Apellidos</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="text" placeholder="Apellidos y nombres" name="txt_ape_nombres"
                                                    id="txt_ape_nombres" required />
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <label>Nro. Celular</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="text" placeholder="999999999" name="txt_celular"
                                                    id="txt_celular" maxlength="9" required />
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>E-mail</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="email" placeholder="ejemplo@ejemplo.com" name="txt_email"
                                                    id="txt_email" required />
                                            </div>

                                        </div>

                                        <h5 class="font-weight-bolder mt-5 mb-0">II. Información del área de "Educación
                                            para el Trabajo - EPT"</h5>

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-10">
                                                <label>Para desarrollar el parea de EPT, ¿La IE cuenta con docentes de
                                                    especialidad en un área técnica?</label>
                                                <label><code>Si la respuesta es "SI" continúe con el item 2.1, <br>de lo contrario pasar al item 2.2</code></label>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <select class="multisteps-form__input form-control mb-2"
                                                    name="txt_si_no" id="txt_si_no" required>
                                                    <option value="" selected disabled>.: Selecciones :.</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <h6 class="font-weight-bolder mt-2 mb-0">II.1 Datos del docente de especialidad
                                            técnica que desarrolla el área de EPT</h6>

                                        <div class="row mt-2">
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Nombres y Apellidos</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="text" placeholder="Apellidos y nombres"
                                                    name="txt_ape_nombres_doc" id="txt_ape_nombres_doc" required />
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <label>Nro. Celular</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="text" placeholder="999999999" name="txt_celular_doc"
                                                    id="txt_celula_docr" maxlength="9" required />
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label>E-mail</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="email" placeholder="ejemplo@ejemplo.com" name="txt_email_doc"
                                                    id="txt_email_doc" required />
                                            </div>

                                            <div class="col-12 col-sm-3">
                                                <label for="">Formación</label>
                                                <select class="multisteps-form__input form-control mb-2"
                                                    name="txt_formacion_doc" id="txt_formacion_doc" required>
                                                    <option value="" disabled>.: Seleccione :.</option>
                                                    <option>Pedagógico</option>
                                                    <option>Técnico</option>
                                                    <option>Profesional</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label for="">Condición</label>
                                                <select class="multisteps-form__input form-control mb-2"
                                                    name="txt_condicion_doc" id="txt_condicion_doc" required>
                                                    <option value="" disabled>.: Seleccione :.</option>
                                                    <option>Egresado</option>
                                                    <option>Bachiller</option>
                                                    <option>Título</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-5">
                                                <label for="">Especialidad / mención **</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="email" placeholder="Ingrese" name="txt_especialidad_doc"
                                                    id="txt_especialidad_doc" required />
                                            </div>
                                            <div class="col-12 col-sm-1 align-content-center align-items-center">
                                                <button class="btn bg-primary ms-auto mb-0" type="button" title="Next">
                                                    <i class="fa-duotone fa-plus"></i>
                                                </button>
                                            </div>

                                            <div class="table-responsive">
                                                <table
                                                    class="table table-sm table-hover table-striped align-items-center">
                                                    <thead
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        <th class="text-uppercase">#</th>
                                                        <th class="text-uppercase">Apellidos y Nombres</th>
                                                        <th class="text-uppercase">Celular</th>
                                                        <th class="text-uppercase">Correo</th>
                                                        <th class="text-uppercase">Formación</th>
                                                        <th class="text-uppercase">Condición</th>
                                                        <th class="text-uppercase">Especialidad/mensción</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0 text-center">1
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0">Apellidos y
                                                                    Nombres</p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0 text-center">
                                                                    999999999</p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0">
                                                                    ejemplo@ejemplo.com</p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0 text-center">
                                                                    Técnico</p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0 text-center">
                                                                    Egresado</p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0">Especialidad /
                                                                    mención</p>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0 text-center">2
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0">Apellidos y
                                                                    Nombres</p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0 text-center">
                                                                    999999999</p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0">
                                                                    ejemplo@ejemplo.com</p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0 text-center">
                                                                    Técnico</p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0 text-center">
                                                                    Egresado</p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xxs font-weight-bold mb-0">Especialidad /
                                                                    mención</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>

                                        <h6 class="font-weight-bolder mt-2 mb-0">II.2 Horas destinadas al área de ept
                                        </h6>

                                        <div class="row mt-2">
                                            <div class="col-12 col-sm-2 mt-3 mt-sm-0"></div>
                                            <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                                                <label>1er grado</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="number" placeholder="0"
                                                    name="txt_ape_horas_1" id="txt_ape_horas_1" required />
                                            </div>
                                            <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                                                <label>2do grado</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="number" placeholder="0"
                                                    name="txt_ape_horas_2" id="txt_ape_horas_2" required />
                                            </div>
                                            <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                                                <label>31er grado</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="number" placeholder="0"
                                                    name="txt_ape_horas_3" id="txt_ape_horas_3" required />
                                            </div>
                                            <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                                                <label>4to grado</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="number" placeholder="0"
                                                    name="txt_ape_horas_4" id="txt_ape_horas_4" required />
                                            </div>
                                            <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                                                <label>5to grado</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="number" placeholder="0"
                                                    name="txt_ape_horas_5" id="txt_ape_horas_5" required />
                                            </div>
                                        </div>

                                        <h6 class="font-weight-bolder mt-2 mb-0">II.3 desarrollo del área de ept
                                        </h6>

                                        <div class="row mt-2">
                                            <div class="col-12 col-lg-4">
                                                <label for=":">Se desarrolla a través de</label>
                                                <select class="multisteps-form__input form-control mb-2"
                                                    name="txt_tp_desarrollo" id="txt_tp_desarrollo" required>
                                                    <option value="" disabled>.: Seleccione :.</option>
                                                    <option>Módulos formativos</option>
                                                    <option>Proyectos productivos</option>
                                                    <option>Proyectos de emprendimiento</option>
                                                    <option>Plan de negocio</option>
                                                    <option>Otro (especificar)</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                <label for="">Nro. de h/semana</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="number" placeholder="0"
                                                    name="txt_nro_horas" id="txt_nro_horas" required />
                                            </div>
                                            <div class="col-12 col-lg-5">
                                                <label for="">Nombre del módulo / proyecto / plan</label>
                                                <input class="multisteps-form__input form-control mb-2 text-uppercase"
                                                    type="text" placeholder="Describir"
                                                    name="txt_modulo_proyecto_plabn" id="txt_modulo_proyecto_plabn" required />
                                            </div>
                                            <div class="col-12 col-sm-1 align-content-center align-items-center">
                                                <button class="btn bg-primary ms-auto mb-0" type="button" title="Next">
                                                    <i class="fa-duotone fa-plus"></i>
                                                </button>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-sm table-hover table-striped text-uppercase">
                                                    <thead class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        <th class="text-uppercase">#</th>
                                                        <th class="text-uppercase">Desarrollo a raveés de</th>
                                                        <th class="text-uppercase">Nro de h/semanales</th>
                                                        <th class="text-uppercase">Nombre del módulo / proyecto / plan</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><p class="text-xxs font-weight-bold mb-0 text-center">1</p></td>
                                                            <td><p class="text-xxs font-weight-bold mb-0 text-start">Módulo formativo</p></td>
                                                            <td><p class="text-xxs font-weight-bold mb-0 text-center">2</p></td>
                                                            <td><p class="text-xxs font-weight-bold mb-0 text-start">Curso de administración de empresas</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="text-xxs font-weight-bold mb-0 text-center">2</p></td>
                                                            <td><p class="text-xxs font-weight-bold mb-0 text-start">Proyecto productivo</p></td>
                                                            <td><p class="text-xxs font-weight-bold mb-0 text-center">3</p></td>
                                                            <td><p class="text-xxs font-weight-bold mb-0 text-start">Proyecto de gestión de recursos humanos</p></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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

                                        <label class="text-uppercase">3. ¿Cuan agradable sentiste los siguientes
                                            alimentos?</label>

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
                                                <label for="">3.10 Vísceras (hígado, corazón, mollejitas, bofe de
                                                    res)</label>
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

                                        <div class="row mt-3 text-uppercase">

                                            <div class="col-12 col-sm-4">
                                                <label for="">3.13 Pallar seco</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_13"
                                                    name="txt_3_13" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.14 Frejol seco</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_14"
                                                    name="txt_3_14" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.15 Garbanzo seco</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_15"
                                                    name="txt_3_15" required>
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
                                                <label for="">3.16 Huevo (gallina/motelo)</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_16"
                                                    name="txt_3_16" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.17 Leche y/o derivados</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_17"
                                                    name="txt_3_17" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.18 Verduras de hojas verdes</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_18"
                                                    name="txt_3_18" required>
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
                                                <label for="">3.19 Verduras de cualquier color</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_19"
                                                    name="txt_3_19" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.20 Frutas (plátano, mango, mamey, guaba)</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_20"
                                                    name="txt_3_20" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.21 cereales (arroz, fideos, entre otros)</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_21"
                                                    name="txt_3_21" required>
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
                                                <label for="">3.22 Galletas</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_22"
                                                    name="txt_3_22" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.23 Habas secas, quinua, trigo, tubérculos</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_23"
                                                    name="txt_3_23" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="">3.24 Hojuelas/Harinas</label>
                                                <select class="multisteps-form__input form-control" id="txt_3_24"
                                                    name="txt_3_24" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option>Agradable</option>
                                                    <option>Regular</option>
                                                    <option>No agradable</option>
                                                    <option>No lo ha consumido</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-12">
                                                <label for="">4. ¿Qué mejorarías para qué las raciones sean más
                                                    agradables para el consumo?</label>
                                                <textarea class="multisteps-form__input form-control" id="txt_4_mejoras"
                                                    name="txt_4_mejoras" placeholder="Ingresar" required></textarea>
                                            </div>
                                        </div>

                                        <div class="button-row d-flex mt-4">
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