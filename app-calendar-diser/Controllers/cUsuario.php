<?php
require_once '../Models/mUsuario.php';
$instancia = new mUsuario();
$accion    = $_POST['action'];
session_start();
switch ($accion) {
    case 'get-users-list':
        /*$ejecutar = $instancia->get_users_list();
        echo json_encode($ejecutar);*/
        break;
    case 'set-logout':
        session_destroy();
        break;
    case 'set-login':
        $cod_mod  = $_POST['cod_mod'];
        $array    = $instancia->set_login($cod_mod);
        if ($array[0] == 0) {
            echo '0';
        } else {
            $_SESSION['acceso']       = 'YES';
            $_SESSION['user_rol']     = $array['user_rol'];
            $_SESSION['area_min']     = $array['area_min'];
            $_SESSION['area_nombre']  = $array['area_nombre'];
            $_SESSION['datos']        = $array['user_apellidos'] .', '. $array['user_nombre'];
            echo '1';
        }
        break;
    default:
        break;
}