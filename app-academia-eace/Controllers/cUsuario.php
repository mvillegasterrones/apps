<?php
session_start();
require_once '../Models/mUsuario.php';
$instancia = new mUsuario();
$accion = $_POST['accion'];
switch ($accion) {
    case 'sp_register_user':
        $r_dni      = $_POST['reg-dni'];
        $r_apellidos_nombres = $_POST['reg-apellidos-nombres'];
        $r_correo   = $_POST['reg-correo'];
        $r_password = $_POST['reg-password'];
        $r_celular  = $_POST['reg-celular'];
        $r_codigo   = $_POST['reg-codigo'];
        $ejecutar   = $instancia->sp_register_user($r_dni, $r_apellidos_nombres, $r_correo, $r_password, $r_celular, $r_codigo);
        echo json_encode($ejecutar);
        break;
    case 'sp_update_info_user_by_ID':
        $id       = $_POST['id'];
        $curso_1  = $_POST['curso_1'];
        $ejecutar = $instancia->sp_update_info_user_by_ID($id, $curso_1);
        echo json_encode($ejecutar);
        break;
    case 'sp_get_info_user_by_ID':
        $id       = $_POST['id'];
        $ejecutar = $instancia->sp_get_info_user_by_ID($id);
        echo json_encode($ejecutar);
        break;
    case 'sp_load_users_list':
        $ejecutar = $instancia->sp_load_users_list();
        echo json_encode($ejecutar);
        break;
    case 'sp_logout':
        session_destroy();
        //header('location: ../index.php');
        //echo 'Cerrando sesion...';
        echo '1';
        break;
    case 'sp_login':
        $correo   = $_POST['correo'];
        $password = $_POST['password'];
        $array    = $instancia->sp_login($correo, $password);
        if ($array[0] == 0) {
            echo '0';
        } else {
            //session_start();
            $_SESSION['ingreso']     = 'YES';
            $_SESSION['reg_rol']     = $array['reg_rol'];
            $_SESSION['reg_datos']   = $array['reg_apellidos_nombres'];
            $_SESSION['reg_estatus'] = $array['reg_estatus'];
            # cursos, iniciamos con 03 cursos
            $_SESSION['reg_curso_1'] = $array['reg_curso_1'];
            $_SESSION['reg_curso_1'] = $array['reg_curso_1'];
            $_SESSION['reg_curso_1'] = $array['reg_curso_1'];
            echo '1';
        }
        break;
    default:
        break;
}