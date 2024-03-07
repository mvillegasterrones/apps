<?php
include '../js/Querys.php';
$q=new Querys();

$td=$_GET['des'];
$th=$_GET['has'];

$q->RegPedidosFillTblFechas($td, $th);

?>
