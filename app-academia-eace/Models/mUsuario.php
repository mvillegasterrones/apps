<?php
class mUsuario
{
    private $conexion;
    public function __construct()
    {
        require_once('conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function open_video_sourse($id)
    {
        $sql = "SELECT * FROM tbl_curso WHERE id=$id";
        $this->conexion->conexion->set_charset('utf8');
        $resultados = $this->conexion->conexion->query($sql);
        $arreglo    = array();
        while ($re  = $resultados->fetch_array(MYSQLI_BOTH)) {
            $arreglo[] = $re;
        }
        $this->conexion->cerrar();
        return $arreglo;
    }

    function sp_register_user($r_dni, $r_apellidos_nombres, $r_correo, $r_password, $r_celular, $r_codigo)
    {
        $sql = "CALL sp_register_user('$r_dni', '$r_apellidos_nombres', '$r_correo', '$r_password', '$r_celular', '$r_codigo')";
        $this->conexion->conexion->set_charset('utf8');
        if ($this->conexion->conexion->query($sql)) {
            $this->conexion->cerrar();
            return true;
        } else {
            $this->conexion->cerrar();
            return false;
        }
    }

    function sp_update_info_user_by_ID($id, $curso_1)
    {
        $sql = "UPDATE tbl_usuario SET reg_curso_1 = '$curso_1' WHERE id=$id";
        $this->conexion->conexion->set_charset('utf8');
        if ($this->conexion->conexion->query($sql)) {
            $this->conexion->cerrar();
            return true;
        } else {
            $this->conexion->cerrar();
            return false;
        }
    }

    function sp_get_info_user_by_ID($id)
    {
        $sql = "SELECT * FROM tbl_usuario WHERE id=$id";
        $this->conexion->conexion->set_charset('utf8');
        $resultados = $this->conexion->conexion->query($sql);
        $arreglo    = array();
        while ($re  = $resultados->fetch_array(MYSQLI_BOTH)) {
            $arreglo[] = $re;
        }
        $this->conexion->cerrar();
        return $arreglo;
    }

    function sp_load_users_list()
    {
        $sql = "SELECT * FROM tbl_usuario WHERE id>1";
        $this->conexion->conexion->set_charset('utf8');
        $resultados = $this->conexion->conexion->query($sql);
        $arreglo    = array();
        while ($re  = $resultados->fetch_array(MYSQLI_BOTH)) {
            $arreglo[] = $re;
        }
        $this->conexion->cerrar();
        return $arreglo;
    }
    function sp_login($correo, $password)
    {
        $sql = "CALL sp_login('$correo', '$password');";
        $this->conexion->conexion->set_charset('utf8');
        $resulatdos = $this->conexion->conexion->query($sql);
        if ($resulatdos->num_rows > 0) {
            $r = $resulatdos->fetch_array();
        } else {
            $r[0] = 0;
        }
        $this->conexion->cerrar();
        return $r;
    }
}