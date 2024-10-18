<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= $ico ?>"><!-- ./assets/img/favicon.png -->
    <title>
        ESCE | Blog
    </title>
    <?php include './sections/page-sections/ref-header.php' ?>
</head>

<body class="case-study bg-gray-200">

    <div class="container position-absolute z-index-sticky top-0 mb-10">
        <div class="row">
            <div class="col-12 navbar-item-text-color">
                <?php include './sections/page-sections/nav-bar-3.php' ?>
            </div>
        </div>
    </div>

    <div class="container mt-8 mb-0">
        <div class="row text-center mb-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-6 mx-auto">
                        <h3 data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">Contactanos</h3>
                        <p data-aos="fade-up" data-aos-duration="1100"
                        data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus illum magni tempora
                            cumque ipsum quia atque tempore, iste officiis a.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mb-7">
                <div class="col-12 col-lg-6 card levitate-on-hover mb-7 mb-lg-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="card card-plain p-4">
                        <form id="contact-form" method="post" autocomplete="off">
                            <div class="card-body">
                                <div class="row">
                                    <h5 class="mb-4">Lorem ipsum dolor sit amet.</h5>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Nombres <b class="text-primary">*</b></label>
                                            <input type="text" class="form-control" placeholder="Nombres">
                                            <span class="input-group-text"><i class="material-icons">person</i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ps-md-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Apellidos <b class="text-primary">*</b></label>
                                            <input type="text" class="form-control" placeholder="Apellidos">
                                            <span class="input-group-text"><i class="material-icons">person</i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Correo <b class="text-primary">*</b></label>
                                            <input type="text" class="form-control" placeholder="Correo">
                                            <span class="input-group-text"><i class="material-icons">email</i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ps-md-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Teléfono <b class="text-primary">*</b></label>
                                            <input type="text" class="form-control" placeholder="Teléfono">
                                            <span class="input-group-text"><i class="material-icons">phone</i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Nombre de la empresa/compañía <b class="text-primary">*</b></label>
                                            <input type="text" class="form-control" placeholder="Correo">
                                            <span class="input-group-text"><i class="material-icons">home</i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Elige tu carrera <b class="text-primary">*</b></label>
                                            <select class="form-control">
                                                <option value="">-- Seleccione --</option>
                                                <option>Opción 1</option>
                                                <option>Opción 2</option>
                                                <option>Opción 3</option>
                                            </select>
                                            <span class="input-group-text"><i
                                                    class="material-icons">edit_note</i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Elige tu departamento <b class="text-primary">*</b></label>
                                            <select class="form-control">
                                                <option value="">-- Seleccione --</option>
                                                <option>Departamento 1</option>
                                                <option>Departameyto 2</option>
                                                <option>Departamento 3</option>
                                            </select>
                                            <span class="input-group-text"><i
                                                    class="material-icons">edit_note</i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Título de tu carrera <b class="text-primary">*</b></label>
                                            <input type="text" class="form-control" placeholder="Correo">
                                            <span class="input-group-text"><i class="material-icons">edit</i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4 mt-md-0 mt-4">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Cuéntanos más acerca de tus necesidades...</label>
                                        <textarea name="message" class="form-control" id="message" rows="6"
                                            placeholder="Descriube tus comentarios en 250 caracteres"></textarea>
                                        <span class="input-group-text"><i class="material-icons">edit</i></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-static mb-4">
                                            <label>¿Cómo conocíste acerca de ESCE? <b class="text-primary">*</b></label>
                                            <select class="form-control">
                                                <option value="">-- Seleccione --</option>
                                                <option>Departamento 1</option>
                                                <option>Departameyto 2</option>
                                                <option>Departamento 3</option>
                                            </select>
                                            <span class="input-group-text"><i
                                                    class="material-icons">edit_note</i></span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit"
                                            class="btn main-bg-color-warning btn-warning btn-rounded-20p mt-4">Enviar
                                            mensaje</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="200">
                        <div class="col-12 col-lg-5 mx-auto">
                            <h3>Lorem ipsum dolor sit amet.</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam laudantium fugit
                                facere dignissimos harum sit eum quo corrupti!</p>
                            <p>
                                <button
                                    class="btn main-bg-color-warning btn-warning btn-rounded-20p btn-block">Suscribirme</button>
                            </p>
                            <hr class="w-100 main-bg-color-grey">
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                        <div class="col-12 col-lg-5 mx-auto">
                            <h3>Lorem ipsum dolor..</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam laudantium fugit
                                facere dignissimos harum sit eum quo corrupti!</p>
                            <hr class="w-100 main-bg-color-grey">
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="400">
                        <div class="col-12 col-lg-5 mx-auto">
                            <h3>Lorem ipsum dolor..</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam delectus tempora harum
                                quod vero eaque atque optio. Praesentium tempore corrupti neque soluta?
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <h3 class="mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Preguntas frecuentes
                </h3>
                <div class="row">
                    <div class="col-12 col-lg-8 mx-auto">
                        <div class="accordion" id="accordionRental">

                            <div class="accordion-item mb-3 text-start" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="300">
                                <h5 class="accordion-header" id="headingOne">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        Lorem ipsum anu discounts per?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sed, odio veniam sequi laborum aperiam optio repudiandae placeat, quis totam esse perspiciatis itaque nam ratione ducimus deleniti dolorum quibusdam debitis?
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 text-start" data-aos="fade-up" data-aos-duration="1300"
                                data-aos-delay="400">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Lorem ipsum anu discounts per?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at nobis, deleniti ipsa corrupti fugiat rerum natus illo omnis voluptatum fugit ea cumque dolorum placeat labore sequi culpa vel odit?
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 text-start" data-aos="fade-up" data-aos-duration="1400"
                                data-aos-delay="500">
                                <h5 class="accordion-header" id="headingThree">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Lorem ipsum anu discounts per?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, error nesciunt possimus, odit reprehenderit sit consequuntur magnam quos blanditiis voluptas dicta dolore. Natus vero at asperiores, libero quidem accusamus ipsa.
                                    </div>
                                </div>
                            </div>

                            <!--<div class="accordion-item mb-3" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-delay="600">
                                <h5 class="accordion-header" id="headingFour">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        ¿Puedo tomar el curso con mi equipo?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Sí, los cursos y talleres de ESCE son ideales para equipos de trabajo.
                                        Fomentamos la participación grupal para que puedas aplicar los conocimientos
                                        adquiridos en un entorno colaborativo. De hecho, lo equipos de 3 o más
                                        personas
                                        cuentan con un descuento del 25%
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3" data-aos="fade-up" data-aos-duration="1600"
                                data-aos-delay="700">
                                <h5 class="accordion-header" id="headingFifth">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth"
                                        aria-expanded="false" aria-controls="collapseFifth">
                                        ¿Ofrecen descuentos?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseFifth" class="accordion-collapse collapse"
                                    aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Sí, ofrecemos descuentos por pronta matrícula o promociones especiales en
                                        ciertos periodos del año. Para más detalles, consulta nuestras políticas de
                                        descuentos o contacta al equipo de soporte.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3" data-aos="fade-up" data-aos-duration="1700"
                                data-aos-delay="800">
                                <h5 class="accordion-header" id="headingSix">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                        aria-expanded="false" aria-controls="collapseSix">
                                        ¿Obtendré un certificado al finalizar un curso o taller?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Sí, al completar un curso o taller, recibirás un certificado que acredita tu
                                        participación en las dinámicas de aprendizaje diseñadas para el desarrollo
                                        de
                                        competencias.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3" data-aos="fade-up" data-aos-duration="1800"
                                data-aos-delay="900">
                                <h5 class="accordion-header" id="headingSeven">
                                    <button
                                        class="accordion-button border-bottom font-weight-bold text-start text-color-grey collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                        aria-expanded="false" aria-controls="collapseSeven">
                                        ¿Cómo puedo inscribirme en un curso o taller?
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                            aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        Puedes inscribirte directamente a través de nuestra plataforma en línea. Si
                                        tienes alguna pregunta sobre el proceso de inscripción, no dudes en
                                        contactarnos.
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <?php include './sections/page-sections/footer-2.php' ?>
    </div>

    <?php include './sections/page-sections/ref-scripts.php' ?>

</body>

</html>