<?php
include '../regCliente/regCliente.php';
$cr=new regCliente();

$clie_nomb=$_POST['clie_nomb'];

$cr->getRucRUC($clie_nomb);


?>
