const calendar_url = "./Controllers/cCalendar.php";

const sys_calendar = () => ({

    init_start: (_events) => {
        let calendar = new FullCalendar.Calendar(
            document.getElementById("calendar"),
            {
                contentHeight: "auto",
                locale: "es",
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
                eventDidMount: (info) => {
                    tippy(info.el, {
                        content: `<label>${info.event.extendedProps.areaName}</ñ>
                        <h6>${info.event.title}</h6>
                        <p>${info.event.start + ' al ' + info.event.end}</p>
                        <p>${info.event.extendedProps.description}</p>
                        <p class="mb-0">Agenda:</p>
                        <label>${info.event.extendedProps.agenda}</label>
                        <p class="mb-0">Regiones:</p>
                        <label>${info.event.extendedProps.regiones}</label>
                        <p class="mb-0">UGEL:</p>
                        <label>${info.event.extendedProps.ugel}</label>
                        <p class="mb-0">Participantes: (${info.event.extendedProps.nroparticipantes})</p>
                        <label>${info.event.extendedProps.participantes}</label>`,
                        allowHTML: true,
                        theme: "light",
                    });
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
            }
        );

        calendar.render();
    },

    get_events: () => {
        let params = { action: "get-events" };

        $.post(calendar_url, params, (response) => {

            let data  = eval(response)
            let event = []

            for (let i = 0; i < data.length; i++) {
                
                event.push({
                    title: data[i].title,
                    start: data[i].start,
                    end: data[i].end,
                    className: data[i].classname,
                    description: data[i].description,
                    areaName: data[i].areaName,
                    agenda: data[i].agenda,
                    regiones: data[i].regiones,
                    ugel: data[i].ugel,
                    participantes: data[i].participantes,
                    nroparticipantes: data[i].nroparticipantes
                })
            }

            console.log(event);
            sys_calendar().init_start(event);

        }).fail((xhr, status, error) => {
            
            console.error(xhr, status, error);
            sw_alert().error(error);

        });
    },

    send: () => {
        let form = $("#form-event-add").serialize();

        $.post( calendar_url, form, (response) => {

            if (response) {

                sw_alert().basic_success(`Registro exitoso!`)

            } else {
                
                sw_alert().error(
                    `Ocurrió un problema al registrar el evento - ${response}`
                )

            }

        }).fail((xhr, status, error) => {

            console.error(xhr, status, error)
            sw_alert().error(error)

        });
    },

    save: () => {

        let validar_form = funciones().validar_form_required("form-event-add");

        if (validar_form) {
            Swal.fire({
                icon: "question",
                title: "¿Guardar evento?",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "Guardar",
                denyButtonText: `Cancelar`,
            }).then((result) => {
                if (result.isConfirmed) {
                    sys_calendar().send()
                    sys_calendar().get_events()
                } else if (result.isDenied) {
                    console.log("INST-01: Cancelado");
                }
            });
        } else {
            msje = "Por favor, complete todos los campos del formulario.";
            sw_alert().warning(msje);
        }
    },

});
