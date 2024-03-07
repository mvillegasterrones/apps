<?php
        //$con = mysql_connect('localhost','root','')or die('Error en Conexion a la DB');
        //mysql_select_db('dbsistema',$con);
include '../cnn/connections.php';

session_start();
$emp=$_SESSION['id_empresa'];

$td= $_POST['td'];
$ser= $_POST['t2'];
$num= $_POST['t3'];

        $numero=$ser.$num;
        
        $sql=("CALL obtenerTablaPedidos('$emp','$td','$numero')");
        $r=  mysql_query($sql) OR DIE ("ERROR " . mysql_error());
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="118"><b>' . $registros[0] . '</td>';
                echo '<td width="290"><b>' . utf8_encode($registros[1]) . '</td>';
                echo '<td width="50" align="center"><b>' . $registros[2] . '</td>';
                echo '<td width="90px" align="center"><b>' . $registros[3] . '</td>';
                echo '<td width="80px" align="right"><b>' . $registros[4] . '</td>';
                echo '<td width="90" align="right"><b>' . $registros[5] . '</td>';
                echo '<td width="90px" align="right"><b>' . $registros[6] . '</td>';
                echo '<td width="80px" align="right"><b>' . $registros[7] . '</td>';
                echo '<td width="90px" align="right"><b>' . $registros[8] . '</td>';
                  
               // echo '<td width="40px">
               //       <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }

?>

