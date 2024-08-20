//TODO: Losding nte de cargar contenido del website
document.addEventListener("DOMContentLoaded", () => {
    setTimeout( () => {
        document.getElementById('loading-overlay').style.display = 'none'
        document.getElementById('content').style.display = 'block'
    }, 2000)
})


//TODO: boton para exportar tabla html
function exportarExcel(tblName) {
    const tabla = document.getElementById(tblName)
    const wb = XLSX.utils.table_to_book(tabla, {sheet: "Hoja1"})
    XLSX.writeFile(wb, 'reporte_usuarios.xlsx')
}

const navbar = document.getElementById("main-navbar")

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 0) {
        navbar.classList.add("navbar-after-scroll")
    } else {
        navbar.classList.remove("navbar-after-scroll")
    }
})
//TODO: Agregar un listener al evento de scroll
window.addEventListener('scroll', handleScroll);

//TODO: Bloquear clic derecho en toda la página
document.addEventListener('contextmenu', function (e) {
    //! Activar esta seccion para bloquear el clic derecho del mouse
    e.preventDefault()
});

//TODO: Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict';

    //TODO: Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    //TODO: Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach((form) => {
        form.addEventListener('submit', (event) => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
})()


//TODO: Obtener todos los elementos con la clase 'counter'
const counters = document.querySelectorAll('.counter')

//TODO: Array para mantener el seguimiento de los contadores ya activados
const countersActivated = []

//TODO: Función para iniciar los contadores
function startCounters() {
    counters.forEach(counter => {
        if (!countersActivated.includes(counter)) {
            const start = parseInt(counter.getAttribute('data-purecounter-start'))
            const end = parseInt(counter.getAttribute('data-purecounter-end'))
            const duration = parseInt(counter.getAttribute('data-purecounter-duration'))

            let range = end - start;
            let current = start
            const increment = end > start ? 1 : -1
            const stepTime = Math.abs(Math.floor(duration / range))

            const timer = setInterval(() => {
                current += increment;
                counter.textContent = current

                if (current === end) {
                    clearInterval(timer)
                    countersActivated.push(counter) 
                    // Registrar el contador como activado
                }
            }, stepTime)
        }
    })
}

//TODO: Función para verificar si el elemento está en el viewport
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    )
}

//TODO: Función para manejar el evento de scroll
function handleScroll() {
    counters.forEach(counter => {
        if (isElementInViewport(counter)) {
            startCounters()
        }
    })
}

//TODO: Agregar un listener al evento de scroll
window.addEventListener('scroll', handleScroll)
