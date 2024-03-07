<head>
    <meta charset="utf-8" />
    <title>Ventana emergente jQuery modal</title>
    <link rel="stylesheet" href="css_master/jquery-ui.css" />
    <script src="css_master/jquery-1.8.2.js"></script>
    <script src="css_master/jquery.bgiframe-2.1.2.js"></script>
    <script src="css_master/jquery-ui.js"></script>
    <link rel="stylesheet" href="css_master/layout.css" />

    <script>
    function abrir_dialog() {
      $( "#iniciar" ).dialog({
          modal: true
      });
    };
    </script>
   	<script>
        $(function() {
        $( "#textbox" ).button();
        });
        
        $(function() {
        $( "#textbox1" ).button();
        });
     </script>
        <style>
        #textbox.ui-button
        {
        background: #FFFFFF;
        text-align: left;
        color: grey;
        font-size: 14px;
        border: 1px solid grey;
        cursor: text;
        }

        #textbox.ui-button:focus
        {
        border: 1px solid yellow;
        }
        #textbox1.ui-button
        {
        background: #FFFFFF;
        text-align: left;
        color: grey;
        font-size: 14px;
        border: 1px solid grey;
        cursor: text;
        }

        #textbox1.ui-button:focus
        {
        border: 1px solid yellow;
        }
        </style>
</head>
<body onload="abrir_dialog()" style="background:#ddd; width: 700px">
<center>
    <div id="iniciar" title="Log In" style="display:none;}">
<form action="phpProcess/validatelog.php" method="post">
	
            Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="textbox" name="admin" required="required" size="15" />
            <p>&nbsp;</p>
            Contraseña:&nbsp;<input type="password" id="textbox1" name="password_usuario" required="required" size="15" style="font-weight: bold;" />
            <p>&nbsp;</p>
            <center><input type="submit" class="button white" value="Iniciar Sesión" name="iniciar"></center>
			
</form>
        </div>
</center>
</body>
<?
?>