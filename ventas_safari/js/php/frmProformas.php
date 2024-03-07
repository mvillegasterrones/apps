<?php

  include 'cnn.php';      
        
if(!empty($_POST['txtDescripcion'])){
 
   $numero=$_POST['txtDescripcion'];


        $sql="CALL obtener_datos_producto('$numero')";
        $r=mysql_query($sql)or die('error en consulta');  
        while($registros=  mysql_fetch_array($r))
        {
                $return = array('vodigoalterno' => $registros[0] 
                        ,'c1' => $registros[1] 
                        ,'c2' => $registros[2]
                        ,'c3'=> $registros[3] 
                        ,'c4' => $registros[4]
                        ,'c5' => $registros[5] 
                        ,'c6' => $registros[6] 
                        ,'unidad' => $registros[7]
                        ,'prepromo' => $registros[8] 
                        ,'pretienda' => $registros[9] 
                        ,'preventa' => $registros[10] 
                        ,'porcpromo' => $registros[11] 
                        ,'codinterno' => $registros[12] );
         }
   die(json_encode($return));
}
?>


