<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<script src="js/jsProforma/general.js"></script>

<script src="js/jsProforma/general.js"></script>
<script src="js/Correlativos.js"></script>
<script src="js/Cargar_frmFacBol.js"></script>

<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/frmEmisionDeFacturas.css" media="screen" rel="stylesheet" type="text/css" />

<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>

<head>
    <?php include 'js/autocompletar.php'; ?>
    <title>Emisi&oacute;n de Facturas</title>
</head>
 <center>
<div id="cliente">
<form action="" method="POST">
   
    <table border="0">
        <tr>
            <td align="right">Documento:*
            <td><select id="cboDocumento">
                    <?php 
                    filtrar_combo("select * from tipos_documento where tpdc_tipodoc='FAC' or tpdc_tipodoc='BOL'");
                    ?>
                </select>
            <td><select id="cboSerie">
                    <?php 
                            //filtrar_combo("");
                            session_start();
                            $empresa=$_SESSION['id_empresa'];
                            filtrar_combo("select empr_seriedoc from empresas where empr_id='$empresa'");
                    ?>
                </select>
                <td colspan="2" width="200"><input type="text" ID="txtNumero" value="" size="4" maxlength="7"/>
                
                <td align="right">Fecha Emision:*
                <td><input type="date" id="txtFecha" value="" size="8" />
           </tr>
        <tr>
            <td align="right">Cliente:*
            <td colspan="2"><input type="text" id="txtCodigoCliente" size="14" style="text-align: center" readonly/>
            <td colspan="2"><input type="text" id="txtCliente" size="36" class="auto"/>
            <td align="right">RUC/DNI:*
            <td colspan="0"><input type="text" id="txtRUCDNI" size="8" readonly/>
            
        </tr>
        <tr>
            <td align="right">Direccion:</td>
            
            <td colspan="4">
                <select id="cboDirAgencia" style="width: 370px">
          
                </select>
                </td>
                <td></td>
                <td align="right"><input type="button" id="btnCargarPedidos"  style='height:23px; text-align: center' value="Cargar Pedidoss" /> </td>    
            
        </tr>
        <tr>
            <td align="right">Condicion Vta:*</td>
            <td colspan="4">
                
                   <select id="cboCondionesPago" style="width: 133">
                    <?php 
                            //filtrar_combo("");
                            filtrar_combo_id("select cdpg_id, cdpg_nomb from condicionespago");
                    ?>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
                Moneda:*
                <input type="text" id="cboMoneda" size="1" readonly/>
                
            </td>
            <td></td>
            <td align="center"><input type="button" id="btnVerLog"  style='height:23px; text-align: center' value="VER LOG" /> </td>    
        </tr>
        <tr>
            <td align="right">Vendedor:</td>
            <td colspan="4"><input type="text" id="txtCodigoVendedor" size="1" value="" readonly/>
            <input type="text" id="txtVendedor" size="30" value="" readonly/>
            &nbsp;
               Nro Guia:
           <input type="text" id="txtNroGui1" size="1" value="" readonly/></td>
           <td colspan="1"><input type="text" id="txtNroGui2" size="5" value="" readonly/></td>
           
           <td colspan="2"><input type="text" id="txtNroGui3" size="1" value="" readonly/>
           <input type="text" id="txtNroGui4" size="7" value="" readonly/></td>
        </tr>
        
    </table>
    
    </form>
</div>
<br>
    <table class="titulos">
        <tr class="headers">
        <!-- <tr style="background-color: #1E55A1; font-size: 12"> -->
            <th width="100"><font color="white">CODIGO</th>
            <Th width="270"><font color="white">DESCRIPCION</th>
            <th width="90"><font color="white">UND</th>
            <th width="90"><font color="white">Cant.</th>
            <th width="80"><font color="white">P.U.</th>
            <th width="90"><font color="white">Dscto</th>
            <th width="90"><font color="white">Importe</th>
            <th width="15"></th>    
        </tr>
    </table>
  
    <div class="contiene_tabla">
       <table border="0" class="tblLlenar" CELLPADDING="9">
          
           
        </table>
    </tr>
   </div>
    <table>
        <tr>
            <td width="460"></td>
            <td>Valor Vta.<input type="text" id="txtValorVta" size="4" value="0.00" style="text-align: right" readonly/></td>
            <td>IGV:<input type="text" id="txtIGV" size="4" value="0.00" style="text-align: right" readonly/></td>
            <td>Total:<input type="text" id="txtTotal" size="9" value="0.00" style="text-align: right" readonly/></td>
        </tr>
        <tr>
            <td colspan="4" align="right">Total C/Per.:<input type="text" id="txtTotalCPer" size="9" value="0.00" style="text-align: right" readonly/></td>
        </tr>
    </table>
        <table border="0">
        <tr>
            <td width="850" align="right">
            <button id="btnGuardar"><img src="imgs/disk.gif" alt="x" />&nbsp; Guarar</button>
            <button id="btnImprimir"><img src="imgs/printer.png" alt="x" />&nbsp; Imprimir</button>
            <button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Nuevo</button>    
            <button id="btnAnular"><img src="imgs/button_cancel.png" alt="x" />&nbsp; Anular</button>
            <button id="btnEliminar"><img src="imgs/printer.png" alt="x" />&nbsp; Eliminar</button>
            <button id="btnCerrar" onclick="window.close(this)"><img src="imgs/exit.gif" alt="x" />&nbsp; Cerrar</button> 
            </td>
        </tr>
    </table>
<center>