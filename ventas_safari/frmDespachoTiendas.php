<link href="css/frmDespachoTiendas.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />

<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<script src="js/jsProforma/General.js"></script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/frmProformas.js"></script>
<!-- http://www.lawebdelprogramador.com -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Despacho a Tiendas</title>
     <!--<script src="scripts/jquery-latest.js"></script>
     <script src="scripts/jquery.min.js"></script>
     <script src="js/ajax.js"></script>
     
     <link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
     <link href="css/frmDespachoTiendas.css" media="screen" rel="stylesheet" type="text/css" />
     <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"  /> -->
     <?php include('libreria.php'); ?>
     <?php include('js/Querys.php'); ?>
     
     <?php include 'js/autocompletar.php'; ?>
<script> 
//creamos la variable ventana_secundaria que contendrá una referencia al popup que vamos a abrir 
//la creamos como variable global para poder acceder a ella desde las distintas funciones 
var ventana_secundaria 

function abrirVentana(){ 
//guardo la referencia de la ventana para poder utilizarla luego 
ventana_secundaria = window.open("frmDespachoDeTienda.php","ventanaC","toolbar=no, scrollbars=no, resizable=no, top=100, left=140, width=1060, height=420");
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
          
          $.ajax({url:"phpProcess/FillDespachoTiendasFechas.php",cache:false,type:"POST",data:{des:tde,has:tha},success:function(result){
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
          $.ajax({url:"phpProcess/FillDespachoTiendasCliente.php",cache:false,type:"POST",data:{cli:tCl},success:function(result){
                $("#tabdet").html(result);
           }});
          }
         });
         })
  
 $(document).ready(function(){
          $("#btnConsultar1").click(function(){
          tPed=$("#SPed").val();    
          tSer=$("#txtSerie").val();
          tNum=$("#txtNumero").val();
          if(tSer=="")
              {
                 windows.alert("Ingresar Nombre del Cliente");
              }
          else
          {        
          $.ajax({url:"phpProcess/FillDespachoTiendasSerieNumero.php",cache:false,type:"POST",data:{ped: tPed,ser:tSer,num:tNum},success:function(result){
                $("#tabdet").html(result);
           }});
          }
         });
         }) 
</script>

</head>

<body>

<center>

    <form method="post" action="">
<table border="0" cellspading="0">
	<tr>
	<td>Desde:</td><td><input type="date" id="txtDesde" name="txtDesde"/></td>
	<td>Hasta:</td><td><input type="date" id="txtHasta" name="txtHasta"/></td>
    <td><input type="button" id="btnIr" value="Ir"/> &nbsp;</td>
    <td>Tienda/Almacen:</td><td><input type="text" id="txtCliente" name="txtCliente" class="tienda" size="30"></input></td>
    <td><input type="button" id="btnConsultar" value="Cargar"></input></td>
	</tr>
	<tr>
	<td colspan="4">
	<fieldset style="background-color: #A7F5EF">
        <legend style="font-size: 16px">Consulta de Pedido</legend>
		<table>
			<tr><td>Documento</td> 
				<td><select name="SPed" id="SPed">
				<?php 
				
				filtrar_combo("select * from tipos_documento where tpdc_tipodoc='GF' or tpdc_tipodoc='PED'");

				?>	
				</select></td>
				<td><input type="text" id="txtSerie" name="txtserie" value="" maxlength="3" size="1" style="text-align: right"/></td>
				<td><input type="text" id="txtNumero" name="txtnumero" value="" maxlength="7" size="4" style="text-align: right"/></td>
				<td><input type="button" id="btnConsultar1" value="Consultar"/></td>
			</tr>
		</table>	
	</fieldset>
    </td>
    <td colspan="3" rowspan="2" align="right" valign="top">
        <div id="lista"></div>
        <!--<div class="lista" style="border: 0px solid;border-color:#000000;; width: 205px; height: 58px">
            
        </div> -->
    </td>
	</tr>
</table>
</form>

<table border="0" border-color="red">
	<tr bgcolor="#242DAE" >
		<th width="105px"><font color="#FAF8F8">Documento</font></th>
		<th width="135px"><font color="#FAF8F8">Fecha</font></th>
		<th width="360px"><font color="#FAF8F8">Tienda/Almacen</font></th>
		<th width="70px"><font color="#FAF8F8">Importe</font></th>
		<th width="90px"><font color="#FAF8F8">Estado</font></th>
        <th width="40px"><font color="#FAF8F8">    </font></th>
        <th width="15px"><font color="#FAF8F8"> </font></th>
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
        <input type="button" id="btnAgregar" value="Agregar" onclick="abrirVentana();"></input>
        <input type="button" id="btnCerrar" onclick="window.close(this)"  value="Cerrer" onclick="this.close();"></input>
    </div>
</center>

</body>
</html>
