<!-- 
     link: https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/default.html
    TODO FA git: https://github.com/eliyantosarage/font-awesome-pro
    TODO SweetAlert: https://sweetalert2.github.io/#download
    TODO link-sis-faarmacia: https://sistemerp.com/page/farmacia-boticas
-->
<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">

    <link href="<?= $rutal_local ?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= $rutal_local ?>assets/css/nucleo-svg.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= $rutal_local ?>assets/css/nucleo-svg.css" rel="stylesheet" />

    <link id="pagestyle" href="<?= $rutal_local ?>assets/css/argon-dashboard.min.css?v=2.0.5" rel="stylesheet" />

    <link id="pagestyle" href="<?= $rutal_local ?>assets/css/style.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="g-sidenav-show dark-version bg-gray-600 g-sidenav-hidden" onload="rubros().get_list()"><!-- ! g-sidenav-show g-sidenav-pinned dark-version bg-gray-600 -->

    <?php
    session_start();
    if (isset($_SESSION['acceso']) && $_SESSION['acceso'] == 'YES') {
        include './Views/view-index.php';
    } else {
        include './Views/view-login.php';
    }
    ?>

</body>

<script src="<?= $rutal_local ?>assets/js/core/popper.min.js"></script>
<script src="<?= $rutal_local ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?= $rutal_local ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= $rutal_local ?>assets/js/plugins/smooth-scrollbar.min.js"></script>

<script src="<?= $rutal_local ?>assets/js/plugins/dragula/dragula.min.js"></script>
<script src="<?= $rutal_local ?>assets/js/plugins/jkanban/jkanban.js"></script>
<script src="<?= $rutal_local ?>assets/js/plugins/leaflet.js"></script>
<script src="<?= $rutal_local ?>assets/js/plugins/nouislider.min.js"></script>

<script>

    let win = navigator.platform.indexOf("Win") > -1
    if (win && document.querySelector("#sidenav-scrollbar")) {
        let options = {
            damping: "0.5",
        }
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options)
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="<?= $rutal_local ?>assets/js/app/jSweet.js"></script>
<script src="<?= $rutal_local ?>assets/js/app/jUser.js"></script>
<script src="<?= $rutal_local ?>assets/js/app/jRubros.js"></script>
<script src="<?= $rutal_local ?>assets/js/app/app.js"></script>

<script src="<?= $rutal_local ?>assets/js/argon-dashboard.min.js?v=2.0.5"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"874f2a46ce0b9aef","version":"2024.3.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>

</html>