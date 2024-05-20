const questionario = () => ({
  get_preguntas_inst: () => {
    let params = { action: "get-preguntas-inst-01", instrumento: "INST-01" };
    $.post(questionario_url, params, (response) => {
      let data = eval(response);
      let html = "";
      let item = 0;

      $("#form-inst-01 #btn-cargando").show();
      for (let i = 0; i < data.length; i++) {
        if (data[i].id >= 6) {
          item++;
          let detalle =
            data[i].detalle === "Otro"
              ? `<input class="multisteps-form__input form-control form-control-sm" type="text" placeholder="Otro" name="txt-otro-${item}" id="txt-otro-${item}" required />`
              : data[i].detalle;

          html += `<tr>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${item}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${detalle}</p>
                                </td>
                                <td>
                                    <select class="multisteps-form__input form-control form-control-sm w-100" id="sel-opc-${item}" name="sel-opc-${item}" onchange="funciones().activar_fila(${item})" required>
                                        <option value="" selected disabled>.: Seleccione (Si/No) :.</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="multisteps-form__input form-control form-control-sm w-100 d-none" id="sel-opc-2-${item}" name="sel-opc-2-${item}" onchange="funciones().activar_casilla_x_fila(${item})" required>
                                        <option value="0" selected>.: Seleccione opción :.</option>
                                        <option value="Nunca">Nunca</option>
                                        <option value="Diario">Diario</option>
                                        <option value="Semanal">Semanal</option>
                                        <option value="Mensual">Mensual</option>
                                    </select>
                                </td>
                                <td>
                                    <input class="multisteps-form__input form-control form-control-sm w-75 d-none" type="number" value="0" placeholder="0" name="txt-valor-${item}" id="txt-valor-${item}" readonly required />
                                </td>
                                <td>
                                    <input class="multisteps-form__input form-control form-control-sm w-75 d-none" type="number" value="0" placeholder="0" name="txt-valor-2-${item}" id="txt-valor-2-${item}" readonly required />
                                </td>
                            </tr>`;
        }
      }
      $("#tbl-sec-2-inst-01 tbody").html(html);
      $("#form-inst-01 #btn-cargando").hide();
    }).fail((error) => {
      sw_alert().error(error);
    });
  },
});

const instrumento_01 = () => ({
  send_data: () => {
    let form = $("#form-inst-01").serialize();

    $.post(questionario_url, form, (response) => {
      if (response) {
        sw_alert().ok_reload(`Registro exitoso!`);
      } else {
        sw_alert().error(
          `Ocurrió un problema al registrar el INST-01 - ${response}`
        );
      }
    }).fail((xhr, status, error) => {
      console.error(xhr, status, error);
      sw_alert().error(error);
    });
  },

  save: () => {
    let validar_form = funciones().validar_form_required("form-inst-01");

    if (validar_form) {
      Swal.fire({
        icon: "question",
        title: "¿Guardar instrumento 01?",
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: "Guardar",
        denyButtonText: `Cancelar`,
      }).then((result) => {
        if (result.isConfirmed) {
          //* Swal.fire("Saved!", "", "success");
          instrumento_01().send_data();
        } else if (result.isDenied) {
          //* Swal.fire("Changes are not saved", "", "info")
          console.log("INST-01: Cancelado");
        }
      });
      // ! msje = 'El formulario está listo para ser enviado. ' + validar_form
      // ! sw_alert().ok(msje)
    } else {
      msje = "Por favor, complete todos los campos del formulario.";
      sw_alert().warning(msje);
    }
  },

  get_reporte_inst_01: () => {
    let params = { action: "get-reporte-inst-01" };

    $.post(questionario_url, params, (response) => {
      console.log(response);
      let data = eval(response);
      let html = "";

      $("#modal-form-inst-01 #btn-cargando").show();
      if (response !== "[]") {
        for (let i = 0; i < data.length; i++) {
          let ubicacion =
            data[i].d_dpto + " / " + data[i].d_prov + " / " + data[i].d_dist;
          let estudiante =
            data[i].txt_est_apellidos + ", " + data[i].txt_est_nombres;
          html += `<tr>
                                <td class="text-center">
                                    <i class="fa-regular fa-trash-can cursor-pointer text-danger icon-trash" onclick="instrumento_01().delete_int_01(${
                                      data[i].idInstrumento
                                    },${i + 1})"></i>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      i + 1
                                    }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].txt_mes_reporte
                                    }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].txt_fecha_aplicacion
                                    }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].cod_mod
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].nombre_ie
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${ubicacion}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].cen_pob
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].d_dreugel
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${estudiante}</p>
                                </td>
                            </tr>`;

          /*
                    <i class="fa-solid fa-trash-can cursor-pointer text-danger"></i>
                    <i class="fa-regular fa-trash-can cursor-pointer text-danger"></i>
                    <i class="fa-light fa-trash-can cursor-pointer text-danger"></i>
                    <i class="fa-duotone fa-trash-can cursor-pointer text-danger"></i>
                    */
        }
      } else {
        html += `<tr>
                            <td colspan="10" class="text-danger text-center text-uppercase">
                                <p class="text-xs font-weight-bold mb-0"><i class="fa-regular fa-triangle-exclamation"></i> No se han encontrado registros</p>
                            </td>
                        </tr>`;
      }
      $("#tbl-reporte-inst-01 tbody").html(html);
      $("#modal-form-inst-01 #btn-cargando").hide();
    }).fail((xhr, status, error) => {
      sw_alert().error(error);
    });
  },

  delete_int_01: (id, nro) => {
    Swal.fire({
      icon: "question",
      title: "¿Eliminar Registro Nro. " + nro + "?",
      showDenyButton: true,
      showCancelButton: false,
      confirmButtonText: "Si",
      denyButtonText: `No`,
    }).then((result) => {
      if (result.isConfirmed) {
        let params = { action: "delete-int-01", id: id };

        $.post(questionario_url, params, (response) => {
          if (response) {
            sw_alert().basic_success("Eliminado!");
            instrumento_01().get_reporte_inst_01();
          }
        }).fail((xhr, status, error) => {
          sw_alert().error(error);
        });
      } else if (result.isDenied) {
        console.log("No se elimino el registro");
      }
    });
  },
});

const instrumento_02 = () => ({
  send: () => {
    let form = $("#form-inst-02").serialize();

    $.post(questionario_url, form, (response) => {
      if (response) {
        sw_alert().ok_reload(`Registrado exitoso!`);
      } else {
        sw_alert().error(
          `Ocurrió un problema al registrar el INST-02 - ${response}`
        );
      }
    }).fail((xhr, status, error) => {
      console.error(xhr, status, error);
      sw_alert().error(error);
    });
  },

  save: () => {
    let validar_form = funciones().validar_form_required("form-inst-02");

    if (validar_form) {
      Swal.fire({
        icon: "question",
        title: "¿Guardar instrumento 02?",
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: "Guardar",
        denyButtonText: `Cancelar`,
      }).then((result) => {
        if (result.isConfirmed) {
          instrumento_02().send();
        } else if (result.isDenied) {
          console.log("INST-02: Cancelado");
        }
      });
    } else {
      msje = "Por favor, complete todos los campos del formulario.";
      sw_alert().warning(msje);
    }
  },

  get_reporte: () => {
    let params = { action: "get-reporte-inst-02" };

    $.post(questionario_url, params, (response) => {
      let data = eval(response);
      let html = "";

      $("#modal-form-inst-02 #btn-cargando").show();

      if (response !== "[]") {
        for (let i = 0; i < data.length; i++) {
          let ubicacion =
            data[i].d_dpto + " / " + data[i].d_prov + " / " + data[i].d_dist;

          html += `<tr>
                                <td class="text-center">
                                    <i class="fa-regular fa-trash-can cursor-pointer text-danger icon-trash" onclick="instrumento_02().delete(${
                                      data[i].idInstrumento
                                    },${i + 1})"></i>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      i + 1
                                    }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].txt_mes_reporte
                                    }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].txt_fecha_aplicacion
                                    }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].cod_mod
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].nombre_ie
                                    }</p>
                                </td>
                                <td align=center>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].txt_grado
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${ubicacion}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].cen_pob
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].d_dreugel
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].txt_datos_aplicador
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].txt_cargo_aplicador
                                    }</p>
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
      $("#tbl-reporte-inst-02 tbody").html(html);
      $("#modal-form-inst-02 #btn-cargando").hide();
    }).fail((xhr, status, error) => {
      console.error(xhr, status, error);
      sw_alert().error(error);
    });
  },

  delete: (id, item) => {
    Swal.fire({
      icon: "question",
      title: "¿Eliminar Registro Nro. " + item + "?",
      showDenyButton: true,
      showCancelButton: false,
      confirmButtonText: "Si",
      denyButtonText: `No`,
    }).then((result) => {
      if (result.isConfirmed) {
        let params = { action: "delete-int-02", id: id };

        $.post(questionario_url, params, (response) => {
          if (response) {
            sw_alert().basic_success("Eliminado!");
            instrumento_02().get_reporte();
          }
        }).fail((xhr, status, error) => {
          console.log(xhr, status, error);
          sw_alert().error(error);
        });
      } else if (result.isDenied) {
        console.log("No se elimino el registro");
      }
    });
  },

  active_section: (selector, section, objArray) => {
    let valor = $("#form-inst-02 #" + selector).val();
    if (valor === "Si") {
      $("#form-inst-02 #" + section).removeClass("d-none");
      $("#form-inst-02 #" + section).addClass("d-block");

      objArray.forEach((item) => {
        $("#form-inst-02 #" + item).val("Si");
      });
    } else {
      $("#form-inst-02 #" + section).removeClass("d-block");
      $("#form-inst-02 #" + section).addClass("d-none");

      objArray.forEach((item) => {
        $("#form-inst-02 #" + item).val("No");
      });
    }
  },
});

const instrumento_03 = () => ({
  send: () => {
    let form = $("#form-inst-03").serialize();

    $.post(questionario_url, form, (response) => {
      if (response) {
        colsole.log(response);
        sw_alert().ok_reload(`Registrado exitoso!`);
      } else {
        sw_alert().error(
          `Ocurrió un problema al registrar el INST-03 - ${response}`
        );
      }
    }).fail((xhr, status, error) => {
      console.error(xhr, status, error);
      sw_alert().error(error, status);
    });
  },

  save: () => {
    let validar_form = funciones().validar_form_required("form-inst-03");

    if (validar_form) {
      Swal.fire({
        icon: "question",
        title: "¿Guardar instrumento 03?",
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: "Guardar",
        denyButtonText: `Cancelar`,
      }).then((result) => {
        if (result.isConfirmed) {
          instrumento_03().send();
        } else if (result.isDenied) {
          console.log("INST-03: Cancelado");
        }
      });
    } else {
      msje = "Por favor, complete todos los campos del formulario.";
      sw_alert().warning(msje);
    }
  },

  get_reporte: () => {
    let params = { action: "get-reporte-inst-03" };

    $.post(questionario_url, params, (response) => {
      let data = eval(response);
      let html = "";

      $("#modal-form-inst-03 #btn-cargando").show();

      if (response !== "[]") {
        for (let i = 0; i < data.length; i++) {
          let ubicacion =
            data[i].d_dpto + " / " + data[i].d_prov + " / " + data[i].d_dist;

          html += `<tr>
                                <td class="text-center">
                                    <i class="fa-regular fa-trash-can cursor-pointer text-danger icon-trash" onclick="instrumento_03().delete(${
                                      data[i].idInstrumento
                                    },${i + 1})"></i>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      i + 1
                                    }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].txt_mes_reporte
                                    }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].txt_fecha_aplicacion
                                    }</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].cod_mod
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].nombre_ie
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${ubicacion}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].cen_pob
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].d_dreugel
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].txt_dni +
                                      " - " +
                                      data[i].txt_ape_nomb
                                    }</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">${
                                      data[i].txt_cargo
                                    }</p>
                                </td>
                            </tr>`;
        }
      } else {
        html += `<tr>
                    <td colspan="10" class="text-danger text-center text-uppercase">
                        <p class="text-xs font-weight-bold mb-0">
                            <i class="fa-regular fa-triangle-exclamation"></i> 
                            No se han encontrado registros
                        </p>
                    </td>
                </tr>`;
      }
      $("#tbl-reporte-inst-03 tbody").html(html);
      $("#modal-form-inst-03 #btn-cargando").hide();
    }).fail((xhr, status, error) => {
      console.error(xhr, status, error);
      sw_alert().error(error);
    });
  },

  delete: (id, item) => {
    Swal.fire({
      icon: "question",
      title: "¿Eliminar Registro Nro. " + item + "?",
      showDenyButton: true,
      showCancelButton: false,
      confirmButtonText: "Si",
      denyButtonText: `No`,
    }).then((result) => {
      if (result.isConfirmed) {
        let params = { action: "delete-int-03", id: id };

        $.post(questionario_url, params, (response) => {
          if (response) {
            sw_alert().basic_success("Eliminado!");
            instrumento_03().get_reporte();
          }
        }).fail((xhr, status, error) => {
          console.log(xhr, status, error);
          sw_alert().error(error);
        });
      } else if (result.isDenied) {
        console.log("No se elimino el registro");
      }
    });
  },

  active_item: (selector, txtSelector) => {
    let valor = $("#form-inst-03 #" + selector).val();

    if (valor === "Si" || valor === "Otro") {
      $("#form-inst-03 #" + txtSelector)
        .removeClass("d-none")
        .addClass("d-block");
      $("#form-inst-03 #" + txtSelector).val("");
      $("#form-inst-03 #" + txtSelector).focus();
    } else {
      $("#form-inst-03 #" + txtSelector)
        .removeClass("d-block")
        .addClass("d-none");
      $("#form-inst-03 #" + txtSelector).val("-");
    }
  },
});

const encuesta_01 = () => ({
  send: () => {

    sw_alert().ok('Encuesta 01 - send()')

  },

  save: () => {

    sw_alert().ok('Encuesta 01 - save()')

  },

  get_reporte: () => {

    sw_alert().ok('Encuesta 01 - get_reporte()')

  },

  delete: (id, item) => {

    sw_alert().ok(`Encuesta 01 - delete(${ id, item})`)

  }
})
