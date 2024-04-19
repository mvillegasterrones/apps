const navbar = document.getElementById("main-navbar")

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 0) {
        navbar.classList.add("navbar-after-scroll")
    } else {
        navbar.classList.remove("navbar-after-scroll")
    }
})

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('consulta-form');
  
    form.addEventListener('submit', function (event) {
      event.preventDefault(); // Prevenir la acción por defecto del formulario
  
      // Obtener los datos del formulario
      const formData = new FormData(form);
  
      // Crear una instancia de XMLHttpRequest
      const xhr = new XMLHttpRequest();
  
      // Configurar la solicitud
      xhr.open('POST', 'https://minedudiser.com/enviar_correo/envio_correo_3.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      alert('desea enviar me correo?')
      
      // Manejar la respuesta del servidor
      xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            
          // La solicitud fue exitosa
          console.log('Respuesta del servidor:', xhr.responseText);
          alert(xhr.responseText)
          // Aquí puedes manejar la respuesta del servidor como desees
        } else {
          // La solicitud falló
          alert(xhr.status)
          console.error('Error en la solicitud:', xhr.status);
        }
      };
  
      // Enviar la solicitud con los datos del formulario
      xhr.send(new URLSearchParams(formData));
    });
  });