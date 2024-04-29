const empresa_url = './Controllers/cEmpresas.php'

const empresa = () => ({
    get_list: (name_rubro) => {
        let data_send = { action: 'empresas-get-list', nameRubro: name_rubro }
        $.post( empresa_url, data_send, (Response) => {
            let data = eval(Response)
            let html = ''
            for (let i = 0; i < data.length; i++) {
                let est_sys = (data[i].emp_estado_sys === '1') ? 'warning' : 'success'
                html += `<li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto d-flex align-items-center">
                                    <a href="javascript:;" class="avatar">
                                        <img class="border-radius-lg" alt="Image placeholder" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-slack.svg">
                                    </a>
                                </div>
                                <div class="col ml-2">
                                    <h6 class="mb-0 text-uppercase">
                                        <a href="javascript:;">${data[i].emp_ruc + ' - ' + data[i].emp_razon_social}</a>
                                    </h6>
                                    <span class="">${data[i].emp_dpto+' / '+data[i].emp_provincia+' / '+data[i].emp_distrito}</span>
                                    <span class="badge badge-${est_sys} badge-sm">Online</span>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-outline-primary btn-xs mb-0">Add</button>
                                </div>
                            </div>
                        </li>`
            }
            $('#list-empresas').html(html)
        }).fail( (xhr, status, error) => {
            console.error(xhr, status, error)
        })
    }
})