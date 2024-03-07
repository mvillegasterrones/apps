<?php
include '../js/Querys.php';
$q=new Querys();

$sp=$_POST['sp'];
$ser=$_POST['ser'];
$num=$_POST['num'];
$fec=$_POST['fec'];
$doc=$_POST['doc'];
$num1=$_POST['num1'];
$cobra=$_POST['cobra'];
$pp=$_POST['pp'];
$p=$_POST['p'];
$tt=$_POST['tt'];
$tc=$_POST['tc'];
$c=$_POST['c'];




$q->GrabarPercepcion($sp, 
        $ser.''.$num, 
        $doc, 
        $num1, 
        $fec,
        $tc,
        $c,
        $cobra, 
        $pp, 
        $p, 
        $tt);

?>
