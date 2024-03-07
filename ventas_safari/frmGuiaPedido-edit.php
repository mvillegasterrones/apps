<link href="css/frmGuiaPedido.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />

<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.js"></script>

<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>

<!doctype html>
<html lang="en">
<head>
  <?php //include 'js/autocompletar.php'; ?>
    
    <title>Guia de Pedido - Central (edicion)</title>
    
    <script>
    $(function(){
   /* Ponemos evento blur a la escucha sobre id nombre en id cliente. */
   $('#cliente').on('blur','#txtNumero',function(){
      /* Obtenemos el valor del campo */
      var valor = this.value;
      /* Si la longitud del valor es mayor a 2 caracteres.. */
      if(valor.length == 7){
 
         /* Cambiamos el estado.. */
         $('#estado').html('Cargando datos de servidor...');
 
         /* Hacemos la consulta ajax */
         var consulta = $.ajax({
            type:'POST',
            url:'js/php/frmEdicionPedidos.php',
            data:{txtNumero: valor, txtDocumento: $('#cboDocumento').val(), txtSerie: $('#cboSerie').val()},
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

    
    </script>
 
</head>
<body style="font-size: 8px">
 <div class="cliente" style="border: 0px solid">
    <form action="" method="POST">
    <table>
        <tr>
            <td align="right"><label>Nro.Doc.:</label><td><select id="cboDocumento" name="cboDocumento">
                    <?php 
                    filtrar_combo("select * from tipos_documento where tpdc_tipodoc ='PED' or tpdc_tipodoc ='GF' or tpdc_tipodoc ='GFA'");
                    ?>
                </select></td>
            <TD><select id="cboSerie" name="cboSerie">
                    <?php 
                            //filtrar_combo("");
                    session_start();
                    $empresa=$_SESSION['id_empresa'];
                    filtrar_combo("select empr_seriedoc from empresas WHERE empr_id = '$empresa'");
                    ?>
                </select></td>
            <td><input type="text" id="txtNumero" name="txtNumero" maxlength="7" value="" size="8" /></td>
            <td align="right"><label>Fecha:</label></td>
            <td><input type="text" id="txtFecha" name="txtFecha" size="5" value="" readonly/></td>
            <td><label>TC:</label></td>
                <td><input type="text" id="txtTipoCambio" name="txtTipoCambio" value="" size="5" readonly/> </td>
                <td><label>Dcto Max.:</label></td>
                <td><input type="text" id="txtDescuentoMaximo" name="txtDescuentoMaximo" value="" size="5" readonly/> </td>
                <td><label>Percepcion:</label></td>
                <td><input type="text" id="txtPercepcion" name="txtPercepcion" value="" size="3" readonly/> <label>&nbsp;%</label></td>
        </tr>
        <tr>
            <td align="right"><label>Cliente:</label></td>
            <td colspan="2"><input type="text" id="txtCodigoCliente" name="txtCodigoCliente" value="" size="14" readonly/></td>
            <td>
                <input type="text" id="txtCliente" name="txtCliente" value="" size="20" class="auto"/>
            </td>
            <td align="right"><label>Direccion:</label></td>
            <td colspan="7"><input type="text" id="cboDirAgencia" name="cboDirAgencia" size="40" readonly/></td>
                       
        </tr>
        <tr>
            <td align="right"><label>Condicion:</label></td>
            <td colspan="2"><input type="text" id="cboCondionesPago" name="cboCondionesPago" size="9" readonly/></td>
                       
            <td><label>Moneda:</label>
                <input type="text" id="cboMoneda" name="cboMoneda" size="1" readonly/>
                
                <td align="right"><label>Vendedor:</label></td>
            <td colspan="7">
                <input type="text" id="txtCodigoVendedor" name="txtCodigoVendedor" size="3" readonly/>
                <input type="text" id="txtVendedor" name="txtVendedor" size="25" class="venta"/>
                <input type="text" id="txtVendedor1" size="3" readonly/>
                <input type="text" id="txtVendedor2" size="6" readonly/>
                <input type="text" id="txtVendedor3" size="3" readonly/>
                <input type="text" id="txtVendedor4" size="6" readonly/></td>
        </tr>
        <tr>
            <td align="right"><label>ZONA:</label></td>
            <td colspan="3">
                <input type="text" id="txtCodigoZona" name="txtCodigoZona" size="2" readonly/>    
                <input type="text" id="txtZona" name="txtZona" size="8" class="zona"/>    
                <input type="text" id="txtDireccionZona" name="txtDireccionZona" size="16" readonly/></td>
            <td><label align="right">Observaciones:</label></td>
            <td colspan="7">
                <input type="text" id="txtObservaciones" name="txtObservaciones" SIZE="61"/>
                <input type="button" id="verLog" value="VER LOG"/></td>
        </tr>
    </table>
  </form>
</div>
    <div id="estado" style="border: 0px solid">
        <label>Estado:</label>
    </div>
    <br>

    <table>
        <tr style="background-color: #1E55A1; font-size: 12">
            <th width="118"><font color="white">Codigo </th>
            <Th width="250"><font color="white">Descripcion</th>
            <th width="90"><font color="white">Unid.</th>
            <th width="90"><font color="white">P.Lista</th>
            <th width="80"><font color="white">Dscto%    </th>
            <th width="90"><font color="white">ImpDscto</th>
            <th width="90"><font color="white">P.Venta</th>
            <th width="80"><font color="white">Cantidad</th>
            <th width="90"><font color="white">ImpVenta    </th>
            <th width="15"><font color="white">    </th>
        </tr>
        <tr>
            <td> <input type="text" id="txtCodigo" name="txtCodigo" size="12.5" readonly/></td>
            <td> <input type="text" id="txtDescripcion" name="txtDescripcion" onchange="porcDsct();" size="31" class="insumo"/></td>
            <td> <input type="text" id="txtUnidad" name="txtUnidad" size="8" readonly/></td>
            <td> <input type="text" id="txtPLista" name="txtPLista" size="10"/></td>
            <td> <input type="text" id="txtDscto" name="txtDscto" value="0.00" onkeyup="porcDsct();" onchange="porcDsct();" size="7"/></td>
            <td> <input type="text" id="txtDsctoPorc" name="txtDsctoPorc" size="8" readonly/></td>
            <td> <input type="text" id="txtPVenta" name="txtPVenta" size="8" readonly/></td>
            <td> <input type="text" id="txtCantidad" name="txtCantidad" value="0" onkeyup="porcDsct();"  onchange="porcDsct();"  size="7" /></td>
            <td> <input type="text" id="txtImporte" name="txtImporte" size="8" readonly/></td>
            <td align="center"><img src="imgs/disk.gif" id="ImgGraba">
                <img src="imgs/icons/cards_pencil.png" id="ImgNuevo">
                <img src="imgs/refresh.png" id="imgRef" style="width: 20px; height: 20px" /></td>
        </tr>
        <tr>
            <td><input type="text" id="CodInternoInsumo" size="12" readonly /></td>
            <td colspan="3" align="right"><label>P.Oferta:</label></td>
            <td> <input type="text" id="txtPOferta" name="txtPOferta" size="8" readonly/></td>
            <td colspan="3" align="right"><label>Stock:</label>    </td>
            <td> <input type="text" id="txtStock1" name="txtStock1" size="7" readonly/>    </td>
            <td> <input type="text" id="txtStock2" name="txtStock2" size="8" readonly/>    </td>
        </tr>
    </table>
    
<br>
    
    <table class="titulos">
        <tr class="headers">
        <!-- <tr style="background-color: #1E55A1; font-size: 12"> -->
            <th width="118"><font color="white">CODIGO</th>
            <Th width="290"><font color="white">DESCRIPCION</th>
            <th width="50"><font color="white">Cant</th>
            <th width="90"><font color="white">Unid.</th>
            <th width="80"><font color="white">P.Lista</th>
            <th width="90"><font color="white">Dscto</th>
            <th width="90"><font color="white">ImpDscto</th>
            <th width="80"><font color="white">P.Venta</th>
            <th width="90"><font color="white">Importe</th>
            <th width="15"></th>    
        </tr>
    </table>
  
    <div class="contiene_tabla">
       <table border="0" id="tabdet">
          
   
        </table>
    </tr>
   </div>
    <table>
        <tr>
            <td width="456" align="right"></td>
            <td></td>
            <td>
            <td width="250" align="right">Total:<input type="text" name="txtTotal" size="8" readonly/>
        </tr>
        <tr>
            <td align="center"><button id="btnAprobar"><img src="imgs/icons/finish.png" alt="x" />&nbsp; Aprobar Pedido</button>

            <td align="right" colspan="3" width="550"><button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Nuevo</button>    
            <button id="btnGuarar"><img src="imgs/disk.gif" alt="x" />&nbsp; Guardar</button>
            <button id="btnAnular"><img src="imgs/button_cancel.png" alt="x" />&nbsp; Anular</button>
            <button id="btnPrevio"><img src="imgs/printer.png" alt="x" />&nbsp; Previo</button>
            <button id="btnImprimir"><img src="imgs/printer.png" alt="x" />&nbsp; Imprimir</button>
            <button id="btnCerrar" onclick="window.close(this)"><img src="imgs/exit.gif" alt="x" />&nbsp; Cerrar</button> 
        </tr>
    </table>
</body>
</html>