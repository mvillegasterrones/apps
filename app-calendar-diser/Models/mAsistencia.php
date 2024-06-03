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

    function get_reporte_chart_region($idAsistencia)
    {
        $sql = "CALL sp_v1_get_reporte_chart_region($idAsistencia)";
        $this->conexion->conexion->set_charset('utf8');
        $resultados = $this->conexion->conexion->query($sql);
        $arreglo = array();
        while ($re = $resultados->fetch_array(MYSQLI_BOTH)) {
            $arreglo[] = $re;
        }
        $this->conexion->cerrar();
        return $arreglo;
    }

    function get_reporte_chart_cargo($idAsistencia)
    {
        $sql = "CALL sp_v1_get_reporte_chart_cargo($idAsistencia)";
        $this->conexion->conexion->set_charset('utf8');
        $resultados = $this->conexion->conexion->query($sql);
        $arreglo = array();
        while ($re = $resultados->fetch_array(MYSQLI_BOTH)) {
            $arreglo[] = $re;
        }
        $this->conexion->cerrar();
        return $arreglo;
    }

    function get_reporte_asistencia($idAsistencia)
    {
        $sql = "SELECT * FROM tbl_asistencia WHERE idAsistencia = '$idAsistencia'";
        $this->conexion->conexion->set_charset('utf8');
        $resultados = $this->conexion->conexion->query($sql);
        $arreglo = array();
        while ($re = $resultados->fetch_array(MYSQLI_BOTH)) {
            $arreglo[] = $re;
        }
        $this->conexion->cerrar();
        return $arreglo;
    }

    function save_registro_asistencia($idAsistencia, $action, $seleccione_dre, $seleccione_ugel, $seleccione_cargo, $cod_mod, $dni, $apellidos_nombres, $correo, $celular)
    {
        $sql = "CALL sp_v1_save_registro_asistencia('$idAsistencia', '$action', '$seleccione_dre', '$seleccione_ugel', '$seleccione_cargo', '$cod_mod', '$dni', '$apellidos_nombres', '$correo', '$celular')";
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