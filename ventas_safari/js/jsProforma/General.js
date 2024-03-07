     
        $(document).ready(function() {
        $('#txtCliente').keydown(function(e) {
        cn=$('#txtCliente').val();
        if(e.which == 13){      
        $.ajax({
            type: 'POST',
            url: 'data/cliente/getCliente/getCliente.php',
            data: {clie_nomb: cn},
            success: function(data) {
                $('#txtCodigoCliente').val(data);
                $('#txtCodigoCliente1').val($('#txtCodigoCliente').val());
            }
           })
           }else
               $('#txtCodigoCliente').val('');
               $('#txtCodigoCliente1').val('')
          }); 
        })
        
          
        $(document).ready(function() {
        $('#txtVendedor').keydown(function(e) {
        if(e.which == 13){
        cn=$('#txtVendedor').val();
        $.ajax({
            type: 'POST',
            url: 'data/vendedor/getVendedor/getVendedor.php',
            data: {vend_nomb: cn},
            success: function(data) {
                $('#txtCodigoVendedor').val(data);
            }
           })
         
       }else
           $('#txtCodigoVendedor').val('');
          }); 
        })
       
        function sumarcantidades(){
            var c1=document.getElementById('txtSSF').value;
            var c2=document.getElementById('txtSFC').value;
            var c3=document.getElementById('txtSIE').value;
            var c4=document.getElementById('txtSSP').value;
            var c5=document.getElementById('txtSIP').value;
            var c6=document.getElementById('txtSTK').value;
            
            
             document.getElementById("txtCantidad").value=parseFloat(c1)+parseFloat(c2)+parseFloat(c3)+parseFloat(c4)+parseFloat(c5)+parseFloat(c6);
             
            var d1=document.getElementById('txtDscto').value;
            var d3=document.getElementById('txtPVenta').value;
            
            document.getElementById("txtDsctoPorc").value=((parseFloat(d3)*parseFloat(d1))/100);
             
        }
        
        function porcDsct(){
            var d1=document.getElementById('txtDscto').value;
            var d2=document.getElementById('txtPLista').value;
            
            document.getElementById("txtDsctoPorc").value=((parseFloat(d2)*parseFloat(d1))/100);
            
            var d3=document.getElementById('txtDsctoPorc').value;
               
            document.getElementById("txtPVenta").value=((parseFloat(d2)-parseFloat(d3)));
            
            var d4=document.getElementById('txtPVenta').value;
            var d5=document.getElementById('txtCantidad').value;
            
            document.getElementById("txtImporte").value=((parseFloat(d4)*parseFloat(d5)));
        }
        
        $(document).ready(function() {
        $('#txtFecha').keydown(function(e) {
        cn=$('#txtFecha').val();
        if(e.which == 13){      
        $.ajax({
            type: 'POST',
            url: 'data/obtTC.php',
            data: {fecha: cn},
            success: function(data) {
                $('#txtTipoCambio').val(data);
            }
           })
           }else
               $('#txtTipoCambio').val('');
          }); 
        })
        
        $(document).ready(function() {
        $('#txtFecha').keydown(function(e) {
        cn=$('#txtFecha').val();
        if(e.which == 13){      
        $.ajax({
            type: 'POST',
            url: 'data/obtDSCTMAX.php',
            data: {fecha: cn},
            success: function(data) {
                $('#txtDescuentoMaximo').val(data);
            }
           })
           }else
               $('#txtDescuentoMaximo').val('');
          }); 
        })
        
        $(document).ready(function() {
        $('#txtZona').keydown(function(e) {
        cn=$('#txtZona').val();
        if(e.which == 13){      
        $.ajax({
            type: 'POST',
            url: 'data/obtZONA.php',
            data: {fecha: cn},
            success: function(data) {
                $('#txtCodigoZona').val(data);
            }
           })
           }else
               $('#txtCodigoZona').val('');
          }); 
        })
        
        $(document).ready(function() {
        $('#txtChofer').keydown(function(e) {
        cn=$('#txtChofer').val();
        if(e.which == 13){      
        $.ajax({
            type: 'POST',
            url: 'data/getCHOFERLICENCIA.php',
            data: {fecha: cn},
            success: function(data) {
                $('#txtLicencia').val(data);
            }
           })
           }else
               $('#txtLicencia').val('');
          }); 
        })
        
      $(document).ready(function() {
        $('#txtCliente').keydown(function(e) {
        if(e.which == 13){      
        cn=$('#txtCliente').val();    
        $.ajax({
            type: 'POST',
            url: 'data/cliente/getCliente/getDirsCliente.php',
            data: {fecha: cn},
            success: function(data) {
                $('#cboDirAgencia').html(data);
            }
           })
       }else
                $('#cboDirAgencia').empty();
          }); 
        })
        
        $(document).ready(function() {
        $('#cboEmpresaTienda').change(function() {
        cn=$('#cboEmpresaTienda').val();
        $.ajax({
            type: 'POST',
            url: 'data/obtEmpresaSerie.php',
            data: {fecha: cn},
            success: function(data) {
                $('#txtGuiaSeria').val(data);
            }
           })
          }); 
        })
        
        
