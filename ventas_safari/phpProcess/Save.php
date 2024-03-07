<?php

class Save{
    
    function __construct() {
        $con = mysql_connect('localhost','root','')or die('Error en Conexion a la DB');
        mysql_select_db('dbsistema',$con);
    }

    
    function SaveCab($tdoc,$ser,$num,$tc,$dm,$clie,$di,$mon,$vend,$obs,$t12, $t13, $t14,$t15, $t16, $t17,$t18, $t19,$t20,$t21,$t22,$t23){
        $numero = $ser.$num;
        session_start();
        $emp=$_SESSION['id_empresa'];
        $sql= ("CALL insertar_proforma('$emp','$tdoc','$numero','$tc','$dm','$clie','$di','$mon','$vend','$obs','$t12', '$t13', '$t14','$t15', '$t16', '$t17','$t18', '$t19','$t20','$t21','$t22','$t23')");
        $r=mysql_query($sql) or die ("Error: " . mysql_error());
    }
    
    function SaveCabGuiaPedidoCentral($t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$t10,$t11,$t12, $t13, $t14,$t15, $t16, $t17,$t18, $t19,$t20){
        $numero = $t2.$t3;
        session_start();
        $emp=$_SESSION['id_empresa'];
        $sql= ("CALL insertar_guiaPedido('$emp','$t1','$numero','$t4','$t5','$t6','$t7','$t8','$t9','$t10','$t11','$t12','$t13','$t14','$t15','$t16','$t17','$t18','$t19','$t20')");
        $r=mysql_query($sql) or die ("Error: " . mysql_error());
    }
    
}
?>