const rubros_url = './Controllers/cRubros.php'

const rubros = () => ({
    get_list : () => {
        $.post( rubros_url, { action: 'rubros-get-list' }, (response) => {
            let data = eval(response)
            let html = ''
            for (let i = 0; i < data.length; i++) {
                html += `<div class="col-12 col-md-2 mb-4 mb-md-0">
                            <div class="card bg-gradient-dark text-center system-card ">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <img src="${data[i].rubro_ruta_img}" class="system-logo" alt="ICON EMPRESA">
                                        <small class="text-uppercase"><i class="fas fa-check-circle d-none"></i>${data[i].rubro_name}</small>
                                    </div>
                                </div>
                            </div>
                        </div>`
            }
            $('#main-cards').html(html)

            $(".system-card").click(function() {
                $(".system-card").removeClass("item-selected")
                $(".system-card i").removeClass("d-block").addClass("d-none")
                $(this).addClass("item-selected")
                $(this).find("i").removeClass("d-none").addClass("d-block")
            })

        }).fail( (xhr, status, error) => {
            console.error(xhr, status, error)
        })
    }
})