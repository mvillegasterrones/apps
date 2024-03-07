<?php
include '../js/Querys.php';
$q=new Querys();

session_start();
$emp= $_SESSION['id_empresa'];

$tPed= $_POST['ped'];
$tSer=$_POST['ser'];
$tNum=$_POST['num'];

$q->FiltrarDespachosTiendaSerieNumero($emp,$tPed,$tSer,$tNum);

?>
