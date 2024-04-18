const url = './Controllers/cUser.php'

const usuario = () => ({
    set_login: () => {
        let pUsuario  = $('#usuario').val()
        let pPassword = $('#password').val()
        let params    = { action: 'set-login', usr: pUsuario, pwd: pPassword }
        
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: params,
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) { 
                console.error(xhr, status, error);
            }
        });

        /*$.post( url, params, (response) => {
            console.log(response)
            if (response === '1') {
                alert('bienvenido')
            } else {
                alert('Error en credenciales')
            }
        }).fail( (xhr, status, error) => {
            console.error(xhr, status, error)
        })*/
    }
})

$('#btn-login').click( () => {
    usuario().set_login()
})