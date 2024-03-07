<?php
include '../regInsumo/regInsumo.php';
$cr=new regInsumo();

$insu_nomb=$_POST['insu_nomb'];

$cr->getInsumoSTK1($insu_nomb);

?>
