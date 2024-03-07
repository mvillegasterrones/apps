<?php
include '../js/Querys.php';
$q=new Querys();

session_start();
$emp= $_SESSION['id_empresa'];

$tCli=$_POST['cli'];

$q->FiltrarDespachosTiendaCliente($emp,$tCli);

?>
