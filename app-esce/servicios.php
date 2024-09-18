<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= $ico ?>"><!-- ./assets/img/favicon.png -->
    <title>
        ESCE | Servicios
    </title>
    <?php include './sections/page-sections/ref-header.php' ?>
</head>

<body class="case-study bg-gray-200">
    <div class="container position-sticky z-index-sticky top-0 mb-10">
        <div class="row">
            <div class="col-12">
                <?php include './sections/page-sections/nav-bar-2.php' ?>
            </div>
        </div>
    </div>

    <div class="card card-body mb-7 shadow-xl mx-3 mx-md-7 mt-n6">
        <section class="py-md-2 px-lg-5 pb-5">
            <div class="container">
                <h2 class="text-color-grey mb-5 mb-lg-3"><img src="<?= $ico ?>" class="w-5"> Servicios</h2>
                <div class="row mt-2 align-items-center">
                    <div class="col-lg-8">
                        <h3 class="mb-4 text-color-grey">Tenemos una perspectiva de la innovación como motor de
                            crecimiento</h3>
                        <p class="">
                            Sabemos lo complejo que es pasar por procesos de cambio como consecuencia de la innovación
                            de productos, servicios o procesos y la creación de nuevos negocios.
                        </p>
                    </div>
                    <div class="col-4">
                        <img src="https://www.incotec.es/app/uploads/2023/12/que-es-innovacion-sostenible-e1702285476769.jpg"
                            class="w-100" alt="" srcset="">
                    </div>
                </div>
                <div class="row">
                    <hr class="col-12 bg-dark">
                </div>
                <div class="row mt-5 mb-7 align-items-center">
                    <div class="col-4">
                        <img src="https://media.istockphoto.com/id/531861190/es/foto/pieza-de-rompecabezas-faltante-resolución-del-problema-y-solución-blanco.jpg?s=612x612&w=0&k=20&c=ePA9ofDnL47Afi-3OIhwOisqAkmBd26nMTanp7ObrSI="
                            class="w-100" alt="" srcset="">
                    </div>
                    <div class="col-lg-8">
                        <h3 class="mb-4 text-color-grey">Contribuimos a tomar el toro por las astas y enfrentar los
                            cuellos de botella para generar nuevo valor de mercado o solucionar problemas empresariales
                            complejos</h3>
                        <p class="">
                            Creemos que la competitividad de las empresas pasa por saber competir en el mercado,
                            aproximándose cada vez más con las necesidades, problemas y emociones de los clientes.

                        </p>
                    </div>
                </div>

                <div class="row mt-5 align-items-top">

                    <div class="col-12 col-md-6 col-lg-6 mb-5">
                        <h3 class="text-color-grey">Innovation Bottom UP</h3>
                        <p>Decisiones basadas en el conocimiento existente para la solución de problemas empresariales o
                            la identificación de nuevas oportunidades de negocio. </p>

                        <div class="accordion p-3" id="accordionPricing">
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingOne">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Generación
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionPricing"><!-- SHOW -->
                                    <div class="accordion-body text-sm opacity-8">
                                        Creamos un espacio para fomentar la creatividad y la recolección de ideas a
                                        través de talleres, y plataformas digitales.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingTwo">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Evaluación
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionPricing">
                                    <div class="accordion-body text-sm opacity-8">
                                        Prioriza las ideas evaluando su factibilidad técnica, su alineación con las
                                        necesidades de los consumidores, y su esfuerzo y tiempo de implementación.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingThree">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Pruebas de bajo costo
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionPricing">
                                    <div class="accordion-body text-sm opacity-8">
                                        Desarrollar prototipos de las ideas seleccionadas, probarlos, y ajustar con
                                        base en la retroalimentación de usuarios y partes interesadas antes de su
                                        implementación a gran escala.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingFour">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        Oportunidades escalables
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionPricing">
                                    <div class="accordion-body text-sm opacity-8">
                                        Seleccionar ideas viables de mayor beneficio en relación a su costo y
                                        esfuerzo de implementación.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingFifth">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth"
                                        aria-expanded="false" aria-controls="collapseFifth">
                                        Cultura de información
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseFifth" class="accordion-collapse collapse"
                                    aria-labelledby="headingFifth" data-bs-parent="#accordionPricing">
                                    <div class="accordion-body text-sm opacity-8">
                                        Fomentar una cultura de innovación colaborativa y reconocer con recompensas
                                        a los empleados que generen ideas exitosas, incentivando su participación
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <h3 class="text-color-grey mt-0">Innovación de Productos o Servicios</h3>
                        <p>Rivalidad basada en innovación y diferenciación a través de la mejora de nuevos productos o
                            servicios, o la creación de nuevos negocios.</p><br>
                        <div class="accordion p-3" id="accordionPricing-2">
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingOne-2">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-2"
                                        aria-expanded="true" aria-controls="collapseOne-2">
                                        Nuevas fuentes de ingreso
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseOne-2" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne-2" data-bs-parent="#accordionPricing-2"><!-- show -->
                                    <div class="accordion-body text-sm opacity-8">
                                        Abre nuevas líneas de negocio, encuentra nichos de mercado, atrae nuevos
                                        clientes y ofrece mayor valor percibido por los consumidores.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingTwo-2">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2"
                                        aria-expanded="false" aria-controls="collapseTwo-2">
                                        Mejora de la Satisfaccion del Cliente
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseTwo-2" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo-2" data-bs-parent="#accordionPricing-2">
                                    <div class="accordion-body text-sm opacity-8">
                                        Creación o rediseño de nuevos productos o servicios para mejorar la experiencia
                                        del servicio, incrementando los niveles de fidelización y satisfacción.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingThree-2">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-2"
                                        aria-expanded="false" aria-controls="collapseThree-2">
                                        Capacidad de Respuesta a Cambios del Mercado
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseThree-2" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree-2" data-bs-parent="#accordionPricing-2">
                                    <div class="accordion-body text-sm opacity-8">
                                        Adaptación rápida a cambios dinámicos para mantener su competitividad y
                                        fortalecer su resiliencia para superar las crisis y asegurar su sostenibilidad.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingFour-2">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-2"
                                        aria-expanded="false" aria-controls="collapseFour-2">
                                        Deducción de Impuestos por el Gobierno Peruano
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseFour-2" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour-2" data-bs-parent="#accordionPricing-2">
                                    <div class="accordion-body text-sm opacity-8">
                                        Acceso a incentivos fiscales para empresas que invierten en I+D.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!--<section class="py-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mb-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-warning shadow-danger border-radius-lg p-4">
                                <h4 class="text-white mb-0">Innovation Bottom UP</h4>
                                <p class="text-white opacity-8 mb-0">Decisiones basadas en el conocimiento existente
                                    para la solución de problemas empresariales o la identificación de nuevas
                                    oportunidades de negocio.</p>
                            </div>
                        </div>
                        <div class="accordion p-3" id="accordionPricing">
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingOne">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Generación
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionPricing">
                                    <div class="accordion-body text-sm opacity-8">
                                        Creamos un espacio para fomentar la creatividad y la recolección de ideas a
                                        través de talleres, y plataformas digitales.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingTwo">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Evaluación
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionPricing">
                                    <div class="accordion-body text-sm opacity-8">
                                        Prioriza las ideas evaluando su factibilidad técnica, su alineación con las
                                        necesidades de los consumidores, y su esfuerzo y tiempo de implementación.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingThree">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Pruebas de bajo costo
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionPricing">
                                    <div class="accordion-body text-sm opacity-8">
                                        Desarrollar prototipos de las ideas seleccionadas, probarlos, y ajustar con
                                        base en la retroalimentación de usuarios y partes interesadas antes de su
                                        implementación a gran escala.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingFour">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        Oportunidades escalables
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionPricing">
                                    <div class="accordion-body text-sm opacity-8">
                                        Seleccionar ideas viables de mayor beneficio en relación a su costo y
                                        esfuerzo de implementación.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingFifth">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth"
                                        aria-expanded="false" aria-controls="collapseFifth">
                                        Cultura de información
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseFifth" class="accordion-collapse collapse"
                                    aria-labelledby="headingFifth" data-bs-parent="#accordionPricing">
                                    <div class="accordion-body text-sm opacity-8">
                                        Fomentar una cultura de innovación colaborativa y reconocer con recompensas
                                        a los empleados que generen ideas exitosas, incentivando su participación
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-warning shadow-danger border-radius-lg p-4">
                                <h4 class="text-white mb-0">Innovación de Productos o Servicios</h4>
                                <p class="text-white opacity-8 mb-0">Rivalidad basada en innovación y diferenciación a
                                    través de la mejora de nuevos productos o servicios, o la creación de nuevos
                                    negocios.</p>
                            </div>
                        </div>

                        <div class="accordion p-3" id="accordionPricing-2">
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingOne-2">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-2"
                                        aria-expanded="true" aria-controls="collapseOne-2">
                                        Nuevas fuentes de ingreso
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseOne-2" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne-2" data-bs-parent="#accordionPricing-2">
                                    <div class="accordion-body text-sm opacity-8">
                                        Abre nuevas líneas de negocio, encuentra nichos de mercado, atrae nuevos
                                        clientes y ofrece mayor valor percibido por los consumidores.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingTwo-2">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2"
                                        aria-expanded="false" aria-controls="collapseTwo-2">
                                        Mejora de la Satisfaccion del Cliente
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseTwo-2" class="accordion-collapse collapse" aria-labelledby="headingTwo-2"
                                    data-bs-parent="#accordionPricing-2">
                                    <div class="accordion-body text-sm opacity-8">
                                        Creación o rediseño de nuevos productos o servicios para mejorar la experiencia
                                        del servicio, incrementando los niveles de fidelización y satisfacción.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingThree-2">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-2"
                                        aria-expanded="false" aria-controls="collapseThree-2">
                                        Capacidad de Respuesta a Cambios del Mercado
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseThree-2" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree-2" data-bs-parent="#accordionPricing-2">
                                    <div class="accordion-body text-sm opacity-8">
                                        Adaptación rápida a cambios dinámicos para mantener su competitividad y
                                        fortalecer su resiliencia para superar las crisis y asegurar su sostenibilidad.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header" id="headingFour-2">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start icon-move-right"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-2"
                                        aria-expanded="false" aria-controls="collapseFour-2">
                                        Deducción de Impuestos por el Gobierno Peruano
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h6>
                                <div id="collapseFour-2" class="accordion-collapse collapse" aria-labelledby="headingFour-2"
                                    data-bs-parent="#accordionPricing-2">
                                    <div class="accordion-body text-sm opacity-8">
                                        Acceso a incentivos fiscales para empresas que invierten en I+D.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>-->

    <!--<h2 class="text-xolor-grey text-center mb-7"><img src="<?= $ico ?>" class="w-5">Nuestro equipo</h2>-->

    <?php include './sections/page-sections/footer.php' ?>

    <?php include './sections/page-sections/ref-scripts.php' ?>
</body>

</html>