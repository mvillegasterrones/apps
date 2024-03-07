<?php
// Fichero que realiza la consulta en la base de datos y devuelve los resultados


if(isset($_POST["word"]))
{
	// Conectamos con la base de datos
	include 'php/cnn.php';

	if($_POST["word"]{0}=="*")
		$result=mysql_query("SELECT * FROM clientes WHERE clie_nomb LIKE '%".substr($_POST["word"],1)."%' and clie_nom<>'".$_POST["word"]."' ORDER BY clie_nomb LIMIT 10",$link);
	else
		$result=mysql_query("SELECT * FROM clientes WHERE clie_nomb LIKE '".$_POST["word"]."%' and clie_nomb<>'".$_POST["word"]."' ORDER BY clie_nomb LIMIT 10",$link);

	while($row=mysql_fetch_array($result))
	{
		// Mostramos las lineas que se mostraran en el desplegable. Cada enlace
		// tiene una funcion javascript que pasa los parametros necesarios a la
		// funcion selectItem
		echo "<a href=\"javascript:selectItem('".$_POST["idContenido"]."','".$row["clie_nomb"]."')\">".$row["clie_nomb"]."</a>";
	}
}
?>
