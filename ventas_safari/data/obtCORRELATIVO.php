<?php
include 'conex.php';
include 'getTC.php';
$x=new getTC();

session_start();
$emp=$_SESSION['id_empresa'];

$tdc=$_POST['fecha'];
$serie=$_POST['ser'];

$x->getCorrelativo($emp,$serie,$tdc);

?>

