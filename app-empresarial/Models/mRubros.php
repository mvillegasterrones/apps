<?php
class mRubros
{
    private $conexion;
    public function __construct()
    {
        require_once('conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function set_rubro($id, $rubro_icono, $rubro_name, $rurbo_descripcion, $rubro_imagen)
	{
		$sql = "CALL sp_v1_set_rubro($id, '$rubro_icono', '$rubro_name', '$rurbo_descripcion', '$rubro_imagen')";
		$this->conexion->conexion->set_charset('utf8');
		if ($this->conexion->conexion->query($sql)) {
			$this->conexion->cerrar();
			return true;
		} else {
			$this->conexion->cerrar();
			return false;
		}
	}

    function rubros_get_list()
    {
        $sql = "CALL get_rubros_list()";
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