<?php

include 'Save.php';
$x=new Save();

session_start();

$emp=$_SESSION['id_empresa'];

$t1=$_POST['t1'];
$t2=$_POST['t2'];
$t3=$_POST['t3'];
$t4=$_POST['t4'];
$t5=$_POST['t5'];
$t6=$_POST['t6'];
$t7=$_POST['t7'];
$t8=$_POST['t8'];
$t9=$_POST['t9'];
$t10=$_POST['t10'];
$t11=$_POST['t11'];
$t12=$_POST['t12'];

$c1=$_POST['tc1'];
$c2=$_POST['tc2'];
$c3=$_POST['tc3'];
$c4=$_POST['tc4'];
$c5=$_POST['tc5'];
$c6=$_POST['tc6'];

$t13=$_POST['t13'];
$t14=$_POST['t14'];
$t15=$_POST['t15'];
$t16=$_POST['t16'];
$t17=$_POST['t17'];
$t18=$_POST['t18'];
$t19=$_POST['t19'];

$cants= array();

$cants[]=$c1;
$cants[]=$c2;
$cants[]=$c3;
$cants[]=$c4;
$cants[]=$c5;
$cants[]=$c6;
        

$x->SaveProforma($emp, $t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9, $t10, $t11, $t12,$cants, $t13, $t14, $t15, $t16, $t17, $t18, $t19)
?>
