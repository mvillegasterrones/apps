//? const calendar_url = "./Controllers/cCalendar.php";

const sys_calendar = () => ({

    validate_fi_fe: (startDate, endDate) => {

        // Obtener la fecha y hora actual
        const currentDate = new Date();

        // Crear objetos Date para las fechas de inicio y fin
        const start = new Date(startDate);
        const end   = new Date(endDate);

        // Evaluar la fecha actual con respecto al rango
        if (currentDate < start) {
            return 1
            //*return 'La fecha y hora actual es anterior al inicio del rango.';
        } else if (currentDate >= start && currentDate <= end) {
            return 2
            //*return 'La fecha y hora actual está dentro del rango.';
        } else {
            return 3
            //*return 'La fecha y hora actual es posterior al fin del rango.';
        }

        // Comparar la fecha y hora actual con el rango
        //return currentDate >= start && currentDate <= end;

    },

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
                    let link_asistencia = `./registro-asistencia.php?id=${info.event.id}&denominacion=${info.event.title}&fi=${fe_start}&fe=${fe_end}`;
                    let link_rep_asistencia = `./reporte-asistencia.php?id=${info.event.id}&denominacion=${info.event.title}&fi=${fe_start}&fe=${fe_end}`;
                    $(info.el).popover({
                        title: `
                            ${info.event.title}
                            <p class="mt-0 mb-0 d-flex">
                                <a href="${info.event.extendedProps.linkReunion}" class="nav-link" target="_blank"><i class="fa-duotone fa-arrow-up-right-from-square"></i></a>&nbsp;&nbsp;
                                <a href="${link_asistencia}" class="nav-link" target="_blank"><i class="fa-duotone fa-link"></i></a>&nbsp;&nbsp;
                                <a href="${link_rep_asistencia}" target="_blank" class="nav-link"><i class="fa-regular fa-user-check"></i></a>
                            </p>`,
                        content: `
                            <span class="mt-2"><i class="fa-solid fa-calendar-days text-warning"></i> ${fe_start} - ${fe_end}</span>
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
                //* initialDate: "2021-12-01",
                weekends: false,
                events: _events,
                select: (event) => {
                    funciones().get_areas();
                    let fi = moment(event.start).format("YYYY-MM-DD 08:15");
                    let fe = moment(event.end).format("YYYY-MM-DD 17:15");
                    $("#modal-event-add #cal_fecha_inicio").val(fi);
                    $("#modal-event-add #cal_fecha_fin").val(fe);
                    $("#modal-event-add").modal("show");
                },
                eventClick: (info) => {
                    //* $("#modal-event-edit").modal("show");
                },
                eventDrop: (info) => {
                    let fe_ini = moment(info.event.start).format("YYYY-MM-DD HH:mm");
                    let fe_end = moment(info.event.end).format("YYYY-MM-DD HH:mm");
                    let params = {
                        action: "update-event",
                        id: info.event.id,
                        new_start: fe_ini,
                        new_end: fe_end,
                    };

                    $.post(calendar_url, params, (response) => {
                        if (response) {
                            pg_body().on_load();
                            sw_alert().basic_success("Evento actualizado!");
                        } else {
                            sw_alert().error("No se actualizo el registro");
                        }
                    }).fail((error) => {
                        console.log(error);
                        sw_alert().error(error);
                    });
                },
                eventResize: (info) => {
                    let fe_ini = moment(info.event.start).format("YYYY-MM-DD HH:mm");
                    let fe_end = moment(info.event.end).format("YYYY-MM-DD HH:mm");
                    let params = {
                        action: "update-event",
                        id: info.event.id,
                        new_start: fe_ini,
                        new_end: fe_end,
                    };

                    $.post(calendar_url, params, (response) => {
                        if (response) {
                            pg_body().on_load();
                            sw_alert().basic_success("Evento actualizado!");
                        } else {
                            sw_alert().error("No se actualizo el registro");
                        }
                    }).fail((error) => {
                        console.log(error);
                        sw_alert().error(error);
                    });
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

        sys_calendar().get_calendar_for_table()
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
                pg_body().on_load();
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
                let fi = moment(data[i].start).format("DD MMMM YYYY HH:mm");
                let fe = moment(data[i].end).format("DD MMMM YYYY HH:mm");
                let cN = data[i].classname;
                let img, cls;
                let link_asistencia = `./registro-asistencia.php?id=${data[i].id}&denominacion=${data[i].title}&fi=${fi}&fe=${fe}`;
                let link_rep_asistencia = `./reporte-asistencia.php?id=${data[i].id}&denominacion=${data[i].title}&fi=${fi}&fe=${fe}`;

                switch (cN) {
                    case "bg-gradient-primary":
                        img = "./assets/img/apps/teams.webp";
                        cls = "text-primary";
                        break;
                    case "bg-gradient-info":
                        img = "./assets/img/apps/zoom.webp";
                        cls = "text-info";
                        break;
                    case "bg-gradient-success":
                        img = "./assets/img/apps/meet.svg.png";
                        cls = "text-success";
                        break;
                    case "bg-gradient-warning":
                        img = "./assets/img/apps/presencial.png";
                        cls = "text-warning";
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
                                <i class="fa-solid fa-check-circle ${cls}"></i> ${data[i].title
                    } 
                                <a href="${data[i].linkreunion
                    }" target="_blank"> 
                                    <i class="fa-duotone fa-arrow-up-right-from-square"></i> 
                                </a>
                                <a href="${link_asistencia}" target="_blank">
                                    <i class="fa-duotone fa-link"></i>
                                </a>
                                <a href="${link_rep_asistencia}" target="_blank">
                                    <i class="fa-regular fa-user-check"></i>
                                </a>
                            </h6>
                            <span class="text-sm">${fi + " - " + fe} </span>
                        </div>
                    </div>
                </div>
                `;
                // * Icono en reemplazo de imagen: <i class="ni ni-money-coins text-lg text-danger text-gradient opacity-10" aria-hidden="true"></i>
                // * Formato de fecha y hora comun: <span class="text-sm">27 March 2021, at 12:30 PM</span>
            }

            $("#events-recents").html(html);

        }).fail((xhr, status, error) => {

            console.error(xhr, status, error);
            sw_alert().error(error);

        });
    },

    get_calendar_for_table: () => {

        let params = { action: 'get-calendar-for-table' }

        $.post(calendar_url, params, (response) => {

            let data = eval(response);
            let html = ''

            for (let i = 0; i < data.length; i++) {

                let fi = data[i].cal_fecha_inicio
                let fe = data[i].cal_fecha_fin
                let cN = data[i].cal_modalidad
                let nT = parseInt(data[i].cal_nro_participantes)
                let nA = parseInt(data[i].TotalRegistrados)
                let porc       = parseFloat((nA/nT)*100).toFixed(2)
                let evalFechas = sys_calendar().validate_fi_fe(fi, fe)
                let nfi = moment(fi).format('DD/MM/YYYY HH:mm')
                let nfe = moment(fe).format('DD/MM/YYYY HH:mm')
                let link_asistencia     = `./registro-asistencia.php?id=${data[i].id}&denominacion=${data[i].cal_nombre_programa}&fi=${fi}&fe=${fe}`;
                let link_rep_asistencia = `./reporte-asistencia.php?id=${data[i].id}&denominacion=${data[i].cal_nombre_programa}&fi=${fi}&fe=${fe}`;
                let en_curso, color_fila = ''

                switch (cN) {
                    case "1. Virtual: Microsoft Teams": // "bg-gradient-primary":
                        img = "./assets/img/apps/teams.webp";
                        cls = "text-primary";
                        break;
                    case "2. Virtual: Zoom": // "bg-gradient-info":
                        img = "./assets/img/apps/zoom.webp";
                        cls = "text-info";
                        break;
                    case "3. Virtual: Google Meet": // "bg-gradient-success":
                        img = "./assets/img/apps/meet.svg.png";
                        cls = "text-success";
                        break;
                    case "4. Presencial": // "bg-gradient-warning":
                        img = "./assets/img/apps/presencial.png";
                        cls = "text-warning";
                        break;
                    default:
                        break;
                }

                switch (evalFechas) {
                    case 1:
                        color_fila = ''
                        en_curso = `
                        <span class="badge badge-dot me-4">
                            <i class="bg-info"></i>
                            <span class="text-xs">[Programada] ${nfi +' - '+ nfe}</span>
                        </span>`
                        break;
                    case 2:
                        color_fila = 'style="color: yellow !important; cursor: pointer;"'
                        en_curso = `
                        <span class="spinner-grow bg-success spinner-grow-sm text-xxs" role="status" aria-hidden="true"></span>
                        <span class="sr-only">Loading...</span><span class="text-xs" ${color_fila}>[En curso] ${nfi +' - '+ nfe}</span>`
                        break;
                    case 3:
                        color_fila = ''
                        en_curso = `
                        <span class="badge badge-dot me-4">
                            <i class="bg-warning"></i>
                            <span class="text-xs" ${color_fila}><b class="text-danger">[Vencida]</b> ${nfi +' - '+ nfe}</span>
                        </span>`
                        break;
                    default:
                        break;
                }

                html += `
                <tr ${color_fila}>
                    <td ${color_fila}>
                        <div class="d-flex px-2">
                            <div>
                                <img src="${img}"
                                    class="avatar avatar-sm rounded-circle me-2">
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0 text-xs" ${color_fila}>${data[i].cal_tipo_programa}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0 text-uppercase truncate-text btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="${data[i].cal_nombre_programa}" data-container="body" data-animation="true" ${color_fila}>${data[i].cal_nombre_programa}</p>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">
                            <a href="${data[i].cal_link_reunion}" target="_blank"> 
                                <i class="fa-duotone fa-arrow-up-right-from-square"></i> 
                            </a>
                            <a href="${link_asistencia}" target="_blank">
                                <i class="fa-duotone fa-link"></i>
                            </a>
                            <a href="${link_rep_asistencia}" target="_blank">
                                <i class="fa-regular fa-user-check"></i>
                            </a>
                        </p>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">${en_curso}</p>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                            <span class="me-2 text-xs">[${nA +' de '+ nT}] - ${porc}%</span>
                            <div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        aria-valuenow="${porc}" aria-valuemin="0" aria-valuemax="100"
                                        style="width: ${porc}%;"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-link text-dark mb-0">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
                `

            }

            $('#tbl-report-calendar tbody').html(html)

        })

    },
});
