<?php
include '../js/Querys.php';
$q=new Querys();

session_start();
$emp = $_SESSION['id_empresa'];

//$tDes=$_GET['des'];
//$tHas=$_GET['has'];
$tCli=$_GET['cli'];

$q->EmisionProformasFillTblCliente($emp,$tCli);

?>
