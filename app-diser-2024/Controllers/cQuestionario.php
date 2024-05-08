<?php
require_once '../Models/mQuestionario.php';
$instancia = new mQuestionario();
$accion    = $_POST['action'];
session_start();
switch ($accion) {
    case 'get-preguntas-inst-01':
        $instrumento = $_POST['instrumento'];
        $ejecutar = $instancia->get_preguntas_inst_01($instrumento);
        echo json_encode($ejecutar);
        break;
    default:
        break;
}