  $(document).ready(function() {
        $('#btnGuarar').click(function(e) {
        cn1=$('#cboDocumento').val();
        cn2=$('#cboSerie').val();
        cn3=$('#txtNumero').val();
        cn4=$('input:radio[name=rdx]:checked').val();
        cn5=$('#txtMoneda').val();
        cn6=$('#txtCodigoCliente').val();
        cn7=$('#txtCodigoVendedor').val();
        cn8=$('#txtCodigoVendedor').val();
        cn9=$('#txtSubTotal').val();
        cn10=$('#txtSubIGV').val();
        cn11=$('#txtTotal').val();
        
           /* if(document.frmNC.rdx[0].checked){
                cn4='DS';//alert("El 1 valor está seleccionado"); //en nuestro caso "Mala"
            }
            if(document.frmNC.rdx[1].checked){
                cn4='DN';//alert("El 2 valor está seleccionado"); //en nuestro caso "Mala"
            }
            if(document.frmNC.rdx[2].checked){
                cn4='DC';//alert("El 3 valor está seleccionado"); //en nuestro caso "Mala"
            } */
        $.ajax({
            type: 'GET',
            url: 'phpProcess/insert-NotaCreditoTexto.php',
            data: {td: cn1, ser: cn2, num: cn3, mdv: cn4, mnd: cn5, cli: cn6, vnd: cn7, us: cn8, impv: cn9, impigv: cn10, impnet: cn11},
            success: function(data) {
                $("#tabdet").html(data)
               
            }
           })
          }); 
        })