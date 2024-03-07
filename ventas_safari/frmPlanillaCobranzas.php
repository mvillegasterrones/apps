<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/frmPlanillaCobranzas.css" media="screen" rel="stylesheet" type="text/css" />
<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>
<html>
<head>
    <?php include 'js/autocompletar.php'; ?>
<title>Planilla de Cobranzas</title>
     
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
<table>
    <tr>
        <td align="right">Nro.Planilla:*</td>
        <td>
            <input type="text" id="txtNroPlanilla" size="1" value="PC" readonly/>
            <select id="cboSerie">
                <?php
                session_start();
                $empresa=$_SESSION['id_empresa'];
                filtrar_combo("select empr_seriedoc from empresas where empr_id='$empresa'"); 
                ?>
            </select>
            <input type="text" id="txtNumero" size="4" maxlength="7" />
        </td>
    </tr>
    <tr>
        <td align="right">Documento:*</td>
        <td>
            <select>
                <?php filtrar_combo("SELECT tpdc_tipodoc FROM tipos_documento WHERE tpdc_tipodoc='FAC' or tpdc_tipodoc='BOL' or tpdc_tipodoc='CPC' or tpdc_tipodoc='GF' or tpdc_tipodoc='CPE' or tpdc_tipodoc='GFA' or tpdc_tipodoc='LE'"); ?>
            </select>
            <input type="text" id="txtSerie" size="1" maxlength="3"/>
            <input type="text" id="txtNumero1" size="4" maxlength="7"/>
        </td>
        <td width="300px" align="right">
            Fecha de Emision:
            <input type="text" id="txtFechaEmision" size="8" readonly/>
        </td>
    </tr>
    <tr>
        <td align="right">Cliente:*</td>
        <td colspan="2">
            <input type="text" id="txtCodigoCliente" size="10" readonly/>
            <input type="text" id="txtCliente" size="55" readonly />       
        </td>
    </tr>
    <tr>
        <td align="right">Moneda:*</td>
        <td colspan="2">
            <input type="text" id="txtMoneda" size="1" readonly />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            Importe:
            <input type="text" id="txtImporte" size="5" readonly />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Saldo:
            <input type="text" id="txtSaldo" size="5" readonly />
        </td>
    </tr>
    <tr>
        <td align="right">Fecha de Cobrnaza:</td>
        <td colspan="2">
            <input type="date" id="txtFechaCobrnaza"/>
            &nbsp;&nbsp;
            T.Docum:
            <select id="cboTDocum">
                <?php filtrar_combo("SELECT tpdc_tipodoc FROM tipos_documento WHERE tpdc_tipodoc='EF' or tpdc_tipodoc='CH' or tpdc_tipodoc='DP'"); ?>
            </select>
            &nbsp;&nbsp;
            Importe Cobranza:
            <input type="text" id="txtImporteCobranza" size="4" style="text-align: right;"/>
        </td>
        <td align="right">
            NO:
            <input type="text" id="txtNO" size="6" />
            &nbsp;&nbsp;
            <input type="button" id="btnDocsPendientes" value="Docum. Pendientes"/>
        </td>
    </tr>
    <tr>
        <td align="right">Observaciones:</td>
        <td colspan="2">
            <input type="text" id="txtObsrvaciones" size="71" />
        </td>
    </tr>
    <tr>
        <td align="right" colspan="4">
            <input type="button" id="btnGrabar" value="Grabar" style="width: 80px;" />
            <input type="button" id="btnNuevo"  value="Nuevo" style="width: 80px;"/>
        </td>
        
    </tr>
        
</table>
</form>
    <br>
        <table border="0" border-color=r"red">
	<tr bgcolor="#242DAE" style="font-size: 11" >
		<th width="35px"><font color="#FAF8F8">TP</th>
		<th width="100px"><font color="#FAF8F8">Documento</th>
		<th width="100px"><font color="#FAF8F8">Importe</th>
		<th width="100px"><font color="#FAF8F8">Fec.Cobranza</th>
		<th width="100px"><font color="#FAF8F8">Imp.Cobranza</th>
        <th width="50px"><font color="#FAF8F8">NO    </th>
        <th width="210px"><font color="#FAF8F8">Cliente        </th>
        <th width="100px"><font color="#FAF8F8">Observaciones</th>
        <th width="40px"><font color="#FAF8F8"></th>
        <th width="15px"><font color="#FAF8F8"></th>
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
    </center>
    <table width="460px" border="0">
        <tr>
            <td align="right">
                Total:
                <input type="text" size="13" readonly />
            </td>
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
            <input type="button" id="btnBloquear"  value="Bloq/Desbloq" onclick=""  style="width: 100px;"></input>
            <input type="button" id="btnSalir" onclick="window.close(this)" value="Cerrar" onclick=""  style="width: 100px;"></input>
        </td>
        </tr>
        </table>
    </div>
</center>

</body>
</html>

