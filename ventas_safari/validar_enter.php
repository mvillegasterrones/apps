<html>
    <head>
       <script> 
        function validar(e){ 
        tecla = (document.all) ? event.keyCode : e.which; 
        if (tecla==13) return true; 
        } 
        </script>  
    </head>
    <body>
        <input type="text" onkeydown="validar()" onkeyup="validar()"> 
    </body>
</html>


