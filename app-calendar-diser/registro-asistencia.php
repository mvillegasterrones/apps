<!-- 
    // TODO: link: https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/default.html
    // TODO: FA git: https://github.com/eliyantosarage/font-awesome-pro
    // TODO: SweetAlert: https://sweetalert2.github.io/#download
    // TODO: link-sis-faarmacia: https://sistemerp.com/page/farmacia-boticas
    // TODO: Creative link: https://www.creative-tim.com
-->
<?php include './includes.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Asistencia</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link rel="stylesheet" href="../../fontawesome-pro-6.5.2/css/all.css">

    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <script src="./assets/js/42d5adcbca.js"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <link id="pagestyle" href="./assets/css/argon-dashboard.min.css?v=2.0.5" rel="stylesheet" />

    <link id="pagestyle" href="./assets/css/style.css" rel="stylesheet" />

    <script src="./assets/js/plugins/sweetalert2.js"></script>

</head>

<body class="g-sidenav-show dark-version bg-gray-600 g-sidenav-hidden" onload="dre().get_dre()">

    <?php
    include './Views/sections/nav-bar-asistencia.php';
    include './Views/view-registro-asistencia.php';
    ?>

</body>

<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
<!--<script src="./assets/js/plugins/choices.min.js"></script>-->

<script>
    let win = navigator.platform.indexOf("Win") > -1
    if (win && document.querySelector("#sidenav-scrollbar")) {
        let options = {
            damping: "0.5",
        }
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options)
    }
</script>

<!-- // TODO: <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<!-- // TODO: <script async defer src="https://buttons.github.io/buttons.js"></script>-->
<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="./assets/js/github.buttons.js"></script>


<script src="./assets/js/app/jGlobal-vars.js"></script>
<script src="./assets/js/app/app.js"></script>
<script src="./assets/js/app/jSweet.js"></script>
<script src="./assets/js/app/jAsistencia.js"></script>
<script src="./assets/js/app/jDre-ugel.js"></script>
<script src="./assets/js/app/jCalendar.js"></script>

<script src="./assets/js/argon-dashboard.min.js?v=2.0.5"></script>

</html>