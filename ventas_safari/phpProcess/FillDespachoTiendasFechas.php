<?php
include '../js/Querys.php';
$q=new Querys();

session_start();
$emp= $_SESSION['id_empresa'];

$td=$_POST['des'];
$th=$_POST['has'];

$q->FiltrarDespachosTiendaFechas($emp,$td, $th);

?>
