<?php
include '../js/Querys.php';
$q=new Querys();

$tSP=$_GET['sp'];
$tSer=$_GET['ser'];
$tNum=$_GET['num'];

$q->RegPedidosFillTblSerieNumero_tienda($tSP,$tSer,$tNum);

?>
