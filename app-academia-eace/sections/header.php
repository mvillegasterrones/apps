<header class="mb-8">

    <!-- Navbar -->
    <?php include './nav-bar.php'?>

    <!-- Background image -->
    <div class="bg-image vh-100" style="margin-top: -58.59px; background-image: url('./img/banner-1.png');">

        <!-- Mask -->
        <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.4)">

            <!-- Container -->
            <div class="container d-flex justify-content-center align-items-center h-100">

                <!-- Call to action -->
                <div class="text-white text-center">
                    <h1 class="mb-3 text-purple">Planes Nutricionales</h1>
                    <!--<h5 class="mb-4 text-warning-emphasis text-bg-dark">Conocer mas</h5>-->
                    <a class="btn btn-primary btn-rounded btn-lg m-2"
                       data-mdb-ripple-init
                       data-ripple-color="primary"
                       href="#" role="button">Conocer mase <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>

            </div>

        </div>

    </div>

    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade w-100" data-mdb-ride="carousel"
         data-mdb-carousel-init>
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp" class="d-block w-100"
                     alt="Sunset Over the City" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100"
                     alt="Canyon at Nigh" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100"
                     alt="Cliff Above a Stormy Sea" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
                data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->

</header>