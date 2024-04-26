<?php
class mUser
{
    private $conexion;
    public function __construct()
    {
        require_once('conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function get_users_list()
    {
        $sql = "SELECT * FROM tbl_usuario";
        $this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo    = array();
		while ($re  = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
    }

    function set_login($usuario, $password)
    {
        $sql = "CALL sp_v1_set_login('$usuario', '$password');";
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