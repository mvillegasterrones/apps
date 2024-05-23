// ** Aquí código de las funciones a nivel de APP ** //

const pg_body = () => ({

    on_load: () => {
        $('.instrumento').addClass('d-none')
    },

    on_show_hide: (hd, shw) => {
        $('#' + hd).removeClass('d-block').addClass('d-none')
        $('#' + shw).removeClass('d-none').addClass('d-block')
    }

})

const funciones = () => ({

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

       /* if (formValido) {
            alert("El formulario está listo para ser enviado.");
        } else {
            alert("Por favor, complete todos los campos requeridos.");
        }*/
    },

    activar_fila: (i) => {
        // ? valor: 1 = Si
        // ? valor: 2 = No
        let valor  = $('#sel-opc-' + i).val()
        if (valor === 'Si') {
            $('#sel-opc-2-' + i).removeClass('d-none')
            $('#txt-valor-' + i).removeClass('d-none')
            $('#txt-valor-2-' + i).removeClass('d-none')

            $('#sel-opc-2-' + i).attr('required', 'required')
            $('#txt-valor-' + i).attr('required', 'required')
            $('#txt-valor-2-' + i).attr('required', 'required')

            $('#sel-opc-2-' + i).val('0')
            $('#txt-valor-' + i).val('0')
            $('#txt-valor-2-' + i).val('0')
        } else {
            $('#sel-opc-2-' + i).addClass('d-none')
            $('#txt-valor-' + i).addClass('d-none')
            $('#txt-valor-2-' + i).addClass('d-none')

            $('#sel-opc-2-' + i).removeAttr('required')
            $('#txt-valor-' + i).removeAttr('required')
            $('#txt-valor-2-' + i).removeAttr('required')

            $('#txt-valor-2-' + i).attr('readonly', 'readonly')
            $('#sel-opc-2-' + i).val('0')
            $('#txt-valor-' + i).val('0')
            $('#txt-valor-2-' + i).val('0')
        }
    },

    activar_casilla_x_fila: (i) => {
        /*
        * valor index() = 0 Nunca
        * valor index() = 1 Diario
        * valor index() = 3 Semanal
        * valor index() = 4 Mensual
        */
        //* let valor  = $('#sel-opc-2-' + i).val()
        let valor  = $('#sel-opc-2-' + i).find('option:selected').index()
        
        if (valor > 1) {
            if (valor > 2) {
                $('#txt-valor-' + i).removeAttr('readonly')
                $('#txt-valor-2-' + i).removeAttr('readonly')
                $('#txt-valor-' + i).val('')
                $('#txt-valor-2-' + i).val('0')
                $('#txt-valor-' + i).focus()
            } else {
                $('#txt-valor-' + i).attr('readonly', 'readonly')
                $('#txt-valor-2-' + i).removeAttr('readonly')
                $('#txt-valor-' + i).val('1')
                $('#txt-valor-2-' + i).focus()
            }
        } else {
            $('#txt-valor-' + i).attr('readonly', 'readonly')
            $('#txt-valor-2-' + i).attr('readonly', 'readonly')
            $('#txt-valor-' + i).val('0')
            $('#txt-valor-2-' + i).val('0')
        }
    },

    load_form_content: (form_ruta) => {
        $('#view-main').load('./Views/form/' + form_ruta)
    },

    page_reload: () => {
        location.reload()
    }
    
})

let chk = () => ({
    validar_chk: (section, txtMostrar) => {
        var seleccionados = [];
        $('#' + section + ' input[type="checkbox"]:checked').each(function () {
            seleccionados.push($(this).val());
        });
        $('#' + section + ' #' + txtMostrar).val(seleccionados.join(", "))
        console.log(seleccionados);
    }
})