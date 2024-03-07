<link href="css/frmSeguimientoPedidos.css" media="screen" rel="stylesheet" type="text/css" />
<html>
<head>
<title>Registro de Pedidos</title>
</head>

<body>

<center>

<form id="seguimiento_pedidos" name="seguimiento_pedidos" method="post" action="">
<table>
	<tr>
	<td>Desde<td><input type="date" name="txtdesde">
	<td>Hasta<td><input type="date" name="txthasta">
	<td>Cliente:<input type="text" nmae="cliente" size="30" style="background-color: #12E26F">
	<td><input type="button" id="btnActualizar" value="Actualizar">
	</tr>
	<tr>
	<td colspan="4">
	<fieldset style="background-color: #A7F5EF">
		<legend style="font-size: 16px">Consulta de Pedidos</legend>
		<table>
			<tr><td>Documento 
				<td><select name="tppedido">
				<?php 
				include('libreria.php');
				filtrar_combo("select * from tipos_documento where tpdc_tipodoc ='ped'");

				?>	
				</select>
				<td><input type="text" id="txtSerie" name="txtserie" value="" maxlength="3" size="1" style="text-align: right"/></td>
				<td><input type="text" id="txtNumero" name="txtnumero" value="" maxlength="7" size="4" style="text-align: right"/></td>
				<td><input type="button" id="btnConsultar" value="Consultar">
			</tr>
		</table>	
	</fieldset>
	</tr>
</table>
</form>

<table border="0" border-color=r"red">
	<tr bgcolor="#242DAE" >
		<th width="150px"><font color="#FAF8F8">Documento
		<th width="90px"><font color="#FAF8F8">Fecha
		<th width="300px"><font color="#FAF8F8">Cliente
		<th width="150px"><font color="#FAF8F8">Vendedor
		<th width="90px"><font color="#FAF8F8">Estado
        <th width="15px"><font color="#FAF8F8">
	</tr>
</table>

    <div class="contiene_tabla">
    <table border="0" class="tblLlenar" CELLPADDING="9">
        
    </table>
    
    

</center>

</body>
</html>