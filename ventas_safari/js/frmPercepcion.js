$//creamos la variable ventana_secundaria que contendrá una referencia al popup que vamos a abrir 
//la creamos como variable global para poder acceder a ella desde las distintas funciones 
var ventana_secundaria 

function abrirVentana(){ 
//guardo la referencia de la ventana para poder utilizarla luego 
ventana_secundaria = window.open("","ventanaI","toolbar=no, scrollbars=no, resizable=no, top=100, left=140, width=1060, height=450");
} 

function cerrarVentana(){ 
//la referencia de la ventana es el objeto window del popup. Lo utilizo para acceder al método close 
ventana_secundaria.close() 
} 

$(document).ready(function(){
          $("#btnIr").click(function(){
          tde=$("#txtDesde").val();
          tha=$("#txtHasta").val();
          
          $.ajax({url:"phpProcess/FillPercepcionVentaFechas.php",cache:false,type:"GET",data:{des:tde,has:tha},success:function(result){
                $("#tabdet").html(result);
           }});
         });
         })

$(document).ready(function(){
          $("#btnConsultar").click(function(){
          tCl=$("#txtCliente").val();
          if(tCl=="")
              {
                 windows.alert("Ingresar Nombre del Cliente");
              }
          else
          {        
          $.ajax({url:"phpProcess/FillPerceocionVentaCliente.php",cache:false,type:"GET",data:{cli:tCl},success:function(result){
                $("#tabdet").html(result);
           }});
          }
         });
         })
  
 $(document).ready(function(){
          $("#btnConsultar1").click(function(){
          tSP=$("#SPed").val();
          tSer=$("#txtSerie").val();
          tNum=$("#txtNumero").val();
          if(tSer=="")
              {
                 windows.alert("Ingresar Nombre del Cliente");
              }
          else
          {        
          $.ajax({url:"phpProcess/FillPerceocionVentaSerieNumero.php",cache:false,type:"GET",data:{sp:tSP,ser:tSer,num:tNum},success:function(result){
                $("#tabdet").html(result);
           }});
          }
         });
         }) 
         
  $(document).ready(function(){
          $("#btnCargarFvBv").click(function(){
          tSP=$("#txtNumeroBolFac").val();
          tNum=$("#txtNumeroBolFac").val();
          if(tNum=="")
              {
                 windows.alert("Ingresar Nombre del Cliente");
              }
          else
          {        
          $.ajax({url:"phpProcess/FillPercepcion.php",cache:false,type:"POST",data:{num:tNum},success:function(result){
                $("#tabdet").html(result);
                $("#txtTotalPercepcion").val($("#Total").html());
           }});
          }
         });
         }) 
     
    $(document).ready(function(){
          $("#btnGuarar").click(function(){
          tSP=$("#SPed").val();
          tSer=$("#cboSerie").val();
          tNum=$("#txtNumero").val();
          tDoc=$("#Doc").val();
          tNum1=$("#Numero").val();
          tFecha=$("#Fecha").val();
          tCobra=$("#Cobrado").val();
          tPP=$("#PorPerc").val();
          tP=$("#Total").val();
          tT=$("#Total1").val();
          tC=$("#txtCodigoCliente").val(); 
          tTc=$("#txtTipoCambio").val(); 
          
          if(tNum=="")
              {
                 windows.alert("Ingresar Nombre del Cliente");
              }
          else
          {        
          $.ajax({url:"phpProcess/RegPercepcion.php",cache:false,type:"POST",
              data:{tc:tTc,c:tC,sp:tSP,ser:tSer,num:tNum,fec:tFecha,doc:tDoc,num1:tNum1,cobra:tCobra,pp:tPP,p:tP,tt:tT},success:function(result){
               $("#tabdet").html(result);
              }});
          }
         });
         })