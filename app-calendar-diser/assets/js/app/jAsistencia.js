const asistencia_url = "./Controllers/cAsistencia.php"
const reniec_url     = "https://incared.com/api/apirest"

const reniec = () => ({
    search_dni: () => {
        let dni = $("#dni").val();

        if (dni.length === 8) {

            $("#apellidos_nombres").attr('readonly', 'readonly')
            
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
            }).done( (response) => {
                let datos = eval(response);
                if (datos.rs === null || datos.rs === undefined) {
                    sw_alert().error(datos.error +" : " + dni + ", Ingresar apellidos y nombres!");
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
        
        let validar_form = funciones().validar_form_required("form-registro-asistencia");

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
    
})