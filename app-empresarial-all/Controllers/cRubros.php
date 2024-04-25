<?php
require_once '../Models/mRubros.php';
$instancia = new mRubros();
$accion    = $_POST['action'];
session_start();
switch ($accion) {
    case 'rubros-get-list':
        $ejecutar = $instancia->rubros_get_list();
        echo json_encode($ejecutar);
        break;
    default:
        break;
}