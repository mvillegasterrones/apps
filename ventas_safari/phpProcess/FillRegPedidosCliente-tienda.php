<?php
include '../js/Querys.php';
$q=new Querys();

$tCli=$_GET['cli'];

$q->RegPedidosFillTblCliente_tienda($tCli);

?>
