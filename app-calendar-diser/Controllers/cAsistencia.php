<?php
session_start();
require_once '../Models/mAsistencia.php';
$instancia = new mAsistencia();
$accion = $_POST['action'];
switch ($accion) {
    case 'get-reporte-chart-region':
        $idAsistencia = $_POST['id'];
        $ejecutar     = $instancia->get_reporte_chart_region($idAsistencia);
        echo json_encode($ejecutar);
        break;
    case 'get-reporte-chart-cargo':
        $idAsistencia = $_POST['id'];
        $ejecutar     = $instancia->get_reporte_chart_cargo($idAsistencia);
        echo json_encode($ejecutar);
        break;
    case 'get-reporte-asistencia':
        $idAsistencia = $_POST['id'];
        $ejecutar     = $instancia->get_reporte_asistencia($idAsistencia);
        echo json_encode($ejecutar);
        break;
    case 'save-registro-asistencia':
        $id                = $_POST['id'];
        $idAsistencia      = $_POST['idAsistencia'];
        $action            = $_POST['action'];
        $seleccione_dre    = $_POST['seleccione_dre'];
        $seleccione_ugel   = $_POST['seleccione_ugel'];
        $seleccione_cargo  = $_POST['seleccione_cargo'];
        $cod_mod           = $_POST['cod_mod'];
        $dni               = $_POST['dni'];
        $apellidos_nombres = $_POST['apellidos_nombres'];
        $correo            = $_POST['correo'];
        $celular           = $_POST['celular'];
        $ejecutar          = $instancia->save_registro_asistencia($idAsistencia, $action, $seleccione_dre, $seleccione_ugel, $seleccione_cargo, $cod_mod, $dni, $apellidos_nombres, $correo, $celular);
        echo json_encode($ejecutar);
        break;
    default:
        break;
}
