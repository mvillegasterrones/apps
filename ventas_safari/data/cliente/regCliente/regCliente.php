
<?php

class regCliente {
    
    function __construct(){
        //include '../cnn_her.php';
        $con = mysql_connect('localhost','root','')or die('Error en Conexion a la DB');
        mysql_select_db('dbsistema',$con);
    }
    function getRucRUC($clie_nomb){
        $r=  mysql_query("SELECT clie_ruc FROM clientes WHERE clie_nomb like concat('%','$clie_nomb','%')")  or die('error en consulta');   
        while ($valor = mysql_fetch_assoc($r)){
		$cr = $valor['clie_ruc'];
	}
	echo $cr;
    }    
    
    function getDirecciones($clie_id){
        $r=  mysql_query("SELECT dirs_id, dirs_nomb FROM direcciones d
                                inner join clientes c
                                on d.clie_id=c.clie_id
                                where c.clie_nomb like concat ('%','$clie_id','%')")  or die('error en consulta');   
        while ($valor = mysql_fetch_assoc($r)){
		 $cr= "<option>".$valor['dirs_nomb']."</optioon>";
	}
	echo $cr;
    }
}

?>