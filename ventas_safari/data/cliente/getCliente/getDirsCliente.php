<?php
include '../regCliente/regCliente.php';
$cr=new regCliente();

$clie_id=$_POST['fecha'];

$cr->getDirecciones($clie_id);


?>
