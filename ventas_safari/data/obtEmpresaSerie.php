<?php
include 'conex.php';
include 'getTC.php';
$x=new getTC();

$ser=$_POST['fecha'];

$x->getEmpresaSerie($ser);

?>

