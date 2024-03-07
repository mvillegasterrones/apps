<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>

<script src="js/jsProforma/general.js"></script>
<script src="js/Correlativos.js"></script>
<script src="js/Cargar_frmFacBol.js"></script>

<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/frmEmisionDeFacturas-texto.css" media="screen" rel="stylesheet" type="text/css" />

<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>

<head>
    <?php include 'js/autocompletar.php'; ?>
    <title>Emisi&oacute;n de Facturas - Texto</title>
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
                <td><input type="date" id="txtFecha" size="8" />
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
                <select id="cboDirAgencia" style="width: 370">
                    <?php 
                    //filtrar_combo_id("select zona_id, zona_nomb from zonas");
                    ?>
                </select>
                </td>
                <td></td>
                
            
        </tr>
        <tr>
            <td align="right">Cond. Vta:*</td>
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
            &nbsp;&nbsp;&nbsp;
                Moneda:*
                <input type="text" id="txtMoneda" size="1" value="S"/>
                
            </td>
            <td></td>
            
        </tr>
        <tr>
            <td align="right">Vendedor:</td>
            <td colspan="4"><input type="text" id="txtCodigoVendedor" size="1" value="" readonly/>
                <input type="text" id="txtVendedor" size="30" value="" class="venta" />
            
        </tr>
        
    </table>
</form>
    </div>
     
    <br>

    <table class="titulos">
        <tr class="headers">
        <!-- <tr style="background-color: #1E55A1; font-size: 12"> -->
            <th width="20"><font color="white"></th>
            <Th width="180"><font color="white">DESCRIPCION</th>
            <th width="40"><font color="white">Importe</th>
            <th width="40"><font color="white"></th>
            <th width="15"></th>    
        </tr>
        <tr style="background-color: cyan">
            <td></td>
            <td><input type="text" id="txtDescripcion" size="92" value="" class=""/></td>
            <td><input type="text" id="txtImporte" size="8" style="text-align: right" value="0.00" /></td>
            <td>
                <img src="imgs/disk.gif" />
                <img src="imgs/cancel.png"/>
            </td>
        </tr>
    </table>
  
    <div class="contiene_tabla">
       <table border="0" class="tblLlenar" CELLPADDING="9">
          
           
        </table>
   </div>
    <table width="780">
        <tr>
            <td width="260"></td>
            <td>Valor Vta.<input type="text" id="txtValorVta" size="4" value="0.00" style="text-align: right" readonly/></td>
            <td>IGV:<input type="text" id="txtIGV" size="4" value="0.00" style="text-align: right" readonly/></td>
            <td>Total:<input type="text" id="txtTotal" size="9" value="0.00" style="text-align: right" readonly/></td>
        </tr>
        <tr>
            
        </tr>
    </table>
        <table border="0">
        <tr>
            <td width="770" align="right">
            <button id="btnGuardar"><img src="imgs/disk.gif" alt="x" />&nbsp; Guarar</button>
            <button id="btnImprimir"><img src="imgs/printer.png" alt="x" />&nbsp; Imprimir</button>
            <button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Nuevo</button>    
            <button id="btnAnular" disabled="true"><img src="imgs/button_cancel.png" alt="x" />&nbsp; Anular</button>
            <button id="btnEliminar"><img src="imgs/printer.png" alt="x" />&nbsp; Eliminar</button>
            <button id="btnCerrar" onclick="window.close(this)"><img src="imgs/exit.gif" alt="x" />&nbsp; Cerrar</button> 
            </td>
        </tr>
    </table>
<center>