<?php
include 'conex.php';
include 'getTC.php';
$x=new getTC();

$insu=$_POST['fecha'];

$x->getPrecPromo($insu);

?>

