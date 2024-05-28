// ** Aquí código de las funciones a nivel de APP ** //

if (document.getElementById("choices-multiple-remove-button")) {
    var element = document.getElementById("choices-multiple-remove-button");
    const example = new Choices(element, {
        removeItemButton: true,
    });
}

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

    get_areas: () => {

        let url    = './Controllers/cCalendar.php'
        let params = { action: 'get-areas-list' }

        $.post( url, params, (response) => {

            let data = eval(response)

            $('#modal-event-add #cal_idArea').empty()
            $('#modal-event-add #cal_idArea').append('<option value="">.: Seleccione Área :.</option>')
            for (let i = 0; i < data.length; i++) {
                $('#modal-event-add #cal_idArea').append(`<option value="${data[i].id}">${data[i].area_nombre}</option>`)
            }
            
        }).fail( (xhr, status, error) => {

            console.error(xhr, status)
            sw_alert().error(error)

        })

    }

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

        funciones().get_areas()
        $('#modal-event-add').modal('show')

    },
    eventClick: (info) => {

        $('#modal-event-edit').modal('show')

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
