<?php
include '../regInsumo/regInsumo.php';
$cr=new regInsumo();

$insu_nomb=$_POST['insu_nomb'];

$cr->getInsumoPrecVta1($insu_nomb);

?>
