<?php
include '../js/Querys.php';
$q=new Querys();

session_start();
$emp= $_SESSION['id_empresa'];

$tCli=$_GET['cli'];
$tTpDc=$_GET['tDoc'];

$q->EmisionNCCliente_texto($emp,$tCli,$tTpDc);

?>
