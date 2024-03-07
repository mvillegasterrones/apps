<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<script src="js/jsProforma/General.js"></script>

<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/frmEmisionDeGuias.css" media="screen" rel="stylesheet" type="text/css" />
<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>

<head>
    <?php include 'js/autocompletar.php'; ?>
    <title>Emisi&oacute;n de Gu&iacute;as</title>
</head>
 <center>
<div class="formulario">
<form id="frmGuiaPedido" action="" method="post">
   
    <table border="0">
        <tr>
            <td align="right"><label>Documento:*</label>
            <td><select id="cboDocumento">
                    <?php 
                    filtrar_combo("select * from tipos_documento where tpdc_tipodoc='GR'");
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
                <input type="text" id="txtGuiaRemision" size="16" value="GUIA DE REMISION" readonly/>
                <td align="right"><label>Fecha Emision:*</label>
                <td><input type="date" id="txtFechaEmision" value="01/12/2014" size="8" />
                <td align="right"><label>Fecha Traslado:*</label>
                <td><input type="date" id="txtFechaTraslado" value="" />
           </tr>
        <tr>
            <td align="right"><label>Cliente:*</label>
            <td colspan="2"><input type="text" id="txtCodigoCliente" size="13" style="text-align: center" readonly/>
            <td colspan="2"><input type="text" id="txtCliente" size="32" class="auto" />
            <td align="right"><label>RUC/DNI:*</label>
            <td colspan="0"><input type="text" id="txtCodigoCliente1" size="8" readonly />
                    <?php 
                        //filtrar_combo_id("select zona_id, zona_nomb from zonas");
                    ?>
            <td align="right"><button id="btnCargarPedidos"  style='width:150px; height:23px; text-align: center'><img src="imgs/icons/cart_add.png" style="height: 13px" alt="x" />&nbsp; Cargar Pedidos </td>
            <td><input type="text" id="txtDocumentoPed" name="txtDocumentoPed" size="1" value="PED" readonly><input type="text" id="txtDocumentoPedido" name="txtDocumentoPedido" size="8" maxlength="10" /></td>
                
        </tr>
        <tr>
            <td align="right"><label>Direccion:</label></td>
            <td colspan="4">
                <select id="cboDirAgencia" style="width: 400px">
                    <?php 
                    //filtrar_combo_id("select zona_id, zona_nomb from zonas");
                    ?>
                </select>
            </td>
            <td align="right" colspan="3"><button id="btnVerLog">&nbsp; VER LOG </td>
        </tr>
        <tr>
            <td align="right"><label>Motivo:*</label></td>
            <td colspan="4">
            <select id="cboMotivo" disabled="true">
                    <?php 
                    filtrar_combo_id("select mtvm_id, mtvm_nomb from motivo_movimiento
                        where mtvm_id=206");
                    ?>
                </select>
        <label>Cond.Venta:*</label>
                <select id="cboCondionesPago" style="width: 100" disabled="true">
                    <?php 
                            //filtrar_combo("");
                            filtrar_combo_id("select cdpg_id, cdpg_nomb from condicionespago");
                    ?>
                </select>
            </td>
            <td colspan="4">
        <label>Vendedor:*</label>
                <input type="text" id="txtCodigoVendedor" size="1" readonly/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>Moneda:*</label>
                <input type="text" id="txtMonedar" size="1" readonly/>
                &nbsp;
                <input type="text" id="txtExtra1" size="1" readonly/>
                <input type="text" id="txtExtra2" size="8" readonly/>
            </td>
        </tr>
        <tr>
            <td align="right"><label>Transportista:</label></td>
            <td colspan="2"><input type="text" id="txtRucTransportista" size="13" style="text-align: center" value="20516093367" readonly/></td>
            <td colspan="2"><input type="text" id="txtTransportista" size="32" value="TRANSPORTE KAROL" readonly class="auto"/></td>
            <td align="right"><label>Placa:</label></td>
            <td colspan="0"><input type="text" id="txtPlacs" size="5" value=""/></td>
            <td align="right"><label>Cant. Transp.:</label></td>
            <td colspan="0"><input type="text" id="txtCantTransp" size="5" value="" readonly/></td>
        </tr>
        <tr>
            <td colspan="5"></td>
            <td align="right"><label>Chofer:</label></td>
            <td><input type="text" id="txtChofer" class="chofer"></td>
            <td align="right"><label>Licencia:</label></td>
            <td><input type="text" id="txtLicencia" size="5" readonly/></td>
        </tr>
        <tr>
            <td align="right"><label>FV/BV</label></td>
            <td>
                <select id="cboTipoDocumento">
                    <?php
                    filtrar_combo("select * from tipos_documento where tpdc_tipodoc='FAC' or tpdc_tipodoc='BOL' ");
                    ?>
                </select>
            </td>
            <td><select id="cboTipoSerie">
                    <?php 
                            //filtrar_combo("");
                            //session_start();
                            $empresa=$_SESSION['id_empresa'];
                            filtrar_combo("select empr_seriedoc from empresas where empr_id='$empresa'");
                    ?>
                </select>
            </td>
            <td><input type="text" id="txtTipoNumero" size="5" maxlength="7"/>
                <img src="imgs/icons/list.png" alt="x" />
                <img src="imgs/printer.png" alt="x" />
            </td>
                
        </tr>
    </table>
    
</div>
    <table class="titulos">
        <tr class="headers">
        <!-- <tr style="background-color: #1E55A1; font-size: 12"> -->
            <th width="118"><font color="white">CODIGO</th>
            <Th width="400"><font color="white">DESCRIPCION</th>
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
            <td width="456" align="right"></td>
            <td></td>
            <td width="150" align="right" style="background-color: #1E55A1"><font color="white">Total:</font><input type="text" name="txtTotal" size="8" value="0.00" style="text-align:right" readonly/>
        </tr>
        <tr>
            <td align="left"><button id="btnGuardar"><img src="imgs/disk.gif" alt="x" />&nbsp; Guarar</button>
            <button id="btnImprimir"><img src="imgs/printer.png" alt="x" />&nbsp; Imprimir</button>

            <td align="right" colspan="3" width="550">
            <button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Nuevo</button>    
            
            <button id="btnAnular"><img src="imgs/button_cancel.png" alt="x" />&nbsp; Anular</button>
            <button id="btnEliminar"><img src="imgs/printer.png" alt="x" />&nbsp; Eliminar</button>
            <button id="btnCerrar" onclick="window.close(this)"><img src="imgs/exit.gif" alt="x" />&nbsp; Cerrar</button> 
        </tr>
    </table>
<center>