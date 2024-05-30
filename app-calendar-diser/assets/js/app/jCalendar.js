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
                /*eventDidMount: (info) => {
                            let fe_start = moment(info.event.start).format('DD/MM/YYYY HH:mm');
                            let fe_end = moment(info.event.end).format('DD/MM/YYYY HH:mm');
                            tippy(info.el, {
                                content: `<label>${info.event.extendedProps.areaName}</ñ>
                                <h6>${info.event.title}</h6>
                                <p>Horario: ${fe_start + ' - ' + fe_end}</p>
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
                                theme: "dark",
                                placement: "right",
                            });
                        },*/
                eventDidMount: (info) => {
                    let fe_start = moment(info.event.start).format("DD/MM/YYYY HH:mm");
                    let fe_end = moment(info.event.end).format("DD/MM/YYYY HH:mm");
                    $(info.el).popover({
                        title: `${info.event.title}`,
                        content: `
                            <span class="mt-2"><i class="fa-duotone fa-alarm-clock"></i> ${fe_start} - ${fe_end}</span>
                            <span class="mb-2">${info.event.extendedProps.areaName}</span>
                            <p class="mt-1">${info.event.extendedProps.description}</p>
                            <p class="mb-0">Agenda:</p>
                            <span>${info.event.extendedProps.agenda}</span>
                            <p class="mb-0 mt-2">Regiones:</p>
                            <span>${info.event.extendedProps.regiones}</span>
                            <p class="mb-0 mt-2">UGEL:</p>
                            <span>${info.event.extendedProps.ugel}</span>
                            <p class="mb-0 mt-2">Participantes: (${info.event.extendedProps.nroparticipantes})</p>
                            <span>${info.event.extendedProps.participantes}</span>
                            <p class="mt-2 mb-1"><a href="${info.event.extendedProps.linkReunion}" target="_blank"><i class="fa-duotone fa-arrow-up-right-from-square"></i> Abrir reunión</a></p>
                            <p class="mb-1"><a href="${info.event.extendedProps.linkAsistencia}" target="_blank"><i class="fa-duotone fa-arrow-up-right-from-square"></i> Asistencia</a></p>
                        `,
                        placement: "right",
                        trigger: "click",
                        container: "body",
                        html: true,
                        template:
                            '<div class="popover bg-primary" role="tooltip"><div class="popover-arrow bg-primary"></div><h3 class="popover-header bg-dark"></h3><div class="popover-body bg-dark"></div></div>',
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
                    //$("#modal-event-edit").modal("show");
                },
                eventDrop: (info) => {
                    
                    let fe_ini = moment(info.event.start).format("YYYY-MM-DD HH:mm")
                    let fe_end = moment(info.event.end).format("YYYY-MM-DD HH:mm")
                    let params = {
                        action: 'update-event',
                        id: info.event.id,
                        new_start: fe_ini,
                        new_end: fe_end,
                    }

                    $.post( calendar_url, params, (response) => {
                        if (response) {
                            pg_body().on_load()
                            sw_alert().basic_success("Evento actualizado!")
                        } else {
                            sw_alert().error("No se actualizo el registro")
                        }
                    }).fail(error => {
                        console.log(error);
                        sw_alert().error(error);
                    })

                },
                eventResize: (info) => {
                    
                    let fe_ini = moment(info.event.start).format("YYYY-MM-DD HH:mm")
                    let fe_end = moment(info.event.end).format("YYYY-MM-DD HH:mm")
                    let params = {
                        action: 'update-event',
                        id: info.event.id,
                        new_start: fe_ini,
                        new_end: fe_end,
                    }

                    $.post( calendar_url, params, (response) => {
                        if (response) {
                            pg_body().on_load()
                            sw_alert().basic_success("Evento actualizado!")
                        } else {
                            sw_alert().error("No se actualizo el registro")
                        }
                    }).fail(error => {
                        console.log(error);
                        sw_alert().error(error);
                    })

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
            let data = eval(response);
            let event = [];

            for (let i = 0; i < data.length; i++) {
                event.push({
                    id: data[i].id,
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
                    nroparticipantes: data[i].nroparticipantes,
                    linkReunion: data[i].linkreunion,
                    linkAsistencia: data[i].linkasistencia,
                });
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

        $.post(calendar_url, form, (response) => {
            if (response) {
                pg_body().on_load()
                sw_alert().basic_success(`Registro exitoso!`);
            } else {
                sw_alert().error(
                    `Ocurrió un problema al registrar el evento - ${response}`
                );
            }
        }).fail((xhr, status, error) => {
            console.error(xhr, status, error);
            sw_alert().error(error);
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
                    sys_calendar().send();
                } else if (result.isDenied) {
                    console.log("INST-01: Cancelado");
                }
            });
        } else {
            msje = "Por favor, complete todos los campos del formulario.";
            sw_alert().warning(msje);
        }
    },

    show_recents: () => {
        let params = { action: "get-events-recents" };

        $.post(calendar_url, params, (response) => {
            let data = eval(response);
            let html = "";

            for (let i = 0; i < data.length; i++) {
                let fi = moment(data[i].start).format('DD MMMM YYYY HH:mm')
                let fe = moment(data[i].end).format('DD MMMM YYYY HH:mm')
                let cN = data[i].classname
                let img, cls

                switch (cN) {
                    case 'bg-gradient-primary':
                        img = './assets/img/apps/teams.webp'
                        cls = 'text-primary'
                        break;
                    case 'bg-gradient-info':
                        img = './assets/img/apps/zoom.webp'
                        cls = 'text-info'
                        break;
                    case 'bg-gradient-success':
                        img = './assets/img/apps/meet.svg.png'
                        cls = 'text-success'
                        break;
                    case 'bg-gradient-warning':
                        img = './assets/img/apps/presencial.png'
                        cls = 'text-warning'
                        break;
                    default:
                        break;
                }
                html += `
                <div class="d-flex mt-2">
                    <div>
                        <div class="icon icon-shape bg-danger-soft shadow text-center border-radius-md shadow-none">
                            <img src="${img}" class="icon-app">
                        </div>
                    </div>
                    <div class="ms-3">
                        <div class="numbers">
                            
                            <h6 class="mb-1 text-dark text-sm">
                                <i class="fa-solid fa-circle ${cls}"></i> ${data[i].title} 
                                <a href="${data[i].linkreunion}" target="_blank"> 
                                    <i class="fa-duotone fa-arrow-up-right-from-square"></i> 
                                </a>
                                <a href="${data[i].linkasistencia}" target="_blank">
                                    <i class="fa-duotone fa-link"></i>
                                </a>
                            </h6>
                            <span class="text-sm">${fi + ' - ' + fe} </span>
                        </div>
                    </div>
                </div>
                `
                // * Icono en reemplazo de imagen: <i class="ni ni-money-coins text-lg text-danger text-gradient opacity-10" aria-hidden="true"></i>
                // * Formato de fecha y hora comun: <span class="text-sm">27 March 2021, at 12:30 PM</span>
            }
            $('#events-recents').html(html)
        }).fail((xhr, status, error) => {
            console.error(xhr, status, error);
            sw_alert().error(error);
        });
    },
});
