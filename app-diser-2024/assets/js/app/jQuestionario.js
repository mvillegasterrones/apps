const questionario = () => ({

    get_preguntas_inst: () => {
        let params = { action: 'get-preguntas-inst-01', instrumento : 'INST-01' }
        $.post( questionario_url, params, (response) => {
            let data = eval(response)
            let html = ''
            let item = 0
            for (let i = 0; i < data.length; i++) {
                if (data[i].id >= 6) {
                    item++
                    let detalle = (data[i].detalle === 'Otro') ? `<input class="multisteps-form__input form-control form-control-sm" type="text" placeholder="Otro" name="txt-otro-${item}" id="txt-otro-${item}" required />` : data[i].detalle
                    
                    html += `<tr>
                                <td class="text-center"><p class="text-xs font-weight-bold mb-0">${item}</p></td>
                                <td><p class="text-xs font-weight-bold mb-0">${detalle}</p></td>
                                <td>
                                    <select class="multisteps-form__input form-control form-control-sm w-100" id="sel-opc-${item}" name="sel-opc-${item}" onchange="funciones().activar_fila(${item})" required>
                                        <option value="" selected disabled>.: Seleccione (Si/No) :.</option>
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="multisteps-form__input form-control form-control-sm w-100 d-none" id="sel-opc-2-${item}" name="sel-opc-2-${item}" onchange="funciones().activar_casilla_x_fila(${item})" required>
                                        <option value="" selected disabled>.: Seleccione opción :.</option>
                                        <option value="0">Nunca</option>
                                        <option value="1">Diario</option>
                                        <option value="2">Semanal</option>
                                        <option value="3">Mensual</option>
                                    </select>
                                </td>
                                <td>
                                    <input class="multisteps-form__input form-control form-control-sm w-75 d-none" type="number" value="0" placeholder="0" name="txt-valor-${item}" id="txt-valor-${item}" readonly required />
                                </td>
                                <td>
                                    <input class="multisteps-form__input form-control form-control-sm w-75 d-none" type="number" value="0" placeholder="0" name="txt-valor-2-${item}" id="txt-valor-2-${item}" readonly required />
                                </td>
                            </tr>`

                }
            }
            $('#tbl-sec-2-inst-01 tbody').html(html)
        }).fail( (error) => {
            sw_alert().error(error)
        })
    }

})

const instrumento_01 = () => ({

    send_data: () => {
        let form = form_inst_01.serialize()
        let params = { form }

        $.ajax({
            url: questionario_url,
            type: 'POST',
            dataType: 'json',
            data: params
        }).done( (response) => {
            alert(response)
        })

        /*$.post( questionario_url, params, (response) => {
            sw_alert().ok('Guardado! ' + response)
            //location.reload()
        }).fail( (xhr, status, error) => {
            console.error(xhr, status, error)
        })*/
    },

    save: () => {
        let validar_form = funciones().validar_form_required('form-inst-01')

        if (validar_form) {

            Swal.fire({
                icon: 'question',
                title: "¿Guardar la información?",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "Guardar",
                denyButtonText: `Cancelar`
            }).then((result) => {
                if (result.isConfirmed) {
                    //* Swal.fire("Saved!", "", "success");
                    instrumento_01().send_data()
                } else if (result.isDenied) {
                    //* Swal.fire("Changes are not saved", "", "info")
                    console.log('INST-01: Cancelado')
                }
            })
            
            //msje = 'El formulario está listo para ser enviado. ' + validar_form
            //sw_alert().ok(msje)
        } else {
            msje = 'Por favor, complete todos los campos del formulario. ' + validar_form
            sw_alert().warning(msje)
        }
        
        /**/
    }
})