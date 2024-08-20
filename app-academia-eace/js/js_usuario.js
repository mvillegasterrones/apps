$('#form-register-user').submit( (e) => {
    e.preventDefault();
    let form = $('#form-register-user').serialize()
    $.ajax({
        url: './Controllers/cUsuario.php',
        type: "POST",
        dataType: "json",
        data: form,
    }).done( (response) => {
        alert('Registro exitoso! (code: ' + response + ')')
    }).fail( (err) => {
        console.error(err)
    })
})

function sp_update_info_user_by_ID() {
    //e.preventDefault();
    //event.preventDefault()
    const variables = {
        accion : 'sp_update_info_user_by_ID',
        id : $('#id').val(),
        curso_1: $('#reg-curso-1').val()
    }
    console.log(id)
    $.ajax({
        url: "./Controllers/cUsuario.php",
        type: "POST",
        dataType: 'json',
        data: variables,
    }).done( (response) => {
        alert('Registro actualizado! (code: ' + response + ')')
        sp_load_users_list()
    }).fail( (err) => {
        console.error(err)
    })
}

function sp_get_info_user_by_ID(id) {
    //e.preventDefault();
    //event.preventDefault()
    const variables = {
        accion : 'sp_get_info_user_by_ID',
        id : id,
    }
    console.log(id)
    $.ajax({
        url: "./Controllers/cUsuario.php",
        type: "POST",
        dataType: 'json',
        data: variables,
    }).done( (response) => {
        let data = eval(response)
        for (let i = 0; i < data.length; i++ ) {
            $('#id').val(data[i].id)
            $('#reg-dni').val(data[i].reg_dni)
            $('#reg-apellidos-nombres').val(data[i].reg_apellidos_nombres)
            $('#reg-correo').val(data[i].reg_correo)
            $('#reg-curso-1').val(data[i].reg_curso_1)
        }
    }).fail( (err) => {
        console.error(err)
    })
}

function sp_load_users_list() {
    $.ajax({
        url: "./Controllers/cUsuario.php",
        type: "POST",
        dataType: 'json',
        data: { accion: 'sp_load_users_list' },
    }).done( (response) => {
        let data = eval(response)
        let html = ''
        let html2= ''
        let status, cur1, cur2, cur3 = ''
        for (let i = 0; i < data.length; i++ ) {
            status = (data[i].reg_estatus==='1')?'<span class="badge badge-success rounded-pill d-inline"><i class="fas fa-check-circle"></i> Activo</span>':'<span class="badge badge-warning rounded-pill d-inline"><i class="fas fa-exclamation-triangle"></i> Inactivo</span>'

            cur1 = (data[i].reg_curso_1==='Si')?
                '<span class="badge badge-success rounded-pill d-inline"><i class="fas fa-check-circle"></i> Si</span>':
                '<span class="badge badge-danger rounded-pill d-inline"><i class="fas fa-times-circle"></i> No</span>'

            cur2 = (data[i].reg_curso_2==='Si')?
                '<span class="badge badge-success rounded-pill d-inline"><i class="fas fa-check-circle"></i> Si</span>':
                '<span class="badge badge-danger rounded-pill d-inline"><i class="fas fa-times-circle"></i> No</span>'

            cur3 = (data[i].reg_curso_3==='Si')?
                '<span class="badge badge-success rounded-pill d-inline"><i class="fas fa-check-circle"></i> Si</span>':
                '<span class="badge badge-danger rounded-pill d-inline"><i class="fas fa-times-circle"></i> No</span>'

            html += `<tr class="text-reset">
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="./img/user.png" alt="" style="width: 45px; height: 45px" class="rounded-circle"/>
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1 text-reset">${data[i].reg_apellidos_nombres}</p>
                                        <p class="text-muted mb-0 text-reset"><i class="fas fa-envelope"></i> ${data[i].reg_correo}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Celular</p>
                                <p class="text-reset mb-0"><a href="https://api.whatsapp.com/send?phone=51${data[i].reg_celular}&text=Hola%20${data[i].reg_apellidos_nombres}!" target="_blank"><i class="fa-brands fa-whatsapp text-success"></i> ${data[i].reg_celular}</p>
                            </td>
                            <td class="text-reset"><i class="fas fa-user"></i> ${data[i].reg_rol}</td>
                            <td>${status}</td>
                            <td>${cur1}</td>
                            <td>${cur2}</td>
                            <td>${cur3}</td>

                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded" 
                                data-mdb-ripple-init 
                                data-mdb-modal-init 
                                data-mdb-target="#modal-edit-user"
                                onclick="sp_get_info_user_by_ID(${data[i].id})"><i class="fas fa-pen"></i></button>
                            </td>
                        </tr>`

            html2 += `<tr>
                            <td>${data[i].reg_apellidos_nombres}</td>
                            <td>${data[i].reg_correo}</td>
                            <td>${data[i].reg_celular}</td>
                            <td>${data[i].reg_rol}</td>
                            <td>${data[i].reg_curso_1}</td>
                            <td>${data[i].reg_curso_2}</td>
                            <td>${data[i].reg_curso_3}</td>
                        </tr>`
        }
        $('#tbl-reporte-usuarios tbody').html(html)
        $('#tbl-export-users tbody').html(html2)
    }).fail( (err) => {
        console.error(err)
    })
}

function sp_logout() {
    $.ajax({
        url: "./Controllers/cUsuario.php",
        type: "POST",
        dataType: 'json',
        data: { accion: 'sp_logout' },
    }).done( (response) => {
        if (response==='1'){
            location.reload()
            console.log('Cerramdo session...' + response)
        }
    }).fail( (err) => {
        console.error(err)
    }).always( () => {
        location.href = 'index.php'
        //location.reload()
    })
    location.href = 'index.php'
    //location.reload()
}

$('#form-login').submit( (e) => {
    e.preventDefault();
    const data = {
        accion : 'sp_login',
        correo : $('#login_correo').val(),
        password : $('#login_password').val(),
    }

    $.ajax({
        url: './Controllers/cUsuario.php',
        type: "POST",
        dataType: "json",
        data: data,
        //data: JSON.stringify(data),
    }).done((response) => {
        if (response === 1) {
            $("#error").hide();
            $("#iniciando").hide();
            $("#error2").hide();
            $("#alerta").hide();
            $("#ok").show();
            location.reload()
            //location.href = "index.php";
        } else {
            $("#error").hide();
            $("#iniciando").hide();
            $("#ok").hide();
            $("#error2").hide();
            $("#alerta").show();
        }
        console.log("Success! " + response);
        //console.log({ response });
    }).fail((err) => {
        $("#iniciando").hide();
        $("#ok").hide();
        $("#alerta").hide();
        $("#error2").hide();
        $("#error").show();
        console.error(err)
    })
})