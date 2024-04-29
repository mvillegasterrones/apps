const empresa_url = './Controllers/cEmpresa.php'
const data_get_list = { action: 'get-list' }

const empresa = () => ({
    get_list: () => {
        $.post( empresa_url, data_get_list, (Response) => {
            let data = eval(Response)
            let html = ''
            
            for (let i = 0; i < data.length; i++) {
                html += ``
            }
        }).fail( (xhr, status, error) => {
            console.error(xhr, status, error)
        })
    }
})