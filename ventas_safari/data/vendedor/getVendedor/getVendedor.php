<?php
include '../regVendedor/regVendedor.php';
$cr=new regVendedor();

$vend_nomb=$_POST['vend_nomb'];

$cr->getVendedor($vend_nomb);


?>
