<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/frmRegPedidos.css" media="screen" rel="stylesheet" type="text/css" />
<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>
<html>
<head>
    <?php include 'js/autocompletar.php'; ?>
<title>Estado de Cuenta</title>
     
<script> 
//creamos la variable ventana_secundaria que contendrá una referencia al popup que vamos a abrir 
//la creamos como variable global para poder acceder a ella desde las distintas funciones 
var ventana_secundaria 

function abrirVentana(){ 
//guardo la referencia de la ventana para poder utilizarla luego 
ventana_secundaria = window.open("frmGuiaPedido.php","ventanaB","toolbar=no, scrollbars=no, resizable=no, top=100, left=140, width=1060, height=450");
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
          
          $.ajax({url:"phpProcess/FillRegPedidosFechas.php",cache:false,type:"GET",data:{des:tde,has:tha},success:function(result){
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
              }
          else
          {        
          $.ajax({url:"phpProcess/FillRegPedidosCliente.php",cache:false,type:"GET",data:{cli:tCl},success:function(result){
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
          $.ajax({url:"phpProcess/FillRegPedidosSerieNumero.php",cache:false,type:"GET",data:{sp:tSP,ser:tSer,num:tNum},success:function(result){
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
<table border='0'>
    <tr>
        <td align="right"><label>Empresa/Tda:<b><font color="red">*</font></b></label></td>
        <td>
            <input type="text" id="txtTienda" size="9" readonly="true" />
            <input type="button" id="btnBuscar" style="background: url('imgs/icons/map.png'); background-repeat: no-repeat;" value="      Buscar  "/>
        </td>
    </tr>
    <tr>
        <td align="right"><label>Cliente:<b><font color="red">*</font></b></label></td>
        <td>
            <input type="text" id="txtCodigoCliente" size="9" readonly="true" />
            <input type="text" id="txtCliente" size="40" class="auto" />
        </td>
        <td><label>RUC:</label></td>
        <td><input type="text" id="txtRUC" readonly="true" size="6" /></td>
    </tr>
    <tr>
        <td align="right"><label>Direccion:<b><font color="red">*</font></b></label></td>
        <td>
            <input type="text" id="txtCodigoDireccion" size="1" readonly="true" />
            <input type="text" id="txtDireccion" size="50" readonly="true" />
        </td>
    </tr>
    <tr>
        <td align="right"><label>Observacion:<b><font color="red">*</font></b></label></td>
        <td>
            <input type="text" id="txtObservaciones" size="57" readonly="true" />
        </td>
        <td></td>
        <td rowspan="3" align='center'>
            <fieldset>
                <table border='0'>
                    <tr><td><input type="radio" name="rdx" id="rdx" checked="true" /><label>Pedientes</label></td></tr>
                    <tr><td><input type="radio" name="rdx" id="rdx"  /><label>Canceladas</label></td></tr>
                    <tr><td><input type="radio" name="rdx" id="rdx"  /><label>Todas</label></td></tr>
                </table>
            </fieldset>
            <label><input type="button" id="btnProcesar" value="      Procesar   " style="background: url('imgs/icons/circle_double.png'); background-repeat: no-repeat"</label>
        </td>
    </tr>
    <tr>
        <td align="right"><label>Vendedor:<b><font color="red">*</font></b></label></td>
        <td>
            <input type="text" id="txtCodigoVendedor" size="1" readonly="true" />
            <input type="text" id="txtVendedor" size="50" readonly="true" />
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <fieldset>
                <legend><label>Linea de Credito</label></legend>
                <table>
                    <tr>
                        <td align='right'>
                            <label>Monto:</label>
                            <input type="text" id="txtMonto" size="5" value="0.00" style=" text-align: right" readonly/>
                        </td>
                        <td align='right'>
                            <label>Consumido:</label>
                            <input type="text" id="txtConsumido" size="5" value="0.00" style=" text-align: right" readonly/>
                            <img src="imgs/icons/rep-segprod.png" />
                        </td>
                        <td align='right'>
                            <label>Por Consumir:</label>
                            <input type="text" id="txtProConsumir" size="5" value="0.00" style=" text-align: right" readonly/>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </td>
    </tr>
	
</table>
</form>

<table border="0" border-color=r"red">
    <tr bgcolor="#242DAE" style=" font-size: 11px;">
            <th width="45"><font color="#FAF8F8">EMP</th>
            <th width="45"><font color="#FAF8F8">TPDC</th>
            <th width="70"><font color="#FAF8F8">Documento</th>
            <th width="70"><font color="#FAF8F8">Fecha</th>
            <th width="60"><font color="#FAF8F8">Importe</th>
            <th width="60"><font color="#FAF8F8">Dias</th>
            <th width="70"><font color="#FAF8F8">Dev.Norm</th>
            <th width="70"><font color="#FAF8F8">Dev.Camb</th>
            <th width="60"><font color="#FAF8F8">Descto</th>
            <th width="60"><font color="#FAF8F8">Letras</th>
            <th width="60"><font color="#FAF8F8">Efectivo</th>
            <th width="60"><font color="#FAF8F8">Saldo</th>
            <th width="60"><font color="#FAF8F8">Vendedor</th>
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
    <br/>
    <br/>
    <div widht="800">
        <table width="830px" border="0">
        <tr>
            <td width="210px" align="right"><input type="text" id="txtMonto1" size="3" readonly/></td>
            <td width="60px" align="right"><input type="text" id="txtMonto2" size="3" readonly/></td>
            <td width="10px"><input type="text" id="txtMonto3" size="3" readonly/></td>
            <td width="10px"><input type="text" id="txtMonto4" size="3" readonly/></td>
            <td width="10px"><input type="text" id="txtMonto5" size="3" readonly/></td>
            <td width="10px"><input type="text" id="txtMonto6" size="3" readonly/></td>
            <td width="10px"><input type="text" id="txtMonto7" size="3" readonly/></td>
        </tr>
        <tr>
            <td colspan="7">
                <button id="btnAprobar"><img src="imgs/icons/finish.png" alt="x" />&nbsp; Nuevo</button>
                <button id="btnAprobar"><img src="imgs/icons/finish.png" alt="x" />&nbsp; Cerrar</button>
                <button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Pagos</button>    
                <button id="btnGuarar"><img src="imgs/disk.gif" alt="x" />&nbsp; Letras</button>
                <button id="btnPrevio1"><img src="imgs/printer.png" alt="x" />&nbsp; Previo Detalle</button>
                <button id="btnPrevio2"><img src="imgs/printer.png" alt="x" />&nbsp; Previo Documento</button>
            </td>
        </tr>
    </table>
    </div>
</center>

</body>
</html>
