<link href="css/frmGuiaPedido.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />

<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<script src="js/jsProforma/General.js"></script>
<script src="js/Cargar_frmProforma.js"></script>
<script src="js/Correlativos.js"></script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/frmProformas.js"></script>

<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>

<!doctype html>
<html lang="en">
<head>
  <?php include 'js/autocompletar.php'; ?>
    
    <title>Guia de Pedido - Central</title>
    
    <script>
  $(document).ready(function(){
          $("#imgGraba").click(function(){
          t01=$("#cboDocumento").val();
          t02=$("#cboSerie").val();
          t03=$("#txtNumero").val();
          t04=$("#txtTipoCambio").val();
          t05=$("#txtDescuentoMaximo").val();
          t06=$("#txtPercepcion").val();
          t07=$("#txtCodigoCliente").val();
          t08=$("#cboDirAgencia").val();
          t09=$("#cboCondionesPago").val();
          t010=$("#cboMoneda").val();
          t011=$("#txtCodigoVendedor").val();
          t012=$("#txtObservaciones").val();
          t013=$("#txtZona").val();
          t014=$("#CodInternoInsumo").val();
          t015=$("#txtCantidad").val();
          t016=$("#txtUnidad").val();
          t017=$("#txtPLista").val();
          t018=$("#txtDscto").val();
          t019=$("#txtDsctoPorc").val();
          t020=$("#txtPVenta").val();
          
          $.ajax({url:"phpProcess/GrabarCabGuiaPedidoCentral.php",cache:false,type:"POST",data:{t1:t01,t2:t02,t3:t03,t4:t04,t5:t05,t6:t06,t7:t07,t8:t08,t9:t09,t10:t010,t11:t011,t12:t012,t13:t013,t14:t014,t15:t015,t16:t016,t17:t017,t18:t018,t19:t019,t20:t020},success:function(result){
                  //$("#tabdet").html(result);
           }});
         });
         })
         
          $(document).ready(function(){
          $("#ImgGraba").click(function(){
          t01=$("#cboDocumento").val();
          t02=$("#cboSerie").val();
          t03=$("#txtNumero").val();
          $.ajax({url:"phpProcess/cargarTablaGuiaPedidosCentral.php",cache:false,type:"POST",data:{td:t01,t2:t02,t3:t03},success:function(result){
                $("#tabdet").html(result);
           }});
         });
         })
         
         $(document).ready(function(){
          $("#imgRef").click(function(){
          t01=$("#cboDocumento").val();
          t02=$("#cboSerie").val();
          t03=$("#txtNumero").val();
          $.ajax({url:"phpProcess/cargarTablaGuiaPedidosCentral.php",cache:false,type:"POST",data:{td:t01,t2:t02,t3:t03},success:function(result){
                $("#tabdet").html(result);
           }});
         });
         })
         
  </script>
  
</head>
<div id="cliente">
    <form action="" method="POST">
    <table>
        <tr>
            <td align="right"><label>Nro.Doc.:</label><td><select id="cboDocumento" name="cboDocumento">
                    <?php 
                    filtrar_combo("select * from tipos_documento where tpdc_tipodoc ='PED' or tpdc_tipodoc ='GF' or tpdc_tipodoc ='GFA'");
                    ?>
                </select>
            <TD><select id="cboSerie" name="cboSerie">
                    <?php 
                            //filtrar_combo("");
                    session_start();
                    $empresa=$_SESSION['id_empresa'];
                    filtrar_combo("select empr_seriedoc from empresas WHERE empr_id = '$empresa'");
                    ?>
                </select>
            <td><input type="text" id="txtNumero" name="txtNumero" value="" size="8"/>
            <td align="right"><label>Fecha:</label>
                <td><input type="date" id="txtFecha" name="txtFecha" value="" />
                <td><label>TC:</label>
                <td><input type="text" id="txtTipoCambio" name="txtTipoCambio" value="" size="5" readonly/> 
                <td><label>Dcto Max.:</label>
                <td><input type="text" id="txtDescuentoMaximo" name="txtDescuentoMaximo" value="" size="5" readonly/> 
                <td><label>Percepcion:</label>
                <td><input type="text" id="txtPercepcion" name="txtPercepcion" value="0.00" size="3" readonly/> <label>&nbsp;%</label>
        </tr>
        <tr>
            <td align="right"><label>Cliente:</label>
            <td colspan="2"><input type="text" id="txtCodigoCliente" name="txtCodigoCliente" value="" size="14" readonly/>
            <td>
                <input type="text" id="txtCliente" name="txtCliente" value="" size="20" class="auto"/>
            </td>
            <td align="right"><label>Direccion:</label>
            <td colspan="7"><select id="cboDirAgencia" name="cboDirAgencia" style="width: 540">
                    <option>[Seleccione Direccion del Cliente]</option>
                </select>    
        </tr>
        <tr>
            <td align="right"><label>Condicion:</label>
            <td colspan="2"><select id="cboCondionesPago" name="cboCondionesPago" style="width: 113">
                    <?php 
                         filtrar_combo_id("select cdpg_id, cdpg_nomb from condicionespago");
                    ?>
                </select>    
            <td><label>Moneda:</label>
                <select id="cboMoneda" name="cboMoneda">
                    <option value="S">S</option>
                    <option value="D">D</option>
                </select>
            <td align="right"><label>Vendedor:</label>
            <td colspan="7">
                <input type="text" id="txtCodigoVendedor" name="txtCodigoVendedor" size="3" readonly/>
                <input type="text" id="txtVendedor" name="txtVendedor" size="25" class="venta"/>
                <input type="text" id="txtVendedor1" size="3" readonly/>
                <input type="text" id="txtVendedor2" size="6" readonly/>
                <input type="text" id="txtVendedor3" size="3" readonly/>
                <input type="text" id="txtVendedor4" size="6" readonly/>
        </tr>
        <tr>
            <td align="right"><label>ZONA:</label>
            <td colspan="3">
                <input type="text" id="txtCodigoZona" name="txtCodigoZona" size="2" readonly/>    
                <input type="text" id="txtZona" name="txtZona" size="8" class="zona"/>    
                <input type="text" id="txtDireccionZona" name="txtDireccionZona" size="16" readonly/>
            <td><label align="right">Observaciones:</label>
            <td colspan="7">
                <input type="text" name="txtObservaciones" SIZE="61"/>
                <input type="button" id="verLog" value="VER LOG"/>
        </tr>
    </table>
 <!--   </form>
</div>
    <br>
    <div id="cliente">
        <form action="" method="POST"> -->
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
            <td> <input type="text" id="txtCodigo" name="txtCodigo" size="12.5" readonly/></td>
            <td> <input type="text" id="txtDescripcion" name="txtDescripcion" onchange="porcDsct();" size="31" class="insumo"/></td>
            <td> <input type="text" id="txtUnidad" name="txtUnidad" size="8" readonly/></td>
            <td> <input type="text" id="txtPLista" name="txtPLista" size="10"/></td>
            <td> <input type="text" id="txtDscto" name="txtDscto" value="0.00" onkeyup="porcDsct();" onchange="porcDsct();" size="7"/></td>
            <td> <input type="text" id="txtDsctoPorc" name="txtDsctoPorc" size="8" readonly/></td>
            <td> <input type="text" id="txtPVenta" name="txtPVenta" size="8" readonly/></td>
            <td> <input type="text" id="txtCantidad" name="txtCantidad" value="0" onkeyup="porcDsct();"  onchange="porcDsct();"  size="7" /></td>
            <td> <input type="text" id="txtImporte" name="txtImporte" size="8" readonly/></td>
            <td align="center"><img src="imgs/disk.gif" id="ImgGraba">
                <img src="imgs/icons/cards_pencil.png" id="ImgNuevo">
                <img src="imgs/refresh.png" id="imgRef" style="width: 20px; height: 20px" /></td>
        </tr>
        <tr>
            <td><input type="text" id="CodInternoInsumo" size="12" readonly /></td>
            <td colspan="3" align="right"><label>P.Oferta:</label></td>
            <td> <input type="text" id="txtPOferta" name="txtPOferta" size="8" readonly/></td>
            <td colspan="3" align="right"><label>Stock:</label>    </td>
            <td> <input type="text" id="txtStock1" name="txtStock1" size="7" readonly/>    </td>
            <td> <input type="text" id="txtStock2" name="txtStock2" size="8" readonly/>    </td>
        </tr>
    </table>
    
</form>
</div>
    
<br>
    
    <table class="titulos">
        <tr class="headers">
        <!-- <tr style="background-color: #1E55A1; font-size: 12"> -->
            <th width="118"><font color="white">CODIGO</th>
            <Th width="290"><font color="white">DESCRIPCION</th>
            <th width="50"><font color="white">Cant</th>
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
       <table border="0" id="tabdet">
          
   
        </table>
    </tr>
   </div>
    <table>
        <tr>
            <td width="456" align="right"></td>
            <td></td>
            <td>
            <td width="250" align="right">Total:<input type="text" name="txtTotal" size="8" readonly/>
        </tr>
        <tr>
            <td align="center"><button id="btnAprobar"><img src="imgs/icons/finish.png" alt="x" />&nbsp; Aprobar Pedido</button>

            <td align="right" colspan="3" width="550">
            <button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Nuevo</button>    
            <button id="btnGuarar"><img src="imgs/disk.gif" alt="x" />&nbsp; Guardar</button>
            <button id="btnAnular"><img src="imgs/button_cancel.png" alt="x" />&nbsp; Anular</button>
            <button id="btnPrevio"><img src="imgs/printer.png" alt="x" />&nbsp; Previo</button>
            <button id="btnImprimir"><img src="imgs/printer.png" alt="x" />&nbsp; Imprimir</button>
            <button id="btnCerrar" onclick="window.close(this)"><img src="imgs/exit.gif" alt="x" />&nbsp; Cerrar</button> 
            </td>
        </tr>
    </table>