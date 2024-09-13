<nav
    class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid px-0">
        <img src="<?= $logo ?>" class="w-5" alt="ESCE Logo">
        <a class="navbar-brand font-weight-bolder ms-sm-3  d-none d-md-block" href="./" rel="tooltip"
            title="Designed and Coded by Creative Tim" data-placement="bottom"
            target="_blank"><!-- https://demos.creative-tim.com/material-kit-pro/index -->
            <!--<h5>ESCE</h5>-->
        </a>
        <a class="navbar-brand font-weight-bolder ms-sm-3  d-block d-md-none" href="javascript:;" rel="tooltip"
            title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
            Escuela de Ciencias Empresariales y Gestión Pública
        </a>
        <!--<a href="https://www.creative-tim.com/product/material-kit-pro#pricingCard" class="btn btn-sm  bg-gradient-primary  mb-0 ms-auto d-lg-none d-block">Buy Now</a>-->
        <button class="navbar-toggler shadow-none ms-md-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" href="<?= $ruta_home ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                        <i class="material-icons opacity-6 me-2 text-md">home</i>
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" href="<?= $ruta_nosotros ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                        <i class="material-icons opacity-6 me-2 text-md">group</i>
                        Nosotros
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" href="<?= $ruta_servicios ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                        <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                        Servicios
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" id="dropdownMenuCursos" data-bs-toggle="dropdown" aria-expanded="false"
                        class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                        Cursos
                        <img src=" ./assets/img/down-arrow-dark.svg  " alt="down-arrow"
                            class="arrow ms-2 d-lg-block d-none">
                        <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow"
                            class="arrow ms-1 d-lg-none d-block ms-auto">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md mt-0 mt-lg-3 p-3 border-radius-lg"
                        aria-labelledby="dropdownMenuCursos">
                        <div class="d-none d-lg-block">
                            <ul class="list-group">
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="<?= $ruta_teaching_the_teachers ?>">
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                            Teaching The Teachers</h6>
                                        <span class="text-sm">Curso</span>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="<?= $ruta_capacitacion_continua ?>">
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                            Capacitación Continua</h6>
                                        <span class="text-sm">Cursos y Capacitaciones</span>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="<?= $ruta_re_skalling ?>">
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                            RE-SKALLING</h6>
                                        <span class="text-sm">Curso</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" href="<?= $ruta_aprendizaje ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                        <i class="material-icons opacity-6 me-2 text-md">contacts</i>
                        Aprendizaje
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" href="<?= $ruta_contacto ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                        <i class="material-icons opacity-6 me-2 text-md">contact_mail</i>
                        Contacto
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" href="<?= $ruta_blog ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                        <i class="material-icons opacity-6 me-2 text-md">forum</i>
                        Blog
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                    <a href="#pricing-material-kit" class="btn btn-sm  bg-gradient-primary  mb-0"
                        onclick="smoothToPricing('pricing-soft-ui')">LogIn</a>
                </li>
            </ul>
        </div>
    </div>
</nav>