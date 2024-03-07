<link href="css/frmEmisionBolFac.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />

<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>
<html>
<head>
    <?php include 'js/autocompletar.php'; ?>
<title>Emision de Proformas</title>
     
<script> 
//creamos la variable ventana_secundaria que contendrá una referencia al popup que vamos a abrir 
//la creamos como variable global para poder acceder a ella desde las distintas funciones 
var ventana_secundaria 

function abrirVentana(){ 
//guardo la referencia de la ventana para poder utilizarla luego 
ventana_secundaria = window.open("frmProformas.php","ventanaA","toolbar=no, scrollbars=no, resizable=no, top=100, left=140, width=1039, height=375");
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
          
          $.ajax({url:"phpProcess/FillEmisionProformasFechas.php",cache:false,type:"GET",data:{des:tde,has:tha},success:function(result){
                $("#tabdet").html(result);
           }});
         });
         })

$(document).ready(function(){
          $("#btnConsultar").click(function(){
          tdes=$("#txtDesde").val();
          thas=$("#txtHasta").val();
          tCl=$("#txtCliente").val();
          if(tCl=="")
              {
                 windows.alert("Ingresar Nombre del Cliente");
              }
          else
          {        
          $.ajax({url:"phpProcess/FillEmisionProformasCliente.php",cache:false,type:"GET",data:{des:tdes,has:thas,cli:tCl},success:function(result){
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
	<td>Desde<td><input type="date" id="txtDesde" name="txtDesde"/>
	<td>Hasta<td><input type="date" id="txtHasta" name="txtHasta"/>
    <td><input type="button" id="btnIr" value="Ir"/> &nbsp;
    <td>Cliente:<input type="text" id="txtCliente" name="txtCliente" size="30" class="auto"/>
	<td><input type="button" id="btnConsultar" value="Actualizar"/>
	</tr>
	
</table>
</form>

<table border="0" border-color=r"red">
	<tr bgcolor="#242DAE" >
		<th width="105px"><font color="#FAF8F8">Documento
		<th width="135px"><font color="#FAF8F8">Fecha
		<th width="360px"><font color="#FAF8F8">Cliente
		<th width="70px"><font color="#FAF8F8">Total
		<th width="90px"><font color="#FAF8F8">Estado
        <th width="40px"><font color="#FAF8F8">    
        <th width="15px"><font color="#FAF8F8">        
	</tr>
</table>
    
    <div class="contiene_tabla">
    <table border="0" id="tabdet">
        
        <?php 

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
