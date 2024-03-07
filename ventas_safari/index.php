<link href="css/frmEmisionBolFac.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/defaultX.css" media="screen" rel="stylesheet" type="text/css" />

<script src="scripts/jquery-latest.js"></script>
<script src="scripts/jquery.min.js"></script>
<?php include('libreria.php'); ?>
<?php include('js/Querys.php'); ?>
<?php
            session_start();
            if(!isset($_SESSION['usuario'])&& !isset($_SESSION['empresa'])) 
            {
              header('Location: login.php'); 
              exit();
            }
?>
<html>
<head>
    <title>Seleccion de Empresa</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css_master/jquery-ui.css" />
    <script src="css_master/jquery-1.8.2.js"></script>
    <script src="css_master/jquery.bgiframe-2.1.2.js"></script>
    <script src="css_master/jquery-ui.js"></script>
    <link rel="stylesheet" href="css_master/layout.css" />
     
</head>
 <body style="background:#ddd;">
        <div id="empresa"  style="border: 1px solid; background-color: #8CF9CC; border-bottom: 3px solid; border-right: 3px solid; margin-top: 150px; margin-left: 470px; width: 400px; height: 310px"> 
        <form action="index1.php" method="post">
            <br>
            <table border="0">
            <?php
                $ejecuta=new Querys();
                $ejecuta->listar_tiendas();
            ?>
            </table>  
            <br>
           <center><input type="submit" class="button white" value="Seleccionar" id="seleccionar" name="seleccionar"></center>
           <br>
        </form>
            
    </div>    
   </body> 
</html>