<!DOCTYPE html>
<link href="css/frmEmisionBolFac.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />
<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>

<?php
            session_start();
            if(!isset($_SESSION['usuario']) && !isset($_SESSION['empresa'])) 
            {
              header('Location: login.php'); 
              exit();
            }
            
               
?>
    <link rel="stylesheet" href="css_master/jquery-ui.css" />
    <script src="css_master/jquery-1.8.2.js"></script>
    <script src="css_master/jquery.bgiframe-2.1.2.js"></script>
    <script src="css_master/jquery-ui.js"></script>
    <link rel="stylesheet" href="css_master/layout.css" />

<html dir="ltr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0">
	<title>Principal</title>
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="index_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
    
            <script> 
            //creamos la variable ventana_secundaria que contendrá una referencia al popup que vamos a abrir 
            //la creamos como variable global para poder acceder a ella desde las distintas funciones 
            var ventana_secundaria 

            function abrirVentana(nombreVentana,ancho,alto){ 
            //guardo la referencia de la ventana para poder utilizarla luego 
            ventana_secundaria = window.open(nombreVentana,"miventana","toolbar=no, scrollbars=no, location=no ,resize=no, top=100, left=140, width="+ ancho +", height="+ alto +"");
            } 

            function cerrarVentana(){ 
            //la referencia de la ventana es el objeto window del popup. Lo utilizo para acceder al método close 
            ventana_secundaria.close() 
            } 
            </script> 

</head>
<body ontouchstart="" style="background-color:#EBEBEB">
<!-- Start css3menu.com BODY section -->
<div id="empresa" title="Seleccione Empresa" style="display:none;}"> <!-- style="border: 1px solid; background-color: #8CF9CC; border-bottom: 3px solid; border-right: 3px solid"> -->
        <form name="frm">
            <table border="0">
            <?php
                $ejecuta=new Querys();
                $ejecuta->listar_tiendas();
            ?>
            </table>
        </form>
</div>
<input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
<ul id="css3menu1" class="topmenu">
	<li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
	<li class="topfirst"><a href="#" target="_parent" style="height:18px;line-height:18px;"><span>Ventas</span></a>
	<ul>
		<li class="sep"><img src="index_files/css3menu1/images/hsep.png" alt=""/></li>
		<li><a href="#" onclick='abrirVentana("frmEmisionProformas.php",890,415);'><img src="index_files/css3menu1/proforma.png" alt=""/>Emision de Proformas</a></li>
		<li><a href="#" onclick='abrirVentana("frmRegPedidos.php",890,415);'><img src="index_files/css3menu1/combos.png" alt=""/>Registro de Pedidos - Central</a></li>
		<li><a href="#" onclick='abrirVentana("frmRegPedidos-tienda.php",890,415);'><img src="index_files/css3menu1/shop.png" alt=""/>Registro de Pedidos - Tienda</a></li>
		<li><a href="#" onclick='abrirVentana("frmDespachoTiendas.php",890,415);'><img src="index_files/css3menu1/shipping.png" alt=""/>Despacho a Tienda</a></li>
		<li class="sep"><img src="index_files/css3menu1/images/hsep.png" alt=""/></li>
		<li><a href="#" onclick='abrirVentana("frmRegPedidos-ate.php",890,415);'><img src="index_files/css3menu1/trolley.png" alt=""/>Registro de Pedidos - Ate</a></li>
		<li class="sep"><img src="index_files/css3menu1/images/hsep.png" alt=""/></li>
		<li><a href="#" onclick='abrirVentana("frmEmisionGuias.php",890,467);'><img src="index_files/css3menu1/cards_pencil.png" alt=""/>Emision de Guias</a></li>
		<li><a href="#" onclick='abrirVentana("frmEmisionBolFac.php",890,467);'><img src="index_files/css3menu1/fact-c-guia.png" alt=""/>Emision FV/BV</a></li>
		<li><a href="#" onclick='abrirVentana("frmEmisionBolFac-texto.php",890,467);'><img src="index_files/css3menu1/docs.png" alt=""/>Emision FV/BV - Texto</a></li>
		<li><a href="#" onclick='abrirVentana("frmEmisionGuiasTransportista.php",890,467);'><img src="index_files/css3menu1/transport.png" alt=""/>Emision de Guia Transportista</a></li>
		<li class="sep"><img src="index_files/css3menu1/images/hsep.png" alt=""/></li>
		<li><a href="#" onclick='abrirVentana("frmPercepcionVenta.php",890,467);'><img src="index_files/css3menu1/note_edit.png" alt=""/>Percepcion Venta</a></li>
		<li class="sep"><img src="index_files/css3menu1/images/hsep.png" alt=""/></li>
		<li><a href="#" onclick='abrirVentana("frmSeguimientoPedidos.php",890,400);'><img src="index_files/css3menu1/docs1.png" alt=""/>Seguimiento de Pedidos</a></li>
                <li><a href="#" onclick='abrirVentana("frmConsultaStock.php",890,400);'><img src="index_files/css3menu1/stockxtienda.png" alt=""/>Consulta Stock de Productos</a></li>
                
                <li class="sep"><img src="index_files/css3menu1/images/hsep.png" alt=""/></li>
	</ul></li>
	<li class="topfirst"><a href="#" target="_parent" style="height:18px;line-height:18px;"><span>Ctas. por Cobrar</span></a>
	<ul>
    <li><a href="#" onclick='abrirVentana("frmPlanillaCobranzas.php",920,430);'><img src="index_files/css3menu1/stockxtienda.png" alt=""/>Planilla de Cobranzas</a></li>
    <li><a href="#" onclick='abrirVentana("frmControlLetras.php",910,415);'><img src="index_files/css3menu1/stockxtienda.png" alt=""/>Control de Letras</a></li>
    <li><a href="#" onclick='abrirVentana("frmRenovacionLetras.php",700,320);'><img src="index_files/css3menu1/stockxtienda.png" alt=""/>Renovacion de Letras</a></li>
    <li><a href="#" onclick='abrirVentana("frmEmisionNC.php",815,437);'><img src="index_files/css3menu1/stockxtienda.png" alt=""/>Emision de Notas de Credito</a></li>
    <li><a href="#" onclick='abrirVentana("frmEmisionNC-texto.php",815,437);'><img src="index_files/css3menu1/stockxtienda.png" alt=""/>Emision de Notas de Credito - Texto</a></li>
	</ul></li>
    <li class="topmenu"><a href="#" style="height:18px;line-height:18px;">Caja</a></li>
	<li class="topmenu"><a href="logout.php" style="height:18px;line-height:18px;">Cerrar Sesion</a></li>
	<li class="toplast"><a href="#" style="height:18px;line-height:18px; width: 980px; text-align: right">
            <div id="txtTienda">
            <?php 
               $emp=new Querys();
               $id_empresa=$_POST['rdx'];
               $emp->obtener_tienda($id_empresa);
               $_SESSION['id_empresa']=$id_empresa;
               echo $_SESSION['usuario'];echo ': ';echo $_SESSION['empresa'];
           
            ?>
            </div>
        </a></li>
        
</ul><p class="_css3m"><a href="http://css3menu.com/">drop down menu</a> by Css3Menu.com</p>
<!-- End css3menu.com BODY section -->

</body>
</html>

