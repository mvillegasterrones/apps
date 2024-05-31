const calendar_url = "./Controllers/cCalendar.php";

const dre = () => ({
    get_ugel_by_dre: () => {
        let dre = $("#form-registro-asistencia #seleccione_dre").val();

        let params = { action: "get-ugel-by-dre", dre: dre };

        $("#form-registro-asistencia #seleccione_ugel").attr(
            "disabled",
            "disabled"
        );
        $("#form-registro-asistencia #seleccione_ugel").append(
            `<option value="">Cargando ...</option`
        );

        $.post(calendar_url, params, (response) => {
            let data = eval(response);

            $("#form-registro-asistencia #seleccione_ugel").empty();

            $("#form-registro-asistencia #seleccione_ugel").append(
                `<option value="">- Seleccione UGEL -</option`
            );

            $("#form-registro-asistencia #seleccione_ugel").append(
                `<option>No Aplica</option`
            );

            for (let i = 0; i < data.length; i++) {
                $("#form-registro-asistencia #seleccione_ugel").append(
                    `<option>${data[i].UGEL}</option>`
                );
            }

            $("#form-registro-asistencia #seleccione_ugel").removeAttr("disabled");
        }).fail((error) => {
            console.error(error);
            sw_alert().error(error);
        });
    },

    get_dre: () => {
        let params = { action: "get-dre" };

        $("#form-registro-asistencia #seleccione_dre").attr("disabled", "disabled");
        $("#form-registro-asistencia #seleccione_dre").append(
            `<option value="">Cargando ...</option`
        );

        $.post(calendar_url, params, (response) => {
            let data = eval(response);

            $("#form-registro-asistencia #seleccione_dre").empty();

            $("#form-registro-asistencia #seleccione_dre").append(
                `<option value="">- Seleccione DRE -</option`
            );

            $("#form-registro-asistencia #seleccione_dre").append(
                `<option>No Aplica</option`
            );
            $("#form-registro-asistencia #seleccione_dre").append(
                `<option>MINEDU</option`
            );

            for (let i = 0; i < data.length; i++) {
                $("#form-registro-asistencia #seleccione_dre").append(
                    `<option>${data[i].DRE}</option>`
                );
            }

            $("#form-registro-asistencia #seleccione_dre").removeAttr("disabled");

            /*if (document.getElementById("seleccione_dre")) {
                            let dre = document.getElementById("seleccione_dre");
                            const example = new Choices(dre);
                        }*/
        }).fail((error) => {
            console.error(error);
            sw_alert().error(error);
        });
    },
});

const reniec = () => ({
    search_dni: () => {
        let dni = $("#dni").val();

        if (dni.length === 8) {

            $("#apellidos_nombres").attr('readonly', 'readonly')
            
            $("#apellidos_nombres").val("Buscando...");

            $.ajax({
                url: "https://incared.com/api/apirest",
                type: "post",
                dataType: "json",
                data: { action: "getnumero", numero: dni },
                statusCode: {
                    200: function () {
                        let msj = "200 - Pprocesando...";
                        console.log(msj);
                    },
                    404: function () {
                        let msj = "404 - Pagina NO encontrada";
                        alert(msj);
                        console.log(msj);
                    },
                    500: function () {
                        let msj = "500 - SUNAT - Error al conectar con el servidor!";
                        alert(msj);
                        console.log(msj);
                    },
                },
            }).done(function (response) {
                let datos = eval(response);
                if (datos.rs === null || datos.rs === undefined) {
                    sw_alert().error(datos.error +" : " + dni + ", Ingresar datos!");
                    $("#apellidos_nombres").val("");
                    $("#apellidos_nombres").removeAttr('readonly')
                } else {
                    $("#apellidos_nombres").val(datos.rs);
                    $("#apellidos_nombres").attr('readonly', 'readonly')
                    $("#correo").focus();
                }
                $("#btnBuscarSunat-2").html(
                    '<i class="fas fa-search" aria-hidden="true"></i>'
                );
            });
        } else {
            alert("DNI debe tener 8 digitos!");
            $("#apellidos_nombres").val("");
            $("#apellidos_nombres").focus();
        }
    },
});
