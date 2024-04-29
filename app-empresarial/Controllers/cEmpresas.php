<?php
require_once '../Models/mEmpresas.php';
$instancia = new mEmpresas();
$accion    = $_POST['action'];
session_start();
switch ($accion) {
    case 'empresas-get-list':
        $nameRubro = $_POST['nameRubro'];
        $ejecutar = $instancia->empresas_get_list($nameRubro);
        echo json_encode($ejecutar);
        break;
    default:
        break;
}