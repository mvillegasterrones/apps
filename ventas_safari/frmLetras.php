<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/frmControlLetras.css" media="screen" rel="stylesheet" type="text/css" />
<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>
<html>
<head>
    <?php include 'js/autocompletar.php'; ?>
<title>Control de Letras</title>
     
<script> 
//creamos la variable ventana_secundaria que contendrá una referencia al popup que vamos a abrir 
//la creamos como variable global para poder acceder a ella desde las distintas funciones 
var ventana_secundaria 

function abrirVentana(){ 
//guardo la referencia de la ventana para poder utilizarla luego 
ventana_secundaria = window.open("frmGuiaPedido.php","miventana","toolbar=no, scrollbars=no, resizable=no, top=100, left=140, width=1060, height=450");
} 

function cerrarVentana(){ 
//la referencia de la ventana es el objeto window del popup. Lo utilizo para acceder al método close 
ventana_secundaria.close() 
} 
</script> 

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
    <td><select name="tppedido" id="SPed">
				<?php 
				
				filtrar_combo("select * from tipos_documento where tpdc_tipodoc='LE'");

				?>	
	     </select>
    <input type="text" id="txtSerie" name="txtserie" value="" maxlength="3" size="1" style="text-align: right"/>
				<input type="text" id="txtNumero" name="txtnumero" value="" maxlength="7" size="4" style="text-align: right"/></td>  
    </tr>
    <tr>
        <td align="right">Cliente: *</td>
        <td colspan="2"><input type="text" id="txtCodigoCliente" name="txtCodigoCliene" maxlength="11" size="1" readonly/>
            <input type="text" id="txtCliente" name="txtCliente" maxlength="7" size="40" class="auto"/>    
        RUC: &nbsp;<input type="text" id="txtRuc" name="txtRuc" maxlength="11" size="6" readonly/></td>    
    </tr>
    <tr>
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
    <tr>
        <td align="right">Vendedor:</td>
        <td colspan="4"><input type="text" id="txtCodigoVendedor" name="txtCodigoVendedor" size="1" readonly/>
            <input type="text" id="txtVendedor" name="txtVendedor" size="60" class="venta"/></td>
    </tr>
    <tr>
        <td align="right">Fiador:</td>
        <td colspan="4"><input type="text" id="txtFiador" name="txtFiador" size="60"/></td>
    </tr>
    <tr>
        <td align="right">Aval Permanente:</td>
        <td colspan="4"><input type="text" id="txtAval" name="txtAval" size="60"/></td>
    </tr>
    <tr>
        <td align="right">Banco: </td>
        <td colspan="4"><input type="text" id="txtCodigoBanco" name="txtCodigoBanco" size="1" readonly/>
            <input type="text" id="txtBanco" name="txtCodigoBanco" size="40" class="banco"/></td>
    </tr>
    <tr>
        <td align="right">Nro Unico:</td>
        <td colspan="4"><input type="text" id="txtNroUnico" name="txtNroUnico" size="10"/></td>
    </tr>
    <tr>
        <td align="right">Nro Planilla:</td>
        <td colspan="4"><input type="text" id="txtNroPlanilla" name="txtNroPlanilla" size="10" readonly /></td>
    </tr>
    <tr>
        <td align="right">Seccion: </td>
        <td colspan="4">
            <select>
                <option value="1">Cartera</option>
                <option value="2">Descuento</option>
                <option value="3">Cobranza Libre</option>
            </select>
        </td>
    </tr>
    <tr>
        <td align="right">Protestada: </td>
        <td colspan="4">
            <select>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </td>
    </tr>
    <tr>
        <td align="right">Observaciones: </td>
        <td colspan="4"><input type="text" id="txtObservaciones" name="txtObservaciones" size="60" /></td>
    </tr>
    
		</table>	
</form>
    <br>
    
    <div widht="800">
        <input type="button" id="btnNuevo" value="Nuevo" onclick="abrirVentana();"></input>
        <input type="button" id="btnGrabar"  value="Grabar" onclick="this.close();"></input>
        <input type="button" id="btnAnular" value="Anular" onclick="abrirVentana();"></input>
        <input type="button" id="btnImprimir"  value="Imprimir" onclick="this.close();"></input>
        <input type="button" id="btnCerrar" onclick="window.close(this)"  value="Cerrar" onclick="this.close();"></input>
    </div>
</center>

</body>
</html>

