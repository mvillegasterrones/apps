<?php

   include 'cnn.php';   
        
if(!empty($_POST['txtNumero'])){
 
    session_start();
    $emp= $_SESSION['id_empresa'];
    
   $num=$_POST['txtNumero'];
   $doc=$_POST['txtDocumento'];
   $ser=$_POST['txtSerie'];
   
   //$numero=$ser.$num;

        $sql="CALL obtener_dataNC('$emp','$doc','$ser','$num');";
        $r=mysql_query($sql)or die('error en consulta');  
        while($registros=  mysql_fetch_array($r))
        {
                $return = array('dato1' => $registros[0] 
                        ,'dato2' => $registros[1] 
                        ,'dato3' => $registros[2]
                        ,'dato4'=> $registros[3] 
                        ,'dato5' => $registros[4]
                        ,'dato6' => $registros[5] 
                        ,'dato7' => $registros[6] 
                        ,'dato8' => $registros[7]
                        //,'dato9' => $registros[8] 
                        //,'dato10' => $registros[9] 
                        //,'dato11' => $registros[10] 
                        //,'dato12' => $registros[11] 
                        //,'dato13' => $registros[12] 
                        //,'dato14' => $registros[13] );
                        );
         }
   die(json_encode($return));
}
?>


