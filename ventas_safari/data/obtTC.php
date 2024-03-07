<?php

include 'conex.php';
include 'getTC.php';
$x=new getTC();

$fecha=$_POST['fecha'];

$x->getTCfrm($fecha);

?>

