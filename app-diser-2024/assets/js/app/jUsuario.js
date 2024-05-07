const user = () => ({
    set_login: () => {
        let params  = { action: 'set-login', cod_mod: login_cod_mod.val() }
        
        if (login_cod_mod.val() == '') login_cod_mod.focus()

        $.post( login_url, params, (response) => {
            console.log(response)
            if (response === '1') { sw_alert().bienvenido() } else { sw_alert().error('Código modular incorrecto!') }
        }).fail( (xhr, status, error) => {
            console.error(xhr, status, error)
        })
    },
    set_logout: () => {
        let params = { action: 'set-logout' }
        $.post( login_url, params, () =>{
            location.reload()
        })
    },
    get_users_list: () => {
        let params = { action: 'get-users-list' }
        let html
        $.post( login_url, params, (response) => {
            let data = eval(response)
            for (let i = 0; i < data.length; i++) {
                let estado  = (data[i].user_estado === '1') ? 'success' : 'danger'
                let testado = (data[i].user_estado === '1') ? 'Activo' : 'Inactivo'
                html += `<tr>
                            <td>
                                <div class="d-flex px-2">
                                    <div>
                                        <img src="./assets/img/logos/logo-user.png" class="avatar avatar-sm rounded-circle me-2">
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-xs">${data[i].user_apellidos+', '+data[i].user_nombres}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">${data[i].user_cargo}</p>
                            </td>
                            <td>
                                <span class="badge badge-${estado} badge-sm">
                                    ${testado}
                                </span>
                            </td>
                        </tr>`
            }
            $('#table-users-list tbody').html(html)
        })
    }
})