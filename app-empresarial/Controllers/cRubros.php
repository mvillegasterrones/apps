<?php
require_once '../Models/mRubros.php';
$instancia = new mRubros();
$accion    = $_POST['action'];
session_start();
switch ($accion) {
    case 'set-rubro':
        $id                = $_POST['id'];
        $rubro_icono       = $_POST['rubro-icono'];
        $rubro_name        = $_POST['rubro-name'];
        $rurbo_descripcion = $_POST['rubro-descripcion'];
        $rubro_imagen      = 'assets/img/systems-logo/default-2.png';
        $ejecutar          = $instancia->set_rubro($id, $rubro_icono, $rubro_name, $rurbo_descripcion, $rubro_imagen);
        echo json_encode($ejecutar);
        break;
    case 'rubros-get-list':
        $ejecutar = $instancia->rubros_get_list();
        echo json_encode($ejecutar);
        break;
    default:
        break;
}