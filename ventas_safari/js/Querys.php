<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php


class Querys {
    
    
    //EMISION DE NOTAS DE CREDITO TEXTO
    function EmisionNCFechas_texto($emp,$Desde,$Hasta){
        include  ('../cnn/connections.php');
        $sql="CALL EmisionNC_Texto('$emp','$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta'.mysql_error());    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="130px" heigth="1" align="center"><b><label>' . $registros[0] . '</label></td>';
                echo '<td width="140px" heigth="1" align="center"><b><label>' . $registros[1] . '</label></td>';
                echo '<td width="320px"><b><label>' . utf8_encode($registros[2]) . '</label></td>';
                if($registros[3]=='Anulado'){
                    echo '<td width="90px"><font color="red"><b>' . $registros[3] . '</td>';
                }else{
                    echo '<td width="90px"><font color="blue"><b><label>' . $registros[3] . '</label></td>';
                }
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
            echo '</tr>';
        }
    }
    
function EmisionNCCliente_texto($emp,$Cliente,$TipoDoc){
    include  ('../cnn/connections.php');
        $sql="CALL EmisionNC_TextoCliente('$emp','$Cliente','$TipoDoc')";
        $r=mysql_query($sql)or die('error en consulta'. mysql_error());    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="130px" heigth="1" align="center"><b><label>' . $registros[0] . '</label></td>';
                echo '<td width="140px" heigth="1" align="center"><b><label>' . $registros[1] . '</label></td>';
                echo '<td width="320px"><b><label>' . utf8_encode($registros[2]) . '</label></td>';
                if($registros[3]=='Anulado'){
                    echo '<td width="90px"><font color="red"><b>' . $registros[3] . '</td>';
                }else{
                    echo '<td width="90px"><b><label>' . $registros[3] . '</label></td>';
                }
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
            echo '</tr>';
        }
    } 

 function EmisionNCFSerieNumero_texto($emp,$Ped,$Serie,$Numero){
     include  ('../cnn/connections.php');
        $sql="CALL EmisionNC_TextoSerieNumero('$emp','$Ped','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="130px" heigth="1" align="center"><b><label>' . $registros[0] . '</label></td>';
                echo '<td width="140px" heigth="1" align="center"><b><label>' . $registros[1] . '</label></td>';
                echo '<td width="320px"><b><label>' . utf8_encode($registros[2]) . '</label></td>';
                if($registros[3]=='Anulado'){
                    echo '<td width="90px"><font color="red"><b>' . $registros[3] . '</td>';
                }else{
                    echo '<td width="90px"><font color="blue"><b><label>' . $registros[3] . '</label></td>';
                }
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
            echo '</tr>';
        }
    }
    
    
    // REGISTROS DE PEDIDOS
    function RegPedidosFillTblFechas_ate($emp,$Desde,$Hasta){
        include  ('../cnn/connections.php');
        $sql="CALL RegPedFechas_ATE('$emp','$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px" aling="center"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" aling="center"><b>' . $registros[1] . '</td>';
                echo '<td width="300px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="150px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo "<td width='40px'><a href=frmGuiaPedido.php?doc='$registros[5]'&num='$registros[6]'><img src='imgs/icons/cards_pencil.png'></a>"
                        . "<a href=#><img src='imgs/button_cancel.png'></td></a>";
        echo '</tr>';
        }
    }
    
    function RegPedidosFillTblCliente_ate($emp,$Cliente){
        include  ('../cnn/connections.php');
        $sql="CALL RegPedCliente_ATE('$emp','$Cliente')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px" aling="center"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" aling="center"><b>' . $registros[1] . '</td>';
                echo '<td width="300px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="150px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 
    
    function RegPedidosFillTblSerieNumero_ate($emp,$Ped,$Serie,$Numero){
         include  ('../cnn/connections.php');
        $sql="CALL RegPedSerieNumero_tienda('$emp','$Ped','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px" aling="center"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" aling="center"><b>' . $registros[1] . '</td>';
                echo '<td width="300px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="150px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    
    function RegPedidosFillTblFechas_tienda($Desde,$Hasta){
        include  ('../cnn/connections.php');
        session_start();
        $emp=$_SESSION['id_empresa'];
        $sql="CALL RegPedFechas_tienda('$emp','$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px"><b>' . $registros[0] . '</td>';
                echo '<td width="140px"><b>' . $registros[1] . '</td>';
                echo '<td width="300px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="150px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo "<td width='40px'><a href=frmGuiaPedido.php?doc='$registros[5]'&num='$registros[6]'><img src='imgs/icons/cards_pencil.png'></a>"
                        . "<a href=#><img src='imgs/button_cancel.png'></td></a>";
        echo '</tr>';
        }
    }
    
    function RegPedidosFillTblCliente_tienda($Cliente){
    include  ('../cnn/connections.php');
        session_start();
        $emp=$_SESSION['id_empresa'];
        $sql="CALL RegPedCliente_tienda('$emp','$Cliente')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px"><b>' . $registros[0] . '</td>';
                echo '<td width="140px"><b>' . $registros[1] . '</td>';
                echo '<td width="300px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="150px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 

 function RegPedidosFillTblSerieNumero_tienda($Ped,$Serie,$Numero){
     include  ('../cnn/connections.php');
        session_start();
        $emp=$_SESSION['id_empresa'];
        $sql="CALL RegPedSerieNumero_tienda('$emp','$Ped','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px"><b>' . $registros[0] . '</td>';
                echo '<td width="140px"><b>' . $registros[1] . '</td>';
                echo '<td width="300px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="150px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    // sepraracion
    function RegGuiasFillTblFechas($empr,$Desde,$Hasta){
        include  ('../cnn/connections.php');
        $sql="CALL RegGuiasFechas('$empr','$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px"><b>' . $registros[0] . '</td>';
                echo '<td width="135px"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo "<td width='40px'><a href=frmGuiaPedido.php?doc='$registros[5]'&num='$registros[6]'><img src='imgs/icons/cards_pencil.png'></a>"
                        . "<a href=#><img src='imgs/button_cancel.png'></td></a>";
        echo '</tr>';
        }
    }
    
    function RegGuiasFillTblCliente($empr,$Cliente){
    include  ('../cnn/connections.php');
        $sql="CALL RegGuiasCliente('$empr','$Cliente')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px"><b>' . $registros[0] . '</td>';
                echo '<td width="135px"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo "<td width='40px'><a href=frmGuiaPedido.php?doc='$registros[5]'&num='$registros[6]'><img src='imgs/icons/cards_pencil.png'></a>"
                        . "<a href=#><img src='imgs/button_cancel.png'></td></a>";
        echo '</tr>';
        }
    }
    
    function RegGuiasFillTblSerieNumero($empr,$Ped,$Serie,$Numero){
     include  ('../cnn/connections.php');
        $sql="CALL RegGuiasSerieNumero('$empr','$Ped','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px"><b>' . $registros[0] . '</td>';
                echo '<td width="135px"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo "<td width='40px'><a href=frmGuiaPedido.php?doc='$registros[5]'&num='$registros[6]'><img src='imgs/icons/cards_pencil.png'></a>"
                        . "<a href=#><img src='imgs/button_cancel.png'></td></a>";
        echo '</tr>';
        }
    } 
    
    function RegPedidosFillTblFechas($Desde,$Hasta){
        include  ('../cnn/connections.php');
        $sql="CALL RegPedFechas('$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px"><b>' . $registros[0] . '</td>';
                echo '<td width="140px"><b>' . $registros[1] . '</td>';
                echo '<td width="300px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="150px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo "<td width='40px'><a href=frmGuiaPedido.php?doc='$registros[5]'&num='$registros[6]'><img src='imgs/icons/cards_pencil.png'></a>"
                        . "<a href=#><img src='imgs/button_cancel.png'></td></a>";
        echo '</tr>';
        }
    }
    
function RegPedidosFillTblCliente($Cliente){
    include  ('../cnn/connections.php');
        $sql="CALL RegPedCliente('$Cliente')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px"><b>' . $registros[0] . '</td>';
                echo '<td width="140px"><b>' . $registros[1] . '</td>';
                echo '<td width="300px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="150px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 

 function RegPedidosFillTblSerieNumero($Ped,$Serie,$Numero){
     include  ('../cnn/connections.php');
        $sql="CALL RegPedSerieNumero('$Ped','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px"><b>' . $registros[0] . '</td>';
                echo '<td width="140px"><b>' . $registros[1] . '</td>';
                echo '<td width="300px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="150px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 
    
    function EmisionFVBVFillTblFechas($emp,$Desde,$Hasta){
        include  ('../cnn/connections.php');
        $sql="CALL EmisionFVFBFechas('$emp','$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px" heigth="1"><b>' . $registros[0] . '</td>';
                echo '<td width="135px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    
function EmisionFVBVFillTblCliente($emp,$Cliente){
    include  ('../cnn/connections.php');
        $sql="CALL EmisionFVBVCliente('$emp','$Cliente')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px" heigth="1"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 

 function EmisionFVBVFillTblSerieNumero($emp,$Ped,$Serie,$Numero){
        include  ('../cnn/connections.php');
        $sql="CALL EmisionFVBVSerieNumero('$emp','$Ped','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px" heigth="1"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 
    //EMISION BOL FACT TEXTO
    function EmisionFVBVFillTblFechas_texto($emp,$Desde,$Hasta){
        include  ('../cnn/connections.php');
        $sql="CALL EmisionBolFact_Texto('$emp','$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px" heigth="1"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                if($registros[4]=='Anulado'){
                    echo '<td width="90px"><font color="red"><b>' . $registros[4] . '</td>';
                }else{
                    echo '<td width="90px"><font color="blue"><b>' . $registros[4] . '</td>';
                }
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    
    function EmisionFVBVFillTblCliente_texto($emp,$Cliente){
        include  ('../cnn/connections.php');
        $sql="CALL EmisionBolFact_TextoCliente('$emp','$Cliente')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px" heigth="1"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                if($registros[4]=='Anulado'){
                    echo '<td width="90px"><font color="red"><b>' . $registros[4] . '</td>';
                }else{
                    echo '<td width="90px"><font color="blue"><b>' . $registros[4] . '</td>';
                }
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    
    function EmisionFVBVFillTblSerieNumero_texto($emp,$Ped,$Serie,$Numero){
     include  ('../cnn/connections.php');
        $sql="CALL EmisionBolFact_TextoSerieNumero('$emp','$Ped','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px" heigth="1"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                if($registros[4]=='Anulado'){
                    echo '<td width="90px"><font color="red"><b>' . $registros[4] . '</td>';
                }else{
                    echo '<td width="90px"><font color="blue"><b>' . $registros[4] . '</td>';
                }
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    //EMISION DE NOTAS DE CREDITP
    function EmisionNCFillTblFechas($emp,$Desde,$Hasta){
        include  ('../cnn/connections.php');
        $sql="CALL EmisionNCFechas('$emp','$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta'.mysql_error());    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="130px" heigth="1" align="center"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="320px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="90px" align="right"><b>' . $registros[3] . '</td>';
                //echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    
function EmisionNCFillTblCliente($emp,$Cliente,$TipoDoc){
    include  ('../cnn/connections.php');
        $sql="CALL EmisionNCCliente('$emp','$Cliente','$TipoDoc')";
        $r=mysql_query($sql)or die('error en consulta'. mysql_error());    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="130px" heigth="1" align="center"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="320px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="90px" align="right"><b>' . $registros[3] . '</td>';
                //echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 

 function EmisionNCFillTblSerieNumero($emp,$Ped,$Serie,$Numero){
     include  ('../cnn/connections.php');
        $sql="CALL EmisionNCSerieNumero('$emp','$Ped','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="130px" heigth="1" align="center"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="320px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="90px" align="right"><b>' . $registros[3] . '</td>';
                //echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    
    // control de letras 
    
    function CtrlLetrasFillTblFechas($emp,$Desde,$Hasta){
        include  ('../cnn/connections.php');
        $sql="CALL CtrlLetrasFechas('$emp','$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="130px" align="center"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="140px" align="center"><b>' . $registros[2] . '</td>';
                echo '<td width="300px"><b>' .utf8_encode($registros[3]) . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    
function CtrlLetrasFillTblCliente($emp,$Cliente){
    include  ('../cnn/connections.php');
        $sql="CALL CtrlLetrasCliente('$emp','$Cliente')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="130px" align="center"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="140px" align="center"><b>' . $registros[2] . '</td>';
                echo '<td width="300px"><b>' .utf8_encode($registros[3]) . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 

 function CtrlLetrasFillTblSerieNumero($emp,$Ped,$Serie,$Numero){
     include  ('../cnn/connections.php');
        $sql="CALL CtrlLetrasSerieNumero('$emp','$Ped','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="130px" heigth="1" align="center"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="140px" align="center"><b>' . $registros[2] . '</td>';
                echo '<td width="300px"><b>' .utf8_encode($registros[3]) . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 
   
function PercepcionVentaFillTblFechas($emp,$Desde,$Hasta){
    include  ('../cnn/connections.php');
        $sql="CALL PercepcionVentaFechas('$emp','$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta '.  mysql_error());    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px" heigth="1"><b>' . $registros[0] . '</td>';
                echo '<td width="135px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    
function PercepcionVentaFillTblCliente($emp,$Cliente){
    include  ('../cnn/connections.php');
        $sql="CALL PercepcionVentaCliente('$emp','$Cliente')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px" heigth="1"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 

    function PercepcionBolFac($Numero){
    include  ('../cnn/connections.php');
        $sql="CALL obtener_facturas_percepcion('$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="110px" align="center" id="Doc">' . $registros[0] . '</td>';
                echo '<td width="110px" align="center" id=Numero>' . $registros[1] . '</td>';
                echo '<td width="110px" align="center" id="Fecha">' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="110px" align="right" id="Cobrado">' . $registros[3] . '</td>';
                echo '<td width="110px" align="right" id="PorPerc">' . $registros[4] . '</td>';
                echo '<td width="110px" align="right" id="Total">' . $registros[5] . '</td>';
                echo '<td width="110px" align="right" id="Total1"><b>' . $registros[6] . '</td>';
                echo '<td width="20px"><b>';
        echo '</tr>';
        }
    } 
    
 function PercepcionVentaFillTblSerieNumero($emp,$Ped,$Serie,$Numero){
     include  ('../cnn/connections.php');
        $sql="CALL PercepcionVentaSerieNumero('$emp','$Ped','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="100px" heigth="1"><b>' . $registros[0] . '</td>';
                echo '<td width="140px" heigth="1" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 

   // EMISION DE PROFORMAS 
    
   function EmisionProformasFillTblFechas($empr,$Desde,$Hasta){
       include  ('../cnn/connections.php');
        $sql="CALL EmisionProformasFechas('$empr','$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px"><b>' . $registros[0] . '</td>';
                echo '<td width="135px" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 
 
    function EmisionProformasFillTblCliente($empr,$Cliente){
        include  ('../cnn/connections.php');
        $sql="CALL EmisionProformasCliente('$empr','$Cliente')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px"><b>' . $registros[0] . '</td>';
                echo '<td width="135px" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' .utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    } 
 function listar_tiendas()
 {
     include  ('cnn/connections.php');
     $sql="SELECT empr_id, empr_nomb FROM empresas";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '';
            ?>
                &nbsp;&nbsp;<input type="radio" id="rdx" name="rdx" value="<?php echo $registros[0] ?>"/></td> 
            <?php
                echo '&nbsp;<b><font color="#210194">' . $registros[0] . '';
                echo '&nbsp;&nbsp;<b><font color="#210194">' . $registros[1] . '<br>';
                
        echo '';
        }
    }
    
    function FiltrarDespachosTiendaFechas($empr,$f1,$f2)
    {
        include  ('../cnn/connections.php');
        $sql="CALL FiltrarDespachosFechas ('$empr','$f1','$f2')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px" align="center"><b>' . $registros[0] . '</td>';
                echo '<td width="135px" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    
    function FiltrarDespachosTiendaCliente($empr,$cliente)
    {
        include  ('../cnn/connections.php');
        $sql="CALL FiltrarDespachosCliente('$empr','$cliente')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px" align="center"><b>' . $registros[0] . '</td>';
                echo '<td width="135px" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
   function FiltrarDespachosTiendaSerieNumero($empr,$ped,$Serie,$Numero){
       include  ('../cnn/connections.php');
        $sql="CALL FiltrarDespachosSerieNumero('$empr','$ped','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px" align="center"><b>' . $registros[0] . '</td>';
                echo '<td width="135px" align="center"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px" align="right"><b>' . $registros[3] . '</td>';
                echo '<td width="90px"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }   
    
    function obtener_tienda($id_empresa)
    {
        include  ('cnn/connections.php');
        $sql="CALL obtener_tienda('$id_empresa');";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            
           //session_start();
           $rg= $registros[0];
           $_SESSION['empresa']= $rg;
        
        }
    }
    
    function GuiasTransportistaFillTblFechas($emp,$Desde,$Hasta){
        include  ('../cnn/connections.php');
        $sql="CALL FiltrarGuiasTransportistaFechas('$emp','$Desde','$Hasta')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px"><b>' . $registros[0] . '</td>';
                echo '<td width="140px"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px" align="right"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    function GuiasTransportistaFillTblCliente($emp,$Cliente){
        include  ('../cnn/connections.php');
        $sql="CALL FiltrarGuiasTransportistaCliente_1('$emp','$Cliente')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px"><b>' . $registros[0] . '</td>';
                echo '<td width="140px"><b>' . $registros[1] . '</td>'; 
                echo '<td width="360px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px" align="right"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
    function GuiasTransportistaFillTblSerieNumero($emp,$Serie,$Numero){
        include  ('../cnn/connections.php');
        $sql="CALL FiltrarGuiasTransportistaSerieNumero('$emp','$Serie','$Numero')";
        $r=mysql_query($sql)or die('error en consulta');    
        while($registros=  mysql_fetch_array($r))
        {
            echo '<tr height="1px">';
                echo '<td width="105px"><b>' . $registros[0] . '</td>';
                echo '<td width="140px"><b>' . $registros[1] . '</td>';
                echo '<td width="360px"><b>' . utf8_encode($registros[2]) . '</td>';
                echo '<td width="70px"><b>' . $registros[3] . '</td>';
                echo '<td width="90px" align="right"><b>' . $registros[4] . '</td>';
                echo '<td width="40px">
                    <a href=#><img src="imgs/icons/cards_pencil.png"></a>
                    <a href=#><img src="imgs/button_cancel.png"></td></a>';
        echo '</tr>';
        }
    }
   
    function GrabarPercepcion($tpdc,$nrodc,$fac,$nrofac,$fcemi,$tc,$clie,$cobra,$porcper,$impoper,$total)
    {
        include  ('../cnn/connections.php');
        session_start();
        $emp=$_SESSION['id_empresa'];
        $sql=("insert into kardex_perc values('$emp','$tpdc','$nrodc','1','$fac','$nrofac','$fcemi','$cobra','$porcper','$impoper','$total','0')");
        $r=mysql_query($sql)or die('error en consulta 2'.  mysql_error());
    }
    
    
    
    
    
}


