<link href="css/frmEmisionGuiasDeTransportista.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />

<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<script src="js/jsProforma/General.js"></script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/frmEmisionGuiasTransportista.js"></script>

<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>
<html>
<head>
    <?php include 'js/autocompletar.php'; ?>
<title>Emision de Guias Transportista</title>
 
</head>

<body style="font-size: 8">

<center>
    <div id="cliente">
    <form action="" method="POST">
        <table id="tblEmp">
            <tr>
                <td align="right"><label>Documento:<font color="red"><b>*</b></font></label></td>
                <td>
                    <select id="cboDocumento">
                        <?php filtrar_combo("SELECT tpdc_tipodoc FROM tipos_documento WHERE tpdc_tipodoc='GRT'"); ?>
                    </select>
                    <select id="cboSerie">
                        <?php
                        session_start();
                        $empresa=$_SESSION['id_empresa'];
                        filtrar_combo("SELECT empr_seriedoc FROM empresas WHERE empr_id='$empresa'");
                        ?>
                    </select>
                    <input type="text" name="txtNumero" id="txtNumeero" size="4" maxlength="7" />
                    <input type="text" name="txtNombre" id="txtNombre" value="GUIA REMISION TRANSPORTISTA" SIZE="26" readonly/>
                </td>
                <td align="right"><label>Fecha Emision:<font color="red"><b>*</b></font></label> </td>
                <td><input type="date" name="txtFechaEmision" id="txtFechaEmision" maxlength="10"/></td>
            </tr>
            <tr>
                <td align="right"><label>Empresa/Tienda:<font color="red"><b>*</b></font></label></td>
                <td>
                    <select id="cboEmpresaTienda">
                        <option>[Seleccione Empresa/Tienda]</option>
                        <?php
                        filtrar_combo_id("SELECT empr_id, empr_nomb FROM empresas");
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><label>Guia de Remision:</label></td>
                <td>
                    <input type="text" name="txtGuiaSerie" id="txtGuiaSeria" size="1" maxlength="3"/>
                    <input type="text" name="txtGuiaNumero" id="txtGuiaNumero" size="6" maxlength="10"/>
                </td>
            </tr>
            <tr>
                <td align="right"><label>Cliente:<font color="red"><b>*</b></font></label></td>
                <td>
                    <input type="text" name="txtCodigoCliente" id="txtCodigoClienteX" size="9" readonly />
                    <input type="text" name="txtCliente" id="txtClienteX" size="30" readonly />
                </td>
                <td align="right"><label>RUC/DNI:<font color="red"><b>*</b></font></label></td>
                <td><input type="text" id="txtRUCDNI" name="txtRUCDNI" size="9" readonly/></td>
                
            </tr>  
            <tr>
                <td align="right"><label>Direccion Llegada:<font color="red"><b>*</b></font></label></td>
                <td colspan="3">
                    <input type="text" name="txtDirLlegada" id="txtDirLlegada" size="85" readonly />
                </td>
            </tr>
            <tr>
                <td align="right"><label>Agencia:</label></td>
                <td>
                    <input type="text" name="txtCodigoAgencia" id="txtCodigoCliente" size="9" readonly />
                    <input type="text" name="txtAgencia" id="txtCliente" size="30" class="auto" />
                </td>
                <td align="right"><label>RUC/DNI:</label></td>
                <td><input type="text" id="txtCodigoCliente1" name="txtRUCDNIagencia" size="9" readonly/></td>
            </tr>
            <tr>
                <td align="right"><label>Direccion de Agencia:</label></td>
                <td colspan="3">
                    <select id="cboDirAgencia" name="cboDirAgencia" style="width: 540">
                        <option>[Seleccione Direccion de Agencia]</option>
                        <?php ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><label>Remitente:<font color="red"><b>*</b></font></label></td>
                <td>
                    <input type="text" name="txtCodigoRemitente" id="txtCodigoRemitente" size="9" readonly />
                    <input type="text" name="txtRemitente" id="txtRemitente" size="30" readonly/>
                </td>
                <td align="right"><label>RUC/DNI:<font color="red"><b>*</b></font></label></td>
                <td><input type="text" id="txtRUCDNIRemitente" name="txtRUCDNIRemitente" size="9" readonly/></td>
            </tr>
            <tr>
                <td align="right"><label>Direccion de Partida:<font color="red"><b>*</b></font></label></td>
                <td colspan="3">
                    <input type="text" name="txtDirPartida" id="txtDirPartida" size="85" readonly />
                </td>
            </tr>
            <tr>
                <td align="right"><label>Placa:<font color="red"><b>*</b></font></label></td>
                <td>
                    <input type="text" name="txtPlaca" id="txtPlaca" size="9"  />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>Cert.Inscr.:<font color="red"><b>*</b></font></label>
                    <input type="text" id="txtCertInscr" name="txtCertInscr" size="9" readonly />
                </td>
                <td align="right"><label>Marca:</label></td>
                <td><input type="text" id="txtMarca" name="txtMarca" size="9" readonly /></td>
            </tr>
            <tr>
                <td align="right"><label>Chofer:<font color="red"><b>*</b></font></label></td>
                <td>
                    <input type="text" id="txtChofer" size="30" class="chofer" />
                    &nbsp;&nbsp;
                    <label>Licencia:<font color="red"><b>*</b></font></label> 
                    <input type="text" id="txtLicencia" size="9" readonly />
                </td>
                
            </tr>
        </table>
    </form>
    </div>
    <table class="titulos">
        <tr class="headers">
        <!-- <tr style="background-color: #1E55A1; font-size: 12"> -->
            <Th width="580"><font color="white">Descripcion</th>
            <th width="40"><font color="white"></th>
            <th width="15"></th>    
        </tr>
        <tr style="background: #C8FFEC ">
            <td><input type="text" id="txtDescripcion" size="100" class="insumo"/></td>
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
    <table border="0" width="700">
        <tr>
            <td align="left">
            <button id="btnGuardar"><img src="imgs/disk.gif" alt="x" />&nbsp; Guarar</button>
            <button id="btnImprimir"><img src="imgs/printer.png" alt="x" />&nbsp; Imprimir</button>
            </td>
            <td align="right">
            <button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Nuevo</button>    
            <button id="btnAnular"><img src="imgs/button_cancel.png" alt="x" />&nbsp; Anular</button>
            <button id="btnCerrar" onclick="window.close(this)"><img src="imgs/exit.gif" alt="x" />&nbsp; Cerrar</button> 
            </td>
        </tr>
    </table>

</center>

</body>
</html>
