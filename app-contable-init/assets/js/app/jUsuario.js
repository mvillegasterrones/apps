const url = './controllers/cUsuario.php'
let params

const usuario = () => ({
    set_login: () => {
        let pUsuario  = $('#usuario').val()
        let pPassword = $('#password').val()
        params = { action: 'set-login', _usuario: pUsuario, _password: pPassword }
        $.post( url, params, (response) => {
            console.log(response)
            if (response === '1') {
                alert('bienvenido')
            } else {
                alert('Error en credenciales')
            }
        }).fail( (xhr, status, error) => {
            console.error(xhr, status, error)
        })
    }
})

$('#btn-login').click( () => {
    usuario().set_login()
})