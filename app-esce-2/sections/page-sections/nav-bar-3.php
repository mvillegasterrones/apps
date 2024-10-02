<nav
  class="navbar navbar-expand-lg shadow-none navbar-transparent border-radius-xl top-0 z-index-3 shadow position-absolute mt-4 my-3 py-2 start-0 end-0 mx-4 text-white blur-sm" id="main-navbar">
  <div class="container-fluid px-0">

    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a role="button" href="<?= $ruta_nosotros ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
            <!--<i class="material-icons opacity-6 me-2 text-md">group</i>-->
            <img src="<?= $ico ?>" class="w-4 w-lg-25 me-2" alt="ESCE Logo" srcset="">
            Nosotros
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a role="button" href="<?= $ruta_servicios ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
            <!--<i class="material-icons opacity-6 me-2 text-md">view_day</i>-->
            <img src="<?= $ico ?>" class="w-4 w-lg-25 me-2" alt="ESCE Logo" srcset="">
            Servicios
          </a>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuCursos"
            data-bs-toggle="dropdown" aria-expanded="false">
            <!--<i class="material-icons opacity-6 me-2 text-md">article</i>-->
            <img src="<?= $ico ?>" class="w-4 w-lg-25 me-2" alt="ESCE Logo" srcset="">
            Cursos
            <img src="./assets/img/down-arrow-dark.svg " alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
            <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block ms-auto">
          </a>
          <div
            class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md mt-0 mt-lg-3 p-3 border-radius-lg"
            aria-labelledby="dropdownMenuCursos">
            <div class="d-none d-lg-block">
              <ul class="list-group">
                <li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?= $ruta_teaching_the_teachers ?>">
                    <h6
                      class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                      Teaching The Teachers</h6>
                    <span class="text-sm">Curso</span>
                  </a>
                </li>
                <li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?= $ruta_capacitacion_continua ?>">
                    <h6
                      class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                      Capacitación Continua</h6>
                    <span class="text-sm">Cursos y Capacitaciones</span>
                  </a>
                </li>
                <li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?= $ruta_re_skalling ?>">
                    <h6
                      class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                      RE-SKALLING</h6>
                    <span class="text-sm">Curso</span>
                  </a>
                </li>
                <!--<li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md"
                    href=" https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit ">
                    <h6
                      class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                      Getting Started</h6>
                    <span class="text-sm">All about overview, quick start, license and contents</span>
                  </a>
                </li>-->
                <!--<li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md"
                    href=" https://www.creative-tim.com/learning-lab/bootstrap/colors/material-kit ">
                    <h6
                      class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                      Foundation</h6>
                    <span class="text-sm">See our colors, icons and typography</span>
                  </a>
                </li>-->
                <!--<li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md"
                    href=" https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-kit ">
                    <h6
                      class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                      Components</h6>
                    <span class="text-sm">Explore our collection of fully designed components</span>
                  </a>
                </li>-->
                <!--<li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md"
                    href=" https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit ">
                    <h6
                      class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                      Plugins</h6>
                    <span class="text-sm">Check how you can integrate our plugins</span>
                  </a>
                </li>-->
                <!--<li class="nav-item list-group-item border-0 p-0">
                  <a class="dropdown-item py-2 ps-3 border-radius-md"
                    href=" https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit ">
                    <h6
                      class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                      Utility Classes</h6>
                    <span class="text-sm">For those who want flexibility, use our utility classes</span>
                  </a>
                </li>-->
              </ul>
            </div>
            <div class="row d-lg-none">
              <div class="col-md-12 g-0">
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?= $ruta_teaching_the_teachers ?>">
                  <h6
                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                    Teaching The Teachers</h6>
                  <span class="text-sm">Curso</span>
                </a>
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?= $ruta_capacitacion_continua ?>">
                  <h6
                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                    Capacitación Continua</h6>
                  <span class="text-sm">Cursos y Capacitaciones</span>
                </a>
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?= $ruta_re_skalling ?>">
                  <h6
                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                    RE-SKALLING</h6>
                  <span class="text-sm">Curso</span>
                </a>
                <!--<a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                  <h6
                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                    Getting Started</h6>
                  <span class="text-sm">All about overview, quick start, license and contents</span>
                </a>
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                  <h6
                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                    Foundation</h6>
                  <span class="text-sm">See our colors, icons and typography</span>
                </a>
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                  <h6
                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                    Components</h6>
                  <span class="text-sm">Explore our collection of fully designed components</span>
                </a>
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                  <h6
                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                    Plugins</h6>
                  <span class="text-sm">Check how you can integrate our plugins</span>
                </a>
                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                  <h6
                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                    Utility Classes</h6>
                  <span class="text-sm">For those who want flexibility, use our utility classes</span>
                </a>-->
              </div>
            </div>
          </div>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a role="button" href="<?= $ruta_aprendizaje ?>"
            class="nav-link ps-2 d-flex cursor-pointer align-items-center">
            <!--<i class="material-icons opacity-6 me-2 text-md">contacts</i>-->
            <img src="<?= $ico ?>" class="w-4 w-lg-25 me-2" alt="ESCE Logo" srcset="">
            Aprendizaje
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a role="button" href="<?= $ruta_contacto ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
            <!--<i class="material-icons opacity-6 me-2 text-md">contact_mail</i>-->
            <img src="<?= $ico ?>" class="w-4 w-lg-25 me-2" alt="ESCE Logo" srcset="">
            Contacto
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a role="button" href="<?= $ruta_blog ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
            <!--<i class="material-icons opacity-6 me-2 text-md">forum</i>-->
            <img src="<?= $ico ?>" class="w-4 w-lg-25 me-2" alt="ESCE Logo" srcset="">
            Blog
          </a>
        </li>
      </ul>
      <!--<ul class="navbar-nav d-lg-block d-none">
        <li class="nav-item">
          <a href="#pricing-material-kit" class="btn btn-sm  bg-gradient-warning  mb-0" onclick="">Login</a>
        </li>
      </ul>-->
    </div>


    <a class="navbar-brand font-weight-bolder ms-sm-3 d-none d-md-block text-start text-lg-end" href="./" rel="tooltip"
      title="Volver al inicio" data-placement="bottom" target="">
      <img src="<?= $logo ?>" class="w-5 w-lg-10" alt="ESCE Logo" />
    </a>
    <a class="navbar-brand font-weight-bolder ms-sm-3  d-block d-md-none"
      href="./" rel="tooltip"
      title="Designed and Coded by Creative Tim" data-placement="bottom" target="">
      Escuela de Ciencias Empresariales y Gestión Pública
    </a><!--  https://demos.creative-tim.com/material-kit-pro/index -->
    <!--<a href="javascript:;" class="btn btn-sm  bg-gradient-warning  mb-0 ms-auto d-lg-none d-block">Login</a>-->
    <button class="navbar-toggler shadow-none ms-md-2" type="button" data-bs-toggle="collapse"
      data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>


  </div>
</nav>