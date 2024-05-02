/*// * Empresa */
const empresa_url       = './Controllers/cEmpresas.php'
const empresa_modal_txt = '#modal-form-empresa'
const empresa_form_txt  = empresa_modal_txt + ' #form-empresa'

const empresa_modal     = $(empresa_modal_txt)
const empresa_form_send = $(empresa_form_txt).serialize()
const empresa_form      = $(empresa_form_txt)
const empresa_btn_save  = $(empresa_form_txt + ' #btn-save')
/*// * End Empresa */