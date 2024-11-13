<?php
$nosotros = (isset($_GET['nosotros'])) ? ' active-nav' : '';
$servicios = (isset($_GET['servicios'])) ? ' active-nav' : '';
$cursos = (isset($_GET['cursos'])) ? ' active-nav' : '';
$recursos = (isset($_GET['recursos'])) ? ' active-nav' : '';
$contacto = (isset($_GET['contacto'])) ? ' active-nav' : '';
$blog = (isset($_GET['blog'])) ? ' active-nav' : '';
$privacidad = (isset($_GET['terminos'])) ? ' active-nav' : '';
$isologo_min = '';

if ((isset($_GET['nosotros'])) || (isset($_GET['servicios'])) || (isset($_GET['cursos'])) || (isset($_GET['recursos'])) || (isset($_GET['contacto'])) || (isset($_GET['terminos']))) {
  $logo_dark = './assets/img/logos/esce-sb-1.png';
  $isologo_min = 'main-text-secondary';
} else {
  $logo_dark = './assets/img/logos/esce-white.png';
  $isologo_min = 'text-warning';
}
?>

<nav
  class="navbar navbar-expand-lg position-absolute top-0 z-index-3 my-3 py-2 end-0 start-0 shadow-none  navbar-transparent ">
  <!-- navbar navbar-expand-lg top-0 z-index-3 position-absolute my-3 py-2 start-0 end-0 mx-4 navbar-transparent -->
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3  d-none d-md-block"
      href="./" rel="tooltip"
      title="Designed and Coded by Creative Tim" data-placement="bottom" target="">
      <img src="<?= $logo_dark ?>" class="w-30" alt="ESCE Logo">
    </a>
    <a class="navbar-brand font-weight-bolder ms-sm-3  d-block d-md-none"
      href="./" rel="tooltip"
      title="Designed and Coded by Creative Tim" data-placement="bottom" target="">
      <h1 class="<?= $isologo_min ?>">esce</h1>
    </a>
    <!--<a href="https://www.creative-tim.com/product/material-kit-pro#pricingCard"
      class="btn btn-sm  bg-gradient-primary  mb-0 ms-auto d-lg-none d-block">Buy Now</a>-->
    <button class="navbar-toggler shadow-none ms-md-2 bg-secondary" type="button" data-bs-toggle="collapse"
      data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse w-100 pt-3 pb-4 py-lg-0" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">
        
        <li class="nav-item dropdown dropdown-hover mx-4">
          <a href="<?= $ruta_nosotros ?>" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center <?= $nosotros ?>">
            Nosotros
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-4">
          <a href="<?= $ruta_servicios ?>" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center <?= $servicios ?>">
            Servicios
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-4">
          <a href="<?= $ruta_cursos ?>" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center <?= $cursos ?>">
            Cursos
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-4">
          <a href="<?= $ruta_recursos ?>" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center <?= $recursos ?>">
            Recursos
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-4">
          <a href="<?= $ruta_contacto ?>" role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center <?= $contacto ?>">
            Contacto
          </a>
        </li>
        
      </ul>
      <!--<ul class="navbar-nav d-lg-block d-none">
        <li class="nav-item">
          <a href="#pricing-material-kit" class="btn btn-sm  bg-gradient-primary  mb-0"
            onclick="smoothToPricing('pricing-soft-ui')">Buy Now</a>
        </li>
      </ul>-->
    </div>
  </div>
</nav>