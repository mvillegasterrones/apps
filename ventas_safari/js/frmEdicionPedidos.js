$(function(){
   /* Ponemos evento blur a la escucha sobre id nombre en id cliente. */
   $('#cliente').on('blur','#txtNumero',function(){
      /* Obtenemos el valor del campo */
      var valor = this.value;
      /* Si la longitud del valor es mayor a 2 caracteres.. */
      if(valor.length >= 7){
 
         /* Cambiamos el estado.. */
         $('#estado').html('Cargando datos de servidor...');
 
         /* Hacemos la consulta ajax */
         var consulta = $.ajax({
            type:'POST',
            url:'js/php/frmEdicionPedidos.php',
            data:{txtNumero: valor, txtDocumento:$('#cboDocumento').val(), txtSerie:$('#cboSerie').val()},
            dataType:'JSON'
         });
 
         /* En caso de que se haya retornado bien.. */
         consulta.done(function(data){
            if(data.error!==undefined){
               $('#estado').html('Ha ocurrido un error: '+ data.error);
               return false;
            } else {
               if(data.dato1!==undefined){$('#cliente #txtFecha').val(data.dato1);}
               if(data.dato2!==undefined){$('#cliente #txtTipoCambio').val(data.dato2);}
               if(data.dato3!==undefined){$('#cliente #txtDescuentoMaximo').val(data.dato3);}
               if(data.dato4!==undefined){$('#cliente #txtPercepcion').val(data.dato4);}
               if(data.dato5!==undefined){$('#cliente #txtCodigoCliente').val(data.dato5);}
               if(data.dato6!==undefined){$('#cliente #txtCliente').val(data.dato6);}
               if(data.dato7!==undefined){$('#cliente #cboDirAgencia').val(data.dato7);}
               if(data.dato8!==undefined){$('#cliente #cboCondionesPago').val(data.dato8);}
               if(data.dato9!==undefined){$('#cliente #cboMoneda').val(data.dato9);}
               if(data.dato10!==undefined){$('#cliente #txtCodigoVendedor').val(data.dato10);}
               if(data.dato11!==undefined){$('#cliente #txtVendedor').val(data.dato11);}
               if(data.dato12!==undefined){$('#cliente #txtCodigoZona').val(data.dato12);}
               if(data.dato13!==undefined){$('#cliente #txtZona').val(data.dato13);}
               if(data.dato14!==undefined){$('#cliente #txtObservaciones').val(data.dato14);}
               
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
