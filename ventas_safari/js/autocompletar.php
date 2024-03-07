  <link rel="stylesheet" href="css/jquery-autocomplete-ui.min.css" type="text/css" /> 
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <meta charset="utf-8">
<script type="text/javascript">
    $(function() {

            //autocomplete
            $(".auto").autocomplete({
                    source: "phpProcess/autocompletarCliente.php",
                    minLength: 1
            });				

    });
    
     $(function() {

            //autocomplete
            $(".venta").autocomplete({
                    source: "phpProcess/autocompletarVendedor.php",
                    minLength: 1
            });				

    });
    
    $(function() {

            //autocomplete
            $(".zona").autocomplete({
                    source: "phpProcess/autocompletarZona.php",
                    minLength: 1
            });				

    });
    
    $(function() {

            //autocomplete
            $(".insumo").autocomplete({
                    source: "phpProcess/autocompletarProducto.php",
                    minLength: 1
            });				

    });
    
    $(function() {

            //autocomplete
            $(".tienda").autocomplete({
                    source: "phpProcess/autocompletarTienda.php",
                    minLength: 1
            });				

    });
    
    $(function() {

            //autocomplete
            $(".chofer").autocomplete({
                    source: "phpProcess/autocompletarChofer.php",
                    minLength: 1
            });				

    });
    
    $(function() {

            //autocomplete
            $(".banco").autocomplete({
                    source: "phpProcess/autocompletarBanco.php",
                    minLength: 1
            });				

    });
    </script>
