<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top navbar-before-scroll shadow-10 mb-10"
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
                    src="./img/logo-2.png"
                    height="60"
                    width="205"
                    alt="MDB Logo"
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
                            <span class="navbar-tex text-muted text-uppercase" style="font-size: 14px;">Cursos y asesorías en gestión de proyectos sociales</span>-->
                        </p>
                    </li>
                </ul>
                <!-- Left links -->
                <div class="d-flex align-items-center">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" data-mdb-ripple-init>
                            <a class="nav-link" style="color: rgb(226, 160, 48) !important;" href="./" id="link-nav">Inicio</a>
                        </li>
                        <li class="nav-item" data-mdb-ripple-init>
                            <a class="nav-link" style="color: rgb(226, 160, 48) !important;" href="./about-us.php">Nosotros</a>
                        </li>
                        <li class="nav-item" data-mdb-ripple-init>
                            <a class="nav-link" style="color: rgb(226, 160, 48) !important;" href="./courses.php">Cursos</a>
                        </li>
                        <li class="nav-item" data-mdb-ripple-init>
                            <a class="nav-link" style="color: white !important;" href="./shop.php" onclick="">Comprar</a>
                        </li>
                        <?= $user_nav_bar ?>
                        <li class="nav-item" data-mdb-ripple-init>
                            <a class="nav-link text-muted" href="javascript:;" onclick="">
                                <?= $icono_user ?>
                            </a>
                        </li>
                        <?= $btn_login ?>
                    </ul>
                </div>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>