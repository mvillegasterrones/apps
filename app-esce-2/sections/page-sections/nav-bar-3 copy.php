<?php
$nosotros = (isset($_GET['nosotros'])) ? ' active-nav' : '';
$servicios = (isset($_GET['servicios'])) ? ' active-nav' : '';
$cursos = (isset($_GET['cursos'])) ? ' active-nav' : '';
$recursos = (isset($_GET['recursos'])) ? ' active-nav' : '';
$contacto = (isset($_GET['contacto'])) ? ' active-nav' : '';
$blog = (isset($_GET['blog'])) ? ' active-nav' : '';
$privacidad = (isset($_GET['terminos'])) ? ' active-nav' : '';

if ((isset($_GET['nosotros'])) || (isset($_GET['servicios'])) || (isset($_GET['cursos'])) || (isset($_GET['recursos'])) || (isset($_GET['contacto'])) || (isset($_GET['terminos']))) {
  $logo_dark = './assets/img/logos/esce-sb-1.png';
} else {
  $logo_dark = './assets/img/logos/esce-white.png';
}

?>

<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent "> <!-- navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-0 mx-5 navbar-transparent p-0 mt-4 -->
  <div class="container-fluid px-0 p-0">

    <a class="navbar-brand font-weight-bolder ms-sm-3 d-none d-md-block me-5" href="./" rel="tooltip"
      title="Volver al inicio" data-placement="bottom" target="">
      <img src="<?= $logo_dark ?>" class="w-5 w-lg-30 mx-3" alt="ESCE Logo" />
    </a>
    <a class="navbar-brand font-weight-bolder ms-sm-3 d-block d-md-none" href="./" rel="tooltip"
      title="Escuela de ciencias empresariales y gestión pública" data-placement="bottom" target="">
      <img src="<?= $logo_dark ?>" class="w-10" alt="ESCE Logo" />
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

    <hr class="w-0">

    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 text-start mx-0" style="right: 0px !important; padding-right: 0 important;padding-left: 90px !important;" id="navigation">
      <ul class="navbar-nav navbar-nav-hover align-items-start align-content-start">
        <li class="nav-item dropdown dropdown-hover mx-4">
          <a role="button" href="<?= $ruta_nosotros ?>"
            class="nav-link ps-2 d-flex cursor-pointer align-items-center <?= $nosotros ?>">
            Nosotros
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-4">
          <a role="button" href="<?= $ruta_servicios ?>"
            class="nav-link ps-2 d-flex cursor-pointer align-items-center <?= $servicios ?>">
            Servicios
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-4">
          <a role="button" href="<?= $ruta_cursos ?>"
            class="nav-link ps-2 d-flex cursor-pointer align-items-center <?= $cursos ?>">
            Cursos
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-4">
          <a role="button" href="<?= $ruta_recursos ?>"
            class="nav-link ps-2 d-flex cursor-pointer align-items-center <?= $recursos ?>">
            Recursos
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-5">
          <a role="button" href="<?= $ruta_contacto ?>"
            class="nav-link ps-0 d-flex cursor-pointer align-items-center <?= $contacto ?>">
            Contacto
          </a>
        </li>
      </ul>
    </div>

  </div>
</nav>