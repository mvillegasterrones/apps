const admin_reports = () => ({

    refresh: () => {

        admin_reports().get_chart_total_reports()
        admin_reports().get_donust_total_instrumentos()
        sw_alert().basic_success('Actualizado!')

    },

    get_report_inst_01_admin: () => {

        let params = { action: 'get-reporte-inst-01-admin' }

        $.post(questionario_url, params, (response) => {

            let data = eval(response)
            let html = ''

            $("#modal-form-inst-01-admin #btn-cargando").show();
            if (response !== "[]") {
                for (let i = 0; i < data.length; i++) {
                    let ubicacion = data[i].d_dpto + " / " + data[i].d_prov + " / " + data[i].d_dist;
                    let estudiante = data[i].txt_est_apellidos + ", " + data[i].txt_est_nombres;
                    let icon_delete = `<i class="fa-regular fa-trash-can cursor-pointer text-danger icon-trash" onclick="instrumento_01().delete_int_01(${data[i].idInstrumento},${i + 1})"></i>`

                    html += `<tr>
                                <td class="text-center">
                                    <i class="fas fa-check-circle text-success"></i>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${i + 1
                        }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${data[i].txt_mes_reporte
                        }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${data[i].txt_fecha_aplicacion
                        }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${data[i].cod_mod
                        }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${data[i].nombre_ie
                        }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${ubicacion}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${data[i].cen_pob
                        }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${data[i].d_dreugel
                        }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${estudiante}</p>
                                </td>
                            </tr>`;

                }
            } else {
                html += `<tr>
                            <td colspan="10" class="text-danger text-center text-uppercase">
                                <p class="text-xs font-weight-bold mb-0"><i class="fa-regular fa-triangle-exclamation"></i> No se han encontrado registros</p>
                            </td>
                        </tr>`;
            }
            $("#tbl-reporte-inst-01 tbody").html(html);
            $("#modal-form-inst-01-admin #btn-cargando").hide();

        }).fail(error => {
            console.log(error)
            sw_alert().error(error)
        })

    },

    get_chart_total_reports: () => {

        let params = { action: 'get-chart-total-reports' }
        let labels = []
        let data01 = []
        let data02 = []
        let data03 = []
        let data04 = []
        let data05 = []

        $.post(admin_url, params, (response) => {

            let data = eval(response)

            for (let i = 0; i < data.length; i++) {

                labels.push(data[i].region)
                data01.push(data[i].i01)
                data02.push(data[i].i02)
                data03.push(data[i].i03)
                data04.push(data[i].e01)
                data05.push(data[i].e02)

            }

            create_chart_bar_total_region(labels, data01, data02, data03, data04, data05)

        }).fail(error => {
            console.log(error)
            sw_alert().error(error)
        })
    },

    get_donust_total_instrumentos: () => {

        let params = { action: 'get-admin-totales-instrumentos' }

        $.post( admin_url, params, (response) => {

            let data   = eval(response)
            let labels = []
            let data1  = []
            let i01, i02, i03, e01, e02

            for (let i = 0; i < data.length; i++) {
                
                data1.push(
                    data[i].tI01,
                    data[i].tI02,
                    data[i].tI03,
                    data[i].tE01,
                    data[i].tE02
                )

                i01 = data[i].tI01
                i02 = data[i].tI02
                i03 = data[i].tI03
                e01 = data[i].tE01
                e02 = data[i].tE02

            }

            $('#i01').html(i01)
            $('#i02').html(i02)
            $('#i03').html(i03)
            $('#e01').html(e01)
            $('#e02').html(e02)

            create_chart_donuts_total_instrumentos(data1)

        }).fail( error => {
            console.log(error)
            sw_alert().error(error)
        })

    },

})

function create_chart_bar_total_region(lbls, data01, data02, data03, data04, data05) {
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
    gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
    gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
    gradientStroke1.addColorStop(0, "rgba(203,12,159,0)"); //purple colors

    var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);
    gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
    gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
    gradientStroke2.addColorStop(0, "rgba(20,23,39,0)"); //purple colors

    new Chart(ctx1, {
        type: "line",
        data: {
            labels: lbls,
            datasets: [
                {
                    label: "INST-01",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#5e72e4",
                    borderColor: "#5e72e4",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    data: data01, // [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6,
                },
                {
                    label: "INST-02",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#3A416F",
                    borderColor: "#3A416F",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    data: data02, // [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    maxBarThickness: 6,
                },
                {
                    label: "INST-03",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#17c1e8",
                    borderColor: "#17c1e8",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    data: data03, // [40, 80, 70, 90, 30, 90, 140, 130, 200],
                    maxBarThickness: 6,
                },
                {
                    label: "ENC-01",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#525f7f",
                    borderColor: "#525f7f",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    data: data04, // [40, 80, 70, 90, 30, 90, 140, 130, 200],
                    maxBarThickness: 6,
                },
                {
                    label: "ENC-02",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#adb5bd",
                    borderColor: "#adb5bd",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    data: data05, // [40, 80, 70, 90, 30, 90, 140, 130, 200],
                    maxBarThickness: 6,
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
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                        borderDash: [5, 5],
                    },
                    ticks: {
                        display: true,
                        color: "#9ca2b7",
                        padding: 10,
                    },
                },
            },
        },
    });
}

function create_chart_donuts_total_instrumentos(data1) {
    
    var ctx2 = document.getElementById("chart-doughnut").getContext("2d");

    new Chart(ctx2, {
        type: "doughnut",
        data: {
          labels: ["INST-01", "INST-02", "INST-03", "ENC-01", "ENC-02"],
          datasets: [
            {
              label: "Projects",
              weight: 9,
              cutout: 60,
              tension: 0.9,
              pointRadius: 2,
              borderWidth: 2,
              backgroundColor: [
                /*"#2152ff",
                "#3A416F",
                "#f53939",
                "#a8b8d8",
                "#5e72e4",*/
                "#5e72e4",
                "#3A416",
                "#17c1e8",
                "#525f7f",
                "#adb5bd",
              ],
              data: data1, // [15, 20, 12, 60, 20],
              fill: false,
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

}