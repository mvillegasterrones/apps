<?php

include 'inserts.php';
$x= new inserts();

session_start();
$em= $_SESSION['id_empresa'];

$td=$_GET['td'];
$ser=$_GET['ser'];
$num=$_GET['num'];
$fn=$ser.$num;
$mdv=$_GET['mdv'];
$mnd=$_GET['mnd'];
$cli=$_GET['cli'];
$vnd=$_GET['vnd'];
$us=$_GET['us'];
$impv=$_GET['impv'];
$impigv=$_GET['impigv'];
$impnet=$_GET['impnet'];
      
$x->insert_NC($em, $td, $fn, $mdv, $mnd, $cli, $vnd, $us, $impv, $impigv, $impnet)

?>