<footer class="text-center text-white" id="mdb-footer" style="background-color: rgb(85, 108, 117) !important;">
    <div class="container py-4 border-bottom"
         data-mdb-animation-init
         data-mdb-animation-start="onScroll"
         data-mdb-animation="fade-in"
         data-mdb-animation-show-on-load="false"
         data-mdb-animation-delay="200">

        <!-- Facebook -->
        <a class="btn text-white btn-floating m-2" style="background-color: #3b5998;" href="<?= $social_facebook ?>" target="_blank" role="button"><i
                class="fab fa-facebook-f"></i>
        </a>

        <!-- Twitter -->
        <!--<a class="btn text-white btn-floating m-2" style="background-color: #55acee;" href="<?= $social_tweeter ?>" target="_blank" role="button"><i
                class="fab fa-twitter"></i>-->
        </a>

        <!-- Google -->
        <!--<a class="btn text-white btn-floating m-2" style="background-color: #dd4b39;" href="<?= $social_google ?>" target="_blank" role="button"><i
                class="fab fa-google"></i></a>-->

        <!-- Instagram -->
        <a class="btn text-white btn-floating m-2" style="background-color: #ac2bac;" href="<?= $social_instagram ?>" target="_blank" role="button"><i
                class="fab fa-instagram"></i>
        </a>

        <!-- Linkedin -->
        <a class="btn text-white btn-floating m-2" style="background-color: #0082ca;" href="<?= $social_linkedin ?>" target="_blank" role="button"><i
                class="fab fa-linkedin-in"></i>
        </a>
        <!-- Github -->
        <!--<a class="btn text-white btn-floating m-2" style="background-color: #333333;" href="<?= $social_github ?>" target="_blank" role="button"><i
                class="fab fa-github"></i>
        </a>-->
    </div>

    <!-- Section: Links  -->
    <section class=""
             data-mdb-animation-init
             data-mdb-animation-start="onScroll"
             data-mdb-animation="fade-in"
             data-mdb-animation-show-on-load="false"
             data-mdb-animation-delay="300">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4"
                     data-mdb-animation-init
                     data-mdb-animation-start="onScroll"
                     data-mdb-animation="fade-in"
                     data-mdb-animation-show-on-load="false"
                     data-mdb-animation-delay=400">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <!--<i class="fas fa-gem me-3"></i>-->
                        <img src="./img/lg-lyceum.png" alt="icono-conoce-mas" style="width: 15%;">
                        <?= $nombre_persona ?>
                    </h6>
                    <p><?= $descripcion_persona ?></p>
                    <p>
                        <a href="javascript:;" class="text-reset"><i class="fas fa-envelope"></i> consultas@lyceum-group.conoce-mas.com</a>
                    </p>
                    <p class="text-reset">
                        <a href="https://api.whatsapp.com/send?phone=51902821901&text=Hola%20Lyceum%20Group!%20" target="_blank" class="text-reset"><i class="fa-brands fa-whatsapp"></i> +51 - 902 821 901</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <!--<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Angular</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p>
                </div>-->
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4"
                     data-mdb-animation-init
                     data-mdb-animation-start="onScroll"
                     data-mdb-animation="fade-in"
                     data-mdb-animation-show-on-load="false"
                     data-mdb-animation-delay="500">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Enalces</h6>
                    <p>
                        <a href="./" class="text-reset"><i class="fa-solid fa-chevron-right text-muted" style="font-size: 11px;color: #61ebba !important;"></i> Inicio</a>
                    </p>
                    <p>
                        <a href="./about-us.php" class="text-reset"><i class="fa-solid fa-chevron-right text-muted" style="font-size: 11px;color: #61ebba !important;"></i> Nosotros</a>
                    </p>
                    <p>
                        <a href="./courses.php" class="text-reset"><i class="fa-solid fa-chevron-right text-muted" style="font-size: 11px;color: #61ebba !important;"></i> Cursos</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4"
                     data-mdb-animation-init
                     data-mdb-animation-start="onScroll"
                     data-mdb-animation="fade-in"
                     data-mdb-animation-show-on-load="false"
                     data-mdb-animation-delay="600">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Horario de atención</h6>
                    <!--<p><i class="fa-solid fa-map-pin me-3"></i><?= $persona_direccion ?></p>
                    <p><i class="fas fa-envelope me-3"></i><?= $correo_persona ?></p>
                    <p><i class="fa-solid fa-phone-volume me-3"></i><?= $persona_fijo ?></p>
                    <p><i class="fa-solid fa-mobile me-3"></i><?= $celular_persona ?></p>-->
                    <ul class="list-group list-group-light">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fw-bold text-white"><i class="fas fa-check"></i> Lunes - Viernes</div>
                                <!--<div class="text-muted">john.doe@gmail.com</div>-->
                            </div>
                            <span class="badge rounded-pill badge-success"><i class="fas fa-clock"></i> 09:00am - 05:00pm</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fw-bold text-white"><i class="fas fa-check"></i> Sábados</div>
                                <!--<div class="text-muted">alex.ray@gmail.com</div>-->
                            </div>
                            <span class="badge rounded-pill badge-success"><i class="fas fa-clock"></i> 10:00am - 03:00pm</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fw-bold text-white"><i class="fas fa-exclamation-triangle"></i> Domingos</div>
                                <!--<div class="text-muted">kate.hunington@gmail.com</div>-->
                            </div>
                            <span class="badge rounded-pill badge-warning">Cerrado</span>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center copyright p-3" style=""
         data-mdb-animation-init
         data-mdb-animation-start="onScroll"
         data-mdb-animation="fade-in"
         data-mdb-animation-show-on-load="false"
         data-mdb-animation-delay="700">
        © <?= date('Y') ?> Copyright: <strong><?= $nombre_empresa ?></strong><br>
        Diseñado por <a class="text-warning" href="<?= $web_url_design ?>" target="_blank">J&M Asociados</a>
    </div>
    <!-- Copyright -->
</footer>
<!--Footer-->