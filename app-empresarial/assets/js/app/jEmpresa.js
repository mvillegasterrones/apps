const empresa = () => ({
    save: () => {
        Swal.fire({
            title: "Desea guardar los cambios?",
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: "Si",
            denyButtonText: `No`
        }).then((result) => {
            if (result.isConfirmed) {
                //sw_alert().ok('ok','this ok')
                $.post( empresa_url, empresa_form_send, (response) => {
                    console.log('response: ' + response)
                    if (response === 'true') {
                        Swal.fire("Registro exitoso!", "", "success");
                    } else if (response === '0') {
                        sw_alert().warning('Empresa ya se encuentra registrada')
                    } else {
                        sw_alert().warning('Ocurrió un problema en el servidor')
                    }
                }).fail( (xhr, status, error) => {
                    sw_alert().error(xhr, status, error)
                })
                
            } else if (result.isDenied) {
                console.log('No se registra la empresa')
                //Swal.fire("Changes are not saved", "", "info");
            }
        })
    },
    get_list: (name_rubro) => {
        let data_send = { action: 'empresas-get-list', nameRubro: name_rubro }
        $.post( empresa_url, data_send, (Response) => {
            let data = eval(Response)
            let html = ''
            for (let i = 0; i < data.length; i++) {
                let est_sys  = (data[i].emp_estado_sys === '1') ? 'warning' : 'success'
                let est_sys2 = (data[i].emp_estado_sys === '1') ? 'outline-warning' : 'success'
                let est_col  = (data[i].emp_estado_sys === '2') ? 'item-selected-table' : ''
                html += `<li class="list-group-item px-0 ${est_col}">
                            <div class="row align-items-center">
                                <div class="col-auto d-flex align-items-center">
                                    <a href="javascript:;" class="avatar">
                                        <img class="border-radius-lg" alt="Image placeholder" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-slack.svg">
                                    </a>
                                </div>
                                <div class="col ml-2">
                                    <h6 class="h6 mb-0 text-uppercase">
                                        <a href="javascript:;" class="item-selected-table">${data[i].emp_ruc + ' - ' + data[i].emp_razon_social}</a>
                                    </h6>
                                    <span>${data[i].emp_dpto+' / '+data[i].emp_provincia+' / '+data[i].emp_distrito}</span>
                                    <span class="badge badge-${est_sys} badge-sm">Online</span>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-${est_sys2} btn-xs mb-0" onclick="empresa().set_status(${data[i].idEmpresa}, '${data[i].emp_razon_social}')"><i class="fas fa-check"></i></button>
                                </div>
                            </div>
                        </li>`
            }
            $('#list-empresas').html(html)
        }).fail( (xhr, status, error) => {
            console.error(xhr, status, error)
        })
    },
    set_status: (id, nombre_col) => {
        let data_send = { action: 'set-status', idEmpresa : id }
        let rubro     = $('#navbar-rubro').text()
        $.post( empresa_url, data_send, (response) => {
            empresa().get_list(rubro)
            empresa().get_active()
            $('#navbar-empresa').html(nombre_col)
            sw_alert().ok(nombre_col)

        }).fail( (xhr, status, error) =>{
            console.error(xhr, status, error)
        })
    },
    get_active: () => {
        let data_send = { action: 'get-active' }
        $.post( empresa_url, data_send, (response) => {
            let data = eval(response)
            for (let i = 0; i < data.length; i++) {
                $('#navbar-rubro').html(data[i].rubro_name)
                $('#navbar-empresa').html(data[i].emp_razon_social)
                $('#empresa-activa #datos-rubro').html(data[i].rubro_name)
                $('#empresa-activa #datos-empresa').html(data[i].emp_ruc + ' - ' + data[i].emp_razon_social)
                $('#empresa-activa #datos-direccion').html(data[i].emp_direccion)
                $('#empresa-activa #datos-ubicacion').html(data[i].emp_dpto +' / '+data[i].emp_provincia+' / '+data[i].emp_distrito)
                $('#empresa-activa #datos-estado').html(data[i].emp_estado)
                $('#empresa-activa #datos-condicion').html(data[i].emp_condicion)
            }
        }).fail( (xhr, status, error) => {
            console.error(xhr, status, error)
        })
    }
})