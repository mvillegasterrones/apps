 ﻿<?php
            session_start();
            if(!isset($_SESSION['usuario'])) 
            {
              header('Location: login.php'); 
              exit();
            }

        ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Menu del Sistema...</title>
        
        <script> 
//creamos la variable ventana_secundaria que contendrá una referencia al popup que vamos a abrir 
//la creamos como variable global para poder acceder a ella desde las distintas funciones 
var ventana_secundaria 

function abrirVentana(nombreVentana,ancho,alto){ 
//guardo la referencia de la ventana para poder utilizarla luego 
ventana_secundaria = window.open(nombreVentana,"ventana00","toolbar=no, scrollbars=no, location=no ,resizable=no, top=100, left=140, width="+ ancho +", height="+ alto +"");
} 

function cerrarVentana(){ 
//la referencia de la ventana es el objeto window del popup. Lo utilizo para acceder al método close 
ventana_secundaria.close() 
} 
</script> 
<script>
function opener() {
nwin=window.open("","newWin","toolbar=no,location= no,resizable=no,
width=200,height=200,left=100,top=100")
}
</script> 

    </head>
    <body>
       <center>
        <table>
            <!--<tr><td><a href="#" onclick='abrirVentana("frmConsultaStock.php",890,400);'>Consulta de Stock</a></td></tr>-->
            <tr><td><a href="javascript:window.opener('frmConsultaStock.php');">Consulta de Stock</a></td></tr>
            <tr><td><a href="#" onclick='abrirVentana("frmControlLetras.php",890,400);'>Control de Letras</a></td></tr>
            <tr><td><a href="#"  onclick='abrirVentana("frmEmisionBolFac.php",890,400);'>Emision de Facturas y Boletas</a></td></tr>
            <tr><td><a href="#"  onclick='abrirVentana("frmEmisionBolFac-texto.php",890,400);'>Emision de Facturas y Boletas - texto</a></td></tr>
            <tr><td><a href="#"  onclick='abrirVentana("frmEmisionNC.php",890,400);'>Emision de Ntas de Credito **</a></td></tr>
            <tr><td><a href="#"  onclick='abrirVentana("frmEmisionNC-texto.php",890,400);'>Emision de Ntas de Credito - Texto **</a></td></tr>
            <tr><td><a href="#"  onclick='abrirVentana("frmGuiaPedido.php",890,400);'>Guia de Pedido</a></td></tr>
            <tr><td><a href="#" onclick='abrirVentana("frmPlanillaCobranzas.php",890,400);'>Planilla de Conranzar **</a></td></tr>
            <tr><td><a href="#" onclick='abrirVentana("frmRegPedidos.php",890,400);'>Registro de Pedidos</a></td></tr>
            <tr><td><a href="#" onclick='abrirVentana("frmRenovacionLetras.php",890,400);'>Renovacion de Letras</a></td></tr>
            <tr><td><a href="#" onclick='abrirVentana("frmPercepcipnVenta.php",890,400);'>Percepcion Venta **</a></td></tr>
            <tr><td><a href="#" onclick='abrirVentana("frmEmisionProformas.php",890,400);'>Emision de Proformas</a></td></tr>
            <tr><td><a href="#" onclick='abrirVentana("frmDespachoTiendas.php",890,400);'>Despacho a Tiendas**(reporte)</a></td></tr>
            <tr><td><a href="#" onclick='abrirVentana("frmEmisionGuias.php",890,400);'>Emision de Guias**(reporte)</a></td></tr>
            <tr><td><a href="#" onclick='abrirVentana("frmEmisionGuiasTransportista.php",890,400);'>Emision de Guias Transportista**(reporte)</a></td></tr>
        </table>
        
        <a href="logout.php">Cerrar Sesión</a>
        
    </center>
    </body>
</html>
