const admin_reports = () => ({

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
                    html += `<tr>
                                <td class="text-center">
                                    <i class="fa-regular fa-trash-can cursor-pointer text-danger icon-trash" onclick="instrumento_01().delete_int_01(${data[i].idInstrumento
                        },${i + 1})"></i>
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

})