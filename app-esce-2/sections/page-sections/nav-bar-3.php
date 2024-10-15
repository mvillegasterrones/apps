<nav
  class="navbar navbar-expand-lg shadow-none navbar-transparent border-radius-xl top-0 z-index-3 shadow position-absolute mt-4 my-3 py-2 start-0 end-0 mx-4 text-white blur-sm" id="main-navbar">
  <div class="container-fluid px-0">

    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">
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
          <a role="button" href="<?= $ruta_cursos ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
            <i class="material-icons opacity-6 me-2 text-md">library_books</i>
            Cursos
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a role="button" href="<?= $ruta_recursos ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
            <i class="material-icons opacity-6 me-2 text-md">inventory_2</i>
            Recursos
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a role="button" href="<?= $ruta_nosotros ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
            <i class="material-icons opacity-6 me-2 text-md">contact_phone</i>
            Contacto
          </a>
        </li>

      </ul>
    </div>


    <a class="navbar-brand font-weight-bolder ms-sm-3 d-none d-md-block text-start text-lg-end" href="./" rel="tooltip"
      title="Volver al inicio" data-placement="bottom" target="">
      <img src="<?= $logo ?>" class="w-50 w-lg-10" alt="ESCE Logo" />
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