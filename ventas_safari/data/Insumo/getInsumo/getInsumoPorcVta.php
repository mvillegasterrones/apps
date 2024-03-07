<?php
include '../regInsumo/regInsumo.php';
$cr=new regInsumo();

$insu_nomb=$_POST['insu_nomb'];

$cr->getInsumoPorcVta($insu_nomb);

?>
