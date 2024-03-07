<?php
include '../regInsumo/regInsumo.php';
$cr=new regInsumo();

$insu_nomb=$_POST['insu_nomb'];

$cr->getInsumoCodigo($insu_nomb);


?>
