<?php
include 'conex.php';
include 'getTC.php';
$x=new getTC();

$zn=$_POST['fecha'];

$x->getZONA($zn);

?>

