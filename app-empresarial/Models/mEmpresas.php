<?php
class mEmpresas
{
    private $conexion;
    public function __construct()
    {
        require_once('conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

	function set_empresa($emp_rubro,$emp_ruc, $emp_razon_social, $emp_direccion, $emp_dpto, $emp_provincia, $emp_distrito, $emp_ubigeo, $emp_condicion, $emp_estado)
	{
		$sql = "CALL sp_v1_save_empresa('$emp_rubro', '$emp_ruc', '$emp_razon_social', '$emp_direccion', '$emp_dpto', '$emp_provincia', '$emp_distrito', '$emp_ubigeo', '$emp_condicion', '$emp_estado')";
		$this->conexion->conexion->set_charset('utf8');
		if ($this->conexion->conexion->query($sql)) {

			// Verificar si hay filas afectadas
			if ($this->conexion->conexion->affected_rows > 0) {
				$this->conexion->cerrar();
				return true; // Hay filas afectadas, la consulta se ejecutó correctamente
			} else {
				$this->conexion->cerrar();
				return 0; // No hay filas afectadas, la consulta no tuvo efecto
			}

			//$this->conexion->cerrar();
			//return true;
		} else {
			$this->conexion->cerrar();
			return false;
		}
	}

	function get_active()
    {
        $sql = "CALL sp_v1_get_active_empresa()";
        $this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo    = array();
		while ($re  = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
    }

    function set_status($id)
	{
		$sql = "CALL sp_v1_activate_empresa($id)";
		$this->conexion->conexion->set_charset('utf8');
		if ($this->conexion->conexion->query($sql)) {
			$this->conexion->cerrar();
			return true;
		} else {
			$this->conexion->cerrar();
			return false;
		}
	}

    function empresas_get_list($nameRubro)
    {
        $sql = "CALL sp_v1_empresas_get_list('$nameRubro')";
        $this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo    = array();
		while ($re  = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
    }
}