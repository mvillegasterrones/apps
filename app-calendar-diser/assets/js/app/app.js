let chk = () => ({
    validar_chk: (section, txtMostrar) => {
        var seleccionados = [];
        $("#" + section + ' input[type="checkbox"]:checked').each(function () {
            seleccionados.push($(this).val());
        });
        $("#" + section + " #" + txtMostrar).val(seleccionados.join(",\n"));
        console.log(seleccionados);
    },
});

const pg_body = () => ({
    on_load: () => {
        sys_calendar().show_recents()
        sys_calendar().get_events()
    },

    on_show_hide: (hd, shw) => {
        $("#" + hd)
            .removeClass("d-block")
            .addClass("d-none");
        $("#" + shw)
            .removeClass("d-none")
            .addClass("d-block");
    },
});

const funciones = () => ({

    validate_input_required: (form) => {

        // Obtener el formulario
        var formulario = document.getElementById(form);
        // Obtener todos los elementos del formulario
        var elementos = formulario.elements;
        var validacionPasada = true;

        // Iterar a través de los elementos y verificar los campos requeridos
        for (var i = 0; i < elementos.length; i++) {
            if (elementos[i].hasAttribute('required') && elementos[i].value === '') {
                validacionPasada = false;
                elementos[i].style.border = "2px solid red"; // Marcar el campo vacío
            } else {
                elementos[i].style.border = ""; // Restablecer el borde si el campo está lleno
            }
        }

        // Si la validación pasa, enviar el formulario manualmente
        if (validacionPasada) {
            formulario.submit();
        } else {
            alert('Por favor, rellena todos los campos requeridos.');
        }

    },

    validar_form_required: (form_name) => {
        let formValido = true;

        $("#"+ form_name +" [required]").each(function() {
            if ($(this).val().trim() === "") {
                formValido = false
                return formValido
                //return false
            }
        })

        return formValido

    },

    get_areas: () => {
        let url = "./Controllers/cCalendar.php";
        let params = { action: "get-areas-list" };

        $.post(url, params, (response) => {
            let data = eval(response);

            $("#modal-event-add #cal_idArea").empty();
            $("#modal-event-add #cal_idArea").append(
                '<option value="">.: Seleccione Área :.</option>'
            );
            for (let i = 0; i < data.length; i++) {
                $("#modal-event-add #cal_idArea").append(
                    `<option value="${data[i].id}">${data[i].area_nombre}</option>`
                );
            }
        }).fail((xhr, status, error) => {
            console.error(xhr, status);
            sw_alert().error(error);
        });
    },

});