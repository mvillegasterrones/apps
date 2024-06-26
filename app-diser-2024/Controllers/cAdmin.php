<?php
session_start();
require_once '../Models/mAdmin.php';
$instancia = new mAdmin();
$accion = $_POST['action'];
switch ($accion) {
    case 'get-admin-totales-instrumentos':
        $ejecutar = $instancia->get_admin_instrumentos();
        echo json_encode($ejecutar);
        break;
    case 'get-chart-total-reports':
        $ejecutar = $instancia->get_chart_total_reports();
        echo json_encode($ejecutar);
        break;
    default:
        break;
}