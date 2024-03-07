<?php
        //$con = mysql_connect('localhost','root','')or die('Error en Conexion a la DB');
        //mysql_select_db('dbsistema',$con);
include '../cnn/connections.php';
$ser= $_POST['t2'];
$num= $_POST['t3'];

$numero=$ser.$num;
        $sql=("CALL OBTENER_TABLA_PROFORMAS('$numero')");
        $r=  mysql_query($sql) OR DIE ("ERROR " . mysql_error());
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="110"><b>' . $registros[0] . '</td>';
                echo '<td width="220"><b>' . utf8_encode($registros[1]) . '</td>';
                echo '<td width="40"><b>' . $registros[2] . '</td>';
                echo '<td width="40px"><b>' . $registros[3] . '</td>';
                echo '<td width="40px"><b>' . $registros[4] . '</td>';
                echo '<td width="40"><b>' . $registros[5] . '</td>';
                echo '<td width="40px"><b>' . $registros[6] . '</td>';
                echo '<td width="40px"><b>' . $registros[7] . '</td>';
                
                echo '<td width="45"><b>' . $registros[8] . '</td>';
                echo '<td width="50px"><b>' . $registros[9] . '</td>';
                echo '<td width="50px"><b>' . $registros[10] . '</td>';
                echo '<td width="50"><b>' . $registros[11] . '</td>';
                echo '<td width="55px"><b>' . $registros[12] . '</td>';
                echo '<td width="55px"><b>' . $registros[13] . '</td>';
                echo '<td width="55px"><b>' . $registros[14] . '</td>';
 
                
               // echo '<td width="40px">
               //       <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }

?>

