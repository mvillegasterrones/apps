function open_video_sourse(id) {
    $.ajax({
        url: './Controllers/cCurso.php',
        type: 'POST',
        dataType: 'JSON',
        data: {accion:'open_video_sourse', id: id},
    }).done( (response) => {
        let data = eval(response)
        for (let i = 0; i < data.length; i++) {
            $('#cur_numero').html(data[i].cur_numero + ' / ' + data[i].cur_modulo)
            $('#cur_nombre').html(data[i].cur_nombre)
            $('#cur_nombre_video').html(data[i].cur_nombre_video)
            $('#video-curso').html('<source src="'+ data[i].cur_ruta +'" type="video/mp4">')
        }
        console.log(data)
    }).fail( (err) => {
        console.error(err)
    })
}