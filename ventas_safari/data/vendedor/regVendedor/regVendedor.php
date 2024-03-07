
<?php

class regVendedor {
    
    function __construct(){
        $con = mysql_connect('localhost','root','')or die('Error en Conexion a la DB');
        mysql_select_db('dbsistema',$con);
    }
    function getVendedor($vend_nomb){
        $r=  mysql_query("SELECT usua_id FROM usuarios WHERE usua_nomb like concat('%','$vend_nomb','%')")  or die('error en consulta');   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['usua_id'];
	}
	echo $cr;
    }        
}

?>