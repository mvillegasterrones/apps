<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-info bg-body-tertiary fixed-top navbar-before-scroll shadow-10 mb-10"
         data-mdb-animation-init
         data-mdb-animation-start="onLoad"
         data-mdb-animation="fade-in-down"
         data-mdb-animation-show-on-load="false"
         data-mdb-animation-delay="100">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="./">
                <img
                    src="./img/logo-eace.png"
                    height="60"
                    width="270"
                    alt="Lyceum Logo"
                    loading="lazy"
                />
            </a>

            <!-- Toggle button -->
            <button
                    data-mdb-collapse-init
                    class="navbar-toggler"
                    type="button"
                    data-mdb-target="#navbarButtonsExample"
                    aria-controls="navbarButtonsExample"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
            
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <p class="nav-link mb-0" href="javascript:;">
                            <!--<span class="navbar-tex text-warning mb-0"><?= $nombre_empresa ?></span><br>
                            <span class="navbar-tex text-muted text-uppercase" style="font-size: 14px;">Cursos y asesor��as en gesti��n de proyectos sociales</span>-->
                        </p>
                    </li>
                </ul>
                <!-- Left links -->

                <div class="d-flex align-items-center" id="sidenav-collapse-main">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" data-mdb-ripple-init>
                            <a class="nav-link text-warning active-nav-item" href="./" id="link-nav" onclick="">Inicio</a>
                        </li>
                        <li class="nav-item" data-mdb-ripple-init>
                            <a class="nav-link text-warning" href="./about-us.php" onclick="">Nosotros</a>
                        </li>
                        <li class="nav-item" data-mdb-ripple-init>
                            <a class="nav-link text-warning" href="./courses.php" onclick="">Cursos</a>
                        </li>
                        <?= $user_nav_bar ?>
                        <li class="nav-item" data-mdb-ripple-init>
                            <a class="nav-link text-muted" href="javascript:;">
                                <?= $icono_user ?>
                            </a>
                        </li>
                        <?= $btn_login ?>
                        <!--<li class="nav-item" data-mdb-ripple-init>
                            <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
                                Login
                            </button>
                        </li>-->
                        <!--<li class="nav-item" data-mdb-ripple-init>
                            <button type="button" class="btn btn-primary me-3"
                                    data-mdb-ripple-init
                                    data-mdb-modal-init
                                    data-mdb-target="#modal-register">
                                LOGIN
                            </button>
                        </li>-->

                    </ul>
                    <!--
                    <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
                        Login
                    </button>
                    <button data-mdb-ripple-init type="button" class="btn btn-primary me-3">
                        Sign up for free
                    </button>
                    -->
                    <!--<a
                        data-mdb-ripple-init
                        class="btn btn-dark px-3"
                        href="https://github.com/mdbootstrap/mdb-ui-kit"
                        role="button"
                    ><i class="fab fa-github"></i
                        ></a>-->
                </div>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>