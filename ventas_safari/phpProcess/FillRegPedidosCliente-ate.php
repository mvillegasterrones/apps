<?php
include '../js/Querys.php';
$q=new Querys();

session_start();
$emp= $_SESSION['id_empresa'];

$tCli=$_GET['cli'];

$q->RegPedidosFillTblCliente_ate($emp,$tCli);

?>
