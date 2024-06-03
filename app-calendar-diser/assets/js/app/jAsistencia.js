const asistencia_url = "./Controllers/cAsistencia.php";
const reniec_url = "https://incared.com/api/apirest";

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

// TODO Link example: http://localhost/local-mbp-2/app-calendar-diser/registro-asistencia.php?id=5&denominacion=Recordatorios%20-%20cargar%20megáfono%20para%20uso%20durante%20el%20simulacro.&fi=31%20May%202024%2011:00&fe=31%20May%202024%2013:00

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
                                <h6 class="mb-0 text-xxs">${data[i].seleccione_dre}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xxs text-secondary mb-0">${data[i].seleccione_ugel}</p>
                    </td>
                    <td>
                        <p class="text-xxs text-secondary mb-0">${data[i].seleccione_cargo}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-secondary mb-0 text-xxs">${data[i].cod_mod}</p>
                    </td>
                    <td class="align-middle">
                        <span class="text-secondary text-xxs">${data[i].dni + ' - ' + data[i].apellidos_nombres}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xxs">${data[i].correo}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xxs">${data[i].celular}</span>
                    </td>
                </tr>
                `;

            }

            $('#tbl-reporte-asistencia tbody').html(html)

        }).fail((xhr, status, error) => {

            console.error(xhr, status, error);
            sw_alert().error(error);

        });
    },
});
