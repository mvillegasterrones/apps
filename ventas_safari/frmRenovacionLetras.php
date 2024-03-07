<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/frmControlLetras.css" media="screen" rel="stylesheet" type="text/css" />
<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>
<html>
<head>
<title>Renovacion de Letras</title>

<script>
$(document).ready(function(){
          $("#btnIr").click(function(){
          tde=$("#txtDesde").val();
          tha=$("#txtHasta").val();
          
          $.ajax({url:"phpProcess/FillControlLetrasFechas.php",cache:false,type:"GET",data:{des:tde,has:tha},success:function(result){
                $("#tabdet").html(result);
           }});
         });
         })

$(document).ready(function(){
          $("#btnConsultar").click(function(){
          tCl=$("#txtCliente").val();
          if(tCl=="")
              {
                 windows.alert("Ingresar Nombre del Cliente");
                 tCl.focus();
              }
          else
          {        
          $.ajax({url:"phpProcess/FillControlLetrasCliente.php",cache:false,type:"GET",data:{cli:tCl},success:function(result){
                $("#tabdet").html(result);
           }});
          }
         });
         })
  
 $(document).ready(function(){
          $("#btnConsultar1").click(function(){
          tSP=$("#SPed").val();
          tSer=$("#txtSerie").val();
          tNum=$("#txtNumero").val();
          if(tSer=="")
              {
                 windows.alert("Ingresar Nombre del Cliente");
              }
          else
          {        
          $.ajax({url:"phpProcess/FillControlLetrasSerieNumero.php",cache:false,type:"GET",data:{sp:tSP,ser:tSer,num:tNum},success:function(result){
                $("#tabdet").html(result);
           }});
          }
         });
         }) 
</script>

</head>

<body>

<center>

<form onsubmit="getCheckboxValues(this); return false;">
<table border="0">
	<tr>
	<td align="right">Tipo de Doc:*</td>
    <td><input type="text" id="txtTipoDoc" name="txtTipoDoc" size="1" value="LE" readonly/>
    <input type="text" id="txtSerie" name="txtSerie" maxlength="3" size="1"/>    
    <input type="text" id="txtNumeero" name="txtNumero" maxlength="7" size="7"/></td>    
    </tr>
    <tr>
        <td align="right">Cliente: *</td>
        <td colspan="2"><input type="text" id="txtCodigoCliente" name="txtCodigoCliene" maxlength="11" size="1" readonly/>
        <input type="text" id="txtCliente" name="txtCliente" maxlength="7" size="40" readonly/>    
        RUC: &nbsp;<input type="text" id="txtRuc" name="txtRuc" maxlength="11" size="6" readonly/></td>    
    </tr>
    <!-- <tr>
        <td align="right">Direccion: *</td>
        <td colspan="4"><input type="text" id="txtCodigoDireccion" name="txtCodigoDireccion" maxlength="11" size="1" readonly/>    
        <input type="text" id="txtDireccion" name="txtDireccion" maxlength="7" size="60" readonly/></td>    
    </tr> 
    <tr>
        <td align="right">Importe: *</td>
        <td colspan="4"><input type="text" id="txtMoneda" name="txtMoneda" maxlength="11" size="1"/>
        <input type="text" id="txtImporte" name="txtImporre" maxlength="7" size="6"/></td>
    </tr> 
    <tr>
        <td align="right">Fecha de Emision:</td>
        <td colspan="4"><input type="text" id="txtFechaEmision" name="txtFechaEmision" size="6" readonly/></td>
    </tr>
    <tr>
        <td align="right">Fecha de Vencimiento:</td>
        <td colspan="4"><input type="text" id="txtFechaVencimiento" name="txtFechaVencimiento" size="6" readonly/></td>
    </tr>
    <tr> -->
        <td align="right">Vendedor:</td>
        <td colspan="4"><input type="text" id="txtCodigoVendedor" name="txtCodigoVendedor" size="1" readonly/>
        <input type="text" id="txtVendedor" name="txtVendedor" size="60" readonly/></td>
    </tr>
    <tr>
        <td align="right">Importe: *</td>
        <td colspan="4"><input type="text" id="txtMoneda" name="txtMoneda" maxlength="11" size="1" readonly/>
        <input type="text" id="txtImporte" name="txtImporre" maxlength="7" size="6" readonly/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        Saldo:
        <input type="text" id="txtSaldo" name="txtSaldo" size="5" readonly/></td>
    </tr> 
    <!--<tr>
        <td align="right">Fiador:</td>
        <td colspan="4"><input type="text" id="txtFiador" name="txtFiador" size="60"/></td>
    </tr>
    <tr>
        <td align="right">Aval Permanente:</td>
        <td colspan="4"><input type="text" id="txtAval" name="txtAval" size="60"/></td>
    </tr>
    <tr>-->
        <td align="right">Banco: </td>
        <td colspan="4"><input type="text" id="txtCodigoBanco" name="txtCodigoBanco" size="1" readonly/>
        <input type="text" id="txtBanco" name="txtCodigoBanco" size="40" readonly/></td>
    </tr>
    <tr>
        <td align="right">Nro Letra Renovada:</td>
        <td colspan="4"><input type="text" id="txtNroLetraRenovada" name="txtNroUnico" size="5" readonly/>
            <input type="text" id="txtNroTienda" name="txtNroUnico" size="1" readonly/></td>
    </tr>
    <tr>
        <td align="right">Pocentaje Renovado %:</td>
        <td colspan="4"><input type="text" id="txtPorcentajeRenovado" name="txtNroPlanilla" size="5" value="50.00"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Importe Depositado: 
        <input type="text" id="txtImporteDepositado" name="txtImporteDepositado" size="5" readonly/></td>
    </tr>
    <tr>
        <td align="right">Importe: </td>
        <td colspan="4">
            <input type="text" id="txtImporte2" name="txtImporte2" size="5"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            Fecha de Pago:
            <input type="date" id="txtFechaPago" name="txtFechaPago" size="5"/>
        </td>
    </tr>
    <tr>
        <td align="right">Fecha Emision: </td>
        <td colspan="4">
            <input type="text" id="txtFechaEmision" name="txtFechaEmision" size="5" value="fec hoy"/>
        </td>
    </tr>
    <tr>
        <td align="right">Nro Dias: </td>
        <td colspan="4"><input type="text" id="txtNroDias" name="txtNroDias" size="1" value="15"/></td>
    </tr>
    <tr>
        <td align="right">Fecha de Vcto: </td>
        <td colspan="4"><input type="date" id="txtFechaVcto" name="txtFechaVcto" size="5" /></td>
    </tr>
    
    
		</table>	
</form>
    <br>
    
    <div widht="800">
        <input type="button" id="btnNuevo" value="Nuevo" onclick=""></input>
        <input type="button" id="btnGrabar"  value="Grabar" onclick="this.close();"></input>
        <input type="button" id="btnAnular" value="Anular" disabled="true" onclick=""></input>
        <input type="button" id="btnImprimir"  value="Previo" disabled="true" onclick=""></input>
        <input type="button" id="btnCerrar" onclick="window.close(this)"  value="Cerrar" onclick=""></input>
    </div>
</center>

</body>
</html>

