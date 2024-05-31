
const calendar_url = "./Controllers/cCalendar.php";

const dre = () => ({

    get_ugel_by_dre: () => {

        let dre = $('#form-registro-asistencia #seleccione_dre').val()

        let params = { action: 'get-ugel-by-dre', dre: dre }

        $('#form-registro-asistencia #seleccione_ugel').attr('disabled', 'disabled')
        $('#form-registro-asistencia #seleccione_ugel').append(`<option value="">Cargando ...</option`)

        $.post( calendar_url, params, (response) => {

            let data = eval(response)

            $('#form-registro-asistencia #seleccione_ugel').empty()

            $('#form-registro-asistencia #seleccione_ugel').append(`<option value="">- Seleccione UGEL -</option`)

            $('#form-registro-asistencia #seleccione_ugel').append(`<option>No Aplica</option`)

            for (let i = 0; i < data.length; i++) {

                $('#form-registro-asistencia #seleccione_ugel').append(`<option>${data[i].UGEL}</option>`)

            }

            $('#form-registro-asistencia #seleccione_ugel').removeAttr('disabled')

            

        }).fail(error => {

            console.error(error)
            sw_alert().error(error)

        })
    },

    get_dre: () => {

        let params = { action: 'get-dre' }
        
        $('#form-registro-asistencia #seleccione_dre').attr('disabled', 'disabled')
        $('#form-registro-asistencia #seleccione_dre').append(`<option value="">Cargando ...</option`)

        $.post( calendar_url, params, (response) => {
            
            let data = eval(response)

            $('#form-registro-asistencia #seleccione_dre').empty()

            $('#form-registro-asistencia #seleccione_dre').append(`<option value="">- Seleccione DRE -</option`)

            $('#form-registro-asistencia #seleccione_dre').append(`<option>No Aplica</option`)
            $('#form-registro-asistencia #seleccione_dre').append(`<option>MINEDU</option`)

            for (let i = 0; i < data.length; i++) {
                
                $('#form-registro-asistencia #seleccione_dre').append(`<option>${data[i].DRE}</option>`)

            }

            $('#form-registro-asistencia #seleccione_dre').removeAttr('disabled')

            /*if (document.getElementById("seleccione_dre")) {
                let dre = document.getElementById("seleccione_dre");
                const example = new Choices(dre);
            }*/
            
        }).fail( (error) => {
            console.error(error)
            sw_alert().error(error)
        })
    },
})