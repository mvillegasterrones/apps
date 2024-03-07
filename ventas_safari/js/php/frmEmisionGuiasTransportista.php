<?php

  include 'cnn.php';      
        
if(!empty($_POST['txtGuiaNumero'])){
 
   //$ser = $_POST['txtGuiaSeria'];
   $numero=$_POST['txtGuiaNumero'];
   $serie=$_POST['txtSerie'];

        $sql="CALL obtener_datos_guia_transportista('$serie','$numero')";
        $r=mysql_query($sql)or die('error en consulta');  
        while($registros=  mysql_fetch_array($r))
        {
                $return = array('codigocliente' => $registros[0] 
                        ,'cliente' => $registros[1] 
                        ,'rucdni' => $registros[2]
                        ,'txtDirLlegada'=> $registros[3] 
                        ,'txtPlaca' => $registros[4]
                        ,'txtMarca' => $registros[5] 
                        ,'txtCertInscr' => $registros[6] 
                        ,'txtLicencia' => $registros[7]
                        ,'txtChofer' => $registros[8] 
                        ,'txtCodigoRemitente' => $registros[9] 
                        ,'txtRemitente' => $registros[10] 
                        ,'txtRUCDNIRemitente' => $registros[11] 
                        ,'txtDirPartida' => $registros[12]);
        }

 
   //if($nombre==='juan'){
   //   $return = array('telefono'=>'611611611','direccion'=>'Una calle que no existe, Madrid');
   //} elseif($nombre=='maria') {
   //   $return = array('telefono'=>'666666666','direccion'=>'call del diablo, Pais de las maravillas');
        //} else {
      //$return = array('error'=>'El nombre no esta guardado en la base de datos');
   //}
 
   die(json_encode($return));
}
?>


