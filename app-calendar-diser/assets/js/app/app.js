// ** Aquí código de las funciones a nivel de APP ** //

const pg_body = () => ({
    on_load: () => {
        $(".instrumento").addClass("d-none");
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
            if (elementos[i].hasAttribute("required") && elementos[i].value === "") {
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
            alert("Por favor, rellena todos los campos requeridos.");
        }
    },

    validar_form_required: (form_name) => {
        let formValido = true;

        $("#" + form_name + " [required]").each(function () {
            if ($(this).val().trim() === "") {
                formValido = false;
                return formValido;
                //return false
            }
        });

        return formValido;

        /* if (formValido) {
                alert("El formulario está listo para ser enviado.");
            } else {
                alert("Por favor, complete todos los campos requeridos.");
            }*/
    },

    activar_fila: (i) => {
        // ? valor: 1 = Si
        // ? valor: 2 = No
        let valor = $("#sel-opc-" + i).val();
        if (valor === "Si") {
            $("#sel-opc-2-" + i).removeClass("d-none");
            $("#txt-valor-" + i).removeClass("d-none");
            $("#txt-valor-2-" + i).removeClass("d-none");

            $("#sel-opc-2-" + i).attr("required", "required");
            $("#txt-valor-" + i).attr("required", "required");
            $("#txt-valor-2-" + i).attr("required", "required");

            $("#sel-opc-2-" + i).val("0");
            $("#txt-valor-" + i).val("0");
            $("#txt-valor-2-" + i).val("0");
        } else {
            $("#sel-opc-2-" + i).addClass("d-none");
            $("#txt-valor-" + i).addClass("d-none");
            $("#txt-valor-2-" + i).addClass("d-none");

            $("#sel-opc-2-" + i).removeAttr("required");
            $("#txt-valor-" + i).removeAttr("required");
            $("#txt-valor-2-" + i).removeAttr("required");

            $("#txt-valor-2-" + i).attr("readonly", "readonly");
            $("#sel-opc-2-" + i).val("0");
            $("#txt-valor-" + i).val("0");
            $("#txt-valor-2-" + i).val("0");
        }
    },

    activar_casilla_x_fila: (i) => {
        /*
         * valor index() = 0 Nunca
         * valor index() = 1 Diario
         * valor index() = 3 Semanal
         * valor index() = 4 Mensual
         */
        //* let valor  = $('#sel-opc-2-' + i).val()
        let valor = $("#sel-opc-2-" + i)
            .find("option:selected")
            .index();

        if (valor > 1) {
            if (valor > 2) {
                $("#txt-valor-" + i).removeAttr("readonly");
                $("#txt-valor-2-" + i).removeAttr("readonly");
                $("#txt-valor-" + i).val("");
                $("#txt-valor-2-" + i).val("0");
                $("#txt-valor-" + i).focus();
            } else {
                $("#txt-valor-" + i).attr("readonly", "readonly");
                $("#txt-valor-2-" + i).removeAttr("readonly");
                $("#txt-valor-" + i).val("1");
                $("#txt-valor-2-" + i).focus();
            }
        } else {
            $("#txt-valor-" + i).attr("readonly", "readonly");
            $("#txt-valor-2-" + i).attr("readonly", "readonly");
            $("#txt-valor-" + i).val("0");
            $("#txt-valor-2-" + i).val("0");
        }
    },

    activate_for: (item, form, input, n) => {
        let valor = $("#" + form + " #" + item).val();

        if (valor !== "Si") {
            for (let i = 0; i <= n; i++) {
                $("#" + form + " #" + input + i * 1).attr("readonly", true);
                $("#" + form + " #" + input + i * 1).val("0");
            }
        } else {
            for (let i = 0; i <= n; i++) {
                $("#" + form + " #" + input + i * 1).removeAttr("readonly");
                $("#" + form + " #" + input + i * 1).val("");
                $("#" + form + " #" + input + "1").focus();
            }
        }
    },

    activate_other: (item, input) => {
        let valor = $("#" + item).val();

        if (valor === "Otro") {
            $("#" + input).removeAttr("readonly");
            $("#" + input).val("");
            $("#" + input).focus();
        } else {
            $("#" + input).attr("readonly", true);
            $("#" + input).val("-");
        }
    },

    load_form_content: (form_ruta) => {
        $("#view-main").load("./Views/form/" + form_ruta);
    },

    page_reload: () => {
        location.reload();
    },
});

let chk = () => ({
    validar_chk: (section, txtMostrar) => {
        var seleccionados = [];
        $("#" + section + ' input[type="checkbox"]:checked').each(function () {
            seleccionados.push($(this).val());
        });
        $("#" + section + " #" + txtMostrar).val(seleccionados.join(", "));
        console.log(seleccionados);
    },
});

let calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
    contentHeight: "auto",
    initialView: "dayGridMonth",
    headerToolbar: {
        start: "title", // will normally be on the left. if RTL, will be on the right
        center: "dayGridMonth,timeGridWeek,timeGridDay",
        end: "today prev,next", // will normally be on the right. if RTL, will be on the left
    },
    buttonText: {
        today: "Hoy",
        month: "Mes",
        week: "Semana",
        day: "Día",
        //prev: 'Anterior',
        //next: 'Siguiente',
        prevYear: "Año anterior",
    },
    selectable: true,
    editable: true,
    selectHelper: true,
    initialDate: "2021-12-01",
    weekends: false,
    events: [
        {
            title: "Call with Dave",
            start: "2021-11-18",
            end: "2021-11-18",
            className: "bg-gradient-danger",
        },

        {
            title: "Lunch meeting",
            start: "2021-11-21",
            end: "2021-11-22",
            className: "bg-gradient-warning",
        },

        {
            title: "All day conference",
            start: "2021-11-29",
            end: "2021-11-29",
            className: "bg-gradient-success",
        },

        {
            title: "Meeting with Mary",
            start: "2021-12-01",
            end: "2021-12-01",
            className: "bg-gradient-info",
        },

        {
            title: "Winter Hackaton",
            start: "2021-12-03",
            end: "2021-12-03",
            className: "bg-gradient-danger",
        },

        {
            title: "Digital event",
            start: "2021-12-07",
            end: "2021-12-09",
            className: "bg-gradient-warning",
        },

        {
            title: "Marketing event",
            start: "2021-12-10",
            end: "2021-12-10",
            className: "bg-gradient-primary",
        },

        {
            title: "Dinner with Family",
            start: "2021-12-19",
            end: "2021-12-19",
            className: "bg-gradient-danger",
        },

        {
            title: "Black Friday",
            start: "2021-12-23",
            end: "2021-12-23",
            className: "bg-gradient-info",
        },

        {
            title: "Cyber Week",
            start: "2021-12-02",
            end: "2021-12-02",
            className: "bg-gradient-warning",
        },
    ],
    select: (event) => {
        //alert("Please select " + event.start);
        $('#modal-event-add').modal('show')
    },
    eventClick: (info) => {
        //sw_alert().ok('Evento: ' + info.event.title + ', Hora: ' + info.event.start)
        $('#modal-event-edit').modal('show')
        //element.bind("click", () => {
        //});
    },
    eventDrop: () => {
        sw_alert().ok('Se actualiza el registro')
    },
    views: {
        month: {
            titleFormat: {
                month: "long",
                year: "numeric",
            },
        },
        agendaWeek: {
            titleFormat: {
                month: "long",
                year: "numeric",
                day: "numeric",
            },
        },
        agendaDay: {
            titleFormat: {
                month: "short",
                year: "numeric",
                day: "numeric",
            },
        },
    },
});

calendar.render();

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
