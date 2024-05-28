<?php
session_start();
require_once '../Models/mCalendar.php';
$instancia = new mCalendar();
$accion = $_POST['action'];
switch ($accion) {
    case 'get-areas-list':
        $ejecutar = $instancia->get_areas_list();
        echo json_encode($ejecutar);
        break;
    default:
        break;
}