<?php
include 'conex.php';
include 'Cargar_Data_Formularios.php';
$x=new getTC();

session_start();
$emp=$_SESSION['id_empresa'];

$ser=$_GET['ser'];
$num=$_GET['num'];
$numero= $ser.$num;

$x->CargarFormProforma($emp,$numero);

?>

