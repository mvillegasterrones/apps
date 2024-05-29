// ** Aquí código de las funciones a nivel de APP ** //
if (document.querySelector(".datetimepicker")) {
    flatpickr(".datetimepicker", {
        allowInput: true,
    });
}

let chk = () => ({
    validar_chk: (section, txtMostrar) => {
        var seleccionados = [];
        $("#" + section + ' input[type="checkbox"]:checked').each(function () {
            seleccionados.push($(this).val());
        });
        $("#" + section + " #" + txtMostrar).val(seleccionados.join(",\n"));
        console.log(seleccionados);
    },
});

const pg_body = () => ({
    on_load: () => {
        //$(".instrumento").addClass("d-none");
        sys_calendar().get_events()
    },

    on_show_hide: (hd, shw) => {
        $("#" + hd)
            .removeClass("d-block")
            .addClass("d-none");
        $("#" + shw)
            .removeClass("d-none")
            .addClass("d-block");
    },
});

const funciones = () => ({

    validate_input_required: (form) => {

        // Obtener el formulario
        var formulario = document.getElementById(form);
        // Obtener todos los elementos del formulario
        var elementos = formulario.elements;
        var validacionPasada = true;

        // Iterar a través de los elementos y verificar los campos requeridos
        for (var i = 0; i < elementos.length; i++) {
            if (elementos[i].hasAttribute('required') && elementos[i].value === '') {
                validacionPasada = false;
                elementos[i].style.border = "2px solid red"; // Marcar el campo vacío
            } else {
                elementos[i].style.border = ""; // Restablecer el borde si el campo está lleno
            }
        }

        // Si la validación pasa, enviar el formulario manualmente
        if (validacionPasada) {
            formulario.submit();
        } else {
            alert('Por favor, rellena todos los campos requeridos.');
        }

    },

    validar_form_required: (form_name) => {
        let formValido = true;

        $("#"+ form_name +" [required]").each(function() {
            if ($(this).val().trim() === "") {
                formValido = false
                return formValido
                //return false
            }
        })

        return formValido

    },

    get_areas: () => {
        let url = "./Controllers/cCalendar.php";
        let params = { action: "get-areas-list" };

        $.post(url, params, (response) => {
            let data = eval(response);

            $("#modal-event-add #cal_idArea").empty();
            $("#modal-event-add #cal_idArea").append(
                '<option value="">.: Seleccione Área :.</option>'
            );
            for (let i = 0; i < data.length; i++) {
                $("#modal-event-add #cal_idArea").append(
                    `<option value="${data[i].id}">${data[i].area_nombre}</option>`
                );
            }
        }).fail((xhr, status, error) => {
            console.error(xhr, status);
            sw_alert().error(error);
        });
    },
});

var ctx1 = document.getElementById("chart-line-1").getContext("2d");

var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, "rgba(255,255,255,0.3)");
gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
gradientStroke1.addColorStop(0, "rgba(203,12,159,0)"); //purple colors

new Chart(ctx1, {
    type: "line",
    data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [
            {
                label: "Visitors",
                tension: 0.5,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#fff",
                borderWidth: 2,
                backgroundColor: gradientStroke1,
                data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
                maxBarThickness: 6,
                fill: true,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
            },
        },
        interaction: {
            intersect: false,
            mode: "index",
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                },
                ticks: {
                    display: false,
                },
            },
            x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                },
                ticks: {
                    display: false,
                },
            },
        },
    },
});
