<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/frmCajeLetrasFacturas.css" media="screen" rel="stylesheet" type="text/css" />
<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>
<html>
<head>
    <?php include 'js/autocompletar.php'; ?>
<title>Canje de Letras por Facturas</title>
     
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

<body style="font-size: 5;">

<center>

<form onsubmit="getCheckboxValues(this); return false;">
<table border="0">
    <tr>
        <td align="right"><label>Tipo y Nro.Documento:</label></td>
        <td>
            <input type="text" id="txtTipoDoc" size="1" value="CL" readonly="true" />
            <select id="cboSerie">
                <?php
                session_start();
                $empresa=$_SESSION['id_empresa'];
                filtrar_combo("SELECT empr_seriedoc FROM empresas WHERE empr_id='$empresa'");
                ?>
            </select>
            <input type="text" id="txtNumero" size="5" maxlength="7" />
        </td>
        <td align="right"><label>Vendedor:</label>
            <input type="text" id="txtCodigoVendedor" size="1" readonly="true"/>
        </td>
        <td>
            <input type="text" id="txtVendedor" size="20" class="venta" />
        </td>
    </tr>
    <tr>
        <td align="right"><label>Cliente:</label></td>
        <td>
            <input type="text" id="txtCodigoCliente" size="10" readonly="true" />
            <input type="text" id="txtCliente" size="35" class="auto"/>
        </td>
        <td align="right" colspan="0"><label>RUC/DNI:</label></td>
        <td>
            <input type="text" id="txtRUCDNI" size="10" readonly="true" />
        </td>
    </tr>
    <tr>
        <td align="right"><label>Fecha Emision:</label></td>
        <td>
            <input type="text" id="txtFechaEmision" maxlength="10" value="01/01/2014" size="6" readonly="true"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Moneda:</label>
            <input type="text" id="txtMoneda" size="1" readonly="true" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Tipo Cambio:</label>
            <input type="text" id="txtTipoCambio" size="1" readonly="true" />
        </td>
        <td align="right"><label>Nro.Letras:</label></td>
        <td>
            <input type="text" id="txtNroLetras" maxlength="10" value="1" size="1" style="text-align: right" disabled="true"/>
        </td>
    </tr>
    <tr>
        <td align="right"><label>Fiador:</label></td>
        <td>
            <input type="text" id="txtFiador" value="" size="35"/>
        </td>
    </tr>
    <tr>
        <td align="right"><label>Aval Permanente:</label></td>
        <td>
            <input type="text" id="txtAval" value="" size="35" />
        </td>
        <td align="right"><label>D.O.I. :</label></td>
        <td>
            <input type="text" id="txtDOI" value="" size="6"/>
        </td>
    </tr>
        
</table>
</form>
    <br>
    <table border="0">
        <tr>
            <td>
                <table border="0" border-color=r"red">
                    <tr style=" background: #242DAE; font-size: 12px ; color: #ffffff">
                        <th width="35">TP</th>
                        <th width="35">Ser</th>
                        <th width="80">Documento</th>
                        <th width="80">F.Emision</th>
                        <th width="35">M</th>
                        <th width="80">Importe</th>
                        <th width="25"></th>
                        <th width="15"></th>
                    </tr>
                    <tr>
                        <td><input type="text" id="txtTipoDoc1" size="1" value="FAC" readonly="true"/></td>
                        <td><input type="text" id="txtTipoDoc1" size="1" value="" maxlength="3 />"</td>
                        <td><input type="text" id="txtTipoDoc1" size="5" value="" maxlength="7"/></td>
                    </tr>
                </table>
                <div class="contiene_tabla">
                <table border="0" id="tabdet">

                    <?php 
                    //$x= new Querys(); 
                    //$x->RegPedidosFillTblFechas('2014-01-01' , '2014-05-12');

                    ?>

                </table>
                </div>
            </td>
            <td width="250">
                <table border="0" border-color=r"red">
                    <tr style=" background: #242DAE; font-size: 12px ; color: #ffffff">
                        <th width="35">DOC</th>
                        <th width="90">Documento</th>
                        <th width="80">F.Emision</th>
                        <th width="80">Importe</th>
                        <th width="80">F.Vencim.</th>
                        <th width="25"></th>
                        <th width="15"></th>
                    </tr>
                </table>
                <div class="contiene_tabla2">
                    <table border="0" id="tabdet2">

                        <?php 
                        //$x= new Querys(); 
                        //$x->RegPedidosFillTblFechas('2014-01-01' , '2014-05-12');

                        ?>

                    </table>
               </div>
            </td>
        </tr>
        
   </table>
    <table width="870px" border="0">
           <tr>
               <td width="280" align="right"><label>Importe Facturas:</label></td>
                <td ><input type="text" id="txtImporte1" size="10" value="0.00" readonly="true" /></td>
                <td width="120" align="right"><label>Importe Facturas:</label></td>
                <td ><input type="text" id="txtImporte2" size="10" value="0.00" readonly="true"/></td>
          </tr>
    </table>
    <br>
    <br>
    <cneter>
    <div widht="800">
        <table width="888px">
            
            <tr>
                <td align="right">
                    <input type="button" id="btnNuevo" value="Nuevo" onclick=""  style="width: 100px;"></input>
                    <input type="button" id="btnAnularr"  value="Anular" onclick=""  style="width: 100px;"></input>
                    <input type="button" id="btnSalir" onclick="window.close(this)" value="Cerrar" onclick=""  style="width: 100px;"></input>
                </td>
            </tr>
        </table>
    </div>
</center>

</body>
</html>

