<?php 
require_once ('cnn/connections.php');

function filtrar_combo_id($consulta)
{
        // conectar();
        $filas = mysql_query($consulta) or die('Consulta fallida: ' . mysql_error());
        while ($registros=  mysql_fetch_array($filas)){
             echo "<option value=$registros[0]>" .$registros[1] . '</optioon>';
        }
}

function filtrar_combo($consulta)
{
        // conectar();
        $filas = mysql_query($consulta) or die('Consulta fallida: ' . mysql_error());
        while ($registros=  mysql_fetch_array($filas)){
             echo "<option>" .$registros[0] . '</optioon>';
        }
}

function filtrar_tabla()
{
    // conectar();
    $color_row= array('#C8FFEC','#12E26F');
    $ind_color=0;
    $sql='select clie_id,clie_nomb,clie_ruc from clientes';
    $result=array();
    
    $reg=  mysql_query($sql) or die('Error en la consulta');

    while($data=  mysql_fetch_array($reg)){
        echo "<tr bgcolor = ${color_row[$ind_color]}>";
            $ind_color++;
            $ind_color %=2;

            echo "<td>".$data['clie_id']."</td>";
            echo "<td>".$data['clie_nomb']."</td>";
            echo "<td>".$data['clie_ruc']."</td>";
        echo '</tr>';
    }
    echo '</table>';
}
?>