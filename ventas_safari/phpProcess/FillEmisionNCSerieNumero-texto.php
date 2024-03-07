<?php
include '../js/Querys.php';
$q=new Querys();

session_start();
$emp= $_SESSION['id_empresa'];

$tSP=$_GET['sp'];
$tSer=$_GET['ser'];
$tNum=$_GET['num'];

$q->EmisionNCFSerieNumero_texto($emp,$tSP,$tSer,$tNum);

?>
