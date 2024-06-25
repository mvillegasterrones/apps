<?php
session_start();
require_once '../Models/mAdmin.php';
$instancia = new mAdmin();
$accion = $_POST['action'];
switch ($accion) {
    case 'get-chart-total-reports':
        $ejecutar = $instancia->get_chart_total_reports();
        echo json_encode($ejecutar);
        break;
    default:
        break;
}