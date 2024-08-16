<?php
require_once '../Models/mUsuario.php';
$instancia = new mUsuario();
$accion = $_POST['accion'];
//session_start();
switch ($accion) {
    case 'open_video_sourse':
        $id = $_POST['id'];
        $ejecutar = $instancia->open_video_sourse($id);
        echo json_encode($ejecutar);
        break;
    default:
        break;
}