<nav id="main-navbar" class="navbar navbar-expand-lg fixed-top navbar-before-scroll shadow-5">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Logo -->
    <a class="navbar-brand me-1" href="#">
      <img src="./img/logo-ecegp.jpeg" height="40px" alt="Logo" loading="lazy" />
      <!--<i class="fa-duotone fa-solid fa-graduation-cap text-primary"></i>-->
      ECEGP
    </a>
    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
      <!-- Left links -->
      <ul class="navbar-nav mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= $crecim_empresarial_url ?>">Crecimiento Empresarial</a>
        </li>
        <!--<li class="nav-item dropdown">
          <a data-mdb-dropdown-init class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
            aria-expanded="false">
            Crecimiento Empresarial
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="<?= $innovacion_botom_up ?>"><i class="fa-light fa-arrow-right text-warning"></i> Innovación
                Bottom-Up</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="fa-light fa-arrow-right text-warning"></i> Proyectos de
                Inversión Empresarial</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="fa-light fa-arrow-right text-warning"></i> SPRINTS: Problem
                Focused WorkShop</a>
              </a>
            </li>
          </ul>
        </li>-->
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown">
          <a data-mdb-dropdown-init class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
            aria-expanded="false">
            Cursos y Certificaciones
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="<?= $teaching_the_teachers ?>"><i class="fa-light fa-arrow-right text-warning"></i> Teaching the
                Teachers</a>
            </li>
            <li>
              <a class="dropdown-item" href="<?= $capacitacion_continua ?>"><i class="fa-light fa-arrow-right text-warning"></i> Capacitacion Contínua</a>
            </li>
            <li>
              <a class="dropdown-item" href="<?= $re_skalling ?>"><i class="fa-light fa-arrow-right text-warning"></i> RE-SKALLING:
                Talleres Focalizados</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?= $modelo_aprendizaje ?>" class="nav-link">Modelo de Aprendizaje</a>
        </li>
        <li class="nav-item">
          <a href="javascript:;" class="nav-link">Contacto</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>