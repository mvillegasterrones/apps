<link href="css/frmConsultaStock.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include 'js/autocompletar.php'; ?>
        <title>Consulta de Stock de Productos</title>
        
    </head>
    <body>
    <center>
        <form>
            <table>
                <tr>
                    <td align="right">Codigo :</td>
                    <td widht="20px"><input type="text" id="txtCodigo" name="txtCodigo" size="7" readonly=""/></td>
                </tr>
                <tr>
                    <td align="right">Descripcion :</td>
                    <td><input type="text" id="txtDescripcion" name="txtDescripcion" size="70" class="insumo"/></td>
                </tr>
                    <td align="right">Marca :</td>
                    <td><input type="text" id="txtCodigoMarca" name="txtCodigoMarca" size="3" readonly/>
                    <input type="text" id="txtMarca" name="txtMarca" size="52" readonly/></td>
                <tr>
                    <td align="right">Unidad Medida :</td>
                    <td><input type="text" id="txtUnidadMedida" name="txtUnidadMedida" size="6" readonly/></td>
                </tr>
                    <td align="right">Cantidad x Caja :</td>
                    <td><input type="text" id="txtCantidadCaja" name="txtCantidadCaja" size="4" readonly/></td>
                <tr>
                    <td align="right">Unidad Medida Tienda :</td>
                    <td><input type="text" id="txtUnidadMedidaTienda" name="txtUnidadMedidaTienda" size="6" readonly/></td>
                </tr>
            </table>
           
            <table>
                <tr>
                    <td width="480px">
            <fieldset style="width: 400px">
                <legend>Stock de Empresas</legend>
                    <table>
                        <tr bgcolor="#242DAE">
                            <th width="50px"><font color="#FAF8F8">Alm</th>
                            <th width="70px"><font color="#FAF8F8">SF</th>
                            <th widt width="50px"h="70px"><font color="#FAF8F8">FC</th>
                            <th width="70px"><font color="#FAF8F8">IE</th>
                            <th width="70px"><font color="#FAF8F8">SP</th>
                            <th width="70px"><font color="#FAF8F8">IP</th>
                            <th width="70px"><font color="#FAF8F8">TKA</th>
                            <th width="80px"><font color="#FAF8F8">TOTAL</th>
                        </tr>
                    </table>
                
                <table>
                    <tr><th width="40px"  style="background: cyan">C</th>
                    
                        <td rowspan="2">
                            <div class="contiene_tabla">
                                <table border="0" border-color="red" id="tabdet">

                                </table>                            
                        </td></tr>
                            <tr><th width="40px"  style="background: cyan">A</th></tr>
                </table>
            </fieldset>
                    <td width="400px">
                        <fieldset>
                          <legend>Stock de Tiendas</legend>
                    <table>
                        <tr bgcolor="#242DAE">
                            <th width="70px"><font color="#FAF8F8">TIE</th>
                            <th width="70px"><font color="#FAF8F8">TFC</th>
                            <th width="70px"><font color="#FAF8F8">TSF1</th>
                            <th width="70px"><font color="#FAF8F8">TSF2</th>
                            <th width="70px"><font color="#FAF8F8">TSP</th>
                            <th width="70px"><font color="#FAF8F8">TIP1</th>
                            <th width="70px"><font color="#FAF8F8">TIP2</th>
                            
                        </tr>
                    </table> 
                          <div class="contiene_tabla2">
                              <table border="0" id="tabdet1">
       
                                </table> 
                          </div>
                          <table>
                              <tr>
                                  
                              </tr>
                          </table>
                        </fieldset>   
                    </td>
                </tr>
          </table>
            
            <br></br>
          
            <div class="DVtxtP"> 
            <table>
                <tr align="right">
                    <td>Precio S/. :<td><input type="text" id="txtPrecioSoles" name="txtPrecioSoles" readonly/>
                    <td>Precio $/. :<td><input type="text" id="txtPrecioDolares" name="txtPrecioDolares" readonly/>
                </tr>
                <tr align="right">
                    <td>Precio tienda S/. :<td><input type="text" id="txtPrecioTiendaSoles" name="txtPrecioTienddaSoles" readonly/>
                    <td>Precio tienda $/. :<td><input type="text" id="txtPrecioTiendaDlares" name="txtPrecioTienddaDolares" readonly/>
                </tr>
                <tr align="right">
                    <td>Precio Oferta S/. :<td><input type="text" id="txtPrecioOfertaSoles" name="txtPrecioOfertaSoles" readonly>
                    <td>Precio Oferta $/. :<td><input type="text" id="txtPrecioOfertaDlares" name="txtPrecioOfertaDolares" readonly/>
                </tr>
                <tr align="right">
                    <td>Precio Oferta Tda S/. :<td><input type="text" id="txtPrecioOfertaTdaSoles" name="txtPrecioOfertaTdaSoles" readonly/>
                    <td>Precio Oferta Tda $/. :<td><input type="text" id="txtPrecioOfertaTdaDlares" name="txtPrecioOfertaTdaDolares" readonly/>
                </tr>
            </table>
            </div>  
            
        </form>
        
        </center>
    </body>
</html>
