const calendar_url = "./Controllers/cCalendar.php";

const dre = () => ({
    get_ugel_by_dre: () => {
        let dre = $("#form-registro-asistencia #seleccione_dre").val();

        let params = { action: "get-ugel-by-dre", dre: dre };

        $("#form-registro-asistencia #seleccione_ugel").attr(
            "disabled",
            "disabled"
        );
        $("#form-registro-asistencia #seleccione_ugel").append(
            `<option value="">Cargando ...</option`
        );

        $.post(calendar_url, params, (response) => {
            let data = eval(response);

            $("#form-registro-asistencia #seleccione_ugel").empty();

            $("#form-registro-asistencia #seleccione_ugel").append(
                `<option value="">- Seleccione UGEL -</option`
            );

            $("#form-registro-asistencia #seleccione_ugel").append(
                `<option>No Aplica</option`
            );

            for (let i = 0; i < data.length; i++) {
                $("#form-registro-asistencia #seleccione_ugel").append(
                    `<option>${data[i].UGEL}</option>`
                );
            }

            $("#form-registro-asistencia #seleccione_ugel").removeAttr("disabled");
        }).fail((error) => {
            console.error(error);
            sw_alert().error(error);
        });
    },

    get_dre: () => {
        let params = { action: "get-dre" };

        $("#form-registro-asistencia #seleccione_dre").attr("disabled", "disabled");
        $("#form-registro-asistencia #seleccione_dre").append(
            `<option value="">Cargando ...</option`
        );

        $.post(calendar_url, params, (response) => {
            let data = eval(response);

            $("#form-registro-asistencia #seleccione_dre").empty();

            $("#form-registro-asistencia #seleccione_dre").append(
                `<option value="">- Seleccione DRE -</option`
            );

            $("#form-registro-asistencia #seleccione_dre").append(
                `<option>No Aplica</option`
            );
            $("#form-registro-asistencia #seleccione_dre").append(
                `<option>MINEDU</option`
            );

            for (let i = 0; i < data.length; i++) {
                $("#form-registro-asistencia #seleccione_dre").append(
                    `<option>${data[i].DRE}</option>`
                );
            }

            $("#form-registro-asistencia #seleccione_dre").removeAttr("disabled");

        }).fail((error) => {

            console.error(error);
            sw_alert().error(error);

        });
    },

    get_dre_programdas: (id) => {

        let params = { action: "get-dre-programdas", id: id };

        $.post(calendar_url, params, (response) => {

            let data = eval(response);

            for (let i = 0; i < data.length; i++) {

                html = data[i].cal_regiones

            }

            $('#dre-participantes-list').html(html)

        }).fail(error => {
            
            console.error(error);
            sw_alert().error(error);

        })

    },

    get_ugel_programadas: (id) => {

        let params = { action: "get-ugel-programdas", id: id };

        $.post(calendar_url, params, (response) => {

            let data = eval(response);

            for (let i = 0; i < data.length; i++) {

                html = data[i].cal_ugel
                
            }

            $('#ugel-participantes-list').html(html)

        }).fail(error => {
            
            console.error(error);
            sw_alert().error(error);

        })

    },

    get_cargo_programadas: (id) => {

        let params = { action: "get-cargo-programdas", id: id };

        $.post(calendar_url, params, (response) => {

            let data = eval(response);

            for (let i = 0; i < data.length; i++) {

                html = data[i].cal_participantes
                
            }

            $('#cargo-participantes-list').html(html)

        }).fail(error => {
            
            console.error(error);
            sw_alert().error(error);

        })

    },

    get_info_calendar: (id) => {

        let params = { action: "get-info-calendar", id: id };

        $.post(calendar_url, params, (response) => {

            let data = eval(response);
            let dre, ugel, participantes

            for (let i = 0; i < data.length; i++) {

                nro_participantes = `<i class="fas fa-users"></i> (${data[i].cal_nro_participantes}) Participantes`
                dre               = data[i].cal_regiones
                ugel              = data[i].cal_ugel
                participantes     = data[i].cal_participantes
                
            }

            $('#nro-participantes-programados').html(nro_participantes)
            $('#dre-participantes-list').html(dre)
            $('#ugel-participantes-list').html(ugel)
            $('#cargo-participantes-list').html(participantes)

        }).fail(error => {
            
            console.error(error);
            sw_alert().error(error);

        })

    }
});