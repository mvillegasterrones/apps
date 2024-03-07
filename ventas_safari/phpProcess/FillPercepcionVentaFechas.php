<?php
include '../js/Querys.php';
$q=new Querys();

session_start();
$emp= $_SESSION['id_empresa'];

$td=$_GET['des'];
$th=$_GET['has'];

$q->PercepcionVentaFillTblFechas($emp,$td, $th);

?>
