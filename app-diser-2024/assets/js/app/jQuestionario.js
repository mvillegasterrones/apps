const questionario = () => ({
    get_preguntas_inst: () => {
        let params = { action: 'get-preguntas-inst-01', instrumento : 'INST-01' }
        $.post( questionario_url, params, (response) => {
            let data = eval(response)
            let html = ''
            for (let i = 0; i < data.length; i++) {
                if (data[i].id >= 4) {

                    let detalle = (data[i].detalle === 'Otro') ? '<input class="multisteps-form__input form-control form-control-sm" type="text" placeholder="Otro" name="" id="" required />' : data[i].detalle
                    
                    html += `<tr>
                                <td class="text-center"><p class="text-xs font-weight-bold mb-0">${(i+1)}</p></td>
                                <td><p class="text-xs font-weight-bold mb-0">${detalle}</p></td>
                                <td>
                                    <select class="multisteps-form__input form-control form-control-sm w-100" id="" name="" required>
                                        <option value="" selected disabled>.: Seleccione (Si/No) :.</option>
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="multisteps-form__input form-control form-control-sm w-100" id="" name="" required>
                                        <option value="" selected disabled>.: Seleccione opción :.</option>
                                        <option value="0">Nunca</option>
                                        <option value="1">Diario</option>
                                        <option value="2">Semanal</option>
                                        <option value="3">Mensual</option>
                                    </select>
                                </td>
                                <td>
                                    <input class="multisteps-form__input form-control form-control-sm w-75" type="number" value="0" placeholder="0" name="" id="" readonly required />
                                </td>
                                <td>
                                    <input class="multisteps-form__input form-control form-control-sm w-75" type="number" value="0" placeholder="0" name="" id="" readonly required />
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
        sw_alert().ok('Guardado!')
        location.reload()
    },
    save: () => {
        let formValido = true
        let msje = ''
        $('#form-inst-01').find('input, select').each(function(){
            if ($(this).val() === '') {
                formValido = false
                return false
            }
        })

        if (formValido) {

            Swal.fire({
                icon: 'question',
                title: "¿Guardar la información?",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "Guardar",
                denyButtonText: `Cancelar`
            }).then((result) => {
                if (result.isConfirmed) {
                    //Swal.fire("Saved!", "", "success");
                    instrumento_01().send_data()
                } else if (result.isDenied) {
                    //* Swal.fire("Changes are not saved", "", "info")
                    console.log('INST-01: Cancelado')
                }
            })
            
            msje = 'El formulario está listo para ser enviado.'
            sw_alert().ok(msje)
        } else {
            msje = 'Por favor, complete todos los campos del formulario.'
            sw_alert().warning(msje)
        }
        
        /**/
    }
})