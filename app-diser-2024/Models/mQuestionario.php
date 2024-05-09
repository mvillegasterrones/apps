<?php
class mQuestionario
{
    private $conexion;
    public function __construct()
    {
        require_once('conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function get_preguntos_inst_01($instrumento)
    {
        $sql = "SELECT * FROM tbl_questionario WHERE instrumento = '$instrumento'";
        $this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo    = array();
		while ($re  = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
    }

    function set_instrumento_01($id,$action,$cod_mod,$txt_est_apellidos,$txt_est_nombres,$txt_est_edad,$txt_est_sexo,$txt_est_etnica,$txt_est_residente,$txt_est_findesemana,$txt_mes_reporte,$txt_desayuno,$txt_almuerzo,$txt_cena,$txt_refrigerio_1,$txt_refrigerio_2,$sel_opc_1,$sel_opc_2_1,$txt_valor_1,$txt_valor_2_1,$sel_opc_2,$sel_opc_2_2,$txt_valor_2,$txt_valor_2_2,$sel_opc_3,$sel_opc_2_3,$txt_valor_3,$txt_valor_2_3,$sel_opc_4,$sel_opc_2_4,$txt_valor_4,$txt_valor_2_4,$sel_opc_5,$sel_opc_2_5,$txt_valor_5,$txt_valor_2_5,$sel_opc_6,$sel_opc_2_6,$txt_valor_6,$txt_valor_2_6,$sel_opc_7,$sel_opc_2_7,$txt_valor_7,$txt_valor_2_7,$sel_opc_8,$sel_opc_2_8,$txt_valor_8,$txt_valor_2_8,$sel_opc_9,$sel_opc_2_9,$txt_valor_9,$txt_valor_2_9,$sel_opc_10,$sel_opc_2_10,$txt_valor_10,$txt_valor_2_10,$sel_opc_11,$sel_opc_2_11,$txt_valor_11,$txt_valor_2_11,$sel_opc_12,$sel_opc_2_12,$txt_valor_12,$txt_valor_2_12,$sel_opc_13,$sel_opc_2_13,$txt_valor_13,$txt_valor_2_13,$sel_opc_14,$sel_opc_2_14,$txt_valor_14,$txt_valor_2_14,$sel_opc_15,$sel_opc_2_15,$txt_valor_15,$txt_valor_2_15,$sel_opc_16,$sel_opc_2_16,$txt_valor_16,$txt_valor_2_16,$sel_opc_17,$sel_opc_2_17,$txt_valor_17,$txt_valor_2_17,$sel_opc_18,$sel_opc_2_18,$txt_valor_18,$txt_valor_2_18,$sel_opc_19,$sel_opc_2_19,$txt_valor_19,$txt_valor_2_19,$sel_opc_20,$sel_opc_2_20,$txt_valor_20,$txt_valor_2_20,$sel_opc_21,$sel_opc_2_21,$txt_valor_21,$txt_valor_2_21,$sel_opc_22,$sel_opc_2_22,$txt_valor_22,$txt_valor_2_22,$sel_opc_23,$sel_opc_2_23,$txt_valor_23,$txt_valor_2_23,$sel_opc_24,$sel_opc_2_24,$txt_valor_24,$txt_valor_2_24,$txt_otro_25,$sel_opc_25,$sel_opc_2_25,$txt_valor_25,$txt_valor_2_25,$txt_otro_26,$sel_opc_26,$sel_opc_2_26,$txt_valor_26,$txt_valor_2_26,$txt_otro_27,$sel_opc_27,$sel_opc_2_27,$txt_valor_27,$txt_valor_2_27,$txt_fecha_aplicacion)
    {
        $sql = "INSERT INTO tbl_instrumento_01 VALUES('$id','$action','$cod_mod','$txt_est_apellidos','$txt_est_nombres','$txt_est_edad','$txt_est_sexo','$txt_est_etnica','$txt_est_residente','$txt_est_findesemana','$txt_mes_reporte','$txt_desayuno','$txt_almuerzo','$txt_cena','$txt_refrigerio_1','$txt_refrigerio_2','$sel_opc_1','$sel_opc_2_1','$txt_valor_1','$txt_valor_2_1','$sel_opc_2','$sel_opc_2_2','$txt_valor_2','$txt_valor_2_2','$sel_opc_3','$sel_opc_2_3','$txt_valor_3','$txt_valor_2_3','$sel_opc_4','$sel_opc_2_4','$txt_valor_4','$txt_valor_2_4','$sel_opc_5','$sel_opc_2_5','$txt_valor_5','$txt_valor_2_5','$sel_opc_6','$sel_opc_2_6','$txt_valor_6','$txt_valor_2_6','$sel_opc_7','$sel_opc_2_7','$txt_valor_7','$txt_valor_2_7','$sel_opc_8','$sel_opc_2_8','$txt_valor_8','$txt_valor_2_8','$sel_opc_9','$sel_opc_2_9','$txt_valor_9','$txt_valor_2_9','$sel_opc_10','$sel_opc_2_10','$txt_valor_10','$txt_valor_2_10','$sel_opc_11','$sel_opc_2_11','$txt_valor_11','$txt_valor_2_11','$sel_opc_12','$sel_opc_2_12','$txt_valor_12','$txt_valor_2_12','$sel_opc_13','$sel_opc_2_13','$txt_valor_13','$txt_valor_2_13','$sel_opc_14','$sel_opc_2_14','$txt_valor_14','$txt_valor_2_14','$sel_opc_15','$sel_opc_2_15','$txt_valor_15','$txt_valor_2_15','$sel_opc_16','$sel_opc_2_16','$txt_valor_16','$txt_valor_2_16','$sel_opc_17','$sel_opc_2_17','$txt_valor_17','$txt_valor_2_17','$sel_opc_18','$sel_opc_2_18','$txt_valor_18','$txt_valor_2_18','$sel_opc_19','$sel_opc_2_19','$txt_valor_19','$txt_valor_2_19','$sel_opc_20','$sel_opc_2_20','$txt_valor_20','$txt_valor_2_20','$sel_opc_21','$sel_opc_2_21','$txt_valor_21','$txt_valor_2_21','$sel_opc_22','$sel_opc_2_22','$txt_valor_22','$txt_valor_2_22','$sel_opc_23','$sel_opc_2_23','$txt_valor_23','$txt_valor_2_23','$sel_opc_24','$sel_opc_2_24','$txt_valor_24','$txt_valor_2_24','$txt_otro_25','$sel_opc_25','$sel_opc_2_25','$txt_valor_25','$txt_valor_2_25','$txt_otro_26','$sel_opc_26','$sel_opc_2_26','$txt_valor_26','$txt_valor_2_26','$txt_otro_27','$sel_opc_27','$sel_opc_2_27','$txt_valor_27','$txt_valor_2_27','$txt_fecha_aplicacion')";
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

/*

-- Active: 1707943466227@@127.0.0.1@3306@app_diser
drop table tbl_instrumento_01
-- Active: 1707943466227@@127.0.0.1@3306@app_diser
CREATE TABLE tbl_instrumento_01(
id INT AUTO_INCREMENT PRIMARY KEY,
action VARCHAR(100),
cod_mod VARCHAR(10),
txt_est_apellidos VARCHAR(100),
txt_est_nombres VARCHAR(100),
txt_est_edad TINYINT(2),
txt_est_sexo CHAR(10),
txt_est_etnica VARCHAR(100),
txt_est_residente CHAR(2),
txt_est_findesemana CHAR(2),
txt_mes_reporte VARCHAR(30),
txt_desayuno TINYINT(1),
txt_almuerzo TINYINT(1),
txt_cena TINYINT(1),
txt_refrigerio_1 TINYINT(1),
txt_refrigerio_2 TINYINT(1),
sel_opc_1 TINYINT(1),
sel_opc_2_1 TINYINT(1),
txt_valor_1 TINYINT(2),
txt_valor_2_1 TINYINT(2),
sel_opc_2 TINYINT(1),
sel_opc_2_2 TINYINT(1),
txt_valor_2 TINYINT(2),
txt_valor_2_2 TINYINT(2),
sel_opc_3 TINYINT(1),
sel_opc_2_3 TINYINT(1),
txt_valor_3 TINYINT(2),
txt_valor_2_3 TINYINT(2),
sel_opc_4 TINYINT(1),
sel_opc_2_4 TINYINT(1),
txt_valor_4 TINYINT(2),
txt_valor_2_4 TINYINT(2),
sel_opc_5 TINYINT(1),
sel_opc_2_5 TINYINT(1),
txt_valor_5 TINYINT(2),
txt_valor_2_5 TINYINT(2),
sel_opc_6 TINYINT(1),
sel_opc_2_6 TINYINT(1),
txt_valor_6 TINYINT(2),
txt_valor_2_6 TINYINT(2),
sel_opc_7 TINYINT(1),
sel_opc_2_7 TINYINT(1),
txt_valor_7 TINYINT(2),
txt_valor_2_7 TINYINT(2),
sel_opc_8 TINYINT(1),
sel_opc_2_8 TINYINT(1),
txt_valor_8 TINYINT(2),
txt_valor_2_8 TINYINT(2),
sel_opc_9 TINYINT(1),
sel_opc_2_9 TINYINT(1),
txt_valor_9 TINYINT(2),
txt_valor_2_9 TINYINT(2),
sel_opc_10 TINYINT(1),
sel_opc_2_10 TINYINT(1),
txt_valor_10 TINYINT(2),
txt_valor_2_10 TINYINT(2),
sel_opc_11 TINYINT(1),
sel_opc_2_11 TINYINT(1),
txt_valor_11 TINYINT(2),
txt_valor_2_11 TINYINT(2),
sel_opc_12 TINYINT(1),
sel_opc_2_12 TINYINT(1),
txt_valor_12 TINYINT(2),
txt_valor_2_12 TINYINT(2),
sel_opc_13 TINYINT(1),
sel_opc_2_13 TINYINT(1),
txt_valor_13 TINYINT(2),
txt_valor_2_13 TINYINT(2),
sel_opc_14 TINYINT(1),
sel_opc_2_14 TINYINT(1),
txt_valor_14 TINYINT(2),
txt_valor_2_14 TINYINT(2),
sel_opc_15 TINYINT(1),
sel_opc_2_15 TINYINT(1),
txt_valor_15 TINYINT(2),
txt_valor_2_15 TINYINT(2),
sel_opc_16 TINYINT(1),
sel_opc_2_16 TINYINT(1),
txt_valor_16 TINYINT(2),
txt_valor_2_16 TINYINT(2),
sel_opc_17 TINYINT(1),
sel_opc_2_17 TINYINT(1),
txt_valor_17 TINYINT(2),
txt_valor_2_17 TINYINT(2),
sel_opc_18 TINYINT(1),
sel_opc_2_18 TINYINT(1),
txt_valor_18 TINYINT(2),
txt_valor_2_18 TINYINT(2),
sel_opc_19 TINYINT(1),
sel_opc_2_19 TINYINT(1),
txt_valor_19 TINYINT(2),
txt_valor_2_19 TINYINT(2),
sel_opc_20 TINYINT(1),
sel_opc_2_20 TINYINT(1),
txt_valor_20 TINYINT(2),
txt_valor_2_20 TINYINT(2),
sel_opc_21 TINYINT(1),
sel_opc_2_21 TINYINT(1),
txt_valor_21 TINYINT(2),
txt_valor_2_21 TINYINT(2),
sel_opc_22 TINYINT(1),
sel_opc_2_22 TINYINT(1),
txt_valor_22 TINYINT(2),
txt_valor_2_22 TINYINT(2),
sel_opc_23 TINYINT(1),
sel_opc_2_23 TINYINT(1),
txt_valor_23 TINYINT(2),
txt_valor_2_23 TINYINT(2),
sel_opc_24 TINYINT(1),
sel_opc_2_24 TINYINT(1),
txt_valor_24 TINYINT(2),
txt_valor_2_24 TINYINT(2),
txt_otro_25 VARCHAR(100),
sel_opc_25 TINYINT(1),
sel_opc_2_25 TINYINT(1),
txt_valor_25 TINYINT(2),
txt_valor_2_25 TINYINT(2),
txt_otro_26 VARCHAR(100),
sel_opc_26 TINYINT(1),
sel_opc_2_26 TINYINT(1),
txt_valor_26 TINYINT(2),
txt_valor_2_26 TINYINT(2),
txt_otro_27 VARCHAR(100),
sel_opc_27 TINYINT(1),
sel_opc_2_27 TINYINT(1),
txt_valor_27 TINYINT(2),
txt_valor_2_27 TINYINT(2),
txt_fecha_aplicacion VARCHAR(20)
)engine innodb;


INSERT INTO tbl_instrumento_01 VALUES('0','set-instrumento-01','1234567','villegas terrones','manuel antonio','32','Hombre','Castellano','Si','No','Mayo 2024','1','2','3','4','2','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','2','0','0','0','-','2','0','0','0','-','2','0','0','0','-','2','0','0','0','2024-05-09')

*/