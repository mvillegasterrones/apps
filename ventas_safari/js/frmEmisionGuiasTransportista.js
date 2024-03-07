$(function(){
   /* Ponemos evento blur a la escucha sobre id nombre en id cliente. */
   $('#cliente').on('blur','#txtGuiaNumero',function(){
      /* Obtenemos el valor del campo */
      var valor = this.value;
      /* Si la longitud del valor es mayor a 2 caracteres.. */
      if(valor.length ==7){
 
         /* Cambiamos el estado.. */
         $('#estado').html('Cargando datos de servidor...');
 
         /* Hacemos la consulta ajax */
         var consulta = $.ajax({
            type:'POST',
            url:'js/php/frmEmisionGuiasTransportista.php',
            data:{txtGuiaNumero: valor, txtSerie: $('#txtGuiaSeria').val()},
            dataType:'JSON'
         });
 
         /* En caso de que se haya retornado bien.. */
         consulta.done(function(data){
            if(data.error!==undefined){
               $('#estado').html('Ha ocurrido un error: '+ data.error);
               return false;
            } else {
               if(data.codigocliente!==undefined){$('#cliente #txtCodigoClienteX').val(data.codigocliente);}
               if(data.cliente!==undefined){$('#cliente #txtClienteX').val(data.cliente);}
               if(data.rucdni!==undefined){$('#cliente #txtRUCDNI').val(data.rucdni);}
               if(data.txtDirLlegada!==undefined){$('#cliente #txtDirLlegada').val(data.txtDirLlegada);}
               if(data.txtPlaca!==undefined){$('#cliente #txtPlaca').val(data.txtPlaca);}
               if(data.txtMarca!==undefined){$('#cliente #txtMarca').val(data.txtMarca);}
               if(data.txtCertInscr!==undefined){$('#cliente #txtCertInscr').val(data.txtCertInscr);}
               if(data.txtLicencia!==undefined){$('#cliente #txtLicencia').val(data.txtLicencia);}
               if(data.txtChofer!==undefined){$('#cliente #txtChofer').val(data.txtChofer);}
               if(data.txtCodigoRemitente!==undefined){$('#cliente #txtCodigoRemitente').val(data.txtCodigoRemitente);}
               if(data.txtRemitente!==undefined){$('#cliente #txtRemitente').val(data.txtRemitente);}
               if(data.txtRUCDNIRemitente!==undefined){$('#cliente #txtRUCDNIRemitente').val(data.txtRUCDNIRemitente);}
               if(data.txtDirPartida!==undefined){$('#cliente #txtDirPartida').val(data.txtDirPartida);}
               
               $('#estado').html('Datos cargados..');
               return true;
            }
         });
 
         /* Si la consulta ha fallado.. */
         consulta.fail(function(){
            $('#estado').html('Ha habido un error contactando el servidor.');
            return false;
         });
 
      } else {
         /* Mostrar error */
         $('#estado').html('El nombre tener una longitud mayor a 2 caracteres...');
         return false;
      }
   });
});


