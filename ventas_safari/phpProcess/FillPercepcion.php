<?php
include '../js/Querys.php';
$q=new Querys();

$tNum=$_POST['num'];

$q->PercepcionBolFac($tNum);

?>
