const url = './controllers/cUser.php'

const usuario = () => ({
    set_login: () => {
        let pUsuario  = $('#usuario').val()
        let pPassword = $('#password').val()
        let params    = { action: 'set-login', usr: pUsuario, pwd: pPassword }
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