<?php
require_once '../Models/mEmpresas.php';
$instancia = new mEmpresas();
$accion    = $_POST['action'];
session_start();
switch ($accion) {
    case 'set-empresa':
        $id               = $_POST['id'];
        $action           = $_POST['action'];
        $emp_ruc          = $_POST['emp_ruc'];
        $emp_razon_social = $_POST['emp_razon_social'];
        $emp_direccion    = $_POST['emp_direccion'];
        $emp_dpto         = $_POST['emp_dpto'];
        $emp_provincia    = $_POST['emp_provincia'];
        $emp_distrito     = $_POST['emp_distrito'];
        $emp_ubigeo       = $_POST['emp_ubigeo'];
        $emp_condicion    = $_POST['emp_condicion'];
        $emp_estado       = $_POST['emp_estado'];
        $ejecutar = $instancia->set_empresa($emp_ruc, $emp_razon_social, $emp_direccion, $emp_dpto, $emp_provincia, $emp_distrito, $emp_ubigeo, $emp_condicion, $emp_estado);
        echo json_encode($ejecutar);
        break;
    case 'get-active':
        $ejecutar = $instancia->get_active();
        echo json_encode($ejecutar);
        break;
    case 'set-status':
        $id = $_POST['idEmpresa'];
        $ejecutar = $instancia->set_status($id);
        echo json_encode($ejecutar);
        break;
    case 'empresas-get-list':
        $nameRubro = $_POST['nameRubro'];
        $ejecutar = $instancia->empresas_get_list($nameRubro);
        echo json_encode($ejecutar);
        break;
    default:
        break;
}