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

/*

id=0&
action=save-update-inst-01&
txt-est-apellidos=a&
txt-est-nombres=a&
txt-est-edad=1&
txt-est-sexo=Hombre&
txt-est-etnica=a&
txt-est-residente=Si&
txt-est-findesemana=Si&
txt-mes-reporte=Mayo%20204&
txt-desayuno=1&
txt-almuerzo=1&txt-cena=1&txt-refrigerio-1=1&txt-refrigerio-2=1&sel-opc-1=2&txt-valor-1=0&txt-valor-2-1=0&sel-opc-2=2&txt-valor-2=0&txt-valor-2-2=0&sel-opc-3=2&txt-valor-3=0&txt-valor-2-3=0&sel-opc-4=2&txt-valor-4=0&txt-valor-2-4=0&sel-opc-5=2&txt-valor-5=0&txt-valor-2-5=0&sel-opc-6=2&txt-valor-6=0&txt-valor-2-6=0&sel-opc-7=2&txt-valor-7=0&txt-valor-2-7=0&sel-opc-8=2&txt-valor-8=0&txt-valor-2-8=0&sel-opc-9=2&txt-valor-9=0&txt-valor-2-9=0&sel-opc-10=2&txt-valor-10=0&txt-valor-2-10=0&sel-opc-11=2&txt-valor-11=0&txt-valor-2-11=0&sel-opc-12=2&txt-valor-12=0&txt-valor-2-12=0&sel-opc-13=2&txt-valor-13=0&txt-valor-2-13=0&sel-opc-14=2&txt-valor-14=0&txt-valor-2-14=0&sel-opc-15=2&txt-valor-15=0&txt-valor-2-15=0&sel-opc-16=2&txt-valor-16=0&txt-valor-2-16=0&sel-opc-17=2&txt-valor-17=0&txt-valor-2-17=0&sel-opc-18=2&txt-valor-18=0&txt-valor-2-18=0&sel-opc-19=2&txt-valor-19=0&txt-valor-2-19=0&sel-opc-20=2&txt-valor-20=0&txt-valor-2-20=0&sel-opc-21=2&txt-valor-21=0&txt-valor-2-21=0&sel-opc-22=2&txt-valor-22=0&txt-valor-2-22=0&sel-opc-23=2&txt-valor-23=0&txt-valor-2-23=0&sel-opc-24=2&txt-valor-24=0&txt-valor-2-24=0&txt-otro-25=a&sel-opc-25=2&txt-valor-25=0&txt-valor-2-25=0&txt-otro-26=a&sel-opc-26=2&txt-valor-26=0&txt-valor-2-26=0&txt-otro-27=a&sel-opc-27=2&txt-valor-27=0&txt-valor-2-27=0&txt-fecha-aplicacion=2024-05-09



 */