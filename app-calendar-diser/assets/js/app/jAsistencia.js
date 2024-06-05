//? const asistencia_url = "./Controllers/cAsistencia.php";
//? const reniec_url = "https://incared.com/api/apirest";

const reniec = () => ({
    search_dni: () => {
        let dni = $("#dni").val();

        if (dni.length === 8) {
            $("#apellidos_nombres").attr("readonly", "readonly");

            $("#apellidos_nombres").val("Buscando...");

            $.ajax({
                url: reniec_url,
                type: "POST",
                dataType: "json",
                data: { action: "getnumero", numero: dni },
                statusCode: {
                    200: function () {
                        let msj = "200 - Pprocesando...";
                        console.log(msj);
                    },
                    404: function () {
                        let msj = "404 - Pagina NO encontrada";
                        sw_alert().ok(msj);
                        console.log(msj);
                    },
                    500: function () {
                        let msj = "500 - SUNAT - Error al conectar con el servidor!";
                        sw_alert().ok(msj);
                        console.log(msj);
                    },
                },
            }).done((response) => {
                let datos = eval(response);
                if (datos.rs === null || datos.rs === undefined) {
                    sw_alert().error(
                        datos.error + " : " + dni + ", Ingresar apellidos y nombres!"
                    );
                    $("#apellidos_nombres").val("");
                    $("#apellidos_nombres").removeAttr("readonly");
                } else {
                    $("#apellidos_nombres").val(datos.rs);
                    $("#apellidos_nombres").attr("readonly", "readonly");
                    $("#correo").focus();
                }
                $("#btnBuscarSunat-2").html(
                    '<i class="fas fa-search" aria-hidden="true"></i>'
                );
            });
        } else {
            sw_alert().warning("DNI debe tener 8 digitos!");
            $("#apellidos_nombres").val("");
            $("#apellidos_nombres").focus();
        }
    },
});

const _colors = () => ({
    get_randomsColor: () => {
        const letters = "0123456789abcdefABCDEF";
        let color = "#";
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    },

    generate_randomColors: (count) => {
        let colors = [];
        for (let i = 0; i < count; i++) {
            colors.push(_colors().get_randomsColor());
        }
        return colors;
    },
});

const asistencia = () => ({
    send: () => {
        let form = $("#form-registro-asistencia").serialize();

        $.post(asistencia_url, form, (response) => {
            if (response) {
                sw_alert().basic_success(`Registro exitoso!`);
                $("#form-registro-asistencia")[0].reset();
            } else {
                sw_alert().error(
                    `Ocurrió un problema al registrar la asistencia - ${response}`
                );
            }
        }).fail((xhr, status, error) => {
            console.error(xhr, status, error);
            sw_alert().error(error);
        });
    },

    save: () => {
        let validar_form = funciones().validar_form_required(
            "form-registro-asistencia"
        );

        if (validar_form) {
            Swal.fire({
                icon: "question",
                title: "¿Guardar formulario?",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "Guardar",
                denyButtonText: `Cancelar`,
            }).then((result) => {
                if (result.isConfirmed) {
                    asistencia().send();
                } else if (result.isDenied) {
                    console.log("ASISTENCIA: Cancelado");
                }
            });
        } else {
            msje = "Por favor, complete todos los campos del formulario.";
            sw_alert().warning(msje);
        }
    },

    get_reporte: (id) => {
        let params = { action: "get-reporte-asistencia", id: id };

        $("#card-table-reporte #cargando").show();

        $.post(asistencia_url, params, (response) => {
            let data = eval(response);
            let html = "";

            for (let i = 0; i < data.length; i++) {
                html += `
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="./assets/img/logos/user.png" class="avatar avatar-sm me-3" alt="avatar image">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xxs">${data[i].seleccione_dre
                    }</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xxs text-secondary mb-0">${data[i].seleccione_ugel
                    }</p>
                    </td>
                    <td>
                        <p class="text-xxs text-secondary mb-0">${data[i].seleccione_cargo
                    }</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-secondary mb-0 text-xxs">${data[i].cod_mod
                    }</p>
                    </td>
                    <td class="align-middle">
                        <span class="text-secondary text-xxs">${data[i].dni + " - " + data[i].apellidos_nombres
                    }</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xxs">${data[i].correo
                    }</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xxs">${data[i].celular
                    }</span>
                    </td>
                </tr>
                `;
            }

            $("#card-table-reporte #tbl-reporte-asistencia tbody").html(html);

            $("#card-table-reporte #cargando").hide();
        }).fail((xhr, status, error) => {
            console.error(xhr, status, error);
            sw_alert().error(error);
        });
    },

    get_reporte_chart_cargo: (id) => {
        $("#card-chart-cargo #cargando").show();

        let ctx2 = document.getElementById("chart-cargo").getContext("2d");

        let params = { action: "get-reporte-chart-cargo", id: id };

        $.post(asistencia_url, params, (response) => {
            let data = eval(response);
            let lbls_nom = [];
            let lbls_nro = [];

            for (let i = 0; i < data.length; i++) {
                lbls_nom.push(data[i].CARGO);
                lbls_nro.push(data[i].TOTAL_CARGO);
            }

            new Chart(ctx2, {
                type: "doughnut",
                data: {
                    labels: lbls_nom,
                    datasets: [
                        {
                            label: "Projects",
                            weight: 9,
                            cutout: 60,
                            tension: 0.9,
                            pointRadius: 2,
                            borderWidth: 2,
                            backgroundColor: _colors().generate_randomColors(
                                lbls_nom.length
                            ) /*[
                                "#2152ff",
                                "#3A416F",
                                "#f53939",
                                "#a8b8d8",
                                "#5e72e4",
                            ],*/,
                            data: lbls_nro,
                            fill: false,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
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

            $("#card-chart-cargo #cargando").hide();
        }).fail((error) => {
            console.error(error);
            sw_alert().error(error);
        });
    },

    get_reporte_chart_region: (id) => {

        $("#card-chart-region #cargando").show();

        let params = { action: "get-reporte-chart-region", id: id };

        $.post(asistencia_url, params, (response) => {
            let data = eval(response);
            let lbls_nom = [];
            let lbls_nro = [];

            for (let i = 0; i < data.length; i++) {
                lbls_nom.push(data[i].DRE);
                lbls_nro.push(data[i].TOTAL_CARGO);
            }

            let ctx = document.getElementById("chart-region").getContext("2d");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: lbls_nom, // ["Creative Tim", "Github", "Bootsnipp", "Dev.to", "Codeinwp"]
                    datasets: [
                        {
                            label: "Participantes",
                            tension: 0.4,
                            borderWidth: 0,
                            borderRadius: 4,
                            borderSkipped: true,
                            backgroundColor: "#3A416F",
                            data: lbls_nro, // [15, 20, 12, 60, 20]
                            maxBarThickness: 6,
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
                        datalabels: {
                            anchor: 'end',
                            align: 'end',
                            color: '#fff',
                            font: {
                                size: 12,
                            },
                            formatter: function (value, context) {
                                return value;
                            }
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
                                beginAtZero: true,
                                font: {
                                    size: 12,
                                    family: "Open Sans",
                                    style: "normal",
                                },
                                color: "#9ca2b7",
                            },
                        },
                        y: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: "#9ca2b7",
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: "#9ca2b7",
                            },
                        },
                    },
                },
                plugins: [ChartDataLabels],
            });

            $("#card-chart-region #cargando").hide();

        }).fail((error) => {

            console.error(error);
            sw_alert().error(error);

        })

    },

    init_reports: (id) => {
        //dre().get_dre_programdas(id);
        //dre().get_ugel_programadas(id);
        //dre().get_cargo_programadas(id);
        dre().get_info_calendar(id);
        asistencia().get_reporte(id);
        asistencia().get_reporte_chart_region(id);
        asistencia().get_reporte_chart_cargo(id);
    },
});
