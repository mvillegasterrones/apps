<!-- 
    TODO link: https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/default.html
    TODO FA git: https://github.com/eliyantosarage/font-awesome-pro
    TODO SweetAlert: https://sweetalert2.github.io/#download
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--<link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />-->

    <!--<meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, Argon Dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, soft design, soft dashboard bootstrap 5 dashboard">
    <meta name="description" content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Argon Dashboard PRO by Creative Tim">
    <meta name="twitter:description" content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/argon-dashboard-pro.jpg">-->

    <!--<meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Argon Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/landing" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/argon-dashboard-pro.jpg" />
    <meta property="og:description" content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
    <meta property="og:site_name" content="Creative Tim" />-->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">

    <link href="../main-template/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../main-template/assets/css/nucleo-svg.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../main-template/assets/css/nucleo-svg.css" rel="stylesheet" />

    <link id="pagestyle" href="../main-template/assets/css/argon-dashboard.min.css?v=2.0.5" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="g-sidenav-show g-sidenav-pinned dark-version bg-gray-600">

    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <?php include './views/sections/slider.php' ?>

    <main class="main-content position-relative border-radius-lg">
        <?php include './views/sections/nav-bar.php' ?>

        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-12">
                    <h1>Hola! Bienvenido <code>Nombre</code></h1>
                </div>
            </div>
        </div>
    </main>

</body>

<script src="../main-template/assets/js/core/popper.min.js"></script>
    <script src="../main-template/assets/js/core/bootstrap.min.js"></script>
    <script src="../main-template/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../main-template/assets/js/plugins/smooth-scrollbar.min.js"></script>

    <script src="../main-template/assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../main-template/assets/js/plugins/jkanban/jkanban.js"></script>
    <script src="../main-template/assets/js/plugins/leaflet.js"></script>
    <script src="../main-template/assets/js/plugins/nouislider.min.js"></script>

    <script>
        Swal.fire({
            title: "Bienvenido!",
            text: "You clicked the button!",
            icon: "success"
        });
    
        var win = navigator.platform.indexOf("Win") > -1;
        if (win && document.querySelector("#sidenav-scrollbar")) {
            var options = {
                damping: "0.5",
            };
            Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
        }
    </script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="../main-template/assets/js/argon-dashboard.min.js?v=2.0.5"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"874f2a46ce0b9aef","version":"2024.3.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>

</html>