<?php
session_start();
require_once '../Models/mAsistencia.php';
$instancia = new mAsistencia();
$accion = $_POST['action'];
switch ($accion) {
    case 'save-registro-asistencia':
        $id                = $_POST['id'];
        $action            = $_POST['action'];
        $seleccione_dre    = $_POST['seleccione_dre'];
        $seleccione_ugel   = $_POST['seleccione_ugel'];
        $seleccione_cargo  = $_POST['seleccione_cargo'];
        $cod_mod           = $_POST['cod_mod'];
        $dni               = $_POST['dni'];
        $apellidos_nombres = $_POST['apellidos_nombres'];
        $correo            = $_POST['correo'];
        $ejecutar          = $instancia->save_registro_asistencia($id, $action, $seleccione_dre, $seleccione_ugel, $seleccione_cargo, $cod_mod, $dni, $apellidos_nombres, $correo);
        echo json_encode($ejecutar);
        break;
    default:
        break;
}
