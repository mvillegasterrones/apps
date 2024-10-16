<!--<script src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
-->
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>

<script src="./assets/js/plugins/typedjs.js"></script>
<script src="./assets/js/plugins/choices.min.js"></script>
<script src="./assets/js/plugins/flatpickr.min.js"></script>
<script src="./assets/js/plugins/parallax.min.js"></script>

<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

<script src="./assets/js/plugins/anime.min.js" type="text/javascript"></script>

<!--//* <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>-->

<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="./assets/js/material-kit-pro.min.js?v=3.0.4" type="text/javascript"></script>

<script src="./assets/js/plugins/glide.min.js"></script>

<!-- Glider.js JS -->
<!--//*<script src="https://cdn.jsdelivr.net/npm/glider-js/glider.min.js"></script></script>-->
<script>
  /*AOS.init({
    duration: 500,
    once: false,
  });*/
  AOS.init()

  const navbar = document.getElementById("main-navbar")

  window.addEventListener('scroll', function () {
    if (window.pageYOffset > 0) {
      navbar.classList.remove("navbar-transparent")
      navbar.classList.remove("text-white")
      navbar.classList.add("blur")
      navbar.classList.add("text-color-grey")
    } else {
      navbar.classList.remove("text-color-grey")
      navbar.classList.remove("blur")
      navbar.classList.add("navbar-transparent")
      navbar.classList.add("text-white")
    }
  })

  if (document.getElementsByClassName('glide')) {
    const glider = new Glide('.gliderrr', {
      autoplay: 1500,
      type: 'carousel',
      perView: 3,
      breakpoints: {
        800: {
          perView: 2
        }
      }
    })
    const tiltableElement = '.glide__container'
    glider.mount()
  }


  // Seleccionar todos los cuadrantes
  const quadrants = document.querySelectorAll('.quadrant');

  // Añadir evento de clic a cada cuadrante
  quadrants.forEach(quadrant => {
    quadrant.addEventListener('click', function () {
      // Remover la clase 'active' de todos los cuadrantes
      quadrants.forEach(q => q.classList.remove('active'));

      // Añadir la clase 'active' al cuadrante actual
      this.classList.add('active');

      // Obtener el ID del texto correspondiente al cuadrante
      const targetTextId = this.getAttribute('data-target');

      // Remover la clase 'text-dark' de todos los textos
      document.querySelectorAll('.text-sections div').forEach(text => {
        text.classList.remove('text-dark');
        text.classList.add('text-muted');
      });

      // Añadir la clase 'text-dark' al texto correspondiente
      document.getElementById(targetTextId).classList.add('text-dark');
    });
  });

  

  /*$(document).on('click', '.btn-ripple', function (e) {
    var $ripple = $('<span class="ripple"></span>');
    $(this).append($ripple);
    var x = e.pageX - $(this).offset().left - $ripple.width() / 2;
    var y = e.pageY - $(this).offset().top - $ripple.height() / 2;
    $ripple.css({ top: y + 'px', left: x + 'px' }).addClass('ripple-effect');
  });*/

  /*$('.progress-bar').animate({
    width: '70%'
  }, 1000);
 
  $('#myModal').on('show.bs.modal', function () {
    $(this).find('.modal-content').addClass('animated fadeIn');
  });*/

</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
  integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
  data-cf-beacon='{"rayId":"8afab8831cbbc848","serverTiming":{"name":{"cfL4":true}},"version":"2024.7.0","token":"1b7cbb72744b40c580f8633c6b62637e"}'
  crossorigin="anonymous"></script>