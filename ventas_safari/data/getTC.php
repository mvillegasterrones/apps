<?php

class getTC{
    
    //function __construct() {
    //    $con = mysql_connect('localhost','root','')or die('Error en Conexion a la DB');
    //    mysql_select_db('dbsistema',$con);
    //}
    function getCorrelativo($em,$ser,$tpdc){
        $sql=("CALL Obtener_ultimoCorrelativo_masUno('$em','$ser','$tpdc')");
        $r=  mysql_query($sql);
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['ultimo_registro'];
	}
        echo $cr;
    }
    
    function getTiendaId($fi){
        $sql=("CALL obtener_TiendaId('$fi')");
        $r=  mysql_query($sql);
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['empr_id'];
	}
        echo $cr;
    }
    
    function getTCfrm($fi){
        $sql=("CALL obtener_TC('$fi')");
        $r=  mysql_query($sql);
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['tc_tcventa'];
	}
        echo $cr;
    }
    
    function getDSCTMAX($fi){
        $sql=("CALL obtener_DM('$fi')");
        $r=  mysql_query($sql);
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['tc_dscto'];
	}
        echo $cr;
    }
    
    function getZONA($zn){
        $sql=("CALL obtener_ZN('$zn')");
        $r=  mysql_query($sql);
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['zona_id'];
	}
        echo $cr;
    }
    function getUND($und){
        $sql=("CALL obtener_UND('$und')");
        $r=  mysql_query($sql);
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['unid_uniconsumo'];
	}
        echo $cr;
    }
    
    function getPrecPromo($insu){
        $sql=("CALL obtener_PProm('$insu')");
        $r=  mysql_query($sql);
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['insu_precpromocion'];
	}
        echo $cr;
    }
    
    function getCHFLIC($chofer){
        $sql=("CALL obtener_Licencia('$chofer')");
        $r=  mysql_query($sql);
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['chof_licen'];
	}
        echo $cr;
    }
    
    function getEmpresaSerie($empr){
        $sql=("select empr_seriedoc from empresas where empr_id ='$empr'");
        $r=  mysql_query($sql);
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['empr_seriedoc'];
	}
        echo $cr;
    }
    
}
?>

