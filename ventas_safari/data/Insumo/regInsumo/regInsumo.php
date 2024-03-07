
<?php

class regInsumo {
    
    function __construct(){
        //include '../cnn_her.php';
        $con = mysql_connect('localhost','root','')or die('Error en Conexion a la DB');
        mysql_select_db('dbsistema',$con);
    }
    function getInsumoCodigo($insu_nomb){
        $r=  mysql_query("CALL obtener_codigo('$insu_nomb')")  or die('error en consulta '.  mysql_error());   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['insu_codalterno'];
	}
	echo $cr;
    }
    function getInsumoSTK1($insu_nomb){
        $r=  mysql_query("CALL obtener_st1('$insu_nomb')")  or die('error en consulta '.  mysql_error());   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['cant1'];
	}
        echo $cr;
    
    }
    function getInsumoSTK2($insu_nomb){
        $r=  mysql_query("CALL obtener_st2('$insu_nomb')")  or die('error en consulta '.  mysql_error());   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['cant1'];
	}
        echo $cr;
    
    }
 
    function getInsumoSTK3($insu_nomb){
        $r=  mysql_query("CALL obtener_st3('$insu_nomb')")  or die('error en consulta '.  mysql_error());   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['cant1'];
	}
        echo $cr;
    
    }
    
    function getInsumoSTK4($insu_nomb){
        $r=  mysql_query("CALL obtener_st4('$insu_nomb')")  or die('error en consulta '.  mysql_error());   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['cant1'];
	}
        echo $cr;
    
    }
    
    function getInsumoSTK5($insu_nomb){
        $r=  mysql_query("CALL obtener_st5('$insu_nomb')")  or die('error en consulta '.  mysql_error());   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['cant1'];
	}
        echo $cr;
    
    }
    
    function getInsumoSTK6($insu_nomb){
        $r=  mysql_query("CALL obtener_st6('$insu_nomb')")  or die('error en consulta '.  mysql_error());   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['cant1'];
	}
        echo $cr;
    
    }
    
    function getInsumoPrecTda($insu_nomb){
        $r=  mysql_query("CALL obtener_PPrecVta('$insu_nomb')")  or die('error en consulta '.  mysql_error());   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['insu_prectienda'];
	}
        echo $cr;
    
    }
    
    function getInsumoPorcVta($insu_nomb){
        $r=  mysql_query("CALL obtener_PorcVta('$insu_nomb')")  or die('error en consulta '.  mysql_error());   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['insu_porcpromo'];
	}
        echo $cr;
    
    }
    
    function getInsumoPrecVta1($insu_nomb){
        $r=  mysql_query("CALL obtener_PPrecVta1('$insu_nomb')")  or die('error en consulta '.  mysql_error());   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['insu_precventa'];
	}
        echo $cr;
    
    }
    
  }
?>