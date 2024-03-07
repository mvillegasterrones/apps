        $(document).ready(function() {
            $('#btnNuevo').click(function() {
            cn=$('#cboDocumento').val();
            sr=$('#cboSerie').val();
            
               
            $.ajax({ 
                type: 'POST',
                url: 'data/obtCORRELATIVO.php',
                data: {fecha: cn, ser: sr},
                success: function(data) {

                $('#txtNumero').val(data);

                
                }
               })
               
                $('#txtSerie').val($('#cboSerie').val());
                $('#txtNumero1').val('');
                $('#txtCodigoCliente').val('');
                $('#txtSaldo').val('0.00');
                $('#txtCodigoCliente').val('');
                $('#txtCodigoCliente1').val('');
                $('#txtCliente').val('');
                $('#txtRUCDNI').val('');
                $('#txtDireccion').val('');
                $('#txtCodigoVendedor').val('');
                $('#txtVendedor').val('');
                $('#txtMoneda').val('');
                $('#cboDirAgencia').empty();
                $('#cboCondionesPago').val(0);
                $('#cboCondionesPago').change();
                $('#txtCodigoZona').val('');
                $('#txtZona').val('');
                
              }); 
            }) 
            
