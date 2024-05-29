const calendar_url = './Controllers/cCalendar.php'

const calendar = () => ({

    init_start: (_events) => {

        let calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
            contentHeight: "auto",
            locale: 'es',
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
            //initialDate: "2021-12-01",
            weekends: false,
            events: _events,
            select: (event) => {
                funciones().get_areas();
                let fi = moment(event.start).format("YYYY-MM-DD HH:mm");
                $("#modal-event-add #cal_fecha_inicio").val(fi);
                $("#modal-event-add #cal_fecha_fin").val(fi);
                $("#modal-event-add").modal("show");
            },
            eventClick: (info) => {
                $("#modal-event-edit").modal("show");
            },
            eventDrop: () => {
                sw_alert().ok("Se actualiza el registro");
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

    },

    get_events: () => {

        let params = { action: 'get-events' }
        
        $.post( calendar_url, params, (response) => {
            
            calendar().init_start(response)

        }).fail( (xhr, status, error) => {
            
            console.error(xhr, status, error);
            sw_alert().error(error);

        })

    }

})