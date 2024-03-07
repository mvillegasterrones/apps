<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/frmEmisionDeNC-texto.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/Correlativos.js"></script>
<script src="js/frmNotaDeCradito.js"></script>
<script src="js/frmEmisionNC-texto.js"></script>

<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>
<?php include('js/autocompletar.php'); ?>

<html>
<head>
        
        <title>Nota de Credito - Texto</title>

        <script> 
        //creamos la variable ventana_secundaria que contendrá una referencia al popup que vamos a abrir 
        //la creamos como variable global para poder acceder a ella desde las distintas funciones 
        var ventana_secundaria 

        function abrirVentana(){ 
        //guardo la referencia de la ventana para poder utilizarla luego 
        ventana_secundaria = window.open("frmGuiaPedido.php","miventana","toolbar=no, scrollbars=no, resizable=no, top=100, left=140, width=1060, height=450");
        } 

        function cerrarVentana(){ 
        //la referencia de la ventana es el objeto window del popup. Lo utilizo para acceder al método close 
        ventana_secundaria.close() 
        } 
        
        
        //$(document).ready(function(){
        //  $('#btnImprimir').each(function(link) { 
        //    btnImprimir.onclick = function(){ 
        //        window.open("frmConsultaStock.php",'New Window'); return false; 
        //        }; 
        //    }); 
        // })
        </script>


</head>

<body>

<center>
 <div id="cliente">
     <form id="frmNC" action="" method="POST">
<table>
    <tr>
        <td align="right"><label>Documento:<font color="red"><b>*</b></font></label></td>
        <td>
            <select id="cboDocumento" name="cboDocumento">
                    <?php filtrar_combo("SELECT tpdc_tipodoc FROM tipos_documento WHERE tpdc_tipodoc='NC' or  tpdc_tipodoc='ND'"); ?>
            </select>
            <select id="cboSerie" name="cboSerie">
                        <?php
                        session_start();
                        $empresa=$_SESSION['id_empresa'];
                        filtrar_combo("SELECT empr_seriedoc FROM empresas WHERE empr_id='$empresa'");
                        ?>
            </select>
            <input type="text" name="txtNumero" id="txtNumero" size="4" maxlength="7" />
            <input type="text" name="txtNombre" id="txtNombre" value="NOTA DE CREDITO" SIZE="15" readonly/>
        <td width="100" align="right"><label>Fecha:<font color="red"><b>*</b></font></label></td>
        <td><input type="date" id="txtFechaEmision" name="txtFechaEmision"/></td>
    </tr>
    <tr>
        <td align="right"><label>Descontar a:<font color="red"><b>*</b></font></label></td>
        <td colspan="3">
            <select id="cboDocumento1">
                    <?php filtrar_combo("SELECT tpdc_tipodoc FROM tipos_documento WHERE tpdc_tipodoc='FAC' or tpdc_tipodoc='BOL'"); ?>
            </select>
            <input type="text" name="txtSerie" id="txtSerie" size="2" maxlength="3" />
            <input type="text" name="txtNumero1" id="txtNumero1" value="" SIZE="4" maxlength="7"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;
        </td>
        <td width="40px"></td>
        <td align="right">
            <label>Saldo:<font color="red"><b></b></font></label>
        </td>
        <td>
            <input type="text" id="txtSaldo" name="txtSaldo" size="9" value="0.00" style="text-align: right" readonly/>
        </td>
    </tr>
    <tr>
        <td align="right"><label>Cliente:<font color="red"><b>*</b></font></label></td>
        <td colspan="3">
            <input type="text" name="txtCodigoCliente" id="txtCodigoCliente" size="9" readonly/>
            <input type="text" name="txtCliente" id="txtCliente" size="57" readonly/>
        </td>
        <td width="40px"></td>
        <td align="right">
            <label>RUC/DNI:<font color="red"><b></b></font></label>
        </td>
        <td>
            <input type="text" id="txtRUCDNI" name="txtRUCDNI" size="9" value=""readonly/>
        </td>
    </tr>
    <tr>
        <td align="right"><label>Direccion:<font color="red"><b>*</b></font></label></td>
        <td colspan="3">
            <input type="text" name="txtDireccion" id="txtDireccion" size="72" readonly/>
        </td>
        <td width="40px"></td>
        <td rowspan="2" colspan="2">
            <div style="border: 1px solid; width: 150px;height: 45px">
                <input type="radio" name="rdx" id="rdx" checked value="DS" /><label>&nbsp;Descuento</label><br/>
                <input type="radio" name="rdx" id="rdx" value="DN" /><label>&nbsp;Devolucion Normal</label><br/>
                <input type="radio" name="rdx" id="rdx" value="DC" /><label>&nbsp;Devolucion por Cambio</label><br/>
            </div>
        </td>
    </tr>
    <tr>
        <td align="right"><label>Vendedor:<font color="red"><b>*</b></font></label></td>
        <td colspan="3">
            <input type="text" name="txtCodigoVendedor" id="txtCodigoVendedor" size="1" readonly/>
            <input type="text" name="txtVendedor" id="txtVendedor" size="20" readonly/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Moneda:<font color="red"><b></b></font>
                <input type="text" id="txtMoneda" name="txtMoneda" size="1" readonly/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
        </td>
        
    </tr>
	
</table>
</form>
</div>
    <table border="0" border-color=r"red" style="font-size: 12px">
	<tr bgcolor="#242DAE" >
            <th width="20px"></th>
            <th width="610px"><font color="#FAF8F8">Descripcion</th>
	    <th width="95px"><font color="#FAF8F8">Importe</th>
            <th width="40px"></th>
            <th width="15px"><font color="#FAF8F8">   </th>     
	</tr>
        <tr>
        
            <tr bgcolor="#C8FFEC" >
                <th></th>
                <th width="630px"><input type="text" id="txtDescripcion" name="txtDescripcion" class="" size="100%"/></th>
                <th width="95px"><input type="text" id="txtImporte" value="0.00" size="9" /></th>
            <th width="40px">
                <img src="imgs/disk.gif"/>
                <img src="imgs/cancel.png"/>
            </th>
            <th width="15px"><font color="#FAF8F8"> 
        </tr>
</table>
    
    <div class="contiene_tabla">
    <table border="0" id="tabdet">
        
        
    </table>
</div>
    <table border="0" width="793px">
        <tr>
            <td width="280px" ></td>
            <td align="right" style=" padding-right: 60px ">
                <table style="border: 1px seashell">
                    <tr>
                        <td width="80px" align="center"><label> Subtotal:</label></td>
                        <td><input type="text" id="txtSubTotal"  name="txtSubTotal" size="10" style="text-align: right" value="0.00" readonly="true" /></td>
                    </tr>
                    <tr>
                        <td width="80px" align="center"><label>IGV:</label></td>
                        <td><input type="text" id="txtSubIGV"  name="txtSubIGV" size="10" style="text-align: right" value="0.00" readonly="true" /></td>
                    </tr>
                    <tr>
                        <td width="80px" align="center"><label> Total:</label></td>
                        <td><input type="text" id="txtTotal"  name="txtTotal" size="10" style="text-align: right" value="0.00" readonly="true" /></td>
                    </tr>
                </table>
            </td>
            
        </tr>
        <tr>
            <td align="center"></td>

            <td align="right" colspan="3">
            <button id="btnNuevo"><img src="imgs/icons/rep-segprod.png" alt="x" />&nbsp; Nuevo</button>    
            <button id="btnGuarar"><img src="imgs/disk.gif" alt="x" />&nbsp; Guardar</button>
            <button id="btnAnular"><img src="imgs/button_cancel.png" alt="x" />&nbsp; Anular</button>
            <button id="btnPrevio"><img src="imgs/printer.png" alt="x" />&nbsp; Previo</button>
            <button id="btnImprimir"><img src="imgs/printer.png" alt="x" />&nbsp; Imprimir</button>
            <button id="btnCerrar" onclick="window.close('this')"><img src="imgs/exit.gif" alt="x" />&nbsp; Cerrar</button> 
        </tr>
    </table>
</center>


</body>
</html>
