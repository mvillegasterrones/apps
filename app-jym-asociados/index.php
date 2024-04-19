<!-- 
  //?https://mdbootstrap.com/docs/standard/components/ 
  //? https://mdbootstrap.com/docs/standard/
-->
<!DOCTYPE html>
<html lang="es" data-mdb-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>J&M Asociados - Home</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="./css/pro.mdb.min.css" />
  <!--<link rel="stylesheet" href="./plugins/css/all.min.css" />-->
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <!--Main layout-->
  <main class="container">

    <?php include './sections/nav.php' ?>

    <!-- //? Section: Split screen -->
    <section class="mb-10" id="section-home">
      <div class="container-fluid px-0">
        <div class="row g-0">
          <!-- First column -->
          <div class="col-lg-6 vh-100 d-flex flex-column justify-content-center align-items-center">
            <!-- Headings -->
            <div class="h-100 d-flex justify-content-center align-items-center px-5">
              <div class="">
                <h2 class="display-4 text-muted text-jym-menu-2" data-mdb-animation-init data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-left" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">
                  Somos
                </h2>

                <h1 class="display-2 fw-bold text-uppercase text-jym-menu" data-mdb-animation-init data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-left" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                  J&M Asociados
                </h1>
                <p class="h5 text-muted text-jym-menu-2" data-mdb-animation-init data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-left" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
                  Soluciones de Software Ágiles e Innovadoras
                  <!--Un equipo de profesionales, diseñadores y desarrolladores talentosos y creamos aplicaciones web, móviles y desktop a tu medida-->
                </p>
              </div>
            </div>

            <!-- CTA elements -->
            <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5" data-mdb-animation-init data-mdb-animation-start="onLoad" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
              <!--<a href="https://github.com/mdbootstrap/mdb-ui-kit" target="_blank" class="text-light"><i class="fab fa-github fa-xl"></i></a>-->
              <a href="https://www.facebook.com/profile.php?id=100090756835363&mibextid=LQQJ4d" target="_blank" class="text-primary"><i class="fab fa-facebook fa-xl"></i></a>
              <hr class="hr d-none d-xl-flex" style="height: 2px; width: 200px" />
              <a class="btn btn-primary btn-lg btn-rounded" href="#section-entry" role="button" data-mdb-ripple-init>Comecemos<i class="fas fa-angle-down ms-2"></i></a>
            </div>
          </div>
          <!-- First column -->

          <!-- Second column -->
          <div class="col-lg-6 d-none d-lg-inline-block vh-100" data-mdb-animation-init data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="300">
            <div class="mb-10"></div>
            <div class="hero-container h-100">
              <img src="./img/banners/hero-img2.png" alt="Imagen Hero" class="hero-image w-75 mt-10">
              <div class="wave-effect"></div>
            </div>
          </div>
          <!-- Second column -->
        </div>
      </div>
    </section>
    <!-- //? Section: Split screen -->

    <section class="mb-0" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="500">
      <div class="row">
        <div class="col-12">
          <h1 class="text-muted"><b class="text-jym-menu">Construimos apps móviles y web</b> para ayudar a los negocios a crecer y estar preparados para el futuro.</h1>
        </div>
      </div>
    </section>

    <section class="mb-10" id="section-entry"></section>

    <!-- //? Section: Te Ofrecemos -->
    <section class="mb-5 text-center" id="section-te-ofrecemos" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">

      <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
          <a href="#!" class="text-primary">
            <!--<i class="fas fa-users fa-xl"></i>-->
            <h2 class="fw-bold mb-0 text-center text-jym-menu">
              SERVICIOS
            </h2>
          </a>
          <hr class="hr d-none d-xl-flex" style="height: 2px; width: 900px" />
        </div>
      </div>

      <div class="row gx-lg-5">
        <!--1. Aplicaciones movíles -->
        <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
          <div class="card rounded-6 h-100" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
            <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="https://www.qualitydevs.com/wp-content/uploads/2021/03/Desarrollo-apps-moviles-1288x724.jpg" class="w-100" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title text-jym-menu">Desarrollo de Apps Móviles</h5>
              <!--<p class="text-muted">
                    <small>Finished <u>13.09.2021</u> for
                      <a href="" class="text-dark">Techify</a></small>
                  </p>-->
              <p class="card-text text-muted">
                Desarrollamos aplicaciones móviles para plataformas Android y iOS. Con interfaces pulidas en lo último del diseño UX y UI.
              </p>
              <!--<a href="#!" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Read more</a>-->
            </div>
          </div>
        </div>
        <!-- end 1 -->

        <!-- 2. Desarrollo web -->
        <div class="col-lg-4 mb-6 mb-lg-0">
          <div class="card rounded-6 h-100" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
            <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="https://www.labiznagadigital.es/wp-content/uploads/2019/11/contratar-desarrollo-web-profesional.jpg" class="w-100" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title text-jym-menu">Desarrollo Web</h5>
              <!--<p class="text-muted">
                    <small>Finished <u>12.01.2022</u> for
                      <a href="" class="text-dark">Rubicon</a></small>
                  </p>-->
              <p class="card-text text-muted">
                Desarrollo de aplicaciones web responsive y fáciles de usar. APIs Rest, Soluciones Cloud y más.
              </p>
              <!--<a href="#!" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Read more</a>-->
            </div>
          </div>
        </div>
        <!-- end 2 -->

        <!-- 3. Rede -->
        <div class="col-lg-4 mb-6 mb-lg-0">
          <div class="card rounded-6 h-100" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="800">
            <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="https://www.almondsolutions.com/images/blog-ui-ux-150223.jpg" class="w-100 h-100" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title text-jym-menu">Diseño UX/UI</h5>
              <!--<p class="text-muted">
                    <small>Finished <u>10.11.2022</u> for
                      <a href="" class="text-dark">Venom Tech</a></small>
                  </p>-->
              <p class="card-text text-muted">
                UI y experiencia de usuario para atraer y retener al usuario. Procesos de Discovery, wireframes y prototipado.
              </p>
              <!--<a href="#!" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Read more</a>-->
            </div>
          </div>
        </div>
        <!-- end 3 -->
      </div>
    </section>

    <section class="mb-10 text-center" id="section-te-ofrecemos-2" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">

      <div class="row gx-lg-5">
        <!--4. Aplicaciones movíles -->
        <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
          <div class="card rounded-6 h-100" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
            <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="https://global.tiffin.edu/img/article/redes-informaticas-que-son-y-cuales-son-sus-tipos.webp" class="w-100" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title text-jym-menu">Redes e infraestructura</h5>
              <p class="card-text text-muted">
                Conecta tu éxito en línea con nuestra infraestructura de vanguardia. Descubre cómo podemos potenciar tu presencia web hoy mismo.
              </p>
              <!--<a href="#!" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Read more</a>-->
            </div>
          </div>
        </div>
        <!-- end 4 -->

        <!-- 5. Desarrollo web -->
        <div class="col-lg-4 mb-6 mb-lg-0">
          <div class="card rounded-6 h-100" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
            <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQrRmSed_3EWxVb5O7z_A3arvtZHvGaAlmvQ&usqp=CAU" class="w-100" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title text-jym-menu">Pruebas manuales y QA</h5>
              <p class="card-text text-muted">
                Garantiza la excelencia de tu proyecto con nuestro riguroso proceso de pruebas manuales y control de calidad. Confía en nosotros para asegurar la funcionalidad impecable de tu sitio web.
              </p>
              <!--<a href="#!" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Read more</a>-->
            </div>
          </div>
        </div>
        <!-- end 5 -->

        <!-- 6. Rede -->
        <div class="col-lg-4 mb-6 mb-lg-0">
          <div class="card rounded-6 h-100" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="800">
            <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="https://fpgradosuperior.es/img/multiplataforma.png" class="w-100" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title text-jym-menu">Servicio Multiplataforma</h5>
              <p class="card-text text-muted">
                Desarrollamos soluciones versátiles para todas las plataformas. Desde aplicaciones móviles hasta software de escritorio, estamos aquí para llevar tu negocio a cada dispositivo.
              </p>
              <!--<a href="#!" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>Read more</a>-->
            </div>
          </div>
        </div>
        <!-- end 6 -->
      </div>
    </section>
    <!-- //? Section: end te ofrecemos -->

    <!-- //? Section Clientes -->
    <section class="container mb-10" id="section-clients" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">

      <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5" data-mdb-animation-init data-mdb-animation-start="onLoad" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
          <a href="#!" class="text-primary">
            <!--<i class="fas fa-users fa-xl"></i>-->
            <h2 class="fw-bold mb-0 text-center text-jym-menu">
              NUESTROS CLIENTES
            </h2>
          </a>
          <hr class="hr d-none d-xl-flex" style="height: 2px; width: 800px" />
        </div>
      </div>

      <div class="row">

        <div class="col-xl-4 mb-4" data-mdb-animation-init="" data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="300">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="https://www.fellowgroupla.com/wp-content/uploads/2021/09/MINEDU.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                  <div class="ms-3">
                    <p class="fw-bold mb-1">Ministerio de Educación</p>
                    <p class="text-muted mb-0">MINEDU/DIGEIBIRA-DISER</p>
                  </div>
                </div>
                <span class="badge rounded-pill badge-success"><i class="fas fa-check"></i></span>
              </div>
            </div>
            <div class="card-footer border-0 bg-body-tertiary p-2 d-flex justify-content-around">
              <a class="btn btn-link m-0 text-reset" href="https://intranet-diser.minedudiser.com" target="_blank" role="button" data-ripple-color="primary" data-mdb-ripple-init>Visitar<i class="fas fa-angle-right ms-2"></i></a>
              <!--<a class="btn btn-link m-0 text-reset" href="#" role="button" data-ripple-color="primary" data-mdb-ripple-init>Call<i class="fas fa-phone ms-2"></i></a>-->
            </div>
          </div>
        </div>

        <div class="col-xl-4 mb-4" data-mdb-animation-init="" data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="./img/clients/2-domo.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                  <div class="ms-3">
                    <p class="fw-bold mb-1">DOMO Inversiones</p>
                    <p class="text-muted mb-0">Marilyn Tuya</p>
                  </div>
                </div>
                <span class="badge rounded-pill badge-success"><i class="fas fa-check"></i></span>
              </div>
            </div>
            <div class="card-footer border-0 bg-body-tertiary p-2 d-flex justify-content-around">
              <a class="btn btn-link m-0 text-reset" href="https://domoperu.pe" target="_blank" role="button" data-ripple-color="primary" data-mdb-ripple-init>Visitar<i class="fas fa-angle-right ms-2"></i></a>
              <!--<a class="btn btn-link m-0 text-reset" href="#" role="button" data-ripple-color="primary" data-mdb-ripple-init>Call<i class="fas fa-phone ms-2"></i></a>-->
            </div>
          </div>
        </div>

        <div class="col-xl-4 mb-4" data-mdb-animation-init="" data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="500">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="./img/clients/3-safari.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                  <div class="ms-3">
                    <p class="fw-bold mb-1">SAFARI Imports</p>
                    <p class="text-muted mb-0">Carlos Huertas</p>
                  </div>
                </div>
                <span class="badge rounded-pill badge-success"><i class="fas fa-check"></i></span>
              </div>
            </div>
            <div class="card-footer border-0 bg-body-tertiary p-2 d-flex justify-content-around">
              <a class="btn btn-link m-0 text-reset" href="https://safari.com.pe" target="_blank" role="button" data-ripple-color="primary" data-mdb-ripple-init>Visitar<i class="fas fa-angle-right ms-2"></i></a>
              <!--<a class="btn btn-link m-0 text-reset" href="#" role="button" data-ripple-color="primary" data-mdb-ripple-init>Call<i class="fas fa-phone ms-2"></i></a>-->
            </div>
          </div>
        </div>

        <div class="col-xl-4 mb-4" data-mdb-animation-init="" data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="./img/clients/4-imar.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                  <div class="ms-3">
                    <p class="fw-bold mb-1">IMAR Costa Norte</p>
                    <p class="text-muted mb-0">SERV. RIEGO ESTRUCTURADO</p>
                  </div>
                </div>
                <span class="badge rounded-pill badge-success"><i class="fas fa-check"></i></span>
              </div>
            </div>
            <div class="card-footer border-0 bg-body-tertiary p-2 d-flex justify-content-around">
              <a class="btn btn-link m-0 text-reset" href="https:imarcostanorte.com" target="_blank" role="button" data-ripple-color="primary" data-mdb-ripple-init>Visitar<i class="fas fa-angle-right ms-2"></i></a>
              <!--<a class="btn btn-link m-0 text-reset" href="#" role="button" data-ripple-color="primary" data-mdb-ripple-init>Call<i class="fas fa-phone ms-2"></i></a>-->
            </div>
          </div>
        </div>

        <div class="col-xl-4 mb-4" data-mdb-animation-init="" data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="700">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="./img/clients/5-dyt-rentacar.jpeg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                  <div class="ms-3">
                    <p class="fw-bold mb-1">D&T Rent A Car</p>
                    <p class="text-muted mb-0">SERVICIOS DATHISA SAC</p>
                  </div>
                </div>
                <span class="badge rounded-pill badge-success"><i class="fas fa-check"></i></span>
              </div>
            </div>
            <div class="card-footer border-0 bg-body-tertiary p-2 d-flex justify-content-around">
              <a class="btn btn-link m-0 text-reset" href="https://www.serviciosdathisa.com" target="_blank" role="button" data-ripple-color="primary" data-mdb-ripple-init>Visitar<i class="fas fa-angle-right ms-2"></i></a>
              <!--<a class="btn btn-link m-0 text-reset" href="#" role="button" data-ripple-color="primary" data-mdb-ripple-init>Call<i class="fas fa-phone ms-2"></i></a>-->
            </div>
          </div>
        </div>

        <div class="col-xl-4 mb-4" data-mdb-animation-init="" data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="700">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="./img/clients/6-cia-de-sal.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                  <div class="ms-3">
                    <p class="fw-bold mb-1">CIA DE SAL</p>
                    <p class="text-muted mb-0">Empresa del sector industrial</p>
                  </div>
                </div>
                <span class="badge rounded-pill badge-success"><i class="fas fa-check"></i></span>
              </div>
            </div>
            <div class="card-footer border-0 bg-body-tertiary p-2 d-flex justify-content-around">
              <a class="btn btn-link m-0 text-reset" href="https://cia-de-sal.negocio.site" target="_blank" role="button" data-ripple-color="primary" data-mdb-ripple-init>Visitar<i class="fas fa-angle-right ms-2"></i></a>
              <!--<a class="btn btn-link m-0 text-reset" href="#" role="button" data-ripple-color="primary" data-mdb-ripple-init>Call<i class="fas fa-phone ms-2"></i></a>-->
            </div>
          </div>
        </div>

        <div class="col-xl-4 mb-4" data-mdb-animation-init="" data-mdb-animation-start="onScroll" data-mdb-animation="zoom-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="700">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="./img/clients/7-lyceum-group.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                  <div class="ms-3">
                    <p class="fw-bold mb-1">LYCEUM GROUP</p>
                    <p class="text-muted mb-0">Academia Virtual</p>
                  </div>
                </div>
                <span class="badge rounded-pill badge-success"><i class="fas fa-check"></i></span>
              </div>
            </div>
            <div class="card-footer border-0 bg-body-tertiary p-2 d-flex justify-content-around">
              <a class="btn btn-link m-0 text-reset" href="https://lyceum-group.conoce-mas.com" target="_blank" role="button" data-ripple-color="primary" data-mdb-ripple-init>Visitar<i class="fas fa-angle-right ms-2"></i></a>
              <!--<a class="btn btn-link m-0 text-reset" href="#" role="button" data-ripple-color="primary" data-mdb-ripple-init>Call<i class="fas fa-phone ms-2"></i></a>-->
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- //? end section Clientes-->

    <!-- //? Section: Team -->
    <section class="mb-10 text-center" id="section-team" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="300">
      <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5" data-mdb-animation-init data-mdb-animation-start="onLoad" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
          <a href="#!" class="text-primary">
            <!--<i class="fas fa-users fa-xl"></i>-->
            <h2 class="fw-bold mb-0 text-center text-jym-menu">
              NUESTRO EQUIPO
            </h2>
          </a>
          <hr class="hr d-none d-xl-flex" style="height: 2px; width: 900px" />
        </div>
      </div>

      <div class="row gx-lg-5" id="">
        <!-- First column: Manuel Villegas -->
        <div class="col-lg-3 mb-5 mb-lg-0">
          <div data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">
            <div class="rounded-7 p-4 shadow-5-strong border border-warning toast-light"><!-- background-color: hsl(218, 62.2%, 95%) -->
              <!-- Divider here -->
              <hr class="hr hr-blurry" />

              <p class="text-muted mt-4 mb-2 text-jym-menu">
                Gerente General
              </p>
              <p class="h5 mb-4 text-jym-menu-2">Manuel Villegas</p>
              <p class="pb-4 mb-4 text-muted">
              <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5">
                  <a href="#!" target="_blank"><i class="fab fa-facebook fa-xl text-primary"></i></a>
                  <hr class="hr d-none d-xl-flex" style="height: 2px; width: 50px" />

                  <a href="#!" target="_blank"><i class="fab fa-instagram fa-xl text-danger"></i></a>
                  <hr class="hr d-none d-xl-flex" style="height: 2px; width: 50px" />

                  <a href="#!" target="_blank"><i class="fab fa-linkedin-in fa-xl text-info"></i></a>
                </div>
              </div>
              </p>
            </div>
            <img src="./img/team/1-manuel.jpeg" class="w-100 rounded-7 mt-n5 shadow-5-strong mb-xl-5 mb-lg-5" style="max-width: 100px" alt="Avatar" />
          </div>
        </div>
        <!-- First column -->

        <!-- Second column: Junior Velasco -->
        <div class="col-lg-3 mb-5 mb-lg-0">
          <div data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
            <div class="rounded-7 p-4 shadow-5-strong border border-warning toast-light">
              <!-- Divider here -->
              <hr class="hr hr-blurry" />

              <p class="text-muted mt-4 mb-2 text-jym-menu">Ingeniero de Sistemas</p>
              <p class="h5 mb-4 text-jym-menu-2">Junior Velasco</p>
              <p class="pb-4 mb-4">
              <div div class="col-lg-12 d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5">
                  <a href="#!" target="_blank"><i class="fab fa-facebook fa-xl text-primary"></i></a>
                  <hr class="hr d-none d-xl-flex" style="height: 2px; width: 50px" />

                  <a href="#!" target="_blank"><i class="fab fa-instagram fa-xl text-danger"></i></a>
                  <hr class="hr d-none d-xl-flex" style="height: 2px; width: 50px" />

                  <a href="#!" target="_blank"><i class="fab fa-linkedin-in fa-xl text-info"></i></a>
                </div>
              </div>
              </p>
            </div>
            <img src="./img/team/2-junior-2.jpeg" class="w-100 rounded-7 mt-n5 shadow-5-strong" style="max-width: 100px" alt="Avatar" />
          </div>
        </div>
        <!-- Second column -->

        <!-- Third column: Cristhian Quispe -->
        <div class="col-lg-3 mb-5 mb-lg-0">
          <div data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
            <div class="rounded-7 p-4 shadow-5-strong border border-warning toast-light">
              <!-- Divider here -->
              <hr class="hr hr-blurry" />

              <p class="text-muted mt-4 mb-2 text-jym-menu">
                Soporte Técnico
              </p>
              <p class="h5 mb-4 text-primary text-jym-menu-2">Christian Quispe</p>
              <p class="pb-4 mb-4">
              <div div class="col-lg-12 d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5">
                  <a href="#!" target="_blank"><i class="fab fa-facebook fa-xl text-primary"></i></a>
                  <hr class="hr d-none d-xl-flex" style="height: 2px; width: 50px" />

                  <a href="#!" target="_blank"><i class="fab fa-instagram fa-xl text-danger"></i></a>
                  <hr class="hr d-none d-xl-flex" style="height: 2px; width: 50px" />

                  <a href="#!" target="_blank"><i class="fab fa-linkedin-in fa-xl text-info"></i></a>
                </div>
              </div>
              </p>
            </div>
            <img src="./img/team/3-christian.jpeg" class="w-100 rounded-7 mt-n5 shadow-5-strong" style="max-width: 100px" alt="Avatar" />
          </div>
        </div>
        <!-- Third column -->

        <!-- Third column: Peter Rivera -->
        <div class="col-lg-3 mb-5 mb-lg-0">
          <div data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
            <div class="rounded-7 p-4 shadow-5-strong border border-warning toast-light">
              <!-- Divider here -->
              <hr class="hr hr-blurry" />

              <p class="text-muted mt-4 mb-2 text-jym-menu">
                Jefe de Proyectos
              </p>
              <p class="h5 mb-4 text-primary text-jym-menu-2">Peter Rivera</p>
              <p class="pb-4 mb-4">
              <div div class="col-lg-12 d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5">
                  <a href="#!" target="_blank"><i class="fab fa-facebook fa-xl text-primary"></i></a>
                  <hr class="hr d-none d-xl-flex" style="height: 2px; width: 50px" />

                  <a href="#!" target="_blank"><i class="fab fa-instagram fa-xl text-danger"></i></a>
                  <hr class="hr d-none d-xl-flex" style="height: 2px; width: 50px" />

                  <a href="#!" target="_blank"><i class="fab fa-linkedin-in fa-xl text-info"></i></a>
                </div>
              </div>
              </p>
            </div>
            <img src="./img/team/4-peter-0.jpeg" class="w-100 rounded-7 mt-n5 shadow-5-strong" style="max-width: 100px" alt="Avatar" />
          </div>
        </div>
        <!-- Third column -->

        <!-- Third column: Roger Vallejos -->
        <!--<div class="col-lg-3">
          <div data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
            <div class="rounded-7 p-4 shadow-5-strong border border-warning toast-light">
              
              <hr class="hr hr-blurry" />

              <p class="text-muted mt-4 mb-2 text-jym-menu">
                Esp. SI Geográfica (SIG)
              </p>
              <p class="h5 mb-4 text-primary text-jym-menu-2">David Vallejos</p>
              <p class="pb-4 mb-4">
              <div div class="col-lg-12 d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5">
                  <a href="#!" target="_blank"><i class="fab fa-facebook fa-xl text-primary"></i></a>
                  <hr class="hr d-none d-xl-flex" style="height: 2px; width: 50px" />

                  <a href="#!" target="_blank"><i class="fab fa-instagram fa-xl text-danger"></i></a>
                  <hr class="hr d-none d-xl-flex" style="height: 2px; width: 50px" />

                  <a href="#!" target="_blank"><i class="fab fa-linkedin-in fa-xl text-info"></i></a>
                </div>
              </div>
              </p>
            </div>
            <img src="./img/team/5-roger.png" class="w-100 rounded-7 mt-n5 shadow-5-strong" style="max-width: 100px" alt="Avatar" />
          </div>
        </div>-->
        <!-- Third column -->
      </div>
    </section>
    <!-- //? Section: Testimonials -->

    <!-- Section: precios -->
    <!-- * Desbloquear en case de ser necesario -->
    <!--
    <section class="mb-10 text-center" id="" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="300">
      <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5" data-mdb-animation-init data-mdb-animation-start="onLoad" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
          <a href="#!" class="text-primary">
            <h2 class="fw-bold mb-0 text-center text-jym-menu">
              OFERTAS
            </h2>
          </a>
          <hr class="hr d-none d-xl-flex" style="height: 2px; width: 900px" />
        </div>
      </div>

      <div class="row pb-5 ">

        <div class="col-xl-3 col-md-6 mb-4 mb-lg-0">
          <div class="card text-body ">
            <div class="card-header py-3">
              <div>
                <span class="mb-0 text-danger text-decoration-line-through h1">
                  <span class="mdb-price-currency">$</span><span class="mdb-price-reference-bite-value">99-149</span>
                </span>
                <br>
                <span class="mb-0 text-body fw-bolder h4">
                  <span class="mdb-price-currency">$</span><span class="mdb-price-sale-bite-value">69-119</span>
                </span>
              </div>
              <div class="btn-group shadow-0 btn-block">
                <input type="radio" class="btn-check" name="bite" id="unlimited-bite" autocomplete="off" checked="">
                <label class="btn btn-project-switcher disabled btn-xs shadow-0" for="unlimited-bite">WEB SITE INTERACTIVA + <em>IMPLEMENTACIÓN</em></label>
              </div>
            </div>
            <div class="card-body text-start p-0">
              <ol class="list-unstyled mb-0 px-4">
                <li class="my-3">
                  <i class="fas fa-check text-primary me-3"></i>1 Web Site responsive
                </li>
                <li class="my-3">
                  <i class="fas fa-check text-primary me-3"></i>Core Components
                </li>
                <li class="my-3">
                  <i class="fas fa-check text-primary me-3"></i><em class="small">Despliqgue - Producción</em>
                </li>
              </ol>
            </div>
            <div class="card-footer pt-0 pb-4 border-0">
              <a href="#section-contents" type="button" class="mdb-sale-btn btn btn-block btn-secondary">
                <i class="fa-brands fa-whatsapp"></i> Consultar
              </a>
            </div>
          </div>

          <a type="button" class="fw-bold text-secondary mt-2 small ">
            <em>Optional support renewal: <span class="mdb-price-currency">€</span><span class="mdb-price-renewal-bite-value">99-149</span>
              <br>
            </em>
          </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4 mb-lg-0">
          <div class="card text-body ">
            <div class="card-header py-3">
              <div class="projects-1-option d-none mb-1">
                <span class="mb-0 text-danger text-decoration-line-through h1">
                  <span class="mdb-price-currency">$</span><span class="mdb-price-reference-single-value">1,499-3,499</span>
                </span>
                <br>
                <span class="mb-0 text-body fw-bolder h4">
                  <span class="mdb-price-currency">€</span><span class="mdb-price-sale-single-value">89</span>
                </span>
              </div>
              <div class="projects-5-option mb-1">
                <span class="mb-0 text-danger text-decoration-line-through h1">
                  <span class="mdb-price-currency">$</span><span class="mdb-price-reference-multi-value">1,499 - +</span>
                </span>
                <br>
                <span class="mb-0 text-body fw-bolder h4">
                  <span class="mdb-price-currency">€</span><span class="mdb-price-sale-multi-value">1,299 - +</span>
                </span>
              </div>
              <div class="projects-unlimited-option d-none mb-1">
                <span class="mb-0 text-danger text-decoration-line-through h1">
                  <span class="mdb-price-currency">€</span><span class="mdb-price-reference-essential-value">3,499</span>
                </span>
                <br>
                <span class="mb-0 text-body fw-bolder h4">
                  <span class="mdb-price-currency">€</span><span class="mdb-price-sale-essential-value">199</span>
                </span>
              </div>
              <div id="project-number-switcher" class="btn-group shadow-0 btn-block d-flex">
                <input type="radio" class="btn-check" name="options" id="projects-1" autocomplete="off">
                <label class="btn btn-project-switcher btn-xs shadow-0 col-3" for="projects-1"><i class="fas fa-1 fw-bold fa-lg"></i></label>

                <input type="radio" class="btn-check" name="options" id="projects-5" autocomplete="off" checked="">
                <label class="btn btn-project-switcher btn-xs shadow-0 col-6" for="projects-5"><i class="fas fa-check me-1"></i>Multi Use</label>

                <input type="radio" class="btn-check" name="options" id="projects-unlimited" autocomplete="off">
                <label class="btn btn-project-switcher btn-xs shadow-0 col-3" for="projects-unlimited"><i class="fas fa-infinity fw-bold fa-lg"></i></label>
              </div>
            </div>
            <div class="card-body text-start p-0">
              <ol class="list-unstyled mb-0 px-4">
                <li class="my-3 projects-1-option d-none">
                  <i class="fas fa-check text-primary me-3"></i>1 project
                </li>
                <li class="my-3 projects-5-option">
                  <i class="fas fa-check text-primary me-3"></i>5 projects
                </li>
                <li class="my-3 projects-unlimited-option d-none">
                  <i class="fas fa-check text-primary me-3"></i>Unlimited projects
                </li>
                <li class="my-3">
                  <i class="fas fa-check text-primary me-3"></i>Core components
                </li>
                <li class="my-3">
                  <i class="fas fa-check text-primary me-3"></i>All PRO components
                </li>
                <li class="my-3">
                  <i class="fas fa-check text-primary me-3"></i>Unlimited Updates
                </li>
                <li class="my-3 projects-unlimited-option d-none">
                  <i class="fas fa-check text-primary me-3"></i><span class="number-of-design-blocks">436</span> design blocks
                </li>
              </ol>
            </div>

            <div class="card-footer pt-0 pb-4 border-0">
              <button onclick="" type="button" class="mdb-sale-btn btn btn-block btn-secondary projects-1-option d-none mt-1">
                Buy now
              </button>
              <button onclick="" type="button" class="mdb-sale-btn btn btn-block btn-secondary projects-5-option mt-1">
                Buy now
              </button>
              <button onclick="" type="button" class="mdb-sale-btn btn btn-block btn-secondary projects-unlimited-option d-none mt-1">
                Buy now
              </button>
            </div>
          </div>



          <a type="button" class="fw-bold text-secondary mt-2 small projects-1-option d-none">
            <em>Optional support renewal:

              <span class="text-decoration-line-through"><span class="mdb-price-currency">€</span><span class="mdb-price-reference-single-value">2,643</span></span>


              <span class="mdb-price-currency">€</span><span class="mdb-price-renewal-single-value">199</span></em>
          </a>


          <a type="button" class="fw-bold text-secondary mt-2 small projects-5-option">
            <em>Optional support renewal:

              <span class="text-decoration-line-through"><span class="mdb-price-currency">€</span><span class="mdb-price-reference-multi-value">2,643</span></span>


              <span class="mdb-price-currency">€</span><span class="mdb-price-renewal-multi-value">319</span></em>
          </a>


          <a type="button" class="fw-bold text-secondary mt-2 small projects-unlimited-option d-none">
            <em>Optional support renewal:

              <span class="text-decoration-line-through"><span class="mdb-price-currency">€</span><span class="mdb-price-reference-essential-value">3,987</span></span>


              <span class="mdb-price-currency">€</span><span class="mdb-price-renewal-essential-value">479</span></em>
          </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4 mb-lg-0">
          <div class="card text-body " style="outline: 3px #3B71CA solid;">
            <div class="card-header py-3">


              <div>

                <span class="mb-0 text-danger text-decoration-line-through h1">
                  <span class="mdb-price-currency">€</span><span class="mdb-price-reference-advanced-value">8,937</span>
                </span>
                <br>

                <span class="mb-0 text-body fw-bolder h4">
                  <span class="mdb-price-currency">€</span><span class="mdb-price-sale-advanced-value">289</span>
                </span>
              </div>
              <div class="btn-group shadow-0 btn-block">
                <input type="radio" class="btn-check" name="advanced" id="unlimited-advanced" autocomplete="off" checked="">
                <label class="btn btn-project-switcher disabled btn-xs shadow-0" for="unlimited-advanced">Advanced</label>
              </div>
            </div>

            <div class="card-body text-start p-0">

              <ol class="list-unstyled mb-0 px-4">
                <li class="my-3">
                  <i class="fas fa-check text-primary me-3"></i>Unlimited projects
                </li>
                <li class="my-3">
                  <i class="fas fa-check text-primary me-3"></i>Core components
                </li>
                <li class="my-3 ">
                  <i class="fas fa-check text-primary me-3"></i>All PRO components
                </li>

                <li class="my-3">
                  <i class="fas fa-check text-primary me-3"></i>Unlimited Updates
                </li>

                <li class="my-3 ">
                  <i class="fas fa-check text-primary me-3"></i><span class="number-of-design-blocks">436</span> design blocks
                </li>
                <li class="my-3 ">
                  <i class="fas fa-check text-primary me-3"></i><span class="number-of-plugins">25</span> plugins
                </li>
                <li class="my-3 ">
                  <i class="fas fa-check text-primary me-3"></i><span class="number-of-templates">75</span> template pages
                </li>
              </ol>
            </div>

            <div class="card-footer pt-0 pb-4  border-0">
              <button onclick="" type="button" class="mdb-sale-btn btn btn-block btn-primary">
                Buy now
              </button>
            </div>
          </div>



          <a type="button" class="fw-bold text-secondary mt-2 small ">
            <em>Optional support renewal:

              <span class="text-decoration-line-through"><span class="mdb-price-currency">€</span><span class="mdb-price-reference-advanced-value">8,937</span></span>


              <span class="mdb-price-currency">€</span><span class="mdb-price-renewal-advanced-value">649</span></em>
          </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4 mb-lg-0">
          <div class="card text-body ">
            <div class="card-header py-3">


              <div>

                <span class="mb-0 text-danger text-decoration-line-through h1">
                  <span class="mdb-price-currency">€</span><span class="mdb-price-reference-bundle-value">10,884</span>
                </span>
                <br>

                <span class="mb-0 text-body fw-bolder h4">
                  <span class="mdb-price-currency">€</span><span class="mdb-price-sale-bundle-value">999</span>
                </span>
              </div>
              <div class="btn-group shadow-0 btn-block">
                <input type="radio" class="btn-check" name="bundle" id="unlimited-bundle" autocomplete="off" checked="">
                <label class="btn btn-project-switcher disabled btn-xs shadow-0" for="unlimited-bundle">Bundle</label>
              </div>
            </div>

            <div class="card-body text-start p-0">
              <p class="my-3 px-4 fw-bold text-secondary text-center">
                <small>The Bundle contains everything from the ADVANCED tier for all
                  technologies</small>
              </p>

              <ol class="list-unstyled mb-0 px-4">
                <li class="mb-3">
                  <i class="fas fa-check text-primary me-3"></i>
                  Advanced
                  <img src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/bootstrap.webp" height="25px" class="mx-1" alt="bootstrap logo">
                  Standard
                </li>

                <li class="mb-3">
                  <i class="fas fa-check text-primary me-3"></i>
                  Advanced
                  <img src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/angular.webp" height="25px" class="mx-1" alt="angular logo">
                  Angular
                </li>
                <li class="mb-3">
                  <i class="fas fa-check text-primary me-3"></i>
                  Advanced
                  <img src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/react.webp" height="25px" class="mx-1" alt="react logo">
                  React
                </li>
                <li class="mb-3">
                  <i class="fas fa-check text-primary me-3"></i>
                  Advanced
                  <img src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content/en/_mdb5/_assets/img/icons/vue.webp" height="25px" class="mx-1" alt="vue logo">
                  Vue
                </li>
              </ol>
            </div>
            <div class="card-footer pt-0 pb-4  border-0">
              <button onclick="" type="button" class="mdb-sale-btn btn btn-block  btn-secondary">
                Buy now
              </button>
            </div>
          </div>



          <a type="button" class="fw-bold text-secondary mt-2 small ">
            <em>Optional support renewal:

              <span class="text-decoration-line-through"><span class="mdb-price-currency">€</span><span class="mdb-price-reference-bundle-value">10,884</span></span>


              <span class="mdb-price-currency">€</span><span class="mdb-price-renewal-bundle-value">2500</span></em>
          </a>
        </div>

      </div>
    </section>
    -->
    <!-- end section -->

    <!-- //? Section: Contact -->
    <section class="mb-10 text-center" id="section-contact" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">
      <div class="container">

        <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center">
          <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-up" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
            <a href="#!" class="text-primary">
              <!--<i class="fas fa-users fa-xl"></i>-->
              <h2 class="fw-bold mb-0 text-center text-jym-menu">
                CONTÁCTANOS
              </h2>
            </a>
            <hr class="hr d-none d-xl-flex" style="height: 2px; width: 900px" />
          </div>
        </div>

        <div class="row gx-0 align-items-center">
          <!-- First column -->
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div style="
                      background: hsla(0, 0%, 100%, 0.55);
                      backdrop-filter: blur(30px);
                      z-index: 1;
                    " class="card rounded-7 me-lg-n5" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="500">
              <div class="card-body p-lg-5 shadow-5">
                <form name="consulta-frm" id="consulta-form" class="needs-validation">
                  <!-- Name input -->
                  <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="text" name="frm-name" id="frm-name" class="form-control" required/>
                    <label class="form-label" for="frm-name">Nombres y Apelldiso</label>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="email" name="frm-correo" id="frm-correo" class="form-control"  required/>
                    <label class="form-label" for="frm-correo">Correo</label>
                    <div class="invalid-feedback">Please choose a username.</div>
                  </div>

                  <!-- Celular input -->
                  <div class="form-outline mb-4" data-mdb-input-init>
                    <!--<input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" id="frm-celular" class="form-control" required/>-->
                    <input type="tel" pattern="[0-9]{9}" name="frm-celular" id="frm-celular" class="form-control" required/>
                    <label class="form-label" for="frm-celular">Celular (999999999)</label>
                  </div>

                  <!-- Message input -->
                  <div class="form-outline mb-4" data-mdb-input-init>
                    <textarea class="form-control" name="frm-mensaje" id="frm-mensaje" rows="4"  required></textarea>
                    <label class="form-label" for="frm-mensaje">Mensaje</label>
                  </div>

                  <!-- Checkbox -->
                  <!--<div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                        <label class="form-check-label" for="form4Example4">
                          Send me a copy of this message
                        </label>
                      </div>-->

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4" data-mdb-ripple-init>
                    Enviar
                  </button>
                </form>
              </div>
            </div>
          </div>
          <!-- First column -->

          <!-- Second column -->
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="ratio ratio-1x1" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600" data-mdb-animation-offset="200">
              <img src="./img/contacto.jpeg" class="rounded-5" alt="">
              <!--<iframe class="shadow-3-strong rounded-7" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96813.17497894862!2d-73.97484803586903!3d40.68692922859912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2spl!4v1671718528728!5m2!1sen!2spl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
            </div>
          </div>
          <!-- Second column -->
        </div>
      </div>
    </section>
    <!-- //? Section: Contact -->

    <!-- //? BOTON FLOTANTE -->
    <div class="fixed-action-btn text-end" id="fixed1" data-mdb-button-init data-mdb-ripple-init data-mdb-button-initialized="true" style="height: 80px;">

      <a class="btn btn-floating text-white btn-lg btn-success active" data-mdb-button-init data-mdb-ripple-init data-mdb-button-initialized="true" aria-pressed="true">
        <i class="fa-brands fa-whatsapp"></i>
      </a>

      <ul class="list-unstyled" style="margin-bottom: 80px; transform: translateY(368px);">
        <li>
          <a class="btn text-white btn-floating btn-lg" data-mdb-button-init data-mdb-ripple-init style="background-color: #f44336;" data-mdb-button-initialized="true"><i class="fas fa-star"></i></a>
        </li>
        <li>
          <a class="btn text-white btn-floating btn-lg" data-mdb-button-init data-mdb-ripple-init style="background-color: rgb(253, 216, 53);" data-mdb-button-initialized="true" aria-pressed="true"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=51932449843&text=Hola%20JyM%20Asociados!%20" class="btn text-white btn-floating btn-lg" data-mdb-button-init data-mdb-ripple-init style="background-color: rgb(76, 175, 80);"><i class="fa-brands fa-whatsapp"></i></a>
        </li>
        <!--<li>
                <a class="btn text-white btn-floating btn-lg ripple-surface active" data-mdb-button-init="" data-mdb-ripple-init="" style="background-color: rgb(33, 150, 243); min-width: 45px;" data-mdb-button-initialized="true" aria-pressed="true"><i class="fas fa-shopping-cart"></i><div class="ripple-wave active" style="left: -21.4185px; top: -37.4185px; height: 88.8369px; width: 88.8369px; transition-delay: 0s, 250ms; transition-duration: 500ms, 250ms;"></div></a>
            </li>-->
      </ul>
    </div>
    <!-- //? FIN DE BOTON FLOTANTE -->

    <!-- //! Formulario flotante de consulta -->
    <!--<div class="modal-sm floating-form" id="floating-form">
      <div class="close-btn">X</div>
      <h2>Consulta</h2>
      <form id="consulta-form">
        <div class="form-group">
          <label for="apellidos-nombres">Apellidos y Nombres:</label>
          <input type="text" id="apellidos-nombres" name="apellidos-nombres" required>
        </div>
        <div class="form-group">
          <label for="celular">Número de Celular:</label>
          <input type="text" id="celular" name="celular" required>
        </div>
        <div class="form-group">
          <label for="correo">Correo:</label>
          <input type="email" id="correo" name="correo" required>
        </div>
        <div class="form-group">
          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje" name="mensaje" required></textarea>
        </div>
        <button type="submit">Enviar</button>
      </form>
    </div>-->



  </main>
  <!--Main layout-->
  <!--Footer-->
  <footer class="text-center text-white" id="mdb-footer" style="background-color: #262626 !important;">
    <div class="container py-4 border-bottom" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">

      <!-- Facebook -->
      <a class="btn text-white btn-floating m-2" style="background-color: #3b5998;" href="#!" target="_blank" role="button"><i class="fab fa-facebook-f"></i>
      </a>

      <!-- Instagram -->
      <a class="btn text-white btn-floating m-2" style="background-color: #ac2bac;" href="#!" target="_blank" role="button"><i class="fab fa-instagram"></i>
      </a>

      <!-- Linkedin -->
      <a class="btn text-white btn-floating m-2" style="background-color: #0082ca;" href="#!" target="_blank" role="button"><i class="fab fa-linkedin-in"></i>
      </a>
      
      <!-- //! Boton para mostrar formulario flotante -->
      <!--<button id="open-form-btn">Consulta</button>-->
    </div>

    <!-- Section: Links  -->
    <section class="" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="300">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay=400">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <img src="./img/logos/logo-1.png" alt="icono-conoce-mas" style="width: 50%;">
            </h6>
            <p class="text-muted text-jym-menu-2">Soluciones de Software Ágiles e Innovadoras</p>
            <p>
              <a href="javascript:;" class="text-muted text-jym-menu-2"><i class="fas fa-envelope"></i> mvillegasterrones@gmail.com</a>
            </p>
            <p class="">
              <a href="https://api.whatsapp.com/send?phone=51932449843&text=Hola%20JyM%20Asociados!%20" target="_blank" class="text-muted text-jym-menu-2"><i class="fa-brands fa-whatsapp"></i> +51 - 932-449-843</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="500">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-jym-menu">Links</h6>
            <p>
              <a href="./" class="text-muted nav-link"><i class="fa-solid fa-chevron-right text-muted" style="font-size: 11px;color: #61ebba !important;"></i> Home</a>
            </p>
            <p>
              <a href="#section-te-ofrecemos" class="text-muted nav-link"><i class="fa-solid fa-chevron-right text-muted" style="font-size: 11px;color: #61ebba !important;"></i> Servicios</a>
            </p>
            <p>
              <a href="#section-clients" class="text-muted nav-link"><i class="fa-solid fa-chevron-right text-muted" style="font-size: 11px;color: #61ebba !important;"></i> Clientes</a>
            </p>
            <p>
              <a href="#section-team" class="text-muted nav-link"><i class="fa-solid fa-chevron-right text-muted" style="font-size: 11px;color: #61ebba !important;"></i> Nuestro equipo</a>
            </p>
            <p>
              <a href="#section-contact" class="text-muted nav-link"><i class="fa-solid fa-chevron-right text-muted" style="font-size: 11px;color: #61ebba !important;"></i> Contáctanos</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-jym-menu">Horario de atención</h6>
            <ul class="list-group list-group-light">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                  <div class="fw-bold text-muted"><i class="fas fa-calendar-alt text-danger"></i> Lunes - Viernes</div>
                  <!--<div class="text-muted">john.doe@gmail.com</div>-->
                </div>
                <span class="badge rounded-pill badge-success"><i class="fas fa-check-circle"></i> 09:00am - 05:00pm</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                  <div class="fw-bold text-muted"><i class="fas fa-calendar-alt text-danger"></i> Sábados</div>
                  <!--<div class="text-muted">alex.ray@gmail.com</div>-->
                </div>
                <span class="badge rounded-pill badge-success"><i class="fas fa-clock"></i> 09:00am - 01:00pm</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                  <div class="fw-bold text-muted"><i class="fas fa-exclamation-triangle text-warning"></i> Domingos</div>
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
    <div class="text-center copyright p-3 bg-black" data-mdb-animation-init data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="700">
      © <?= date('Y') ?> Copyright: <strong>J&M Asociados</strong><br>
      Diseñado por <a class="text-warning" href="./" target="_blank">J&M Asociados</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
  <!-- MDB -->
</body>
<script type="text/javascript" src="./js/pro.mdb.umd.min.js"></script>
<script>
  /*document.addEventListener("DOMContentLoaded", function() {
    var content = document.getElementById('content');
    var cloud = document.getElementById('cloud');
    content.addEventListener('animationiteration', function() {
      cloud.style.display = 'block'; // Mostrar la nube cuando la animación del contenido reinicia
    })
  })*/

  document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("scroll", function() {
      var nav = document.querySelector("#navbar");
      var sections = document.querySelectorAll("section");
      var scrollPosition = window.scrollY;

      sections.forEach(function(section) {
        if (
          scrollPosition >= (section.offsetTop - nav.offsetHeight) - 180 &&
          scrollPosition <
          (section.offsetTop + section.offsetHeight - nav.offsetHeight) - 30
        ) {
          var currentId = section.getAttribute("id");
          removeAllActiveClasses();
          addActiveClass(currentId);
        }
      });
    });

    function removeAllActiveClasses() {
      document.querySelectorAll("#navbar ul li a").forEach(function(elem) {
        elem.classList.remove("active-nav-item");
      });
    }

    function addActiveClass(id) {
      var selector = `#navbar ul li a[href="#${id}"]`;
      document.querySelector(selector).classList.add("active-nav-item");
    }
  });

  //! Formulario flotante de consulta
  /*document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('consulta-form');
    const floatingForm = document.getElementById('floating-form');
    const openFormBtn = document.getElementById('open-form-btn');
    const closeBtn = document.querySelector('.close-btn');

    // Abrir el formulario flotante
    function openFloatingForm() {
      floatingForm.style.display = 'block';
    }

    // Cerrar el formulario flotante
    function closeFloatingForm() {
      floatingForm.style.display = 'none';
    }

    // Agregar eventos para abrir y cerrar el formulario
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      // Aquí puedes agregar el código para enviar el formulario
      // Por ejemplo, puedes usar fetch() para enviar los datos a un servidor
      console.log('Datos del formulario:', new FormData(form));
      closeFloatingForm();
    });

    openFormBtn.addEventListener('click', openFloatingForm);
    closeBtn.addEventListener('click', closeFloatingForm);
  });*/
</script>
<!--<script type="text/javascript" src="./plugins/js/all.min.js"></script>-->
<!-- Custom scripts -->
<!--<script type="text/javascript" src="./js/script.js"></script>-->

</html>