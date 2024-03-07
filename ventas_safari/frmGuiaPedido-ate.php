<link href="css/frmGuiaPedido.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />

<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<script src="js/jsProforma/General.js"></script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/frmProformas.js"></script>

<!--<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
        <script src="js/jquery-1.4.2.min.js"></script>
        <script src="js/autocomplete.jquery.js"></script>
        <script src="js/jsProforma/general.js"></script>
        
        <link type="text/css" rel="stylesheet" href="css/defaultX.css"></link>
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/frmGuiaPedido.css" media="screen" rel="stylesheet" type="text/css" /> -->

<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>

<!doctype html>
<html lang="en">
<head>
  <?php include 'js/autocompletar.php'; ?>
    
    <title>Guia de Pedido - Ate</title>
</head>

    <table>
        <tr>
            <td><label>Nro.Doc.:</label><td><select id="cboDocumento">
                    <?php 
                    filtrar_combo("select * from tipos_documento where tpdc_tipodoc ='PED' or tpdc_tipodoc ='GFA'");
                    ?>
                </select>
            <TD><select id="cboSerie">
                    <?php 
                            //filtrar_combo("");
                    session_start();
                    $empresa=$_SESSION['id_empresa'];
                    filtrar_combo("select empr_seriedoc from empresas WHERE empr_id = '$empresa'");
                    ?>
                </select>
                <td><input type="text" id="txtNumero" value="" size="8" />
                <td><label>Fecha:</label>
                <td><input type="date" id="txtFecha" value="" />
                <td><label>TC:</label>
                <td><input type="text" id="txtTipoCambio" value="" size="5" readonly/> 
                <td><label>Dcto Max.:</label>
                <td><input type="text" id="txtDescuentoMaximo" value="" size="5" readonly/> 
                <!--<td><label>Percepcion:</label>
                <td><input type="text" id="txtPercepcion" value="" size="3" readonly/>% -->
        </tr>
        <tr>
            <td><label>Cliente:</label>
            <td colspan="2"><input type="text" id="txtCodigoCliente" value="<?php  $r=mysql_query("select empr_ruc from empresas where empr_id='$empresa'"); echo mysql_result($r,0); ?>" size="14" readonly/>
            <td>
                <input type="text" id="txtCliente" value="<?php  $r=mysql_query("select empr_nomb from empresas where empr_id='$empresa'"); echo mysql_result($r,0); ?>" size="20" class="auto" readonly/>
            </td>
            <?php
                    $r=mysql_query("select empr_ruc from empresas where empr_id='$empresa'"); 
                    $e = mysql_result($r,0);
            ?>
            <td><label>Direccion:</label>
            <td colspan="7"><select id="cboDireccion" style="width: 540">
                    <?php
                    
                    filtrar_combo_id("select empr_id, empr_direcc from empresas where empr_ruc='$e'");
                    ?>
                </select>    
        </tr>
        <tr>
            <td><label>Condicion:</label>
            <td colspan="2"><select id="cboCondionesPago" style="width: 113">
                    <?php 
                         filtrar_combo_id("select cdpg_id, cdpg_nomb from condicionespago");
                    ?>
                </select>    
            <td><label>Moneda:</label>
            <select id="cboMoneda">
                    <option value="S">S</option>
                    <option value="D">D</option>
                </select>
            <td><label>Vendedor:</label>
            <td colspan="7">
                <input type="text" id="txtCodigoVendedor" size="3" readonly/>
                <input type="text" id="txtVendedor" size="25" class="venta"/>
                <input type="text" id="txtVendedor1" size="3" readonly/>
                <input type="text" id="txtVendedor2" size="6" readonly/>
                <input type="text" id="txtVendedor3" size="3" readonly/>
                <input type="text" id="txtVendedor4" size="6" readonly/>
        </tr>
        <tr>
            <td><label>ZONA:</label>
            <td colspan="3">
                <input type="text" id="txtCodigoZona" size="2" readonly/>    
                <input type="text" id="txtZona" size="8" class="zona"/>    
                <input type="text" id="txtDireccionZona" size="16" readonly/>
            <td><label>Observaciones:</label>
            <td colspan="7">
                <input type="text" id="txtObservaciones" SIZE="61"/>
                <input type="button" id="verLog" value="VER LOG"/>
        </tr>
    </table>
    
    <br>
    <div id="cliente">
    <table>
        <tr style="background-color: #1E55A1; font-size: 12">
            <th width="118"><font color="white">Codigo </th>
            <Th width="250"><font color="white">Descripcion</th>
            <th width="90"><font color="white">Unid.</th>
            <th width="90"><font color="white">P.Lista</th>
            <th width="80"><font color="white">Dscto%    </th>
            <th width="90"><font color="white">ImpDscto</th>
            <th width="90"><font color="white">P.Venta</th>
            <th width="80"><font color="white">Cantidad</th>
            <th width="90"><font color="white">ImpVenta    </th>
            <th width="15"><font color="white">    </th>
        </tr>
        <tr>
            <td> <input type="text" id="txtCodigo" size="12.5" readonly/></td>
            <td> <input type="text" id="txtDescripcion" onchange="porcDsct();" size="31" class="insumo"/></td>
            <td> <input type="text" id="txtUnidad" style="text-align: center" size="8" readonly/></td>
            <td> <input type="text" id="txtPLista" size="10"/></td>
            <td> <input type="text" id="txtDscto" value="0.00" onkeyup="porcDsct();" onchange="porcDsct();" size="7"/></td>
            <td> <input type="text" id="txtDsctoPorc" size="8" readonly/></td>
            <td> <input type="text" id="txtPVenta" size="8" readonly/></td>
            <td> <input type="text" id="txtCantidad" value="0" onkeyup="porcDsct();"  onchange="porcDsct();"  size="7" /></td>
            <td> <input type="text" id="txtImporte" size="8" readonly/></td>
            <td> <img src="imgs/icons/accept.png"/></td>    
        </tr>
        <tr>
            <td colspan="3" align="right">P.Oferta:</td>
            <td> <input type="text" id="txtPOferta" size="8" readonly/></td>
            <td colspan="3" align="right">Stock:    </td>
            <td> <input type="text" id="txtStock1" size="7" readonly/>    </td>
            <!--<td> <input type="text" id="txtStock2" size="8" readonly/>    </td> -->
        </tr>
    </table>
    </div>
    
<br>
    
    <table class="titulos">
        <tr class="headers">
        <!-- <tr style="background-color: #1E55A1; font-size: 12"> -->
            <th width="118"><font color="white">CODIGO</th>
            <Th width="250"><font color="white">DESCRIPCION</th>
            <th width="90"><font color="white">Cant</th>
            <th width="90"><font color="white">Unid.</th>
            <th width="80"><font color="white">P.Lista</th>
            <th width="90"><font color="white">Dscto</th>
            <th width="90"><font color="white">ImpDscto</th>
            <th width="80"><font color="white">P.Venta</th>
            <th width="90"><font color="white">Importe</th>
            <th width="15"></th>    
        </tr>
    </table>
  
    <div class="contiene_tabla">
       <table border="0" class="tblLlenar" CELLPADDING="9">
          
           <?php
           $color_row= array('#C8FFEC','#12E26F');
           $ind_color=0;
               for($i=1; $i<=6;$i++)
               {
                   echo '<tr class="color">';
                   //echo "<tr bgcolor = ${color_row[$ind_color]}>";
                   //$ind_color++;
                   //$ind_color %=2;
            
                   echo '<td width="128">';
                   echo '<td width="288">';
                   echo '<td width="90">';
                   echo '<td width="90">';
                   echo '<td width="80">';
                   echo '<td width="90">';
                   echo '<td width="90">';
                   echo '<td width="80">';
                   echo '<td width="90"></tr>';
               }
           ?> 
        </table>
    </tr>
   </div>
    <table>
        <tr>
            <td width="456" align="right">Items:
            <td><input type="text" name="txtItems" size="2" readonly/>
            <td>
            <td width="250" align="right">Total:<input type="text" name="txtTotal" size="8" readonly/>
        </tr>
        <tr>
            <td align="center"><button id="btnAprobar"><img src="imgs/icons/finish.png" alt="x" />&nbsp; Aprobar Pedido</button>

            <td align="right" colspan="3" width="550"><button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Nuevo</button>    
            <button id="btnGuarar"><img src="imgs/disk.gif" alt="x" />&nbsp; Guardar</button>
            <button id="btnAnular"><img src="imgs/button_cancel.png" alt="x" />&nbsp; Anular</button>
            <button id="btnPrevio"><img src="imgs/printer.png" alt="x" />&nbsp; Previo</button>
            <button id="btnImprimir"><img src="imgs/printer.png" alt="x" />&nbsp; Imprimir</button>
            <button id="btnCerrar" onclick="window.close(this)"><img src="imgs/exit.gif" alt="x" />&nbsp; Cerrar</button> 
        </tr>
    </table>