<?php
session_start();
include './includes.php';
if (isset($_SESSION['ingreso']) && $_SESSION['ingreso'] == 'YES' && $_SESSION['reg_rol'] == 'admin') {
?>
<!DOCTYPE html>
<html lang="es" data-mdb-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Usuarios | <?= $nombre_empresa ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="icon" href="./template-mdb5/img/conoce-mas.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="./template-mdb5/css/pro.mdb.min.css" />
    <!-- My Style -->
    <link rel="stylesheet" href="./template-mdb5/css/style.css" />
    <!-- Local Style -->
    <link rel="stylesheet" href="./css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.0/xlsx.full.min.js"></script>
</head>
<body onload="sp_load_users_list()" style="background-color: rgb(85, 108, 117) !important;">

<div id="loading-overlay">
    <div class="spinner"></div>
</div>

<!--Main Navigation-->
<?php include './sections/nav-bar-users.php'?>

<section class="mb-10"></section>

<!--Main Navigation-->
<main class="mb-10" id="principal">
    <!--All contenido de las secciones del nav-bar -->
    <header>
        <!-- section: User manu -->
        <section class="container mb-4"
                 data-mdb-animation-init
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation="fade-in"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-delay="200">
            <nav data-mdb-navbar-init class="navbar navbar-expand-lg bg-body-tertiary mt-10 mb-4">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="javascript:;">Administración de usuarios</a></li>
                        </ol>
                    </nav>
                </div>
            </nav>
        </section>
        <!-- end section: User manu -->
    </header>

    <!-- Cars of courses -->
    <section id="courses" class="container rounded rounded-5"
             data-mdb-animation-init
             data-mdb-animation-start="onScroll"
             data-mdb-animation="fade-in"
             data-mdb-animation-show-on-load="false"
             data-mdb-animation-delay="400">
        <!--<h3 class="fw-bold text-center text-primary mb-5"><i class="fas fa-layer-group text-success"></i> Lista de Cursos</h3>-->
        <div class="row gx-lg-5 rounded rounded-5">
            <!-- table users hereI! -->
            <div class="col-12 table-responsive mb-6 mb-lg-0 rounded rounded-5">
                <button class="btn btn-success mb-3" onclick="exportarExcel('tbl-export-users')"><i class="fas fa-file-excel"></i> Exportar</button>
                <table class="d-none" id="tbl-export-users">
                    <thead>
                        <th>APELLIDOS Y NOMBRES</th>
                        <th>CORREO</th>
                        <th>CELULAR</th>
                        <th>ROL</th>
                        <th>CURSO 1</th>
                        <th>CURSO 2</th>
                        <th>CURSO 3</th>
                    </thead>
                    <tbody></tbody>
                </table>
                <table class="table table-hover table-striped cursor-pointer align-middle mb-0 rounded rounded-5" id="tbl-reporte-usuarios">
                    <thead class="bg-primary text-uppercase">
                        <tr class="table-dark text-center">
                            <th>apellidos y nombres</th>
                            <th>Nro. Celular</th>
                            <th>Rol</th>
                            <th>Status</th>
                            <th>Curso 1</th>
                            <th>Curso 2</th>
                            <th>Curso 3</th>
                            <th>-</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <button type="button" class="btn btn-link btn-sm btn-rounded d-none"
                        data-mdb-ripple-init
                        data-mdb-modal-init
                        data-mdb-target="#modal-edit-user"
                        onclick=""><i class="fas fa-pen"></i></button>
            </div>
            <!-- end Table users -->
        </div>
    </section>
    <!-- Modal edit-user form -->
    <?php include './modals/modal-edit-user.php' ?>
</main>
<?php include './sections/footer.php' ?>
</body>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- MDB -->
<script src="./template-mdb5/js/pro.mdb.umd.min.js"></script>
<!-- My Script -->
<script src="./js/scripts.js"></script>
<script src="./js/js_usuario.js"></script>
</html>
<?php
} else {
    header('location: index.php');
}
?>