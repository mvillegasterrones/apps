const rubros_url = './Controllers/cRubros.php'
const action_get_list = 'rubros-get-list'

const rubros = () => ({
    set_rubro: () => {
        const message_ = 'Registrado con exito'
        let form       = $('#form-rubro').serialize()
        $.post( rubros_url, form, (response) => {
            rubros().get_list()
            sw_alert().basic_success(response)
        }).fail( (xhr, status, error) => {
            sw_alert.error(xhr, status, error)
        })
    },
    get_list : () => {
        $.post( rubros_url, { action: action_get_list }, (response) => {
            let data = eval(response)
            let html = ''
            let html2= ''
            for (let i = 0; i < data.length; i++) {
                html += `<div class="col-12 col-md-2 mb-4 mb-md-0">
                            <div class="card bg-gradient-dark text-center system-card " data-bs-toggle="tooltip" data-bs-placement="top" title="${data[i].rubro_descripcion}" data-container="body" data-animation="true">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <h1><img src="${data[i].rubro_ruta_img}" class="system-logo" alt="ICON EMPRESA"></h1>
                                        <small class=""><i class="fas fa-check-circle d-none"></i>${data[i].rubro_name}</small>
                                        <input type="hidden" id="txt-rubro-name-${i}" value="${data[i].rubro_name}">
                                    </div>
                                </div>
                            </div>
                        </div>`
                
                html2+=`<li class="nav-item">
                            <a class="nav-link" href="javascript:;">
                                <span class="sidenav-mini-icon"> <i class="${data[i].rubro_icon}"></i> </span>
                                <span class="sidenav-normal"><i class="${data[i].rubro_icon}"></i> ${data[i].rubro_name} </span>
                            </a>
                        </li>`
            }
            $('#main-cards').html(html)
            $('#sidebar-items-rubros').html(html2)
            $('#div-loader').hide()

            $(".system-card").click(function() {
                $(".system-card").removeClass("item-selected")
                $(".system-card i").removeClass("d-block").addClass("d-none")
                $(this).addClass("item-selected")
                $(this).find("i").removeClass("d-none").addClass("d-block")
                let valor = $(this).find('input').val()
                $('#navbar-rubro').html(valor)
                $('#modal-form-empresa #form-empresa #emp_rubro').val(valor)
                sw_alert().basic('Seleccionado!')
                empresa().get_list(valor)

                $('#section-rubros').addClass('d-none')
                $('#section-empresas').removeClass('d-none')
                $('#section-empresas').addClass('d-block')
            })

        }).fail( (xhr, status, error) => {
            console.error(xhr, status, error)
        })
    }
})