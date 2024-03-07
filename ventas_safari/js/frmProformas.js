$(function(){
   /* Ponemos evento blur a la escucha sobre id nombre en id cliente. */
   $('#cliente').on('blur','#txtDescripcion',function(){
      /* Obtenemos el valor del campo */
      var valor = this.value;
      /* Si la longitud del valor es mayor a 2 caracteres.. */
      if(valor.length >=3){
 
         /* Cambiamos el estado.. */
         $('#estado').html('Cargando datos de servidor...');
 
         /* Hacemos la consulta ajax */
         var consulta = $.ajax({
            type:'POST',
            url:'js/php/frmProformas.php',
            data:{txtDescripcion: valor,},
            dataType:'JSON'
         });
 
         /* En caso de que se haya retornado bien.. */
         consulta.done(function(data){
            if(data.error!==undefined){
               $('#estado').html('Ha ocurrido un error: '+ data.error);
               return false;
            } else {
               if(data.vodigoalterno!==undefined){$('#cliente #txtCodigo').val(data.vodigoalterno);}
               if(data.c1!==undefined){$('#cliente #txtStock1').val(data.c1);}
               if(data.c2!==undefined){$('#cliente #txtStock2').val(data.c2);}
               if(data.c3!==undefined){$('#cliente #txtStock3').val(data.c3);}
               if(data.c4!==undefined){$('#cliente #txtStock4').val(data.c4);}
               if(data.c5!==undefined){$('#cliente #txtStock5').val(data.c5);}
               if(data.c6!==undefined){$('#cliente #txtStock6').val(data.c6);}
               if(data.unidad!==undefined){$('#cliente #txtUnidad').val(data.unidad);}
               if(data.prepromo!==undefined){$('#cliente #txtPOferta').val(data.prepromo);}
               if(data.pretienda!==undefined){$('#cliente #txtPLista').val(data.pretienda);}
               if(data.preventa!==undefined){$('#cliente #txtPVenta').val(data.preventa);}
               if(data.porcpromo!==undefined){$('#cliente #txtDscto').val(data.porcpromo);}
               if(data.codinterno!==undefined){$('#cliente #CodInternoInsumo').val(data.codinterno);}
               
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

 /*  $(document).ready(function() {
        $('#txtTienda').keydown(function(e) {
        cn=$('#txtTienda').val();
        if(e.which == 13){      
        $.ajax({
            type: 'POST',
            url: 'data/obtTIENDA.php',
            data: {fecha: cn},
            success: function(data) {
                $('#txtCodigoTienda').val(data);
               
            }
           })
           }else
               $('#txtCodigoTienda').val('');
          }); 
        })
        */
   