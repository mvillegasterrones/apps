<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/frmEmisionDeNC.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/Correlativos.js"></script>


<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>
<html>
<head>
    <?php include 'js/autocompletar.php'; ?>
<title>Nota de Credito</title>
     
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
          
          $.ajax({url:"phpProcess/FillEmisionNCFechas.php",cache:false,type:"GET",data:{des:tde,has:tha},success:function(result){
                $("#tabdet").html(result);
           }});
         });
         })

$(document).ready(function(){
          $("#btnConsultar").click(function(){
          tCl=$("#txtCliente").val();
          tTD=$("#SPed1").val();
          if(tCl=="")
              {
                 windows.alert("Ingresar Nombre del Cliente");
                 tCl.focus();
              }
          else
          {        
          $.ajax({url:"phpProcess/FillEmisionNCCliente.php",cache:false,type:"GET",data:{cli:tCl,tDoc:tTD},success:function(result){
                $("#tabdet").html(result);
           }});
          }
         });
         })
  
 $(document).ready(function(){
          $("#btnConsultar1").click(function(){
          tSP=$("#SPed2").val();
          tSer=$("#txtSerie").val();
          tNum=$("#txtNumero").val();
          if(tSer=="")
              {
                 windows.alert("Ingresar Nombre del Cliente");
              }
          else
          {        
          $.ajax({url:"phpProcess/FillEmisionNCSerieNumero.php",cache:false,type:"GET",data:{sp:tSP,ser:tSer,num:tNum},success:function(result){
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
<table>
    <tr>
        <td align="right"><label>Documento:<font color="red"><b>*</b></font></label></td>
        <td>
            <select id="cboDocumento">
                    <?php filtrar_combo("SELECT tpdc_tipodoc FROM tipos_documento WHERE tpdc_tipodoc='NC'"); ?>
            </select>
            <select id="cboSerie">
                        <?php
                        session_start();
                        $empresa=$_SESSION['id_empresa'];
                        filtrar_combo("SELECT empr_seriedoc FROM empresas WHERE empr_id='$empresa'");
                        ?>
            </select>
            <input type="text" name="txtNumero" id="txtNumero" size="4" maxlength="7" />
            <input type="text" name="txtNombre" id="txtNombre" value="NOTA DE CREDITO" SIZE="15" readonly/>
        <td width="100" align="right"><label>Fecha:<font color="red"><b>*</b></font></label></td>
        <td><input type="text" id="txtFechaEmision" name="txtFechaEmision" size="5" value="01/01/2014" readonly="true"/></td>
    </tr>
    <tr>
        <td align="right"><label>Referncia:<font color="red"><b>*</b></font></label></td>
        <td colspan="3">
            <select id="cboDocumento">
                    <?php filtrar_combo("SELECT tpdc_tipodoc FROM tipos_documento WHERE tpdc_tipodoc='FAC' or tpdc_tipodoc='BOL'"); ?>
            </select>
            <input type="text" name="txtNumero" id="txtSerie" size="2" maxlength="3" />
            <input type="text" name="txtSerie" id="txtNumero1" value="" SIZE="4" maxlength="7"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;
            <label>Descontar A:<font color="red"><b>*</b></font></label>
            <select id="cboDocumento1">
                    <?php filtrar_combo("SELECT tpdc_tipodoc FROM tipos_documento WHERE tpdc_tipodoc='FAC' or tpdc_tipodoc='BOL'"); ?>
            </select>
            <input type="text" name="txtNumero1" id="txtNumeero1" size="2" maxlength="3" />
            <input type="text" name="txtSerie1" id="txtSerie1" value="" SIZE="4" maxlength="7"/>
        </td>
        <td width="40px"></td>
        <td align="right">
            <label>Saldo:<font color="red"><b></b></font></label>
        </td>
        <td>
            <input type="text" id="txtSueldo" name="txtSuledo" size="6" value="0.00" style="text-align: right" readonly="true"/>
        </td>
    </tr>
    <tr>
        <td align="right"><label>Cliente:<font color="red"><b>*</b></font></label></td>
        <td colspan="3">
            <input type="text" name="txtCodigoCliente" id="txtCodigoCliente" size="9" readonly="true" />
            <input type="text" name="txtCliente" id="txtCliente" size="57" readonly="true" />
        </td>
        <td width="40px"></td>
        <td align="right">
            <label>RUC/DNI:<font color="red"><b></b></font></label>
        </td>
        <td>
            <input type="text" id="txtRUCDNI" name="txtRUCDNI" size="6" value=""readonly="true"/>
        </td>
    </tr>
    <tr>
        <td align="right"><label>Direccion:<font color="red"><b>*</b></font></label></td>
        <td colspan="3">
            <input type="text" name="txtDireccion" id="txtDireccion" size="72" readonly="true"/>
        </td>
        <td width="40px"></td>
        <td rowspan="2" colspan="2">
            <div style="border: 1px solid; width: 150px;height: 45px">
                <input type="radio" name="rdx" /><label>&nbsp;Descuento</label><br/>
                <input type="radio" name="rdx" /><label>&nbsp;Devolucion Normal</label><br/>
                <input type="radio" name="rdx" /><label>&nbsp;Devolucion por Cambio</label><br/>
            </div>
        </td>
    </tr>
    <tr>
        <td align="right"><label>Vendedor:<font color="red"><b>*</b></font></label></td>
        <td colspan="3">
            <input type="text" name="txtCodigoVendedor" id="txtCodigoVendedor" size="1" readonly="true" />
            <input type="text" name="txtVendedor" id="txtVendedor" size="20" readonly="true" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Moneda:<font color="red"><b></b></font>
                <input type="text" id="txtMoneda" name="txtMoneda" size="1" readonly="true" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" id="btnAgregar" value="VER LOG" style="width: 70px" onclick=""></input>    
        </td>
        
    </tr>
	
</table>
</form>

    <table border="0" border-color=r"red" style="font-size: 12px">
	<tr bgcolor="#242DAE" >
            <th width="120px"><font color="#FAF8F8">Codigo</th>
            <th width="250px"><font color="#FAF8F8">Descripcion</th>
	    <th width="90px"><font color="#FAF8F8">Cantidad</th>
	    <th width="90px"><font color="#FAF8F8">UND</th>
	    <th width="90px"><font color="#FAF8F8">P.Venta</th>
	    <th width="90px"><font color="#FAF8F8">Total</th>
            <th width="15px"><font color="#FAF8F8"><input type="checkbox" checked="true"></th>
        <th width="15px"><font color="#FAF8F8">        
	</tr>
</table>
    
    <div class="contiene_tabla">
    <table border="0" id="tabdet">
        
        <?php 
        //$x= new Querys(); 
        //$x->RegPedidosFillTblFechas('2014-01-01' , '2014-05-12');
        
        ?>
        
    </table>
        <br>
        <br>
</div>
    <table border="0" width="793px">
        <tr>
            <td width="280px" ></td>
            <td align="right" style=" padding-right: 33px ">
                <table style="border: 1px seashell">
                    <tr bgcolor="#242DAE" style=" font-size: 12px">
                        <td width="80px" align="center"><font color="white"> Subtotal:</font></td>
                        <td><input type="text" id="txtSubTotal"  name="txtSubTotal" size="10" style="text-align: right" value="0.00" readonly="true" /></td>
                    </tr>
                    <tr bgcolor="#242DAE" style=" font-size: 12px">
                        <td width="80px" align="center"><font color="white">IGV:</font></td>
                        <td><input type="text" id="txtSubTotal"  name="txtSubIGV" size="10" style="text-align: right" value="0.00" readonly="true" /></td>
                    </tr>
                    <tr bgcolor="#242DAE" style=" font-size: 12px">
                        <td width="80px" align="center"><font color="white"> Total:</font></td>
                        <td><input type="text" id="txtSubTotal"  name="txtTotal" size="10" style="text-align: right" value="0.00" readonly="true" /></td>
                    </tr>
                </table>
            </td>
            
        </tr>
        <tr>
            <td align="center"></td>

            <td align="right" colspan="3"><button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Nuevo</button>    
            <button id="btnGuarar"><img src="imgs/disk.gif" alt="x" />&nbsp; Guardar</button>
            <button id="btnAnular"><img src="imgs/button_cancel.png" alt="x" />&nbsp; Anular</button>
            <button id="btnPrevio"><img src="imgs/printer.png" alt="x" />&nbsp; Previo</button>
            <button id="btnImprimir"><img src="imgs/printer.png" alt="x" />&nbsp; Imprimir</button>
            <button id="btnCerrar" onclick="window.close(this)"><img src="imgs/exit.gif" alt="x" />&nbsp; Cerrar</button> 
        </tr>
    </table>
</center>


</body>
</html>
