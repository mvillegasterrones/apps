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
            $_SESSION['acceso']        = 'YES';
            $_SESSION['cod_mod']       = $array['cod_mod'];
            $_SESSION['anexo']       = $array['anexo'];
            $_SESSION['codlocal']       = $array['codlocal'];
            $_SESSION['nv_educativo']  = $array['nivel_educativo'];
            $_SESSION['nombre_ie']     = $array['nombre_ie'];
            $_SESSION['ubicacion']     = $array['d_region'].' / '.$array['d_prov'].' / '.$array['d_dist'];
            $_SESSION['cen_pob']     = $array['cen_pob'];
            $_SESSION['d_dreugel']     = $array['d_dreugel'];
            echo '1';
        }
        break;
    default:
        break;
}