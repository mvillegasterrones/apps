<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php include './views/sections/slider.php' ?>

<main class="main-content position-relative border-radius-lg">
    <?php include './views/sections/nav-bar.php' ?>

    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">

                <h1>Hola! Bienvenido <code>Nombre</code></h1>

                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <button class="btn btn-primary btn-sm ml-2 mb-2" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-primary btn-sm mb-2" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>

                <i class="fa-duotone fa-spinner-third fa-spin"></i>

            </div>
        </div>
    </div>
</main>