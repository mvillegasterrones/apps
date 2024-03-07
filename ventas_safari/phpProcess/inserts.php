<?php

class inserts {
   
    function insert_NC($em,$td,$fn,$mdv,$mnd,$cli,$vnd,$us,$impv,$impigv,$impnet){
        include  ('../cnn/connections.php');
        $sql="insert into facturac_cab values('$em', '$td', '$fn',  current_date(), null, null, '112', null, '$mdv', '0.00', '$mnd', null, '01', '$cli', '$vnd', null, null, '0.00', null, null, null,
		null, null, null, null, null, null,'', '', '', '', '1', '0', '0', '0', '', '', '$us', current_date(), '0',
		'0000-00-00', null, '$impv', '$impigv', '0.00', '0.00', '0.00', '$impnet', '0.00', '0.00', '0.00', '1', '1')";
        
        $r=mysql_query($sql)or die('error en consulta'.mysql_error());    
        
    }
    
    
    
    
    
    
    
}
