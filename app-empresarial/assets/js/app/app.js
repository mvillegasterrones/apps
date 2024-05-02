// ** Aquí código de las funciones a nivel de APP ** //
const url_sunat = 'https://incared.com/api/apirest'

const pg_body = () => ({
    on_load: () => {
        rubros().get_list()
        empresa().get_active()
    },
    on_show_hide: (hd, shw) => {
        $('#' + hd).removeClass('d-block').addClass('d-none')
        $('#' + shw).removeClass('d-none').addClass('d-block')
    }
})

const sunat = () => ({
    search: (ruc) => {
        let data      = { action: 'getnumero', numero: ruc }
        let form      = $('#form-empresa')
        let buscando  = $('#modal-form-empresa #spin-buscando')
        let realizado = $('#modal-form-empresa #spin-ok')

        realizado.removeClass('d-block').addClass('d-none')
        buscando.removeClass('d-none').addClass('d-block')

        $.ajax({
            url: url_sunat,
            type: 'POST',
            dataType: 'json',
            data: data,
        }).done( (response) => {
            let datos =eval(response)
            if (datos.rs === null || datos.rs === undefined) {
                form[0].reset()
                sw_alert().warning(datos.error)
            } else {
                $('#form-empresa #emp_razon_social').val(datos.rs)
                $('#form-empresa #emp_direccion').val(datos.direccion_string)
                $('#form-empresa #emp_dpto').val(datos.departamento.nombre)
                $('#form-empresa #emp_provincia').val(datos.provincia.nombre)
                $('#form-empresa #emp_distrito').val(datos.distrito.nombre)
                $('#form-empresa #emp_ubigeo').val(datos.ubigeo)
                $('#form-empresa #emp_estado').val(datos.estado)
                $('#form-empresa #emp_condicion').val(datos.condom)
                sw_alert().basic_success('Encontrado: ' + datos.rs)
            }
            realizado.removeClass('d-none').addClass('d-block')
            buscando.removeClass('d-block').addClass('d-none')
        }).fail( (xhr, status, error) => {
            sw_alert().error( xhr, status, error )
        })
    }
})

$('#form-empresa #emp_ruc').on('keyup', (event) => {
    let ruc = $('#form-empresa #emp_ruc').val()
    if (event.keyCode === 13) {
        if (ruc !== '' && ruc.length === 11) {
            sunat().search(ruc)
        } else {
            sw_alert().error('El RUC no debe ser vacío y con 11 dígitos!')
        }
    }
})