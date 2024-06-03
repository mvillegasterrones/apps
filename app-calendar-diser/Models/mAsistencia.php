<?php
class mAsistencia
{
	private $conexion;
	public function __construct()
	{
		require_once ('conexion.php');
		$this->conexion = new conexion();
		$this->conexion->conectar();
	}

    function get_ugel_by_dre($dre)
	{
		$sql = "CALL sp_v1_get_ugel_by_dre('$dre')";
		$this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo = array();
		while ($re = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
	}

    function save_registro_asistencia($id, $action, $seleccione_dre, $seleccione_ugel, $seleccione_cargo, $cod_mod, $dni, $apellidos_nombres, $correo)
	{
		$sql = "INSERT INTO tbl_asistencia VALUES ('$id', '$action', '$seleccione_dre', '$seleccione_ugel', '$seleccione_cargo', '$cod_mod', '$dni', '$apellidos_nombres', '$correo')";
		$this->conexion->conexion->set_charset('utf8');
		if ($this->conexion->conexion->query($sql)) {
			$this->conexion->cerrar();
			return true;
		} else {
			$this->conexion->cerrar();
			return false;
		}
	}

}