<?php
include 'conex.php';
include 'getTC.php';
$x=new getTC();

$und=$_POST['fecha'];

$x->getTiendaId($und);

?>