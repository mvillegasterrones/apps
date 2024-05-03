<?php
require_once '../Models/mUsuario.php';
$instancia = new mUsuario();
$accion    = $_POST['action'];
session_start();
switch ($accion) {
    case 'get-users-list':
        $ejecutar = $instancia->get_users_list();
        echo json_encode($ejecutar);
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
            $_SESSION['acceso']         = 'YES';
            /*$_SESSION['user_c_rol']     = ($array['user_rol'] == 'ADMIN') ? 'primary' : 'warning';
            $_SESSION['user_rol']       = $array['user_rol'];
            $_SESSION['user_datos']     = $array['user_apellidos'].', '.$array['user_nombres'];
            $_SESSION['user_apellidos'] = $array['user_apellidos'];
            $_SESSION['user_nombres']   = $array['user_nombres'];
            $_SESSION['user_cargo']     = $array['user_cargo'];

            $_SESSION['user_documento'] = $array['user_tipodoc'] .' - '. $array['user_docidentidad'];
            $_SESSION['user_ruc']       = $array['emp_ruc'];
            $_SESSION['user_empresa']   = $array['emp_razon_social'];
            $_SESSION['user_finicio']   = $array['user_fecha_inicio'];
            
            $_SESSION['user_c_estado']  = ($array['user_estado'] == '1') ? 'success' : 'danger';
            $_SESSION['user_estado']    = ($array['user_estado'] == '1') ? 'Activo' : 'Inactivo';*/
            echo '1';
        }
        break;
    default:
        break;
}