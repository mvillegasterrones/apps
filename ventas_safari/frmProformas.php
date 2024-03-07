<link href="css/frmProformas.css" media="screen" rel="stylesheet" type="text/css" />
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
  <meta charset="utf-8">
    <?php include 'js/autocompletar.php'; ?>
  <title>Emision Proforma</title>
  
  <script>
       function imprimir(){
           var t01=document.getElementById('cboDocumento').value;
           var t02=document.getElementById('cboSerie').value;
           var t03=document.getElementById('txtNumero').value;
           var t04=document.getElementById('txtCodigoCliente').value;
           var t05=document.getElementById('txtCliente').value;
           var t06=document.getElementById('cboDirAgencia').value;
           var t07=document.getElementById('cboMoneda').value;
           var t08=document.getElementById('txtCodigoVendedor').value;
           var t09=document.getElementById('txtVendedor').value;
           
           window.open("phpProcess/imprimirP.php?t1="+t01+"&t2="+t02+"&t3="+t03+"&t4="+t04+"&t5="+t05+"&t6="+t06+"&t7="+t07+"&t8="+t08+"&t9="+t09);
           
       }
   </script>
  </head>
<body>
<center>
    <div id="cliente">
        <form id="form1" action="" method="POST">
    <table border="0">
        <tr>
            <td align="right"><label>Nro.Doc.:</label><td><select id="cboDocumento" name="cboDocumento">
                    <?php 
                    filtrar_combo("select * from tipos_documento where tpdc_tipodoc ='PRF'");
                    ?>
                </select>
            <TD><select id="cboSerie" name="cboSerie">
                    <?php 
                            //filtrar_combo("")
                            session_start();
                            $empresa=$_SESSION['id_empresa'];
                            filtrar_combo("select empr_seriedoc from empresas where empr_id='$empresa'");
                    ?>
                </select>
                <input type="text" id="txtNumero" name="txtNumero" value="" size="8" maxlength="7"/>
            <td align="right"><label>Fecha:</label></td>
            <td><input type="date" id="txtFecha" name="txtFecha" value="" /></td>
                <td align="right"><label>TC:</label></td>
                <td><input type="text" id="txtTipoCambio" name="txtTipoCambio" value="" size="5" style="text-align: right" readonly/> </td>
                <td align="right"><label>Dcto Max.:</label></td>
                <td><input type="text" id="txtDescuentoMaximo" name="txtDescuentoMaximo" value="" size="5"  style="text-align: right" readonly/> </td>
        </tr>
        <tr>
            <td align="right"><label>Cliente:</label></td>
            <td colspan="2"><input type="text" id="txtCodigoCliente" name="txtCodigoCliente" onkeydown="keyPress()"  size="7" readonly/>
                <input type="text" id="txtCliente" name="txtCliente" size="30" class="auto"/>
            </td>
                
            <td align="right"><label>Direccion:</label></td>
            <td colspan="7"><select id="cboDirAgencia" name="cboDirAgencia" style="width: 100%">
                    <option>[Seleccione Direccion de Cliente]</option>
                    <?php 
                        //filtrar_combo_id("select zona_id, zona_nomb from zonas");
                    ?>
                </select>  
                </td>
        </tr>
        <tr>
            <td align="right"><label>Moneda:</label></td>
                <td>
                    <select id="cboMoneda" name="cboMoneda">
                    <option value="S">S</option>
                    <option value="D">D</option>
                </select>
                    </td>
                    <td align="right"><label>Vendedor:</label>
                        <input type="text"  id="txtCodigoVendedor" name="txtCodigoVendedor" size="1" readonly/>
                        <input type="text"  id="txtVendedor" name="txtVendedor" size="25" class="venta"/>
                
</td>
<td align="right"><label>Observaciones:</label></td>
            <td colspan="7">
                <input type="text" name="txtObservaciones" id="txtObservaciones" SIZE="57"/>
                <input type="button" id="verLog" value="VER LOG"/>
                </td>
                
        </tr>
    </table>
  <!--  </form>
     </div>
    <br>
    <div id="cliente"> 
        <form  action="" method="POST"> -->
  <br>
    <table>
        <tr style="background-color: #1E55A1; font-size: 12">
            <th width="90"><font color="white">Codigo</th>
            <Th width="150"><font color="white">Descripcion</th>
            <th width="40"><font color="white">SF</th>
            <th width="40"><font color="white">FC</th>
            <th width="40"><font color="white">IE</th>
            <th width="40"><font color="white">SP</th>
            <th width="40"><font color="white">IP</th>
            <th width="40"><font color="white">TKA</th>
            <th width="40"><font color="white">Cant.</th>
            <th width="40"><font color="white">Und. </th>
            <th width="40"><font color="white">P.Lista</th>
            <th width="40"><font color="white">Dscto</th>
            <th width="55"><font color="white">Dscto%</th>
            <th width="55"><font color="white">P.Venta</th>
            <th width="55"><font color="white">Importe </th>
            <th width="50"><font color="white"> </th>
        </tr>
        <tr>
            <td> <input type="text" id="txtCodigo" name="txtCodigo" size="12.5" readonly/></td>
            <td> <input type="text" id="txtDescripcion" name="txtDescripcion" size="31" class="insumo"/></td>
            <td> <input type="text" id="txtSSF" name="txtSSF"  size="1" value="0" onkeyup="sumarcantidades();"/></td>
            <td> <input type="text" id="txtSFC" name="txtSFC" size="1" value="0" onkeyup="sumarcantidades();"/></td>
            <td> <input type="text" id="txtSIE" name="txtSIE" size="1" value="0" onkeyup="sumarcantidades();"/></td>
            <td> <input type="text" id="txtSSP" name="txtSSP" size="1" value="0" onkeyup="sumarcantidades();"/></td>
            <td> <input type="text" id="txtSIP" name="txtSIP" size="1" value="0" onkeyup="sumarcantidades();"/></td>
            <td> <input type="text" id="txtSTK" name="txtSTK" size="1" value="0" onkeyup="sumarcantidades();"/></td>
            <td> <input type="text" id="txtCantidad" name="txtCantidad" onchange="porcDsct();" size="1" readonly/></td>
            <td> <input type="text" id="txtUnidad" name="txtUnidad" size="1" readonly/></td>
            <td> <input type="text" id="txtPLista" name="txtPLista" size="2"/></td>
            <td> <input type="text" id="txtDscto" name="txtDscto" onkeyup="porcDsct();" onchange="porcDsct();" size="2"/></td>
            <td> <input type="text" id="txtDsctoPorc" name="txtDsctoPorc" size="2" readonly/></td>
            <td> <input type="text" id="txtPVenta" name="txtPVenta" size="2" readonly/></td>
            <td> <input type="text" id="txtImporte" name="txtImporte" size="2"readonly/></td>
            <td align="center"><img src="imgs/disk.gif" id="ImgGraba">
                <img src="imgs/icons/cards_pencil.png" id="ImgNuevo">
                
        </tr>
        <tr>
            <td><input type="text" id="CodInternoInsumo" name="CodInternoInsumo" size="12.5" readonly/></td>
            <td align="right"><label>Stock:</label>
            <td> <input type="text" id="txtStock1" name="txtStock1" size="1" readonly/></td>
            <td> <input type="text" id="txtStock2" name="txtStock2" size="1" readonly/> </td>   
            <td> <input type="text" id="txtStock3" name="txtStock3" size="1" readonly/></td>    
            <td> <input type="text" id="txtStock4" name="txtStock4" size="1" readonly/> </td>   
            <td> <input type="text" id="txtStock5" name="txtStock5" size="1" readonly/></td>    
            <td> <input type="text" id="txtStock6" name="txtStock6" size="1" readonly/></td> 
            
            <td colspan="2" align="right"><label>P.Oferta</label></td>
            <td> <input type="text" id="txtPOferta" name="txtPOferta" size="2" readonly/></td> 
            <td colspan="5" align="right"><label>Cargar</label><img src="imgs/refresh.png" style="width: 20px;height: 20px" id="actualizar"></td>
        </tr>
    </table>
    
    </form>
</div>
    
<br>
    
    <table class="titulos">
        <tr style="background-color: #1E55A1; font-size:12">
            <th width="110"><font color="white">CODIGO</th>
            <Th width="220"><font color="white">DESCRIPCION</th>
            <th width="40"><font color="white">SF</th>
            <th width="40"><font color="white">FC</th>
            <th width="40"><font color="white">IE</th>
            <th width="40"><font color="white">SP</th>
            <th width="40"><font color="white">IP</th>
            <th width="40"><font color="white">TKA</th>
            <th width="45"><font color="white">Cant.</th>
            <th width="50"><font color="white">Und. </th>
            <th width="50"><font color="white">P.Lista</th>
            <th width="50"><font color="white">Dscto</th>
            <th width="55"><font color="white">ImpDscto</th>
            <th width="55"><font color="white">P.Venta</th>
            <th width="55"><font color="white">Importe </th>
            <th width="15"></th>    
        </tr>
    </table>
  
    <div class="contiene_tabla">
        <table id="tabdet">
          <?php      
                              include 'cnn/connections.php';

          ?>
        </table>
    </tr>
   </div>
    <table border="0" width="1010">
        <tr>
            <td align="right">Total:<input type="text" name="txtTotal" size="8"/>
        </tr>
        <tr>

            <td align="right" colspan="3" width="550">
                <button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Nuevo</button>    
            <button id="btnGuarar"><img src="imgs/disk.gif" alt="x" />&nbsp; Guardar</button>
            <button id="btnAnular"><img src="imgs/button_cancel.png" alt="x" />&nbsp; Anular</button>
            <button id="btnPrevio"><img src="imgs/printer.png" alt="x" />&nbsp; Previo</button>
            <button id="btnExcel"><img src="imgs/icons/excel.png" alt="x" disabled />&nbsp; Excel</button>
            <button id="btnImprimir" onclick="imprimir();"><img src="imgs/printer.png" alt="x" disabled />&nbsp; Imprimir</button>
            <button id="btnCerrar" onclick="window.close('frmProformas.php')"><img src="imgs/exit.gif" alt="x"/>&nbsp; Cerrar</button> 
        </tr>
    </table>
</center>
</body>

</html>