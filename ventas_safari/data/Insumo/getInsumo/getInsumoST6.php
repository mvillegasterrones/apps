<?php
include '../regInsumo/regInsumo.php';
$cr=new regInsumo();

$insu_nomb=$_POST['insu_nomb'];

$cr->getInsumoSTK2($insu_nomb);

?>
