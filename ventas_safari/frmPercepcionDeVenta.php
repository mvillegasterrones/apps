<link href="css/frmEmisionBolFac.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />

<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<script src="js/jsProforma/general.js"></script>
<script src="js/frmPercepcion.js"></script>

<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>
<html>
<head>
    <?php include 'js/autocompletar.php'; ?>
<title>Percepcion Venta</title>
     

</head>

<body>

<center>

    <form action="" method="post">
<table border='0'>
	<tr>
        	<td align='right'><label>Nro.Documento:<font color="red"><b>*</b></font></label></td>
				<td><select name="tppedido" id="SPed">
				<?php 
                                session_start();
                                $empresa=$_SESSION['id_empresa'];
				filtrar_combo("select * from tipos_documento where tpdc_tipodoc='CPE' or tpdc_tipodoc='CPC'");
				?>	
				</select>
                                    <select id="cboSerie">
                                        <?php filtrar_combo("select empr_seriedoc from empresas where empr_id='$empresa'"); ?>
                                    </select>
				<input type="text" id="txtNumero" name="txtnumero" value="" maxlength="7" size="4" style="text-align: right"/>
                                </td>
                                <td align='right'><label>Fecha:<font color="red"><b>*</b></font></label></td>
                                <td><input type="date" id='txtFecha' name="txtFecha" /></td>
                                <td align='right'><label>TC:<font color="red"><b>*</b></font></label></td>
                                <td><input type="text" id='txtTipoCambio' name="txtTipoCambio" value="0.00" size="4" readonly/></td>
	</tr>
        <tr>
            <td align='right'><label>Cliente:<font color="red"><b>*</b></font></label></td>
            <td>
                <input type="text" id='txtCodigoCliente' name="txtCodigoCliente" size="9" readonly/>
                <input type="text" id='txtCliente' name="txtCliente" value="" class="auto"/>
            </td>
            <td align='right'><label>RUC/DNI:<font color="red"><b>*</b></font></label></td>
            <td>    <input type="text" id='txtCodigoCliente1' name="txtRUCDNI" size="9" readonly/> </td>
            <td colspan="2" align='right'>
                <input type="text" name="txtNumeroBolFac" id="txtNumeroBolFac" maxlength="10" size="7" />
                <input type="button" style="background: url('imgs/disk.gif');
                                            background-repeat: no-repeat; 
                                            background-position: left; 
                                            background-color: transparent; 
                                            height: 25px; padding-right: 20px" id="btnCargarFvBv" value="       Cargar FV / BV"/>
            </td>
            
        </tr>
        <tr>
            <td align='right'><label>Vendedor:<font color="red"><b>*</b></font></label></td>
            <td>
                <input type="text" id='txtCodigoVendedr' name="txtCodigoVendedor" size="1" readonly/>
            </td>
        </tr>
</table>
</form>

<table border="0">
    <tr bgcolor="#242DAE" style="font-size: 12px">
        <th width="110px"><font color="#FAF8F8">Tipo Doc.</th>
	<th width="110px"><font color="#FAF8F8">Numero.Doc</th>
	<th width="110px"><font color="#FAF8F8">Fec.Emision</th>
	<th width="110px"><font color="#FAF8F8">Monto Cobrado</th>
        <th width="110px"><font color="#FAF8F8">% Percepcion</th>
        <th width="110px"><font color="#FAF8F8">Impo.Percepcion</th>
        <th width="110px"><font color="#FAF8F8">Monto Total</th>
        <th width="20px"><font color="#FAF8F8">    
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
</div>
    <table width="850" border="0">
        <tr>
            <td colspan="2">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label>Importe Total de la Percepcion::</label>
                <input type="text" name="txtTotalPercepcion" id="txtTotalPercepcion" size="13" value="0.00" style="text-align: right" readonly/>
            </td>
        </tr>
        <tr>
            <td align="center">
            </td>
            <td align="right">
            <button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Nuevo</button>    
            <button id="btnGuarar"><img src="imgs/disk.gif" alt="x" />&nbsp; Guardar</button>
            <button id="btnAnular"><img src="imgs/button_cancel.png" alt="x" />&nbsp; Anular</button>
            <button id="btnPrevio" disabled="true"><img src="imgs/printer.png" alt="x" />&nbsp; Eliminar</button>
            <button id="btnImprimir"><img src="imgs/printer.png" alt="x" />&nbsp; Imprimir</button>
            <button id="btnCerrar" onclick="window.close(this)"><img src="imgs/exit.gif" alt="x" />&nbsp; Cerrar</button> 
        </tr>
    </table>
</center>

</body>
</html>
