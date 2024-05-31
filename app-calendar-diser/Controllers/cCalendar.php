<?php
session_start();
require_once '../Models/mCalendar.php';
$instancia = new mCalendar();
$accion = $_POST['action'];
switch ($accion) {
    case 'get-ugel-by-dre':
        $dre = $_POST['dre'];
        $ejecutar = $instancia->get_ugel_by_dre($dre);
        echo json_encode($ejecutar);
        break;
    case 'get-dre':
        $ejecutar = $instancia->get_dre();
        echo json_encode($ejecutar);
        break;
    case 'update-event':
        $id = $_POST['id'];
        $new_start = $_POST['new_start'];
        $new_end   = $_POST['new_end'];
        $ejecutar  = $instancia->update_event($id, $new_start, $new_end);
        echo json_encode($ejecutar);
        break;
    case 'get-events-recents':
        $ejecutar = $instancia->get_events_recents();
        echo json_encode($ejecutar);
        break;
    case 'get-events':
        $ejecutar = $instancia->get_events();
        echo json_encode($ejecutar);
        break;
    case 'save-event':
        $id = $_POST['id'];
        $cal_idArea            = $_POST['cal_idArea'];
        $cal_tipo_programa     = $_POST['cal_tipo_programa'];
        $cal_nombre_programa   = $_POST['cal_nombre_programa'];
        $cal_descripcion_programa = $_POST['cal_descripcion_programa'];
        $cal_agenda            = $_POST['cal_agenda'];
        $cal_modalidad         = $_POST['cal_modalidad'];
        $cal_cobertura         = $_POST['cal_cobertura'];
        $cal_regiones          = $_POST['cal_regiones'];
        $cal_ugel              = $_POST['cal_ugel'];
        $cal_participantes     = $_POST['cal_participantes'];
        $cal_nro_participantes = $_POST['cal_nro_participantes'];
        $cal_fecha_inicio      = $_POST['cal_fecha_inicio'];
        $cal_fecha_fin         = $_POST['cal_fecha_fin'];
        $cal_link_reunion      = $_POST['cal_link_reunion'];
        $cal_link_asistencia   = $_POST['cal_link_asistencia'];

        $ejecutar = $instancia->save_event($id, $cal_idArea, $cal_tipo_programa, $cal_nombre_programa, $cal_descripcion_programa, $cal_agenda, $cal_modalidad, $cal_cobertura, $cal_regiones, $cal_ugel, $cal_participantes, $cal_nro_participantes, $cal_fecha_inicio, $cal_fecha_fin, $cal_link_reunion, $cal_link_asistencia);
        echo json_encode($ejecutar);
        break;
    case 'get-areas-list':
        $ejecutar = $instancia->get_areas_list();
        echo json_encode($ejecutar);
        break;
    default:
        break;
}